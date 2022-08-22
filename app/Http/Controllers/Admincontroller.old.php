<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr; 
use App\Models\Productname;
use App\Models\Protalname;
use App\Models\Visitorinfo;
use App\Models\Usertype;
use Auth;
use Session;
use DB;

class Admincontroller extends Controller
{
    //


    public function Submit_login(Request $req)
    {
        //dd($req);
        $validated = $req->validate([
            'userid' => 'required|email',
            'password' => 'required',
        ]);
        $password = Hash::make($req->password);
       // dd($password);
        // $result1 = User::get();
        $userdata = array(
            'email'     => $req->userid,
            'password'  => $req->password
        );         
        if(Auth::attempt($userdata))
        {
             if(Auth::User()->role != 1)
            {
                // dd("Success");
                // dd(Auth::User()->role);
                // $req->session()->put('Admin_Login',true);
                // $req->session()->put('Admin_Id',Auth::User()->id);
                $data['flag'] = 1;
    
                Toastr::success("Hi ". Auth::User()->name);
    
                return redirect('/Dashboard');
               // return view('/frontend/Webviews/Manageviews',$data);
            }
            else
            {
                Auth::logout();
                $req->session()->flash('alert-danger', 'User Not Existing!!');                
                return back();
            }   
        }
        else 
        {
            $req->session()->flash('alert-danger', 'User Not Existing!!');
           // dd("Not Exsting");
           return back();
        }
    }
     // ------------------------------------------

    public function Client_Login(Request $req)
    {
        //dd($req);
        $validated = $req->validate([
            'userid' => 'required|email',
            'password' => 'required',
        ]);
        $password = Hash::make($req->password);
       // dd($password);
        // $result1 = User::get();
        $userdata = array(
            'email'     => $req->userid,
            'password'  => $req->password
        );         
        if(Auth::attempt($userdata))
        {
            if(Auth::User()->role == 1)
            {
                // dd("Success");
                // dd(Auth::User()->role);
                // $req->session()->put('Admin_Login',true);
                // $req->session()->put('Admin_Id',Auth::User()->id);
                $data['flag'] = 1;

                Toastr::success("Hi ". Auth::User()->name);

                return redirect('/Dashboard');
               // return view('/frontend/Webviews/Manageviews',$data);
            }
            else
            {
                Auth::logout();
                $req->session()->flash('alert-danger', 'Client Not Existing!!');                
                return back();
            }
        }
        else 
        {
            $req->session()->flash('alert-danger', 'Client Not Existing!!');
           // dd("Not Exsting");
           return back();
        }
    }


    // ====================================================

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    // ================================================
    public function Dashboard()
    {
        $data['flag'] = 1;
        $data['inline'] = 0;
        return view('/frontend/Webviews/Manageviews',$data);
    }   

    public function Product_List()
    {
        $data['flag'] = 2;
        $data['inline'] = 0;
        $data['title'] = "Product List";
        $data['Products'] = Productname::orderBy('id','DESC')->get();
        return view('/frontend/Webviews/Manageviews',$data);
    }

    public function Add_Product()
    {
        $data['flag'] = 4;
        $data['inline'] = 0;
        $data['title'] = "Add Product";
        $data['Portal'] = Protalname::all();
        return view('/frontend/Webviews/Manageviews',$data); 
    }

    public function Submit_Product(Request $req)
    {
        // dd($req);

        $validated = $req->validate([
            'ddlportal'=>'required|numeric',
            'product_name' => 'required|max:50',
            'product_link'=>'required|url',
            'product_desc' =>'nullable',
            'status' => 'required|numeric',
        ]);

        $product_slug = substr(str_replace(' ', '', $req->product_name),0,20);
        $product_slug = $product_slug.$req->ddlportal; 
        //dd($product_slug);
        if(DB::table('productnames')->where(['product_name'=>$req->product_name,'portal_id'=>$req->ddlportal])->doesntExist())
        {
            $data = new Productname;
            $data->product_name=$req->product_name;
            $data->portal_id=$req->ddlportal;
            $data->product_link=$req->product_link;
            $data->product_desc=$req->product_desc;
            $data->share_link=$product_slug; 
            $data->status=$req->status;                           
            $result = $data->save();

            if($result)
            {
                Toastr::success("Saved Successfully!!!");                
            }
            else
            {
                Toastr::error("Not Saved!!!"); 
            }
        }
        else
        {
            Toastr::error("Product Already Existing!!!"); 
        }    

        return redirect('/Product-List');    

       
    }
    
