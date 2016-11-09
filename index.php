<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 31.10.2016
 * Time: 22:28
 */
echo 'Hello World!!!';
echo 'Hello World2!!!';
echo 'goodbay!!!';
echo 'goodbay!!!';
echo 'Hello World!!!3';




function p($name=null){
if(!isset($name)||empty($name))
echo '<div style="clear:both"></div><h1 style="color:red;">=none=</h1><div style="clear:both"></div>';
echo '<div style="clear:both"></div><pre>';print_r($name);echo '</pre><div style="clear:both"></div>';
}
function dp($name=null){
die(p($name));
}
function hp($name=null){
if(!isset($name)||empty($name)){
echo '<!--';
		p($name);
		echo'-->';
}
}
function gp($name=null,$get=null){
if($get==null){
if(isset($_GET['qqq'])&&!empty($_GET['qqq']))
die(p($name));
}
elseif(isset($get)&&!empty($get)){
if(isset($_GET[$get])&&!empty($_GET[$get]))
die(p($name));
}
}


?>







?>

<div class="header">
    <div class="fgh">
        <div class="lso"></div>
    </div>
    <div class="fgh">
        <div class="lso"></div>
    </div>
    <div class="fgh">
        <div class="lso"></div>
    </div>
</div>
<ul class="header">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
</ul>