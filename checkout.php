<?php 
// Include the configuration file 
require_once 'config.php'; 
include("path.php");
 
// Initialize shopping cart class 
include_once 'Cart.class.php'; 
$cart = new Cart; 
 
// If the cart is empty, redirect to the products page 
if($cart->total_items() <= 0){ 
    header("Location: index.php"); 
} 
 
// Get posted form data from session 
$postData = !empty($_SESSION['postData'])?$_SESSION['postData']:array(); 
unset($_SESSION['postData']); 
 
// Get status message from session 
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:''; 
if(!empty($sessData['status']['msg'])){ 
    $statusMsg = $sessData['status']['msg']; 
    $statusMsgType = $sessData['status']['type']; 
    unset($_SESSION['sessData']['status']); 
} 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ordering Cart</title>
    <!-- google icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat&amp;display=swap"rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/cart.css">
    
<!-- jQuery library -->
<script src="js/jquery.min.js"></script>

<script>
function updateCartItem(obj,id){
    $.get("cartAction.php", {action:"updateCartItem", id:id, qty:obj.value}, function(data){
        if(data == 'ok'){
            location.reload();
        }else{
            alert('Cart update failed, please try again.');
        }
    });
}
</script>
</head>
  <!-- CSS File -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.css">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<style type="text/css">
body{
     background: #031036;
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

/*.nav-menu li a{*/
/*    text-decoration: none;*/
/*     color: #00bcd4;*/
/*}*/
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

.wrapper {
  display: flex;
  flex-flow: row wrap;
  margin-top: 150px;
  color: #fff;
}

/* We tell all items to be 100% width, via flex-basis */
.wrapper > * {
  flex: 1 100%;
}

/* We rely on source order for mobile-first approach
 * in this case:
 * 1. header
 * 2. article
 * 3. aside 1
 * 4. aside 2
 * 5. footer
 */

/* Medium screens */
@media all and (min-width: 600px) {
  /* We tell both sidebars to share a row */
  .aside { flex: 1 auto; }
}

.main form div{
    display: flex;
    flex-direction: column;
    margin: auto;
}

/* Large screens */
@media all and (min-width: 800px) {
  /* We invert order of first sidebar and main
   * And tell the main element to take twice as much width as the other two sidebars 
   */
  .main { flex: 2 0px; }
  .aside-1 { border: red solid 2px; padding: 10px; order: 1; }
  .main    { border: cyan solid 2px;  padding: 10px; order: 2; }
  .aside-2 { order: 3; }
  .footer  { order: 4; }
}
.main form {
    display: flex;
    flex-direction: column;
    gap: 30px
}
.main form div{
     display: flex;
    flex-direction: column;
    margin: auto;
}
.main form div input{
    padding: 10px;
    width: 400px;
}
</style>
<body>
    
   <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
   
   <div class="wrapper">
        <h1>CHECKOUT</h1>
  <article class="main">
        <form method="post" action="cartAction.php">
          <?php if (isset($_SESSION['id'])){ ?>
          <div>
            <label>Username</label>
            <input type="text" name="username" value="<?php echo $_SESSION['username']; ?>" class="text-input" >
          </div>
          <div>
            <label>Email</label>
            <input type="email" name="email"  value="<?php echo $_SESSION['email']; ?>" class="text-input">
          </div>
          <div>
            <label>Location</label>
            <input type="text" name="location"  value="" class="text-input">
          </div>
          <div>
            <label>Building name</label>
            <input type="text" name="building_name"  value="" class="text-input">
          </div>
          <div>
            <label>House number</label>
            <input type="text" name="house_number"  value="" class="text-input">
          </div>
          <div>
            <input type="hidden" name="action" value="placeOrder"/>
            <input class="btn btn-success btn-block" type="submit" name="checkoutSubmit" value="Place Order">
            <?php }else{?>
                <h2><a href="login.php">Login First</a></h2>
            <?php } ?>
            </form>
            </div>
      </article>
  <aside class="aside aside-1">
    <div class="col-12">
        <div class="checkout">
            <div class="row">
                <?php if(!empty($statusMsg) && ($statusMsgType == 'success')){ ?>
                <div class="col-md-12">
                    <div class="alert alert-success"><?php echo $statusMsg; ?></div>
                </div>
                <?php }elseif(!empty($statusMsg) && ($statusMsgType == 'error')){ ?>
                <div class="col-md-12">
                    <div class="alert alert-danger"><?php echo $statusMsg; ?></div>
                </div>
                <?php } ?>
				
                <div class="col-md-4 order-md-2 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Your Cart</span>
                        <span class="badge badge-secondary badge-pill"><?php echo $cart->total_items(); ?></span>
                    </h4>
                    <ul class="list-group mb-3">
                    <?php 
                    if($cart->total_items() > 0){ 
                        // Get cart items from session 
                        $cartItems = $cart->contents(); 
                        foreach($cartItems as $item){ 
                    ?>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0"><?php echo $item["name"]; ?></h6>
                                <small class="text-muted"><?php echo CURRENCY_SYMBOL.$item["price"]; ?>(<?php echo $item["qty"]; ?>)</small>
                            </div>
                            <span class="text-muted"><?php echo CURRENCY_SYMBOL.$item["subtotal"]; ?></span>
                        </li>
                    <?php } } ?>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (<?php echo CURRENCY; ?>)</span>
                            <strong><?php echo CURRENCY_SYMBOL.$cart->total(); ?></strong>
                        </li>
                    </ul>
                    <br>
                    <a href="index.php" class="btn btn-sm btn-info">+ add items</a>
                </div>
  </aside>
  <!--<aside class="aside aside-2">Aside 2</aside>-->
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