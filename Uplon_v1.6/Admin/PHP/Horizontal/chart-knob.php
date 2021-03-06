<?php require 'includes/header_start.php'; ?>

<?php require 'includes/header_end.php'; ?>

    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="btn-group pull-right m-t-15">
                <button type="button" class="btn btn-custom dropdown-toggle waves-effect waves-light"
                        data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i
                            class="fa fa-cog"></i></span></button>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>

            </div>
            <h4 class="page-title">Jquery Knob Charts</h4>
        </div>
    </div>
    <!-- end row -->


    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title">Examples</h4>
                <p class="text-muted m-b-30 font-13">
                    Use <code> data-plugin="knob" data-width="xx" data-height="xx"
                        data-fgColor="#xxx" data-displayInput=.. value="xxx"</code>.
                </p>

                <div class="row">
                    <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-3 text-center">
                        <div class="p-20">
                            <input data-plugin="knob" data-width="150" data-height="150" data-bgColor="#ebeff2"
                                   data-fgColor="#1bb99a" data-displayInput=false value="35"/>
                            <h6 class="text-muted m-t-10">Disable display input</h6>
                        </div>
                    </div><!-- end col-->
                    <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-3 text-center">
                        <div class="p-20">
                            <input data-plugin="knob" data-width="150" data-height="150" data-cursor=true
                                   data-fgColor="#3db9dc" value="29"/>
                            <h6 class="text-muted m-t-10">Cursor mode</h6>
                        </div>
                    </div><!-- end col-->
                    <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-3 text-center">
                        <div class="p-20">
                            <input data-plugin="knob" data-width="150" data-height="150" data-min="-100"
                                   data-fgColor="#f1b53d" data-displayPrevious=true value="44"/>
                            <h6 class="text-muted m-t-10">Display previous value</h6>
                        </div>
                    </div><!-- end col-->
                    <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-3 text-center">
                        <div class="p-20">
                            <input data-plugin="knob" data-width="150" data-height="150" data-min="-100"
                                   data-fgColor="#ff5d48" data-displayPrevious=true data-angleOffset=-125
                                   data-angleArc=250 value="44"/>
                            <h6 class="text-muted m-t-10">Angle offset and arc</h6>
                        </div>
                    </div><!-- end col-->
                </div><!-- end row -->

                <div class="row">
                    <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-3 text-center">
                        <div class="p-20">
                            <input data-plugin="knob" data-width="150" data-height="150"
                                   data-angleOffset="90" data-linecap="round" data-fgColor="#2b3d51"
                                   value="35"/>
                            <h6 class="text-muted m-t-10">Angle offset</h6>
                        </div>
                    </div><!-- end col-->
                    <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-3 text-center">
                        <div class="p-20">
                            <input data-plugin="knob" data-width="150" data-height="150" data-min="-15000"
                                   data-displayPrevious=true data-max="15000" data-step="1000"
                                   value="-11000" data-fgColor="#9261c6"/>
                            <h6 class="text-muted m-t-10">5-digit values, step 1000</h6>
                        </div>
                    </div><!-- end col-->
                    <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-3 text-center">
                        <div class="p-20">
                            <input data-plugin="knob" data-width="150" data-height="150" data-linecap=round
                                   data-fgColor="#ff7aa3" value="80" data-skin="tron" data-angleOffset="180"
                                   data-readOnly=true data-thickness=".1"/>
                            <h6 class="text-muted m-t-10">Readonly</h6>
                        </div>
                    </div><!-- end col-->
                    <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-3 text-center">
                        <div class="p-20">
                            <input data-plugin="knob" data-width="150" data-height="150"
                                   data-displayPrevious=true data-fgColor="#039cfd" data-skin="tron"
                                   data-cursor=true value="75" data-thickness=".2" data-angleOffset=-125
                                   data-angleArc=250 value="44"/>
                            <h6 class="text-muted m-t-10">Angle offset and arc</h6>
                        </div>
                    </div><!-- end col-->
                </div><!-- end row-->

            </div>
        </div>
    </div>
    <!-- End row -->



<?php require 'includes/footer_start.php' ?>

    <!-- KNOB JS -->
    <!--[if IE]>
    <script type="text/javascript" src="assets/plugins/jquery-knob/excanvas.js"></script>
    <![endif]-->
    <script src="assets/plugins/jquery-knob/jquery.knob.js"></script>

<?php require 'includes/footer_end.php' ?>