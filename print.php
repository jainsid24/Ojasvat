<?php 
	
	$localhost = "localhost";
	$username = "Sharda_cup";
	$password = "sharda_cup16";
	
	$fname = $_POST['fname'];

	$email = $_POST['email'];
	$college = $_POST['college'];
	$phone = $_POST['phone'];
	$event = $_POST['event'];
	$accomodation=  $_POST['accmodation'];
	$price = $_POST['amount'];
	$uniqid = $_POST['uid'];
	@mysql_connect("localhost","Sharda_cup","sharda_cup16");
	mysql_select_db("o16");
	
	if (mysql_query("INSERT into app (fname,email,college,mobile,event,accomodation,price,uniqid) values('$fname','$email','$college','$phone','$event','$accomodation','$price','$uniqid')")){}
	else{
		echo(mysql_error());
	}
	
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title></title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<meta name="" content="">
</head>
	<style>
		*{
			margin:0;
			border: 0;
			padding:0;
			font-family: 'Open Sans', sans-serif;
		}
		.label1{
			font-family: 'Open Sans', sans-serif;
			text-transform:capitalize;
			font-size: 28px;
			font-weight:bold;
		}
		.label2{
			font-size: 28px;
			margin-left:10px;
		}
		#btnPrint{
			background:#8cb12c;
			color:white;
			padding:5px 10px;
		}
	</style>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
        $("#btnPrint").live("click", function () {
            var divContents = $("#dvContainer").html();
            var printWindow = window.open('', '', 'height=400,width=800');
            printWindow.document.write('<html><head><title>ShardaCup 2015</title>');
            printWindow.document.write('</head><body >');
            printWindow.document.write(divContents);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        });
        function PrintElem(elem)
		{
		      $('<div/>').append($(elem).clone()).html();
		}
    </script>

<body>
	<div style="height:500px;overflow: auto;width:700px;margin:20px auto;">
    <form id="form1">
    <div id="dvContainer">
      	<div class="header_mast" style="margin:auto;width:600px;"><img src="images/sharda.png" alt="" style="height:70px;width:auto"/><img src="images/nba.png" height="100px" width="100px"		alt="" style="float: right"/>
      	
      	<DIV style="font-family: 'Open Sans', sans-serif;text-transform: uppercase;text-decoration: underline;margin-top:40px;"><cENTER><H2>User Receipt</H2></cENTER></DIV>
      	</div>
      	
      	<div style="margin: 50px auto;width:550px;font-size: 28px;text-transform: capitalize;font-family: 'Open Sans', sans-serif;">
      		<label class="label1">UserID:</label>&nbsp;&nbsp;<label class="label2"><?php echo $uniqid ?></label><br/><br/>
      		<label class="label1">Name:</label>&nbsp;&nbsp;<label class="label2"><?php echo $fname ?></label><br/><br/>
      		<label class="label1">college:</label>&nbsp;&nbsp;<label class="label2"><?php echo $college ?></label><br/><br/>
      		<label class="label1">phone:</label>&nbsp;&nbsp;<label class="label2"><?php echo $phone ?></label><br/><br/>
      		<label class="label1">event:</label>&nbsp;&nbsp;<label class="label2"><?php echo $event ?></label><br/><br/>
      		<label class="label1">Amount:</label>&nbsp;&nbsp;<label class="label2">Rs <?php echo $price ?></label><br/><br/>
      		<label class="label1">Accomodation:</label>&nbsp;&nbsp;<label class="label2"><?php echo $accomodation ?></label>
      	</div>
      	<br/><center>
      	<div style="font-family: 'Open Sans', sans-serif;font-size: 14px">Web Design by n!CX- KR!3G3R5
		<br>jainsid24@gmail.com</div></center>
    </div>
    
    </form>
    </div>
    <center><input type="button" value="Print copy" id="btnPrint" onClick="PrintElem('#dvContainer')"/><br><a href="register.php">Register for another event</a><br>
	<a href="index.html">Go to Ojasvat Home page</center>
</body>
</html>