<?php
    include("../auth_session.php");
    require('../db.php');
?>

<?php

    include '../db1.php';
    $id=$_GET['id'];
    $sql="SELECT *  FROM stud where u_no=$id";
    $query = mysqli_query($con, $sql);
    $row1 = mysqli_fetch_array($query);
     
                              
    $id1= $row1['uid'];
    $sql1="SELECT *  FROM course where uid='$id1'";
    $query1 = mysqli_query($con, $sql1);
    $row = mysqli_fetch_array($query1);

                              
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
  
                          .im{ height:1056px; width:815px; }
                          .im1{ margin-top:147px; position:absolute; width:700px;margin-left:50px;font-family:Arial; font-size:11pt; font-weight:lighter; }
                          .im2{ padding:0px;padding-left:240px; }
                          .im3{ height:182px; font-size:10pt; vertical-align:top; padding-top:40px; padding-left:30px; }
                          .im4{ font-size:12pt; }
                          .im5{ padding-left:240px; }
                          .im6{ padding-left:240px;color:#000;height:33px; }
                          .im7{ padding-right:60px; text-align:right; }
                          .im8{ text-align:right; }
                          .im9{ height:110px; }
                          .im10{ padding-left:21px; }
      
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
                   echo '<img src="data:image/jpeg;base64,'.base64_encode($row1['photo']).'" class="w-100 border-radius-lg shadow-sm"/>';
                ?>
              
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                <?php echo $row1['name'];  ?>
              </h5>
              <p class="mb-0 font-weight-normal text-sm">
                STUDENT CODE : <?php echo $row1['uid'];  ?>
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
                      <h6 class="mb-0"><?php echo $row1['name'];  ?> This is Your ID Card</h6>
                    </div>
                    <div class="col-md-4 text-end">
                      <!--<a href='onclick="myApp.printTable()"'>
                        <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" aria-hidden="true" data-bs-original-title="Update" aria-label="Update" style="background-color: #efefef; padding: 10px; border-radius: 5px;"></i>
                        <span class="sr-only">Update</span>
                      </a>-->
                      <p>
                        <input type="button" value="Print Sertificate" onclick="myApp.printTable()" />
                      </p>
                      <!--<a href="javascript:void(0)">
                        <i class="fas fa-trash-alt text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" aria-hidden="true" data-bs-original-title="Deleat" aria-label="Deleat" style="background-color: #efefef; padding: 10px; border-radius: 5px;"></i>
                        <span class="sr-only">Deleat</span>
                      </a>-->
                    </div>
                  </div>
                </div>
                <div class="card-body p-3 ">
                                     
                    <div id="tab" class="im" style="background-color: #fdfdfd; border: 1px solid; border-radius: 10px;">
                    <!--<img src='../assets/certificate/p_marksheet.jpg' style='width:815px; height:1056px; position:absolute;' />-->
                    <table cellpadding='0px' cellspacing='0px' class="im1" >
                    
                        <tr><td class="im2" colspan='2'><?php echo $row['reg_no']; ?></td> <td style='padding:0px;'></td><td style='padding:0px;'><?php echo $row['slno']; ?></td></tr>
                        <tr><td class="im2" colspan='4'><?php echo $row1['name']; ?></td></tr>
                        <tr><td class="im2" colspan='4'><?php echo $row1['fname']; ?></td></tr>
                        <tr><td class="im2" colspan='4'><?php echo $row1['mname']; ?></td></tr>
                    
                        <tr><td class="im2" colspan='4'><?php echo $row['course']; ?></td></tr>
                        <tr><td class="im2" colspan='4'><?php echo $row['duration']; ?></td></tr>
                        <tr><td class="im2" colspan='4'><?php echo $row['center']; ?></td></tr>
                        <tr><td class="im2" colspan='4'><?php echo $row['center_code']; ?></td></tr>
                    
                    <tr><td colspan='4' class="im3" >
                    <?php if($row['course']=='ADVANCE DIPLOMA IN COMPUTER APPLICATION'){
                    echo "<span class='im4' ><b>DCA :</b></span> Fundamental, MS-DOS, MS-Windows 98/XP, MS-Word, MS-Excel, MS-PowerPoint, FoxPro, MS-Access, Internet, Networking, Multimedia, Html, System Maintenance.<br />
                    <span class='im4' ><b>CFA :</b></span> Introduction to Financial Accounting, Accounts Only (On Tally Account Software), Accounts with Inventory(On Tally Account Software), Project<br />
                    <span class='im4' ><b>DTP :</b></span> Adobe PageMaker, Corel Draw, Photo Shop, Project, Scanning, Printing";
                    }
                    if($row['course']=='DIPLOMA IN COMPUTER APPLICATION'){
                    echo "<span class='im4' ><b>DCA :</b></span> Fundamental, MS-DOS, MS-Windows 98/XP, MS-Word, MS-Excel, MS-PowerPoint, FoxPro, MS-Access, Internet, Networking, Multimedia, Html, System Maintenance.";
                    }
                    if($row['course']=='CERTIFICATE IN FINANCIAL ACCOUNTING'){
                    echo "<span class='im4' ><b>CFA :</b></span> Introduction to Financial Accounting, Accounts Only (On Tally Account Software), Accounts with Inventory(On Tally Account Software), Project";
                    }
                    if($row['course']=='DIPLOMA IN OFFICE AUTOMATION'){
                    echo "<span class='im4' ><b>DCA :</b></span> Fundamental, MS-DOS, MS-Windows 98/XP, MS-Word, MS-Excel, MS-PowerPoint, FoxPro, MS-Access, Internet, Networking, Multimedia, Html, System Maintenance.<br />
                    <span class='im4'><b>CFA :</b></span> Introduction to Financial Accounting, Accounts Only (On Tally Account Software), Accounts with Inventory(On Tally Account Software), Project";
                    }
                    if($row['course']=='DESKTOP PUBLISHING'){
                    echo "<span class='im4' ><b>DTP :</b></span> Adobe PageMaker, Corel Draw, Photo Shop, Project, Scanning, Printing";
                    } ?>
                    
                    
                    <tr><td class='im5' ><?php echo $row['written']; ?></td></tr> 
                    <tr><td class='im5' ><?php echo $row['practical']; ?></td></tr>
                    <tr><td class='im5' ><?php echo $row['assignment']; ?></td></tr>
                    <tr><td class='im5' ><?php echo $row['viva']; ?></td></tr>
                    
                    <tr><td></td><td class='im6' ><?php echo ($row['written']+$row['practical']+$row['assignment']+$row['viva']); ?></td></tr>
                    
                    <tr><td class='im7' ><?php echo $row['percentage']; ?>%</td>
                    
                    <td class='im8' ><?php echo $row['grade']; ?></td></tr>
                    
                    <tr><td colspan='2' class='im9' ></td></tr>
                    
                    <tr><td colspan='2' class='im10' ><?php echo $row['issue_date']; ?></td></tr>
                    
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
                style = style + ".im{ height:1056px; width:815px; } .im1{ margin-top:147px; position:absolute; width:700px;margin-left:50px;font-family:Arial; font-size:11pt; font-weight:lighter; } ";
                style = style + ".im2{ padding:0px;padding-left:240px; } .im3{ height:182px; font-size:10pt; vertical-align:top; padding-top:40px; padding-left:30px; } .im4{ font-size:12pt; } ";
                style = style + ".im5{ padding-left:240px; } .im6{ padding-left:240px;color:#000;height:33px; } .im7{ padding-right:60px; text-align:right; } ";
                style = style + ".im8{ text-align:right; } .im9{ height:110px; } .im10{ padding-left:21px; } ";
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