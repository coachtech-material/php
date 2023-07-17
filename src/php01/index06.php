<?php
function addNumber($a, $b)
{
    $add = $a + $b;
    return $add;
}

$total = addNumber(2, 3);
print $total;
echo "<br />";

function question1($score1, $score2, $score3){
    $Answer = $score1 + $score2 + $score3;
    if($Answer>210){
        echo "合計点は",$Answer,"なので合格です";
    }else{
        echo "合計点は",$Answer,"なので不合格です";
    }
}
question1(50,60,70);
echo "<br />";
function exam($score1, $score2, $score3)
{
    $total = $score1 + $score2 + $score3;
    if ($total > 210) {
    echo $total . "点なので合格です";
    } else {
    echo $total . "点なので不合格です";
    }
}
echo (exam(80, 60, 90));

echo "<br />";
function getSquareArea($base, $height)
{
  return $base * $height;
}
function getTriangleArea($base, $height)
{
  return $base * $height / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height)
{
  return ($upperBase + $lowerBase) * $height / 2;
}
echo getSquareArea(5, 5) . "\n";
echo "<br />";
echo getTriangleArea(7, 8) . "\n";
echo "<br />";
echo getTrapezoidArea(4, 5, 4);
?>