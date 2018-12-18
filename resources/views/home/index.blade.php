@extends('home.master')
@section('title', (!empty($contact)?$contact->seo_title:""))
@section('seo_keyword', (!empty($contact)?$contact->seo_keyword:""))
@section('seo_description', (!empty($contact)?$contact->seo_description:""))
@section('seo_image', (!empty($contact)?asset($contact->seo_image):""))
@section('seo_url', url()->current())
@section('content')
    <!-- Page Content -->
    <div class="container wrapper">
	  <h2 class="my-2"> @yield('title')		
			<span class="float-right" style="font-size:50%">Select your language : 
				<a href="#"><img width="8%" src="public/images/icon/vn.png"></a>
				<a href="#"><img width="8%" src="public/images/icon/en.png"></a>
				<a href="#"><img width="8%" src="public/images/icon/kor.png"></a>
				<a href="#"><img width="8%" src="public/images/icon/jp.png"></a>
				<a href="#"><img width="8%" src="public/images/icon/cn.png"></a>
			</span>	</h2>
		<br>
	  <!-- Nav tabs -->
	  <ul class="nav nav-tabs" role="tablist">
		<li class="nav-item">
		  <a class="nav-link" data-toggle="tab" href="#yesterday">Chủ đề hôm qua</a>
		</li>
		<li class="nav-item">
		  <a class="active nav-link" data-toggle="tab" href="#today">Chủ đề hôm nay</a>
		</li>
	  </ul>
	  <!-- Tab panes -->
	  <div class="tab-content">
		<div id="yesterday" class="container tab-pane"><br>
			<div class="main_content my-1">
				<div class="row">
					<div class="col-lg-2 layout_left">
						<img class="img-fluid rounded" src="http://placehold.it/900x400" alt="">
					</div>
					<div class="col-lg-10 layout_left">
						<h3>Business Name or Tagline</h3>
						<div class="col-lg-12 comunication_info layout_left "><span class="layout_left like_info">0 <i style="color:blue" class="fa fa-thumbs-o-up"></i></span><span class="layout_left cmt_info">0 <i style="color:blue" class="fa fa-comments-o"></i></span></div>
						<p class="more">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!
						</p>
						<div class="like_cmt_share layout_left">		
							<div class="like layout_left">
								<i onclick="like_enable(this)" style="font-size:14px" class="fa fa-thumbs-o-up"> Thích</i>
							</div>
							<div  onclick="show_block(this)" class="like layout_left">
								<span style="font-size:14px" class="fa fa-comments-o"> Bình luận</span>
							</div>
							<div class="like layout_left">
								<i onclick="" style="font-size:14px" class="fa fa-share"> Chia sẻ</i>
							</div>						
						</div>
					</div>
				</div>	
				<div class="row">
					<div class="col-lg-2 layout_left"></div>
					<div id="cmt_box" class="col-lg-10 layout_left">
						<div class="layout_left comment-wrap">
							<div class="row">
								<div class="d-none d-sm-block col-lg-1 col-sm-1 col-md-1 col-xs-2 layout_left photo">
									<div class="avatar" style="background-image: url('https://s3.amazonaws.com/uifaces/faces/twitter/dancounsell/128.jpg')"></div>
								</div>
								<div class="col-lg-11 col-sm-11 col-md-11 layout_left col-xs-10 comment-block">
									<form action="">
										<textarea class="rounded" name="" id="" cols="30" rows="2" placeholder="Add comment..."></textarea>
									</form>
								</div>
							</div>
						</div>
						<div class="layout_left comment-wrap">
							<div class="row">
								
								<div class="col-lg-12 col-sm-12 col-md-12 layout_left col-xs-10 comment-block">
										<p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto temporibus iste nostrum dolorem natus recusandae incidunt voluptatum. Eligendi voluptatum ducimus architecto tempore, quaerat explicabo veniam fuga corporis totam reprehenderit quasi
												sapiente modi tempora at perspiciatis mollitia, dolores voluptate. Cumque, corrupti?</p>
										<div class="bottom-comment">
												<div class="comment-user"><a href="#">By: Hà Văn Thành</a></div>
												<div class="comment-date">Aug 24, 2014 @ 2:35 PM</div>
												<ul class="comment-actions">
														<li class="complain">Complain</li>
														<li class="reply">Reply</li>
												</ul>
										</div>
								</div>
							</div>							
						</div>
					</div>
				</div>
			</div>
			<div class="main_content my-1">
				<div class="row">
					<div class="col-lg-2 layout_left">
						<img class="img-fluid rounded" src="http://placehold.it/900x400" alt="">
					</div>
					<div class="col-lg-10 layout_left">
						<h3>Business Name or Tagline</h3>
						<div class="col-lg-12 comunication_info layout_left "><span class="layout_left like_info">0 <i style="color:blue" class="fa fa-thumbs-o-up"></i></span><span class="layout_left cmt_info">0 <i style="color:blue" class="fa fa-comments-o"></i></span></div>
						<p class="more">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!
						</p>
						<div class="like_cmt_share layout_left">		
							<div class="like layout_left">
								<i onclick="like_enable(this)" style="font-size:14px" class="fa fa-thumbs-o-up"> Thích</i>
							</div>
							<div  onclick="show_block(this)" class="like layout_left">
								<span style="font-size:14px" class="fa fa-comments-o"> Bình luận</span>
							</div>
							<div class="like layout_left">
								<i onclick="" style="font-size:14px" class="fa fa-share"> Chia sẻ</i>
							</div>						
						</div>
					</div>
				</div>	
				<div class="row">
					<div class="col-lg-2 layout_left"></div>
					<div id="cmt_box" class="col-lg-10 layout_left">
						<div class="layout_left comment-wrap">
							<div class="row">
								<div class="d-none d-sm-block col-lg-1 col-sm-1 col-md-1 col-xs-2 layout_left photo">
									<div class="avatar" style="background-image: url('https://s3.amazonaws.com/uifaces/faces/twitter/dancounsell/128.jpg')"></div>
								</div>
								<div class="col-lg-11 col-sm-11 col-md-11 layout_left col-xs-10 comment-block">
									<form action="">
										<textarea class="rounded" name="" id="" cols="30" rows="2" placeholder="Add comment..."></textarea>
									</form>
								</div>
							</div>
						</div>
						<div class="layout_left comment-wrap">
							<div class="row">
								
								<div class="col-lg-12 col-sm-12 col-md-12 layout_left col-xs-10 comment-block">
										<p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto temporibus iste nostrum dolorem natus recusandae incidunt voluptatum. Eligendi voluptatum ducimus architecto tempore, quaerat explicabo veniam fuga corporis totam reprehenderit quasi
												sapiente modi tempora at perspiciatis mollitia, dolores voluptate. Cumque, corrupti?</p>
										<div class="bottom-comment">
												<div class="comment-user"><a href="#">By: Hà Văn Thành</a></div>
												<div class="comment-date">Aug 24, 2014 @ 2:35 PM</div>
												<ul class="comment-actions">
														<li class="complain">Complain</li>
														<li class="reply">Reply</li>
												</ul>
										</div>
								</div>
							</div>							
						</div>
					</div>
				</div>
			</div>
		</div>  
		<div id="today" class="active container tab-pane"><br>
			<div class="main_content my-1">
				<div class="row">
					<div class="col-lg-2 layout_left">
						<img class="img-fluid rounded" src="http://placehold.it/900x400" alt="">
					</div>
					<div class="col-lg-10 layout_left">
						<h3>Business Name or Tagline</h3>
						<div class="col-lg-12 comunication_info layout_left "><span class="layout_left like_info">0 <i style="color:blue" class="fa fa-thumbs-o-up"></i></span><span class="layout_left cmt_info">0 <i style="color:blue" class="fa fa-comments-o"></i></span></div>
						<p class="more">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!
						</p>
						<div class="like_cmt_share layout_left">		
							<div class="like layout_left">
								<i onclick="like_enable(this)" style="font-size:14px" class="fa fa-thumbs-o-up"> Thích</i>
							</div>
							<div  onclick="show_block(this)" class="like layout_left">
								<span style="font-size:14px" class="fa fa-comments-o"> Bình luận</span>
							</div>
							<div class="like layout_left">
								<i onclick="" style="font-size:14px" class="fa fa-share"> Chia sẻ</i>
							</div>						
						</div>
					</div>
				</div>	
				<div class="row">
					<div class="col-lg-2 layout_left"></div>
					<div id="cmt_box" class="col-lg-10 layout_left">
						<div class="layout_left comment-wrap">
							<div class="row">
								<div class="d-none d-sm-block col-lg-1 col-sm-1 col-md-1 col-xs-2 layout_left photo">
									<div class="avatar" style="background-image: url('https://s3.amazonaws.com/uifaces/faces/twitter/dancounsell/128.jpg')"></div>
								</div>
								<div class="col-lg-11 col-sm-11 col-md-11 layout_left col-xs-10 comment-block">
									<form action="">
										<textarea class="rounded" name="" id="" cols="30" rows="2" placeholder="Add comment..."></textarea>
									</form>
								</div>
							</div>
						</div>
						<div class="layout_left comment-wrap">
							<div class="row">
								
								<div class="col-lg-12 col-sm-12 col-md-12 layout_left col-xs-10 comment-block">
										<p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto temporibus iste nostrum dolorem natus recusandae incidunt voluptatum. Eligendi voluptatum ducimus architecto tempore, quaerat explicabo veniam fuga corporis totam reprehenderit quasi
												sapiente modi tempora at perspiciatis mollitia, dolores voluptate. Cumque, corrupti?</p>
										<div class="bottom-comment">
												<div class="comment-user"><a href="#">By: Hà Văn Thành</a></div>
												<div class="comment-date">Aug 24, 2014 @ 2:35 PM</div>
												<ul class="comment-actions">
														<li class="complain">Complain</li>
														<li class="reply">Reply</li>
												</ul>
										</div>
								</div>
							</div>							
						</div>
					</div>
				</div>
			</div>
			<div class="main_content my-1">
				<div class="row">
					<div class="col-lg-2 layout_left">
						<img class="img-fluid rounded" src="http://placehold.it/900x400" alt="">
					</div>
					<div class="col-lg-10 layout_left">
						<h3>Business Name or Tagline</h3>
						<div class="col-lg-12 comunication_info layout_left "><span class="layout_left like_info">0 <i style="color:blue" class="fa fa-thumbs-o-up"></i></span><span class="layout_left cmt_info">0 <i style="color:blue" class="fa fa-comments-o"></i></span></div>
						<p class="more">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!
						</p>
						<div class="like_cmt_share layout_left">		
							<div class="like layout_left">
								<i onclick="like_enable(this)" style="font-size:14px" class="fa fa-thumbs-o-up"> Thích</i>
							</div>
							<div  onclick="show_block(this)" class="like layout_left">
								<span style="font-size:14px" class="fa fa-comments-o"> Bình luận</span>
							</div>
							<div class="like layout_left">
								<i onclick="" style="font-size:14px" class="fa fa-share"> Chia sẻ</i>
							</div>						
						</div>
					</div>
				</div>	
				<div class="row">
					<div class="col-lg-2 layout_left"></div>
					<div id="cmt_box" class="col-lg-10 layout_left">
						<div class="layout_left comment-wrap">
							<div class="row">
								<div class="d-none d-sm-block col-lg-1 col-sm-1 col-md-1 col-xs-2 layout_left photo">
									<div class="avatar" style="background-image: url('https://s3.amazonaws.com/uifaces/faces/twitter/dancounsell/128.jpg')"></div>
								</div>
								<div class="col-lg-11 col-sm-11 col-md-11 layout_left col-xs-10 comment-block">
									<form action="">
										<textarea class="rounded" name="" id="" cols="30" rows="2" placeholder="Add comment..."></textarea>
									</form>
								</div>
							</div>
						</div>
						<div class="layout_left comment-wrap">
							<div class="row">
								
								<div class="col-lg-12 col-sm-12 col-md-12 layout_left col-xs-10 comment-block">
										<p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto temporibus iste nostrum dolorem natus recusandae incidunt voluptatum. Eligendi voluptatum ducimus architecto tempore, quaerat explicabo veniam fuga corporis totam reprehenderit quasi
												sapiente modi tempora at perspiciatis mollitia, dolores voluptate. Cumque, corrupti?</p>
										<div class="bottom-comment">
												<div class="comment-user"><a href="#">By: Hà Văn Thành</a></div>
												<div class="comment-date">Aug 24, 2014 @ 2:35 PM</div>
												<ul class="comment-actions">
														<li class="complain">Complain</li>
														<li class="reply">Reply</li>
												</ul>
										</div>
								</div>
							</div>							
						</div>
					</div>
				</div>
			</div>
		</div>  
    </div>
@endsection
