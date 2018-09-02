<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tours Travel Blog | Subcategory</title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href="stylecss.css" rel='stylesheet' type='text/css'/>
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

<?php include('top.php'); ?>

<?php include('slider.php'); ?>

<div style="height:0"></div>
<div class=category-content>
    <div class=category-sidebar>
        <table cellpadding="0" cellspacing="0">
            <tr><td><div style="background: #4169E1;box-shadow: 0 2px 5px 0 rgba(0,0,0,.26);padding: 7px;margin-left: 2px; font-size: 20px;">Category</div></td></tr>
            <div style="width:1000px; margin:auto" >

                <div style="width:200px; float:left">
<?php

$s="select * from category";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
while($data=mysqli_fetch_array($result))
{
		echo "<tr><td style=' padding:5px;'><a href='subcat.php?catid=$data[0]'>$data[1]</a></td></tr>";
}

?>
</table>
</div>

<div style="width:800px; float:left">
<table cellpadding="0px" cellspacing="0" width="1000px">
<tr><td class="headingText">Subcategories</td></tr>
<tr><td class="paraText" width="900px">
<table cellpadding="0" cellspacing="0" width="900px">
<?php
$s="select * from subcategory where Catid='" .$_GET["catid"] . "'";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
$n=0;
while($data=mysqli_fetch_array($result))
{
	if($n%3==0)
	{
	?>
<tr>
<?php
	}?>
<td>
<table border="0" width="100px" bordercolor="#FF6666">
<tr><td align="center" style="background-color: #424a50;font-family:Lucida Calligraphy;font-size: 16px;padding: 5px;color:#FFF;"><?php echo $data[1];?> </td></tr>
<tr><td class="image"><a href="package.php?subcatid=<?php echo $data[0];?>"><img src="Admin/subcatimages/<?php echo $data[3]; ?>" width="250px" height="200px" /></a></td></tr><br />
<tr><td align="center" style="background-color: #111213;font-family: Lato,Sans-serif;font-size: 16px;"><a href="package.php?subcatid=<?php echo $data[0];?>"><font color="#FFFFFF">View Details</font></a></td></tr>
</table>
</td>
<?php
if($n%3==2)
{
?>
</tr>
<?php
}
$n=$n+1;
}
mysqli_close($cn);
?>

</table>
</td></tr></table>
</div>
</div>

<div style="clear:both"></div>

<?php include('bottom.php'); ?>
</body>
</html>