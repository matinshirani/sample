<form class="form-horizontal" method="post" enctype="multipart/form-data" action="index.php?c=page&a=edit&id=<?php echo $show['id']; ?>">
    <div class="card-body">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">عنوان</label>

            <div class="col-sm-10">
                <input type="text" class="form-control" name="data[title]" id="inputEmail3" value="<?php echo $show['title']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">کلمات کلیدی</label>

            <div class="col-sm-10">
                <input type="text" class="form-control" name="data[keywords]" value="<?php echo $show['keywords']; ?>" id="inputEmail3" >
            </div>
        </div>


        <div class="form-group">
            <label>توضیحات</label>
            <textarea class="form-control" rows="3" name="data[description]" placeholder="وارد کردن اطلاعات ..."><?php echo $show['description']; ?></textarea>
        </div>

        <div class="form-group">
            <label>محتوای صفحه</label>
            <textarea class="form-control" rows="3" name="data[body]" placeholder="وارد کردن اطلاعات ..."><?php echo $show['body']; ?></textarea>
        </div>




    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <button type="submit" name="btn" class="btn btn-info">ویرایش</button>
    </div>
    <!-- /.card-footer -->
</form>