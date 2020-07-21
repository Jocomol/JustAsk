<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/images/favicon.ico">

    <title>JustASK!</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">


    <!-- Main site CSS link -->
    <link href="/css/index.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>



    <div class="container">
      <!-- Static navbar -->
      <nav class="navbar navbar-default">
      	<div class="container-fluid">
      		<div class="navbar-header">
      			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"></button>
      				<img id="navbarlogo" src="/images/navbarlogo.png" alt="justAsk! - Error while loading Image...">
      		</div>
      		<div id="navbar" class="navbar-collapse collapse">
      			<ul class="nav navbar-nav">
      				<li class="active"><a class="test" id="homebutton" href="/">Home</a></li>
      				<li><a id="newquestionbutton" href="/newquestion/newquestion">+ New Question</a></li>
      				<li><a id="aboutbutton" href="About">About</a></li>
      				<li><a id="contactbutton" href="Contact">Contact</a></li>

      				<li class="dropdown">
      					<a id="profile" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile <span class="caret"></span></a>
      					<ul class="dropdown-menu">

      						<li><a href="#">Action</a>
      						<p>//username//</p><img src="/images/profileimg.png" alt="Profileimage"></li>

      						<li><a href="#">Another action</a></li>
      						<li><a href="#">Edit Profile</a></li>


      					</ul>

      				</li>

                <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
        			<ul id="login-dp" class="dropdown-menu">
        				<li>
        					 <div class="row">
        							<div class="col-md-12">


        								 <form class="form" role="form" method="post" action="login_check" accept-charset="UTF-8" id="login-nav">
        										<div class="form-group">

        											 <input name="username" id="usernameinput" type="text" class="form-control input-group" id="exampleInputEmail2" placeholder="Username" required>
        										</div>
        										<div class="form-group">

        											 <input name="password" type="password" class="form-control input-group" id="exampleInputPassword2" placeholder="Password" required>

        										</div>
        										<div class="form-group">
        											 <button type="submit" class="btn btn-primary btn-block signin input-group">Sign in</button>


        										</div>

        								 </form>
        							</div>

        					 </div>
        				</li>
        			</ul>

              				</li>

                      <li>
                        <div class="dropme">
                          <a href="/Register">Create an account!</a>
                        </div>
                    </li>
              			</ul>



      		</div><!--/.nav-collapse -->

      	</div><!--/.container-fluid -->
      </nav>
