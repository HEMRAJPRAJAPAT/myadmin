<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Survey Module</title>
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

    .heading h4{
        text-shadow: 5px 5px 4px grey;
        font-weight: 550;
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
                                    <h4>Survey Module</h4>
                                </div>
                                <div class="col-md-2 mt-2">
                                    <a href="addsurvey.php"><button type="button" class="btn btn-dark add_btn">Add Survey</button></a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th style="width: 10%;">#</th>
                                            <th>Name</th>
                                            <th>Email Address</th>
                                            <th>Phone Number</th>
                                            <th style="padding-left: 2%;">Action</th>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Better Health & Wellness</td>
                                            <td>health@gmail.com</td>
                                            <td>9462586485</td>
                                            <td>
                                               <a href="editsurvey.php"><button type="button" class="btn btn-dark btn-sm action action2">Edit</button></a>
                                               <button type="button" class="btn btn-danger btn-sm action">Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Wellness Bliss Group</td>
                                            <td>wellness@gmail.com</td>
                                            <td>9562385694</td>
                                            <td>
                                               <a href="editsurvey.php"><button type="button" class="btn btn-dark btn-sm action action2">Edit</button></a>
                                               <button type="button" class="btn btn-danger btn-sm action">Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Family Wellness Center</td>
                                            <td>familywellness@gmail.com</td>
                                            <td>9856855694</td>
                                            <td>
                                               <a href="editsurvey.php"><button type="button" class="btn btn-dark btn-sm action action2">Edit</button></a>
                                               <button type="button" class="btn btn-danger btn-sm action">Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Trinity Health and Wellness Medical Group</td>
                                            <td>trinityhealth@gmail.com</td>
                                            <td>7865255694</td>
                                            <td>
                                               <a href="editsurvey.php"><button type="button" class="btn btn-dark btn-sm action action2">Edit</button></a>
                                               <button type="button" class="btn btn-danger btn-sm action">Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>The Magical Wellness Center</td>
                                            <td>magicalwellness@gmail.com</td>
                                            <td>7865255694</td>
                                            <td>
                                               <a href="editsurvey.php"><button type="button" class="btn btn-dark btn-sm action action2">Edit</button></a>
                                               <button type="button" class="btn btn-danger btn-sm action">Delete</button>
                                            </td>
                                        </tr>
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