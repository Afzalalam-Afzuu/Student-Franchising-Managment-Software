<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" ../pages/dashboard.php">
        <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Ashoka India</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white <?php if (basename($_SERVER['PHP_SELF']) === "dashboard.php" || basename($_SERVER['PHP_SELF']) === "viewdashboard.php" || basename($_SERVER['PHP_SELF']) === "update_dashboard.php") { echo 'active bg-gradient-primary';} ?> " href="../pages/dashboard.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?php if (basename($_SERVER['PHP_SELF']) === "franchisee_form.php" || basename($_SERVER['PHP_SELF']) === "viewfranchisee.php" || basename($_SERVER['PHP_SELF']) === "add_franchisee.php" || basename($_SERVER['PHP_SELF']) === "update_franchisee.php" ) { echo 'active bg-gradient-primary';} ?> " href="../pages/franchisee_form.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Franchisee</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?php if (basename($_SERVER['PHP_SELF']) === "student.php" || basename($_SERVER['PHP_SELF']) === "viewstudent.php" || basename($_SERVER['PHP_SELF']) === "update_student.php" || basename($_SERVER['PHP_SELF']) === "viewidcard.php" || basename($_SERVER['PHP_SELF']) === "viewmarksheet.php" || basename($_SERVER['PHP_SELF']) === "viewsertificate.php") { echo 'active bg-gradient-primary';} ?> " href="../pages/student.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-user opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">&nbsp; Students</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?php if (basename($_SERVER['PHP_SELF']) === "course.php" || basename($_SERVER['PHP_SELF']) === "viewcourse.php" || basename($_SERVER['PHP_SELF']) === "update_course.php") { echo 'active bg-gradient-primary';} ?> " href="../pages/course.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-book opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">&nbsp; Courses</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?php if (basename($_SERVER['PHP_SELF']) === "enquiry.php" || basename($_SERVER['PHP_SELF']) === "viewenquiry.php" || basename($_SERVER['PHP_SELF']) === "update_enquiry.php") { echo 'active bg-gradient-primary';} ?> " href="../pages/enquiry.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-question-circle-o opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">&nbsp; Enquiry</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?php if (basename($_SERVER['PHP_SELF']) === "message.php" || basename($_SERVER['PHP_SELF']) === "viewmessage.php" || basename($_SERVER['PHP_SELF']) === "update_message.php" || basename($_SERVER['PHP_SELF']) === "add_messages.php" ) { echo 'active bg-gradient-primary';} ?> " href="../pages/message.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons text-lg position-relative">email</i>
            </div>
            <span class="nav-link-text ms-1">&nbsp; Message</span>
          </a>
        </li>
        <!--<li class="nav-item">
          <a class="nav-link text-white <?php if (basename($_SERVER['PHP_SELF']) === "profile.php") { echo 'active bg-gradient-primary';} ?> " href="../pages/profile.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">My Profile</span>
          </a>
        </li>-->
        <li class="nav-item">
          <a class="nav-link text-white " href="../logout.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-sign-out opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">&nbsp; Logout</span>
          </a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link text-white " href="../pages/tables2.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Tables</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/virtual-reality.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">view_in_ar</i>
            </div>
            <span class="nav-link-text ms-1">Virtual Reality</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/rtl.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
            </div>
            <span class="nav-link-text ms-1">RTL</span>
          </a>
        </li> 
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/notifications.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">notifications</i>
            </div>
            <span class="nav-link-text ms-1">Notifications</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/profile.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/sign-in.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">Sign In</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/sign-up.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">assignment</i>
            </div>
            <span class="nav-link-text ms-1">Sign Up</span>   add_franchisee.php
          </a>
        </li> -->
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
         <?php if (basename($_SERVER['PHP_SELF']) === "viewdashboard.php") { echo '<a class="btn bg-gradient-primary mt-4 w-100" href="./dashboard.php" type="button"> Back Now </a> ';} ?> </a>
      </div>
      <div class="mx-3">
         <?php if (basename($_SERVER['PHP_SELF']) === "viewfranchisee.php") { echo '<a class="btn bg-gradient-primary mt-4 w-100" href="./franchisee_form.php" type="button"> Back Now </a> ';} ?> </a>
      </div>
      <div class="mx-3">
         <?php if (basename($_SERVER['PHP_SELF']) === "viewstudent.php") { echo '<a class="btn bg-gradient-primary mt-4 w-100" href="./student.php" type="button"> Back Now </a> ';} ?> </a>
      </div>
      <div class="mx-3">
         <?php if (basename($_SERVER['PHP_SELF']) === "viewcourse.php") { echo '<a class="btn bg-gradient-primary mt-4 w-100" href="./course.php" type="button"> Back Now </a> ';} ?> </a>
      </div>
      <div class="mx-3">
         <?php if (basename($_SERVER['PHP_SELF']) === "viewenquiry.php") { echo '<a class="btn bg-gradient-primary mt-4 w-100" href="./enquiry.php" type="button"> Back Now </a> ';} ?> </a>
      </div>
      <div class="mx-3">
         <?php if (basename($_SERVER['PHP_SELF']) === "viewmessage.php") { echo '<a class="btn bg-gradient-primary mt-4 w-100" href="./message.php" type="button"> Back Now </a> ';} ?> </a>
      </div>
      <div class="mx-3">
         <?php if (basename($_SERVER['PHP_SELF']) === "add_messages.php") { echo '<a class="btn bg-gradient-primary mt-4 w-100" href="./message.php" type="button"> Back Now </a> ';} ?> </a>
      </div>
      <div class="mx-3">
         <?php if (basename($_SERVER['PHP_SELF']) === "add_franchisee.php") { echo '<a class="btn bg-gradient-primary mt-4 w-100" href="./franchisee_form.php" type="button"> Back Now </a> ';} ?> </a>
      </div>
      <div class="mx-3">
         <?php if (basename($_SERVER['PHP_SELF']) === "viewidcard.php") { echo '<a class="btn bg-gradient-primary mt-4 w-100" href="./student.php" type="button"> Back Now </a> ';} ?> </a>
      </div>
      <div class="mx-3">
         <?php if (basename($_SERVER['PHP_SELF']) === "viewmarksheet.php") { echo '<a class="btn bg-gradient-primary mt-4 w-100" href="./student.php" type="button"> Back Now </a> ';} ?> </a>
      </div>
      <div class="mx-3">
         <?php if (basename($_SERVER['PHP_SELF']) === "viewsertificate.php") { echo '<a class="btn bg-gradient-primary mt-4 w-100" href="./student.php" type="button"> Back Now </a> ';} ?> </a>
      </div>
    </div>
  </aside>