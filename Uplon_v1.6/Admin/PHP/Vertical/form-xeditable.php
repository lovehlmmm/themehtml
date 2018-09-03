<?php require 'includes/header_start.php'; ?>

    <!-- X-editable css -->
    <link type="text/css" href="assets/plugins/x-editable/css/bootstrap-editable.css" rel="stylesheet">

<?php require 'includes/header_end.php'; ?>


    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-title-box">
                            <h4 class="page-title float-left">X-Editable</h4>

                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item"><a href="#">Uplon</a></li>
                                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                <li class="breadcrumb-item active">X-Editable</li>
                            </ol>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <h4 class="m-b-30 m-t-0 header-title">Inline Editor</h4>
                            <form action="#" class="form-horizontal">
                                <div class="form-group row">
                                    <label class="col-sm-5 form-control-label">Simple Text Field</label>
                                    <div class="col-sm-7">
                                        <a href="#" id="inline-username" data-type="text" data-pk="1" data-title="Enter username">superuser</a>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 form-control-label">Empty text field, required</label>
                                    <div class="col-sm-7">
                                        <a href="#" id="inline-firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname"></a>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 form-control-label">Select, local array, custom display</label>
                                    <div class="col-sm-7">
                                        <a href="#" id="inline-sex" data-type="select" data-pk="1" data-value="" data-title="Select sex"></a>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 form-control-label">Select, error while loading</label>
                                    <div class="col-sm-7">
                                        <a href="#" id="inline-status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-title="Select status">Active</a>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 form-control-label">Combodate</label>
                                    <div class="col-sm-7">
                                        <a href="#" id="inline-dob" data-type="combodate" data-value="1995-01-17" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1"  data-title="Select Date of birth"></a>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 form-control-label">Textarea, buttons below. Submit by <i>ctrl+enter</i></label>
                                    <div class="col-sm-7">
                                        <a href="#" id="inline-comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">awesome user!</a>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <!-- end row -->


            </div> <!-- container -->

        </div> <!-- content -->



    </div>
    <!-- End content-page -->


    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->



<?php require 'includes/footer_start.php' ?>

    <!-- XEditable Plugin -->
    <script src="assets/plugins/moment/moment.js"></script>
    <script type="text/javascript" src="assets/plugins/x-editable/js/bootstrap-editable.min.js"></script>
    <script type="text/javascript" src="assets/pages/jquery.xeditable.js"></script>


<?php require 'includes/footer_end.php' ?>