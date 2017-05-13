<?php
htmlspecialchars($_POST["name"], ENT_QUOTES);
$cn = $_POST["name"];
htmlspecialchars($_POST["body"], ENT_QUOTES);
$cb = $_POST["body"];

if($cn != null and $cb!= null ){
$post = array('id' => $_POST["id"],
				'name' => htmlspecialchars($_POST["name"]),
				'body' => '"'.htmlspecialchars($_POST["body"]).'"');

$fp = fopen("comment.csv", "a");
fwrite($fp, implode(',', $post)."\n");
fclose($fp);


}else if($cn == null and $cb ==null){
print("&#21517;&#21069;&#12289;&#12467;&#12513;&#12531;&#12488;&#12364;&#31354;&#27396;&#12391;&#12377;");
}else if($cn == null){
print("&#21517;&#21069;&#12364;&#31354;&#27396;&#12391;&#12377;");
}else if($cb == null){
print("&#12467;&#12513;&#12531;&#12488;&#12364;&#31354;&#27396;&#12391;&#12377;");
}
?>