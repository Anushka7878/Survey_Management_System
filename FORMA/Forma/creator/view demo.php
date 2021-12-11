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

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap');

        body {
            background-color: rgb(229, 242, 250) !important;
            font-style: 'Hind Siliguri', sans-serif;
            /* font-family: 'Hind Siliguri', sans-serif;
           font-family: 'Nunito Sans', sans-serif; */
        }

        .card {
            margin: 0 auto;
            /* Added */
            float: none;
            /* Added */
            margin-bottom: 5%;
            /* Added */
            border-top: 10px solid rgb(198, 253, 115) !important;
            margin-top: 5%;
            width: 60%;
            min-height: 120vh;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        h3 {
            padding: 30px 30px 30px 30px;
            ;
            margin: 20px 20px 20px 20px;
            border-bottom: 1px solid lightgray;
        }



        /* Add some padding inside the card container */
        .container {
            padding: 2px 16px;
        }

        .txtbx input {

            background: none;
            border: 0.5px solid lightgray;
            border-radius: 4px;
            /* border-bottom: 1px solid lightgray; */
            margin: 3px 3px 3px 13px;
            margin-top: 10px;
            width: 70%;
            height: 40px;

        }

        .txtbx {
            margin-left: 70px;
        }



        ::placeholder {
            color: black;
            opacity: 0.3;
            /* Firefox */
        }

        .head {
            margin: 30px 0px 20px 20px;
            /* margin-left: 30px; */
            font-size: 30px;
            color: rgb(132, 209, 17);
        }

        label {
            display: inline-block;
            text-align: right;
            width: 140px;
        }

        .cancelbtn {
            background-color: plum;
            padding: 1px 1px;
            border-radius: 4px;
            margin-left: 70%;
            border-radius: 6px;
            padding: 4px;
            border-width: 2px;
            font-size: 17px;

        }

        .cancelbtn:hover {
            background-color: rgba(164, 110, 207, 0.993);
        }

        .inner-form label {
            margin-left: 50px;
        }

        /*
.inner-form input{
    width: 70%;
    border: 0.5px solid lightgray;
     border-radius: 4px;
} */

        #fooBar {
            padding-left: 30%;

        }

        .options {
            margin: 10px 10px 10px 10px;
            padding-left: 30%;
            font-size: 20px;
        }

        .add-Q-btn {
            margin-left: 35px;
            border-radius: 6px;
            border-color: lightgray;
            background-color: paleturquoise;
            padding: 5px;
        }

        .Save-btn {
            margin-top: 5%;
            margin-left: 70%;
            margin-bottom: 10%;
            border-radius: 6px;
            border-color: lightgray;
            background-color: lightgreen;
            padding: 5px;
        }

        .cona {
            margin-left: 5%;
        }

        .add-btn {
            width: 40px;
            background-color: plum;
            border-radius: 6px;
            border-color: rgb(195, 199, 204);
            border-width: 2px;
            padding: 2px;
        }

        .add-btn:hover {
            background-color: rgba(164, 110, 207, 0.693);
        }


        #quess {
            font-size: 30px;
            margin: 20px;
            color: rgb(34, 177, 182);

        }

        .opt {
            width: 25%;
            text-align: center;
            height: 25px;
            border-color: lightslategrey;
            border-radius: 4px;
        }
    </style>
    <title>c_survey</title>
</head>

<body>



    <!--------------------------- navbar start --------------------->
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #C7F3E3;">
        <span style="font-size:30px;cursor:pointer; float:left;" onclick="openNav()">&#9776; </span>
        <a class=" navbar-brand " href="#" style="color:rgb(75, 148, 158); margin-left: auto;">FORMA</a>
    </nav>
    <!--------------------------- navbar ends --------------------->

    <h3>Create survey</h3>

    <div class="card">

        <div class="cona">
            <div class="container">
                <form action="#" method="post">

                    <div class="head"> Survey Information</div>
                    <div class="txtbx">

                        <?php

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
                            echo "Connection was successful<br>";
                        }

                        $ids = $_GET['view'];

                        echo $ids;



                        $show = " SELECT * FROM `survey` WHERE `survey_id` = '" . $ids . "';";

                        $showdata = mysqli_query($conn, $show);

                        $arrdata = mysqli_fetch_array($showdata);

                        $nm = $arrdata['survey_id'];

                        echo $nm;

                        //-----------------------------------------------------------------------------------
                        ?>
                        <label>Enter Survey title:</label>

                        <?php echo $arrdata['survey_name']; ?>

                        <!-- <input type="text" name="title-s" id="title-s" placeholder=" Survey Title"> -->
                    </div>

                    <div class="txtbx-1=">
                        <label> Description:</label>
                        <?php echo $arrdata['survey_desc']; ?>
                        <!-- <textarea name="txt-a" id="txt-a" cols="59" rows="3"></textarea> -->

                    </div>


                    <label for="ques" id="quess">Questions </label> <br>
                    <?php
                    $shows = "SELECT * FROM `question` WHERE  `survey_id` = '" . $ids . "' ";

                    $showques = mysqli_query($conn, $shows);

                    $num = mysqli_num_rows($showques);

                        


                        
                    while ($arrques = mysqli_fetch_array($showques)) {

                        echo $arrques['question'];
                    ?>
                        <?php echo $arrques['question_id']; ?>
                        <input type="text" name="ans[]" id="<?php echo $arrques['question_id'] ?>">
                        <!-- <input type="number" name="an" id="an" placeholder="enter question no."> -->
                        <input type="text" name="qi[]" value="<?php echo $arrques['question_id'] ?>" required >
                        <br>
                           
                        <?php $qid=array($arrques['question_id']);  ?>
                        

                    <?php
                    
                    } ?>     <!--<?php echo $qid[0]; ?>-->

                    <!-- ========================== -->
                           

                    <!-- ===========================to store anwers======================== -->
                    <?php


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
                        echo "Connection was successful<br>";
                    }

                    if (isset($_POST['save'])) {

                        $title = $_POST['ans'];
                         $ans = $_POST['qi']; 
                       


                        foreach ($title as $key => $value) {

                            

                            //   echo $arrques['question_id'];

                            $savey = "INSERT INTO `answer`(`survey_id`, `question_id` , `ans_id`, `answer`) VALUES 
             ('" . $nm . "','" . $ans[$i]. "' ,'" . $value . "'  ,'" . $title[$key] . "')";

                            $query = mysqli_query($conn, $savey);

                           
                        }
                    }
                    ?>




                    <!-- //-------------------to store  question id-->





                    <!-- the btn was like this  ===> <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Delete Question</button> -->
                    <!-- <input type="button" class="cancelbtn" value="Delete question">  -->


                    <div class="inner-form">
                        <div class="container">

                            <center>
                                <table id="table_field">

                                    <tr>
                                        <th>
                                            questions
                                        </th>
                                    </tr>

                                    <tr>
                                        <!-- <td><input class="form-control"  type="text" name="questions[]" required></td>
    <td><input class="btn btn-warning" type="button" value="add" name="add" id="add" ></td> -->
                                    </tr>


                                </table>
                                <input class="btn btn-success" type="submit" value="save" id="save" name="save">

                        </div>

                        </center>


                    </div>

            </div>

            </form>
        </div>
    </div>
    </div>


</body>

</html>