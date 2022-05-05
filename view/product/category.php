<section class="breadcrumb_part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <h2>لیست محصولات</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb part end-->

<!-- product list part start-->
<section class="product_list section_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="product_sidebar">
                    <div class="single_sedebar">
                        <form action="#">
                            <input type="text" name="#" placeholder="جست و جو">
                            <i class="ti-search"></i>
                        </form>
                    </div>
                    <div class="single_sedebar">
                        <div class="select_option">
                            <div class="select_option_list">دسته ها <i class="right fas fa-caret-down"></i> </div>
                            <div class="select_option_dropdown">
                                <?php foreach ($list_cat as $value): ?>
                                    <p><a href="index.php?c=product&a=category&id=<?php echo $value['id']; ?>"><?php echo $value['title']; ?></a></p>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="product_list">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <?php foreach ($list as $val): ?>
                                <div class="single_product_item">
                                    <img src="admin/<?php echo $val['img1']; ?>" alt="عکس محضول" class="img-fluid">
                                    <h3> <a href="index.php?c=product&a=product&id=<?php echo $val['id']; ?>"> <?php echo $val['title']; ?> </a> </h3>
                                    <p>قیمت : ‌<?php echo $val['price']; ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>

                    </div>
                    <div class="load_more_btn text-center">
                        <a href="#" class="btn_3">جزئیات بیشتر</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product list part end-->

<!-- feature part here -->
<section class="feature_part section_padding">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-6">
                <div class="feature_part_tittle">
                    <h3>با استفاده از مواد ارگانیک، محصولات استانداردی در اینجا تولید می شود.</h3>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="feature_part_content">
                    <p>“شرکت ما با بهره گیری از استراتژی های مختلف و استفاده از مواد ارگانیک و طبیعی سعی در تولید محصولاتی با کیفیت و مطابق نیاز شما دارد.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php foreach ($list_features as $value): ?>
            <div class="col-lg-3 col-sm-6">
                <div class="single_feature_part">
                    <img src="admin/<?php echo $value['image']; ?>" alt="#">
                    <h4><?php echo $value['title']; ?></h4>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>