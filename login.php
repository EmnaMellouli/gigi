<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <title>connectez-vous</title>
    <link rel="stylesheet" href="login.css"/>
</head>
<body>
    <header>
        <img src="logo.png" alt="logo" id="logo">
        <div>
            <ul id="navbar" type="none">
                <li><a href="C:\Users\ASUS\Desktop\web project\para.html">Home</a></li>
                <li><a href="C:\Users\ASUS\Desktop\web project\shop.html">Shop</a></li>
                <li><a href="C:\Users\ASUS\Desktop\web project\blog.html">Blog</a></li>
                <li><a href="C:\Users\ASUS\Desktop\web project\about.html">About</a></li>
                <li><a href="C:\Users\ASUS\Desktop\web project\contact.html">Contact</a></li>
                <li><a href="C:\Users\ASUS\Desktop\web project\shopbag.html"><i class="far fa-shopping-bag"></i></a></li>
                <li><a href="C:\Users\ASUS\Desktop\web project\login.php" class="active"><i class="fa-solid fa-user"></i></a></li>
            </ul>
        </div>
    </header>
    <section>
    <form action="log.php" method="post">
        <h2 class="login">login</h2>
        <?php if(isset($_get['error'])){
            ?>   <p class="error"><?php echo $_get['error'];  ?></p>
            <?php }?>
        <div class ="input-box">
            <span class="icon"><ion-icon></ion-icon></span>
            <label>User Name</label>
            <input type="text"  name="uname"required>
        </div>
        <div class ="input-box">
            <span class="icon"><ion-icon></ion-icon></span>
            <label>Password</label>
            <input type="password" name="password"required>
        </div>
        <button type="submit">Login</button>
    </form>
    </section>
<footer>
    <div class="col">
        <img class="logo2" src="logo.png" alt="logo">
        <h4>Contact</h4>
        <p><strong>Adresse:</strong> Rue des Soins, Quartier Médical, Sfax</p>
        <p><strong>Numéro de téléphone:</strong> +216 26598412</p>
        <p><strong>Email:</strong> Seepharma@gmail.com</p>
        <div class="follow">
            <h4>Follow Us</h4>
            <div class="icon">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-linkedin"></i>
            </div>
        </div>
    </div>
    <div class="col">
        <h4>About</h4>
        <a href="C:\Users\ASUS\Desktop\web project\about.html">About us</a>
        <a href="#">Livraison</a>
        <a href="#">politique de confidentialité</a>
        <a href="#">Thermes et conditions</a>
        <a href="C:\Users\ASUS\Desktop\web project\contact.html">Contact</a>
    </div>
    <div class="col">
        <h4>Mon compte</h4>
        <a href="C:\Users\ASUS\Desktop\web project\login.php">Se connecter</a>
        <a href="C:\Users\ASUS\Desktop\web project\creer.html">Créer un compte</a>
        <a href="C:\Users\ASUS\Desktop\web project\shopbag.html">Voir panier</a>
        <a href="#">Aide</a>
    </div>
    <div class="col install">
        <h4>Install App</h4>
        <p>From App Store or Google Play</p>
        <div class="row">
            <img src="app.jpg" alt="">
            <img src="play.jpg" alt="">
        </div>
        <p>Secured Payment Gateways</p>
        <img src="pay.png" alt="">
    </div>
    <div class="hashtag">
        <p>~ Health in sight ~</p>
    </div>
 </footer>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>