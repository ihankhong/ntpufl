<?php
 require_once("header.php");
 require_once("banner.php");

// 教授連結
$professor = array('林伯星','呂嘉穀','莊東穎','陳裕賢','張仁俊','林道通','張玉山','曾俊元','陳志昌','樛致芳','吳信龍','戴志華','黃有評','沈榮麟','黃俊堯','曹偉駿','楊棧雲','林嘉洤','詹景裕','陳永源','黃弘一','Hooman Samani','鄭穎仁','郭岳芳','白宏達','謝欣霖','王鵬華','魏存毅','江振宇','余帝毅','黃昱智','許智舜','張宏慶','羅崇銘','高孟');
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
				<h1>關於本系</h1>
				<div class="linkbar"><?php foreach ($professor as $key => $name) {?><a href="#"><?php echo $name; ?></a><?php } ?></div>
				<h2 class="text-center">專任教師</h2>
				<div class="panel self-wrap">
					<div class="panel-body">
						<div class="basic clearfix">
							<div class="col-xs-12 col-sm-3">
								<img src="images/page/professor/professor-1.png" class="img-responsive center-block headshot">
							</div>
							<div class="col-xs-12 col-sm-9">
								<p>職稱：教授兼系主任</p>
								<p>姓名：陳彥豪</p>
								<p>授課領域：口筆譯、文學表演學、國際談...</p>
								<p><i class="fa fa-envelope-o" aria-hidden="true"></i> yhpc@gm.ntpu.edu.tw</p>
								<p>聯絡電話：(02)8674-1111 #66628、18335</p>
							</div>
						</div>
						<div class="paper clearfix">
							<div class="col-xs-12">
								<p class="marking date">時間：2008-05-22</p>
								<p class="marking thesis">講題：WiMax Wireless Technologies for Telemedicine and HealthCare Applications</p>
								<p>附件：<a href="#">專題演講.zip</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="panel self-wrap">
					<div class="panel-body">
						<div class="basic clearfix">
							<div class="col-xs-12 col-sm-3">
								<img src="images/page/professor/professor-2.png" class="img-responsive center-block headshot">
							</div>
							<div class="col-xs-12 col-sm-9">
								<p>職稱：助理教授</p>
								<p>姓名：翁素涵</p>
								<p>授課領域：口筆譯、文學表演學、國際談...</p>
								<p><i class="fa fa-envelope-o" aria-hidden="true"></i> yhpc@gm.ntpu.edu.tw</p>
								<p>聯絡電話：(02)8674-1111 #66628、18335</p>
							</div>
						</div>
						<div class="paper clearfix">
							<div class="col-xs-12">
								<p class="marking date">時間：2008-05-22</p>
								<p class="marking thesis">講題：WiMax Wireless Technologies for Telemedicine and HealthCare Applications</p>
								<p>附件：<a href="#">專題演講.zip</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="btns text-center">
					<a href="#" class="btn btn-lg more">More</a>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
 require_once("footer.php");
?>