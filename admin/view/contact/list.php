<form class="form-horizontal" method="post" action="index.php?c=procat&a=add">
    <div class="card-body">
        <table class="table table-striped table-valign-middle">
            <thead>
            <tr>
                <th>نام</th>
                <th>موضوع</th>
                <th>ایمیل</th>
                <th>جزییات</th>
                <th>حذف</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($list as $val): ?>
            <tr>
                <td><?php echo $val['name']; ?></td>
                <td><?php echo $val['subject']; ?></td>
                <td><?php echo $val['email']; ?></td>
                <td><a href = "index.php?c=contact&a=detail&id=<?php echo $val['id']; ?>"><img src="view/public/dist/img/edit.png" alt="edit icon" class="img-circle img-size-32 mr-2"></a></td>
                <td><a href = "index.php?c=contact&a=delete&id=<?php echo $val['id']; ?>"><img src="view/public/dist/img/delete.png" alt="delete icon" class="img-circle img-size-32 mr-2"></a></td>
            <tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</form>