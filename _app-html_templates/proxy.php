<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<?php require_once("head.php") ?>

<?php $menu = "func" ?>

<body class="vertical-layout vertical-compact-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-compact-menu" data-col="2-columns">

<?php require_once("topnav.php") ?>

<?php require_once("leftmenu.php") ?>

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
            <h3 class="content-header-title mb-0 d-inline-block"><i class="las la-network-wired" style="font-size: 125%;"></i> Proxy</h3>
            <div class="row breadcrumbs-top d-inline-block">
              <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active">Edge Proxy Network (SOCKS5)
                  </li>
                </ol>
              </div>
            </div>
          </div>
          <div class="content-header-right col-md-4 col-12 d-none d-md-inline-block">
            <div class="btn-group float-md-right">
                <a class="btn-gradient-secondary btn-sm white" href="serverless-new.php">+ Create Proxy</a>
            </div>
          </div>
        </div>

        <div class="content-body">
            <div class="row match-height">
                <div class="col-xl-9 col-12">

                    <div class="card">
                        <div class="card-content">
                            <div class="table-responsive">
                            <table id="recent-orders" class="table table-hover table-xl mb-0">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">Instance</th>
                                            <th class="border-top-0">Status</th>
                                            <th class="border-top-0">Host:Port</th>
                                            <th class="border-top-0">Launch Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-truncate"><a href="#">Blender Server-1<div class="badge-sm text-muted mb-0">0c4553eca233aff45</div></a></td>
                                            <td class="text-truncate"><i class="las la-check-circle success font-medium-1"></i>Active</td>
                                            <td class="text-truncate">us1.planetr.io:7788</td>
                                            <td class="text-truncate">2021/04/21 21:43 GMT+5:30</td>
                                        </tr>
                                        <tr>
                                            <td class="text-truncate"><a href="#">Blender Server-1<div class="badge-sm text-muted mb-0">0c4553eca233aff45</div></a></td>
                                            <td class="text-truncate"><i class="la la-stop-circle text-danger font-medium-1"></i>Error</td>
                                            <td class="text-truncate">-</td>
                                            <td class="text-truncate">2021/04/21 21:43 GMT+5:30</td>
                                        </tr>
                                        <tr>
                                            <td class="text-truncate"><a href="#">Blender Server-1<div class="badge-sm text-muted mb-0">0c4553eca233aff45</div></a></td>
                                            <td class="text-truncate"><i class="las la-check-circle success font-medium-1"></i>Active</td>
                                            <td class="text-truncate">us1.planetr.io:7788</td>
                                            <td class="text-truncate">2021/04/21 21:43 GMT+5:30</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>                

                </div>
                
                <div class="col-xl-3 col-lg-12">
                    <h6 class="mt-4">What is Edge Proxy?</h6>
                    <p>
                    Planter's decentralised network proxy (SOCKS5) allows you to benefit from traffic exiting from edge nodes located all over the world. 
                    </p>
                    <p>
                    This includes both consumer IP addresses and data centre IP addresses.
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>

<?php require_once("footer.php") ?>

</body>

</html>