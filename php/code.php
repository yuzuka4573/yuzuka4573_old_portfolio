<?php

function atbash_encode($string) {
 $string = preg_replace("/[^a-z]/", "", strtolower($string));
 $final = ""; $v = array(
 "a"=>"z",
 "b"=>"y",
 "c"=>"x",
 "d"=>"w",
 "e"=>"v",
 "f"=>"u",
 "g"=>"t",
 "h"=>"s",
 "i"=>"r",
 "j"=>"q",
 "k"=>"p",
 "l"=>"o",
 "m"=>"n",
 "n"=>"m",
 "o"=>"l",
 "p"=>"k",
 "q"=>"j",
 "r"=>"i",
 "s"=>"h",
 "t"=>"g",
 "u"=>"f",
 "v"=>"e",
 "w"=>"d",
 "x"=>"c",
 "y"=>"b",
 "z"=>"a" );
   for($i=0;$i<strlen($string);$i++) {
 $final .= $v[$string[$i]]; 
} 
  return $final;
 }

list($type, $code) = split('[/.-:;\/[\s]+/]', $passcode);
switch($type){

case "none";
$code2=$code;
break;

case "atb";
$code2 =atbash_encode($code);
break;

case "base";
$code2 = base64_decode($code);
break;


}
print ($passcode);
print ($code);
print ($type);
print ($code2);




//htmlspecialchars($_POST["passcode"], ENT_QUOTES);
//$target = $_POST["passcode"];
//echo $target;

if ($target=="aaa") {

	//header("Location: http://nicofun.club/");
print ($passcode);
print ($type);
print($code2);
}else if($target=="bbb"){
print ($passcode);
print ($type);
print($code2);
	//header("Location: http://nicofun.club/blog/");

}else if($target=="storia"){
echo base64_encode($target);




}else{
print("none");
print ($passcode);
print ($type);
print($code2);
}


exit;
?>
