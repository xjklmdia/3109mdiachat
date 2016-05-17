<? include("config.php");
	include("login.php");
?>
<html>
<head>
<script src= "//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src = "chat.js"></script>
<link href = "chat.css" rel = "stylesheet"/>
<title> PHP chat </title>
	</head>
	<body>
		<div id="content" style = "margin-top:10px;height:100%">
			<center><h1> Group chat </h1></center>
			<div class = "chat">
				<div class = "users">
					<?include ("users.php");?>
				</div>
				<div class = "chatbox">
					<? 
						if(isset($_SESSION['user'])){
							include("chatbox.php"); 
						} else {
							$display_case=true;
							include("login.php");
						}
						?>
					</div>
	</body>
</html>