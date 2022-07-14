<!-- banner part start-->
<section class="banner_part">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5">
                <div class="banner_text">
                    <div class="banner_text_iner">
                        <h1><?php echo $settings['ban_text1']; ?></h1>
                        <p><?php echo $settings['ban_text2']; ?></p>
                        <a href="product_list.html" class="btn_1">همین الان خرید کنید</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner_img" >

        <img src="admin/<?php echo $settings['banner']; ?>" style="height: 420px; " alt="#" class="img-fluid" >
        <img src="public/img/banner_pattern.png " alt="#" class="pattern_img img-fluid">
    </div>
</section>
<!-- banner part start-->

<!-- product list start-->
<section class="single_product_list">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single_product_iner">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_img">
                                <img width="600" src="admin/<?php echo $mainpro1['img1']; ?>" class="img-fluid" alt="#">
                                <img width="300" src="public/img/product_overlay.png" alt="#" class="product_overlay img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <div class="single_product_content">
                                <h5>قیمت : <?php echo $mainpro1['price']; ?> تومان</h5>
                                <h2> <a href="index.php?c=product&a=product&id=<?php echo $mainpro1['id']; ?>"></a><?php echo $mainpro1['title']; ?></h2>
                                <a href="index.php?c=product&a=shop" class="btn_3">امتحان کنید</a>
                            </div>
                        </div>
                    </div>
                </div>





                <div class="single_product_iner">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_img">
                                <img width="600" src="admin/<?php echo $mainpro2['img1']; ?>" class="img-fluid" alt="#">
                                <img width="300" src="public/img/product_overlay.png" alt="#" class="product_overlay img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <div class="single_product_content">
                                <h5>قیمت : <?php echo $mainpro2['price']; ?> تومان</h5>
                                <h2> <a href="index.php?c=product&a=product&id=<?php echo $mainpro2['id']; ?>"><?php echo $mainpro2['title']; ?></a> </h2>
                                <a href="index.php?c=product&a=shop" class="btn_3">امتحان کنید</a>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="single_product_iner">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_img">
                                <img width="600" src="admin/<?php echo $mainpro3['img1']; ?>" class="img-fluid" alt="#">
                                <img width="300" src="public/img/product_overlay.png" alt="#" class="product_overlay img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <div class="single_product_content">
                                <h5>قیمت : <?php echo $mainpro3['price']; ?> تومان</h5>
                                <h2> <a href="index.php?c=product&a=product&id=<?php echo $mainpro3['id']; ?>"><?php echo $mainpro3['title']; ?></a> </h2>
                                <a href="index.php?c=product&a=shop" class="btn_3">امتحان کنید</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product list end-->


<!-- trending item start-->
<section class="trending_items">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_tittle text-center">
                    <h2>محصولات جدید</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                
                <div class="single_product_item">
                    <div class="single_product_item_thumb">
                        <img src="admin/<?php echo $newpro1['img1']; ?>" alt="#" class="img-fluid">
                    </div>
                    <h3> <a href="index.php?c=product&a=product&id=<?php echo $newpro1['id']; ?>"><?php echo $newpro1['title'];?> </a> </h3>
                    <p>قیمت : <?php echo $newpro1['price']; ?></p>
                </div>
            </div>


            <div class="col-lg-4 col-sm-6">
                <div class="single_product_item">
                    <img src="admin/<?php echo $newpro2['img1']; ?>" alt="#" class="img-fluid">
                    <h3> <a href="index.php?c=product&a=product&id=<?php echo $newpro2['id']; ?>"><?php echo $newpro2['title'];?></a> </h3>
                    <p>قیمت : <?php echo $newpro2['price']; ?></p>
                </div>
            </div>


            <div class="col-lg-4 col-sm-6">
                <div class="single_product_item">
                    <img src="admin/<?php echo $newpro3['img1']; ?>" alt="#" class="img-fluid">
                    <h3> <a href="index.php?c=product&a=product&id=<?php echo $newpro3['id']; ?>"><?php echo $newpro3['title'];?></a> </h3>
                    <p>قیمت : <?php echo $newpro3['price']; ?></p>
                </div>
            </div>


            <div class="col-lg-4 col-sm-6">
                <div class="single_product_item">
                    <img src="admin/<?php echo $newpro4['img1']; ?>" alt="#" class="img-fluid">
                    <h3> <a href="index.php?c=product&a=product&id=<?php echo $newpro4['id']; ?>"><?php echo $newpro4['title'];?></a></h3>
                    <p>قیمت : <?php echo $newpro4['price']; ?></p>
                </div>
            </div>


            <div class="col-lg-4 col-sm-6">
                <div class="single_product_item">
                    <img src="admin/<?php echo $newpro5['img1']; ?>" alt="#" class="img-fluid">
                    <h3> <a href="index.php?c=product&a=product&id=<?php echo $newpro5['id']; ?>"><?php echo $newpro5['title'];?></a> </h3>
                    <p>قیمت : <?php echo $newpro5['price']; ?></p>
                </div>
            </div>


            <div class="col-lg-4 col-sm-6">
                <div class="single_product_item">
                    <img src="admin/<?php echo $newpro6['img1']; ?>" alt="#" class="img-fluid">
                    <h3> <a href="index.php?c=product&a=product&id=<?php echo $newpro6['id']; ?>"><?php echo $newpro6['title'];?></a> </h3>
                    <p>قیمت : <?php echo $newpro6['price']; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- trending item end-->

<!-- client review part here -->
<section class="client_review " style="direction: ltr">
    <div class="container" >
        <div class="row justify-content-center" >
            <div class="col-lg-8">
                <div class="client_review_slider owl-carousel " >
                    <?php foreach ($comments_list as $val): ?>
                    <div class="single_client_review" dir="rtl" >
                        <div class="client_img" >
                            <img src="admin/<?php echo $val['image']; ?>" alt="#">
                        </div>
                        <p ><?php echo $val['comment']; ?> </p>
                        <h5> <?php echo $val['name']; ?> </h5>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- client review part end -->


<!-- feature part here -->
<section class="feature_part section_padding">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-6">
                <div class="feature_part_tittle">
                    <h3><?php echo $settings['fea_text1']; ?></h3>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="feature_part_content">
                    <p><?php echo $settings['fea_text2']; ?></p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php foreach ($features_list as $val):?>
            <div class="col-lg-3 col-sm-6">
                <div class="single_feature_part">
                    <img src="admin/<?php echo $val['image']; ?>" alt="#">
                    <h4><?php echo $val['title']; ?></h4>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- feature part end -->

<!-- subscribe part here -->
<section class="subscribe_part section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="subscribe_part_content" style="direction: rtl">
                    <h2><?php echo $settings['news_text1']; ?></h2>
                    <p><?php echo $settings['news_text2']; ?></p>
                    <div class="subscribe_form">
                        <form method="post" action="index.php?c=index&a=index">
                            <input type="email" name="data[email]" placeholder="ایمیل خود را وارد کنید">
                        <div>
                            <input type="submit" name="newsletter" value="تایید" />
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- subscribe part end -->
