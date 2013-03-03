<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Bones CS5311.B</title>
<link href="css/assnphp.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="container">
  <div class="header"><a href="#"><img src="images/mysqlphp.jpg" width="169" height="169" alt="logo"> </a> 
  <h1> CS5311.B | Advanced Web Programming
 </h1>
    <!-- end .header --></div>
  <div class="sidebar1">
    <ul class="nav">
      <li><a href="index.html">Home</a></li>
      <li><a href="#">Link two</a></li>
      <li><a href="#">Link three</a></li>
      <li><a href="#">Link four</a></li>
    </ul>
    <p>&nbsp;</p>
    
    <!-- end .sidebar1 --></div>
  <div class="content">
    <h2>Introduction to Sharon Bone</h2>
    <p>I'm a former IT person - System Administrator for a not so popular ERP system (Baan). It's been six years but I'm ready to get back to the tech world. Seems like this internet thing is here to stay so I plan on acquiring the skills needed to become a successful, highly regarded and well-paid web professional!</p>
    <h2>Did you know?</h2>
    <p>There are 
    <?php
	function daycount($classdate) {
		return (strtotime($classdate) - strtotime(date("Y-m-d")))/(60*60*24);

	}
	$daycount = daycount("2013-05-22");
	?>
    <span class="results">
    <?php
	echo ceil($daycount);
	?>
    </span>
     days left in this class. </p>
         
<?php 
//check to see if the page is loading from a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {
// if there was a POST
function age($birthdate) {
	return (strtotime("2013-05-22") - strtotime($birthdate))/(60*60*24*365);
}
// assign the result of calling the age( ) function passing the input date as the argument to a variable
$age =  age($_POST['birthdate']);
?>
<h2>Now you know</h2>
<p>You will be <span class="results"><?php echo intval($age) ?> </span>years old when the class finishes.</p> <?php
} else {   
?>
<h2>Would you like to know?</h2> 
<p>Just how old you will be when the class ends? If so, enter your birthdate below.
	
    <form action="" method="post">
	<input name="birthdate" type="date">
    <input name="" type="submit">
	</form>
	<?php
      }
    ?>
    
    <!-- end .content --></div>
  <div class="footer">
    <p>&copy; Hensmama Productions 2013</p>
    <!-- end .footer --></div>
  <!-- end .container --></div>

</body>
</html>