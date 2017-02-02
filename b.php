<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<style type="text/css">
	.animate {
    -webkit-transition: all 0.3s ease-in-out;
	-moz-transition: all 0.3s ease-in-out;
	-o-transition: all 0.3s ease-in-out;
	-ms-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
}

.navbar-bootsnipp {
    background-color: rgb(255, 255, 255);
	border-color: rgb(95, 176, 228);
	border-radius: 0px;
	margin-bottom: 0px;
	z-index: 100;
}
.navbar-bootsnipp:nth-of-type(2) {
	border-top-width: 1px;
	z-index: 50
}

.navbar-bootsnipp.affix-top {
	position: absolute;
	top: 0px;
	width: 100%;
}
.navbar-bootsnipp.affix {
	top: 0px;
	width: 100%;
}
.navbar-bootsnipp .navbar-toggle .icon-bar {
	background-color: rgb(95, 176, 228);
}

.navbar-bootsnipp .navbar-brand {
	color: rgb(95, 176, 228);
	font-weight: 900;
	letter-spacing: 2px;
}

.navbar-bootsnipp .navbar-nav > li > a {
	border: 0px solid rgb(95, 176, 228);
	color: rgb(120, 120, 120);
	padding: 15px 14px;
}

.navbar-bootsnipp .navbar-nav > li > form > .input-group > input,
.navbar-bootsnipp .navbar-nav > li > form > .input-group > .input-group-btn > .btn {
	border-radius: 0px;
}

.navbar-bootsnipp .navbar-nav > li:not(.disabled).open > a,
.navbar-bootsnipp .navbar-nav > li:not(.disabled).active > a,
.navbar-bootsnipp .navbar-nav > li:not(.disabled) > a:hover, 
.navbar-bootsnipp .navbar-nav > li:not(.disabled) > a:focus {
	border-left-width: 5px;
	color: rgb(95, 176, 228);
	padding-left: 10px;
}
.navbar-bootsnipp .navbar-nav > li.disabled > a {
	color: rgb(200, 200, 200);
}

.navbar-bootsnipp .navbar-nav > li > .dropdown-menu {
	border-radius: 0;
	margin-right: -1px;
	min-width: 220px;
	padding: 0px;
}
.navbar-bootsnipp .navbar-nav > li:not(.dropdown-right) > .dropdown-menu {
	left: 0px;
	margin-left: -1px;
	right: auto;
}
.navbar-bootsnipp .navbar-nav > li > .dropdown-menu > li > a {
	border-left: 0px solid rgb(95, 176, 228);
	color: rgb(120, 120, 120);
	font-size: 16px;
	font-weight: 400;
	padding: 10px 20px;
	white-space: nowrap;
}
.navbar-bootsnipp .navbar-nav > li > .dropdown-menu > li.active > a, 
.navbar-bootsnipp .navbar-nav > li > .dropdown-menu > li > a:hover, 
.navbar-bootsnipp .navbar-nav > li > .dropdown-menu > li > a:focus {
	background-color: rgb(245, 245, 245);
	border-left-width: 5px;
	padding-left: 15px;
}

.navbar .bootsnipp-profile > a {
	padding-bottom: 9px; 
	padding-top: 9px; 
}
.navbar .bootsnipp-profile > a > img {
	border-radius: 50%;
	width: 32px;
}
.navbar .bootsnipp-profile > .dropdown-menu {
	width: 320px;
}
.navbar .bootsnipp-profile > .dropdown-menu > li > .row {
	padding: 5px 15px;
}
.navbar .bootsnipp-profile > .dropdown-menu > li > .row img {
	width: 100%;
}

