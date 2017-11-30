<?php
 require_once("header.php");
 require_once("carousel.php");
?>
<section class="content-wrap">
	<div class="container-full clearfix">
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
			<div class="sidebar-wrap">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sideNavbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h3>重要公告</h3>
					<img src="images/page/sidebar/text-page.png" class="img-responsive hidden-xs" />
				</div>
				<div id="sideNavbar" class="list navbar-collapse collapse" aria-expanded="false">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">資訊講座</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">重要公告 <span class="arrow"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">榮譽捷報</a></li>
								<li><a href="#">演講資訊</a></li>
							</ul>
						</li>
						<li><a href="#">演講資訊</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">IEET認證 <span class="arrow"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">IEET認證</a></li>
							</ul>
						</li>
						<li><a href="#">校園活動</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">學生專區 <span class="arrow"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">獎助學金</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">招生資訊 <span class="arrow"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">大學部</a></li>
							</ul>
						</li>
						<li><a href="#">系友專區</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-8 col-md-8 col-lg-9">
			<div class="content-box">
				<h1>校園活動</h1>
				<h3>系友老師及同學們之間活動剪影<div class="border"></div></h3>
				<div class="photos">
					<div class="row">
						<div class="col-xs-6"><img src="images/page/active/photo-1.png" class="img-responsive center-block" /></div>
						<div class="col-xs-6"><img src="images/page/active/photo-2.png" class="img-responsive center-block" /></div>
						<div class="clearfix"></div>
						<div class="col-xs-6"><img src="images/page/active/photo-3.png" class="img-responsive center-block" /></div>
						<div class="col-xs-6"><img src="images/page/active/photo-4.png" class="img-responsive center-block" /></div>
						<div class="clearfix"></div>
						<div class="col-xs-6"><img src="images/page/active/photo-5.png" class="img-responsive center-block" /></div>
						<div class="col-xs-6"><img src="images/page/active/photo-6.png" class="img-responsive center-block" /></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
 require_once("footer.php");
?>