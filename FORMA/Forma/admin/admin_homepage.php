<?php
// -------------------------------------------session starts part 2
session_start();
if(isset($_SESSION['username'])){
  // echo "right".$_SESSION['username'];
}
else{
  header('location: ../index.php');
}?>


<?php

include 'dbconn.php';
$sql = "SELECT * FROM survey";
if ($result=mysqli_query($conn,$sql)) {
    $rowcount=mysqli_num_rows($result);}

    $sql1 = "SELECT * FROM user where usertype= 'Admin' ";
if ($result1=mysqli_query($conn,$sql1)) {
    $rowcount1=mysqli_num_rows($result1);
    }

    $sql2 = "SELECT * FROM user where usertype= 'Creator'";
    if ($result2=mysqli_query($conn,$sql2)) {
        $rowcount2=mysqli_num_rows($result2);
        // echo $rowcount2;
      }

        $sql3 = "SELECT * FROM user where usertype= 'Respondent'";
    if ($result3=mysqli_query($conn,$sql3)) {
        $rowcount3=mysqli_num_rows($result3);
        //echo $rowcount3;
      }

   

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css" >
  <title>Homepage</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Hind Siliguri', sans-serif;
    font-family: 'Nunito Sans', sans-serif;
     background-color: rgba(220, 238, 252, 0.267);
      background-size: cover;
    }

    h2 {
      padding-top: 20px;
      padding-left: 30px;
      padding-bottom: 10px;
      border-bottom: 1.5px solid lightgray;
    }

    .card {
      margin-top: 10px;
      margin-left: 180px;
      width: 45%;
      box-shadow: 0 0 1px 1px lightgray;
    }

    .card:hover{
      transition: 0.3s;
      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }

    .container {
      height: 120px;
      padding: 2px 16px;
    }

    
  .card1 .card:hover {
    
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  }
  .card1 .card{ 
    border-top:  10px solid rgb(198, 253, 115)!important;
      margin-left: 200px;
      width:70%;
      margin-bottom: 10%;

  }
  .card1 .container{
      height: 500px;
  }

 .card1 ::placeholder {
      color: black;
      opacity: 0.3; /* Firefox */
    }
h3{
  text-align:center;
 
   border-bottom: 1px solid lightgray;
   padding: 70px 20px 40px 20px;

}



  </style>
  <title>homepage</title>
</head>

<body>
<?php include 'admin_sidebar.php'; ?>
<?php include 'linkss.html'; ?>

<!--------------------------- navbar start --------------------->
<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #C7F3E3;">
    <span style="font-size:30px;cursor:pointer; float:left;" onclick="openNav()">&#9776; </span>  
  <a class=" navbar-brand " href="#" style="color:rgb(75, 148, 158); margin-left: auto;">FORMA</a>
  </nav>
<!--------------------------- navbar ends --------------------->
  <header>
    <div id="main" class="main">


      <h2>Homepage</h2>

      <section class="my-5">
        <div class="container-fluid">
          <div class="row">


            <div class="col-lg-6">

              <div class="card" >
              
                <div class="container">
                
                  <!--------------------------------------->
                <h4 style="margin-top:20px">  <i class="fa fa-th-list" aria-hidden="true"></i> <b>Total suvey count</b></h4>
         <p style="text-align:center;"><b><?php echo $rowcount; ?></b></p>
                </div>
              </div>
              </div>
              
              <div class="col-lg-6" >

<div class="card"  >

  <div class="container">
    <!--------------------------------------->
    <h4 style="margin-top:20px; ">  <i class="fa fa-user-plus" aria-hidden="true"></i> <b>Total Admin count</b></h4>
    <p style="text-align:center;"><b><?php echo $rowcount1; ?></b></p>
  </div>
</div>
</div>
            


              <div class="col-lg-6" style="margin-top: 20px;">

              <div class="card" >

                <div class="container">
                  <!--------------------------------------->
                  <h4 style="margin-top:20px">  <i class="fa fa-user" aria-hidden="true"></i> <b>Total creator count</b></h4>
                  <p style="text-align:center;"><b><?php echo $rowcount2; ?></b></p>
                </div>
              </div>
              </div>



              <div class="col-lg-6" style="margin-top: 20px;">

              <div class="card" >

                <div class="container">
                  <!--------------------------------------->
                  <h4 style="margin-top:20px">  <i class="fa fa-users" aria-hidden="true"></i> <b>Total Respondent &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;count</b></h4>
                  <p style="text-align:center;"><b><?php echo $rowcount3; ?></b></p>
                </div>
              </div>
              </div>
      </section>

<section>

<!-- <h3 style="margin: 120px 90px 0px 90px;"> Edit Your Profile</h3>

<div id="login">
        <h3 class="text-center  pt-5" style="visibility: hidden;">Login form</h3>
        <div class="card1">
        <div class="card  style="background-color:white;">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="dbcon.php" method="post">
                            <h3 class="text-center text-info" style="padding:30px; border:none;">Edit your Profile</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Change Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control" placeholder="Enter username">
                            </div>
                            
                            <div class="form-group">
                                <label for="password" class="text-info">Change Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password">
                            </div>
                            <div class="form-group">
                                <label for="cpassword" class="text-info"> Confirm Password:</label><br>
                                <input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="Confirm Password">
                            </div>
                            
                            <div class="form-group" style="margin-top: 30px;">
                            <input type="submit" name="submit" class="btn btn-info btn-md" value="Apply changes" style="width:45%; margin-left:30%">
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div> -->

</section>

  </header>





</body>

</html>