<?php
    session_start();
    include 'main.php';
    $obj = new Main;
    if(isset($_SESSION['userr'])){
        header('Location: dash.php');
        //echo 'suss';
      }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Student Login</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/style3.css" />
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    </head>
    <body style="background:url('img/student.jpg');background-size: cover;background-attachment: fixed;background-position: center; background-repeat: no-repeat;margin:0;padding:0;height:500px;">
        <div style="width:100%;height:60px;background:#502096c7;margin:0px;padding:0px;">
            <a href="index.html"><span style="font-family: 'Slabo 27px', serif;display:block;text-align:center;color:#fff;left: 650px;font-size: 39px;top: 4px;">Home</span></a>
        </div> 
        <div class='mt-5'>
            <div class="col-md-3 m-auto pb-5 pt-4 mt-5" style="-moz-box-shadow: 0 0 5px 5px #888;background:#efe6e6a8; -webkit-box-shadow: 0 0 5px 5px #888; box-shadow: 0 0 24px 9px #544f82f2;border-radius: 10px 10px;">
            <div>
                <h2 class='text-center' style="font-family: 'Slabo 27px', serif;">Student Login</h2>
            </div>
            <?php
                    if(isset($_GET['no'])){
                        $no = $_GET['no'];
                        if($no == true){
                    ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Don't match!</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php
                        }
                    }
                ?>
                <form action="auth1.php" method="post">
                    <input type="text" class='form-control mb-2' name='broll' placeholder='Enter Roll' required="">
                    <input type="text" class='form-control mb-2' name='reg' placeholder='Enter Reg' required="">
                    <input type="submit" class='btn btn-primary btn-lg btn-block mt-4' name='submit'>
                </form>
            </div>
        </div>
        <footer style="margin-top:250px;">
            <div class="pt-5 pb-5" style='background: #1C1C34;'><!--  footer start -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                        <h4 class="text-center text-white" style="font-family: 'Slabo 27px', serif;">Developed by :<a href="http://ashanur.xyz/" target='blank'> ashanur.xyz</a></h4>
                        </div>
                    </div>
                </div>
            </div>
       </footer>
    </body>
</html>



  
  
