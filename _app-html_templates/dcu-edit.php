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
          <div class="content-header-left col-md-8 col-12 mb-2">
            <h3 class="content-header-title mb-0 d-inline-block"><i class="ft-plus"></i> Start DCU</h3>
          </div>
          <div class="content-header-right col-md-4 col-12 d-none d-md-inline-block">
            <div class="btn-group float-md-right">
            </div>
          </div>
        </div>

        <div class="content-body">
            <div class="row match-height">
                <div class="col-xl-9 col-12">

                <section class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-md-2 col-12">
                                        <div class="crypto-circle rounded-circle">
                                            <i class="ft-cpu"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-10 col-12">
                                        <form class="form-horizontal" action="#">
                                            <h5>1. Container Details</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-12">
                                                    <fieldset class="form-label-group">
                                                        <input type="text" class="form-control" id="image-name" value="" required="yes" autofocus="">
                                                        <label for="image-name">Container Image</label>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <p class="text-muted">Container images are usually given a name such as example/mycontainer, or busybox or alpine. Images can also include a registry hostname; for example: fictional.registry.example/imagename, and possibly a port number as well; for example: fictional.registry.example:10443/imagename. If you don't specify a registry hostname, Planetr assumes that you mean the Docker public registry.</p>

                                            <strong class="mt-2">Registry Authentication (optional)</strong>
                                            <div class="row mt-1">
                                                <div class="col-6">
                                                    <fieldset class="form-label-group">
                                                        <input type="text" class="form-control" id="registry-username" value="" required="" autofocus="">
                                                        <label for="registry-username">Username</label>
                                                    </fieldset>
                                                </div>
                                                <div class="col-6">
                                                    <fieldset class="form-label-group">
                                                        <input type="text" class="form-control" id="registry-password" value="" required="" autofocus="">
                                                        <label for="registry-password">Password</label>
                                                    </fieldset>
                                                </div>
                                            </div>

                                            <h5 class="mt-2">2. Instance Type</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-6">
                                                <fieldset class="form-label-group">
                                                <select class="custom-select">
                                                    <option selected="">g.medium</option>
                                                    <option>g.micro</option>
                                                    <option>g.large</option>
                                                    <option>g.2xlarge</option>
                                                    <option>g.4xlarge</option>
                                                </select>
                                                </fieldset>
                                                </div>
                                            </div>
                                            <p class="text-muted">Planetr provides a wide selection of instance types optimized to fit different use cases. Instance types comprise varying combinations of CPU, memory, and networking capacity and give you the flexibility to choose the appropriate mix of resources for your applications.</p>

                                            <h5 class="mt-2">3. Networking</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-6">
                                                    <fieldset class="form-label-group">
                                                        <input type="text" class="form-control" id="port-local" value="" required="" autofocus="">
                                                        <label for="port-local">Local Port</label>
                                                    </fieldset>
                                                </div>
                                                <div class="col-6">
                                                    <fieldset class="form-label-group">
                                                        <input type="text" class="form-control" id="port-remote" value="" required="" autofocus="">
                                                        <label for="port-remote">Remote Port</label>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <p class="text-muted">By default, when you create or run a container using Planetr, it does not publish any of its ports to the outside world. To make a port available to services outside of Planetr, specify the port mapping. If your container is exposing port 80 and you want that available on this DCU at 8080, specify Local:8080, Remote:80</p>

                                            <h5 class="mt-2">4. Basic Details</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-6">
                                                    <fieldset class="form-label-group">
                                                        <input type="text" class="form-control" id="name" value="Example 1" required="" autofocus="">
                                                        <label for="port-mapping">Name your DCU</label>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <p class="text-muted">Specify an optional name for the DCU.</p>

                                            <div class="row">
                                            <div class="col-12 text-right">
                                                <a href="dcu.php" class="mr-2">Cancel</a> <button type="submit" class="btn-gradient-primary my-1">Start DCU</button>
                                            </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                </div>
                
                <div class="col-xl-3 col-lg-12">
                    <h6>What is a DCU?</h6>
                    <p>Planetr DCU allows you to run any decentralised application or host blockchain-based services that need computing resources to function. </p>
                    <p>We use Docker container technology to provide developers with security, power, and flexibility.</p>

                    <h6 class="mt-4">What is a Container Image?</h6>
                    <p>A container image represents binary data that encapsulates an application and all its software dependencies. Container images are executable software bundles that can run standalone and that make very well defined assumptions about their runtime environment.</p>

                </div>
            </div>

        </div>
    </div>
</div>

<?php require_once("footer.php") ?>

</body>

</html>