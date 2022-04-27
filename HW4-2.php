<!DOCTYPE html>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<?php
$nameErr= "";
$name = $n = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["i"])) 
  {
    $nameErr = "Number is required";
  } 
  else 
  {
    $n = test_input($_POST["i"]);
  }
}  
  
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Homework4-2</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  10~ 100의 정수 : <input type="text" name="i" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <input type="submit" name="확인" value="확인">  
</form>

<?php
echo "<h2>Your Input:</h2>";
$dada = array();
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["i"])) 
  {
    echo "";
  } 
  else if ($n < 10 || $n >100)
  {
    echo "조건에 맞게 다시 입력하세요";
  }
  else 
  {
    for ($i = 0; $i <= $n; $i++) 
    {
      $dada[$i] = rand(0,100);
    }
    for ($i = 1; $i <= $n; $i++) 
    {
    echo("랜덤 숫자 : ".$dada[$i]."<br>");
    }
    echo ("<br>");
    sort ($dada);
    for ($i = 1; $i <= $n; $i++) 
    {
      echo("올림차순 정렬 : ".$dada[$i]."<br>");
    }
  }
}
?>
</body>
</html>