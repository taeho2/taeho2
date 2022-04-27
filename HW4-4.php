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
$nameErr = "";
$name = $width = $width1 = $width2 = $height = $height1 = $height2 = $height3 =$radius = $radius1 = $radius2 = $length = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["width"])) {
    $nameErr = "Number is required";
  } else {
    $width = test_input($_POST["width"]);
  }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["width1"])) {
      $nameErr = "Number is required";
    } else 
    {
      $width1 = test_input($_POST["width1"]);
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["width2"])) {
      $nameErr = "Number is required";
    } else {
      $width2 = test_input($_POST["width2"]);
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["height"])) {
      $nameErr = "Number is required";
    } else {
      $height = test_input($_POST["height"]);
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["height1"])) {
      $nameErr = "Number is required";
    } else {
      $height1 = test_input($_POST["height1"]);
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["height2"])) {
      $nameErr = "Number is required";
    } else {
      $height2 = test_input($_POST["height2"]);
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["height3"])) {
      $nameErr = "Number is required";
    } else {
      $height3 = test_input($_POST["height3"]);
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["radius"])) {
      $nameErr = "Number is required";
    } else {
      $radius = test_input($_POST["radius"]);
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["radius1"])) {
      $nameErr = "Number is required";
    } else {
      $radius1 = test_input($_POST["radius1"]);
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["radius2"])) {
      $nameErr = "Number is required";
    } else {
      $radius2 = test_input($_POST["radius2"]);
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["length"])) {
      $nameErr = "Number is required";
    } else {
      $length = test_input($_POST["length"]);
    }
  }
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Homework4-4</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  삼각형 <br>
  밑변: <input type="text" name="width" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  높이: <input type="text" name="height" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <input type="submit" name="확인" value="확인">  
  <br><br>
  직사각형<br>
  가로: <input type="text" name="width1" value="<?php echo $name;?>">
  <span class="error">*<?php echo $nameErr;?></span>
  세로: <input type="text" name="height1" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <input type="submit" name="확인" value="확인">  
  <br><br>
  원 <br>
  반지름: <input type="text" name="radius" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <input type="submit" name="확인" value="확인">  
  <br><br>
  직육면체<br>
  가로: <input type="text" name="width2" value="<?php echo $name;?>">
  <span class="error">*<?php echo $nameErr;?></span>
  세로: <input type="text" name="height2" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  높이: <input type="text" name="length" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <input type="submit" name="확인" value="확인">  
  <br><br>
  원통<br>
  반지름: <input type="text" name="radius1" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  높이: <input type="text" name="height3" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <input type="submit" name="확인" value="확인">  
  <br><br>
  구<br>
  반지름: <input type="text" name="radius2" value="<?php echo $name;?>">
  <span class="error">*<?php echo $nameErr;?></span>
  <input type="submit" name="확인" value="확인">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo( "삼각형의 면적: ". $width * $height/2 . "<br>");
echo("직사각형의 면적: ". $width1 * $height1. "<br>");
echo ("원의 면적: ". pi() * $radius * $radius . "<br>");
echo ("직육면체의 체적: ". $width2 * $length * $height2 . "<br>");
echo("원통의 체적: ". pi() * $radius1 * $radius1 * $height3  . "<br>");
echo("구의 체적: ". pi() * $radius2 * $radius2 * $radius2 /3 . "<br>");
?>

</body>
</html>