    // -------------------------
    public function Edit_Product($product_id)
    {
        if(DB::table('productnames')->where(['id'=>$product_id])->exists())
        {
            $data['flag'] = 7;
            $data['inline'] = 0;
            $data['title'] = "Update Product";
            $data['Products'] = Productname::where('id',$product_id)->first();
            $data['Portal'] = Protalname::where('status',1)->get();

            //dd($data);
            return view('/frontend/Webviews/Manageviews',$data);

        }
        else
        {
            Toastr::error("Not Exist!!!");
        }

        return back();
    }
    // ------------------------

    public function Update_Product(Request $req)
    {
        //dd($req);

        $validated = $req->validate([
            'product_id'=>'required|numeric',
            'ddlportal'=>'required|numeric',
            'product_name' => 'required|max:55',
            'product_link'=>'required|url',
            'product_desc' =>'nullable',
            'status' => 'required|numeric',
        ]);

        if(DB::table('productnames')->where(['product_name'=>$req->product_name,'portal_id'=>$req->ddlportal])->where('id','!=',$req->product_id)->doesntExist())
        {
            $result = DB::table('productnames')->where(['id'=>$req->product_id])->update(['product_name'=>$req->product_name,'portal_id'=>$req->ddlportal,
                'product_link'=>$req->product_link,'product_desc'=>$req->product_desc,
                'status'=>$req->status]);
            if($result)
            {
                Toastr::success("Updated Successfully!!!");
            }
            else
            {
                Toastr::error("Not Updated!!!");
            }

            return redirect('/Product-List');
        }
        else
        {
           Toastr::error("Product Already Existing!!!");  
        }    

        return back();
    }
 
    // ----------------------
    
    public function Delete_Product($product_id)
    {
         if(DB::table('productnames')->where(['id'=>$product_id])->exists())
        {
            if(DB::table('visitorinfos')->where(['product_id'=>$product_id])->doesntExist())
            { 
            
                $result = DB::table('productnames')->where(['id'=>$product_id])->delete();

                if($result)
                {
                    Toastr::success("Product Deleted Successfully!!!");
                }
                else
                {
                    Toastr::error("Not Deleted!!!");
                }
            }
            else
            {
                Toastr::error("This Product Depending Visitor Records Exist!!!");
            }    
             
        }
        else
        {
            Toastr::error("Not Exist!!!");
        }

        return back();
    }
// ------------------------------------------
    public function Portal_List()
    {
        $data['flag'] = 3;
        $data['inline'] = 0;
        $data['title'] = "Portal List";
        $data['Portal'] = Protalname::orderBy('id','DESC')->get();
        return view('/frontend/Webviews/Manageviews',$data);
    }

    public function Add_Portal(Request $req)
    {
       // dd($req);

        $validated = $req->validate([
            'portal_name' => 'required|unique:protalnames,protal_name',
            'status' => 'required|numeric',
        ]);

        if(DB::table('protalnames')->where('protal_name',$req->portal_name)->doesntExist())
        {                
            $data = new Protalname;
            $data->protal_name=$req->portal_name; 
            $data->status=$req->status;                           
            $result = $data->save();

            if($result)
            {
                Toastr::success("Saved Successfully!!!");                
            }
            else
            {
                Toastr::error("Not Saved!!!"); 
            }
        }
        else
        {
            Toastr::error("Already Existing!!!"); 
        }  

        return back();  
    }
    // ------------------------
    public function Edit_Portal($portal_id)
    {
        if(DB::table('protalnames')->where(['id'=>$portal_id])->exists())
        {
            $data['flag'] = 6;
            $data['inline'] = 0;
            $data['title'] = "Update Portal";
            $data['Portal'] = Protalname::where('id',$portal_id)->first();
            return view('/frontend/Webviews/Manageviews',$data);

        }
        else
        {
            Toastr::error("Not Exist!!!");
        }

        return back();  
    }
    // ------------------------

