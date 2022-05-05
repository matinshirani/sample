<form class="form-horizontal" method="post" action="index.php?c=procat&a=add">
    <div class="card-body">
        <table class="table table-striped table-valign-middle">

            <thead>
            <tr>
                <th>نام</th>
                <th>نام خانوادگی</th>
                <th>ایمیل</th>
                <th>نوع کاربر</th>
                <th>ویرایش</th>
                <th>حذف</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($list as $val): ?>
            <tr>
                <td><?php echo $val['name']; ?></td>
                <td><?php echo $val['lastname']; ?></td>
                <td><?php echo $val['email']; ?></td>
                <td><?php if ($val['admin'] == '1'){
                        echo "ادمین";
                    }elseif ($val['admin'] == '0'){
                        echo "معمولی";
                    } ?></td>
                <td><a href = "index.php?c=users&a=edit&id=<?php echo $val['id']; ?>"><img src="view/public/dist/img/edit.png" alt="edit icon" class="img-circle img-size-32 mr-2"></a></td>
                <td><a href = "index.php?c=users&a=delete&id=<?php echo $val['id']; ?>"><img src="view/public/dist/img/delete.png" alt="delete icon" class="img-circle img-size-32 mr-2"></a></td>
            <tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</form>