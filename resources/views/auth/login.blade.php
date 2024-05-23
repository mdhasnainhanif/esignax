<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
    <style>
        .login_bg {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: url("./../assets/images/login1.jpg");
            background-position: center;
            background-size: cover;
        }

        .get_started {
            background: rgb(156, 104, 172);
            background: linear-gradient(90deg, rgba(156, 104, 172, 1) 0%, rgba(37, 90, 169, 1) 100%);
            font-size: 20px;
            font-weight: 600;
            border-radius: 30px;
            padding: 8px 25px 10px 25px;
            text-align: center;
            display: inline-block;
            transition: all 0.3s ease-in-out;
            border: none; 
            color: #fff;
        }

        .login {
            min-width: 38%;
            border: 2px solid rgba(255, 255, 255, .25);
            border-radius: 20px;
            background-color: rgba(255, 255, 255, 0.45);
            box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.25);
            backdrop-filter: blur(15px);
            color: #242424;
        }

        input {
            border-radius: 13px !important;
            padding: 10px 10px !important;
            transition: 0.3s;
        }
        .form-control:focus {
    color: #212529;
    background-color: #fff;
    border-color: #8665ab;
    outline: 0;
    box-shadow: 0 0 0 1px rgb(53 92 170) !important;
}
    </style>
</head>

<body>


    <section class="login_bg">
        <div class="login py-5 px-4">
            <h2 class="mb-4">Login</h2>
            <div>
                <label for="email"><strong>Email</strong></label><br>
                <input placeholder="Email" type="text" name="email" id="email" class="form-control">
            </div>
            <div class="mt-3">
                <label for="password"><strong>Password</strong></label><br>
                <input placeholder="Password" type="password" name="password" id="password" class="form-control">
            </div>
            <div class="mt-3">
                <button class="get_started">Login</button>
            </div>
        </div>
    </section>


</body>

</html>
