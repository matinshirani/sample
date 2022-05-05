<form class="form-horizontal" method="post" action="index.php?c=procat&a=add">
    <div class="card-body">
        <table class="table table-striped table-valign-middle">

            <thead>
            <tr>
                <th>عنوان</th>
                <th>تصویر</th>
                <th>ویرایش</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($list as $val): ?>
            <tr>
                <td><?php echo $val['title']; ?></td>

                <td><img src="<?php echo $val['image']; ?>" class="img-circle img-size-32 mr-2" /></td>

                <td><a href = "index.php?c=features&a=edit&id=<?php echo $val['id']; ?>"><img src="view/public/dist/img/edit.png" alt="edit icon" class="img-circle img-size-32 mr-2"></a></td>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</form>