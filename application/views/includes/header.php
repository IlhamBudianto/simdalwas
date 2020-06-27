
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>SIMDALWAS</title>
    <link rel="apple-touch-icon" href="<?php echo base_url()?>app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url()?>app-assets/images/ico/NTB.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CMuli:300,400,500,700" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
     <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>app-assets/vendors/css/extensions/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>app-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>app-assets/vendors/css/forms/icheck/icheck.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>app-assets/vendors/css/forms/icheck/custom.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>app-assets/vendors/css/charts/morris.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>app-assets/vendors/css/extensions/unslider.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>app-assets/vendors/css/weather-icons/climacons.min.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>app-assets/css/plugins/animate/animate.css">
    <!-- END Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>app-assets/vendors/css/charts/d3.css">
    <!-- END VENDOR CSS-->
    <!-- END ROBUST CSS-->

    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>app-assets/css/app.css">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>app-assets/css/core/menu/menu-types/vertical-compact-menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>app-assets/css/core/colors/palette-climacon.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>app-assets/css/pages/users.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
 <style type="text/css">
.container {
	width: 1024px;
	padding: 2em;
}

.bold-blue {
	font-weight: bold;
	color: #0277BD;
}
</style>
 
 <style type="text/css">
.filterable {
    margin-top: 15px;
}
.filterable .panel-heading .pull-right {
    margin-top: -20px;
}
.filterable .filters input[disabled] {
    background-color: transparent;
    border: none;
    cursor: auto;
    box-shadow: none;
    padding: 0;
    height: auto;
}
.filterable .filters input[disabled]::-webkit-input-placeholder {
    color: #333;
}
.filterable .filters input[disabled]::-moz-placeholder {
    color: #333;
}
.filterable .filters input[disabled]:-ms-input-placeholder {
    </style>
  </head>
  <body class="vertical-layout vertical-compact-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-compact-menu" data-col="2-columns">

    <!-- fixed-top-->
   <nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-dark bg-primary navbar-shadow navbar-brand-center">
      <div class="navbar-wrapper">
        <div class="navbar-header">
          <ul class="nav navbar-nav flex-row">
            <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
            <li class="nav-item"><a class="navbar-brand" href="home.php"><img class="brand-logo" alt="robust admin logo" src="<?php echo base_url()?>app-assets/images/logo/logo-light-sm.png">
                <h3 class="brand-text">SIMDALWAS</h3></a></li>
            <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
          </ul>
        </div>
        <div class="navbar-container content">
          <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
              <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu">         </i></a></li>
              <li class="dropdown nav-item mega-dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">BERANDA</a>
                <ul class="mega-dropdown-menu dropdown-menu row">
                  <li class="col-md-2">
                    <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="fa fa-newspaper-o"></i> Home</h6>
                    <div id="mega-menu-carousel-example">
                      <div><img class="rounded img-fluid mb-1" src="<?php echo base_url()?>app-assets/images/gallery/inspektorat.png" alt="First slide"><a class="news-title mb-0" href="#">Inspektorat Provinsi NTB</a>
                        <p class="news-content"><span class="font-small-2">24 Juni, 2020</span></p>
                      </div>
                    </div>
                  </li>
                  <li class="col-md-3">
                    <h6 class="dropdown-menu-header text-uppercase"><i class="fa fa-random"></i>Pengaturan</h6>
                    <ul class="drilldown-menu">
                      <li class="menu-list">
                        <ul>
                          <li><a href="https://inspektorat.ntbprov.go.id/index.php/peraturan/uud-ki/" target="_blank" class="dropdown-item" href="layout-2-columns.html"><i class="ft-align-left"></i> UUD KI</a></li>
                          <li><a href="https://inspektorat.ntbprov.go.id/index.php/peraturan/pergub/" target="_blank" class="dropdown-item" href="layout-2-columns.html"><i class="ft-align-left"></i>PERGUB</a></li>
                         
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="col-md-3">
                    <h6 class="dropdown-menu-header text-uppercase"><i class="fa fa-list"></i> Berita</h6>
                    <div id="accordionWrap" role="tablist" aria-multiselectable="true">
                      <div class="card border-0 box-shadow-0 collapse-icon accordion-icon-rotate">
                        <div class="card-header p-0 pb-2 border-0" id="headingOne" role="tab"><a data-toggle="collapse" data-parent="#accordionWrap" href="#accordionOne" aria-expanded="true" aria-controls="accordionOne">Berita 1</a></div>
                        <div class="card-collapse collapse show" id="accordionOne" role="tabpanel" aria-labelledby="headingOne" aria-expanded="true">
                          <div class="card-content">
                            <p class="accordion-text text-small-3"><a href="https://inspektorat.ntbprov.go.id/index.php/2020/03/02/daftar-informasi-publik-dip-tahun-2019/" target="_blank">Daftar Informasi Publik (DIP) Tahun 2019</p></a>
                          </div>
                        </div>
                        <div class="card-header p-0 pb-2 border-0" id="headingTwo" role="tab"><a class="collapsed" data-toggle="collapse" data-parent="#accordionWrap" href="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">Berita 2</a></div>
                        <div class="card-collapse collapse" id="accordionTwo" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false">
                          <div class="card-content">
                            <p class="accordion-text"><a href=https://inspektorat.ntbprov.go.id/index.php/2020/06/23/dialog-tvri-terkait-pengawasan-penggunaan-dana-covid-19/" target="_blank">Dialog TVRI terkait Pengawasan Penggunaan Dana Covid 19</p></a>
                          </div>
                        </div>
                        <div class="card-header p-0 pb-2 border-0" id="headingThree" role="tab"><a class="collapsed" data-toggle="collapse" data-parent="#accordionWrap" href="#accordionThree" aria-expanded="false" aria-controls="accordionThree">Berita 3</a></div>
                        <div class="card-collapse collapse" id="accordionThree" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false">
                          <div class="card-content">
                            <p class="accordion-text"><a href=https://inspektorat.ntbprov.go.id/index.php/2020/06/15/gubernur-ikuti-rakornas-pengawasan-intern-presiden-tekankan-tata-kelola-anggaran-covid-19-harus-baik/" target="_blank">GUBERNUR IKUTI RAKORNAS PENGAWASAN INTERN, PRESIDEN TEKANKAN TATA KELOLA ANGGARAN COVID-19 HARUS BAIK</p></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="col-md-4">
                    <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="fa fa-envelope"></i>Kontak Kami</h6>
                    <form class="form form-horizontal">
                      <div class="form-body">
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label" for="inputName1">Name</label>
                          <div class="col-sm-9">
                            <div class="position-relative has-icon-left">
                              <input class="form-control" type="text" id="inputName1" placeholder="">
                              <div class="form-control-position pl-1"><i class="fa fa-user"></i></div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label" for="inputEmail1">Email</label>
                          <div class="col-sm-9">
                            <div class="position-relative has-icon-left">
                              <input class="form-control" type="email" id="inputEmail1" placeholder="">
                              <div class="form-control-position pl-1"><i class="fa fa-envelope"></i></div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label" for="inputMessage1">Message</label>
                          <div class="col-sm-9">
                            <div class="position-relative has-icon-left">
                              <textarea class="form-control" id="inputMessage1" rows="2" placeholder=""></textarea>
                              <div class="form-control-position pl-1"><i class="fa fa-comments"></i></div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12 mb-1">
                            <button class="btn btn-info float-right" type="button"><i class="fa fa-paper-plane"></i> Kirim         </button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </li>
                </ul>
              </li>
              
              
            </ul>
            <ul class="nav navbar-nav float-right">         
        
              <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="avatar avatar-online"><img src="<?php echo base_url()?>app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span><span class="user-name">ADMIN</span></a>
                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="user-profile.html"><i class="ft-user"></i> Edit Profile</a>
                  <div class="dropdown-divider"></div><a class="dropdown-item" href="logout.php"><i class="ft-power"></i> Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->