<?php
session_start();

// Database configration
include 'layout/config.php';

// Get data from database
if(!isset($_SESSION['email'])){
    ?>
    <script>
        window.location.href = "login.php";
    </script>
    <?php
} 

if (isset($_GET['id'])){

    $id = $_GET['id'];

    $delete = "DELETE FROM user_list WHERE id = $id" ;
    $result = $conn->query($delete);

    if($result ){
        ?>
            <script>
                alert("Data Deleted successfully");
                window.location.href = "clinic_management.php";
            </script>
        <?php
    }

}

if(isset($_GET['filter']))
{
    $filterval = $_GET['filter'];
    $sql = "SELECT * FROM user_list WHERE concat(username, place) LIKE '%$filterval%' ";
    $result = $conn->query($sql);
}
else{
    $sql = "SELECT * FROM user_list";
    $result = $conn->query($sql);
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
    <title>Clinic Management</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<style>

    .add_btn {
        width: 100%;
    }

    .action{
        margin-top: 5px;
    }

    .action2{
        width: 60px;
    }

    .heading h4{
        text-shadow: 5px 5px 4px grey;
        font-weight: 600;
    }

    table tr th,
    table tr td{
        border: 1px solid #dbdbdb;
    }

    .brand_text{
        text-shadow: 5px 5px 5px #000;
        font-size: 2rem;
    }

</style>

<body class="sb-nav-fixed">

    <?php include 'layout/header.php';?>

    <div id="layoutSidenav">

        <?php include 'layout/sidebar_nav.php';?>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4 mt-5">
                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-10 mt-2 heading">
                                    <h4>Users List</h4>
                                </div>
                                <div class="col-md-2 mt-2">
                                    <a href="addclinic.php"><button type="button" class="btn btn-dark add_btn">Add Clinic</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-header">
                            <form action="" method="GET">
                                <div class="row">
                                    <div class="col-md-4 mt-2 heading">
                                        <input type="text" class="form-control" name="filter" value="<?php if(isset($_GET['filter'])){ echo $_GET['filter']; } ?>" placeholder="Search by username">
                                    </div>
                                    <div class="col-md-2 mt-2 heading">
                                        <button type="submit" class="btn btn-dark">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive">
                                <table class="table text-center">
                                    <tbody>
                                        <tr>
                                            <th style="width: 10%;">#</th>
                                            <th>Username</th>
                                            <th>Place</th>
                                            <th>Action</th>
                                        </tr>

                                        <?php 
                                            $i = 0;
                                            while($rows=$result->fetch_assoc())
                                            {
                                        ?>
                                            <tr>
                                                <td><?php echo ++$i; ?></td>
                                                <td><?php echo $rows['username'];?></td>
                                                <td><?php echo $rows['place'];?></td>
                                                <td>
                                                    <a href="editclinic.php?id=<?php echo $rows['id'];?>"><button type="button" class="btn btn-dark btn-sm action action2">Edit</button></a>
                                                    <a href="clinic_management.php?id=<?php echo $rows['id'];?>"><button type="button" name="delete" class="btn btn-danger btn-sm action">Delete</button></a>
                                                </td>
                                            </tr>
                                        <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
</body>

</html>