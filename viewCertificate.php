<?php
    include("../auth_session.php");
    require('../db.php');
?>

<?php

    include '../db1.php';
    $id=$_GET['id'];
    $sql="SELECT *  FROM stud where u_no=$id";
    $query = mysqli_query($con, $sql);
    $res = mysqli_fetch_array($query);
                              
?>


<?php
    
    include '../db1.php';    
    $uid= $res['uid'];
    $sql1="SELECT *  FROM course where uid='$uid'";
    $query1 = mysqli_query($con, $sql1);
    $res1 = mysqli_fetch_array($query1);
                    
?>


            
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Ashoka India
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
  
  <style>
      .im{ width:988px; height:815px; position:absolute; }
      .im1{ margin-top:225px; color:#000; position:absolute; width:1010px; font-size:14pt; margin-left:50px; font-family:Arial; font-weight:lighter; }
      .im2{ font-size:10pt; padding:0px; padding-left:315px; }
      .im3{ padding:6px; height:19px; }
      .im4{ padding:6px;padding-left:180px; }
      .im5{ padding:6px;padding-left:180px; }
      .im6{ padding:3px;padding-left:110px; }
      .im7{ color:#000; margin:0px 5px; padding-left:210px; }
      .im8{ color:#000; margin:0px 5px; padding-left:210px; }
  </style>
  
</head>

<body class="g-sidenav-show bg-gray-200">
    
    <!-- Side Navbaar -->
      
         <?php include 'Include/side_nav.php'; ?>
      
    <!-- End Side Navbaar -->
    
  <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
      
    <!-- Navbar -->
    
         <?php #include 'Include/header.php'; ?>
    
    <!-- End Navbar -->
    
    <div class="container-fluid px-2 px-md-4">
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
        <!-- <span class="mask  bg-gradient-primary  opacity-6"></span> -->
        <span></span>
      </div>
      <div class="card card-body mx-3 mx-md-4 mt-n6">
        <div class="row gx-4 mb-2">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
                <?php 
                   echo '<img src="data:image/jpeg;base64,'.base64_encode($res['photo']).'" class="w-100 border-radius-lg shadow-sm"/>';
                ?>
              
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                <?php echo $res['name'];  ?>
              </h5>
              <p class="mb-0 font-weight-normal text-sm">
                STUDENT CODE : <?php echo $res['uid'];  ?>
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
              <ul class="nav nav-pills nav-fill p-1" role="tablist">
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 active " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                    <i class="material-icons text-lg position-relative">home</i>
                    <span class="ms-1">App</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                    <i class="material-icons text-lg position-relative">email</i>
                    <span class="ms-1">Messages</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                    <i class="material-icons text-lg position-relative">settings</i>
                    <span class="ms-1">Settings</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="row">
            <div class="col-12 col-xl-12">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                      <h6 class="mb-0"><?php echo $res['name'];  ?> This is Your Certificate</h6>
                    </div>
                    <div class="col-md-4 text-end">
                      <!--<a href='onclick="myApp.printTable()"'>
                        <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" aria-hidden="true" data-bs-original-title="Update" aria-label="Update" style="background-color: #efefef; padding: 10px; border-radius: 5px;"></i>
                        <span class="sr-only">Update</span>
                      </a>-->
                      <p>
                        <input type="button" value="Print Certificate" onclick="myApp.printTable()" />
                      </p>
                      <!--<a href="javascript:void(0)">
                        <i class="fas fa-trash-alt text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" aria-hidden="true" data-bs-original-title="Deleat" aria-label="Deleat" style="background-color: #efefef; padding: 10px; border-radius: 5px;"></i>
                        <span class="sr-only">Deleat</span>
                      </a>-->
                    </div>
                  </div>
                </div>
                <div class="card-body p-3 ">
                    
                    
                    
                    
                    
                    
                    <div id="tab" style='width:988px; height:815px; background-color: #fdfdfd; border: 1px solid; border-radius: 10px; '>
                        <!--<img src='../assets/certificate/p_cert.jpg' class="im"  />-->
                    
                        <table cellpadding='0px' cellspacing='0px' class="im1"  '>
                            <tr>
                                <td style='width:380px;padding:4px;'></td> 
                                <td style='width:560px;'></td>
                            </tr>
                                    
                            <tr>
                                <td></td>
                                <td class="im2" ><?php echo $res1['slno'];  ?></td>
                            </tr>
                    
                            <tr>
                                <td colspan='2' class="im3" ></td>
                            </tr>
                    
                            <tr>
                                <td colspan='2' class="im4" > <?php echo $res['name'];  ?></td>
                            </tr>
                    
                            <tr>
                                <td colspan='2' class="im4" ><?php echo $res['fname'];  ?></td>
                            </tr>
                    
                            <tr>
                                <td colspan='2' class="im4" ><?php echo $res['mname'];  ?></td>
                            </tr>
                    
                            <tr>
                                <td colspan='2' class="im4" ><?php echo $res1['reg_no'];  ?></td>
                            </tr>
                            
                            <tr> <td colspan='2' class="im4" ></td> </tr>
                            <tr> <td colspan='2' class="im4" ></td> </tr>
                            <tr> <td colspan='2' class="im4" ></td> </tr>
                            <tr> <td colspan='2' class="im4" ></td> </tr>
                            <tr> <td colspan='2' class="im4" ></td> </tr>
                            <tr> <td colspan='2' class="im4" ></td> </tr>
                            <tr> <td colspan='2' class="im4" ></td> </tr>
                    
                            <tr>
                                <td colspan='2' class="im5" ><?php echo $res1['course'];  ?></td>
                            </tr>
                    
                            <tr>
                                <td colspan='2' class="im6" ><?php echo $res1['duration']; ?> 
                                <span class="im7" ><?php echo $res1['percentage'];  ?>%</span>
                                <span class="im8" ><?php echo $res1['grade'];  ?> </span> grade* 
                                </td>
                            </tr>
                            
                            <tr>
                                <td colspan='2' class="im6" ><?php echo $res1['center'];  ?></td>
                            </tr>
                    
                            <tr>
                                <td colspan='2' class="im4" ><?php echo $res1['center_code'];  ?></td>
                            </tr>
                    
                            <tr>
                                <td colspan='2' class="im4" >&nbsp;</td>
                            </tr>
                            
                            
                            <tr>
                                <td colspan='2' style='padding:6px;padding-left:90px;'><?php echo $res1['issue_date'];  ?></td></tr>
                                <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($res['photo']).'" style="height:150px;width:140px; border:solid 1px #000; position:absolute; top:350px;left:790px;"/>'; ?>
                        </table>
                    </div> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Footer -->
    
      <?php include 'Include/footer.php' ?>
    
    <!-- End Footer -->
    
  </div>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Material UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn btn-outline-dark w-100" href="">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>

<script>
    var myApp = new function () {
        this.printTable = function () {
            var tab = document.getElementById('tab');

            var style = "<style>";
                style = style + ".im{ width:988px; height:815px; position:absolute; } .im1{ margin-top:225px; color:#000; position:absolute; width:1010px; font-size:14pt; margin-left:50px; font-family:Arial; font-weight:lighter; } .im2{ font-size:10pt; padding:0px; padding-left:315px; } ";
                style = style + ".im3{ padding:6px; height:19px; } .im4{ padding:6px;padding-left:180px; } .im5{ padding:6px;padding-left:190px; } ";
                style = style + " .im6{ padding:3px;padding-left:120px; } .im7{ color:#000; margin:0px 5px; padding-left:210px; } ";
                style = style + " .im8{ color:#000; margin:0px 5px; padding-left:210px; } ";
                style = style + "</style>";
                
                
      

            var win = window.open('', '', 'height=700,width=700');  
            win.document.write(style);          //  add the style.
            win.document.write(tab.outerHTML);
            win.document.close();
            win.print();
        }
    }
</script>

</html>         