    public function Update_Portal(Request $req)
    {
        //dd($req);
        $validated = $req->validate([
            'portal_id'=>'required',
            'portal_name' => 'required',
            'status' => 'required|numeric',
        ]);

        if(DB::table('protalnames')->where(['protal_name'=>$req->portal_name])->where('id','!=',$req->portal_id)->doesntExist())
        {
            $result = DB::table('protalnames')->where(['id'=>$req->portal_id])->update(['protal_name'=>$req->portal_name,'status'=>$req->status,]);
            if($result)
            {
                Toastr::success("Updated Successfully!!!");
            }
            else
            {
                Toastr::error("Not Updated!!!");
            }

            return redirect('/Portal-List');
        }
        else
        {
            Toastr::error("Already Existing!!!");
            return back();
        }        
    }
    // ------------------------------------------
     public function Delete_Portal($portal_id)
    {
        //dd($portal_id);

        if(DB::table('protalnames')->where(['id'=>$portal_id])->exists())
        {
            // if(DB::table('productnames')->where(['portal_id'=>$portal_id,'status'=>1])->doesntExist())
            // {
                $exist_status = Protalname::where(['id'=>$portal_id])->value('status');
                $ch_status = 0;
                if($exist_status == 0)
                {
                    $ch_status = 1;
                }

                $result = DB::table('protalnames')->where(['id'=>$portal_id])->update(['status'=>$ch_status,]);

                if($result)
                {
                    Toastr::success("Status Changed Successfully!!!");
                }
                else
                {
                    Toastr::error("Not Status Changed!!!");
                }
            // }
            // else
            // {
            //     Toastr::error("This Portal Depending Products Exist!!!");
            // }
        }
        else
        {
            Toastr::error("Not Exist!!!");
        }

        return back();
    }
  // -----------------------------------------------------


  public function Product_link($product_slug) 
  {    

    if (DB::table('productnames')->where(['share_link'=>$product_slug,'status'=>1])->exists()) 
    {
        $product_id = DB::table('productnames')->where(['share_link'=>$product_slug])->value('id');
        
        $user_api = $_SERVER['REMOTE_ADDR'];
        $ch=curl_init();
        curl_setopt($ch,CURLOPT_URL,"http://ip-api.com/json/$user_api");
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        $result=curl_exec($ch);
        $result=json_decode($result);
        //dd($_SERVER['HTTP_USER_AGENT']); // dd(date('d-m-Y H:i:s a')); //dd($_SERVER);
        //dd($result);
         
        if($result->status=='success')
        {
            $Lat = null;$Lon = null;$Device = null;
            // echo "Country:".$result->country.'<br/>';// echo "Region:".$result->regionName.'<br/>';
            // echo "City:".$result->city.'<br/>';
            if(isset($result->lat) && isset($result->lon))
            {
                // echo "Lat:".$result->lat.'<br/>';// echo "Lon:".$result->lon.'<br/>';
                $Lat = $result->lat;
                $Lon = $result->lon;
            }
            // echo "IP:".$result->query.'<br/>';
            $Country = $result->country;
            $Region = $result->regionName;
            $City = $result->city;
            $IP = $result->query;
            $zipcode = $result->zip;
            $network = $result->isp;
            $browser = $_SERVER['HTTP_USER_AGENT'];

            if(is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile")))
            {
                $Device = "MOBILE";
            }
            elseif(is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "tablet")))
            {
                $Device = "Tablet";
            }
            elseif(!is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile")) && !is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "tablet")))
            {
                $Device = "Desktop";
            }
            else
            {
                $Device = null;
            }
            
            // (D) MANY OTHERS...
                // $isWin = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "windows"));
                // $isAndroid = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "android"));
                // $isIPhone = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "iphone"));
                // $isIPad = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "ipad"));
                // $isIOS = $isIPhone || $isIPad ;
            //dd($Device);
        $data = new Visitorinfo;
        $data->product_id =$product_id;
        $data->country_name=$Country;
        $data->regionName=$Region;
        $data->city=$City;
        $data->ip=$IP; 
        $data->lat=$Lat;
        $data->lon=$Lon; 
        $data->zipcode=$zipcode; 
        $data->network_name=$network;
        $data->device=$Device;
        $data->browser=$browser;  
        $data->visit_datetime=date('d-m-Y H:i:s a');
        $save_info = $data->save();   

        if($save_info)
        {
            $result = Productname::where(['share_link'=>$product_slug])
                ->update([                     
                    'visitor'=>DB::raw('visitor + 1'),
                ]);

            $product_url = DB::table('productnames')->where(['share_link'=>$product_slug])->value('product_link');

            // header("Location: $product_url");
            return redirect($product_url);     
        }

        }
    }
    else
    {
        return back();
    }
  } 

