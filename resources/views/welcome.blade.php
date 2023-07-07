<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/0538fc5c28.js" crossorigin="anonymous"></script>
    <title>welcome page</title>
</head>
{{------------------------------style---------------------------------------}}
<style>
body{
    background-image: url('/images/background.jpeg');
    background-position: center;
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;
    opacity: 0.9;
    position: relative;
    height: 100vh;
    width: 100%;
    margin: 0;
    padding: 0;
}

body::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(34, 7, 30, 0.2);
    z-index: -1;
}

.header{
    font-size: 20px;
    color: rgb(232, 243, 252);
    text-align: center;
    padding-top: 100px;
}

.custom-button{
    background-color: rgb(8, 3, 3);
    color: darkmagenta;
    padding: 10px 20px;
    border: round;
    border-radius: 4px;
    cursor: pointer;
}

nav {
    display: flex;
    padding: 0px;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    align-items: right;
    justify-content: space-between;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: space-between;
    margin-left: 10px;
    flex-wrap: wrap;
}

nav ul li {
    display: inline-block;
    text-align: right;
    margin: 10px 20px;
}

nav ul li:first-child {
    margin-right: auto;
}


nav ul li a {
    text-decoration: none;
    color: aliceblue;
    font-size: 22px;
    text-align: right;
}

#navbar {
    transition: top 0.3s ease-in-out;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

#sidemenu {
    display: flex;
    align-items: center;
}

#sidemenu a {
    text-decoration: none;
    color: aliceblue;
    font-size: 23px;
    margin: 0 10px;
}

.navbar-hidden {
    top: -100px;
}

#navbar ul{  
    text-align: right;
}

#navbar ul li.logo {
    width: auto;
    margin-right: auto;
}

#navbar ul li.logo img {
    height: 30px;
    width: auto;
    
}   

.logo{
    margin-right: auto;
    width: 140px;
}

</style>

<body>

{{-------------------------------------------navbar----------------------------------}} 

<div class="header">
    <nav id="navbar">
        <ul id="sidemenu">
            <li class="logo"><img src="/images/logo.png"></li>
            <li><a href="/">Home</a></li>
            <li><a href="/admin">Admin</a></li>
            <li><a href="/events">Events</a></li>
            <li><a href="/login">Login</a></li>
            <i class="fa-solid fa-xmark" onclick="closemenu()"></i>
        </ul>
        <i class="fa-solid fa-bars" onclick="openmenu()"></i>
    </nav>
</div>

{{-------------------------------------------welcome message----------------------------}}
<div class="header">
    <h1>Hepi Events</h1>
    <P>Where Trust meets Perfection</P>
    <button type="button"  class="custom-button">Get started</button>
</div> 
</body>
</html>