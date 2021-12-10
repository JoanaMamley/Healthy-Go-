<?php 
    include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthyGo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/dashboard.css">
    <link rel="shortcut icon" type="image/jpg" href="./image/favicon.ico"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
       <!-- Navbar Section Starts Here -->
       <section class="nav-bar">
        <div class="nav-section">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="./image/logo.jpg" alt="HealthyGo Logo" class="img-responsive">
                </a>
            </div>
            <div class="text-right">
                <button class="btn-logout"> <a href=".\index.php" class="btn-link">Sign Out</a> </button>
            </div>
            <div class="clearfix"></div>
        </div>
       </div>
    </section> 
      <!-- page title Section Starts Here -->
      <section class="page-title">
        <div class="container">
            
            <form action="hospital-search.html" method="POST">
                   <h1 class="heading">Admin Dashboard</h1>
            </form>

        </div>
    </section>
    <!-- page title Section Ends Here -->

    <!-- Main content Starts Here -->
    <div class="container">
        <button class="btn-add my-5"> <a href="create.php" class="text-light btn-link"> Add Hospital</a></button>
        <div class="text-right">
                <button class="btn-logout"> <a href="signup.php" class="btn-link">Add Admin</a> </button>
        </div>
        <table class="table content-table">
  <thead>
    <tr>
      <!-- <th scope="col">id</th> -->
      <th scope="col">Name</th>
      <th scope="col">Location</th>
      <th scope="col">Services</th>
      <th scope="col">Working Hours</th>
      <th scope="col">Health Insurance available</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
      <?php 
        $sql="select * from `hospitals`";
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
                    <td><button class="btn-update my-2"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                    <button class="btn btn-danger remove"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
                    </td>
                </tr>
                ';
            }
        }
      ?>
  </tbody>
</table>
</div>
</body>
</html>