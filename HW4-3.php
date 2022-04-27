<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["name"])) 
  {
    $nameErr = "Number is required";
  } else 
  {
    $name = test_input($_POST["name"]);
  }
}  
  
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Homework 4-3</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  100이하의 정수 입력 : <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <input type="submit" name="확인" value="확인">  
</form>

<?php
echo "<h2>Your Input:</h2>";
$a = 1;
$b = 1;
if($name > 100)
{
    echo("100이하의 정수를 입력해주십시오.");
}
else
{
    for($i = 0; $i < $name; $i++)
    {
    $c = $b +$a;
    echo $a." ";
    $a = $b;
    $b = $c;
    }
}
?>

</body>
</html>