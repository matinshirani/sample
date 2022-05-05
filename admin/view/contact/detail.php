<form class="form-contact contact_form" >
    <div class="card-body">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">نام</label>

            <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php echo $detail['name']; ?>" id="inputEmail3" >
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">ایمیل</label>

            <div class="col-sm-10">
                <input type="email" class="form-control" value="<?php echo $detail['email']; ?>"  id="inputEmail3" >
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">موضوع</label>

            <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php echo $detail['subject']; ?>" id="inputEmail3" >
            </div>
        </div>
        <div class="form-group" dir="rtl">
            <label for="inputEmail3" class="col-sm-2 control-label">متن</label>
            <textarea class="form-control w-100" id="message" cols="30" rows="9"><?php echo $detail['text']; ?></textarea>
        </div>


    </div>
</form>