<form class="form-horizontal" method="post" action="index.php?c=mainproduct&a=edit">        

        <div class="col-md-6">
            <div class="form-group">
                <label>انتخاب محصول یک</label>
                <select class="form-control select2" name="data[pro1]" style="width: 100%;">
                    <?php
                    foreach ($all as $key => $val):
                        ?>
                        <option value="<?php echo $val['id']; ?>" <?php if ($val['id'] == $show[1]){echo " selected "; } ?>><?php echo $val['title']; ?></option>
                    <?php
                    endforeach;
                    ?>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>انتخاب محصول دو</label>
                <select class="form-control select2" name="data[pro2]" style="width: 100%;">
                    <?php
                    foreach ($all as $key => $val):
                        ?>
                        <option value="<?php echo $val['id']; ?>" <?php if ($val['id'] == $show[2]){echo " selected "; } ?> ><?php echo $val['title']; ?></option>
                    <?php
                    endforeach;
                    ?>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>انتخاب محصول سه</label>
                <select class="form-control select2" name="data[pro3]" style="width: 100%;">
                    <?php
                    foreach ($all as $key => $val):
                        ?>
                        <option value="<?php echo $val['id']; ?>" <?php if ($val['id'] == $show[3]){echo " selected "; } ?> ><?php echo $val['title']; ?></option>
                    <?php
                    endforeach;
                    ?>
                </select>
            </div>
        </div>
        
        
        

        <div class="card-footer">
            <button type="submit" name="btn" class="btn btn-info">ویرایش</button>
        </div>
        
    </div>
    
</form>