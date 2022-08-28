<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Diagnosis</title>
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

    .heading h4{
        text-shadow: 5px 5px 4px grey;
        font-weight: 600;
    }

    table tr th,
    table tr td{
        border: 1px solid #dbdbdb;
    }

    .action2{
        width: 60px;
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
                                    <h4>Diagnosis</h4>
                                </div>
                                <div class="col-md-2 mt-2">
                                    <a href="add_diagnosis.php"><button type="button" class="btn btn-dark add_btn">Add Diagnosis</button></a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th style="width: 10%;">#</th>
                                            <th>Diagnosis Name</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th style="text-align: center;">Action</th>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Angiocardiography</td>
                                            <td>Health</td>
                                            <td>$ 250</td>
                                            <td style="text-align: center;">
                                               <a href="edit_diagnosis.php"><button type="button" class="btn btn-dark btn-sm action action2">Edit</button></a>
                                               <button type="button" class="btn btn-danger btn-sm action">Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Cerebral Angiography</td>
                                            <td>Wellness</td>
                                            <td>$ 150</td>
                                            <td style="text-align: center;">
                                               <a href="edit_diagnosis.php"><button type="button" class="btn btn-dark btn-sm action action2">Edit</button></a>
                                               <button type="button" class="btn btn-danger btn-sm action">Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Magnetoencephalography</td>
                                            <td>Familywellness</td>
                                            <td>$ 160</td>
                                            <td style="text-align: center;">
                                               <a href="edit_diagnosis.php"><button type="button" class="btn btn-dark btn-sm action action2">Edit</button></a>
                                               <button type="button" class="btn btn-danger btn-sm action">Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Cholecystography</td>
                                            <td>Trinityhealth</td>
                                            <td>$ 200</td>
                                            <td style="text-align: center;">
                                               <a href="edit_diagnosis.php"><button type="button" class="btn btn-dark btn-sm action action2">Edit</button></a>
                                               <button type="button" class="btn btn-danger btn-sm action">Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Cholangiopancreatoscopy</td>
                                            <td>Magicalwellness</td>
                                            <td>$ 120</td>
                                            <td style="text-align: center;">
                                               <a href="edit_diagnosis.php"><button type="button" class="btn btn-dark btn-sm action action2">Edit</button></a>
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