



<form class="form-horizontal" method="post" enctype="multipart/form-data" action="index.php?c=settings&a=edit">
    <div class="card-body">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">عنوان</label>

            <div class="col-sm-10">
                <input type="text" value="<?php echo $show['title']; ?>" class="form-control" name="data[title]" id="inputEmail3" >
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">لینک لوگو</label>

            <div class="col-sm-10">
                <input type="text" value="<?php echo $show['link_logo']; ?>" class="form-control" name="data[link_logo]" id="inputEmail3" >
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">لینک اینستاگرام</label>

            <div class="col-sm-10">
                <input type="text" value="<?php echo $show['instagram']; ?>" class="form-control" name="data[instagram]" id="inputEmail3" >
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">لینک G+</label>

            <div class="col-sm-10">
                <input type="text" value="<?php echo $show['g_plus']; ?>" class="form-control" name="data[g_plus]" id="inputEmail3" >
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3"  class="col-sm-2 control-label">لینک لیکنداین</label>

            <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php echo $show['linkedin']; ?>" name="data[linkedin]" id="inputEmail3" >
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">لینک فیسبوک</label>

            <div class="col-sm-10">
                <input type="text" value="<?php echo $show['facebook']; ?>" class="form-control" name="data[facebook]" id="inputEmail3" >
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">تلفن</label>

            <div class="col-sm-10">
                <input type="text" value="<?php echo $show['tel']; ?>" class="form-control" name="data[tel]" id="inputEmail3" >
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">روز های کاری</label>

            <div class="col-sm-10">
                <input type="text" value="<?php echo $show['days']; ?>" class="form-control" name="data[days]" id="inputEmail3" >
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">ایمیل</label>

            <div class="col-sm-10">
                <input type="text" value="<?php echo $show['email']; ?>" class="form-control" name="data[email]" id="inputEmail3" >
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">شهر</label>

            <div class="col-sm-10">
                <input type="text" value="<?php echo $show['city']; ?>" class="form-control" name="data[city]" id="inputEmail3" >
            </div>
        </div>
        <div class="form-group">
            <label>آدرس</label>
            <textarea class="form-control" rows="3" name="data[address]" ><?php echo $show['address']; ?></textarea>
        </div>
        <div class="form-group">
            <label>شرح وبسایت</label>
            <textarea class="form-control" rows="3" name="data[description]" ><?php echo $show['description']; ?></textarea>
        </div>
        <div class="form-group">
            <label>متن اول بنر</label>
            <textarea class="form-control" rows="3" name="data[ban_text1]" ><?php echo $show['ban_text1']; ?></textarea>
        </div>
        <div class="form-group">
            <label>متن دوم بنر</label>
            <textarea class="form-control" rows="3" name="data[ban_text2]" ><?php echo $show['ban_text2']; ?></textarea>
        </div>
        <div class="form-group">
            <label>متن اول فیچرز</label>
            <textarea class="form-control" rows="3" name="data[fea_text1]"><?php echo $show['fea_text1']; ?></textarea>
        </div>
        <div class="form-group">
            <label>متن دوم فیچرز</label>
            <textarea class="form-control" rows="3" name="data[fea_text2]"><?php echo $show['fea_text2']; ?></textarea>
        </div>
        <div class="form-group">
            <label>متن اول خبرنامه</label>
            <textarea class="form-control" rows="3" name="data[news_text1]" ><?php echo $show['news_text1']; ?></textarea>
        </div>
        <div class="form-group">
            <label>متن دوم خبرنامه</label>
            <textarea class="form-control" rows="3" name="data[news_text2]" ><?php echo $show['news_text2']; ?></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">تصویر لوگو</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="logo" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">انتخاب فایل</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">تصویر بنر</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="banner" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">انتخاب فایل</label>
                </div>
            </div>
        </div>


    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <button type="submit" name="btn" class="btn btn-info">ویرایش</button>
    </div>
    <!-- /.card-footer -->
</form>