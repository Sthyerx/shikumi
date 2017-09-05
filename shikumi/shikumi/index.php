<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="css/login_style.css">
    <link rel="stylesheet" type="text/css" href="css/sidebar.css">

	<link rel="icon" href="img/favicon.ico" type="image/vnd.microsoft.icon">
	
	<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>-->
	<script src="js/jquery.js"></script>

	<title> shikumi </title>
</head>

<body>


<ul class="sidebar-left">
	WERBUNG!?!?
</ul>



<nav>
	<section class="nav-container">
			<aside class="logo"><img src="img/logo.png"></aside>
			<aside class="menu">
				<div class="menu-content">
					<a href="#" id="login">Login</a> | <a href="#">Register</a>
				</div>
				<div class="arrow-up"></div>
			</aside>
			<div class="login-form">
				<form>
					<label>Name</label>
					<div>
						<input type="text" placeholder="Username" required/>
					</div>
					<label>Password</label>
					<div>
						<input type="password" placeholder="Password" required/>
					</div>
					<div>
						<input type="submit" value="Login">
					</div>
					<div>
						<a href="#" style="text-decoration: none;position: relative;font-size: 14px;color: grey;">Forgot Account?</a>
					</div>
				</form>
			</div>
	</section>
</nav>



<ul class="sidebar-right">
  <li><a href="#home">My Profile</a></li>
  <li><a href="#news">Stalking</a></li>
  <li><a href="#contact">Messages</a></li>
  <li><a href="#about">FAQ</a></li>
  <li><a href="#about">Logout</a></li>
</ul>





<!--	
	<ul class="navBar">
		<li><a href="">SHIKUMI</></>
		<li><a href="">new</></>
		<li><a href="">trending</></>
		<li><input></></>
		<li style="float: right;"><a href="">Login</></>
	</ul>
-->


<script type="text/javascript">

$(document).ready(function)(){
	var arrow = $(".arrow-up");
	var form = $(".login-form");
	var status = false;
	$("#login").click(function(event)){
		event.preventDefault();
		alert(0);
	}
}

</script>

</body>


</html>