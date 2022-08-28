<?php
session_start();

include 'layout/config.php';

if (isset($_POST['submit'])){

    $email = $_POST["email"];
    $password = $_POST["password"];

    if(empty($email)) {
        ?>
        
        <script>
            alert("Eamil is Required");
        </script>

        <?php
    }
    else if(empty($password)) {
        ?>
        
        <script>
            alert("Password is Required");
        </script>

        <?php
    }
    else{

        $sql = "SELECT * FROM authentication WHERE email = '$email' and password = '$password' ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {

            $_SESSION["email"] = $email;

            ?>
    
                <script>
                    alert("Login Successfully");
                    window.location.href = "clinic_management.php";
                </script>

            <?php
        } else {
            ?>

                <script>
                    alert("Faild to Login");
                    window.location.href = "login.php";
                </script>

            <?php
        }
        
    }

}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Login</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>

    <style>
        
        .login_head{
            text-shadow: 5px 5px 7px;
            font-weight: 600;
            letter-spacing: 3px;
        }

        .show_message{
            color: #fff; 
            font-size: 18px;
        }

    </style>

    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container custom_container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 mt-5">
                                <div class="alert show_message" style="display: none;"></div>
                                <div class="card shadow-lg border-0 rounded-lg">
                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light my-4 login_head">Admin Login</h3>
                                    </div>
                                    <div class="card-body">
                                        <form action="" method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="email" id="email" name="email" placeholder="Please Enter Email" />
                                                <label>Email address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="password" id="password" name="password" placeholder="Password" />
                                                <label>Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button type="submit" name="submit" class="btn btn-primary">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
