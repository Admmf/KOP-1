<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="../Login/Mesiniaga_logo.jpg" class="user-image img-responsive"/></a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">&nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                   
					</li>
				
					
                    <li>
                        <a  href="index.html"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                      <li>
                        <a  href="ui.html"><i class="fa fa-desktop fa-3x"></i> UI Elements</a>
                    </li>
                    <li>
                        <a  href="tab-panel.html"><i class="fa fa-qrcode fa-3x"></i> Tabs & Panels</a>
                    </li>
						   <li  >
                        <a  href="chart.html"><i class="fa fa-bar-chart-o fa-3x"></i> Morris Charts</a>
                    </li>	
                      <li  >
                        <a  href="table.html"><i class="fa fa-table fa-3x"></i> Table Examples</a>
                    </li>
                    <li  >
                        <a  href="form.html"><i class="fa fa-edit fa-3x"></i> Forms </a>
                    </li>				
					
					                   
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>
                               
                            </li>
                        </ul>
                      </li>  
                  <li  >
                        <a href="blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
                    </li>	
                    <li  >
                        <a  href="AddNewAccount.html"><i class="fa fa-square-o fa-3x"></i>New Account  Page</a>
                    </li>
                    <li  >
                        <a href="blank2.html"><i class="fa fa-square-o fa-3x"></i> Blank2 Page</a>
                    </li>	
                    <li  >
                        <a  class="active-menu" href="blank3.html"><i class="fa fa-square-o fa-3x"></i> Blank3 Page</a>
                    </li>	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->            
                     <div id="page-wrapper" >
                        <div id="page-inner">
                            <div class="row">
                                <div class="col-md-12">
                                 <h2>Create new promise</h2>   
                                   
                                </div>
                            </div>
                             <!-- /. ROW  -->
                             <hr />
                           <div class="row">
                            <div class="col-md-12">
                                <!-- Form Elements -->

                                <form method="post" action="AddPromise.php">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        
                                    </div>
                                   
                                    <div>
                                        
                                        <div class="form-group">
                                            <label>*Promise Owner</label>
                                            <input class="form-control" placeholder="Please Enter Name" name="PromiseOwner" />
                                        </div>

                                        <?php
                                            // Database connection details
                                            include('../dbconn/dbconn.php');

                                            // Fetch account names from the database
                                            $sql = "SELECT AccountName FROM account";
                                            $result = $dbconn->query($sql);

                                            // Check if there are any rows returned
                                            if ($result->num_rows > 0) {
                                                echo '<div class="form-group">
                                                        <label>*Account Name</label>
                                                        <select class="form-control" name="Account">
                                                            <option>-Please Select-</option>';

                                                // Output data of each row
                                                while ($row = $result->fetch_assoc()) {
                                                    echo '<option>' . $row["AccountName"] . '</option>';
                                                }

                                                echo '</select></div>';
                                            } else {
                                                echo "No accounts found in the database.";
                                            }

                                            // Close connection
                                            $dbconn->close();
                                            ?>

                                            <div class="form-group">
                                                <label>*Promise Made to</label>
                                                <input class="form-control" name="madeTo" />
                                            </div>

                                            <div class="form-group">
                                                <label>*Designation Level</label>
                                                <select class="form-control" name="Designation-level">
                                                    <option>-Please Select-</option>
                                                    <option>1111</option>
                                                    <option>2222</option>
                                                    <option>3333</option>
                                                    <option>//connect with database to add option</option>
                                                </select>
                                            </div> 
                                            <div class="form-group">
                                                <label>*Category of Promise</label>
                                                <select class="form-control" name="Category">
                                                    <option>-Please Select-</option>
                                                    <option>Contractual Promise</option>
                                                    <option>Non-Contractual Promise</option>
                                                    
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Promise Description</label>
                                                <textarea class="form-control" rows="3" name="Description"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>*Due Date</label>
                                                <input type="date" class="form-control" name="duedate" />
                                            </div>
                                            <div class="form-group">
                                            <label>*MSB Action by</label>
                                            <select class="form-control" name="actionBy">
                                                <option>-Please Select-</option>
                                                <option>Azrai</option>
                                                <option>Adam</option>
                                                <option>Ocad</option>
                                                <option>//connect with database to add option</option>
                                            </select>
                                            </div>
                                            <div class="form-group">
                                                <label>*Status</label>
                                                <select class="form-control" name="status">
                                                    <option>-Please Select-</option>
                                                    <option>In Progress</option>
                                                    <option>Pending</option>
                                                    <option>Complete</option>
                                                    
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Remark</label>
                                                <textarea class="form-control" rows="3" name="Remark"></textarea>
                                            </div>
                                       
                                </div>
                                
                                 <!-- End Form Elements -->
                            </div>
                            
                        </div>
                        <a href="#" class="btn btn-danger btn-sm">Cancel</a>
                        <button type="submit" class="btn btn-success btn-sm">Save</button>
                        </form>
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>