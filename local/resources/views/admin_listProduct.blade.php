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
        <h1 class="page-header">Quản lý sản phẩm</h1>
    </div>
</div><!--/.row-->


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">                   
            <div class="panel-body" style="position: relative;">
                <a href="{{asset('admin_addProduct')}}" class="btn btn-primary" style="margin: 10px 0 20px 0; position: absolute;">Thêm sản phẩm mới</a>                
                <table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-sort-name="name" data-sort-order="desc">
                    <thead>
                        <tr>                                
                            <th data-sortable="true">ID</th>
                            <th data-sortable="true">Tên sản phẩm</th>
                            <th data-sortable="true">Giá</th> 
                            <th data-sortable="true">Khuyến Mãi</th>
                             <th data-sortable="true">Mô Tả</th>
                             <th data-sortable="true">Ảnh mô tả</th>
                            <th data-sortable="true">Sửa</th>
                            <th data-sortable="true">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr style="height: 300px;">
                            <td data-checkbox="true">{{$product->MaSP}}</td>
                            <td data-checkbox="true"><a href="#">{{$product->TenSP}}</a></td>
                            <td data-checkbox="true">{{$product->Gia}}</td>
                            <td data-sortable="true">{{$product->KhuyenMai}}</td>
                             <td data-sortable="true">{{$product->MoTa}}</td>
                            <td data-sortable="true">
                                <span class="thumb"><img width="80px" height="150px" src="<?php if(isset($id)) echo('../'); ?>local/resources/views/images/{{$product->Anh}}" /></span>

                            </td>                               
                            <td>
                    <a href="{{route('admin_editProduct',['id'=>$product->MaSP])}}"><span><svg class="glyph stroked brush" style="width: 20px;height: 20px;"><use xlink:href="#stroked-brush"/></svg></span></a>
                            </td>

                            <td>
                                <a href="{{route('admin_listProduct',['id'=>$product->MaSP])}}"><span><svg class="glyph stroked cancel" style="width: 20px;height: 20px;"><use xlink:href="#stroked-cancel"/></svg></span></a>
                            </td>
                        </tr>
                      
                        @endforeach
                        
                        
                    </tbody>
                </table>
                {{$products->links()}}
            </div>
        </div>
    </div>
</div><!--/.row-->
@stop