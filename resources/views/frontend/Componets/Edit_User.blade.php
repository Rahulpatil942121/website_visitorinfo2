<section class="content-header">
    <h1>
    {{$title}}
    </h1>
    <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Blank page</li>
    </ol> -->
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-8 m-auto">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">{{$title}}</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{url('/Update-User')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">  
                                <label for="exampleInputEmail1">Select Type<small class="text-danger h4">*</small></label>
                                <input type="hidden" name="user_id" class="form-control" value="{{$User->id}}" required="">
                                <select class="form-control" id="ddltype" name="ddltype" required="">
                                    <option value="">Select Type</option>
                                    @foreach($Usertype as $list)
                                        <option value="{{$list->id}}" @if($User->role == $list->id) selected @endif>{{$list->type_name}}</option>
                                    @endforeach                                    
                                </select>
                                @if($errors->has('ddltype')) <p class="text-danger">{{ $errors->first('ddltype') }}</p>@endif
                            </div>
                            <div class="form-group">  
                                <label for="exampleInputEmail1">Select Firm<small class="text-danger h4">*</small></label>
                                <select class="form-control" id="company" name="ddlcompany" required="">
                                    <option value="">Select Firm</option>
                                    @foreach($Company as $list)
                                        <option value="{{$list->id}}" @if($User->comp_name == $list->id) selected @endif>{{$list->company_name}}</option>
                                    @endforeach                                    
                                </select>
                                @if($errors->has('ddlcompany')) <p class="text-danger">{{ $errors->first('ddlcompany') }}</p>@endif
                            </div>
                            <div class="form-group">                                  
                                <label for="exampleInputEmail1">User Name <small class="text-danger h4">*</small></label>
                                <input type="text" name="user_name" placeholder="User Name" class="form-control" value="{{$User->name}}" required=""> 
                                @if($errors->has('user_name')) <p class="text-danger">{{ $errors->first('user_name') }}</p>@endif
                            </div> 
                            <div class="form-group">                                  
                                <label for="exampleInputEmail1">Login Email <small class="text-danger h4">*</small></label>
                                <input type="email" name="login_email" placeholder="Login Email ID" class="form-control" value="{{$User->email}}" required=""> 
                                @if($errors->has('login_email')) <p class="text-danger">{{ $errors->first('login_email') }}</p>@endif
                            </div>
                            <div class="form-group">                                  
                                <label for="exampleInputEmail1">Contact No. <small>(Optional)</small></label>
                                <input type="text" name="contact_no" class="form-control" value="{{$User->contact_no}}" placeholder="Contact No. (Only Number)" minlength="10" maxlength="10" autocomplete="off" required="">
                                @if($errors->has('contact_no')) <p class="text-danger">{{ $errors->first('contact_no') }}</p>@endif
                            </div>                            
                            <div class="form-group">
                               <span>Status <small class="text-danger h4">*</small></span>
                                <select name="status" class="form-control" required="">
                                    <option value="1" @if($User->status == 1) selected @endif >Active</option>
                                    <option value="0" @if($User->status == 0) selected @endif>D-Active</option>
                                </select>
                           </div>
                            </div><!-- /.box-body -->
                            <div class="box-footer">
                                <button type="reset"  class="btn btn-secondary">Reset</button>
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                        </div><!-- /.box -->
                    </div>
                </div>
            </section><!-- /.content --->