<form class="form-horizontal" method="post" action="index.php?c=procat&a=edit&id=<?php echo $show['id']?>">
    <div class="card-body">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">عنوان</label>

            <div class="col-sm-10">
                <input type="text" class="form-control" name="data[title]" value="<?php echo $show['title']; ?>" id="inputEmail3" placeholder="عنوان را وارد کنید">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">لینک</label>

            <div class="col-sm-10">
                <input type="text" class="form-control" name="data[url]" value="<?php echo $show['url']; ?>" id="inputEmail3" placeholder="لینک را وارد کنید">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label>انتخاب سرگروه</label>
                <select class="form-control select2" name="data[chid]" style="width: 100%;">
                    <option value="0"> سرگروه</option>
                    <?php
                    foreach ($parentcat as $val):
                        ?>
                        <option value="<?php echo $val['id']; ?>" <?php if ($val['id'] == $show['chid']){ echo " selected "; }?> > <?php echo $val['title']; ?></option>
                    <?php
                    endforeach;
                    ?>
                </select>
            </div>
        </div>
        <div class="form-check">
            <input class="form-check-input" id="status" name="data[status]" type="radio" value="1" <?php if ($show['status'] == '1'){ echo " checked ";} ?> >
            <label class="form-check-label" for="status">فعال</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" id="status1" name="data[status]" type="radio" value="0" <?php if ($show['status'] == '0'){ echo " checked ";} ?> >
            <label class="form-check-label" for="status1">غیرفعال</label>
        </div>

    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <button type="submit" name="btn" class="btn btn-info">ثبت</button>
    </div>
    <!-- /.card-footer -->
</form>