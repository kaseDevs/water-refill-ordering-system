<?php include('path.php'); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); 
guestsOnly();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!-- CSS File -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.css">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

  <!-- Custom Styling -->
  <!--<link rel="stylesheet" href="assets/css/style.css">-->

  <title>Login</title>
</head>
<style type="text/css">
.btn {
  padding: 0.5rem 1rem;
  background: #006669;
  color: white;
  border: 1px solid transparent;
  border-radius: 0.25rem;
  font-size: 1.08em;
  font-family: "Lora", serif;
}

.btn-big {
  padding: 0.7rem 1.3rem;
  line-height: 1.3rem;
}

.btn:hover {
  color: white !important;
  background: #005255;
}

.text-input {
  padding: 0.7rem 1rem;
  display: block;
  width: 100%;
  border-radius: 5px;
  border: 1px solid #e0e0e0;
  outline: none;
  color: #444;
  line-height: 1.5rem;
  font-size: 1.2em;
  font-family: "Lora", serif;
}

.msg {
  width: 100%;
  margin: 5px auto;
  padding: 8px;
  border-radius: 5px;
  list-style: none;
}

.success {
  color: #3a6e3a;
  border: 1px solid #3a6e3a;
  background: #bcf5bc;
}

.error {
  color: #884b4b;
  border: 1px solid #884b4b;
  background: #f5bcbc;
}
    
/* AUTH PAGES */

.auth-content {
  width: 30%;
  margin: 50px auto;
  padding: 20px;
  background: white;
  border-radius: 5px;
}

.auth-content .form-title {
  text-align: center;
}

.auth-content form div {
  margin-bottom: 10px;
}

.auth-content form p {
  text-align: center;
}

.auth-content form p a {
  text-decoration: underline;
}

    *
    {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: sans-serif;
    }

    /* .nav-toggle{
        visibility: hidden;
    } */
    body
    {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        min-height: 100vh;
        background: #031036;
        padding-top: 10%;
    }

    .header{
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    height: 12vh;
    background-color: rgb(255, 255, 255);
    z-index: 10000;
    transition: all 0.4s ease;
}

/* .scroll-header{
    background-color: #000;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
} */
.navbar{
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    color: #00bcd4;
}

