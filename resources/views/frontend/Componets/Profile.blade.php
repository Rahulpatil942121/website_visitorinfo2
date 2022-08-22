<section class="content-header">
        <h1>
        {{$title}}
        <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">{{$title}}</li>
        </ol>
</section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-6 text-center border">
                <div class="box box-info" style="padding-bottom: 10px;">
                    @if($Profile->image)
                        <img src="{{asset($Profile->image)}}" class="img-circle" id="profile_img" style="width: 200px;">
                    @else 
                        <img src="{{asset('assets/img/avatar3.png')}}" class="img-circle" id="profile_img" style="width: 200px;">
                    @endif                    
                    <div class="h2 text-danger" onclick="document.getElementById('files').click()"><i class="fa fa-fw fa-pencil-square"></i></div>
                    <form action="{{url('/Upload-Profile-Image')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="profile_image" id="files"  accept=".png, .jpg, .jpeg" style="display: none;" required="">
                        <button name="submit" id="btnimg_submit" style="display: none;">submit</button>
                    </form>
                    <p class="h3">{{$Profile->name}}</p>
                    <p class="h4"><small><i class="fa fa-fw fa-envelope"></i></small> {{$Profile->email}}</p>
                    @if($Profile->contact_no)
                    <p class="h4"><small><i class="fa fa-fw fa-phone"></i></small>{{$Profile->contact_no}}</p>
                    @php 
                        $user_type = DB::table('usertypes')->where('id',$Profile->role)->value('type_name');
                    @endphp
                    <p class="h4">{{$user_type}}</p>
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="card col-md-8 box box-primary" style="margin: auto;padding-bottom: 10px;">
              <div class="card-header text-center">
                <h3 class="card-title">Change Password</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{url('/Change-Password')}}" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Old Password</label>
                    <input type="password" class="form-control" name="old_password" id="exampleInputEmail1" placeholder="Enter Old Password" required="">
                     @if($errors->has('old_password')) <p class="alert alert-danger">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      {{ $errors->first('old_password') }}</p>@endif
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">New Password</label>
                    <input type="password" class="form-control" name="new_password" id="exampleInputPassword1" minlength="8" placeholder="New Password" required="">
                     @if($errors->has('new_password')) <p class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      {{ $errors->first('new_password') }}</p>@endif
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword2">Confirm Password</label>                    
                       <input type="password" class="form-control" name="confirm_password" id="exampleInputPassword2" minlength="8" placeholder="Confirm Password" required="">
                     @if($errors->has('confirm_password')) <p class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>{{ $errors->first('confirm_password') }}</p>@endif
                  </div>                   
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            </div>
        </div>
    </section><!-- /.content -->