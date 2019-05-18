<?php
if(!session_id()) {
 session_start();
}
if (isset($_SESSION['login'])) {
 $name = $_SESSION['name'];
 $picture_url = $_SESSION['picture'];
}
else{
 $name = 'Guest';
 $picture_url = './default_guest.png';
}
?><section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-o">
 <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
     <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <div class="hamburger">
             <span></span>
             <span></span>
             <span></span>
             <span></span>
         </div>
     </button>
     <div class="menu-logo">
         <div class="navbar-brand">
             <span class="navbar-logo">
                 <a href="http://shiyancai215.com">
                      <img src="assets/images/logo2.png" alt="Mobirise" title="" style="height: 3.8rem;">
                 </a>
             </span>
             <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="http://shiyancai215.com">6969</a></span>
         </div>
     </div>
     <font color="white">Hello <?php echo $name?></font>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item dropdown open">
                 <a class="nav-link link dropdown-toggle text-white display-4" href="index.php" data-toggle="dropdown-submenu" aria-expanded="true"><span class="mbri-globe mbr-iconfont mbr-iconfont-btn"></span>Navigate</a><div class="dropdown-menu"><a class="dropdown-item text-white display-4" href="index.php"><span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>Home</a><a class="dropdown-item text-white display-4" href="CreateUser.php" aria-expanded="false"><span class="mbri-user mbr-iconfont mbr-iconfont-btn"></span>Create User</a><a class="dropdown-item text-white display-4" href="history.php" aria-expanded="false"><span class="mbri-clock mbr-iconfont mbr-iconfont-btn"></span>History</a><a class="text-white dropdown-item display-4" href="products.php" aria-expanded="false" target="_blank"><span class="mbri-rocket mbr-iconfont mbr-iconfont-btn"></span>Products</a><a class="text-white dropdown-item display-4" href="topFive.php" aria-expanded="false"><span class="mbri-star mbr-iconfont mbr-iconfont-btn"></span>Top Rated</a></div>
             </li></ul>
           <?php
             if (!isset($_SESSION['login'])) {
               echo "<div class=\"navbar-buttons mbr-section-btn\"><a class=\"btn btn-sm btn-primary display-4\" href=\"Login.php\"><span class=\"mbri-hearth mbr-iconfont mbr-iconfont-btn\"></span> Log In</a></div>";
             }
             else{
               echo "<div class=\"navbar-buttons mbr-section-btn\"><a class=\"btn btn-sm btn-primary display-4\" href=\"logout.php\"><span class=\"mbri-hearth mbr-iconfont mbr-iconfont-btn\"></span>Log Out</a></div>";
             }
             echo "<img src=$picture_url alt=\"No profile image\" border=\"2\" style=\"width:75px;height:75px;\">";             ?>
     </div>
 </nav>
</section>
Message Input
