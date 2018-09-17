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
                    <h1 class="page-header">Thêm sản phẩm mới</h1>
                </div>
            </div><!--/.row-->


            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Thêm sản phẩm mới</div>
                        <div class="panel-body">

                            <form method="post" enctype="multipart/form-data" role="form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tên sản phẩm</label>
                                        <input type="text" class="form-control"  name="ten_sp" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Giá sản phẩm</label>
                                        <input type="text" class="form-control" name="gia_sp" required="">
                                    </div>

                                    <div class="form-group">
                                        <label>Mã nhà cung cấp</label>
                                        <input type="text" class="form-control" name="ma_ncc"  required="">
                                    </div>

                                    <div class="form-group">
                                        <label>Mã Danh Mục</label>
                                        <input type="text" class="form-control" name="ma_dm" required="">
                                    </div>
                                   

                                    <div class="form-group">
                                        <label>Ảnh mô tả</label>
                                        <input type="file" name="pictures[]">
                                    </div>
                                     <div class="form-group">
                                        <label>Khuyến mãi</label>
                                        <input type="text" class="form-control" name="khuyen_mai"  required="">

                                </div>
                                
                                    <div class="form-group">
                                        <label>Mô tả</label>
                                         <input type="text" class="form-control" name="mo_ta"  required="">
                                       
                                    </div>
                                   
                                    <button type="submit" class="btn btn-primary" name="submit">Thêm mới</button>
                                <button type="reset" class="btn btn-default" name="reset">Làm mới</button>
                                    </div>

                               

                             {{csrf_field()}}
                             
                            </form>
                        </div>
                    </div>
                </div><!-- /.col-->
            </div><!-- /.row -->
@stop