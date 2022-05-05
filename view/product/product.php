<!--================Single Product Area =================-->
<div class="product_image_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="product_img_slide owl-carousel" dir="ltr">
                    <div class="single_product_img">
                        <?php
                        $img1=$pro['img1'];
                        if ($img1 != ''){
                        echo "<img src='admin/$img1' alt='first image of the product' class='img-fluid'>";
                        }
                        ?>
                    </div>
                    <?php
                    $img2=$pro['img2'];
                    if ($img2 != ''){
                        echo "<div class='single_product_img'> ";

                        echo "<img src='admin/$img2' alt='first image of the product' class='img-fluid'>";

                        echo "</div>";
                             }
                    ?>

                    <?php
                    $img3=$pro['img3'];
                    if ($img3 != ''){
                        echo "<div class='single_product_img'> ";

                        echo "<img src='admin/$img3' alt='first image of the product' class='img-fluid'>";

                        echo "</div>";
                             }
                    ?>

                    </div>

                </div>
            </div>
            <div class="col-lg-8">
                <div class="single_product_text text-center">
                    <h3><?php echo $pro['title']; ?></h3>
                    <p>
                       <?php echo $pro['text']; ?>
                    </p>
                    <div class="card_area">
                        <div class="product_count_area">
                            <p>تعداد</p>
                            <div class="product_count d-inline-block">
                                <span class="product_count_item inumber-decrement"> <i class="ti-minus"></i></span>
                                <input class="product_count_item input-number" type="text" value="1" min="1" max="<?php echo $pro['count']; ?>">
                                <span class="product_count_item number-increment"> <i class="ti-plus"></i></span>
                            </div>
                            <p><?php echo $pro['price']; ?> تومان</p>
                        </div>
                        <div class="add_to_cart">
                            <?php if ($pro['count'] == 0){
                                echo "<p style='color:red;'>ناموجود</p>";
                            }else{
                                echo "<a href='#' class='btn_3'>اضافه کردن به سبد خرید</a>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================End Single Product Area =================-->
<!-- subscribe part here -->
<section class="subscribe_part section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="subscribe_part_content">
                    <h2>به روز رسانی و مطالب پیشرفته!</h2>
                    <p>ما سعی در ارائه محصولات با کیفیت تر و با دوام تر با توجه با استانداردهای روز جهان داریم .</p>
                    <div class="subscribe_form">
                        <input type="email" placeholder="ایمیل خود را وارد کنید">
                        <a href="#" class="btn_1">تایید پرداخت</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- subscribe part end -->