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
                    <form role="form" action="{{url('/Update-Product')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                            <input type="hidden" name="product_id" class="form-control" value="{{$Products->id}}" required="">  
                                <label for="exampleInputEmail1">Select Portal<small class="text-danger h4">*</small></label>
                                <select class="form-control" id="ddlportal" name="ddlportal" required="">
                                    <option value="">Select Portal</option>
                                    @foreach($Portal as $list)
                                        <option value="{{$list->id}}" @if($Products->portal_id == $list->id) selected @endif>{{$list->protal_name}}</option>
                                    @endforeach                                    
                                </select>
                                @if($errors->has('ddlportal')) <p class="text-danger">{{ $errors->first('ddlportal') }}</p>@endif
                            </div>
                            <div class="form-group">  
                                <label for="exampleInputEmail1">Select Firm<small class="text-danger h4">*</small></label>
                                <select class="form-control" id="company" name="ddlcompany" required="">
                                    <option value="">Select Firm</option>
                                    @foreach($Company as $list)
                                        <option value="{{$list->id}}" @if($Products->comp_name == $list->id) selected @endif>{{$list->company_name}}</option>
                                    @endforeach                                    
                                </select>
                                @if($errors->has('ddlcompany')) <p class="text-danger">{{ $errors->first('ddlcompany') }}</p>@endif
                            </div>
                            <div class="form-group">                                  
                                <label for="exampleInputEmail1">Product Name <small class="text-danger h4">*</small></label>
                                <input type="text" name="product_name" placeholder="Product Name" class="form-control" maxlength="55" autocomplete="off" value="{{$Products->product_name}}" required=""> 
                                @if($errors->has('product_name')) <p class="text-danger">{{ $errors->first('product_name') }}</p>@endif
                            </div> 
                            <div class="form-group">                                  
                                <label for="exampleInputEmail1">Product Link <small class="text-danger h4">*</small></label>
                                <input type="url" name="product_link" placeholder="Product Portal Link" class="form-control" value="{{$Products->product_link}}" autocomplete="off" required=""> 
                                @if($errors->has('product_link')) <p class="text-danger">{{ $errors->first('product_link') }}</p>@endif
                            </div>
                            <div class="form-group">                                  
                                <label for="exampleInputEmail1">Description <small>(Optional)</small></label>
                                 <textarea name="product_desc" class="form-control" placeholder="Product Description..." rows="3">{{$Products->product_desc}}</textarea> 
                                @if($errors->has('product_desc')) <p class="text-danger">{{ $errors->first('product_desc') }}</p>@endif
                            </div>
                            <div class="form-group">                                  
                                <label for="exampleInputEmail1">Share Link</label>
                                  <label class="form-control">{{url($Products->share_link)}}</label>
                            </div>                            
                            <div class="form-group">
                               <span>Status <small class="text-danger h4">*</small></span>
                                <select name="status" class="form-control" required="">
                                    <option value="1" @if($Products->status == 1) selected @endif>Active</option>
                                    <option value="0" @if($Products->status == 0) selected @endif>D-Active</option>
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
            </section><!-- /.content