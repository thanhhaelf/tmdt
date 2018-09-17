@extends('admin_master')
@section('body')
<div class="row">
                <ol class="breadcrumb">
                    <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                    <li class="active"></li>
                </ol>
            </div><!--/.row-->

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Sửa thông tin sản phẩm</h1>
                </div>
            </div><!--/.row-->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Sửa thông tin sản phẩm</div>
                        <div class="panel-body">

                            <form method="post" enctype="multipart/form-data" role="form">
                                <div class="col-md-6">
                                <div class="form-group">
                                        <label>Mã Sản phẩm</label>
                                      </br>  <label>{{$product->MaSP}}</label>
                                       
                                    </div>
                                    <div class="form-group">
                                        <label>Mã Nhà Cung Cấp</label>
                                      </br>  <label>{{$product->MaNCC}}</label>
                                       
                                    </div>
                                    <div class="form-group">
                                        <label>Tên sản phẩm</label>
                                        <input type="text" class="form-control"  name="ten_sp" value="{{$product->TenSP}}" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Giá sản phẩm</label>
                                        <input type="text" class="form-control" name="gia_sp" value="{{$product->Gia}}" required="">
                                    </div>

                                    <div class="form-group">
                                        <label>Ảnh mô tả</label>
                                        <input type="file" name="pictures[]">    
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Khuyến Mại</label>
                                        <input type="text" class="form-control" name="khuyen_mai" value="{{$product->KhuyenMai}}" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Mô Tả</label>
                                        <input type="text" class="form-control" name="mo_ta" value="{{$product->MoTa}}" required="">
                                    </div>
                                
                                        

                                    </div>



                                </div>

                                <button type="submit" class="btn btn-primary" name="submit">Cập nhật</button>
                                <button type="reset" class="btn btn-default" name="reset">Làm mới</button>
                               {{csrf_field()}}

                            </form>
                        </div>
                    </div>
                </div><!-- /.col-->
            </div><!-- /.row -->
@stop