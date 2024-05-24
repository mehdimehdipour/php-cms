<?php include_once 'header.php'?>
<br>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 post-single">

            <div class="post-title-single"><h1>ثبت نام</h1></div>
            <br><br><br>
            <div class="post-txt-single">
                <form method="post">
                    نام کاربری : <br>
                    <input type="text" name="username" class="form-control" required><br>
                    رمز عبور : <br>
                    <input type="password" name="password" class="form-control" required><br>
                    ایمیل : <br>
                    <input type="email" name="email" class="form-control" required><br>

                    <div class="custom-checkbox fr">
                        <input type="checkbox" name="remember" value="wordpress" class="custom-control-input" id="wp">
                        <label class="custom-control-label" for="wp">مرابه خاطر بسپار</label>
                    </div>
                    <br>
                    <hr>

                    <input type="submit" name="send" value="ثبت نام" class="btn btn-primary">
                </form>
                <br>
            </div>
        </div>

    </div>
</div>

<br>
<br>
<?php include_once 'footer.php';?>