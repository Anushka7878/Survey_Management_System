<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>card</title>
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

    </style>
</head>
<body>
<?php include 'syde.php'; ?>
<?php include 'linkss.html'; ?>

<!--------------------------- navbar start --------------------->
<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #C7F3E3;">
    <span style="font-size:30px;cursor:pointer; float:left;" onclick="openNav()">&#9776; </span>  
  <a class=" navbar-brand " href="#" style="color:rgb(75, 148, 158); margin-left: auto;">FORMA</a>
  </nav>
<!--------------------------- navbar ends --------------------->

<h1 id="hea">Responses</h1>

<div class="container">
<div class="row">
    <div class="card-01" id= info>
    <h5 class="c-he"> Survey Details</h5>
    </div>
    
    <div class="card-01" id=resp>
    <h5 class="c-he"> Results</h5>
    </div>

</div>



    </div>
</body>
</html>