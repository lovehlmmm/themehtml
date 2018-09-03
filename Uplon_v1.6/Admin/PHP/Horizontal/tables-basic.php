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
            <h4 class="page-title">Basic Tables</h4>
        </div>
    </div>
    <!-- end row -->


    <div class="row">
        <div class="col-12">
            <div class="card-box">

                <div class="row">
                    <div class="col-sm-12 col-xs-12 col-md-12 col-lg-6">
                        <h4 class="header-title m-t-0">Basic example</h4>
                        <p class="text-muted font-13 m-b-10">
                            Your awesome text goes here.Your awesome text goes here.
                        </p>

                        <div class="p-20">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xs-12 col-md-12 col-lg-6">
                        <h4 class="header-title m-t-0">Inverse table</h4>
                        <p class="text-muted font-13 m-b-10">
                            Your awesome text goes here.Your awesome text goes here.
                        </p>

                        <div class="p-20">
                            <table class="table table-inverse">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row m-t-50">
                    <div class="col-sm-12 col-xs-12 col-md-12 col-lg-6 m-t-20">
                        <h4 class="header-title m-t-0">Table head options</h4>
                        <p class="text-muted font-13 m-b-10">
                            Use one of two modifier classes to make <code>&lt;thead&gt;</code>s appear light or dark gray.
                        </p>

                        <div class="p-20">
                            <table class="table">
                                <thead class="thead-default">
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xs-12 col-md-12 col-lg-6 m-t-20">
                        <h4 class="header-title m-t-0">Striped rows</h4>
                        <p class="text-muted font-13 m-b-10">
                            Use <code>.table-striped</code> to add zebra-striping to any table row
                            within the <code>&lt;tbody&gt;</code>.
                        </p>

                        <div class="p-20">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <!-- end row -->


                <div class="row m-t-50">

                    <div class="col-sm-12 col-xs-12 col-md-12 col-lg-6 m-t-20">
                        <h4 class="header-title m-t-0">Bordered table</h4>
                        <p class="text-muted font-13 m-b-10">
                            Add <code>.table-bordered</code> for borders on all sides of the table and cells.
                        </p>

                        <div class="p-20">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@TwBootstrap</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xs-12 col-md-12 col-lg-6 m-t-20">
                        <h4 class="header-title m-t-0">Hoverable rows</h4>
                        <p class="text-muted font-13 m-b-10">
                            Add <code>.table-hover</code> to enable a hover state on table rows
                            within a <code>&lt;tbody&gt;</code>.
                        </p>

                        <div class="p-20">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <!-- end row -->

                <div class="row m-t-50">
                    <div class="col-sm-12 col-xs-12 col-md-12 col-lg-6 m-t-20">
                        <h4 class="header-title m-t-0">Small table</h4>
                        <p class="text-muted font-13 m-b-10">
                            Add <code>.table-sm</code> to make tables more compact by cutting cell padding in half.
                        </p>

                        <div class="p-20">
                            <table class="table table-sm">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xs-12 col-md-12 col-lg-6 m-t-20">
                        <h4 class="header-title m-t-0">Contextual classes</h4>
                        <p class="text-muted font-13 m-b-10">
                            Use contextual classes to color table rows or individual cells.
                        </p>

                        <div class="p-20">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Column heading</th>
                                    <th>Column heading</th>
                                    <th>Column heading</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="table-active">
                                    <th scope="row">1</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr class="table-success">
                                    <th scope="row">3</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr class="table-info">
                                    <th scope="row">5</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr class="table-warning">
                                    <th scope="row">7</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr class="table-danger">
                                    <th scope="row">9</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <!-- end row -->


                <div class="row m-t-50">

                    <div class="col-sm-12 col-xs-12 col-md-12 col-lg-6 m-t-20">
                        <h4 class="header-title m-t-0">Responsive tables</h4>
                        <p class="text-muted font-13 m-b-10">
                            Create responsive tables by wrapping any <code>.table</code> in <code>
                                .table-responsive</code> to make them scroll horizontally on small devices
                            (under 768px). When viewing on anything larger than 768px wide,
                            you will not see any difference in these tables.
                        </p>

                        <div class="p-20">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Table heading</th>
                                        <th>Table heading</th>
                                        <th>Table heading</th>
                                        <th>Table heading</th>
                                        <th>Table heading</th>
                                        <th>Table heading</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end row -->

            </div>
        </div><!-- end col-->

    </div>
    <!-- end row -->




<?php require 'includes/footer_start.php' ?>

<?php require 'includes/footer_end.php' ?>