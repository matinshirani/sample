<!-- ================ contact section start ================= -->
<section class="contact-section section_padding">
    <div>
    <form class="form-contact contact_form" method="post" enctype="multipart/form-data" action="#">
        <div class="card-body">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">نام</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" name="data[name]" id="inputEmail3" >
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">ایمیل</label>

                <div class="col-sm-10">
                    <input type="email" class="form-control" name="data[email]" id="inputEmail3" >
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">موضوع</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" name="data[subject]" id="inputEmail3" >
                </div>
            </div>
            <div class="form-group" dir="rtl">
                <label for="inputEmail3" class="col-sm-2 control-label">متن</label>
                <textarea class="form-control w-100" name="data[text]" id="message" cols="30" rows="9"></textarea>
            </div>

            <div>
                <button type="submit" name="btn" style="color: #B08EAD ; border: 1px solid #B08EAD;" class="btn_3 button-contactForm">ارسال</button>
            </div>

        </div>
        <!-- /.card-body -->

        <!-- /.card-footer -->
    </form>

    </div>
            <div class="col-lg-4">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                        <h3><?php echo $settings['city']; ?></h3>
                        <p><?php echo $settings['address']; ?></p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                    <div class="media-body">
                        <h3><?php echo $settings['tel']; ?>
                        <p><?php echo $settings['days']; ?></p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                        <h3><?php echo $settings['email']; ?></h3>
                        <p>سوالات خود را از ما بپرسید!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================ contact section end ================= -->