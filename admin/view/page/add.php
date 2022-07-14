<form class="form-horizontal" method="post" enctype="multipart/form-data" action="index.php?c=page&a=add">
    <div class="card-body">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">عنوان</label>

            <div class="col-sm-10">
                <input type="text" class="form-control" name="data[title]" id="inputEmail3" placeholder="عنوان را وارد کنید">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">کلمات کلیدی</label>

            <div class="col-sm-10">
                <input type="text" class="form-control" name="data[keywords]" id="inputEmail3" placeholder="کلمات را با , از هم متمایز کنید ...">
            </div>
        </div>


        <div class="form-group">
            <label>توضیحات</label>
            <textarea class="form-control" rows="3" name="data[description]" placeholder="وارد کردن اطلاعات ..."></textarea>
        </div>

        <div class="form-group">
            <label>محتوای صفحه</label>
            <textarea class="form-control" rows="3" name="data[body]" placeholder="وارد کردن اطلاعات ..."></textarea>
        </div>




    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <button type="submit" name="btn" class="btn btn-info">ثبت</button>
    </div>
    <!-- /.card-footer -->
</form>