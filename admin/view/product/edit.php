<form class="form-horizontal" method="post" enctype="multipart/form-data" action="index.php?c=product&a=edit&id=<?php echo $show['id']; ?>">
    <div class="card-body">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">عنوان</label>

            <div class="col-sm-10">
                <input type="text" class="form-control" name="data[title]" value="<?php echo $show['title'];?>" id="inputEmail3" placeholder="عنوان را وارد کنید">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">تعداد</label>

            <div class="col-sm-10">
                <input type="number" class="form-control" value="<?php echo $show['count'];?>" name="data[count]" id="inputEmail3" >
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">قیمت</label>

            <div class="col-sm-10">
                <input type="number" class="form-control" value="<?php echo $show['price'];?>" name="data[price]" id="inputEmail3" >
            </div>
        </div>
        <div class="form-group">
            <label>متن</label>
            <textarea class="form-control" rows="3" name="data[text]" placeholder="وارد کردن اطلاعات ..."><?php echo $show['text'];?></textarea>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label>دسته بندی</label>
                <select class="form-control select2" name="data[procat]" style="width: 100%;">
                    <?php foreach ($category as $valproduct): ?>
                    <option value="<?php echo $valproduct['id']; ?>"
                    <?php if ($valproduct['id'] == $show['procat']){echo " selected "; } ?>
                    ><?php echo $valproduct['title']; ?></option>
                    <?php endforeach; ?>

                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="exampleInputFile">تصویر اول</label>
            <?php if ($show['img1'] != ""){
                echo "تصویر قبلی : " . "<img src='$show[img1]' width='45' />";
            }else{
                echo "تصویر قبلی : " . "فاقد تصویر";
            } ?>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="file1" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">انتخاب فایل</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">تصویر دوم</label>
            <?php if ($show['img2'] != ""){
                echo "تصویر قبلی : " . "<img src='$show[img2]' width='45' />";
            }else{
                echo "تصویر قبلی : " . "فاقد تصویر";
            } ?>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="file2" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">انتخاب فایل</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">تصویر سوم</label>
            <?php if ($show['img3'] != ""){
                echo "تصویر قبلی : " . "<img src='$show[img3]' width='45' />";
            }else{
                echo "تصویر قبلی : " . "فاقد تصویر";
            } ?>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="file3" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">انتخاب فایل</label>
                </div>
            </div>
        </div>


        <div class="form-check">
            <input class="form-check-input" id="status" name="data[status]" type="radio" value="1"
            <?php if($show['status'] == '1'){echo " checked "; } ?>
            >
            <label class="form-check-label" for="status">فعال</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" id="status1" name="data[status]" type="radio" value="0"
                <?php if($show['status'] == '0'){echo " checked "; } ?>
            >
            <label class="form-check-label" for="status1">غیرفعال</label>
        </div>

    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <button type="submit" name="btn" class="btn btn-info">ثبت</button>
    </div>
    <!-- /.card-footer -->
</form>