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
        
        if(isset($_POST['uid'])) {
            mysqli_query($con,"UPDATE stud set uid='" . $_POST['uid'] . "', logid='" . $_POST['logid'] . "', logpwd='" . $_POST['logpwd'] . "', name='" . $_POST['name'] . "' ,fname='" . $_POST['fname'] . "', mname='" . $_POST['mname'] . "', cell='" . $_POST['cell'] . "', mail='" . $_POST['mail'] . "', dob='" . $_POST['dob'] . "', gender='" . $_POST['gender'] . "', qual='" . $_POST['qual'] . "', address='" . $_POST['address'] . "', city='" . $_POST['city'] . "', sub_district='" . $_POST['sub_district'] . "', district='" . $_POST['district'] . "', state='" . $_POST['state'] . "', country='" . $_POST['country'] . "', postal_code='" . $_POST['postal_code'] . "', user_type='" . $_POST['user_type'] . "', owner_id='" . $_POST['owner_id'] . "', status='" . $_POST['status'] . "' WHERE u_no='" . $id . "'");
    
            header("Location: viewstudent.php?id=$id&mess=true");
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
     .fs{ border-color: #e91e63!important; border-radius: 5px; border: 3px solid #e91e63!important; width: 100%; margin:  10px 0 10px 0; padding: 10px;}
     
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
                <h6 class="text-white text-capitalize ps-3">Update Student</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-3">
                
                <form role="form" class="text-start" method="POST" action="">
                  
                    <div class="row">
                        
                      <div class="col-sm-6 ">
                          <label ><span style="color:red;font-weight: bold;">* </span> STUDENT USER Id</label>
                        <input type="text" name="uid" value="<?php echo $res['uid'];  ?>"readonly class="fs">
                      </div>
                    
                      <div class="col-sm-6 ">
                          <label ><span style="color:red;font-weight: bold;">* </span> STUDENT Id </label>
                        <input type="text" name="logid" value="<?php echo $res['logid'];  ?> " class="fs">
                      </div>
                      
                      <div class="col-sm-6 ">
                          <label ><span style="color:red;font-weight: bold;">* </span> STUDENT PASSWORD</label>
                        <input type="text" name="logpwd" value="<?php echo $res['logpwd'];  ?> " class="fs">
                      </div>
                    
                      <div class="col-sm-6 ">
                          <label ><span style="color:red;font-weight: bold;">* </span> STUDENT Name</label>
                        <input type="text" name="name" value="<?php echo $res['name'];  ?>" class="fs">
                      </div>
                      
                      <div class="col-sm-6 ">
                          <label ><span style="color:red;font-weight: bold;">* </span> STUDENT Father Name</label>
                        <input type="text" name="fname" value="<?php echo $res['fname'];  ?>" class="fs">
                      </div>
                    
                      <div class="col-sm-6 ">
                          <label ><span style="color:red;font-weight: bold;">* </span> STUDENT Mather Name</label>
                        <input type="text" name="mname" value="<?php echo $res['mname'];  ?>" class="fs">
                      </div>
                      
                      <div class="col-sm-6 ">
                          <label ><span style="color:red;font-weight: bold;">* </span> STUDENT Call</label>
                        <input type="number" name="cell" value="<?php echo $res['cell'];  ?>" class="fs">
                      </div>
                    
                      <div class="col-sm-6 ">
                          <label ><span style="color:red;font-weight: bold;">* </span> STUDENT Mail</label>
                        <input type="mail" name="mail" value="<?php echo $res['mail'];  ?>" class="fs">
                      </div>
                      
                      <div class="col-sm-6 ">
                          <label ><span style="color:red;font-weight: bold;">* </span> STUDENT DOB</label>
                        <input type="Date" name="dob" value="<?php echo $res['dob'];  ?>"readonly class="fs">
                      </div>
                    
                      <div class="col-sm-6 ">
                          <label ><span style="color:red;font-weight: bold;">* </span> STUDENT Gender</label>
                        <select name="gender" class="fs">
                            <option value="<?php echo $res['gender'];  ?>"readonly><?php echo $res['gender'];  ?></option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="unspesified">Unspecified</option>
                          </select>
                      </div>
                      
                      <div class="col-sm-6 ">
                          <label ><span style="color:red;font-weight: bold;">* </span> STUDENT Qualification </label>
                        <input type="text" name="qual" value="<?php echo $res['qual'];  ?>" class="fs">
                      </div>
                      
                      <div class="col-sm-6 ">
                          <label ><span style="color:red;font-weight: bold;">* </span> STUDENT Address</label>
                        <input type="text" name="address" value="<?php echo $res['address'];  ?>" class="fs">
                      </div>
                      
                      <div class="col-sm-6 ">
                          <label ><span style="color:red;font-weight: bold;">* </span> STUDENT City</label>
                        <input type="text" name="city" value="<?php echo $res['city'];  ?>" class="fs">
                      </div>
                      
                      <div class="col-sm-6 ">
                          <label ><span style="color:red;font-weight: bold;">* </span> STUDENT Sub District </label>
                        <input type="text" name="sub_district" value="<?php echo $res['sub_district'];  ?>" class="fs">
                      </div>
                      
                      <div class="col-sm-6 ">
                          <label ><span style="color:red;font-weight: bold;">* </span> STUDENT District</label>
                        <input type="text" name="district" value="<?php echo $res['district'];  ?>" class="fs">
                      </div>
                      
                      <div class="col-sm-6 ">
                          <label ><span style="color:red;font-weight: bold;">* </span> STUDENT State</label>
                                <select name="state" class="fs" >
                                    <option value="<?php echo $res['state']; ?>"><?php echo $res['state'];  ?></option>
                                     <?php
                                        include '../db1.php';
                                        $result = "SELECT * FROM place WHERE data_type='STATE'";
                                        $query = mysqli_query($con, $result);
                                        while($row = mysqli_fetch_array($query)) {
                                     ?>
                                        <option value="<?php echo $row['state'];?>"><?php echo $row["state"];?></option>
                                     <?php
                                        }
                                     ?>
                                </select>
                      </div>
                      
                      <div class="col-sm-6 ">
                          <label ><span style="color:red;font-weight: bold;">* </span> STUDENT Country</label>
                        <input type="text" name="country" value="<?php echo $res['country'];  ?>" class="fs">
                      </div>
                      
                      <div class="col-sm-6 ">
                          <label ><span style="color:red;font-weight: bold;">* </span> STUDENT Postal Code</label>
                        <input type="text" name="postal_code" value="<?php echo $res['postal_code'];  ?>"readonly class="fs">
                      </div>
                      
                      <div class="col-sm-6 ">
                          <label ><span style="color:red;font-weight: bold;">* </span> STUDENT User Type</label>
                        <input type="text" name="user_type" value="<?php echo $res['user_type'];  ?>" class="fs">
                      </div>
                      
                      <div class="col-sm-6 ">
                          <label ><span style="color:red;font-weight: bold;">* </span> STUDENT Owner ID</label>
                        <input type="text" name="owner_id" value="<?php echo $res['owner_id'];  ?>"readonly class="fs">
                      </div>
                      
                      <div class="col-sm-6 ">
                          <label ><span style="color:red;font-weight: bold;">* </span> STUDENT Status</label>
                        <select name="status" class="fs">
                            <option value="<?php echo $res['status'];  ?>"> <?php echo $res['status'];  ?> </option>
                            <option value="ACTIVE">ACTIVE</option>
                            <option value="INACTIVE">ENABLE</option>
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