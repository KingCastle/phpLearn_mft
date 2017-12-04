<?php include "header.php" ?>

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
                                    نام
                                </th>
                                <th>
                                    تاریخ انتشار
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

                            <tr>
                                <td>

                                    <input type="checkbox" value="">
                                </td>
                                <td class="col-md-3">
                                    لورم ایپسوم متن ساختگی با تولید سادگی
                                </td>
                                <td class="col-md-1">
                                    <a href="#"> حسین حیاتی</a>
                                </td>
                                <td class="col-md-2">
                                    12 مرداد 1371
                                </td>
                                <td class="col-md-1">
                                    <a href="#"> دسته بندی نشده</a>
                                </td>

                                <td class="col-md-4">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. چاپگرها و متون بلکه
                                </td>
                                <td class="col-md-1">
                                    <img class="img-responsive img-thumbnail" src="Images/default-50x50.gif">
                                </td>
                                <td class="col-md-1">


                                    <span class="label label-success">منتشر شده</span>


                                </td>
                                <th>
                                    <a class="btn btn-info btn-sm glyphicon glyphicon-zoom-in"
                                       href="@Url.Action(MVC.Article.ArticleDetail(item.Id,item.NewsTitle))"></a>
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

                            <tr>
                                <td>

                                    <input type="checkbox" value="">
                                </td>
                                <td class="col-md-3">
                                    لورم ایپسوم متن ساختگی با تولید سادگی
                                </td>
                                <td class="col-md-1">
                                    <a href="#"> حسین حیاتی</a>
                                </td>
                                <td class="col-md-2">
                                    12 مرداد 1371
                                </td>
                                <td class="col-md-1">
                                    <a href="#"> دسته بندی نشده</a>
                                </td>

                                <td class="col-md-4">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. چاپگرها و متون بلکه
                                </td>
                                <td class="col-md-1">
                                    <img class="img-responsive img-thumbnail" src="Images/default-50x50.gif">
                                </td>
                                <td class="col-md-1">


                                    <span class="label label-success">منتشر شده</span>


                                </td>
                                <th>
                                    <a class="btn btn-info btn-sm glyphicon glyphicon-zoom-in"
                                       href="@Url.Action(MVC.Article.ArticleDetail(item.Id,item.NewsTitle))"></a>
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
                            <tr>
                                <td>

                                    <input type="checkbox" value="">
                                </td>
                                <td class="col-md-3">
                                    لورم ایپسوم متن ساختگی با تولید سادگی
                                </td>
                                <td class="col-md-1">
                                    <a href="#"> حسین حیاتی</a>
                                </td>
                                <td class="col-md-2">
                                    12 مرداد 1371
                                </td>
                                <td class="col-md-1">
                                    <a href="#"> دسته بندی نشده</a>
                                </td>

                                <td class="col-md-4">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. چاپگرها و متون بلکه
                                </td>
                                <td class="col-md-1">
                                    <img class="img-responsive img-thumbnail" src="Images/default-50x50.gif">
                                </td>
                                <td class="col-md-1">


                                    <span class="label label-success">منتشر شده</span>


                                </td>
                                <th>
                                    <a class="btn btn-info btn-sm glyphicon glyphicon-zoom-in"
                                       href="@Url.Action(MVC.Article.ArticleDetail(item.Id,item.NewsTitle))"></a>
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
                            <tr>
                                <td>

                                    <input type="checkbox" value="">
                                </td>
                                <td class="col-md-3">
                                    لورم ایپسوم متن ساختگی با تولید سادگی
                                </td>
                                <td class="col-md-1">
                                    <a href="#"> حسین حیاتی</a>
                                </td>
                                <td class="col-md-2">
                                    12 مرداد 1371
                                </td>
                                <td class="col-md-1">
                                    <a href="#"> دسته بندی نشده</a>
                                </td>

                                <td class="col-md-4">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. چاپگرها و متون بلکه
                                </td>
                                <td class="col-md-1">
                                    <img class="img-responsive img-thumbnail" src="Images/default-50x50.gif">
                                </td>
                                <td class="col-md-1">


                                    <span class="label label-success">منتشر شده</span>


                                </td>
                                <th>
                                    <a class="btn btn-info btn-sm glyphicon glyphicon-zoom-in"
                                       href="@Url.Action(MVC.Article.ArticleDetail(item.Id,item.NewsTitle))"></a>
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
<?php include "footer.php"; ?>