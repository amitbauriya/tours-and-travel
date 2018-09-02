<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tours Travel Blog | Enguiry</title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
</head>
<body>
<?php include('function.php'); ?>
<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="insert into enquiry(Packageid,Name,Gender,Mobileno,Email,NoofDays,Child,Adults,Message,Statusfield) values('" . $_REQUEST["pid"] ."','" . $_POST["t1"] ."','" . $_POST["r1"] ."','" . $_POST["t2"] ."','" . $_POST["t3"] ."','" . $_POST["t4"] ."','" . $_POST["t5"] ."','" . $_POST["t6"] ."','" . $_POST["t7"] ."','Pending')";	
	
	
		mysqli_query($cn,$s);
	
	echo "<script>alert('Record Save');</script>";
}
?>
<?php include('top.php'); ?>
<div style="height:50px"></div>
<div class=category-content>
 <div class=category-sidebar>
<table cellpadding="0" cellspacing="0">
<tr><td><div style="background: #4169E1;box-shadow: 0 2px 5px 0 rgba(0,0,0,.26);padding: 7px;margin-left: 2px; font-size: 20px;">Category</div></td></tr>
<?php
$s="select * from category";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;
while($data=mysqli_fetch_array($result))
{
		echo "<tr><td style=' padding:5px;'><a href='subcat.php?catid=$data[0]'>$data[1]</a></td></tr>";
}
?>
</table>

</div>
    <?php

    $s="select * from package,category,subcategory where package.category=category.cat_id and package.subcategory=subcategory.subcatid and package.packid='" . $_GET["pid"] ."'";
    $result=mysqli_query($cn,$s);
    $r=mysqli_num_rows($result);
    //echo $r;
    $n=0;
    $data=mysqli_fetch_array($result);
    mysqli_close($cn);
    ?>
<div style="width:800px; float:left">
<table cellpadding="0px" cellspacing="0" width="1000px">
<tr><td class="headingText">Enquiry</td></tr>
<tr><td class="paraText" width="900px">
<table cellpadding="0" cellspacing="0" width="900px">
<td>
<table border="0"; width="600px" height="400px" align="center" >
<form method="post" enctype="multipart/form-data">
 <tr><td colspan="3" class="headingText">Pack Name:&nbsp;&nbsp;&nbsp;<?php echo $data[1];?></td></tr>
<tr><td colspan="3"><div style="color:black;font-family: Lato,Sans-Serif; font-size:20px;margin-left: 6px;
    margin-bottom: 8px;">Package Id: &nbsp;<?php echo $data[0];?></div></td></tr>
<tr><td class="lefttxt">Name:</td><td class="adjustmargin"><input type="text" name="t1" required pattern="[a-zA-z1 _]{3,50}" title"Please Enter Only Characters and numbers between 1 to 50 for Name"/></td></tr><br/>
<tr><td class="lefttxt">Gender:</td><td class="adjustmargin"><input type="radio" name="r1" value="Male" checked="checked" />  Male    <input type="radio" name="r1"  value="Female"/>  Female</td></tr><br/>
<tr><td class="lefttxt">Mobile No.</td><td class="adjustmargin"><input type="text" name="t2" required pattern="[0-9]{10,12}" title"Please Enter Only numbers between 10 to 12 for Mobile No"/></td></tr><br/>
<tr><td class="lefttxt">Email ID:</td><td class="adjustmargin"><input type="email" name="t3" required /></td><td><br/>
<tr><td class="lefttxt">No. of Days:</td><td class="adjustmargin"><input type="number" name="t4" required pattern="[1 _]{1,20}" title"Please Enter Only numbers between 1 to 20 for No. oF Days"/></td><td><br/>
<tr><td class="lefttxt">No. of Children:</td><td class="adjustmargin"><input type="number" name="t5" required pattern="[1 _]{1,10}" title"Please Enter Only numbers between 1 to 10 for Children"/></td><td><br/>
<tr><td class="lefttxt">No. of Adults:</td><td class="adjustmargin"><input type="number" name="t6" required pattern="[1 _]{1,20}" title"Please Enter Only numbers between 1 to 20 for No.Of Adults"/></td><td><br/>
<tr><td class="lefttxt">Enquiry Message:</td><td class="adjustmargin"><textarea name="t7" required="required"/></textarea></td><td><br/>
<tr><td>&nbsp;</td><td class="adjustmargin"><input type="submit" value="Submit" name="sbmt" /></td></tr>
</form></td></tr>
</table>
</td>
</table>
</td></tr>
</table>
</div>
</div>
<div style="clear:both"></div>
<?php include('bottom.php'); ?>
</body>
</html>

