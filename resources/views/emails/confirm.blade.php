<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>注册确认链接</title>
</head>

<body>
    <h1>感谢您在WEIBO APP 注册！</h1>
    <p>
        请点击下面的链接进行注册：
        <a href="{{ route('confirm_email', $user->activation_token) }}">
            {{ route('confirm_email',$user->activation_token) }}
        </a>

    </p>
    <p>
        如果这不是您本人的操作，请忽略。
    </p>
</body>

</html>