<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .div-one{
            height: auto;
            width: 60%;
            margin: 0 auto;
            background-color: red;
            color: white;
            font-size: 30px;
            text-align: center;
            padding: 30px;
        }
    </style>
</head>
<body>
    <div class="div-one">
        <h4>Congratulation {{$value['name']}}, your Enroll submit successfully.
            You may see your enroll status after Login
        </h4>
        <h5>Your login credential is given bellow:</h5>
        <p>login url: <a href="{{$value['login_url']}}" target="_blank">Click For Login</a></p>
        <p>Email: {{$value['email']}}</p>
        <p>Password: {{$value['password']}}</p>
        <hr/>
        <p>Thank You</p>

    </div>

</body>
</html>
