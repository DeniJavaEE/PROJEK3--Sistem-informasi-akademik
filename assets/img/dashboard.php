<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Dashboard</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li class="active"><i class="fi-air-play"></i>&nbsp; Dashboard</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-primary">
                                    <i class="mdi mdi-account-check widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Pendaftar Terverifikasi">Terverifikasi</p>
                                        <h2><span data-plugin="counterup"><?=$terverifikasi?></span></h2>
                                        <p class="m-0"><a href="javascript:void(0)" class="btn btn-xs btn-flat btn-primary">Terverifikasi &nbsp;<i class="mdi mdi-arrow-right-bold-circle-outline"></i></a></p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-warning">
                                    <i class="mdi mdi-account-off widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Pendaftar Tertunda">Tertunda</p>
                                        <h2><span data-plugin="counterup"><?=$tertunda?></span></h2>
                                        <p class="m-0"><a href="javascript:void(0)" class="btn btn-xs btn-flat btn-warning">Tertunda &nbsp;<i class="mdi mdi-arrow-right-bold-circle-outline"></i></a></p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-info">
                                    <i class="mdi mdi-account-convert widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Pendaftar Belum Disetujui">Belum Disetujui</p>
                                        <h2><span data-plugin="counterup"><?=$belumdisetujui?></span></h2>
                                        <p class="m-0"><a href="javascript:void(0)" class="btn btn-xs btn-flat btn-info">Belum Disetujui &nbsp;<i class="mdi mdi-arrow-right-bold-circle-outline"></i></a></p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-success">
                                    <i class="mdi mdi-account-card-details widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Pendaftar Disetujui">Disetujui</p>
                                        <h2><span data-plugin="counterup"><?=$disetujui?></span></h2>
                                        <p class="m-0"><a href="javascript:void(0)" class="btn btn-xs btn-flat btn-success">Disetujui &nbsp;<i class="mdi mdi-arrow-right-bold-circle-outline"></i></a></p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Welcome !</h4>
                                    <p class="text-muted m-b-30 font-13">
                                        Selamat datang di Dashboard Admin Kartu Sehat Bekasi !
                                    </p>
                                </div>    
                            </div>
                        </div>
                        <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->
