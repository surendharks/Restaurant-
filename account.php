<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CREATING THE ACCOUNT</title>
	<style type="text/css">
	.sign li{
		color: white;
		font-size: 15px;
		font-family: cursive;
		text-align: center;
	}
		#account{
			background-color: maroon;
			color: white;
			opacity: 1;
			display: flex;
			justify-content: center;
		}
		.sign{
			display: flex;
			justify-content: center;
			

		}
		#formsub{
			height: 30px;
			width: 70px;
			font-size: 15px;

		}
		#formsub1 {
			width: 60px;
			font-size: 18px;
			padding: 3px;
			text-decoration: none;
			color: black;
			border-radius: 10px;

		}
		.sign li{
			display: inline-flex;
			padding: 20px;
			list-style: none;
			background-color: maroon;



		}
		.sign{
			background-color: maroon;
			padding: 10px;
		}
		.sign input{
			width: 300px;
			height: 24px;
			font-size: 14px;
border-radius: 10px;
						border-color: maroon;

		}

		a{
			background-color: gray;

		}
		
		#privacy h4{
			text-align: center;
			color: #867e7e;
			font-size: 15px;
			text-align: center;
		}
		.gender input {
			font-size: 14px;
			width: 15px;
			 height:15px;
			 border-radius: 10px;
		}
		#privacy{
			opacity: 1;
			font-size: 16px;
			padding: 6px;
						text-align: justify;
			color: maroon;
			background-color: gold;
		}
		h1{
			display: flex;
]	white-space: 200px;
background-color: maroon;
font-size: 25px;
text-transform: capitalize
		}
		li #lname{
			padding: 10px;
		}
		
	</style>
</head>
<body>

	<div class="account">
	<div id="account">
		
		<h1>create your account </h1>
				

	</div>
	<div id="privacy">
            		<h4>TERMS AND CONDITION</h4>
            		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            	</div>
	<div class="sign">
		<ul>
			<form action="database.php" method="post">
			<li id="fname">FNAME&nbsp;&nbsp;<br><br> <input type="text" name="fname" required></li>
			<li id="lname">LNAME&nbsp;&nbsp;<br><br> <input type="text" name="lname" required></li>
			<li  id="email">EMAIL&nbsp;&nbsp;<br><br><input type="text" name="email"required></li>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li id="dob">DOB &nbsp;&nbsp;<br><br><input type="date"  placeholder="" name="dob" required></li>
			<li class="gender ">GENDER&nbsp;&nbsp;<br><br><input  type="checkbox" name="gender" value="male"required >MALE&nbsp;&nbsp;<input type="checkbox" name="gender" value="Female">FEMALE</li>
			<li id="pass">PASSWORD&nbsp;&nbsp;<br><br><input type="PASSWORD" name="pwd" value="PWD" placeholder="none"required></li>
			<li id="cpass">CONFIRM PASSWORD&nbsp;&nbsp;<br><input type="PASSWORD" name="cpwd" value="CPWD" placeholder="none"required>
				
             <div id="button">
            	<br><br><br><br><button id ="formsub1" type ="button" value= "back" onclick="move()" >back</button>
            		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id ="formsub" type="submit" name="">
            	</div>

           </form>


            </li>
            <script type="text/javascript">
            	function move()
            	{
			window.document.location="delivery.html"
            	}
            </script>
	</ul>
	</div>           
	
            	
            	
            
            
            	
     



	

</body>
</html>