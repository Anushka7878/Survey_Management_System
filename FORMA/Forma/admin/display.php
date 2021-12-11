<?php

// -------------------------------------------session starts part 2
session_start();
if(isset($_SESSION['username'])){
//   echo "right".$_SESSION['username'];
}
else{
  header('location: ../index.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <title>display page</title>
    <style>
 body{
     margin: 0%;
     padding: 0%;
     background-color: rgb(229, 242, 250)!important;
 }
        /* .container{
            margin: 20px;
        } */
        .row{
            width: 100%;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        #info{
            border-top: 10px solid coral;
            background-color: white;
            position: relative;
            flex: 1;
             max-width: 300px;
             height:350px;
             margin: 30px;
            float:left;
            box-shadow: 0 0 5px rgb(0, 0, 0.2);

        }

        #resp{
            border-top: 10px solid  cornflowerblue;
            background-color: white;
            float: right;
            position: relative;
            flex: 1;
             width: 0px;
             min-height: 500px;
             margin: 30px;
             box-shadow: 0 0 5px rgb(0, 0, 0.2);
        }

        #hea{
            text-align: center;
            padding: 20px ;
            border-bottom: 1px solid lightgray;
            margin-left:30px;
            margin-right:30px;
        }

        .c-he{
            margin:20px;
            padding-bottom: 2px;
            border-bottom: 1px solid lightgray;
        }


        .echo{
            padding-left: 25px;
            margin: 2px;
              display: block;

                
        }

        .echo2{
            padding-left: 25px;
            margin:2px;
            display: block;
             
            
        }

    </style>
</head>
<body>


<!--------------------------- navbar start --------------------->
<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #C7F3E3;">
    <span style="font-size:30px;cursor:pointer; float:left;" onclick="openNav()">&#9776; </span>  
  <a class=" navbar-brand " href="#" style="color:rgb(75, 148, 158); margin-left: auto;">FORMA</a>
  </nav>
<!--------------------------- navbar ends --------------------->

<?php
  
include 'admin_sidebar.php';

$servername = "localhost:3308";
$username = "root";
$password = "";
$database = "for";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn) {
die("Sorry we failed to connect: " . mysqli_connect_error());
} else {
// echo "Connection was successful<br>";
}

$ides = $_GET['view'];

// echo $ides;



$show = " SELECT * FROM `survey` WHERE `survey_id` = '$ides'";

$showdata = mysqli_query($conn, $show);

$arrdata = mysqli_fetch_array($showdata);



$shows = "SELECT * FROM `question` WHERE  `survey_id` = '$ides' ";

$showques = mysqli_query($conn, $shows);

// $num = mysqli_num_rows($showques);


$shower = "SELECT * FROM `answer` WHERE  `survey_id` = ' $ides ' ";

$showans = mysqli_query($conn, $shower);

// $num1 = mysqli_num_rows($showans);


$dis = "SELECT  question , answer
FROM question
INNER JOIN answer on  answer.question_id = question.question_id
WHERE question.survey_id = '$ides'
ORDER BY question.question_id ";


$showdis = mysqli_query($conn, $dis);

// $num2 = mysqli_num_rows($showdis);



$nm = $arrdata['survey_id'];

// echo $nm;

//-----------------------------------------------------------------------------------
?>

<h1 id="hea">Responses</h1>

<div class="container">
<div class="row">
    <div class="card-01" id= info>
    <h5 class="c-he"> Survey Details</h5>
    <label class="echo"><b>Survey Name : </b>&nbsp; <div style="display: block;"><?php echo $arrdata['survey_name']; ?></div></label> 
    <label class="echo"><b>Survey description : &nbsp;</b> <?php echo $arrdata['survey_desc']; ?> </label>
    </div>
 
    <div class="card-01" id=resp>
    <h5 class="c-he"> Results</h5>
 <!-- <?php   while ($arrques = mysqli_fetch_array($showques)) {

     echo $arrques['question'];?> <br>
     
     <?php  while ($arrans = mysqli_fetch_array($showans)) {

        echo $arrans['answer']; ?> <br>  <?php    ?> 
  <?php  } }?>  -->

  <?php


   while ($arrdis = mysqli_fetch_array($showdis)) {?>

    <label class="echo"> <strong> Question : <?php echo $arrdis['question']; ?> </strong></label>
   
  
   <label class="echo2"> Answer : <?php echo $arrdis['answer']; ?> </label>
  <br> 
  
   <?php } ?>

 </div>

</div>



    </div>
</body>
</html>