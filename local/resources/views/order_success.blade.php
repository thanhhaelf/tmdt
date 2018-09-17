@extends('master')
@section('body')
{{session('success')}}
<a href="{{route('home')}}" class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
	Trở về trang chủ
</a>
@stop