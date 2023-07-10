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
    background-color: #262626;
    color: aliceblue;
}

.contact-col-1 {
    flex-basis: 35%;
    display: flex; /* Add this property to enable Flexbox */
  flex-wrap: wrap;/* Add this property to stack elements  */
    justify-content: left;
}

.contact-col-1 p i{
    color: rgb(228, 153, 228);
    margin-right: 15px;
    font-size: 25px;
}

.contact-col-2{
    flex-basis: 60%;
    display: flex; /* Add this property to enable Flexbox */
    flex-wrap: wrap; /* Add this property to stack elements vertically */
    justify-content: right;
}

.contact-col-2 p{
    margin-top: 30px;
    margin-right: 15px;
}

.sub-title{
    color: rgb(228, 153, 228);
    text-align: right;
    font-size: 20px;
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
    color: rgb(228, 153, 228);
    transform: translateY(-5px);
}

.btn.btn2{
    display: inline-block;
    background-color: rgb(8, 3, 3);
    color:  rgb(228, 153, 228);
    padding: 10px 20px;
    border: round;
    border-radius: 4px;
    cursor: pointer;
}

.btn.btn2:hover{
    display: inline-block;
    background-color: rgb(228, 153, 228) ;
    color:  darkmagenta;
    padding: 10px 20px;
    border: round;
    border-radius: 4px;
    cursor: pointer;
}



form input, form textarea{
    width: 64%;
    border: 0px;
    outline: none;
    background: rgb(8, 3, 3);
    padding: 15px;
    margin: 15px 0;
    color: rgb(228, 153, 228);
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
    padding: 5px ;
    background: rgb(8, 3, 3);
    font-weight: 300;
    color: rgb(228, 153, 228);
    margin-top: 20px;
    
}
</style>
<body>
<div id="contact">
<div class="container">
<div class="row">
    <div class="contact-col-1">
        <h1 class="sub-title">Contact Me</h1> 
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
    <div class="contact-col-2">
        <form>
            <h3>Incase you need to leave a short message for us,<br> fill in the following form.Thankyou!!</h3>
            <input type="text" name="Name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="Message" rows="6" placeholder="Your Message"></textarea>
            <button type="submit" class="btn btn2">Submit</button>
        </form>
    </div>
</div>
</div>
</div>
<footer class="copyright">
    <p>Copyright &copy;Hepi Events.com. Where trust meets perfection</p>
</footer>
</body>
</html>