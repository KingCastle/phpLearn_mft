<?php ob_start();

user_access('article');


if (!isset($_REQUEST['id'])) {
    if (isset($_POST['insert'])) {
        $title = $_POST['title'];
        $summary = $_POST['summary'];
        $text = $_POST['text'];
        $time = date("Y-m-d h:m:i");
        if (!empty($title)) {
            $sql = "
        insert into t_news(title,summary,text,create_time)
        VALUES ('$title','$summary','$text','$time')
        ";
            $addnews = mysqli_query($conn, $sql);
            if ($addnews) {
                echo "<script> alert(\"خبر با موفقیت اضافه شد\"); </script>";
                header("Location:?part=news");
            }
        } else {
            echo "لطفا مقادر را پر کنید";
        }
    }


} elseif (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $query = mysqli_query($conn, "select title,summary,text from t_news where id=$id");
    $update = mysqli_fetch_assoc($query);

    if (isset($_POST['update'])) {

        $title = $_POST['title'];
        $summary = $_POST['summary'];
        $text = $_POST['text'];

        $sql = "
        UPDATE t_news
            SET title ='$title' 
            ,summary= '$summary'
            ,text= '$text'
          WHERE id = $id;
        ";
        $result=mysqli_query($conn, $sql);

        if($result){
            echo "<script> alert('ویرایش انجام شد'); </script>";
            header("Location:?part=news");
        }else{
            echo "در هنگام ویرایش خطا رخ داده است";
        }
    }
}

?>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box box-info">
                    <div class="box-header with-border ui-sortable-handle" style="cursor: move;">
                        <h3 class="box-title">اخبار</h3>
                        <div class="box-tools pull-right">

                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">


                            <form action="" method="post" data-parsley-validate=""
                                  class="form-horizontal form-label-left"
                                  novalidate="">

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">عنوان
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input name="title" required="required"
                                               class="form-control col-md-7 col-xs-12" type="text"
                                               value="<?php echo (!empty($update['title'])) ? $update['title'] : @$_POST['title'] ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">خلاصه
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea class="form-control" name="summary"
                                                  data-parsley-trigger="keyup" data-parsley-minlength="20"
                                                  data-parsley-maxlength="100"
                                                  data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                                                  data-parsley-validation-threshold="10"><?php echo (!empty($update['summary'])) ? $update['summary'] : @$_POST['summary'] ?></textarea>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">متن
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea class="form-control" name="text"
                                                  data-parsley-trigger="keyup" data-parsley-minlength="20"
                                                  data-parsley-maxlength="100"
                                                  data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                                                  data-parsley-validation-threshold="10"><?php echo (!empty($update['text'])) ? $update['text'] : @$_POST['text'] ?></textarea>

                                    </div>
                                </div>


                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <?php if (@$_REQUEST['id']) {
                                            ?>
                                            <button type="submit" name="update" class="btn btn-success">ویرایش</button>
                                        <?php } else { ?>
                                            <button type="submit" name="insert" class="btn btn-success">ثبت</button>
                                        <?php } ?>
                                        <button class="btn btn-primary" type="button">انصراف</button>
                                        <button class="btn btn-primary" type="reset">پاک کردن فرم</button>
                                    </div>
                                </div>

                            </form>


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