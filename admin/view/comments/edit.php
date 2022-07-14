<form class="form-horizontal" method="post" enctype="multipart/form-data" action="index.php?c=comments&a=edit&id=<?php echo $show['id']; ?>">
    <div class="card-body">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">نام</label>

            <div class="col-sm-10">
                <input type="text" class="form-control" name="data[name]" value="<?php echo $show['name'];?>" id="inputEmail3" placeholder="عنوان را وارد کنید">
            </div>
        </div>

        <div class="form-group">
            <label>نظر</label>
            <textarea class="form-control" rows="3" name="data[comment]" placeholder="وارد کردن اطلاعات ..."><?php echo $show['comment'];?></textarea>
        </div>


        <div class="form-group">
            <label for="exampleInputFile">تصویر</label>
            <?php if ($show['image'] != ""){
                echo "تصویر قبلی : " . "<img src='$show[img1]' width='45' />";
            }else{
                echo "تصویر قبلی : " . "فاقد تصویر";
            } ?>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
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