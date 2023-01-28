<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BLOCKS</title>
    <style>
.raft-flex {
  display: flex;
  background-color: lightcoral;
  justify-content: space-around;
}

.raft-flex > div {
  background-color: #f1f1f1;
  height: 100px;
  width: 100px;
  margin: 5px;
  text-align: center;
  line-height: 30px;
  font-size: 20px;
}
</style>
</head>

<!-- your code goes here -->


<body>
<h1>BLOCKS


<form action="" method="post">
    <select name="positionOne">
    <option value="" selected>First Position</option>
<?php 
for ($start = 1; $start <= 10; $start++) {
  echo '<option value="'.($start).'">'.$start.'</option>';
}
?>
    </select>
    <br>
    <select name="positionTwo">
    <option value="" selected>Last Position</option>
<?php 
for ($end = 1; $end <= 10; $end++) {
  echo '<option value="'.($end).'">'.$end.'</option>';
}
?>
    </select>
    <br>
    <input type="submit" name="submit" value="Enter">
</form>

<?php
$positionOne =2;
$positionTwo =1;
if(isset($_POST['submit'])){
    if(!empty($_POST['positionOne'])) {
        $positionOne = $_POST['positionOne'];
        echo 'First Position: ' . $positionOne.'<br> ';
    } else {
        echo 'Select the first position.<br>';
    }
    if(!empty($_POST['positionTwo'])) {
        $positionTwo = $_POST['positionTwo'];
        echo 'Last Position: ' . $positionTwo;
    } else {
        echo 'Select the last position.<br>';
    }
    }
?>
</h1>

<!-- ************************************************************************** -->
<?php

$x = $positionOne - 1;
$k = $positionTwo;

$names = array("A1","A2","A3","A4","A5","A6","A7","A8","A9","A10");

for($i=$x;$i<$k;$i++)
{
        $xyz[]=$names[$i];
}

// print_r($xyz);
// echo '<pre>';
// print_r($xyz);
// echo '</pre>';

?>


<div class="raft-flex">
  <?php 
  if($x < $k){
    for ($i = 1; $i <= 10; $i++) {
    $key = "A" . $i ;
    $result = in_array($key, $xyz) ? "<span style='color:#003263; background-color: #fff;'><b>OK</b></span>" : "<span style='color:Black;'><b>x</b></span>";
    echo "<div>$i<br>$result</div>";
    }
  }else {
    echo '<h1>The first position should be smaler than the last position ! <br></h1>';
}
    ?>
</div>


</body>
</html>