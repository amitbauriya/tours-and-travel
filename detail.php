<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tours Travel Blog | Details</title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" media="screen" href="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.css" />
    <link href="stylecss.css" rel='stylesheet' type='text/css'/>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.pack.min.js"></script>
    <script type="text/javascript">
        $(function($){
            var addToAll = false;
            var gallery = true;
            var titlePosition = 'inside';
            $(addToAll ? 'img' : 'img.fancybox').each(function(){
                var $this = $(this);
                var title = $this.attr('title');
                var src = $this.attr('data-big') || $this.attr('src');
                var a = $('<a href="#" class="fancybox"></a>').attr('href', src).attr('title', title);
                $this.wrap(a);
            });
            if (gallery)
                $('a.fancybox').attr('rel', 'fancyboxgallery');
            $('a.fancybox').fancybox({
                titlePosition: titlePosition
            });
        });
        $.noConflict();
    </script>
</head>
<body>
<?php include('function.php'); ?>
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
while($data=mysqli_fetch_array($result))
{
    echo "<tr><td style=' padding:5px;'><a href='subcat.php?catid=$data[0]'>$data[1]</a></td></tr>";

}
?>
</table>
</div>
<div style="width:800px; float:left">
<table cellpadding="0px" cellspacing="0" width="1000px" >

<tr><td class="paraText" width="900px">
<table cellpadding="0" cellspacing="0" width="900px" border="0">
<tr>
<td>
<table border="0" width="600px" height="400px" align="center" >
    <script type="text/javascript">
        $(document).ready(function() {
            $(".fancybox").fancybox();
        });
    </script>
    <?php
$s="select * from package,category,subcategory where package.category=category.cat_id and package.subcategory=subcategory.subcatid and package.packid='" . $_GET["pid"] ."'";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
$n=0;
$data=mysqli_fetch_array($result);
mysqli_close($cn);
?>
    <tr><td class="headingText" colspan="3"><?php echo $data[1];?></td></tr>
    <tr><td class="middletext"><img class="fancybox" src="Admin/packimages/<?php echo $data[5];?>" width="200px" height="200px"  /></td>

        <td class="middletext" style="padding-left:15px"><img class="fancybox" src="Admin/packimages/<?php echo $data[6];?>" width="200px" height="200px"  /></td>

        <td class="middletext" style="padding-left:15px"><img class="fancybox" src="Admin/packimages/<?php echo $data[7];?>" width="200px" height="200px"  /></td>
    </tr>
<tr><td  colspan="3" height="90px"><span class="middletext">Category:</span><span style="margin-left: 38px"><?php echo $data[10];?></span>
 <br/>
  <span class="middletext">Subcategory:</span><span style="margin-left: 11px"><?php echo $data[12];?></span>
        <br />
   <span class="middletext">Price (Indian):</span><span style="margin-left: 5px"><?php echo $data[4];?></span>
</td></tr>
<tr><td colspan="3"><p><?php echo $data[8];?></p></td></tr>
<tr><td align="left" colspan="2" height="50px"><a href="enquiry.php?pid=<?php echo $data[0];   ?>"><input type="button" value="Enquiry" name="sbmt" /></a></td></tr>
</table>
</td>
</tr>
</table>
</td></tr>
</table>
</div>
</div>
<div style="clear:both"></div>
<?php include('bottom.php'); ?>
</body>
</html>