 public function Visitor_List()
 {
    $data['flag'] = 5;
    $data['inline'] = 0;
    $data['title'] = "Visitor List";
    $data['Visitor'] = Visitorinfo::orderBy('id','DESC')->get();
    return view('/frontend/Webviews/Manageviews',$data);
 }

 // ------------------------------
 public function Users_List()
 {
    $data['flag'] = 8;
    $data['inline'] = 0;
    $data['title'] = "Users List";
    $data['Users'] = User::where('role','!=',0)->orderBy('id','DESC')->get();
    return view('/frontend/Webviews/Manageviews',$data);
 }

 public function Add_User()
 {
    $data['flag'] = 11;
    $data['inline'] = 0;
    $data['title'] = "Add User";
    $data['Usertype'] = Usertype::where('status',1)->get();
    return view('/frontend/Webviews/Manageviews',$data);
 }

 public function Submit_User(Request $req)
 {
    //dd($req);
     $validated = $req->validate([
            'ddltype' => 'required',
            'user_name'=>'required',
            'login_email'=>'required|email|unique:users,email',
            'contact_no'=>'required|digits:10|numeric',
            'status' => 'required|numeric',
        ]);

        $data = new User;
        $data->name=$req->user_name; 
        $data->email=$req->login_email;
        $data->password=Hash::make(12345678);
        $data->contact_no=$req->contact_no;
        $data->role=$req->ddltype;
        $data->status=$req->status;                           
        $result = $data->save();

        if($result)
        {
            if($req->ddltype != 1)
            {
                $page_url =  url('/team');
            }
            else
            {
                $page_url =  url('/');
            }
        // dd($page_url);
            $to =  $req->login_email;
            $subject = "Account Login Detail";

            $message = "<b>Your Account verification Email .</b><br/>";
            $message .= "<b>Login ID :- $req->login_email</b><br/>";
            $message .= "<b>Password :- 12345678</b><br/><br/>";
            $message .= '<a href="'.$page_url.'" target="_blank" style="padding:5px 10px;background:#007bff;color:white;">Login IN</a><br/>';
            
           // dd($message);
            $header = "From:support@duticorp.com \r\n";
            $header .= "MIME-Version: 1.0\r\n";
            $header .= "Content-type: text/html\r\n"; 

            $retval = mail ($to,$subject,$message,$header);
            
            Toastr::success("Login Detail Sended a Mail Successfully!!!");                
        }
        else
        {
            Toastr::error("Not Saved!!!"); 
            return back();
        }

        return redirect('/Users-List');
 }

