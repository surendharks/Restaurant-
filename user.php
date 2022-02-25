
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="login.css">
<script type="text/javascript" src="com.js"></script>
<style type="text/css">
	
	ul li{

		display: flex;
		justify-content: safe center;
		color: black;

	}
	.butsub{
		display: flex;
		justify-content: safe center;
		border-radius: 20px;
background-color: yellow;
		padding: 15px;
	}
	#butsub{
		margin-left: 800px;
		border-radius: 20px;

		padding: 15px;
	}
	#menubut{
		display: none;
	}
	#check{
		display: flex;
		justify-content: safe center;
		border-radius: 20px;
background-color: yellow;
		padding: 15px;
	}
	#userform{
	background-color: gold;
	margin-top: -22px;
	border-radius: 0px;
}
#address{
	background-color: maroon;
	color: gold;
}
</style>
	</head>
	<body>
		
		<h1 id="userh1">Enter the Address</h1>

		<div id="userform">

			<ul id="user">
				
				<li >			Name: <input type="text"  name="adname" id ="a"required><br><br></li>
			<li>			Phone : <input type="text" name="adphone" id ="b" required><br><br></li>

				

				<li>		Landmark <input type="text" name="addoor" id ="c" required><br><br>
</li>

				<li>			Street name :<input type="text" id ="d" name="adstreet"required><br><br>
</li>

				<li>			Area: <input id ="e" type="text" name="adarea" required><br><br>
</li>

				<li>			city: <input id ="f" type="text" name="adcity"required><br><br>
</li>

				<li>			State: <input id ="g" type="text" name="adstreet" required> <br><br>

</li>
<li>			pin : <input id ="h" type="text" name="adpin" required><br><br></li>


				<li>  <br><br><input id="butsub" type="button" value="submit your address" onclick="addressing()" ></li>

</ul>
                
	</form>

	
<script type="text/javascript">
	var address;
	
	function addressing(){
		var a=document.getElementById('a').value;
	var b=document.getElementById('b').value;
	var c=document.getElementById('c').value;
	var d=document.getElementById('d').value;
	var e=document.getElementById('e').value;
	var f=document.getElementById('f').value;
	var g=document.getElementById('g').value;
	
	var h=document.getElementById('h').value;

	if((a=="") || (b=="") || (c=="") || (d=="") || (e=="") || (f=="") || (g=="") ||(h==""))
	{
		alert("fill the empty fields");
	}
else{
	 address ="==>Name:  "+a+"==>Phone:"+b+"==>Landmark:"+c+"==>Street: "+d+"==>Area:"+e+"==> city:"+f+"==>State:"+g+"==>Pin:"+h;
	document.getElementById('address').value=""+address;

}



	
	
}
</script>


</div>
<div id="bottom"><br>
<ul>
				
	<li><textarea id="address"type="message" row="500" cols="120" height="400px" width="400px" placeholder="Find Your Address"></textarea> </li><br><br>

				<li><input id="check" type="button" name="" value="check service Availability" onclick="check()" ></li><br><br>
								

							

								
				<li><a id="menubut" onclick="menudis(address)">Menu</a></li><br><br>
			


</ul><br>



</div>

	<p id="flogin"></p>	
	
	</body>
	</html>

<script type="text/javascript">
	function check()
{
		var h=document.getElementById('h').value;
		

	if(h>999 && h!='' )
	{

		document.getElementById('check').style.display="none";
document.getElementById('userform').style.backgroundColor="green";
document.getElementById('menubut').style.display="block";
	}
	else
	{
		if((a=="") || (b=="") || (c=="") || (d=="") || (e=="") || (f=="") || (g=="") ||(h==""))
	{
		alert("fill the empty fields");
	}
	else
	{
		document.getElementById('menubut').style.display="none";
	
document.getElementById('check').style.display="none";
document.getElementById('userform').style.backgroundColor="red";
document.getElementById('check').style.backgroundColor="red";
alert("service not available")

	}
}
}
</script>