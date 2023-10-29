<?php
$x = $_POST["inputX"];
$y = $_POST["inputY"];
$r = $_POST["inputR"];



if ((strlen($x)) <= 4 && (strlen($y)) <= 18 && (strlen($r)) <= 3) {
    if (is_numeric($x) && is_numeric($y) && is_numeric($r)) {
        if (!($x < -2 || $x > 2 || $y < -5 || $y > 5 || $r < 1 || $r > 3)) {
            if ($x >= 0 && $y <= 1.5 && $y >= 0) {
                echo "win";
            } else if ($x < 0 && $y <= (0.5 * $x + 1.5) && $y >= 0) {
                echo "win";
            } else if ($x < 0 && $y > (- (sqrt(9 - pow($x, 2)))) && $y < 0) {
                echo "win";
            } else {
                echo "loose";
            }
        }
    }
}


function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}
