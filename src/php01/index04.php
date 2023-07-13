<?php

$a = 5;
if($a === 5){
    echo "\$aは5です";
}
echo "<br />";
$a = 7;
if($a === 5){
    echo "\$aは5です";
}else {
    echo "\$aは5以外です";
}
echo "<br />";
if($a === 7){
    echo "\$aは7です";
}else if($a === 5){
    echo "\$aは5です";
}else{
    echo "\$それ以外です";
}
echo "<br />";
$people = "Saburo";
switch($people){
    case "Saburo":
        echo "三郎です";
        break;
    case "Taro":
        echo "太郎です";
        break;
    default:
        break;
}
echo "<br />";
$result = ($a === 7)?"TRUE":"FALSE";
echo $result;
//$a = 7;
//$b = ($a > 5) ? "TRUE" : "FALSE";
//echo $b;



?>