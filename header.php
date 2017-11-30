<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>國立台北大學資訊工程學系</title>

	<!-- jQuery	 -->
	<script src="js/jquery-2.1.1.min.js"></script>
	<!-- bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/bootstrap.min.js"></script>
	<!-- animate -->
	<link href="css/animate.css" rel="stylesheet">
	<!-- font-awesome -->
	<link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- owlcarousel -->
	<link href="js/owlcarousel/css/owl.carousel.min.css" rel="stylesheet">
	<link href="js/owlcarousel/css/owl.theme.default.min.css" rel="stylesheet">
	<script src="js/owlcarousel/js/owl.carousel.min.js"></script>
	<!-- app -->
	<link href="css/app.css" rel="stylesheet">
	<script src="js/app.js"></script>
</head>
<body>
<header>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6">
				<div id="logo">
					<a href="index.php"><img src="images/logo.png" class="img-responsive" /></a>
				</div>
			</div>
			<div class="col-sm-6 hidden-xs">
				<div class="form-inline hidden-xs hidden-sm text-right">
                    <form class="navbar-form" role="search">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="全站搜尋">
                            <span class="input-group-btn">
                                <button type="reset" class="btn btn-default">
                                    <span class="glyphicon glyphicon-remove">
                                        <span class="sr-only">Close</span>
                                    </span>
                                </button>
                                <button type="submit" class="btn btn-default">
                                    <span class="glyphicon glyphicon-search">
                                        <span class="sr-only">Search</span>
                                    </span>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
			</div>
		</div>
	</div>
</header>
<nav class="navbar navbar-inverse" >
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<h4>主選單</h4>
		</div>
		<div id="navbar" class="navbar-collapse collapse" aria-expanded="false">
			<ul class="nav navbar-nav">
				<li class="active"><a href="index.php">首頁</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">重要公告 <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">榮譽捷報</a></li>
						<li><a href="#">演講資訊</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">系所簡介 <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">系史館</a></li>
					</ul>
				</li>
				<li><a href="#">師資介紹</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">學生專區 <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">獎助學金</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">招生資訊 <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">大學部</a></li>
					</ul>
				</li>
				<li><a href="#">系友專區</a></li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</nav>