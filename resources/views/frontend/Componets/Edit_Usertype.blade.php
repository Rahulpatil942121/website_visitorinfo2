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
            <div class="box box-primary" style="padding: 10px;">
                <div class="box-header">
                    <h3 class="box-title">{{$title}}</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form action="{{url('/Update-User-Type')}}" method="post">
                @csrf
                   <div class="form-group">
                       <span>User Type</span>
                       <input type="hidden" name="type_id" value="{{$type->id}}" class="form-control" required="">
                       <input type="text" name="User_Type" class="form-control" value="{{$type->type_name}}" placeholder="User Type" autocomplete="off" required="">
                        @if($errors->has('User_Type')) <p class="text-danger">{{ $errors->first('User_Type') }}</p>@endif
                   </div>
                   <div class="form-group">
                       <span>Status</span>
                        <select name="status" class="form-control" required="">
                            <option value="1" @if($type->status == 1) selected @endif>Active</option>
                            <option value="0" @if($type->status == 0) selected @endif>D-Active</option>
                        </select>
                         @if($errors->has('status')) <p class="text-danger">{{ $errors->first('status') }}</p>@endif
                   </div>
                   <div class="d-flex">
                       <button name="reset" class="btn btn-secondary btn-flat">Reset</button>
                       <button name="submit" class="btn btn-primary btn-flat">Submit</button>
                   </div>
               </form>
                        </div><!-- /.box -->
                    </div>
                </div>
            </section><!-- /.content