@extends('master')
@section('body')
<div class="container">
	<div class="row">

		<div class="col-md-12 p-b-30">
			<form class="leave-comment" method="post" action="{{route('order')}}">
				<h4 class="m-text26 p-b-36 p-t-15">
					Đặt hàng
				</h4>

				<div class="bo4 of-hidden size15 m-b-20">
					<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="name" placeholder="Tên">
				</div>

				<div class="bo4 of-hidden size15 m-b-20">
					<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="phone" placeholder="Số điện thoại">
				</div>

				<div class="bo4 of-hidden size15 m-b-20">
					<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email" placeholder="Địa chỉ Email">
				</div>

				<div class="bo4 of-hidden size15 m-b-20">
					<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="address" placeholder="Địa chỉ nhận hàng">
				</div>

				<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="message" placeholder="Chú thích thêm"></textarea>

				<div class="w-size25">
					<!-- Button -->
					<button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
						Đặt hàng
					</button>
				</div>
				{{csrf_field()}}
			</form>
		</div>
	</div>
</div>

@stop