 public function Edit_User($user_id)
 {
    //dd($req);

    if(DB::table('users')->where(['id'=>$user_id])->where('role','!=',0)->exists())
    {
        $data['flag'] = 12;
        $data['inline'] = 0;
        $data['title'] = "Update User";
        $data['User'] = User::where('id',$user_id)->first();
        $data['Usertype'] = Usertype::where('status',1)->get();
        return view('/frontend/Webviews/Manageviews',$data);

    }
    else
    {
        Toastr::error("Not Exist!!!");
    }

    return back();

 }

 public function Update_User(Request $req)
 {
    //dd($req);
    $validated = $req->validate([
            'user_id'=>'required',
            'ddltype' => 'required',
            'user_name'=>'required',
            'login_email'=>'required|email',
            'contact_no'=>'required|digits:10|numeric',
            'status' => 'required|numeric',
        ]);

     if(DB::table('users')->where('id','!=',$req->user_id)->where('role','!=',0)->where('email',$req->login_email)->doesntExist())
        {   

            $result = DB::table('users')->where(['id'=>$req->user_id])->update([
                'name'=>$req->user_name,
                'email'=>$req->login_email,
                'contact_no'=>$req->contact_no,
                'role'=>$req->ddltype,
                'status'=>$req->status]); 

            if($result)
            {
                Toastr::success("Updated Successfully!!!");                
            }
            else
            {
                Toastr::error("Not Updated!!!"); 
            }            
        }
        else
        {
            Toastr::error("Already Existing!!!"); 
            return back();
        }  

        return redirect('/Users-List');

 }

 public function User_Status($user_id)
 {
    if(DB::table('users')->where(['id'=>$user_id])->where('role','!=',0)->exists())
    {
       $exist_status = User::where(['id'=>$user_id])->value('status');
                $ch_status = 0;
                if($exist_status == 0)
                {
                    $ch_status = 1;
                }

            $result = DB::table('users')->where(['id'=>$user_id])->update([
                'status'=>$ch_status]); 

            if($result)
            {
                Toastr::success("Status Changed Successfully!!!");                
            }
            else
            {
                Toastr::error("Status Not Changed!!!"); 
            }              
    }
    else
    {
        Toastr::error("Not Exist!!!");
    }

    return back();
 }
// --------------------------------
 public function Users_Type_List()
 {
    $data['flag'] = 9;
    $data['inline'] = 0;
    $data['title'] = "Users Type List";
    $data['Usertype'] = Usertype::orderBy('id','DESC')->get();
    return view('/frontend/Webviews/Manageviews',$data);
 }

 public function Add_User_Type(Request $req)
 {
    //dd($req);

     $validated = $req->validate([
            'User_Type' => 'required|unique:usertypes,type_name',
            'status' => 'required|numeric',
        ]);

        if(DB::table('usertypes')->where(['type_name'=>$req->User_Type])->doesntExist())
        {                
            $data = new Usertype;
            $data->type_name=$req->User_Type; 
            $data->status=$req->status;                           
            $result = $data->save();

            if($result)
            {
                Toastr::success("Saved Successfully!!!");                
            }
            else
            {
                Toastr::error("Not Saved!!!"); 
            }
            
        }
        else
        {
            Toastr::error("Already Existing!!!"); 
        }  

        return back(); 
 }

 // -----------------------------

 public function Edit_Type($type_id)
 {
    //dd($type_id);
    if(DB::table('usertypes')->where(['id'=>$type_id])->exists())
    {
        $data['flag'] = 10;
        $data['inline'] = 0;
        $data['title'] = "Update Type";
        $data['type'] = Usertype::where('id',$type_id)->first();
        return view('/frontend/Webviews/Manageviews',$data);

    }
    else
    {
        Toastr::error("Not Exist!!!");
    }

    return back(); 
 }
 // ------------------------

