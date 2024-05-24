<?php include_once 'header.php'?>
<br>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 post-single">

            <div class="post-title-single"><h1>ورود به سایت</h1></div>
            <br><br><br>
            <div class="post-txt-single">
                <form method="post">
                    نام کاربری : <br>
                    <input type="text" name="username" class="form-control" required><br>
                    رمز عبور : <br>
                    <input type="text" name="password" class="form-control" required><br>

                    <div class="custom-checkbox fr">
                        <input type="checkbox" name="remember" value="wordpress" class="custom-control-input" id="wp">
                        <label class="custom-control-label" for="wp">مرابه خاطر بسپار</label>
                    </div>
                    <br>
                    <hr>

                    <input type="submit" name="send" value="ورود" class="btn btn-primary">
                </form>
                <br>
            </div>
        </div>

    </div>
</div>

<br>
<br>
<?php include_once 'footer.php';?>