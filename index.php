
<?php
// define variables and set to empty values
$nameErr = $emailErr =  "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name =$_POST['name']; 
$email=$_POST['email'];
  if ($name=="") {
    $nameErr = "* Name is required";
  }
  if ($email=="") {
    $emailErr = "* Email is required";
}
}
?>
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  
<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">  
  Name: <input type="text" name="name">
  <span class="error"> <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error"><?php echo $emailErr;?></span>
  <br><br>
 <input type="submit" name="submit" value="Submit">  
</form>
</body>
</html>