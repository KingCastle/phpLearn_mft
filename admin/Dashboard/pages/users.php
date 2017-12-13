<?php ob_start();






if (isset($_POST['delete'])) {

    $id = $_POST['delete'];
    mysqli_query($conn, "DELETE FROM t_news
WHERE id=$id");

}


?>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box box-info">
                    <div class="box-header with-border ui-sortable-handle" style="cursor: move;">
                        <h3 class="box-title">کاربران</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">


                            <table class="table no-margin">
                                <thead>
                                <tr>
                                    <th>

                                        <input class="ckbox" type="checkbox" value="">

                                    </th>
                                    <th>
                                        نام و نام خانوادگی
                                    </th>
                                    <th>
                                        نام کاربری
                                    </th>


                                    <th>نمایش</th>
                                    <th>ویرایش</th>
                                    <th>حذف</th>
                                </tr>
                                </thead>
                                <tbody>


                                <?php

                                $sql = "
                              select fullname,username from t_user
                                ";
                                $query = mysqli_query($conn, $sql);

                                $fetchAll = mysqli_fetch_all($query, MYSQLI_ASSOC);

                                foreach ($fetchAll as $item) {
                                    ?>
                                    <tr>
                                        <td>

                                            <input type="checkbox" value="">
                                        </td>
                                        <td class="col-md-3">
                                            <?= $item['fullname'] ?>
                                        </td>
                                        <td class="col-md-1">
                                            <a href="#">    <?= $item['username'] ?></a>
                                        </td>

                                        <td class="col-md-1">


                                        </td>
                                        <th>


                                        </th>
                                        <th>
                                            <a class="btn btn-info btn-sm glyphicon glyphicon-edit"
                                               href="?part=newsform&id=<?= $item['id'] ?>"></a>
                                        </th>
                                        <th>
                                            <form action="" method="post">
                                                <button type="submit" name="delete" value="<?= $item['id'] ?>"
                                                        class="btn btn-danger btn-sm">×
                                                </button>
                                            </form>
                                        </th>
                                    </tr>
                                <?php } ?>

                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    </div>
    </div>
<?php $content_page->text = ob_get_contents();
ob_end_clean(); ?>