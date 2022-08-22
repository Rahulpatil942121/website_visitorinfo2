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
                <!--<a href="{ {url('/Add-Product')} }" class="btn btn-primary btn-flat" style="float: right;margin-right: 40px;    margin-bottom: 2px;">Add Product</a>-->
            </div>
            
            <div class="box-body table-responsive" style="overflow: scroll!important;width: 100%!important;">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Product Name</th>
                            <th>Portal</th>
                            <th>Country</th>
                            <th>Region Name</th>
                            <th>City</th>
                            <th>Zipcode</th>
                            <th>Network</th>
                            <th>Date</th>
                            <th>Device</th>
                            <th>Browser</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1; @endphp
                        @foreach($Visitor as $list)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$list->product->product_name}}</td>
                            <td>{{$list->product->portal->protal_name}}</td>
                            <td>{{$list->country_name}}</td>
                            <td>{{$list->regionName}}</td>
                            <td>{{$list->city}}</td>
                            <td>{{$list->zipcode}}</td>  
                            <td>{{$list->network_name}}</td>
                            <td>{{$list->visit_datetime}}</td>
                            <td>{{$list->device}}</td>
                            <td>{{$list->browser}}</td>
                        </tr>
                        @endforeach                       
                        
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>No.</th>
                        <th>Product Name</th>
                        <th>Portal</th>
                        <th>Country</th>
                        <th>Region Name</th>
                        <th>City</th>
                        <th>Zipcode</th>
                        <th>Network</th>
                        <th>Date</th>
                        <th>Device</th>
                        <th>Browser</th>
                    </tr>
                    </tfoot>
                </table>
                </div><!-- /.box-body -->
                </div><!-- /.box -->
                
                </section><!-- /.content