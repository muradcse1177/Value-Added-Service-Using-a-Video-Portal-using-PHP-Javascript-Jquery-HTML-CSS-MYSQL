
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">

    <title>Navbar with Search Box, Social Media and Login - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
    /*COLORS*/
.color-red{color: #FF0000;}
.color-green{color: #6cbc42;}
.color-blue{color: #0080c5;}
.color-twitter{color:#00aced;}
.color-facebook{color:#00539f;}
.color-linkedin{color:#0176b5;}

/*NAVBAR STYLES*/
.navbar-border{border-bottom: solid 5px #0080c5;}
.login-panel { 
    min-width: 250px; 
    border-top: 14px solid #0080c5;
    border-right: 1px solid #0080c5;
    border-bottom-right-radius:0.5em;
    -moz-border-radius-bottomright:0.5em;
    border-bottom: 3px solid #0080c5;
    border-left: 1px solid #0080c5;
    border-bottom-left-radius:0.5em;
    -moz-border-radius-bottomleft:0.5em;
    }
.dropdown-header { display: block !imnportant; padding-bottom: 30px; height: 10px; }
.login-header { font-size: 20px; font-weight: bold; display: inline; float: left; }
.forgot-password { font-size: 10px; display: inline; float: right; vertical-align: bottom; padding-top: 10px; }
.center-text { text-align: center; }
.error-message { font-size: 11px; }
    </style>
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'http://bootsnipp.com');
        });
    </script>
</head>
<body>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" rel="stylesheet">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>

<div class="container">
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid navbar-border">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><i class="fa fa-home"></i> Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#"><i class="fa fa-building"></i> About</a></li>
        <li><a href="#"><i class="fa fa-phone"></i> Contact</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-anchor"></i> Support <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#"><i class="fa fa-envelope"></i> Email</a></li>
            <li><a href="#"><i class="fa fa-comments"></i> Chat</a></li>
            <li><a href="#"><i class="fa fa-phone"></i> Phone Support</a></li>
            <li class="divider"></li>
            <li class="active"><a href="#"><i class="fa fa-credit-card"></i> Make a Payment</a></li>
          </ul>
        </li>
        <li>
            <form class="navbar-form" role="search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="search" name="q">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                </div>
            </div>
            </form>    
        </li>
        <li><a href="#"><i class="fa fa-twitter color-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-facebook color-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin color-linkedin"></i></a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cogs"></i> <b class="color-blue">Login</b> <span class="caret"></span></a>
          <ul class="dropdown-menu login-panel">
            <li>
                <div class="dropdown-header">
                    <span class="login-header color-blue">Sign In</span>
                    <span class="forgot-password color-blue"><a href="">Forgot password?</a></span>
                </div>
                <div class="clearfix"></div>
                <div style="padding: 8px;">
                    <form id="loginform" class="form-horizontal" role="form"  autocomplete="off">
                        <div style="margin-bottom: 10px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user color-blue"></i></span>
                            <!-- USERNAME OR EMAIL ADDRESS -->
                            <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email" pattern="[a-zA-Z0-9]{5,}" title="Minimum 5 letters or numbers." oninvalid="this.setCustomValidity('Enter User Name Here')" oninput="setCustomValidity('')" required>                                        
                        </div>
                        <div style="margin-bottom: 10px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock color-blue"></i></span>
                            <!--  PASSWORD  -->
                            <input id="login-password" type="password" class="form-control" name="password" placeholder="password" pattern=".{5,}" title="Minmimum 5 letters or numbers." oninvalid="this.setCustomValidity('Enter a password')" oninput="setCustomValidity('')" required>
                        </div>
                        <div class="center-text">
                            <label><input id="login-remember" type="checkbox" name="remember" value="1"> Remember me</label>
                        </div>
                        <div class="center-text">
                            <span class="error-message color-red"><i class="glyphicon glyphicon-warning-sign"></i> Username & password don't match!</span>
                        </div>
                        <div style="margin-top:10px" class="form-group">
                            <!-- Button -->
                            <div class="col-sm-12 controls center-text">
                              <a id="btn-login" href="#" class="btn btn-block btn-success">Login</a>
                              <!--<a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>-->
                            </div>
                        </div>  
                    </form>
                </div>                
            </li>
            <!--<li class="divider"></li>-->
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
</body>
</html>
