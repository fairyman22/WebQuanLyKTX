<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT ?>/public/assets/home/css/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>KTX - Đăng Nhập</title>
</head>

<body>
    <form action="checkuser" method="post">
        <div class="wrapper">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" name="username" placeholder="Username" required>
                <i class='bx bxs-user'></i>

            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>

            </div>
            <!-- <div class="remember-forgot">
                <label for=""> <input type="checkbox">Remember me</label>
                <a href="#">Forgot password</a>
            </div> -->
            <button type="submit" class="btn">Login</button>
            <div class="register-link">
                <p>Chưa có tài khoản? <a href="<?php echo _WEB_ROOT ?>/home">Quay lại trang chủ</a></p>
            </div>
        </div>
    </form>

</body>

</html>