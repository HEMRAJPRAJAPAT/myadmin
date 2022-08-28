<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Edit Appointment</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
        crossorigin="anonymous"></script>
</head>

<style>
    .form_data {
        padding: 0rem 1rem 1rem;
    }

    .form_data label {
        margin: 1rem 0 0.3rem;
        font-size: 16px;
        font-weight: 600;
    }

    .card-header {
        background-color: #333;
        border-bottom: 1px solid #fff;
        color: #fff;
    }

    .form-control {
        border: 1px solid grey;
        opacity: 0.8;
    }

    .additionally_option h3 {
        color: #000;
        margin: 1rem 0rem 0rem;
    }

    .save_btn {
        margin-top: 1rem;
    }

    .heading h4 {
        text-shadow: 5px 5px 3px #000;
        font-weight: 550;
    }

    .brand_text {
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
                                    <h4>Edit Appointment</h4>
                                </div>
                            </div>
                        </div>

                        <div class="card-body car_img px-0 pb-2">
                            <form class="form_data">

                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Select Date</label>
                                        <input type="date" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Select Diagnosis</label>
                                            <select class="form-control">
                                                <option>Select Diagnosis</option>
                                                <option>Angiocardiography</option>
                                                <option>Cerebral Angiography</option>
                                                <option>Magnetoencephalography</option>
                                                <option>Cholecystography</option>
                                                <option>Cholangiopancreatoscopy</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Patient Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Patient Name">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Email Address</label>
                                        <input type="emial" class="form-control" placeholder="Enter Email Address">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Phone Number</label>
                                        <input type="number" class="form-control" placeholder="Enter Phone Number">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Age</label>
                                        <input type="number" class="form-control" placeholder="Enter Age">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Upload Photo</label>
                                        <input type="file" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Upload Documents</label>
                                        <input type="file" class="form-control" multiple>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Select Product</label>
                                            <select class="form-control">
                                                <option>Select Product</option>
                                                <option>product-1</option>
                                                <option>product-2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control">
                                                <option>Select Status</option>
                                                <option>Active</option>
                                                <option>Passive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label>Notes About Diseases</label>
                                        <textarea rows="3" class="form-control" placeholder="Diseases Notes"></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-dark save_btn">Save</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
</body>

</html>