<form class="form-horizontal" method="post" action="index.php?c=procat&a=add">
    <div class="card-body">

        <p>نکته : هنگام استفاده از لینک حتما عدد جلوی "id" را با فونت انگلیسی وارد کنید</p>
        <table class="table table-striped table-valign-middle">

            <thead>
            <tr>
                <th>عنوان</th>
                <th>کلمات کلیدی</th>
                <th>توضیحات</th>
                <th> محتوای صفحه</th>
                <th>لینک صفحه</th>
                <th>ویرایش</th>
                <th>حذف</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($list as $val): ?>
            <tr>
                <td><?php echo $val['title']; ?></td>
                <td><?php echo $val['keywords']; ?></td>
                <td><?php echo $val['description']; ?></td>
                <td><?php echo $val['body']; ?></td>
                <td><?php echo "index.php?c=page&a=page&id=" . $val['id']; ?></td>

                <td><a href = "index.php?c=page&a=edit&id=<?php echo $val['id']; ?>"><img src="view/public/dist/img/edit.png" alt="edit icon" class="img-circle img-size-32 mr-2"></a></td>
                <td><a href = "index.php?c=page&a=delete&id=<?php echo $val['id']; ?>"><img src="view/public/dist/img/delete.png" alt="delete icon" class="img-circle img-size-32 mr-2"></a></td>
            <tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</form>