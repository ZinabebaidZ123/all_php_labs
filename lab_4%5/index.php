<?php

require_once("./vendor/autoload.php");
require_once("./config.php");

$pages=["all","details" , "needed_data"];
$page=(isset($_GET["view"])&&in_array($_GET["view"],$pages))?$_GET["view"]:"needed_data";

$glass = new Db();


$id= (isset($_GET['id'])&& is_numeric($_GET['id']))?$_GET['id']:17;

$data = $glass->get_record_by_id("items",$id);


if ($page=="all"){
    require_once("./views/all.php");

}elseif($page == "needed_data"){
    require_once("./views/needed_data.php");


}
else{
    require_once("./views/details.php");
}

?>