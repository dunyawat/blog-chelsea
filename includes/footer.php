<?php  $file_name = basename($_SERVER['SCRIPT_FILENAME'],".php" );?>
<section  class="position-relative py-5 jarallax" data-jarallax='{"speed":0.6}' style="background-image: url('assets/images/jallarax1.jfif');">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <img src="assets/images/logo.png" class="img-fluid" width="150" alt="logo">
                    <h2 class="display-4  font-weight-bold text-white">Roman Empire CFC</h2>   
                    <div class="star-rating">
                        <span>☆</span>
                        <span>☆</span>
                        <span>☆</span>
                        <span>☆</span>
                        <span>☆</span>
                        <div class="star-current" style="width: 80%;">
                            <span>★</span>
                            <span>★</span>
                            <span>★</span>
                            <span>★</span>
                            <span>★</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </section>
    
<footer class="semi-footer  p-5 text-center text-md-left">
        <div class="row">
            <div class="col-md-4">
                <a class="navbar-brand" href="#">
                        <img src="assets/images/logo.png" width="35" height="35" class="d-inline-block align-top" alt="">
                        Roman Empire CFC
                </a>
                <p>
                    <i class="fa fa-phone-square"></i> 091-779-9179<br>
                    <i class="fa fa-envelope"></i> dunyawat.h@gmail.com<br>
                    <i class="fa fa-address-book"></i> Damnoen Saduak Ratchaburi
                </p>
                <a href="https://www.facebook.com/atom.teeranoiton?ref=bookmarks">
                    <i class="fa fa-facebook fa-2x"></i>
                </a>
                <a href="https://www.youtube.com/user/chelseafc">
                    <i class="fa fa-youtube fa-2x"></i>
                </a>
            </div>
            <div class="col-md-4">
                <h4>เมนู</h4>
                <ul class="navbar-nav ">
                    <li class="nav-item <?php echo $file_name == 'index'?'active':''?>">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item <?php echo $file_name == 'about'?'active':''?>">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item <?php echo $file_name == 'blog'|| $file_name== 'blog-detail' ?'active':''?>">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item <?php echo $file_name == 'contact'?'active':''?>">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
               <h4>แผนที่</h4>
               <div id="map"></div>
            </div>
        </div>
    </footer>
    <footer class="footer">
        <span> COPYRIGHT @ 2018 <a href="https://www.facebook.com/atom.teeranoiton" target="_blank">Roman Empire CFC</a></span>
        ALL Right Reserved
    </footer>