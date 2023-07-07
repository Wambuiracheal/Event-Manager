<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/0538fc5c28.js" crossorigin="anonymous"></script>
    <title>contact page</title>
</head>
<style>
body{
    background-color: black;
    color: aliceblue;
}
.contact-left{
    flex-basis: 35%;
}

.contact-right{
    flex-basis: 60%;
}

.contact-left p{
    margin-top: 30px;
}

.contact-left p i{
    color:darkmagenta;
    margin-right: 15px;
    font-size: 25px;
}

.social-icons{
    margin-top: 30px;
}

.social-icons a{
    text-decoration: none;
    font-size: 30px;
    margin-right: 15px;
    color: #ababab;
    display: inline-block;
    transition: transform 0.5s;
}

.social-icons a:hover{
    color:darkmagenta;
    transform: translateY(-5px);
}
.btn.btn2{
    display: inline-block;
    background-color: rgb(8, 3, 3);
    color: darkmagenta;
    padding: 10px 20px;
    border: round;
    border-radius: 4px;
    cursor: pointer;
}
.contact-right form{
    width: 100%;
}

form input, form textarea{
    width: 100%;
    border: 0;
    outline: none;
    background: #262626;
    padding: 15px;
    margin: 15px 0;
    color: #fff;
    font-size: 18px;
    border-radius: 6px;
}

form btn2{
    padding: 14px;
    font-size: 18px;
    margin-top: 20px;
    cursor: pointer;
}

.copyright{
    width: 100%;
    text-align: center;
    padding: 5px 0;
    background: #262626;
    font-weight: 300;
    margin-top: 20px;
}

.copyright i{
    color: darkmagenta;
}
</style>
<body>
<div id="contact">
<div class="container">
<div class="row">
    <div class="contact-left">
        <h1 class="sub-title">Contact Us</h1> 
        <p><i class="fas fa-paper-plane"></i>rachealnjugush@gmail.com</p>
        <p><i class="fas fa-paper-plane"></i>reenjugush@gmail.com</p>
        <p><i class="fa-solid fa-phone"></i>0707813711</p>
        <div class="social-icons">
            <a href="https://www.facebook.com/ree.njugush"><i class="fab fa-facebook"></i></a>
            <a href="https://twitter.com/Ree_wambui"><i class="fab fa-twitter-square"></i></a>
            <a href="https://www.instagram.com/mendi_wambui/"><i class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/racheal-njuguna-626a82206/"><i class="fab fa-linkedin"></i></a>
        </div>
    </div>
    <div class="contact-right">
        <h3>Incase you need to leave a short message for us, fill in the following form.Thankyou!!</h3>
        <form>
            <input type="text" name="Name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="Message" rows="6" placeholder="Your Message"></textarea>
            <button type="submit" class="btn btn2">Submit</button>
        </form>
    </div>
</div>
</div>
</div>
<div class="copyright">
    <p>Copyright &copy;Hepi Events.com. Where trust meets perfection</p>
</div>
</div>
</body>
</html>