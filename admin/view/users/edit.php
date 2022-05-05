

    <!-- form start -->
    <form class="form-horizontal" method="post" action="index.php?c=users&a=edit&id=<?php echo $show['id']; ?>">
        <div class="card-body">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">نام</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" name="data[name]" value="<?php echo $show['name']; ?>" id="inputEmail3" placeholder="نام را وارد کنید">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">نام خانوادگی</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" name="data[lastname]" value="<?php echo $show['lastname']; ?>"  id="inputEmail3" placeholder="نام خانوادگی را وارد کنید">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">ایمیل</label>

                <div class="col-sm-10">
                    <input type="email" class="form-control" name="data[email]" value="<?php echo $show['email']; ?>" id="inputEmail3" placeholder="ایمیل را وارد کنید">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>نوع کاربر</label>
                    <select class="form-control select2" name="data[admin]" style="width: 100%;">
                        <option value="0">  معمولی</option>
                        <option value="1" <?php if ($show['admin'] == '1'){ echo "selected"; }?> >ادمین</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" name="btn" class="btn btn-info">ویرایش</button>
        </div>
        <!-- /.card-footer -->
    </form>
