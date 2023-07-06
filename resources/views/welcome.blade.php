<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

.overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color:  rgba(110, 15, 94, 0.2);
    }

.header{
    font-size: 20px;
    color: rgb(232, 243, 252);
    text-align: center;
    padding-top: 100px;
}

.custom-button{
background-color: white;
color: darkmagenta;
padding: 10px 20px;
border: round;
border-radius: 4px;
cursor: pointer;
}

nav {
    background-color: darkmagenta;
    padding: 10px;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    align-items: right;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: space-between;
    margin-left: 20px;
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
    font-size: 20px;
    position: relative;
}

#navbar {
    transition: top 0.3s ease-in-out;
}

.navbar-hidden {
    top: -100px;
}

#navbar ul{  
    text-align: right;
}

#navbar ul li.logo {
    height: 40px;
    width: auto;
    margin-right: auto;
}

#navbar ul li.logo img {
    height: 30px;
    width: auto;
    
}   

.logo{
    margin-right: auto;
}

</style>

<body>

{{-------------------------------------------navbar----------------------------------}} 
<div class="overlay"></div>
<div class="header">
    <nav id="navbar">
        <ul>
            <li class="logo"><img src="/images/logo.png"></li>
            <li href="/">Home</li>
            <li href="/admin">Admin</li>
            <li href="/events">Events</li>
            <li href="/login">Login</li>
        </ul>
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