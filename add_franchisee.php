
<?php
    include("../auth_session.php");
    require('../db.php');

#$u_insert = false;
#$f_insert = false;

if(isset($_POST['submit'])){
       require('../db1.php');
    // Collect post variables
    
                                                $uniqueId= time();
                                                $s="S";
                                                $uid= $s .date('Y').$uniqueId ;
                                                $random_hash = substr(sha1(uniqid(rand(), true)), 6, 6);
                                                $logpwd= $random_hash ;
                                                $name = $_POST['name'];
                                                $fname = $_POST['fname'];
                                                $mname = $_POST['mname'];
                                                $cell = $_POST['cell'];
                                                $mail = $_POST['mail'];
                                                $dob = $_POST['dob'];
                                                $gender = $_POST['gender'];
                                                $qual = $_POST['qual'];
                                                $address = $_POST['address'];
                                                $district = $_POST['district'];
                                                $state = $_POST['state'];
                                                $country = $_POST['country'];
                                                $postal_code = $_POST['postal_code'];
                                                $user_type = "FRANCHISEE";
                                                $owner_id = "S20180317105200";
                                                $status = "ENABLE";
                                                $cat_image_file_name = $_FILES['photo']['name'];
                                                $cat_image_file_size = $_FILES['photo']['size'];
                                                $cat_image_file_tmp = $_FILES['photo']['tmp_name'];
                                                $imgData = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
                                                $imageProperties = getimageSize($_FILES['photo']['tmp_name']);


        $sql = "INSERT INTO  `users` (`uid` , `logid` , `logpwd` , `name` , `fname` , `mname` , `cell` , `mail` , `dob` , `gender` , `qual` , `address` , `city` , `sub_district` , `district` , `state` , `country` , `postal_code` , `photo` , `user_type` , `owner_id` , `status`) 
        VALUES
        ('$uid' , '$mail' , '$logpwd' , '$name' , '$fname' , '$mname' , '$cell' , '$mail' , '$dob' , '$gender' , '$qual' , '$address' , '$district' , '$district' , '$district' , '$state' , '$country' , '$postal_code' , '$imgData' , '$user_type' , '$owner_id' , '$status' )";
           
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        #$u_insert = true;
        header("Location: franchisee_form.php?id=1");
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
}

