<!DOCTYPE html>
<html>
<head>
	<title>Futsal.in : Log In</title>
 <link href=<?php echo base_url()."assets/css/bootstrap.css"?> rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href=<?php echo base_url()."assets/css/style.css"?> rel="stylesheet">
    <link href=<?php echo base_url()."assets/css/font-awesome.min.css"?> rel="stylesheet">


    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src=<?php echo base_url()."../../assets/js/ie8-responsive-file-warning.js"?>></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <script src=<?php echo base_url()."assets/js/modernizr.js"?>></script>
  </head>

  <body>

    <!-- Fixed navbar -->
    <!--<div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
      
        </div>
       
      </div>
    </div> -->

	<!-- *****************************************************************************************************************
	 HEADERWRAP
	 ***************************************************************************************************************** -->
	<div id="headerwrap">
	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<h1><img src=<?php echo base_url()."assets/img/futsalin.png"?>></h1>
					
				</div>
				 <div class="grid" style="width:50%; margin: 0 auto;">
    <h1 style="color: white; text-align: center;">Log In</h1>
        <form action="<?php echo base_url()."index.php/Login/aksi_login"; ?>" method="POST" class="form login">
        
         <label for="login__username"><svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#user"></use></svg><span class="hidden">Username</span></label>
               
          
<div class="row">
                	<div class="col-md-4 col-xs-4">
                    </div> 
                    <div class="col-md-4 col-xs-4 form-group">
                       <input name="username" class="form-control " type="text" placeholder="username" required>
                    </div> 
                </div>
<label for="login__password"><svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#lock"></use></svg><span class="hidden">Password</span></label></br> 
                <div class="row">
                	<div class="col-md-4 col-xs-4">
                    </div>
                    <div class="col-md-4 col-xs-4 form-group">
                       <input name="password" class="form-control " type="password" placeholder="password" required>
                    </div> 
                </div>
                <input name="submit" class="btn btn-sub" type="submit" value="Login">
        </form>
<div><?php echo $this-> session->flashdata('pesan');?></div>
		 
		</div>
    </div>
    
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /headerwrap -->

   < <link rel="stylesheet" href="<?php echo base_url()."assets/css/login-style.css" ?>" type="text/css">?>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Universal - All In 1 Template</title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>

    <!-- Bootstrap and Font Awesome css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Css animations  -->
    <link href=<?php echo base_url()."css/animate.css"?>` rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href=<?php echo base_url()."css/style.default.css"?> rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href=<?php echo base_url()."css/custom.css"?> rel="stylesheet">

   <body>


    <svg xmlns="http://www.w3.org/2000/svg" class="icons"><symbol id="arrow-right" viewBox="0 0 1792 1792"><path d="M1600 960q0 54-37 91l-651 651q-39 37-91 37-51 0-90-37l-75-75q-38-38-38-91t38-91l293-293H245q-52 0-84.5-37.5T128 1024V896q0-53 32.5-90.5T245 768h704L656 474q-38-36-38-90t38-90l75-75q38-38 90-38 53 0 91 38l651 651q37 35 37 90z"/></symbol><symbol id="lock" viewBox="0 0 1792 1792"><path d="M640 768h512V576q0-106-75-181t-181-75-181 75-75 181v192zm832 96v576q0 40-28 68t-68 28H416q-40 0-68-28t-28-68V864q0-40 28-68t68-28h32V576q0-184 132-316t316-132 316 132 132 316v192h32q40 0 68 28t28 68z"/></symbol><symbol id="user" viewBox="0 0 1792 1792"><path d="M1600 1405q0 120-73 189.5t-194 69.5H459q-121 0-194-69.5T192 1405q0-53 3.5-103.5t14-109T236 1084t43-97.5 62-81 85.5-53.5T538 832q9 0 42 21.5t74.5 48 108 48T896 971t133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5T896 896 624.5 783.5 512 512t112.5-271.5T896 128t271.5 112.5T1280 512z"/></symbol></svg>

</body>
</html>