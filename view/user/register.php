<section class="login_part section_padding ">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="login_part_text text-center">
                    <div class="login_part_text_iner">
                        <h2>حساب کاربری دارید ؟‌</h2>
                        <p>برای تجربه خرید به حساب کاربری خود وارد شوید</p>
                        <a href="index.php?c=user&a=login" class="btn_3">صفحه ورود</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="login_part_form">
                    <div class="login_part_form_iner">
                        <h3>خوش آمدید ! <br>
                            لطفا ثبت نام کنید</h3>
                        <form class="row contact_form" action="index.php?c=user&a=register" method="post">
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="name" name="data[name]"
                                       placeholder="نام شما">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="email" class="form-control" id="name" name="data[email]"
                                       placeholder="ایمیل">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="password" class="form-control" id="password" name="data[password]" value=""
                                       placeholder="رمز عبور">
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="creat_account d-flex align-items-center">
                                    <input type="checkbox" id="f-option" name="selector">
                                    <label for="f-option">مرا به خاطر بسپار</label>
                                </div>
                                <input type="submit" value="ثبت نام" name="btn" class="btn_3" >

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================login_part end =================-->
