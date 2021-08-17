<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<?php require_once("head.php") ?>

<body class="vertical-layout vertical-compact-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-compact-menu" data-col="2-columns">

<?php require_once("topnav.php") ?>

<?php require_once("leftmenu.php") ?>

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-8 col-12 mb-2">
            <h3 class="content-header-title mb-0 d-inline-block"><i class="icon-grid"></i> Dashboard</h3>
          </div>
          <div class="content-header-right col-md-4 col-12 d-none d-md-inline-block text-right">
            Account Balance: $458.88 | <a href="">billing</a>
          </div>
        </div>

        <div class="content-body">
            <div class="row match-height">
                <div class="col-xl-9 col-12">
                    <div class="row">
                        <div class="col-md-6 col-xl-6 col-12">
                            <section class="card mt-2">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-md-5 col-xl-5 col-6">
                                                    <div class="crypto-circle rounded-circle">
                                                        <i class="ft-cpu"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-xl-7 col-6">
                                                    <p><strong>DCU Running</strong></p>
                                                    <h1>13 <span class="badge-sm">of 18 total</span></h1>
                                                    <a class="" href="dcu.php">Manage</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-md-6 col-xl-6 col-12">
                            <section class="card mt-2">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-md-5 col-xl-5 col-6">
                                                    <div class="crypto-circle rounded-circle">
                                                        <i class="las la-code"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-xl-7 col-6">
                                                    <p><strong>Functions Active</strong></p>
                                                    <h1>8 <span class="badge-sm">of 9 total</span></h1>
                                                    <a class="" href="serverless.php">Manage</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

                </div>
                
                <div class="col-xl-3 col-lg-12">
                    <h6><i class="ft-heart pink"></i> Enjoy Planetr</h6>
                    <p>
                    Whether you’re just moving to the cloud, or building the next groundbreaking app, it’s the platform behind the products that lets you create unforgettable experiences at global scale.
                    </p>
                </div>
            </div>

            <hr>

            <h3 class="mt-2"><i class="las la-shopping-basket" style="font-size: 125%;"></i> Latest On Marketplace <a class="badge-sm" href="marketplace.php">Explore</a></h3>


            <div class="row">
                <div class="col-md-4 col-xl-4 col-12 mt-2">
                    <div class="row">
                        <div class="col-md-3 col-xl-3 col-3">
                            <div class="crypto-circle rounded-circle" style="padding:15px 0 0 10px">
                                <img src="images/blender-icon.png" alt="blender logo"/>
                            </div>
                        </div>
                        <div class="col-md-9 col-xl-9 col-9">
                            <p class="btn-sm btn btn-outline-warning round badge-sm"><strong>DCU</strong></p>
                            <h4>Blender</h4>
                            <p class="mb-0">Cycles is Blender’s ray-trace based production render engine.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xl-4 col-12 mt-2">
                    <div class="row">
                        <div class="col-md-3 col-xl-3 col-3">
                            <div class="crypto-circle rounded-circle" style="padding:15px 0 0 10px">
                                <img src="images/blender-icon.png" alt="blender logo"/>
                            </div>
                        </div>
                        <div class="col-md-9 col-xl-9 col-9">
                            <p class="btn-sm btn btn-outline-warning round badge-sm"><strong>Function</strong></p>
                            <h4>Tensorflow</h4>
                            <p class="mb-0">Cycles is Blender’s ray-trace based production render engine.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xl-4 col-12 mt-2">
                    <div class="row">
                        <div class="col-md-3 col-xl-3 col-3">
                            <div class="crypto-circle rounded-circle" style="padding:15px 0 0 10px">
                                <img src="images/blender-icon.png" alt="blender logo"/>
                            </div>
                        </div>
                        <div class="col-md-9 col-xl-9 col-9">
                            <p class="btn-sm btn btn-outline-warning round badge-sm"><strong>DCU</strong></p>
                            <h4>Chromium</h4>
                            <p class="mb-0">Cycles is Blender’s ray-trace based production render engine.</p>
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