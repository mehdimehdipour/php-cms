<?php include_once 'header.php'?>

<br>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-12">


            <div class="post-single">
                <div class="post-title-single"><h1>دوره آموزش صفرتاصد php مناسب بازارکار</h1>
                    <div class="clearfix"></div>
                    <div class="entry-meta">
                        <div class="view">
                            دسته بندی :
                            <ul class="post-categories">
                                <li><a href="" rel="category tag"></a></li>
                            </ul>
                        </div>

                        <div class="view"><i class="fa fa-comment"></i>
                            منتشر شده در :
                        </div>
                        <div class="view"><i class="fa fa-user"></i><span> نویسنده : </span>
                        </div>
                        <div class="view"><i class="fa fa-user"></i><span> آیدی مقاله : </span>
                        </div>
                    </div>

                </div>


                <div class="clearfix"></div>
                <div class="thumb-single-product"><img src="img/default.jpg" class="attachment-medium size-medium wp-post-image" alt=""></div>

                <div class="post-txt-single">
                    <p>

                        آموزش طراحی سایت با bootstrap
                        <br>
                        “سرعت بخشیدن کار” – “عدم محدودیت در استفاده از المان های جی کوئری” – “صرفه جویی در وقت و انرژی”
                        – “طراحی ریسپانسیو استاندارد بدون حرف و حدیث” – “ارتقاء سطح فنی شما” و… امتیازات مثبتی هستند که
                        با یادگیری بوت استرپ نصیب شما میشود. بنابراین طراحی سایت با بوت استرپ قطعا یکی از لذت بخش ترین
                        طراحی های شما خواهد
                        <br>
                        <br>
                        چرا باید بوت استرپ را یادبگیرید؟
                        <br>
                        تصور کنید برای طراحی یک سایت ریسپانسیو که نیاز به المان هایی مثل (اسلایدر – تب منو – مدال باکس –
                        آکاردئونی – منوزیرمنو – پروگرس بار و… ) تنها یک روز فرصت داشته باشید در غیر اینصورت مشتری را از
                        دست میدهید چه میکنید؟
                        <br><br><br><br>
                        بهترین راه استفاده از فریم ورک محبوب بوت استرپ هست تا بتوانید زیباترین سایت ریسپانسیو را در کمتر
                        از یک روز بدون هیچ دغدغه و نگرانی طراحی کنید.
                        در ابتدای فیلم آموزش بوت استرپ به معرفی، روال کار و نحوه عملکرد بوت استرپ در طراحی ریسپانسیو
                        میپردازیم و با مفهوم گرید بندی بوت استرپ بصورت کامل آشنا میشوید
                        <br><br>
                        سپس به سراغ کلاس ها و کامپوننت های جاوااسکریپت مثل اسلایدر – تب منو – منودراپ دون – مودال باکس –
                        پروگرس بار – منوآکاردئونی – دکمه های مختلف – لیبل و … میرویم و نحوه استفاده از هریک را بصورت
                        تمرین عملی میاموزیم.
                        <br><br>
                        پس از تسلط و درک کامل از نحوه کار با بوت استرپ ، فاز بعدی آموزش را آغاز میکنیم و یک سایت شرکتی
                        زیبا و مدرن با بوت استرپ بصورت پروژه محور طراحی میکنیم.


                    </p>
                </div>
            </div>

            <div class="box-comment">
                <h3>نظر خود را در رابطه با این مقاله وارد کنید</h3>
                <h3>برای ثبت نظر ابتدا باید
                    <a class="btn btn-warning" href="#">وارد شوید</a>
                    یا
                    <a class="btn btn-primary" href="#"> ثبت نام کنید </a>
                    کنید
                </h3>

                <?php


            ?>


                <div class="comment">
                    <img src="img/user.png">
                    <h5>رضاحیدری</h5>
                    <p>متن کامنت</p>
                </div>


                <div class="clearfix"></div>
                <br>
                <br>
                <form action="/comment-post" method="post">
                    <span>متن نظر شما</span>
                    <textarea name="text"></textarea>
                    <input type="hidden" name="article_id" value="{{$single->id}}">
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <input type="hidden" name="user_name" value="{{Auth::user()->name}}">
                    <input type="submit" class="btn btn-success" value="ثبت نظر">
                </form>
            </div>
        </div>
    </div>
</div>

<br>
<br>
<?php include_once 'footer.php';?>