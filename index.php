<?php 
require_once ('templates/header.php');
require_once ('models/post.php');
?>
<!-- navbar -->
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Facebook</span>
    <a href="#"><i class="fa fa fa-home" style="font-size:40px"></i></a>
  </div>
</nav>

<!-- container -->

<div class="container">

    <div class="rigth-bar">
    <?php
        $posts = get_post();
        foreach($posts as $post):
            
    ?>
    
        <div class="right-post">
            <div class="header">
                <img src="images/rady.jpg" alt="">
                <p>2021-10-02</p>
            </div>
            <div class="description"><?php echo $post['descriptoin'] ?></div> 
            <div class="img-post"><img src="image_upload/<?= $post['imges']?>" alt=""></div>
                <!-- <div class="img-post"><img src="images/girls.jpg" alt=""></div> -->


            <!-- display  -->
        <?php endforeach ?>
    </div>


    <div class="left-bar">
        <div class="img-cover">
            <img src="images/cutegirl.png" alt="">
        </div>
        <div class="img-profile">
            <img src="images/rady.jpg" alt="" >
        </div>
        <div class="name-profile">
            <h3>MEY SOK</h3>
        </div>
        <div class="btn_post">
            <button><a href="views/post_view.php">What's on your mine</a></button>
        </div>
    </div>
</div>







<?php require_once ('templates/footer.php');?>