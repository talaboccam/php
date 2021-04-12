<html>
<body>
<?php
    $num = 10;
    if ($num % 2 or (is_numeric($num) == 0)) {
        echo $num, " is not an integer or an even number.";
    } else {
        echo $num, " is an integer and an even number.";
    }
?>
</body>
</html>