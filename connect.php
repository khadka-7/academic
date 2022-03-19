<?php 
$servername = "20.204.151.59";
$username = "sujan";
$password = "realpassword@@@";
$database = "proj";
$table = "devinfo";
<strong>
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful

if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}
</strong>
 
$sql = "SELECT * FROM `devinfo`";
 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "dname: " . $row["dname"]. " - device: " . $row["device"].  " - status " . $row["status"]. "<br>";
  }
} else {
  echo "0 results";
}
$Sql_query = mysqli_query($conn,$sql);
$All_devices = mysqli_fetch_all($Sql_query,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Logout</a>
  <a href="#">Contact</a>
</div>

<div id="main">
   
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
<head>
</head>
     
     
    <!-- Using internal/embedded css -->
    <style>
        .btn{
            background-color: red;
            border: none;
            color: white;
            padding: 5px 5px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 20px;
        }
        .blue{
            background-color: blue;
        }
        .red{
            background-color: red;
        }
        table,th{
            border-style : solid;
            border-width : 1;
            text-align :center;
        }
        td{
            text-align :center;
        }
    </style>    
</head>
  
<body>
<body style="background-color:rgb(230,230,230);">
</body>
    <h2>APPLIANCES</h2>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #DDD;
}

tr:hover {background-color: #D6EEEE;}
</style>
    <table>
         
<table style="width:100%">
        <tr>
            <th>Device Name</th>
            <th> Status</th>
            <th>Toggle</th>
        </tr>
        <?php
  
            // Use foreach to access all the courses data
            foreach ($All_devices as $name) { ?>
            <tr>
                <td><?php echo $name['dname']; ?></td>
                <td><?php 
                        
                        if($name['status']=="ON") 
                            echo "ON";
                        else 
                            echo "OFF";
                    ?>                          
                </td>
                <td>
                    <?php 
                    if($name['status']=="OFF") 
  
                         
                        echo "<a href=on.php?dname=".$name['dname']." class='btn red'>OFF</a>";
                    else 
                        echo "<a href=off.php?dname=".$name['dname']." class='btn blue'>ON</a>";
                    ?>
            </tr>
           <?php
                }
                 
           ?>
    </table>
</body>
  
</html>
