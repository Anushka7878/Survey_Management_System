<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
 body {
    font-style:'Hind Siliguri', sans-serif;
} 

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color:rgb(169, 241, 238);
  overflow-x: hidden;
  transition: 0.5s;
  /* padding-top: 60px; */
}
.sidenav {
  -moz-box-shadow:    -3px 0 5px 0 rgb(145, 140, 140);
  -webkit-box-shadow: -3px 0 5px 0 rgb(168, 164, 164);
  box-shadow:         -3px 0 50px 0 rgb(184, 180, 180);
} 
.sidenav a {
    
  padding: 20px;
  text-decoration: none;
  font-size: 20px;
  color: #000000;
  display: block;
  transition: 0.3s;
}

.active{ 
    transition: 0.4s;
}
 .sidenav a:hover {
   text-decoration:none ;
  color: #d1cbec;
}  

.dropdown-container a:hover {
  color: #d1cbec;
} 
.sidenav .closebtn {
  position: relative;
  font-size: 36px;
  margin-left: 220px;
  border-color: black;
  /* right: 25px;
  
  */
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

.dropdown-container {
  display: none;
 
  
}

.sub-menuu:hover{
 background-color: blueviolet;
 transition: 0.4s ease;
}
.sub-menuu{
    background-color: rgb(255, 127, 234,1);
    font-size: 18px;
}

 .dropdown-btn {
  padding: 20px;
  text-decoration: none;
  font-size: 20px;
 
  display: block;
  border: none;
  background-color:  rgba(248, 56, 152, 0.842);
  width: 100%;
  text-align: left;
 
  outline: none;
  box-shadow: none;

}

.dropdown-btn:focus {
  outline: none;
  box-shadow: none;
}

.dropdown-container a{
    font-size: 19px;
    padding-left: 20px ;
    transition: 0.4s ease;
}



.menuu{
   background-color:  rgba(248, 56, 152, 0.842);
  
   font-size: 20px;
}
.menuu:hover{
    background-color: chocolate;
    
}
.dropdown-btn:hover{
  background-color:chocolate ;
  color: #d1cbec;
  
}

</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fa fa-window-close" aria-hidden="true"></i></a>
 <H1><center><?php echo $_SESSION['username']; ?></center></H1>
 
 <div class="menuu" id="dash"><a href="resp_home.php">Dashboard</a></div>
 

  <button class="dropdown-btn">Survey
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    
    <div class="sub-menuu"><a href="survey_list.php">Survey List</a></div>
    
  </div>

  <div class="menuu" id="logout"><a href="logout.php">Logout</a></div>
</div>



<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}


var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}

</script>
   
</body>
</html> 
