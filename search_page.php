<?php
 require_once("header.php");
 require_once("banner.php");
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
				<h1>學術成果</h1>
				<form action="" method="post" class="form-inline" id="toolbar-form">
					<div class="form-group">
				    <label for="category" class="control-label">分類</label>
			      <select name="category" id="category" class="form-control">
						  <option value="">--請選擇--</option>
						  <option value="1">期刊論文</option>
						  <option value="2">專書中之論文</option>
						  <option value="3">主編之專書</option>
						  <option value="4">學位論文</option>
						  <option value="5">研討會論文</option>
						</select>
				  </div>
				  <div class="form-group">
				    <label for="search" class="control-label">關鍵字搜尋</label>
			      <input type="text" class="form-control" id="search" name="search" />
				  </div>
					<div class="form-group">
						<button type="submit" class="btn btn-default">GO</button>
					</div>
				</form>
				<div class="content">
					<div class="list-wrap clearfix">
						<h3>系所公告<a href="#" class="pull-right">View All</a></h3>
						<div class="list clearfix">
							<div class="col-xs-4 col-md-4 col-lg-3"><span class="btn category">譯著</span><span class="date">2017-12-30</span></div>
							<div class="col-xs-6 col-md-6 col-lg-8"><a href="#">翁素涵 譯 100 Best Careers in Entertainment (娛樂業100大作)Classic Communications Co. 經典傳訊 [未出版]</a></div>
							<div class="col-xs-2 col-md-2 col-lg-1"><label for="author">翁素涵</label></div>
						</div>
						<div class="list clearfix">
							<div class="col-xs-4 col-md-4 col-lg-3"><span class="btn category">研討會論文</span><span class="date">2017-12-30</span></div>
							<div class="col-xs-6 col-md-6 col-lg-8"><a href="#">(近期略)</a></div>
							<div class="col-xs-2 col-md-2 col-lg-1"><label for="author">翁素涵</label></div>
						</div>
						<div class="list clearfix">
							<div class="col-xs-4 col-md-4 col-lg-3"><span class="btn category">期刊論文</span><span class="date">2017-12-30</span></div>
							<div class="col-xs-6 col-md-6 col-lg-8"><a href="#">〈如果，明天沒有愛：論《夜曲集》中的液態愛〉</a></div>
							<div class="col-xs-2 col-md-2 col-lg-1"><label for="author">翁素涵</label></div>
						</div>
						<div class="list clearfix">
							<div class="col-xs-4 col-md-4 col-lg-3"><span class="btn category">期刊論文</span><span class="date">2017-12-30</span></div>
							<div class="col-xs-6 col-md-6 col-lg-8"><a href="#">〈The Empire Cooks Back: Cultural Hybridization in Timothy〉</a></div>
							<div class="col-xs-2 col-md-2 col-lg-1"><label for="author">翁素涵</label></div>
						</div>
						<div class="list clearfix">
							<div class="col-xs-4 col-md-4 col-lg-3"><span class="btn category">期刊論文</span><span class="date">2017-12-30</span></div>
							<div class="col-xs-6 col-md-6 col-lg-8"><a href="#">《海港都市研究》8 (2013年3月)：41-59</a></div>
							<div class="col-xs-2 col-md-2 col-lg-1"><label for="author">翁素涵</label></div>
						</div>
					</div>
				</div>
				<nav class="text-center" aria-label="Page navigation">
				  <ul class="pagination">
				    <li>
				      <a href="#" aria-label="Previous">
				        <span aria-hidden="true">&laquo;</span>
				      </a>
				    </li>
				    <li><a href="#">1</a></li>
				    <li><a href="#">2</a></li>
				    <li><a href="#">3</a></li>
				    <li><a href="#">4</a></li>
				    <li><a href="#">5</a></li>
				    <li>
				      <a href="#" aria-label="Next">
				        <span aria-hidden="true">&raquo;</span>
				      </a>
				    </li>
				  </ul>
				</nav>
			</div>
		</div>
	</div>
</section>
<?php
 require_once("footer.php");
?>