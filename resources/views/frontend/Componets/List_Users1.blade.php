<!--Content Header (Page header) -->
<section class="content-header">
    <h1>
    {{$title}}
    </h1>
    <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
    </ol> -->
</section>
<!-- Main content -->
<section class="content">
    <div class="box">
        <div class="box-header">
           <!--  <h3 class="box-title">Data Table With Full Features</h3> -->
            </div><!-- /.box-header -->
            <div class="" style="">
                <a href="{{url('/Add-User')}}" class="btn btn-primary btn-flat btn-sm" style="float: right;margin-right: 40px;margin-bottom: 2px;">Add User</a>
            </div>
            
            <div class="box-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>User Name</th>
                            <th>Type</th>
                            <th>Contact No.</th>
                            <th>Login ID</th>                             
                            <th>Status</th>
                            <th>Action</th>                            
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1; @endphp
                        @foreach($Users as $list)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$list->name}}</td>
                        @php 
                            $user_type = DB::table('usertypes')->where('id',$list->role)->value('type_name');
                        @endphp
                            <td>{{$user_type}}</td>
                            <td>{{$list->contact_no}}</td>
                            <td>{{$list->email}}</td>                            
                            <td><span class="btn btn-sm">@if($list->status == 1) Active @else D-Active @endif</span></td>
                            <td>                                 
                                <a href="{{url('/Edit-User')}}/{{$list->id}}" class="btn btn-info btn-sm" style="margin: 0px 2px 2px 0px;"><i class="fa fa-fw fa-edit"></i></a>
                                <a href="{{url('/User-Status')}}/{{$list->id}}" class="btn btn-danger btn-sm mb-1 btn_delete">@if($list->status == 1) D-Active @else Active @endif</a>                                 
                            </td>                             
                        </tr>
                        @endforeach                       
                        
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>No.</th>
                        <th>User Name</th>
                        <th>Type</th>
                        <th>Contact No.</th>
                        <th>Login ID</th>                             
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                </table>
                </div><!-- /.box-body -->
                </div><!-- /.box -->
                
                </section><!-- /.content