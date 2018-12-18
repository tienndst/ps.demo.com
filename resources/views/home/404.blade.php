@extends('home.master')
@section('title', (!empty($contact)?$contact->seo_title:""))
@section('seo_keyword', (!empty($contact)?$contact->seo_keyword:""))
@section('seo_description', (!empty($contact)?$contact->seo_description:""))
@section('seo_image', (!empty($contact)?asset($contact->seo_image):""))
@section('seo_url', url()->current())
@section('content')
<!-- BEGIN .wrapper -->
<div class="wrapper">
	<div class="err-note">
		<h1><i class="fa fa-file-text-o"></i>Page not found</h1>
		<h2>Error 404</h2>
		<p>Trang bạn đang cố truy cập hiện không được tìm thấy. </p>
		<a href="{{url('/')}}" class="back-button"><i class="fa fa-home"></i>Về trang chủ</a>
	</div>
<!-- END .wrapper -->
</div>
@endsection