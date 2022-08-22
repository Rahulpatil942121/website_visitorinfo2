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
                <a href="{{url('/Add-Product')}}" class="btn btn-primary btn-sm btn-flat" style="float: right;margin-right: 40px;margin-bottom: 2px;">Add Product</a>
            </div>
            
            <div class="box-body table-responsive" style="overflow: scroll!important;width: 100%!important;">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Product Name</th>
                            <th>Portal</th>
                            <th>Product Link</th>
                            <th>Share Link</th>
                            <th>Visitor</th>
                            <th>Status</th>
                            <th>Action</th>                            
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1; @endphp
                        @foreach($Products as $list)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$list->product_name}}</td>
                            <td>{{$list->portal->protal_name}}</td>
                            <td>{{$list->product_link}}</td>
                            <td>{{url("/Product/$list->share_link")}}</td>
                            <td style="text-align: center;color: red;">{{$list->visitor}}</td>
                            <td><span class="btn btn-sm">@if($list->status == 1) Active @else D-Active @endif</span></td>
                            <td>                                 
                                <a href="{{url('/Edit-Product')}}/{{$list->id}}" class="btn btn-info btn-sm" style="margin: 0px 2px 2px 0px;"><i class="fa fa-fw fa-edit"></i></a>
                                <a href="{{url('/Delete-Product')}}/{{$list->id}}" class="btn btn-danger btn-sm mb-1 btn_delete"><i class="fa fa-fw fa-trash-o"></i></a>                                 
                            </td>                             
                        </tr>
                        @endforeach                       
                        
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>No.</th>
                        <th>Product Name</th>
                        <th>Portal</th>
                        <th>Product Link</th>
                        <th>Share Link</th>
                        <th>Visitor</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                </table>
                </div><!-- /.box-body -->
                </div><!-- /.box -->
                
                </section><!-- /.content