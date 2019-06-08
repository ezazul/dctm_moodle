<!DOCTYPE html>
 <html>
     <head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
         <meta charset="utf-8" />
         <meta name="viewport" content="width=device-width, initial-scale=1.0" />
         <meta name="description" content=" " />

         <link rel="shortcut icon" href="assets/images/dctm_short_logo.png" />

         <title>Home Page </title>

         <!--Morris Chart CSS -->
         <link rel="stylesheet" href="../plugins/morris/morris.css" />
         <link href="../plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css" />

         <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
         <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
         <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
 <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

         <script src="assets/js/modernizr.min.js"></script>


     </head>


     <body class="fixed-left">

         <!-- Begin page -->
         <div id="wrapper">

             <!-- Top Bar Start -->
             <?php require 'topbar.php'; ?>
             <!-- Top Bar End -->


             <!-- ========== Left Sidebar Start ========== -->

             <?php require 'side_bar.php';?>
             <!-- Left Sidebar End -->



             <!-- ============================================================== -->
             <!-- Start right Content here -->
             <!-- ============================================================== -->
             <div class="content-page">
                 <!-- Start content -->
                 <div class="content">
                     <div class="container-fluid">

                         <!-- Page-Title -->
                         <div class="row">
                             <div class="col-sm-12">
                                 <div class="btn-group pull-right m-t-15">
                                     
                                 </div>

                                 <h4 class="page-title">Dashboard </h4>
                                 <ol class="breadcrumb">
                                     <li class="breadcrumb-item"><a href="#">Home </a></li>
                                     <li class="breadcrumb-item"><a href="#">Dashboard </a></li>
                                     
                                 </ol>

                             </div>
                         </div>


                         <div class="row">
                             <div class="col-md-6 col-lg-6 col-xl-4">
                                 <div class="widget-panel widget-style-2 bg-white">
                                     <i class="fa fa-users text-primary"></i>
                                     <h2 class="m-0 text-dark counter font-600">50568 </h2>
                                     <div class="text-muted m-t-5">Total Present Students </div>
                                 </div>
                             </div>
                             <div class="col-md-6 col-lg-6 col-xl-4">
                                 <div class="widget-panel widget-style-2 bg-white">
                                     <i class="fa fa-user text-pink"></i>
                                     <h2 class="m-0 text-dark counter font-600">1256 </h2>
                                     <div class="text-muted m-t-5">Today Absent Students </div>
                                 </div>
                             </div>
                             
                             <div class="col-md-6 col-lg-6 col-xl-4">
                                 <div class="widget-panel widget-style-2 bg-white">
                                     <i class="fa fa-users text-custom"></i>
                                     <h2 class="m-0 text-dark counter font-600">700 </h2>
                                     <div class="text-muted m-t-5">Register Students </div>
                                 </div>
                             </div>
                         </div>

                         <div class="row">
                             <div class="col-12">
                                 <div class="card-box">
                                     <h4 class="text-dark header-title m-t-0">This Month Attendace Chart </h4>

                                     <div class="row">
                                         <div class="col-md-12 col-xl-8">
                                             <div class="text-center">
                                                 <ul class="list-inline chart-detail-list">
                                                     <li class="list-inline-item">
                                                         <h5><i class="fa fa-circle m-r-5" style="color: #36404a;"></i>Present </h5>
                                                     </li>
                                                     <li class="list-inline-item">
                                                         <h5><i class="fa fa-circle m-r-5" style="color: #5d9cec;"></i>Absent </h5>
                                                     </li>
                                                     <li class="list-inline-item">
                                                         <h5><i class="fa fa-circle m-r-5" style="color: #bbbbbb;"></i>Total Students </h5>
                                                     </li>
                                                 </ul>
                                             </div>

                                             <div id="morris-area-with-dotted" style="height: 300px;"></div>

                                         </div>


                                         <div class="col-md-12 col-xl-4">

                                             <p class="font-600">B.Tech.  <span class="text-primary pull-right">80% </span></p>
                                             <div class="progress m-b-30">
                                                 <div class="progress-bar progress-bar-primary progress-animated wow animated" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                 </div><!-- /.progress-bar .progress-bar-danger -->
                                             </div><!-- /.progress .no-rounded -->

                                             <p class="font-600">BCA  <span class="text-pink pull-right">50% </span></p>
                                             <div class="progress m-b-30">
                                                 <div class="progress-bar progress-bar-pink progress-animated wow animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                                 </div><!-- /.progress-bar .progress-bar-pink -->
                                             </div><!-- /.progress .no-rounded -->

                                             <p class="font-600">D.Voc  <span class="text-info pull-right">70% </span></p>
                                             <div class="progress m-b-30">
                                                 <div class="progress-bar progress-bar-info progress-animated wow animated" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                                 </div><!-- /.progress-bar .progress-bar-info -->
                                             </div><!-- /.progress .no-rounded -->

                                             <p class="font-600">BBA  <span class="text-warning pull-right">65% </span></p>
                                             <div class="progress m-b-30">
                                                 <div class="progress-bar progress-bar-warning progress-animated wow animated" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                                 </div><!-- /.progress-bar .progress-bar-warning -->
                                             </div><!-- /.progress .no-rounded -->

                                             <p class="font-600">MBA  <span class="text-success pull-right">40% </span></p>
                                             <div class="progress m-b-30">
                                                 <div class="progress-bar progress-bar-success progress-animated wow animated" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                 </div><!-- /.progress-bar .progress-bar-success -->
                                             </div><!-- /.progress .no-rounded -->

                                         </div>

                                     </div>

                                     <!-- end row -->

                                 </div>

                             </div>

                         </div>
                         <!-- end row -->

                         <div class="row">
                             <div class="col-lg-12 col-xl-4">
                                 <div class="card-box">
                                     <div class="bar-widget">
                                         <div class="table-box">
                                             <div class="table-detail">
                                                 <div class="iconbox bg-info">
                                                     <i class="icon-layers"></i>
                                                 </div>
                                             </div>

                                             <div class="table-detail">
                                                 <h4 class="m-t-0 m-b-5"><b>1256 </b></h4>
                                                 <h5 class="text-muted m-b-0 m-t-0">Visiters </h5>
                                             </div>
                                             <div class="table-detail text-right">
                                                 <span data-plugin="peity-bar" data-colors="#34d3eb,#ebeff2" data-width="120" data-height="45">5,3,9,6,5,9,7,3,5,2,9,7,2,1 </span>
                                             </div>

                                         </div>
                                     </div>
                                 </div>
                             </div>

                             <div class="col-lg-12 col-xl-4">
                                 <div class="card-box">
                                     <div class="bar-widget">
                                         <div class="table-box">
                                             <div class="table-detail">
                                                 <div class="iconbox bg-custom">
                                                     <i class="icon-layers"></i>
                                                 </div>
                                             </div>

                                             <div class="table-detail">
                                                 <h4 class="m-t-0 m-b-5"><b>1256 </b></h4>
                                                 <h5 class="text-muted m-b-0 m-t-0">Visiters </h5>
                                             </div>
                                             <div class="table-detail text-right">
                                                 <span data-plugin="peity-pie" data-colors="#5fbeaa,#ebeff2" data-width="50" data-height="45">1/5 </span>
                                             </div>

                                         </div>
                                     </div>
                                 </div>
                             </div>

                             <div class="col-lg-12 col-xl-4">
                                 <div class="card-box">
                                     <div class="bar-widget">
                                         <div class="table-box">
                                             <div class="table-detail">
                                                 <div class="iconbox bg-danger">
                                                     <i class="icon-layers"></i>
                                                 </div>
                                             </div>

                                             <div class="table-detail">
                                                 <h4 class="m-t-0 m-b-5"><b>1256 </b></h4>
                                                 <h5 class="text-muted m-b-0 m-t-0">Visiters </h5>
                                             </div>
                                             <div class="table-detail text-right">
                                                 <span data-plugin="peity-donut" data-colors="#f05050,#ebeff2" data-width="50" data-height="45">1/5 </span>
                                             </div>

                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>



                         <div class="row">
                             <!-- Transactions -->
                             <div class="col-lg-12 col-xl-4">
                                 <div class="card-box">
                                     <h4 class="m-t-0 m-b-20 header-title"><b>Last Transactions </b></h4>

                                     <div class="nicescroll mx-box">
                                         <ul class="list-unstyled transaction-list m-r-5">
                                             <li>
                                                 <i class="ti-download text-success"></i>
                                                 <span class="tran-text">Advertising </span>
                                                 <span class="pull-right text-success tran-price">+$230 </span>
                                                 <span class="pull-right text-muted">07/09/2015 </span>
                                                 <span class="clearfix"></span>
                                             </li>

                                             <li>
                                                 <i class="ti-upload text-danger"></i>
                                                 <span class="tran-text">Support licence </span>
                                                 <span class="pull-right text-danger tran-price">-$965 </span>
                                                 <span class="pull-right text-muted">07/09/2015 </span>
                                                 <span class="clearfix"></span>
                                             </li>

                                             <li>
                                                 <i class="ti-download text-success"></i>
                                                 <span class="tran-text">Extended licence </span>
                                                 <span class="pull-right text-success tran-price">+$830 </span>
                                                 <span class="pull-right text-muted">07/09/2015 </span>
                                                 <span class="clearfix"></span>
                                             </li>

                                             <li>
                                                 <i class="ti-download text-success"></i>
                                                 <span class="tran-text">Advertising </span>
                                                 <span class="pull-right text-success tran-price">+$230 </span>
                                                 <span class="pull-right text-muted">05/09/2015 </span>
                                                 <span class="clearfix"></span>
                                             </li>

                                             <li>
                                                 <i class="ti-upload text-danger"></i>
                                                 <span class="tran-text">New plugins added </span>
                                                 <span class="pull-right text-danger tran-price">-$452 </span>
                                                 <span class="pull-right text-muted">05/09/2015 </span>
                                                 <span class="clearfix"></span>
                                             </li>

                                             <li>
                                                 <i class="ti-download text-success"></i>
                                                 <span class="tran-text">Google Inc. </span>
                                                 <span class="pull-right text-success tran-price">+$230 </span>
                                                 <span class="pull-right text-muted">04/09/2015 </span>
                                                 <span class="clearfix"></span>
                                             </li>

                                             <li>
                                                 <i class="ti-upload text-danger"></i>
                                                 <span class="tran-text">Facebook Ad </span>
                                                 <span class="pull-right text-danger tran-price">-$364 </span>
                                                 <span class="pull-right text-muted">03/09/2015 </span>
                                                 <span class="clearfix"></span>
                                             </li>

                                             <li>
                                                 <i class="ti-download text-success"></i>
                                                 <span class="tran-text">New sale </span>
                                                 <span class="pull-right text-success tran-price">+$230 </span>
                                                 <span class="pull-right text-muted">03/09/2015 </span>
                                                 <span class="clearfix"></span>
                                             </li>

                                             <li>
                                                 <i class="ti-download text-success"></i>
                                                 <span class="tran-text">Advertising </span>
                                                 <span class="pull-right text-success tran-price">+$230 </span>
                                                 <span class="pull-right text-muted">29/08/2015 </span>
                                                 <span class="clearfix"></span>
                                             </li>

                                             <li>
                                                 <i class="ti-upload text-danger"></i>
                                                 <span class="tran-text">Support licence </span>
                                                 <span class="pull-right text-danger tran-price">-$854 </span>
                                                 <span class="pull-right text-muted">27/08/2015 </span>
                                                 <span class="clearfix"></span>
                                             </li>

                                         </ul>
                                     </div>
                                 </div>

                             </div>  <!-- end col -->

                            

                             <!-- Todos app -->
                             <div class="col-lg-12 col-xl-4">
                                 <div class="card-box">
                                     <h4 class="m-t-0 m-b-20 header-title"><b>Todo </b></h4>
                                     <div class="todoapp">
                                         <div class="row">
                                             <div class="col-sm-6">
                                                 <h4 id="todo-message"><span id="todo-remaining"></span> of  <span id="todo-total"></span> remaining </h4>
                                             </div>
                                             <div class="col-sm-6">
                                                 <a href="dashboard_2.html" class="pull-right btn btn-primary btn-sm waves-effect waves-light" id="btn-archive">Archive </a>
                                             </div>
                                         </div>

                                         <ul class="list-group no-margn nicescroll todo-list" style="height: 280px" id="todo-list"></ul>

                                         <form name="todo-form" id="todo-form" role="form" class="m-t-20">
                                             <div class="row">
                                                 <div class="col-sm-9 todo-inputbar">
                                                     <input type="text" id="todo-input-text" name="todo-input-text" class="form-control" placeholder="Add new todo" />
                                                 </div>
                                                 <div class="col-sm-3 todo-send">
                                                     <button class="btn-primary btn-md btn-block btn waves-effect waves-light" type="button" id="todo-btn-submit">Add </button>
                                                 </div>
                                             </div>
                                         </form>
                                     </div>
                                 </div>

                             </div>  <!-- end col -->
                         </div>  <!-- end row -->

                     </div>  <!-- container -->

                 </div>  <!-- content -->

                 <footer class="footer text-right">
                    &copy; 2016 - 2018. ___ rights reserved.
                 </footer>

             </div>


             <!-- ============================================================== -->
             <!-- End Right content here -->
             <!-- ============================================================== -->


            

         </div>
         <!-- END wrapper -->



         <script>
            var resizefunc = [];
        </script>

         <!-- jQuery  -->
         <script src="assets/js/jquery.min.js"></script>
         <script src="assets/js/popper.min.js"></script><!-- Popper for Bootstrap -->
         <script src="assets/js/bootstrap.min.js"></script>
         <script src="assets/js/detect.js"></script>
         <script src="assets/js/fastclick.js"></script>
         <script src="assets/js/jquery.slimscroll.js"></script>
         <script src="assets/js/jquery.blockUI.js"></script>
         <script src="assets/js/waves.js"></script>
         <script src="assets/js/wow.min.js"></script>
         <script src="assets/js/jquery.nicescroll.js"></script>
         <script src="assets/js/jquery.scrollTo.min.js"></script>

         <!-- jQuery  -->
         <script src="../plugins/moment/moment.js"></script>


         <script src="../plugins/morris/morris.min.js"></script>
         <script src="../plugins/raphael/raphael-min.js"></script>

         <script src="../plugins/bootstrap-sweetalert/sweet-alert.min.js"></script>

         <!-- Todojs  -->
         <script src="assets/pages/jquery.todo.js"></script>

         <!-- chatjs  -->
         <script src="assets/pages/jquery.chat.js"></script>

         <script src="../plugins/peity/jquery.peity.min.js"></script>

         <script src="assets/js/jquery.core.js"></script>
         <script src="assets/js/jquery.app.js"></script>

         <script src="assets/pages/jquery.dashboard_2.js"></script>

     </body>
 </html>