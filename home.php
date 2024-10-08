<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $fetch_info['name'] ?> | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <title>GVerse</title> -->
    <link rel="stylesheet" href="project\css\style.css">
    <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
    nav{
        padding-left: 100px!important;
        padding-right: 100px!important;
        font-family: 'Poppins', sans-serif;
    } 
    nav a.navbar-brand{
        color: #fff;
        font-size: 19px!important;
        font-weight: 500;
    }
    button a{
        color: #6665ee;
        font-weight: 500;
    }
    button a:hover{
        text-decoration: none;
    }
    h1{
        position: absolute;
        top: 50%;
        left: 50%;
        width: 100%;
        text-align: center;
        transform: translate(-50%, -50%);
        font-size: 50px;
        font-weight: 600;
    }
    </style>
</head>
<body>
   
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container-fluid">
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#" >Welcome - <?php echo $fetch_info['name'] ?></a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <!-- <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="../loginsystem/welcome.php">Home</a>
      </li> -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
            <li><a href="logout-user.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
    </div>
    </div>
</nav> 
    <header><nav>
        <div class="logo"> Gverse</div>
        <ul>
            <li><a href="project\index.html">Home</a></li>
            <li><a href="project\about.html">About</a></li>
            <li><a href="/">Contact us</a></li>

        </ul>
    </nav></header>
    <main>
        <div class="container">
            
        </div>
        <div class="snake">
            
            <a href="project\snakeinfo.html"><img src="project\img\SNAKEIMG.jpg" width="350" height="350"></a>
            <a href="project\tictactoeinfo.html"><img src="project\img\TICTACTOEIMG.jpg" width="350" height="350"></a>
            <a href="project\flappybirdinfo.html"><img src="project\img\FLAPPYBIRDIMG.jpg" width="350" height="350"></a>
        </div>
        
    </main>
    
<!-- <h1>Welcome  -->
<!-- <a href="project\index.html">open
</a> -->
</h1>
<script src="index.js"></script>
<footer>
       Copyright GVerse.com | All Rights reserved
    </footer>
    
</body>
</html