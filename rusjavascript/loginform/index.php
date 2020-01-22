<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Animated Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="page-wrap">
        <div class="left-panel">
            <div class="pic1">
                <img src="pics/pic1.jpg" alt="pic1" class="image" />
            </div>
            <h2>Dream House</h2>
        </div>
        <div class="right-panel">
            <h1>
                <strong>Welcome, Huuman!</strong>
            </h1>
            <form class="animated-form">
                <h3>Login to your account</h3>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" class="username" />
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" class="password" />
                </div>
                <div class="form-group flex-end">
                    <input type="submit" value="LOGIN" class="button" />
                </div>
                <div class="lost-password">
                    <a href="#" class="link">Forgot your password?</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>