.navbar-bootsnipp .bootsnipp-search {
	display: none;
}
.navbar-bootsnipp .bootsnipp-search .form-control {
	background-color: rgb(235, 235, 235);
	border-radius: 0px;
	border-width: 0px;
	font-size: 24px;
	padding: 30px 0px;
}
.navbar-bootsnipp .bootsnipp-search .form-control {
	background-color: rgb(235, 235, 235);
	border-radius: 0px;
	border-width: 0px;
	font-size: 24px;
	padding: 25px 0px;
}
.navbar-bootsnipp .bootsnipp-search .form-control:focus {
	border-color: transparent;
	outline: 0;
	-webkit-box-shadow: none;
	box-shadow: none;
}
.navbar-bootsnipp .bootsnipp-search .input-group-btn > .btn {
	padding: 14px 16px;
	border-radius: 0px;
}
.navbar-bootsnipp .bootsnipp-search .input-group-btn > .btn.active,
.navbar-bootsnipp .bootsnipp-search .input-group-btn > .btn:hover,
.navbar-bootsnipp .bootsnipp-search .input-group-btn > .btn:focus {
	padding: 14px 16px 14px 15px;
}
.navbar-bootsnipp .bootsnipp-search .input-group-btn > .btn-default {
	background-color: rgb(245, 245, 245);
}
.nav-padding {
	padding-top: 61px;
}

@media screen and (min-width: 768px) {
    .navbar-bootsnipp .navbar-brand {
    	font-size: 20px;
		height: auto;
		padding: 15px 5px;
	}
	.navbar-bootsnipp .navbar-nav > li > a {
		font-size: 16px;
		letter-spacing: 1px;
	}
	.navbar-bootsnipp .navbar-nav > li:not(.disabled).open > a,
	.navbar-bootsnipp .navbar-nav > li:not(.disabled).active > a,
	.navbar-bootsnipp .navbar-nav > li:not(.disabled) > a:hover, 
	.navbar-bootsnipp .navbar-nav > li:not(.disabled) > a:focus {
		border-bottom-width: 5px;
		border-left-width: 0px;
		padding-bottom: 10px;
		padding-left: 14px;
	}

	.navbar-bootsnipp .navbar-nav > li.disabled > a {
		padding-left: 10px;
		padding-right: 10px;
	}


	.navbar-bootsnipp .bootsnipp-search {
		background-color: rgb(235, 235, 235);
		display: block;
		position: absolute;
		top: 100%;
		width: 100%;
		-webkit-transform: rotateX(-90deg);
		-moz-transform: rotateX(-90deg);
		-o-transform: rotateX(-90deg);
		-ms-transform: rotateX(-90deg);
		transform: rotateX(-90deg);
		-webkit-transform-origin: 0 0 0;
		-moz-transform-origin: 0 0 0;
		-o-transform-origin: 0 0 0;
		-ms-transform-origin: 0 0 0;
		transform-origin: 0 0 0;
		visibility: hidden;
	}
	.navbar-bootsnipp .bootsnipp-search.open {
		-webkit-transform: rotateX(0deg);
		-moz-transform: rotateX(0deg);
		-o-transform: rotateX(0deg);
		-ms-transform: rotateX(0deg);
		transform: rotateX(0deg);
		visibility: visible;	
	}
	.navbar-bootsnipp .bootsnipp-search > .container {
		padding: 0px;
	}    
}
	</style>
