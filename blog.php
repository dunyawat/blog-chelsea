<?php
    
    require_once('php/connect.php');
    $tag = isset($_GET['tag']) ? $_GET['tag'] : 'all';
    $sql ="SELECT * FROM `news` WHERE `tag` LIKE '%".$tag."%' AND `status` = 'true'";
    $result = $conn->query($sql);
    if (!$result){
        header("Location: blog.php");
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Roman CFC ข่าวเชลซีเพื่อแฟนเชลซี</title>
    <meta name="title" content="Roman CFC ข่าวเชลซีเพื่อแฟนเชลซี">
    <meta name="description" content="ข่าวเชลซีเพื่อแฟนเชลซี Chelsea News รวบรวมข่าวฟุตบอลเกี่ยวกับ chelsea">
    <meta name="keywords" content="chelsea,เชลซี,ข่าว">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="author" content="Dunyawat">

    <!-- COMMON TAGS -->
    <!-- Search Engine -->
    <meta name="image" content="https://images.unsplash.com/photo-1528164344705-47542687000d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
    <!-- Schema.org for Google -->
    <meta itemprop="name" content="Roman CFC ข่าวเชลซีเพื่อแฟนเชลซี">
    <meta itemprop="description" content="ข่าวเชลซีเพื่อแฟนเชลซี Chelsea News รวบรวมข่าวฟุตบอลเกี่ยวกับ chelsea">
    <meta itemprop="image" content="https://images.unsplash.com/photo-1528164344705-47542687000d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
    <!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <meta name="og:title" content="Roman CFC ข่าวเชลซีเพื่อแฟนเชลซี">
    <meta name="og:description" content="ข่าวเชลซีเพื่อแฟนเชลซี Chelsea News รวบรวมข่าวฟุตบอลเกี่ยวกับ chelsea">
    <meta name="og:image" content="https://images.unsplash.com/photo-1528164344705-47542687000d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
    <meta name="og:url" content="https://sclass1-f1498.firebaseapp.com">
    <meta name="og:site_name" content="https://sclass1-f1498.firebaseapp.com">
    <meta name="og:type" content="website">

    <!--Favicons-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">
    <link rel="mask-icon" href="assets/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="assets/images/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="assets/images/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">



    <!--CSS-->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
</head>
<body>


    <!--Section Navbar-->
    <?php include_once('includes/navbar.php') ?>

    <!--Section Pagetitle-->
    <header class="jarallax" data-jarallax='{"speed":0.6}'  style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS7CGt8Y7-E3xX_23mr2AuvX98l0XME9noRcDacVzVnQs4HhwFW);">
        <div class="page-image">
            <h1 class="display-4  font-weight-bold">บทความ</h1>
            <p class="lead">Roman Empire CFC ข่าวเชลซีเพื่อแฟนเชลซี</p>
        </div>    
    </header> 


    <!--Section Blog-->
    <section class="container py-5">
        <div class="row">
            <div class="col-12 text-center">
                <div class="btn-group-custom">
                    <a href="blog.php?tag=all">
                    <button class="btn btn-primary <?php echo $tag == 'all'?'active':''?>">ทั้งหมด</button>
                    </a>
                    <a href="blog.php?tag=news">
                    <button class="btn btn-primary <?php echo $tag == 'news'?'active':''?>">News</button>
                    </a>
                    <a href="blog.php?tag=official">
                    <button class="btn btn-primary <?php echo $tag == 'official'?'active':''?>">Official</button>
                    </a>
                    <a href="blog.php?tag=exclusive">
                    <button class="btn btn-primary <?php echo $tag == 'exclusive'?'active':''?>">Exclusive</button>
                    </a>
                    <a href="blog.php?tag=gossip">
                    <button class="btn btn-primary <?php echo $tag == 'gossip'?'active':''?>">Gossip</button>
                    </a>
                    <a href="blog.php?tag=sf">
                    <button class="btn btn-primary <?php echo $tag == 'sf'?'active':''?>">Scores & Fixtures</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            if($result->num_rows){
                while($row = $result->fetch_assoc()) { 
            ?>
            <section class="col-12 col-sm-6 col-md-4 p-2">
                <div class="card h-100">
                    <a href="blog-detail.php?id=<?php echo $row['id'] ?>" class="warpper-card-image">
                    <img class="card-img-top" src="<?php echo $base_path_blog.$row['image'] ?>" alt="blog1">
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
            <?php 
                } 
            }else{
            ?> 
            <section class="col-12">
                <p class="text-center">ไม่มีข้อมูล</p>
            </section>

            <?php 
                } 
            ?>

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