@extends('admin_master')
@section('body')
 <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Xem danh sách đơn hàng</h1>
                </div>
            </div><!--/.row-->
   <div>
	<table class="table">
  <thead>
    <tr  class="success">
      <th scope="col">Mã Đơn Hàng</th>
      <th scope="col">Tên Khách Hàng</th>
      <th scope="col">Số điện thoại</th>
       <th scope="col">Email</th> 
        <th scope="col">Địa chỉ nhận</th>
        <th scope="col">Xư lí đơn hàng</th>
        <th scope="col">Hủy đon hàng</th>
    </tr>
  </thead>
  <tbody>

       @foreach($donhangchitiets as $donhangchitiet) 

  <tr class="info">
    
        <th scope="row">{{$donhangchitiet->MaDH}}</th>
      <td>{{$donhangchitiet->TenKH}}</td>
       <td>{{$donhangchitiet->Sdt}}</td>
        <td>{{$donhangchitiet->Email}}</td>
        <td>{{$donhangchitiet->DiaChiNhanHang}}</td>           
         
       <td>  <button type="button" class="btn btn-info">Xử lý</button></td>
        <td>  <button type="button" class="btn btn-info">Hủy đơn hàng</button></td>

    </tr>
       @endforeach
     
       
  </tbody>
</table>
{{$donhangchitiets->links()}}
</div>
@stop