</head>	
<body>
<nav class="[ navbar navbar-fixed-top ][ navbar-bootsnipp animate ]" role="navigation">
    	<div class="[ container ]">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="[ navbar-header ]">
				<button type="button" class="[ navbar-toggle ]" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="[ sr-only ]">Toggle navigation</span>
					<span class="[ icon-bar ]"></span>
					<span class="[ icon-bar ]"></span>
					<span class="[ icon-bar ]"></span>
				</button>
				<div class="[ animbrand ]">
					<a class="[ navbar-brand ][ animate ]" href="#">Bootsnipp</a>
				</div>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="[ collapse navbar-collapse ]" id="bs-example-navbar-collapse-1">
				<ul class="[ nav navbar-nav navbar-right ]">
					<li class="[ visible-xs ]">
						<form action="http://bootsnipp.com/search" method="GET" role="search">
							<div class="[ input-group ]">
								<input type="text" class="[ form-control ]" name="q" placeholder="Search for snippets">
								<span class="[ input-group-btn ]">
									<button class="[ btn btn-primary ]" type="submit"><span class="[ glyphicon glyphicon-search ]"></span></button>
									<button class="[ btn btn-danger ]" type="reset"><span class="[ glyphicon glyphicon-remove ]"></span></button>
								</span>
							</div>
						</form>
					</li>
					<li><a href="#" class="[ animate ]">About</a></li>
					<li>
						<a href="#" class="[ dropdown-toggle ][ animate ]" data-toggle="dropdown">Resources <span class="[ caret ]"></span></a>
						<ul class="[ dropdown-menu ]" role="menu">
							<li><a href="#" class="[ animate ]">Blog <span class="[ pull-right glyphicon glyphicon-pencil ]"></span></a></li>
							<li><a href="#" class="[ animate ]">List of resources <span class="[ pull-right glyphicon glyphicon-align-justify ]"></span></a></li>
							<li><a href="#" class="[ animate ]">Download Bootstrap <span class="[ pull-right glyphicon glyphicon-cloud-download ]"></span></a></li>
							<li class="[ dropdown-header ]">Bootstrap Templates</li>
							<li><a href="#" class="[ animate ]">Browse Templates <span class="[ pull-right glyphicon glyphicon-shopping-cart ]"></span></a></li>
							<li class="[ dropdown-header ]">Builders</li>
							<li><a href="#" class="[ animate ]">Form Builder <span class="[ pull-right glyphicon glyphicon-tasks ]"></span></a></li>
							<li><a href="#" class="[ animate ]">Button Builder <span class="[ pull-right glyphicon glyphicon-edit ]"></span></a></li>
						</ul>
					</li>
					<li class="[ dropdown ]">
						<a href="#" class="[ dropdown-toggle ][ animate ]" data-toggle="dropdown">Snippets <span class="[ caret ]"></span></a>
						<ul class="[ dropdown-menu ]" role="menu">
							<li><a href="#" class="[ animate ]">Featured <span class="[ pull-right glyphicon glyphicon-star ]"></span></a></li>
							<li><a href="#" class="[ animate ]">Tags  <span class="[ pull-right glyphicon glyphicon-tags ]"></span></a></li>
							<li class="[ dropdown-header ]">By Bootstrap Version</li>
							<li><a href="#" class="[ animate ]">3.2.0</a></li>
							<li><a href="#" class="[ animate ]">3.1.0</a></li>
							<li><a href="#" class="[ animate ]">3.0.3</a></li>
							<li><a href="#" class="[ animate ]">3.0.1</a></li>
							<li><a href="#" class="[ animate ]">3.0.0</a></li>
							<li><a href="#" class="[ animate ]">2.3.2</a></li>
						</ul>
					</li>
					<li><a class="animate" href="#register">Register</a></li>
					<li><a class="animate" href="#login">Login</a></li>
                    <li class="[ hidden-xs ]"><a href="#toggle-search" class="[ animate ]"><span class="[ glyphicon glyphicon-search ]"></span></a></li>
				</ul>
			</div>
		</div>
		<div class="[ bootsnipp-search animate ]">
			<div class="[ container ]">
				<form action="http://bootsnipp.com/search" method="GET" role="search">
					<div class="[ input-group ]">
						<input type="text" class="[ form-control ]" name="q" placeholder="Search for snippets and hit enter">
						<span class="[ input-group-btn ]">
							<button class="[ btn btn-danger ]" type="reset"><span class="[ glyphicon glyphicon-remove ]"></span></button>
						</span>
					</div>
				</form>
			</div>
		</div>
	</nav>
	</body>
</html>	
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="http://bootsnipp.com/dist/scripts.min.js"></script>
    <script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ace/1.2.5/ace.js"></script>
<script>
$(function() { 

    $('a[href="#toggle-search"], .navbar-bootsnipp .bootsnipp-search .input-group-btn > .btn[type="reset"]').on('click', function(event) {
		event.preventDefault();
		$('.navbar-bootsnipp .bootsnipp-search .input-group > input').val('');
		$('.navbar-bootsnipp .bootsnipp-search').toggleClass('open');
		$('a[href="#toggle-search"]').closest('li').toggleClass('active');

		if ($('.navbar-bootsnipp .bootsnipp-search').hasClass('open')) {
			/* I think .focus dosen't like css animations, set timeout to make sure input gets focus */
			setTimeout(function() { 
				$('.navbar-bootsnipp .bootsnipp-search .form-control').focus();
			}, 100);
		}			
	});

	$(document).on('keyup', function(event) {
		if (event.which == 27 && $('.navbar-bootsnipp .bootsnipp-search').hasClass('open')) {
			$('a[href="#toggle-search"]').trigger('click');
		}
	});
    
});
    
</script>
	