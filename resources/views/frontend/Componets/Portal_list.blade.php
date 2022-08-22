 
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
            <!-- <h3 class="box-title">Data Table With Full Features</h3> -->
            <!-- --------------------------------- -->
                <div class="d-flex">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-unstyled">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <!-- --------------------------------- -->
        </div><!-- /.box-header -->
            <div class="" style="">
                <span class="btn btn-primary btn-sm btn-flat" style="float: right;margin-right: 40px;margin-bottom: 2px;" data-toggle="modal" data-target="#myModal">Add Portal</span>
            </div>
            
            <div class="box-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Portal Name</th>
                            <th>Status</th>
                            <th>Action</th>                            
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1; @endphp
                        @foreach($Portal as $list)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$list->protal_name}}</td>
                            <td>@if($list->status == 1) Active @else D-Active @endif</td>
                            <td>                                
                                <a href="{{url('/Edit-Portal')}}/{{$list->id}}" class="btn btn-info btn-sm" style="margin-right: 5px;"><i class="fa fa-fw fa-edit"></i></a>
                               <a href="{{url('/Delete-Portal')}}/{{$list->id}}" class="btn @if($list->status == 1) btn-danger @else btn-success @endif btn-sm btn_delete" title="Change Status">@if($list->status == 1) D-Active @else Active @endif</a>
                            </td>                             
                        </tr>
                        @endforeach                       
                        
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>No.</th>
                        <th>Portal Name</th>
                        <th>Status</th>
                        <th>Action</th> 
                    </tr>
                    </tfoot>
                </table>
                </div><!-- /.box-body -->
                </div><!-- /.box -->
                
            </section><!-- /.content -->

           <!-- The Modal -->
        <div class="modal" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Add Portal</h4>
               <!--  <button type="button" class="close" data-dismiss="modal">&times;</button> -->
              </div>
              <!-- Modal body -->
              <div class="modal-body">
               <form action="{{url('/Add-Portal')}}" method="post">
                @csrf
                   <div class="form-group">
                       <span>Portal Name</span>
                       <input type="text" name="portal_name" class="form-control" autocomplete="off" placeholder="Portal Name" required="">
                   </div>
                   <div class="form-group">
                       <span>Status</span>
                        <select name="status" class="form-control" required="">
                            <option value="1">Active</option>
                            <option value="0">D-Active</option>
                        </select>
                   </div>
                   <div class="d-flex">
                       <button name="reset" class="btn btn-secondary btn-flat">Reset</button>
                       <button name="submit" class="btn btn-primary btn-flat">Submit</button>
                   </div>
               </form>
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>

            </div>
          </div>
        </div> 

        <!-- ------------------------------------------