 public function Update_User_Type(Request $req)
 {
    //dd($req);
    $validated = $req->validate([
            'type_id'=>'required',
            'User_Type' => 'required',
            'status' => 'required|numeric',
        ]);

        if(DB::table('usertypes')->where(['type_name'=>$req->User_Type])->where('id','!=',$req->type_id)->doesntExist())
        {   

            $result = DB::table('usertypes')->where(['id'=>$req->type_id])->update([
                'type_name'=>$req->User_Type,
                'status'=>$req->status]); 

            if($result)
            {
                Toastr::success("Updated Successfully!!!");                
            }
            else
            {
                Toastr::error("Not Updated!!!"); 
            }
           return redirect('/Users-Type-List');  
        }
        else
        {
            Toastr::error("Already Existing!!!"); 
        }  

        return back();
 }

 // ---------------------------

public function Delete_Type($type_id)
{
    //dd($type_id);
     if(DB::table('usertypes')->where('id',$type_id)->exists())
        {   

            $exist_status = Usertype::where(['id'=>$type_id])->value('status');
                $ch_status = 0;
                if($exist_status == 0)
                {
                    $ch_status = 1;
                }

            $result = DB::table('usertypes')->where(['id'=>$type_id])->update([
                'status'=>$ch_status]); 

            if($result)
            {
                Toastr::success("Status Changed Successfully!!!");                
            }
            else
            {
                Toastr::error("Status Not Changed!!!"); 
            }            
        }
        else
        {
            Toastr::error("Not Existing!!!"); 
        }  

        return back();
}

// ---------------------------------  

public function Profile()
{
    $data['flag'] = 13;
    $data['inline'] = 0;
    $data['title'] = "Profiles";
    $data['Profile'] = User::where('id',Auth::User()->id)->first();
    return view('/frontend/Webviews/Manageviews',$data);
}  

public function Upload_Profile_Image(Request $req)
{
    //dd($req);
    $validated = $req->validate([
            'profile_image'=>'required|image|mimes:png,jpg,jpeg',             
        ]);

        $ext_image = User::where('id',Auth::User()->id)->value('image');
        $file = $req->file('profile_image');
       //dd($file);
        $filename = 'logo_img'.time().'.'.$file->extension();
        $destinationPath = public_path('/images/Profile'); 
        $ap_image = url('/public/images/Profile/'.$filename);
        $image = 'public/images/Profile/'.$filename;

        $result = DB::table('users')->where('email', Auth::user()->email)->update([                      
                'image' => $image,
            ]);
        if($result)
        {
            $file->move($destinationPath, $filename);

            if($ext_image)
            {
                unlink($ext_image);
            }
            toastr()->success('Profile Image successfully');                     
        }
        else
        {
            toastr()->error('Profile Image Not Updated');                   
        } 

        return back();

}

// ---------------------------------

public function Change_Password(Request $req)
{
    //dd($req);
    $this->validate($req,[
            'old_password' => 'required',                 
            'new_password' => 'required|min:8',
            'confirm_password' => 'required|min:8|same:new_password',  
        ]);

     if(Auth::attempt(array('email' => Auth::user()->email, 'password' => $req->old_password)))
        {
            $result = DB::table('users')->where('email', Auth::user()->email)->where('role','!=',0)->update([                      
                'password' => Hash::make($req->new_password),
            ]);
            if($result)
            {
                $user_info['email'] = Auth::user()->email;
                $user_info['new_password'] = $req->new_password;
                $this->Send_email($user_info);
                toastr()->success('Password Updated successfully');
                Auth::logout();
                $req->session()->flash('alert-success', 'Password Updated successfully Check Email!!');
                return redirect('/');
                //return redirect('/logout');
            }
            else
            {
                toastr()->error('Your Account Password Not Updated');                   
            }
        }
        else
        {
            toastr()->error('old Password Not Match');              
        }

    return back();
}

// -----------------------------------
// ===============Send Email ==================

public function Send_email($data)
{
   //dd($data['email']);
    $password = $data['new_password'];
     $page_url =  url('/');
     
     if(Auth::user()->role != 1)
    {
        $page_url =  url('/team');
    }
   
    // dd($page_url);
    $to = $data['email'];
    $subject = "Account Login Detail";

    $message = "<b>Your Account Login Detail .</b><br/>";
    $message .= "<b>Login ID :- $to</b><br/>";
    $message .= "<b>Password :- $password </b><br/><br/>";
    $message .= '<a href="'.$page_url.'" target="_blank" style="padding:5px 10px;background:#007bff;color:white;">Login IN</a><br/>';
    
    //dd($message);
    $header = "From:support@duticorp.com \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n"; 

    $retval = mail ($to,$subject,$message,$header);
    //Toastr::success("Saved Successfully!!!");  
}
// -------------------------------------

// -------------------------------------
     

