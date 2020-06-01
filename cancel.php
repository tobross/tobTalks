<?php 

require_once 'connection.php';

$id = $_REQUEST['id'];

$link = new mysqli("localhost", "root", "root", "seatingchart");

$sql = "UPDATE seats SET occupied = '0', buttontype = 'primary', buttontext = 'book' WHERE id = '".$id."'";

if(mysqli_query($link, $sql)){
} else {
};

echo "<script>location.href='seatingChart.php'</script>";
?>