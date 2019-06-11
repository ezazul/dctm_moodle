<!DOCTYPE html>
 <html>
     <head>
<!-- Original URL: http://coderthemes.com/ubold/light/page-login.html
Date Downloaded: 5/22/2018 4:58:06 PM !-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
         <meta charset="utf-8" />
         <meta name="viewport" content="width=device-width, initial-scale=1.0" />
         <meta name="description" content=" " />

         <link rel="shortcut icon" href="assets/images/favicon.ico" />

         <title> </title>

         <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
         <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
         <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
         <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

         <script src="assets/js/modernizr.min.js"></script>
        
     </head>
     <body>

         <div class="account-pages"></div>
         <div class="clearfix"></div>
         <div class="wrapper-page">
             <div class="card-box">
                 <div class="panel-heading">
                     <h4 class="text-center"> Sign In to  <strong class="text-custom">DCTM </strong></h4>
                 </div>


                 <div class="p-20">
                     	 <form class="form-horizontal m-t-20" action="index.php" method="POST">

                         <div class="form-group ">
                             <div class="col-12">
                                 <input class="form-control" name="email" type="text" required="" placeholder="Username" />
                             </div>
                         </div>

                         <div class="form-group">
                             <div class="col-12">
                                 <input class="form-control" name="password" type="password" required="" placeholder="Password" />
                             </div>
                         </div>
						 <div class="form-group">
                             <div class="col-12">
                                 <select class="form-control" name="type" required="">
									<option value="0">Role</option>
									<option value="admin">Admin</option>
									<option value="faculty">Faculty</option>
									
								 </select>
                             </div>
                         </div>
						
                         <div class="form-group ">
                             <div class="col-12">
                                 <div class="checkbox checkbox-primary">
                                     <input id="checkbox-signup" type="checkbox" />
                                     <label for="checkbox-signup">
                                        Remember me
                                     </label>
                                 </div>

                             </div>
                         </div>
						 <div class="form-group " style="text-align: center; color: red">
                             <?php
								echo $error_msg;
							 ?>
                         </div>
                         <div class="form-group text-center m-t-40">
                             <div class="col-12">
                                 <button class="btn btn-pink btn-block text-uppercase waves-effect waves-light" type="submit" name="login_btn">Log In
                                 </button>
                             </div>
                         </div>

                         <div class="form-group m-t-30 m-b-0">
                             <div class="col-12">
                                 <a href="#" class="text-dark"><i class="fa fa-lock m-r-5"></i> Forgot your password? </a>
                             </div>
                         </div>
                     </form>
                 </div>
             </div>
             <div class="row">
                 <div class="col-sm-12 text-center">
                     <p>Don't have an account?  <a href="#" class="text-primary m-l-5"><b>Sign Up </b></a>
                     </p>

                 </div>
             </div>
            
         </div>
        
        

        
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

         <script src="assets/js/jquery.core.js"></script>
         <script src="assets/js/jquery.app.js"></script>
	
	 </body>
 </html>
