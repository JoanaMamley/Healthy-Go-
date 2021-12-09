<?php 
    include 'connection.php';

    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $location=$_POST['location'];
        $services=$_POST['services'];
        $workinghours=$_POST['workinghours'];
        $insurances=$_POST['insurances'];

        $sql="insert into `hospitals` (name,location,services,workinghours,insurances) values('$name','$location','$services','$workinghours','$insurances')";
        $result=mysqli_query($conn,$sql);
        if($result){
            //echo "Data inserted successfully";
            header('location: dashboard.php');
        }
        else{
            die(mysqli_error($conn));
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!doctype html>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>HealthyGo</title>
    <link rel="stylesheet" href="./styles/createUpdate.css">
    <link rel="shortcut icon" type="image/jpg" href="./image/favicon.ico"/>
  </head>
<body>
    <div class="form">
    <div class="container my-5">
        <button class="btn-previous"><a href="dashboard.php" class="prev-link">Previous</a></button>
      <form method="post" style="backgrouncolor:white;">
            <div class="form-group my-3">
                <label>Hospital Name</label>
                <input type="text" class="form-control" placeholder="Enter the hospital's name" name="name" autocomplete="off">
            </div>
            <div>
            <label>Location</label>
            <select class="form-select" id="selectlocation" aria-label="Default select example" name="location" onchange="this.form.submit()">
                    <option selected> <div class="select">Select hospital location</div></option>
                    <option value="Accra">Accra</option>
                    <option value="Lapaz">Lapaz</option>
                    <option value="Tema">Tema</option>
                    <option value="Madina">Madina</option>
                    <option value="Legon">Legon</option>
            </select>
            </div>
            <!-- <div class="form-group my-3">
                <label>Location</label>
                <input type="text" class="form-control" placeholder="Enter the hospital's location" name="location" autocomplete="off">
            </div> -->
            <div class="form-group my-3">
                <label>Services</label>
                <input type="text" class="form-control" placeholder="Enter hospital's services" name="services" autocomplete="off">
            </div>
            <div class="form-group my-3">
                <label>Working Hours</label>
                <input type="text" class="form-control" placeholder="Enter the hospital's working hours" name="workinghours" autocomplete="off">
            </div>
            <div class="form-group my-3">
                <label>Health Insurances</label>
                <input type="text" class="form-control" placeholder="Enter the insurances the hospital accepts" name="insurances" autocomplete="off">
            </div>
    
            <button type="submit" class="btn-submit" name="submit">Submit</button>
        </form>
    </div>
    </div>
    <script src="./scripts/createUpdate.js"></script>
</body>
</html>