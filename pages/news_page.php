<?php include "../header.php";

$id = $_GET['id'];

$sql="
select t_news.*,t_user.fullname as author from t_news 
	INNER JOIN t_user ON t_news.user_id = t_user.id
	 WHERE t_news.id=$id 
";


$query = mysqli_query($conn, $sql);

$result = mysqli_fetch_assoc($query);



mysqli_query($conn,"UPDATE t_news set visit=visit+1 WHERE id=$id ")
//--------------------------------------------------

//$visit=+1;
//mysqli_query($conn,"update t_news set visit=$visit WHERE id=$id");

?>

    <!-- Title Category -->
    <div class="title-category">
        <span>دسته : </span>
        <span class="categoryname">تقویم رو میزی</span>
    </div>
    <div class="Line first"></div>

    <section class="clearfix">
        <!--SideBar-->
        <aside class="right-category">
            <div class="list-category list-tip">
                <ul>
                    <li>
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 477.175 477.175" style="enable-background:new 0 0 477.175 477.175;"
                             xml:space="preserve">
      <path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
		c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"/>

        </svg>
                        <a href="tips.php">تقویم رومیزی اروپایی</a></li>
                    <li data-has-submenu="1">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 477.175 477.175" style="enable-background:new 0 0 477.175 477.175;"
                             xml:space="preserve">
      <path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
		c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"/>

        </svg>
                        <a href="tips.php">تقویم گرافیکی</a>
                        <ul class="sub-menu">
                            <li><a href="tips.php">تقویم گرافیکی 1</a></li>
                            <li><a href="tips.php">تقویم گرافیکی 2</a></li>
                            <li><a href="tips.php">تقویم گرافیکی 3</a></li>
                        </ul>
                    </li>
                    <li>
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 477.175 477.175" style="enable-background:new 0 0 477.175 477.175;"
                             xml:space="preserve">
      <path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
		c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"/>

        </svg>
                        <a href="tips.php">سررسید وزیری</a></li>
                    <li>
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 477.175 477.175" style="enable-background:new 0 0 477.175 477.175;"
                             xml:space="preserve">
      <path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
		c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"/>

        </svg>
                        <a href="tips.php">تقویم مدیران</a></li>
                    <li>
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 477.175 477.175" style="enable-background:new 0 0 477.175 477.175;"
                             xml:space="preserve">
      <path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
		c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"/>

    </svg>
                        <a href="tips.php">تقویم جیبی</a></li>
                </ul>
            </div>

        </aside>
        <!--content-->
        <div class="Content-Category">
            <div class="alltips">

                <div class="tip-item news-item clearfix">
                    <div class="tip-image clearfix">
                        <img src="../img/slide-2.jpg" alt="tip">
                    </div>
                    <div class="tip-text clearfix">
                        <h1><?php echo $result['title']; ?></h1>
                        <p style="color: brown">خلاصه : <?php echo $result['summary']; ?></p>
                        <br> <hr> <br>
                        <p><?php echo $result['text']; ?></p>

                        <div style="color: red;">نویسنده : <?php echo  $result['author'] ?></div>
                    </div>
                    <div class="tip-elements clearfix">
                        <div class="visitors">
      <span>
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1"
           x="0px" y="0px" viewBox="0 0 488.85 488.85" style="enable-background:new 0 0 488.85 488.85;"
           xml:space="preserve">
	    <path d="M244.425,98.725c-93.4,0-178.1,51.1-240.6,134.1c-5.1,6.8-5.1,16.3,0,23.1c62.5,83.1,147.2,134.2,240.6,134.2   s178.1-51.1,240.6-134.1c5.1-6.8,5.1-16.3,0-23.1C422.525,149.825,337.825,98.725,244.425,98.725z M251.125,347.025   c-62,3.9-113.2-47.2-109.3-109.3c3.2-51.2,44.7-92.7,95.9-95.9c62-3.9,113.2,47.2,109.3,109.3   C343.725,302.225,302.225,343.725,251.125,347.025z M248.025,299.625c-33.4,2.1-61-25.4-58.8-58.8c1.7-27.6,24.1-49.9,51.7-51.7   c33.4-2.1,61,25.4,58.8,58.8C297.925,275.625,275.525,297.925,248.025,299.625z"/>
      </svg>
      </span>
                            <span>تعداد بازدید : </span>
                            <span>5</span>
                        </div>
                        <div class="date">
      <span>
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
           viewBox="0 0 129 129" enable-background="new 0 0 129 129">
      <path d="m10.5,118.1h107.9c2.3,0 4.1-1.8 4.1-4.1v-91.5c0-2.3-1.8-4.1-4.1-4.1h-20.3v-3.5c0-2.3-1.8-4.1-4.1-4.1-2.3,0-4.1,1.8-4.1,4.1v3.5h-50.2v-3.5c0-2.3-1.8-4.1-4.1-4.1-2.3,0-4.1,1.8-4.1,4.1v3.5h-21c-2.3,0-4.1,1.8-4.1,4.1v91.6c0,2.2 1.9,4 4.1,4zm4.1-91.5h16.9v2.2c0,2.3 1.8,4.1 4.1,4.1 2.3,0 4.1-1.8 4.1-4.1v-2.2h50.2v2.2c0,2.3 1.8,4.1 4.1,4.1 2.3,0 4.1-1.8 4.1-4.1v-2.2h16.3v10.6h-99.8v-10.6zm0,18.8h99.7v64.6h-99.7v-64.6z"
            fill="#FFFFFF"/>
      <path d="m94,64.2h-59c-2.3,0-4.1,1.8-4.1,4.1 0,2.3 1.8,4.1 4.1,4.1h59c2.3,0 4.1-1.8 4.1-4.1 0-2.3-1.8-4.1-4.1-4.1z"
            fill="#FFFFFF"/>
      <path d="m64.5,84h-29.5c-2.3,0-4.1,1.8-4.1,4.1 0,2.3 1.8,4.1 4.1,4.1h29.5c2.3,0 4.1-1.8 4.1-4.1 0-2.3-1.8-4.1-4.1-4.1z"
            fill="#FFFFFF"/>
      </svg>
      </span>



                            <span>1395/6/28</span>
                        </div>

                    </div>
                </div>


                <!--  -->


            </div>

        </div>

    </section>

    <div class="Line"></div>

    <!-- Footer -->
<?php include '../footer.php'; ?>