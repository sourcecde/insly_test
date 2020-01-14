<?php
/**
 * TASK 1 - Name
 * 01110000 01110010 01101001 01101110 01110100 00100000 01101111 01110101 01110100 00100000 01111001 01101111 01110101 01110010 00100000 01101110 01100001 01101101 01100101 00100000 01110111 01101001 01110100 01101000 00100000 01101111 01101110 01100101 00100000 01101111 01100110 00100000 01110000 01101000 01110000 00100000 01101100 01101111 01101111 01110000 01110011
 *
 * Created by : Debraj Ghosh
 * Date : 13.01.2020
 **/

$str = "01110000 01110010 01101001 01101110 01110100 00100000 01101111 01110101 01110100 00100000 01111001 01101111 01110101 01110010 00100000 01101110 01100001 01101101 01100101 00100000 01110111 01101001 01110100 01101000 00100000 01101111 01101110 01100101 00100000 01101111 01100110 00100000 01110000 01101000 01110000 00100000 01101100 01101111 01101111 01110000 01110011";
$strArr = explode(" ", $str);
$strChr = "";
foreach ($strArr AS $strVal) {
    $strChr .= chr(bindec($strVal));
}
echo $strChr . "<br/>";

$newStr = "Debraj Ghosh";
$ordStr = $decbinStr = "";
for ($s = 0; $s < strlen($newStr); $s++) {
    echo $newStr[$s];
    $ordStr .= ord($newStr[$s]) . " ";
    $decbinStr .= decbin(ord($newStr[$s])) . " ";
}
echo "<br/>Decimal: " . $ordStr;
echo "<br/>Binary: " . $decbinStr;

?>