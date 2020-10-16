<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>PAYMENT GATEWAY INTEGRATION</title>
	<style>
		*{
  margin: 0;
  padding: 0;
  font-family:'Dancing Script', cursive;
  text-align: center;
}

header{
  background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)) ,url('back.jpg');
  height: 90vh;
  background-position: center;
  background-size: cover;
}
.title{
  position: absolute;
  top: 20%;
  left: 20%;
  transform: translate(-50%,-50%);
}

.title h1{
  color: #fff;
  font-size: 30px;
}

.button{
   position: absolute;
  top: 30%;
  left: 13%;
  transform: translate(-50%,-50%);
  font-size: 20px;
}

.btn{
  border: 0.5px solid transparent;
  padding: 5px 15px;
  color: #fff;
  text-decoration: none;
  transition: 0.8s
}

.btn:hover{
  background-color: white;
  color: black;
}
		
</style>
</head>
<body>
	<header>
		<div class="title">
			<h1 style="text-align:left; font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; color: lightblack; padding-right: 5%;">WELCOME TO MY CHARITY!!</h1>
		</div>
		<div class="button">
			<?php
				echo "<a href='PayUMoney_form.php' class='btn'>DONATE!!</a>";
			?>
		</div>
		 <dl style="text-align:left; padding-top: 2%; padding-left: 0%; color:olive; font-size: 30px;">
      <dt><i>"Your one help can change someones life".</dt>  
      </dl>
	</header>  
	<footer>
		<div>
			<center><p style="color:black; padding-top: 1.5%;">&copy; Created by Neha H A</p></center>
		</div>
	</footer>
</body>
</html>
