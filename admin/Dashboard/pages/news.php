<?php ob_start(); ?>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box box-info">
                    <div class="box-header with-border ui-sortable-handle" style="cursor: move;">
                        <h3 class="box-title">آخرین مطالب</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <a class="btn btn-primary" href="?part=newsform">ایجاد خبر جدید</a>

                            <table class="table no-margin">
                                <thead>
                                <tr>
                                    <th>

                                        <input class="ckbox" type="checkbox" value="">

                                    </th>
                                    <th>
                                        عنوان
                                    </th>
                                    <th>
                                        نویسنده
                                    </th>
                                    <th>
                                        تاریخ ایجاد
                                    </th>
                                    <th>

                                        دسته بندی
                                    </th>
                                    <th>
                                        چکیده
                                    </th>
                                    <th>
                                        عکس
                                    </th>
                                    <th>

                                        وضعیت
                                    </th>
                                    <th>نمایش</th>
                                    <th>ویرایش</th>
                                    <th>حذف</th>
                                </tr>
                                </thead>
                                <tbody>


                                <?php

                                $sql = "
                                SELECT
                                t_news.*,
                                t_category.title as 'category',
                                t_user.fullname as 'author'
                                FROM
                                t_news
                                INNER JOIN t_category ON t_news.id_cat = t_category.id
                                INNER JOIN t_user ON t_news.user_id = t_user.id
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
                                            <?= $item['title'] ?>
                                        </td>
                                        <td class="col-md-1">
                                            <a href="#">    <?= $item['author'] ?></a>
                                        </td>
                                        <td class="col-md-2">
                                            <?= m_date($item['create_time']) ?>
                                        </td>
                                        <td class="col-md-1">
                                            <a href="#"><?= $item['category'] ?></a>
                                        </td>

                                        <td class="col-md-4">
                                            <?= m_summary($item['summary'], 100) ?>
                                        </td>
                                        <td class="col-md-1">
                                            <img class="img-responsive img-thumbnail" src="Images/default-50x50.gif">
                                        </td>
                                        <td class="col-md-1">


                                            <span class="label label-success"><?php echo ($item['delete']) ? 'منتشر نشده' : 'منتشر شده' ?></span>


                                        </td>
                                        <th>
                                            <?php if ($item['delete'] == '0') { ?>
                                                <a class="btn btn-info btn-sm glyphicon glyphicon-zoom-in"
                                                   target="_blank"
                                                   href="../../pages/news_page.php?id=<?= $item['id'] ?>"></a>
                                            <?php } ?>

                                        </th>
                                        <th>
                                            <a class="btn btn-info btn-sm glyphicon glyphicon-edit"
                                               href="@Url.Action(MVC.CpAdmin.News.Edit(item.Id))"></a>
                                        </th>
                                        <th>
                                            <a class="btn btn-danger btn-sm"
                                               href="@Url.Action(MVC.CpAdmin.News.Delete(item.Id))">×</a>
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