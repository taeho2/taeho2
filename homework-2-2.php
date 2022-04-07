<!DOCTYPE html>
<html>
<body>

<?php
 if (isset ($_GET['i']))
{
    $n = $_GET['i'];

}
  for ($i = 1; $i <= $n; $i++) 
  {
   echo("랜덤 숫자 : ".rand(10,100)."<br>");
  }
?>
</body>
</html>