.navbar-cart{
    display: none;
}
.nav-menu .nav-list{
    display: flex;
}
.nav-menu li{
    margin-right: 2rem;
    list-style: none;
}
.nav-link{
    /* font-size: var(--normal-font-size); */
    color: #00bcd4;
    font-weight: bold;
    text-transform: capitalize;
    position: relative;
    transition: all 0.4s ease;
    text-decoration: none;
}
.nav-link::before{
    content: '';
    position: absolute;
    width: 0;
    left: 0;
    bottom: 0;
    height: 2px;
    background-color: #000;
    transition: all 0.4s ease-in-out;
}
.nav-link:hover::before{
    width: 100%;
}
.nav-link:hover,
.nav-link.active{
    color: #3cd400;
}
.nav-toggle{
    /* font-size: var(--h1-font-size); */
    padding: 5px 5px 0;
    border: 2px solid transparent;
    cursor: pointer;
    z-index: 100;
    display: none;
    /* color: ; */
}
.nav-toggle:hover{
    color: rgb(2, 0, 139);
    border: #00bcd4;
}

    .banner{
        display: flex;
        flex: 1 100%;
        /* background-color: rgb(4, 214, 144); */
        margin-left: 100px;
        margin-right: 100px;
        height: 60vh;
        border-radius: 20px;
        background: url(img/water/african.jpg);
        background-size: 100% 100%;
        color: #fff;
    }
    .banner .message{
        margin: auto;
        background-color: #010615;
        padding: 20px;
        opacity: 0.6;
    }
    .box
    {
        position: relative;
        width: 300px;
        height: 300px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 40px;
        background: #060c21;
        transition: 0.5s;
        /* padding-top: 100px; */
    }
    .box:hover
    {
        height: 400px;
    }
    .box .imgBx
    {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        padding: 10px;
        box-sizing: border-box;
    }
    .box .imgBx img
    {
        max-width: 100%;
        /* opacity: 0.7; */
        transition: 0.5s;
    }
    .box:hover .imgBx img
    {
        opacity: 1;
    }
    .box:before
    {
        content: '';
        position: absolute;
        top: -2px;
        left: -2px;
        right: -2px;
        bottom: -2px;
        background: #fff;
        z-index: -1;
    }
    .box:after
    {
        content: '';
        position: absolute;
        top: -2px;
        left: -2px;
        right: -2px;
        bottom: -2px;
        background: #fff;
        z-index: -2;
        filter: blur(40px);
    }
    .box:before,
    .box:after
    {
        background: linear-gradient(235deg, #89ff00, #010615, #00bcd4);
    }
    .box:nth-child(2):before,
    .box:nth-child(2):after
    {
        background: linear-gradient(235deg, #ff005e, #010615, #fbff00);
    }
    .box:nth-child(3):before,
    .box:nth-child(3):after
    {
        background: linear-gradient(235deg, #772aff, #010615, #2196f3);
    }
    .box .content
    {
        position: relative;
        bottom: 0;
        left: 10px;
        right: 10px;
        bottom: 10px;
        height: 120px;
        background: rgba(0,0,0,0.8);
        display: flex;
        flex-direction: column;
        gap: 10px;
        justify-content: center;
        align-items: center;
        opacity: 0;
        transition: 0.5s;
        padding: 20px;
    }
    .box .content a{
        text-decoration: none;
        background-color: #fff;
        padding: 10px;
        /* margin-top: 20px; */
    }
    .box:hover .content
    {
        opacity: 1;
    }
    .box .content h2
    {
        font-size: 20px;
        color: #fff;
        font-weight: 500;
        line-height: 20px;
        letter-spacing: 1px;
    }
    .box .content h2 span
    {
        font-size: 14px;
        color: #fff;
        font-weight: 200;
        letter-spacing: 2px;
    }
    .material-symbols-outlined {
    font-variation-settings:
    'FILL' 0,
    'wght' 400,
    'GRAD' 0,
    'opsz' 28
    }
    /* media screen */
    @media (max-width: 920px) {
        
  .auth-content {
    width: 60%;
  }
        .nav-cart{
            display: none;
        }
        .navbar-cart{
        display: block;
        }
        .navbar a{
    text-decoration: none;
    /*margin-left: 10px;*/
}
        .banner{
            width: 100%;
            margin-left: 0;
            margin-right: 0;
            border-radius: 0;
            margin-top: 10px;
        }
    .nav-menu{
        position: absolute;
        top: 0;
        right: 0;
        width: 0;
        height: 100vh;
        background-color: #000;
        font-size: var(--h2-font-size);
        text-align: center;
        text-transform: capitalize;
        padding-top: var(--header-height);
        box-shadow: 0 0 5px rgba(0,0,0,0.4);
        transition: all 0.4s ease-in-out;
    }
    .show-nav{
        width: 60%;
    }
    .nav-menu .nav-list{
        display: block;
    }
    .nav-menu li{
        padding: 15px 0;
    }
    .nav-link{
        font-size: var(--h3-font-size);
    }
    .nav-toggle{
        display: block;
    }
    .home{
        height: 150vh;
        padding-top: 50px;
    }
    .home .home-img img{
        display: none;
    }
    .home .home-content{
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .home-content h1{
        font-size: var(--big-font-size);
    }
    .home-content p{
        padding: 0 2rem;
    }
    /* .about{
        margin-top: 50px;
    } */
    .about-detail-content{
        grid-template-columns: unset;
    }
    .services-content-description{
        grid-template-columns: repeat(2, 1fr);
    }
    .testimonials-card{
        width: 820px;
        margin-top: 3rem;
        grid-template-columns: repeat(2, 1fr);
    }
    .testimonials-item:hover .testimonials-img img{
        transform: translateX(300px) rotate(360deg);
    }
    .footer-list{
        grid-template-columns: repeat(2, 1fr);
    }
}
@media (max-width: 560px) {
    .services-content-description{
        grid-template-columns: unset;
    }
    .auth-content {
    width: 90%;
  }
    .testimonials-card{
        width: 300px;
        margin-top: 3rem;
        grid-template-columns: unset;
    }
    .testimonials-item:hover .testimonials-img img{
        transform: translateX(220px) rotate(360deg);
    }
    .footer-list{
        grid-template-columns: unset;
    }
}

</style>

<body>

<?php include(ROOT_PATH . "/app/includes/header.php"); ?>

  <div class="auth-content">

    <form action="login.php" method="post">
      <h2 class="form-title">Login</h2>

      <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

      <div>
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
      </div>
      <div>
        <label>Password</label>
        <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
      </div>
      <div>
        <button type="submit" name="login-btn" class="btn btn-big">Login</button>
      </div>
      <p>Or <a href="<?php echo BASE_URL . '/register.php' ?>">Sign Up</a></p>
    </form>

  </div>

   <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Slick Carousel -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <!-- Custom Script -->
  <script src="assets/js/scripts.js"></script>
        <!-- Javascript File -->
    
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
<script type="text/javascript" src="script.js"></script>
    <script src="main.js"></script>
</body>

</html>