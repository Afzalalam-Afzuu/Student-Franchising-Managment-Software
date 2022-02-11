
<?php
    include("../auth_session.php");
    require('../db.php');
?>

<?php

    include '../db1.php';
    $id=$_GET['id'];
    $sql="SELECT *  FROM course where u_no=$id";
    $query = mysqli_query($con, $sql);
    $res = mysqli_fetch_array($query);
                              
?> 

<?php

    include '../db1.php';
    
    if(isset($_POST['uid'])) {
        mysqli_query($con,"UPDATE course set uid='" . $_POST['uid'] . "', slno='" . $_POST['slno'] . "', reg_no='" . $_POST['reg_no'] . "', reg_date='" . $_POST['reg_date'] . "' ,course='" . $_POST['course'] . "', duration='" . $_POST['duration'] . "', center='" . $_POST['center'] . "', center_code='" . $_POST['center_code'] . "', practical='" . $_POST['practical'] . "', written='" . $_POST['written'] . "', assignment='" . $_POST['assignment'] . "', viva='" . $_POST['viva'] . "', percentage='" . $_POST['percentage'] . "', grade='" . $_POST['grade'] . "', issue_date='" . $_POST['issue_date'] . "', status='" . $_POST['status'] . "' WHERE u_no='" . $id . "'");

        header("Location: viewcourse.php?id=$id&mess=true");
    }
    
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
  <!--Fonts and icons -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
  
  <style>
     .fs{ border-color: #e91e63!important; border-radius: 5px; border: 3px solid #e91e63!important; width: 100%; margin:  0 0 25px 0; padding: 10px;}
     
     .fs:hover {
         box-shadow: 0 4px 20px 0 rgb(0 0 0 / 14%), 0 7px 10px -5px rgb(233 30 99 / 40%) !important; 
}
  </style>
  
</head>

<body class="g-sidenav-show  bg-gray-200">
  
    <!-- Side Navbaar -->
      
        <?php include 'Include/side_nav.php'; ?>
        
    <!-- End Side Navbaar -->
    
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
      
    
        <!-- End Navbar -->
    <div class="container-fluid py-4">
      
     <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Update Course</h6>
                <p style=" color: green; font-weight: bold; margin: 15px; padding: 5px;"><?php if(isset($message)) { echo $message; } ?></p>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-3">
                
                <form role="form" class="text-start" method="POST" action="">
                  
                    <div class="row">
                        
                      <div class="col-sm-6 ">
                          <label ><span style="color:red;font-weight: bold;">* </span> COURSE ID</label>
                        <input type="text" name="uid" value="<?php echo $res['uid'];  ?>"readonly class="fs">
                      </div>
                    
                      <div class="col-sm-6 ">
                          <label ><span style="color:red;font-weight: bold;">* </span> SL NO</label>
                        <input type="text" name="slno" value="<?php echo $res['slno'];  ?>"  class="fs">
                      </div>
                      
                      <div class="col-sm-6 ">
                          <label ><span style="color:red;font-weight: bold;">* </span> REGISTRATION NO</label>
                        <input type="text" name="reg_no" value="<?php echo $res['reg_no'];  ?>" class="fs">
                      </div>
                    
                      <div class="col-sm-6 ">
                          <label ><span style="color:red;font-weight: bold;">* </span> REGISTRATION DATE</label>
                        <input type="text" name="reg_date" value="<?php echo $res['reg_date'];  ?>" readonly class="fs">
                      </div>
                      
                      <div class="col-sm-6 ">
                          <label ><span style="color:red;font-weight: bold;">* </span> COURSE Name </label>
                             <select name="course" class="fs" >
                                <option value="<?php echo $res['course'];  ?>" selected ><?php echo $res['course'];  ?></option>
                                <option value="DIPLOMA IN COMPUTER APPLICATION">DIPLOMA IN COMPUTER APPLICATION</option>
                                <option value="ADVANCE DIPLOMA IN COMPUTER APPLICATION">ADVANCE DIPLOMA IN COMPUTER APPLICATION</option>
                                <option value="COMPUTER TEACHER TRAINING COURSE">COMPUTER TEACHER TRAINING COURSE</option>
                                <option value="CCA">CCA</option>
                                <option value="DCA">DCA</option>
                                <option value="CFA">CFA</option>
                                <option value="DDTP">DDTP</option>
                                <option value="ADHN">ADHN</option>
                                <option value="ADFA">ADFA</option>
                                <option value="DCP">DCP</option>
                                <option value="DOA">DOA</option>
                                <option value="DHT">DHT</option>
                                <option value="DHN">DHN</option>
                                <option value="ADIT">ADIT</option>
                                <option value="10">ADCA</option>
                                <option value="ADCA">ADCP</option>
                                <option value="DCTT">DCTT</option>
                                <option value="SEF">SEF</option>
                                <option value="TYPING CERTIFICATE">TYPING CERTIFICATE</option>
                                <option value="DFA">DFA</option>
                                <option value="CTTC">CTTC</option>
                                <option value="19">Photoshop</option>
                                <option value="Photoshop">DCA-T</option>
                                <option value="ADCAP">ADCAP</option>
                                <option value="AUTO CAD">AUTO CAD</option>
                                <option value="ATE 9">ATE 9</option>
                                <option value="ABCD">ABCD</option>
                                <option value="PGDCA">PGDCA</option>
                                <option value="DEO">DEO</option>
                                <option value="DDEO">DDEO</option>
                                <option value="DMM">DMM</option>
                                <option value="BP">BP</option>
                                <option value="HDIT">HDIT</option>
                                <option value="CCEC">CCEC</option>
                                <option value="DEC">DEC</option>
                                <option value="ADEC">ADEC</option>
                                <option value="DC">DC</option>
                                <option value="C++">C++</option>
                                <option value="DCADTP">DCADTP</option>
                                <option value="DDM">DDM</option>
                            </select>   
                      </div>
                    
                      <div class="col-sm-6 ">
                           <label ><span style="color:red;font-weight: bold;">* </span> COURSE DURATION</label>
                        <select name="duration" class="fs">
                            <option value="<?php echo $res['duration'];  ?>" selected> <?php echo $res['duration'];  ?> </option>
                            <option value="3 MONTH">3 MONTH</option>  
                            <option value="6 MONTH">6 MONTH</option>
                            <option value="9 MONTH">9 MONTH</option>
                            <option value="12 MONTH">12 MONTH</option>
                            <option value="18 MONTH">18 MONTH</option>
                            <option value="24 MONTH">24 MONTH</option>
                          </select>
                      </div>
                      
                      <div class="col-sm-6 ">
                          <label ><span style="color:red;font-weight: bold;">* </span> CENTER </label>
                        <input type="text" name="center" value="<?php echo $res['center'];  ?>" readonly class="fs">
                      </div>
                    
                      <div class="col-sm-6 ">
                          <label ><span style="color:red;font-weight: bold;">* </span> CENTER CODE</label>
                        <input type="text" name="center_code" value="<?php echo $res['center_code'];  ?>" readonly class="fs">
                      </div>
                      
                      <div class="col-sm-6 ">
                          <label ><span style="color:red;font-weight: bold;">* </span> PRACTICAL </label>
                        <input type="text" name="practical" value="<?php echo $res['practical'];  ?>" class="fs">
                      </div>
                      
                      <div class="col-sm-6 ">
                          <label ><span style="color:red;font-weight: bold;">* </span> COURSE WRITTEN</label>
                        <input type="text" name="written" value="<?php echo $res['written'];  ?>" class="fs">
                      </div>
                      
                      <div class="col-sm-6 ">
                          <label ><span style="color:red;font-weight: bold;">* </span> COURSE ASSIGNMENT </label>
                        <input type="text" name="assignment" value="<?php echo $res['assignment'];  ?>" class="fs">
                      </div>
                      
                      <div class="col-sm-6 ">
                          <label ><span style="color:red;font-weight: bold;">* </span> COURSE VIVA</label>
                        <input type="text" name="viva" value="<?php echo $res['viva'];  ?>" class="fs">
                      </div>
                      
                      <div class="col-sm-6 ">
                          <label ><span style="color:red;font-weight: bold;">* </span> COURSE PERCENTAGE</label>
                        <input type="text" name="percentage" value="<?php echo $res['percentage'];  ?>" class="fs">
                      </div>
                      
                      <div class="col-sm-6 ">
                           <label ><span style="color:red;font-weight: bold;">* </span> COURSE GRADE</label>
                        <select name="grade" class="fs">
                            <option value="<?php echo $res['grade']; ?>" selected> <?php echo $res['grade'];  ?> </option>
                            <option value="GOOD">GOOD</option>  
                            <option value="VERY GOOD">VERY GOOD</option>
                          </select>
                      </div>
                      
                      <div class="col-sm-6 ">
                          <label ><span style="color:red;font-weight: bold;">* </span> COURSE ISSUE DATE </label>
                        <input type="date" name="issue_date" value="<?php echo $res['issue_date'];  ?>" class="fs"> 
                      </div>
                      
                      <div class="col-sm-6 ">
                           <label ><span style="color:red;font-weight: bold;">* </span> Status</label>
                        <select name="status" class="fs">
                            <option value="<?php echo $res['status'];  ?>" selected> <?php echo $res['status'];  ?> </option>
                            <option value="ACTIVE">ACTIVE</option>  
                            <option value="INACTIVE">INACTIVE</option>
                            <option value="PENDING">PENDING</option>  
                            <option value="COMPLETED">COMPLETED</option>
                          </select>
                      </div>
                      
                    </div>
                    
                    <button type="submit" value="Login" name="submit" class="btn bg-gradient-primary align-items-center w-50 my-4 mb-2">Update</button>
                    
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
      <footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                Powered by
                <a href="https://www.microcen.com" class="font-weight-bold" target="_blank">Microcen</a>
                
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="javascript:void(0)" class="nav-link text-muted" >Home</a>
                </li>
                <li class="nav-item">
                  <a href="javascript:void(0)" class="nav-link text-muted" >About Us</a>
                </li>
                <li class="nav-item">
                  <a href="javascript:void(0)" class="nav-link text-muted" >Blog</a>
                </li>
                
              </ul>
            </div>
          </div>
        </div>
      </footer>    
    <!-- End Footer -->
    
    </div>
  </main>
      
    <!-- Settings -->
    
      <div class="fixed-plugin"> 
 <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0"> UI Configurator</h5>
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
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn btn-outline-dark w-100" href="https://www.microcen.com/">© 2022, Powered by Microcen</a>
        <div class="w-100 text-center">
          <a class="github-button" href="javascript:void(0)" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="javascript:void(0)" class="btn btn-dark mb-0 me-2" >
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="javascript:void(0)" class="btn btn-dark mb-0 me-2" >
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>    
    <!-- End Settings -->
    
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script>
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["M", "T", "W", "T", "F", "S", "S"],
        datasets: [{
          label: "Sales",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "rgba(255, 255, 255, .8)",
          data: [50, 20, 10, 22, 50, 10, 40],
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
              color: "#fff"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });

    var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

    new Chart(ctx3, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#f8f9fa',
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
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

</html>