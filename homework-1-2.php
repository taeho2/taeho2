<!DOCTYPE html>
<html>
<body>

<?php
 if (isset ($_GET['i']))
  {
    $n = $_GET['i'];
    $sum = 0;
    $mul = 1;
    
    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
        $mul *= $i;
    }

    echo("입력한 숫자 : " .$n. "<br>");

    echo("합계 : ");
    for ($i = 1; $i <= $n; $i++) {
        echo($i);
        if ($i < $n) {
            echo(" + ");
        }
    }
    echo(" = " . $sum);

    echo("<br>");

    echo("팩토리얼 : ");
    for ($i = 1; $i <= $n; $i++) {
        echo($i);
        if ($i < $n) {
            echo(" * ");
        }
    }
    echo(" = " . $mul);
}

  
?>
</body>
</html>