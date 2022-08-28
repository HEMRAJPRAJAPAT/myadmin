<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Log</title>
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
                                <div class="col-md-12 mt-2 heading">
                                    <h4>Log</h4>
                                </div>
                            </div>
                        </div>

                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th style="width: 10%;">#</th>
                                            <th>Patient Name</th>
                                            <th>Appointment Date</th>
                                            <th>Diagnosis</th>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>James</td>
                                            <td>12/02/2022</td>
                                            <td>Angiocardiography</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Mary</td>
                                            <td>05/02/2022</td>
                                            <td>Cerebral Angiography</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Robert</td>
                                            <td>27/01/2022</td>
                                            <td>Magnetoencephalography</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Patricia</td>
                                            <td>31/01/2022</td>
                                            <td>Cholecystography</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Daniel</td>
                                            <td>20/02/2022</td>
                                            <td>Cholangiopancreatoscopy</td>
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