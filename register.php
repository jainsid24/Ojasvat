<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<?PHP
function gen_uid($l=4){
    return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyz"), 0, $l);
}

	@mysql_connect("localhost","Sharda_cup","sharda_cup16");
	mysql_select_db("o16");

	$result = mysql_query("SELECT * FROM app");
	$num_rows = mysql_num_rows($result);
?>

<html>
<head>
<title>Ojasvat 2k16 | Registrations</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<meta name="" content="">
<style>
	*{
		font-family: 'Open Sans', sans-serif;
		margin:0;
		padding: 0;
		border: 0;
	}
	.form input[type=text],select{
		background:#e9e9e9;
		width: 100%;
		font-size: 15px;
		margin-bottom: 20px;
		outline: none;
		border-radius: 2px;
		padding:12px 10px;
	}
	.form ul{
		list-style: none;
	}
	.form input[type=submit]{
		padding: 10px 50px;
		background:#499c21;
		font-size: 14px;
		text-transform: uppercase;
		color: white;
	}
	select{
		text-transform: uppercase;
	}
</style>
</head>
<body style="background-image: url('images/pattern.jpg')">
		<div class="" style="margin:auto;width:30%">
			<div style="color:white;padding:12px;text-align: center;font-family: arial;background:#ef4210;font-size: 20px;margin: 20px auto;letter-spacing: 3px"><h2><u>REGISTRATION</u></h2></div>			<form action="print.php" method="POST">
			<div style="overflow:auto;margin: 12px auto;color:white;"><div><div  style="display: inline;text-transform: uppercase; color:black; font-weight: bold;">USERID: <input type="text" name="uid" value="<?php echo("O16".gen_uid()); ?>" style="text-transform: uppercase;background:transparent;outline:black;width:85px;font-weight: bold;font-size:16px;color:#fbf4b9\\"/></div></div></div>
			<div class="form" style="background:white;padding:35px 25px">
				<form action="print.php" method="POST">
					<ul>
						<li><input type="text" name="fname" placeholder="Name" required autocomplete="off"/></li>
						<li><input type="text" name="email" required placeholder="Email" /></li>
						<li><input type="text" name="college" required placeholder="College" autocomplete="on"/></li>
						<li><input type="text" name="phone" required placeholder="Phone Number"/></li>
						<li>
							<select onChange="myFunction()" id="event" name="event">
								<option selected disabled>Select Event</option>
								<option value="cricket">Cricket</option>
								<option value="basketball">Basketball</option>
								<option value="volleyball">Volleyball</option>
								<option value="football">Football</option>
								<option value="tt">Table Tennis</option>
								<option value="badminton">Badminton</option>
								<option value="carrom">Carrom</option>
								<option value="chess">Chess</option>
															
							</select>
						</li>
						<li>
							<select name="accmodation">
								<option selected disabled>Accomodation</option>
								<option value="yes">Yes</option>																
								<option value="no">No</option>																
							</select>
						</li>
						<li><input type="text" readonly name="amount" placeholder="Amount to be Paid" id="amount"/></li><br/>
						<li><input type="submit" value="Register"/></form><form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>"></li></form>
					</ul>
				
			</div>
		</div>
</body>
<script>
	function myFunction(){
		
		//get the value of the selected item
		var event1 = document.getElementById("event").value;
		
		if (event1 == "cricket"){
			
			document.getElementById("amount").value= 7100;
			document.getElementById("event-type").value= "Group";
		}
		if (event1 == "basketball"){
			document.getElementById("amount").value= 3500;
			document.getElementById("event-type").value= "Group";
		}
		if (event1 == "volleyball"){
			document.getElementById("amount").value= 3000;
			document.getElementById("event-type").value= "Group";
		}
		if (event1 == "football"){
			document.getElementById("amount").value= 3500;
			document.getElementById("event-type").value= "Solo";
		}
		if (event1 == "tt"){
			document.getElementById("amount").value= 2000;
			document.getElementById("event-type").value= "Solo";
		}
		if (event1 == "badminton"){
			document.getElementById("amount").value= 2000;
			document.getElementById("event-type").value= "Solo";
		}
		if (event1 == "carrom"){
			document.getElementById("amount").value= 300;
			document.getElementById("event-type").value= "Solo";
		}
		if (event1 == "chess"){
			document.getElementById("amount").value= 300;
			document.getElementById("event-type").value= "Solo";
		}
		
		
	}
</script>
</html>