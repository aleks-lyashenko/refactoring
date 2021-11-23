<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<style>

    .container {
        max-width: 1400px;
        margin: 0 auto;
        text-align: center;
        /*padding: 100px 0;*/
        /*max-height: 100vh;*/
    }
    img {
        border-radius: 50%;
    }
    h1 {
        font-size: 3rem;
        padding: 5%;
        font-weight: bolder;
    }
    form {
        padding: 5%;
    }
    input {
        display: block;
        margin: 0 auto;
        width: 400px;
        height: 40px;
        margin-bottom: 50px;
        border: 0px;
        border-bottom: 1px solid #718096;
        outline: none;
        font-size: 1.4rem;
    }
    input:focus {
        border-bottom: 1px solid #57b846;
    }
    ul {
        list-style: none;
        padding: 0;
    }
    li {
        padding-bottom: 10px;
    }
    button {
        display: block;
        margin: 0 auto;
        width: 400px;
        height: 50px;
        background-color: #57b846;
        color: #fff;
        font-size: 1.2rem;
        text-transform: uppercase;
        border-radius: 20px;
        border: none;
        cursor: pointer;
        box-shadow: 0 10px 30px 0px rgb(87 184 70);
    }
    button:hover {
        background-color: rgb(59, 59, 59);
    }
    a {
        color: #57b846;
    }
    * {
        /*border: 1px solid #000;*/
    }
</style>
<body>
    <div class="container">
        <h1>Welcome</h1>
        <img src="/public/img/avatar-01.jpg" alt="">
        <form action="{{route('login')}}" method="post">
            @csrf
            <input type="text" name="name" placeholder="Username">
            <input type="email" name="email" placeholder="Password">
            <button>Login</button>
        </form>

        <ul>
            <li>Forgot <a href="">Username / Password?</a></li>
            <li>Don’t have an account?<a href="">Sign up</a></li>
        </ul>
    </div>
</body>
</html>
