<?php 

require_once 'connection.php';

$id = $_REQUEST['id'];

$link = new mysqli("localhost", "root", "root", "seatingchart");

$sql = "UPDATE seats SET occupied = '1', buttontype = 'warning', buttontext = 'cancel' WHERE id = '".$id."'";

if(mysqli_query($link, $sql)){
} else {
};

echo "<script>location.href='seatingChart.php'</script>";
?>