<form class="form-horizontal" method="post" action="index.php?c=procat&a=add">
    <div class="card-body">
        <table class="table table-striped table-valign-middle">

            <thead>
            <tr>
                <th>عنوان</th>
                <th>تعداد</th>
                <th>قیمت</th>
                <th>متن</th>
                <th>دسته بندی</th>
                <th>وضعیت</th>
                <th>تصویر 1</th>
                <th>تصویر 2</th>
                <th>تصویر 3</th>
                <th>ویرایش</th>
                <th>حذف</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($listproduct as $val): ?>
            <tr>
                <td><?php echo $val['title']; ?></td>
                <td><?php echo $val['count']; ?></td>
                <td><?php echo $val['price']; ?></td>
                <td><?php echo $val['text']; ?></td>
                <td><?php
                    $procat=$product->procat($val['procat']);
                    echo $procat; ?></td>
                <td><?php if ($val['status'] == '1'){
                        echo "فعال";
                    }elseif ($val['status'] == '0'){
                        echo "غیر فعال";
                    } ?></td>
                <td><img src="<?php echo $val['img1']; ?>" class="img-circle img-size-32 mr-2" /></td>
                <td><img src="<?php echo $val['img2']; ?>" class="img-circle img-size-32 mr-2" /></td>
                <td><img src="<?php echo $val['img3']; ?>" class="img-circle img-size-32 mr-2" /></td>

                <td><a href = "index.php?c=product&a=edit&id=<?php echo $val['id']; ?>"><img src="view/public/dist/img/edit.png" alt="edit icon" class="img-circle img-size-32 mr-2"></a></td>
                <td><a href = "index.php?c=product&a=delete&id=<?php echo $val['id']; ?>"><img src="view/public/dist/img/delete.png" alt="delete icon" class="img-circle img-size-32 mr-2"></a></td>
            <tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</form>