if(isset($_POST['f_center'])){
       require('../db1.php');
    // Collect post variables 
       
        $f_code = $_POST['f_code'];
        $f_center = $_POST['f_center'];
        $create_date = date('Y-m-d');
                
    $sql = "INSERT INTO  `franchisee` (`f_uid` , `f_code` , `f_center` , `f_address` , `f_phone` , `f_email` , `f_rdate` , `f_owner`) VALUES ('$uid','$f_code','$f_center','$address','$cell','$mail','$create_date','$owner_id')";
           
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        #$f_insert = true;
        header("Location: franchisee_form.php?id=1");
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
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
  <!-- Script Files for Image-->
  <script src="https://www.dukelearntoprogram.com/course1/common/js/image/SimpleImage.js"></script>
  
  <style>
     .fs{ border-color: #e91e63!important; border-radius: 5px; border: 3px solid #e91e63!important; width: 100%; margin:  0 0 25px 0; padding: 10px;}
     
     .fs:hover { box-shadow: 0 4px 20px 0 rgb(0 0 0 / 14%), 0 7px 10px -5px rgb(233 30 99 / 40%) !important; }
         
     .can{ height: 140px; width: 123px; border-style: solid; border-width: 2px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-color: black; border-radius: 20%; background-image: url(user-solid.svg);background-repeat: no-repeat; }     
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
                <h6 class="text-white text-capitalize ps-3">Add Franchisee</h6> 
                <?php
                    #if($u_insert == true){ echo "<p style='color: greenyellow; font-family: auto; font-weight: bold; margin-top: 5px; margin-left: 15px; '>Add new Users successfully. </p>";}
                    #if($f_insert == true){ echo "<p style='color: greenyellow; font-family: auto; font-weight: bold; margin-top: 5px; margin-left: 15px; '>Add new franchisee successfully. </p>"; }
                ?>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-3">
                
                <form role="form" class="text-start" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  
                    <div class="row">
                        
                          <div class="col-sm-6 mb-2">
                            <canvas class="can"style="" id= "canv1" ></canvas>
                            <br>
                            <p>Upload 200x225px Photo
                            <input type="file" name="photo" class="fs" required multiple="false" accept="image/*" id=finput onchange="upload()">
                            </p>
                          </div> 
                          
                          <div class="col-sm-6 ">
                            <img src="working.webp" alt="" style="height: 230px; width: 100%; border-radius: 5px;">
                          </div>
                          
                          <div class="col-sm-12 "> <p class="text-danger text-bold text-center rounded py-2 bg-light " >Franchisee Details </p> </div>
                          <div class="col-sm-6 ">
                              <label ><span class="text-danger text-bold">* </span> Franchisee Center Name</label>
                            <input type="text" name="f_center" Placeholder="Enter Franchisee Center Name" class="fs" required >
                          </div>
                          <div class="col-sm-6 ">
                              <label ><span class="text-danger text-bold">* </span> Franchisee Center Code</label>
                            <input type="text" name="f_code" Placeholder="Enter Franchisee Center Code" class="fs" required >
                          </div>
                          <div class="col-sm-6 ">
                              <label ><span class="text-danger text-bold">* </span> Owner Name </label>
                            <input type="text" name="name" Placeholder="Enter Owner Name" class="fs" required >
                          </div>
                          
                          <div class="col-sm-6 ">
                              <label ><span class="text-danger text-bold">* </span> Owner Father Name </label>
                            <input type="text" name="fname" Placeholder="Enter Owner Father Name" class="fs" required >
                          </div>
                          
                          <div class="col-sm-6 ">
                              <label ><span class="text-danger text-bold">* </span> Owner Mother Name </label>
                            <input type="text" name="mname" Placeholder="Enter Owner Mother Name" class="fs" required >
                          </div>
                          
                          <div class="col-sm-6 ">
                              <label ><span class="text-danger text-bold">* </span> Owner Phone </label>
                            <input type="number" name="cell" Placeholder="Enter Owner Phone No" class="fs" required >
                          </div>
                          
                          <div class="col-sm-6 ">
                              <label ><span class="text-danger text-bold">* </span> Owner Email Address </label>
                            <input type="email" name="mail" Placeholder="Enter Owner Email Address" class="fs" required >
                          </div>
                          
                          <div class="col-sm-6 ">
                              <label ><span class="text-danger text-bold">* </span> Owner Date of Bairth </label>
                            <input type="Date" name="dob" Placeholder="Enter Owner DOB" class="fs" required >
                          </div>
                          
                          <div class="col-sm-6 ">
                              <label ><span class="text-danger text-bold">* </span> Owner Gender </label>
                            <select name="gender" Placeholder="Select Owner Gender" class="fs" required>
                                <option  selected disabled>Select Owner Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Unspesified">Unspesified</option>
                              </select>
                          </div>
                          
                          <div class="col-sm-6 ">
                              <label ><span class="text-danger text-bold">* </span> Owner Qualification </label>
                            <input type="text" name="qual" Placeholder="Enter Owner Qualification" class="fs" required >
                          </div>
                          
                          <div class="col-sm-6 ">
                              <label ><span class="text-danger text-bold">* </span> Owner Address </label>
                              <textarea name="address" Placeholder="Enter Owner Address" class="fs"> </textarea>
                            
                          </div>
                          
                         
                          
                          <div class="col-sm-6 ">
                              <label ><span class="text-danger text-bold">* </span> Owner State </label>
                                <select name="state" class="fs" required="required">
                                   <option  selected disabled>Select Owner State</option>
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
                           <div class="col-sm-4">
                              <label ><span class="text-danger text-bold">* </span> Owner District </label>
                            <input type="text" name="district" Placeholder="Enter Owner District" class="fs" required >
                          </div>
                          <div class="col-sm-4">
                              <label ><span class="text-danger text-bold">* </span> Owner Country </label>
                            <select name="country" class="fs" required >
                                <option selected disabled >Select Owner Country</option>
                                <option value="INDIA">INDIA</option>
                                <option value="OTHER">OTHER</option>
                            </select>
                          </div> 
                          <div class="col-sm-4">
                              <label ><span class="text-danger text-bold">* </span> Owner Postal Code </label>
                            <input type="text" name="postal_code" Placeholder="Enter Owner Postal Code"  class="fs" required >
                          </div>
                         
                          
                         

                    </div>
                    
                    <button type="submit" value="submit" name="submit" class="btn bg-gradient-primary align-items-center w-50 my-4 mb-2">Submit Now</button>
                    
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
  
  <script>
        function upload(){
          var imgcanvas = document.getElementById("canv1");
          var fileinput = document.getElementById("finput");
          var image = new SimpleImage(fileinput);
          image.drawTo(imgcanvas);
        }
  </script>
  
</body>

</html>