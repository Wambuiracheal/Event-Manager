<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login page</title>
</head>
<style>
    *{
        background-color: background-color: #262626;;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    .logo{
        display: flex;
        justify-content: center;
        align-items: center;
        width: 20px;
        height: 20px;
    }


</style>
<body>
<div class="container">
    <li class="logo"><img src="/images/logo.png"></li>
    <form action="welcome.php" method="post">
        E-mail: <input type="text" name="email"><br>
        Name: <input type="text" name="name"><br>
        <input type="submit">
    </form>
</div>
</body>
</html>