<form class="form-horizontal" method="post" action="index.php?c=procat&a=add">
    <div class="card-body">
        <table class="table table-striped table-valign-middle">
            <thead>
            <tr>
                <th>عنوان</th>
                <th>لینک</th>
                <th>وضعیت</th>
                <th>سرگروه</th>
                <th>ویرایش</th>
                <th>حذف</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($list as $val): ?>
            <tr>
                <td><?php echo $val['title']; ?></td>
                <td><?php echo "index.php?c=product&a=category&id=$val[id]" ?></td>
                <td><?php if ($val['status'] == '1'){
                        echo "فعال";
                    }elseif ($val['status'] == '0'){
                        echo "غیر فعال";
                    } ?></td>
                <td><?php if ($val['chid'] == '0'){
                        echo "سرگروه";}else{
                        $parent=$procat->parent_procat($val['chid']);
                        echo $parent;
                    }
                    ?></td>
                <td><a href = "index.php?c=procat&a=edit&id=<?php echo $val['id']; ?>"><img src="view/public/dist/img/edit.png" alt="edit icon" class="img-circle img-size-32 mr-2"></a></td>
                <td><a href = "index.php?c=procat&a=delete&id=<?php echo $val['id']; ?>"><img src="view/public/dist/img/delete.png" alt="delete icon" class="img-circle img-size-32 mr-2"></a></td>
            <tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</form>