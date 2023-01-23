<?php


$start = (isset($_GET["start"]) && is_numeric($_GET["start"])&& $_GET["start"]>0)
?$_GET["start"] : 0 ;


$all = $glass->get_records($start);
$prev_btn = (isset($_GET["start"]) && $_GET["start"]> 0 )? $_GET["start"]-5 : 0;
$nex_btn =(int) $start + 5 ;
$common = "index.php?view=needed_data.php&start=";
$prev_btn = $common.$prev_btn;
$nex_btn = $common.$nex_btn;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body class="mt-5">

<div class = "container" >
<table class="table table-dark">
  <thead>
    
<th>code</th>
<th>product </th>
<th>photo</th>
<th>see more details</th>
  </thead>
  <tbody>
  <?php
if(!empty($all)){


  foreach($all as $data){?>

 
    <tr class="table-active">
      <td><?php echo $data["PRODUCT_code"] ;?></td>
      <td><?php echo $data["product_name"] ;?></td>
      <td><img src = "<?php echo $data["Photo"]; ?>"></td>
      <td><a href="index.php?view=details&id=<?= $data["id"]?>"class="btn btn-info">see more</a>
      </td>
    </tr>
    <?php 
 }}
 ?>
    ?>
</tbody>
</table>

<div>
    <a href= "<?php echo $prev_btn;?>"  class = "btn-info"> prev</a>
    <a href= "<?php echo $nex_btn;?>"  class = "btn-info"> next</a>
</div>
</html>