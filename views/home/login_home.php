<?php

// use yii;
use app\assets\AppAsset;
AppAsset::register($this);

// views/home/login_home.php
// echo "This is the Home Page";
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>

</head>
<body>
    <div class="container">
        <!-- ส่วนซ้าย -->
        <div class="left-section">
            <!-- ใส่ข้อมูลหรือภาพเพิ่มเติมได้ -->
        </div>
        <!-- ส่วนขวา -->
        <div class="right-section">
            <div class="form-container">
                <span class="arcticons--jobbkk"></span>
                <h3>เข้าสู่ระบบ</h3>
                <form action="login.php" method="POST">
                    <input type="text" name="username" placeholder="Enter your name"> <br>
                    password: <input type="password" name="password" placeholder="Enter your password"> <br>
                    <button type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<?php $this->endPage() ?>