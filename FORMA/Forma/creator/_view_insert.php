<?php


$servername = "localhost:3308";
$username = "root";
$password = "";
$database = "forma";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}




if (isset($_POST['save'])) {

$title = $_POST['ans'];
$ans = $_POST['qi']; 

foreach ($title as $key => $value) {

$savey = "INSERT INTO `answer`(`survey_id`, `question_id` , `ans_id`, `answer`) VALUES 
('" . $nm . "','" . $ans[$key]. "' ,'" . $value . "'  ,'" . $title[$key] . "')";

$query = mysqli_query($conn, $savey);

}
header('Location: ../creator/view.php');
echo '<script>alert("data submitted !give another response ?")</script>';
}
?>