     public function Company_List()
     {
        $data['flag'] = 14;
        $data['inline'] = 0;
        $data['title'] = "Company List";
        $data['Company'] = Companyname::all();
        return view('/frontend/Webviews/Manageviews',$data);
     }

     public function Add_Company(Request $req)
     {
        //dd($req);

        $validated = $req->validate([
            'company_name' => 'required|unique:companynames,company_name',
            'status' => 'required|numeric',
        ]);

        if(DB::table('companynames')->where(['company_name'=>$req->company_name])->doesntExist())
        {                
            $data = new Companyname;
            $data->company_name=$req->company_name; 
            $data->status=$req->status;                           
            $result = $data->save();

            if($result)
            {
                Toastr::success("Saved Successfully!!!");                
            }
            else
            {
                Toastr::error("Not Saved!!!"); 
            }
            
        }
        else
        {
            Toastr::error("Already Existing!!!"); 
        }  

        return back();
     }


     public function Status_Comapny($comp_id)
     {
        //dd($comp_id);
        if(DB::table('companynames')->where('id',$comp_id)->exists())
        {   

            $exist_status = Companyname::where(['id'=>$comp_id])->value('status');
                $ch_status = 0;
                if($exist_status == 0)
                {
                    $ch_status = 1;
                }

            $result = DB::table('companynames')->where(['id'=>$comp_id])->update([
                'status'=>$ch_status]); 

            if($result)
            {
                Toastr::success("Status Changed Successfully!!!");                
            }
            else
            {
                Toastr::error("Status Not Changed!!!"); 
            }            
        }
        else
        {
            Toastr::error("Not Existing!!!"); 
        }  

        return back();
     }

     public function Edit_Comapny($comp_id)
     {
        //dd($comp_id);
        if(DB::table('companynames')->where(['id'=>$comp_id])->exists())
        {
            $data['flag'] = 15;
            $data['inline'] = 0;
            $data['title'] = "Update Comapny";
            $data['Company'] = Companyname::where('id',$comp_id)->first();
            return view('/frontend/Webviews/Manageviews',$data);

        }
        else
        {
            Toastr::error("Not Exist!!!");
        }
        return back(); 
    }

    public function Update_Company(Request $req)
    {
        //dd($req);

        $validated = $req->validate([
            'Company_id'=>'required',
            'Company_name' => 'required',
            'status' => 'required|numeric',
        ]);

        if(DB::table('companynames')->where(['company_name'=>$req->Company_name])->where('id','!=',$req->Company_id)->doesntExist())
        {                
            
            $result = DB::table('companynames')->where(['id'=>$req->Company_id])->update([
                'company_name'=>$req->Company_name,
                'status'=>$req->status]); 

            if($result)
            {
                Toastr::success("Updated Successfully!!!");                
            }
            else
            {
                Toastr::error("Not Updated!!!"); 
            }
            
        }
        else
        {
            Toastr::error("Already Existing!!!"); 
        }  

        return redirect('/Company-List');

    }
     
}
