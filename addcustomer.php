<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Add Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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

    .tab {
        cursor: pointer;
    }

    .supported{
        margin-top: 0.5rem;
        font-weight: 500;
    }

    .heading h4{
        text-shadow: 5px 5px 3px #000;
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

                    <ul class="nav nav-tabs">
                        <li class="nav-item tab" id="tab1">
                            <a class="nav-link active">Information</a>
                        </li>
                        <li class="nav-item tab" id="tab2">
                            <a class="nav-link">Patient Files</a>
                        </li>
                        <li class="nav-item tab" id="tab3">
                            <a class="nav-link">Patient Family Tree</a>
                        </li>
                    </ul>

                    <div class="card mb-4">
                        <form>
                            <div id="info1">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-md-12 heading">
                                            <h4>Information</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body car_img px-0 pb-2">
                                    <div class="form_data">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                                <input type="text" class="form-control" placeholder="Enter Name">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Surname</label>
                                                <input type="text" class="form-control" placeholder="Enter Surname">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Date of birth</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Gender</label>
                                                <input type="text" class="form-control" placeholder="Enter Gender">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Blood Group</label>
                                                <input type="text" class="form-control" placeholder="Enter Blood Group">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Patient Photo</label>
                                                <input type="file" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Phone Number</label>
                                                <input type="number" class="form-control"
                                                    placeholder="Enter Phone Number">
                                            </div>
                                            <div class="col-md-6">
                                                <label>TC No:</label>
                                                <input type="number" class="form-control" placeholder="Enter TC Number">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Email Address</label>
                                                <input type="emial" class="form-control"
                                                    placeholder="Enter Email Address">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Job</label>
                                                <input type="text" class="form-control" placeholder="Enter about Job">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Address</label>
                                                <input type="text" class="form-control" placeholder="Enter Address">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Country</label>
                                                <input type="text" class="form-control" placeholder="Enter Country">
                                            </div>
                                            <div class="col-md-6">
                                                <label>City</label>
                                                <input type="text" class="form-control" placeholder="Enter City">
                                            </div>
                                            <div class="col-md-6">
                                                <label>District</label>
                                                <input type="text" class="form-control" placeholder="Enter District">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="info2" style="display: none;">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>Patient Files</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body car_img px-0 pb-2">
                                    <div class="form_data">
                                        <div class="row"> 
                                            <div class="col-md-12">
                                                <label>Patient File</label>
                                                <input type="file" class="form-control" multiple>
                                                <p class="supported">Supported Files PDF, JPG, PNG, MP4 etc.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="info3" style="display: none;">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>Patient Family Tree</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body car_img px-0 pb-2">
                                    <div class="form_data">
                                        <div class="row">
                                            <div class="col-md-12">                                     
                                                <div class="form-group">
                                                    <label>Patient Family Tree</label>
                                                    <select class="form-control">
                                                      <option value="">Select Clinic</option>
                                                      <option value="">Better Health & Wellness</option>
                                                      <option value="">Wellness Bliss Group</option>
                                                      <option value="">Family Wellness Center</option>
                                                      <option value="">Trinity Health and Wellness Medical Group</option>
                                                      <option value="">The Magical Wellness Center</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">                                     
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <select class="form-control">
                                                      <option value="">Select status</option>
                                                      <option value="">Active</option>
                                                      <option value="">Passive</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-12" style="text-align: right;">
                                        <button type="submit" class="btn btn-dark">Save</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        $(document).ready(function () {

            $("#tab1").click(function () {
                $("#info1").show();
                $("#info2").hide();
                $("#info3").hide();
                $("#tab1>a").addClass("active");
                $("#tab2>a").removeClass("active");
                $("#tab3>a").removeClass("active");
            });

            $("#tab2").click(function () {
                $("#info1").hide();
                $("#info2").show();
                $("#info3").hide();
                $("#tab1>a").removeClass("active");
                $("#tab2>a").addClass("active");
                $("#tab3>a").removeClass("active");
            });

            $("#tab3").click(function () {
                $("#info1").hide();
                $("#info2").hide();
                $("#info3").show();
                $("#tab1>a").removeClass("active");
                $("#tab2>a").removeClass("active");
                $("#tab3>a").addClass("active");
            });

        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
</body>

</html>