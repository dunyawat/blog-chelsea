<?php
    require_once('php/connect.php');
    $sql ="SELECT * FROM `news` WHERE `status` = 'true' ORDER BY RAND() LIMIT 6 ";
    $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Roman CFC ข่าวเชลซีเพื่อแฟนเชลซี</title>
    
   

    <!-- COMMON TAGS -->
    <?php include_once('includes/meta.php') ?>



    <!--CSS-->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
    
</head>
<body>


    <!--Section Navbar-->
    <?php include_once('includes/navbar.php') ?>

    <!--Section Carousel-->
    <section id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                    <div class="carousel-img" style="background-image: url('assets/images/carusel1.jpg');">
                        <div class="carousel-caption">
                            <h1 class="display-4  font-weight-bold">Roman Empire CFC</h1>
                            <p class="lead">ข่าวเชลซีเพื่อแฟนเชลซี</p>

                        </div>
                        <div class="blackscreen"></div>
                    </div>
              </div>
              <div class="carousel-item">
                    <div class="carousel-img" style="background-image: url('assets/images/carusel2.jpg');">
                        <div class="carousel-caption">
                            <h1 class="display-4 font-weight-bold">Lastmatch : Chelsea 2 - 1 Aston Villa</h1>
                            <p class="lead">Goal : Tammy Abraham 23' Trezeguet 41' Mason Mount 48'
                        </div>
                        <div class="blackscreen"></div>
                    </div>
              </div>
              <div class="carousel-item">
                    <div class="carousel-img" style="background-image: url('assets/images/carusel3.jpg');">
                        <div class="carousel-caption">
                            <h1 class="display-4 font-weight-bold">Nextmatch : Everton VS Chelsea</h1>
                            <p class="lead">Date : 7 Dec 19:30 PM // Live : True premier football 1</p>
    
                        </div>
                        <div class="blackscreen"></div>              
                    </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
    </section>

    <!--Section Hope-->
    <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
            <h1 class="border-short-bottom">CHELSEA PRIDE OF LONDON</h1>
            <p class="lead">เพจเชลซีเพื่อแฟนบอลเชลซี รวบรวมข่าวฟุตบอลเกี่ยวกับเชลซี 
        </div>
    </div>

    <!--Section Blog-->
    <section class="container">
        <h1 class="border-short-bottom text-center">บทความ Blog</h1>
        <div class="row">
        <?php  while($row = $result->fetch_assoc()) { ?>
        <section class="col-12 col-sm-6 col-md-4 p-2">
                <div class="card h-100">
                    <a href="blog-detail.php?id=<?php echo $row['id'] ?>" class="warpper-card-image">
                    <img class="card-img-top" src="<?php echo $base_path_blog.$row['image'] ?>" alt="">
                    </a>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['subject'] ?></h5>
                    <p class="card-text"><?php echo $row['sub_title'] ?></p>    
                </div>
                <div class="p-3">
                    <a href="blog-detail.php?id=<?php echo $row['id'] ?>" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>
                </div>
            </div>
            </section>
        <?php } ?>

        </div>
    </section>

    <!--Section Footer-->
    <?php include_once('includes/footer.php') ?>

    <!--Section On To Top-->
    <div class="to-top">
            <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>

        
        <script src="node_modules/jquery/dist/jquery.min.js"></script>
        <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6PtPdFXjbpCflcQfFcNBhs_IY4MVhj1E&callback=initMap"></script>
        <script src="assets/js/main.js"></script>
</body>
</html>