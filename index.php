<?php include 'connection.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthyGo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="shortcut icon" type="image/jpg" href="./image/favicon.ico"/>
</head>
<body>
       <!-- Navbar Section Starts Here -->
      <!-- page title Section Starts Here -->
      <section class="page-title">
	  <section class="nav-bar">
        <div class="nav-section">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="./image/logo.jpg" alt="HealthyGo Logo" class="img-responsive">
                </a>
            </div>
            <div class="text-right">
                <button class="btn-login"> <a href="login.php" class="btn-link">Admin Login</a> </button>
            </div>
            <div class="clearfix"></div>
        </div>
       </div>
    </section> 
        <div>
            <h1 class="heading">Need a hospital with the <br> right service?</h1>
        </div>
		<div>
			<p class="sub-heading"> Look no further! HealthyGo allows you to <br> explore hospitals in Ghana with little or <br> no stress </p>
		</div>
		<div>
		   <img src="./image/Vector.png" alt="#" class="vector">
		</div>
		<div>
			<p  class="scroll">Scroll Down</p>
		</div>
    </section>
    <!-- page title Section Ends Here -->

    <!-- hospitals Section Starts Here -->
        <section class="categories">
        <div class="container">
            <h2 class="text-center text-color">Explore Hospitals</h2>
            <a href="#">
            <div class="box-3 float-container">
                <img src="image/korlebu.jpg" alt="KorleBu" class="img-responsive img-curve">

                <h3 class="float-text text-color">KorleBu Hospital</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="image/st-johns.jpg" alt="St John's" class="img-responsive img-curve">

                <h3 class="float-text text-color">St John's Hospital</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="image/ridgeHospital.jpg" alt="Ridge hospital" class="img-responsive img-curve">

                <h3 class="float-text text-color">Ridge Hospital</h3>
            </div>
            </a>

            <div class="clearfix"></div>
        </div>

        <!-- <h4 class="text-center"><a href="#">See All Hospitals</a></h4> -->
    </section>
    <!-- hospitals Section Ends Here -->

    <!-- Filters starts Here -->
    <div class="btn-group">
                    <div >
                        <!-- <a href="table_section"> -->
                        <form method="post">
                            <select name="location" id="selecthospital" class="btn btn-filter" onchange="this.form.submit()">
                                <option value="">Browse Hospitals</option>
                                <option value="View all hospitals">View all hospitals</option>
                                <option value="Accra">Accra</option>
                                <option value="Lapaz">Lapaz</option>
                                <option value="Tema">Tema</option>
                                <option value="Madina">Madina</option>
                                <option value="Legon">Legon</option>
                            </select>
                        </form>
                        <!-- </a> -->
                    </div>
                </div>
    <!-- Filters Ends Here -->            

    <!-- Main content Starts Here -->
    <div class="container" id="table_section">
        <table class="table content-table">
  <thead>
    <tr>
      <!-- <th scope="col">id</th> -->
      <th scope="col">Name</th>
      <th scope="col">Location</th>
      <th scope="col">Services</th>
      <th scope="col">Working Hours</th>
      <th scope="col">Health Insurance available</th>
    </tr>
  </thead>
  <tbody>
      <?php 
        if (isset($_POST["location"])) {
        $location = $_POST["location"];
        if ($location == "View all hospitals") {
            $sql = "SELECT * FROM `hospitals`";
        }
        else{
            $sql = "SELECT * FROM `hospitals` WHERE `location`='$location'";
        }
        // $sql="select * from `hospitals`";
        $result=mysqli_query($conn,$sql);
        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $name=$row['name'];
                $location=$row['location'];
                $services=$row['services'];
                $workinghours=$row['workinghours'];
                $insurances=$row['insurances'];
                echo '
                <tr class="active-row">
                    <td>'.$name.'</td>
                    <td>'.$location.'</td>
                    <td>'.$services.'</td>
                    <td>'.$workinghours.'</td>
                    <td>'.$insurances.'</td>
                </tr>
                ';
            }
        }
    }
      ?>
  </tbody>
</table>
<div class="clearfix"></div>
</div>
<div style="clear: both;"></div>
    <br> 
    <br>
    <div class="footer">
        <div class="wrapper">
            <p class="text-center"> &copy; 2021 All rights reserved. HealthyGo. Developed by - <a href="https://github.com/Joana-cyber/Healthy-Go-" target="_blank" class="footer-link">Joana Teye</a> </p>
        </div>
    </div>
</body>
</html>