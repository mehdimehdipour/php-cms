<?php include_once 'header.php'?>

<br>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-12">


            <div class="post-single">
                <div class="post-title-single"><h1>تماس با ما</h1></div>

                <br><br><br>
                <div class="col-md-8 post-txt-single">
                    <form method="post">
                        نام و نام خانوادگی : <br>
                        <input type="text" name="username" class="form-control" required><br>
                        ایمیل : <br>
                        <input type="password" name="password" class="form-control" required><br>
                        موضوع پیغام : <br>
                        <input type="email" name="email" class="form-control" required><br>

                        متن پیغام : <br>
                        <textarea name="content" class="form-control" rows="12"></textarea>
                        <br>

                        <input type="submit" name="send" value="ارسال" class="btn btn-primary">
                    </form>
                    <br>
                </div>
            </div>

        </div>
    </div>
</div>

    <br>
    <br>

<?php include_once 'footer.php';?>