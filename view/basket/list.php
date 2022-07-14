<!-- breadcrumb part start-->
<section class="breadcrumb_part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <h2>سبد خرید</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb part end-->


<section class="cart_area section_padding" dir="rtl">
    <div class="container">
        <div class="cart_inner">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">محصول</th>
                        <th scope="col">قیمت</th>
                        <th scope="col">تعداد</th>
                        <th scope="col">حذف</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($pro_id as $key => $val):

                    $res = $basket->user_choices($val);
                    ?>
                    <tr>
                        <td>
                            <div class="media">
                                <div class="d-flex">
                                    <img width="75" src="admin/<?php echo $res['img1']; ?>" alt="" />
                                </div>
                                <div class="media-body">
                                    <p><?php echo $res['title']; ?></p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <h5><?php echo $res['price']; ?> تومان</h5>
                        </td>
                        <td>
                            <div class="product_count" dir="ltr">
                                <span class="input-number-decrement"> <i class="ti-minus"></i></span>
                                <input class="input-number" type="text" value="<?php echo $count[$key]; ?>" min="0" max="10">
                                <span class="input-number-increment"> <i class="ti-plus"></i></span>
                            </div>
                        </td>
                        <td>
                            	<div class="d-flex">
                                    <a href="index.php?c=basket&a=delete&id=<?php echo $list[$key]['id']; ?>" ><img width="30" src="view/basket/delete.png" alt="" /></a>
                                </div>	
                        </td>
                    </tr>
                    <?php endforeach; ?>

                    </tbody>
                </table>

            </div>
        </div>
</section>
