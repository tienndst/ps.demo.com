@extends('home.master')
@section('title', (!empty($contact)?$contact->seo_title:""))
@section('seo_keyword', (!empty($contact)?$contact->seo_keyword:""))
@section('seo_description', (!empty($contact)?$contact->seo_description:""))
@section('seo_image', (!empty($contact)?asset($contact->seo_image):""))
@section('seo_url', url()->current())
@section('content')
<!-- BEGIN .wrapper -->
	<div class="wrapper">
			<h3>Hiện tại trang tin tức của Phungsu.vn chỉ hoạt động tại địa chỉ:<br></h3>
				<a style="color: blue" href="https://www.facebook.com/news.phungsu.vn/">
					<b>https://www.facebook.com/news.phungsu.vn</b></a><br>
			<h3>Xin cảm ơn!</h3>
	<!-- END .wrapper -->
	</div>
@endsection