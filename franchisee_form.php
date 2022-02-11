<?php
    include("../auth_session.php");
    require('../db.php');

    $insert=$_GET['id'];

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
    
     .fs{ border-color: #e91e63!important; border-radius: 5px; border: 3px solid #e91e63!important; width: 100%; margin: 0 0 25px 0; padding: 10px; }
     
     .fs:hover { box-shadow: 0 4px 20px 0 rgb(0 0 0 / 14%), 0 7px 10px -5px rgb(233 30 99 / 40%) !important; }
         
    </style>
  
</head>
 
<body class="g-sidenav-show  bg-gray-200">  
  
    <!-- Side Navbaar -->
      
         <?php include 'Include/side_nav.php'; ?>
      
    <!-- End Side Navbaar -->
    
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
      
    <!-- Navbar -->
    
         <?php include 'Include/header.php'; ?>
    
    <!-- End Navbar -->
    
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Today's Money</p>
                <h4 class="mb-0">53k</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than lask week</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>
              </div>
                <?php
                    
                    include '../db1.php';
                              
                    $sql="SELECT slno FROM franchisee ORDER BY slno DESC LIMIT 1";
                              
                    $query = mysqli_query($con, $sql);
                              
                    $res = mysqli_fetch_array($query);
                    
                ?>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Today's Franchisee</p>
                <h4 class="mb-0"> <?php echo $res['slno'];  ?> </h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than lask month</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">New Clients</p>
                <h4 class="mb-0">3,462</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-danger text-sm font-weight-bolder">-2%</span> than yesterday</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Sales</p>
                <h4 class="mb-0">103,430</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+5% </span>than yesterday</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-md-12 mb-lg-0 mb-4">
              <div class="card mt-4">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-6 d-flex align-items-center">
                      <h6 class="mb-0">FRANCHISEE </h6>
                    </div>
                    <div class="col-6 text-end">
                      <a class="btn bg-gradient-dark mb-0" href="add_franchisee.php"><i class="material-icons text-sm">add</i>&nbsp;&nbsp;Add New Franchisee</a>
                    </div>
                  </div>
                </div>
                <div class="card-body p-2 text-center">
                    <?php
                        if($insert == 1){
                        echo "<h5 style='color: red; font-weight: bold; margin-top: 5px; '>Add new Users successfully. </h5>";
                        }
                    ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <!--<h6 class="text-white text-capitalize ps-3">FRANCHISEE </h6>-->
                <div class="row px-2">
                        <div class="col-8">
                                <h6 class="text-white text-capitalize ps-3">FRANCHISEE </h6>
                        </div>
                        <!--<div class="col-4">
                                <input type="text" class="rounded float-end" id="myInput" onkeyup="myFunction()" placeholder="Enter Center Name" title="Type in a name" >                  
                        </div>-->
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table id="myTable" class="table align-items-center mb-0">
                  <thead>
                    <!-- <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">S.No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Center Code</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Center Name</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Center Address</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr> -->
                    
                    <tr>
                      <th>S.No</th>
                      <th>Center Code</th>
                      <th>Center Name</th>
                      <th>Center Address</th>
                      <th>Options</th>
                    </tr>
                  </thead>
                  <tbody>
                      
                      <?php
                          include '../db1.php';
                              $sql="SELECT slno,f_code,f_center,f_address FROM franchisee ORDER BY `franchisee`.`slno` DESC";
                              
                              $query = mysqli_query($con, $sql);
                              $i = 1;
                              while ($res = mysqli_fetch_array($query)) {
                        ?>

                    <tr>
                      <td class="text-center"> <?php echo $i  ?> </td>
                      
                      <td> <?php echo $res['f_code'];  ?> </td>
                      
                      <td> <?php echo $res['f_center'];  ?> </td>
                      
                      <td> <?php echo $res['f_address'];  ?> </td>
                      
                      <!-- <td> <span class="badge badge-sm bg-gradient-info ">Online</span> </td> -->
                      
                      <td> <a href="viewfranchisee.php?id=<?php echo $res['slno']; ?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            <p class="text-xs font-weight-bold text-white border-radius-lg mb-0 py-2 px-2 text-center bg-gradient-info">View</p>
                        </a>
                      </td>
                    </tr>
                    
                    <?php
                      $i ++; 
                      }
                    ?>
                    
                    
                    <!-- <tr>
                          <td>
                            <div class="d-flex px-2 py-1">
                              <div>
                                <img src="../assets/img/team-4.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user6">
                              </div>
                              <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">Miriam Eric</h6>
                                <p class="text-xs text-secondary mb-0">miriam@creative-tim.com</p>
                              </div>
                            </div>
                          </td>
                          <td>
                            <p class="text-xs font-weight-bold mb-0">Programator</p>
                            <p class="text-xs text-secondary mb-0">Developer</p>
                          </td>
                          <td class="align-middle text-center text-sm">
                            <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                          </td>
                          <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">14/09/20</span>
                          </td>
                          <td class="align-middle">
                            <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                              <p class="text-xs font-weight-bold text-white border-radius-lg mb-1 py-1 text-center bg-gradient-success">Edit</p>
                            </a>
                            <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                <p class="text-xs font-weight-bold text-white border-radius-lg mb-0 py-1 text-center bg-gradient-danger">Deleat</p>
                            </a>
                          </td>
                    </tr> -->
                  </tbody>
                </table>
              </div>
            </div>
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
  </main>
    
    <!-- Settings -->
    
      <?php include 'Include/settings.php' ?>
    
    <!-- End Settings -->
    
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
  
<script>
    function myFunction() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }       
      }
    }
</script>

</body>

</html>