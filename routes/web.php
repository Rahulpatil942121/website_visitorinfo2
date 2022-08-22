<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admincontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/team', function () {
    //return view('welcome');
    if(Auth::User())
    {
       return redirect('/Dashboard'); 
    }
    return view('index');
});

Route::get('/', function () {
    //return view('welcome');
    if(Auth::User())
    {
       return redirect('/Dashboard'); 
    }
    return view('client_login');
});

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode1 = Artisan::call('config:cache');
    $exitCode2 = Artisan::call('view:clear');
    $exitCode3  = Artisan::call('route:clear');
    dd("Cache is cleared");
});

Route::post('/Submit-Login',[Admincontroller::class, 'Submit_login']);
Route::post('/Client-Login',[Admincontroller::class, 'Client_Login']);

Route::get('/logout', [Admincontroller::class,'logout']);

Route::get('/Product/{product_slug}', [Admincontroller::class,'Product_link']);


Route::group(['middleware'=>'Auth_Login'],function()
{
    Route::get('Dashboard', [Admincontroller::class, 'Dashboard']);

    Route::get('/Product-List', [Admincontroller::class, 'Product_List']);
    Route::get('/Portal-List', [Admincontroller::class, 'Portal_List']);
    Route::get('/Add-Product', [Admincontroller::class, 'Add_Product']);
    Route::get('/Visitor-List', [Admincontroller::class, 'Visitor_List']);
    
    Route::get('/Edit-Portal/{portal_id}', [Admincontroller::class, 'Edit_Portal']);
    Route::get('/Delete-Portal/{portal_id}', [Admincontroller::class, 'Delete_Portal']);
    
    Route::get('/Edit-Product/{product_id}', [Admincontroller::class, 'Edit_Product']);
    Route::get('/Delete-Product/{product_id}', [Admincontroller::class, 'Delete_Product']);

    Route::post('/Add-Portal', [Admincontroller::class, 'Add_Portal']);    
    Route::post('/Submit-Product', [Admincontroller::class, 'Submit_Product']);
    
    Route::post('/Update-Portal', [Admincontroller::class, 'Update_Portal']);
    Route::post('/Update-Product', [Admincontroller::class, 'Update_Product']); 
    
    
    Route::get('/Users-List', [Admincontroller::class, 'Users_List']);
    Route::get('/Add-User', [Admincontroller::class, 'Add_User']);
    Route::get('/Edit-User/{user_id}', [Admincontroller::class, 'Edit_User']);

    Route::get('/User-Status/{user_id}', [Admincontroller::class, 'User_Status']);
    
    
    Route::post('/Submit-Client', [Admincontroller::class, 'Submit_Client']);
    Route::post('/Submit-User', [Admincontroller::class, 'Submit_User']);
    Route::post('/Update-User', [Admincontroller::class, 'Update_User']);


    Route::get('/Users-Type-List', [Admincontroller::class, 'Users_Type_List']);
    Route::get('/Edit-Type/{type_id}', [Admincontroller::class, 'Edit_Type']);
    Route::get('/Delete-Type/{type_id}', [Admincontroller::class, 'Delete_Type']);

    Route::post('/Add-User-Type', [Admincontroller::class, 'Add_User_Type']);
    Route::post('/Update-User-Type', [Admincontroller::class, 'Update_User_Type']);
    
    
    Route::get('/Profile', [Admincontroller::class, 'Profile']);

    Route::post('/Upload-Profile-Image', [Admincontroller::class, 'Upload_Profile_Image']);
    Route::post('/Change-Password', [Admincontroller::class, 'Change_Password']);

    Route::get('/Company-List', [Admincontroller::class, 'Company_List']);
    Route::get('/Status-Comapny/{comp_id}', [Admincontroller::class, 'Status_Comapny']);
    Route::get('/Edit-Comapny/{comp_id}', [Admincontroller::class, 'Edit_Comapny']);

    Route::post('/Add-Company', [Admincontroller::class, 'Add_Company']);
    Route::post('/Update-Company', [Admincontroller::class, 'Update_Company']);
    
    // Route::get('Delete-State/{id}', [Admincontroller::class, 'Delete_State']);

    // Route::post('/Submit-City', [Admincontroller::class, 'Submit_City']);
    

    // Route::get('Edit-City/{id}', [Admincontroller::class, 'Edit_City']);
    // Route::get('Delete-City/{id}', [Admincontroller::class, 'Delete_City']);
    

    
    Route::get('/Customer-Logout', 'Frontend\Frontendcontroller@Customer_Logout');
    Route::get('/Pending-Orders', 'Frontend\Frontendcontroller@Pending_Orders');
    Route::get('/View-OrderList/{order_id}', 'Frontend\Frontendcontroller@View_OrderList');
    Route::get('/View-ConfirmOrders', 'Frontend\Frontendcontroller@View_ConfirmOrders');
    Route::get('/Delete-OrderProduct/{Product_id}', 'Frontend\Frontendcontroller@Delete_OrderProduct');
    Route::get('/Change-OrderStatus/{order_id}', 'Frontend\Frontendcontroller@Change_OrderStatus');

    Route::get('/View-ConfirmOrderList/{order_id}', 'Frontend\Frontendcontroller@View_ConfirmOrderList');
    
    

    Route::post('/Submit-CustOrder', 'Frontend\Frontendcontroller@Submit_CustOrder');
    


   
});
