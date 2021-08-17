<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<?php require_once("head.php") ?>

<?php $menu = "dcu" ?>

<body class="vertical-layout vertical-compact-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-compact-menu" data-col="2-columns">

    <?php require_once("topnav.php") ?>

    <?php require_once("leftmenu.php") ?>

    <div class="app-content content">
        <div class="content-wrapper">

            <div class="content-header row">
                <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block"><i class="ft-cpu"></i> DCU </h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">DCU Instances
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="content-header-right col-md-4 col-12 d-none d-md-inline-block">
                    <div class="btn-group float-md-right">
                        <a class="btn-gradient-secondary btn-sm white" href="dcu-edit.php">+ Start DCU</a>
                    </div>
                </div>
            </div>

            <div class="content-body">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <!-- User Profile -->
                        <section class="card">
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table id="recent-orders" class="table table-hover table-xl mb-0">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Instance</th>
                                                <th class="border-top-0">Status</th>
                                                <th class="border-top-0">Image</th>
                                                <th class="border-top-0">Launch Time</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-truncate"><a href="dcu-view.php">Blender Server-1<div class="badge-sm text-muted mb-0">0c4553eca233aff45</div></a></td>
                                                <td class="text-truncate"><i class="las la-check-circle success font-medium-1"></i>Running</td>
                                                <td class="text-truncate">planetrio/blender<div class="badge-sm text-muted mb-0">g.medium</div>
                                                </td>
                                                <td class="text-truncate">2021/04/21 21:43 GMT+5:30</td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate"><a href="dcu-view.php">Blender Server-1<div class="badge-sm text-muted mb-0">0c4553eca233aff45</div></a></td>
                                                <td class="text-truncate"><i class="la la-stop-circle text-danger font-medium-1"></i>Stopped</td>
                                                <td class="text-truncate">planetrio/blender<div class="badge-sm text-muted mb-0">g.medium</div>
                                                </td>
                                                <td class="text-truncate">2021/04/21 21:43 GMT+5:30</td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate"><a href="dcu-view.php">Blender Server-1<div class="badge-sm text-muted mb-0">0c4553eca233aff45</div></a></td>
                                                <td class="text-truncate"><i class="la la-redo-alt text-warning font-medium-1"></i>Recovering</td>
                                                <td class="text-truncate">planetrio/blender<div class="badge-sm text-muted mb-0">g.medium</div>
                                                </td>
                                                <td class="text-truncate">2021/04/21 21:43 GMT+5:30</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </section>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title text-center">Blender Server-1</h6>
                                <div class="text-center mt-1">
                                    <a href="#" class="btn-sm btn btn-outline-warning round">Stop</a>
                                    <a href="#" class="btn-sm btn btn-outline-danger round">Delete</a>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="font-small-3 clearfix">
                                        <span class="float-left">Instance ID <br> <strong>0c4553eca233aff45</strong></span>
                                        <span class="float-right text-right">Status <br> <strong><i class="las la-check-circle success font-medium-1"></i>Running</strong></span>
                                    </div>
                                    <div class="font-small-3 clearfix mt-1">
                                        <span class="float-left">Ports <br> <strong>8080:80</strong></span>
                                        <span class="float-right text-right">Instance Type <br> <strong>g.medium</strong></span>
                                    </div>
                                    <div class="font-small-3 clearfix mt-1">
                                        <span class="float-left">Public DNS <br> <strong>https://0c4553eca233aff45.us1.planetr.io</strong></span>
                                    </div>
                                    <div class="font-small-3 clearfix mt-1">
                                        <span class="float-left">Created <br> <strong>2021/04/21 21:43 GMT+5:30</strong></span>
                                    </div>
                                    <div class="font-small-3 clearfix mt-1">
                                        <span class="float-left">Modified <br> <strong>2021/04/21 21:43 GMT+5:30</strong></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once("footer.php") ?>

</body>

</html>