<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Add Survey</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
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

    .heading h4 {
        text-shadow: 5px 5px 3px #000;
        font-weight: 550;
    }

    .brand_text {
        text-shadow: 5px 5px 5px #000;
        font-size: 2rem;
    }

    .radio {
        width: 17px;
        height: 17px;
        cursor: pointer;
        position: relative;
        top: 1px;
    }

    .option {
        margin-right: 2rem;
    }

    .fa-plus-circle {
        font-size: 2rem;
        cursor: pointer;
    }

    .Choose_type {
        display: none;
    }
</style>

<script>
    $(document).ready(function () {

        $(".fa-plus-circle").on("click", function () {
            var type_value = $('input[name="type"]:checked').val();
            if (type_value == "Multiple") {
                $(".Choose_type").show();
            }
            else if (type == "Fixed") {
                $('.Choose_type').hide();
            }
        });

        $('.add_field_button').on("click", function () {
            $('.productcontent').append('<div class="row" style="margin-top: 1rem;"><div class="col-md-12"><label>Add Question</label><input type="text" class="form-control" placeholder="Add Question"></div></div><div class="row"><div class="col-md-10"><label>Choose Type</label> <br><input type="radio" name="type" class="radio" value="Multiple"> <span class="option">Multiple</span><input type="radio" name="type" class="radio" value="Fixed"> <span class="option">Fixed</span></div><div class="col-md-2" style="text-align: center; padding-top: 1.5rem;"><i class="fas fa-plus-circle" id="adding"></i></div></div><div class="row Choose_type"><div class="col-md-12"><label></label><input type="text" class="form-control"></div><div class="col-md-12"><label></label><input type="text" class="form-control"></div><div class="col-md-12"><label></label><input type="text" class="form-control"></div><div class="col-md-12"><label></label><input type="text" class="form-control"></div></div>');
        });
        
        $('.productcontent').on("click", ".adding", function () {
            $(this).parent('div').remove();
        })

    });
</script> 

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
                                <div class="col-md-12 mt-2 Survey heading">
                                    <h4>Add Survey Module</h4>
                                </div>
                            </div>
                        </div>

                        <div class="card-body car_img px-0 pb-2">
                            <form class="form_data">
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
                                        <label>Phone Number</label>
                                        <input type="number" class="form-control" placeholder="Enter Phone number">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Email Address</label>
                                        <input type="emial" class="form-control" placeholder="Enter Email Address">
                                    </div>
                                    <div class="col-md-6">
                                        <label>City</label>
                                        <input type="text" class="form-control" placeholder="Enter City">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control">
                                                <option>Active</option>
                                                <option>Passive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label>Survey Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Survey Name">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Survey Description</label> <br>
                                        <textarea rows="3" class="form-control"
                                            placeholder="Survey Description"></textarea>
                                    </div>
                                </div>

                                <div class="productcontent">
                                    <div class="row" style="margin-top: 1rem;">
                                        <div class="col-md-12">
                                            <label>Add Question</label>
                                            <input type="text" class="form-control" placeholder="Add Question">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <label>Choose Type</label> <br>
                                            <input type="radio" name="type" class="radio" value="Multiple"> <span
                                                class="option">Multiple</span>
                                            <input type="radio" name="type" class="radio" value="Fixed"> <span
                                                class="option">Fixed</span>
                                        </div>
                                        <div class="col-md-2" style="text-align: center; padding-top: 1.5rem;">
                                            <i class="fas fa-plus-circle"></i>
                                        </div>
                                    </div>

                                    <div class="row Choose_type">
                                        <div class="col-md-12">
                                            <label></label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-md-12">
                                            <label></label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-md-12">
                                            <label></label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-md-12">
                                            <label></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 2rem;">
                                    <div class="col-md-12" style="text-align: right;">
                                        <button type="button" class="btn btn-dark"><i
                                                class="fa fa-plus add_field_button"></i>Add</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-dark">Save</button>
                                </div>
                            </div>
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