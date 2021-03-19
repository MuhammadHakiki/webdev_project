<?php
    session_start();


    $dbHost = "localhost";
    $dbUser = "root";
    $dbPassword = "";
    $dbName = "lamonett";
    
    $conn = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

    try {
        $dsn = "mysql:host=" . $dbHost . ";dbname=" . $dbName;
        $pdo = new PDO($dsn, $dbUser, $dbPassword);
    } catch(PDOException $e) {
        echo "DB Connection Failed: " . $e->getMessage();
    }
    $ids = $_SESSION['name'];

    $email = $gender = '';
$sqli = "SELECT * FROM user WHERE name='$ids'";
$resultss = mysqli_query($conn, $sqli);
	while($row = mysqli_fetch_assoc($resultss))
	{
		$id = $row['id'];
		$gender = $row["name"];
		$_SESSION['gender'] = $gender;
	}

  
    $num = "SELECT COUNT(namaP) as total FROM cart where idP='$ids'";
    $count = mysqli_query($conn, $num);
    $value = mysqli_fetch_assoc($count);
    $rows = $value['total'];



    
    $num = "SELECT COUNT(namaB) as totalB FROM booking where idB='$ids'";
    $count = mysqli_query($conn, $num);
    $value = mysqli_fetch_assoc($count);
    $rowsB = $value['totalB'];
    
        
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Animated Vertical Carousel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Original+Surfer&di" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script>
  $('body').css('padding-top', $('.navbar').outerHeight() + 'px')

// detect scroll top or down
if ($('.smart-scroll').length > 0) { // check if element exists
    var last_scroll_top = 0;
    $(window).on('scroll', function() {
        scroll_top = $(this).scrollTop();
        if(scroll_top < last_scroll_top) {
            $('.smart-scroll').removeClass('scrolled-down').addClass('scrolled-up');
        }
        else {
            $('.smart-scroll').removeClass('scrolled-up').addClass('scrolled-down');
        }
        last_scroll_top = scroll_top;
    });
}
</script>
    </head>
<body>
  
  <div id="header" class="navbar smart-scroll navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        
        <button type="button" class="navbar-toggle" id="navv" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        
        <a class="nav navbar-nav navbar-center" id="imgs" href="#">
          <img src="images/new.png" width="350" /> </a>
          
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-center" id="imgs1">          
            <li><a id="usr" href="#"> <?php echo $gender ?> </a></li>         

              <li><a id="usr" href="userHome.php">HOME</a></li>
              <li><a id="usr" href="#">ABOUT US</a></li>
              <li><a id="usr" href="#">INSTAGRAM</a></li> 
              <li><a id="usr" href="home.php">LOG OUT</a></li>

              <li><a id="navbar-brand2" href="userOrder.php? nama = <?php echo $_SESSION['gender'] ?>">Booked <span class="label label-danger", style="background-color:#6A1C11;"> <?php echo $rowsB ?> </span></a></li> </a>
        
            </ul>
          </div>
          
      </div>
      <a class="nav navbar-nav navbar-right" id="imgs" href="#">
      <a id="navbar-brand1" href="userOrder.php? nama = <?php echo $_SESSION['gender'] ?>">Cart <span class="label label-danger", style="background-color:#6A1C11;"> <?php echo $rows ?> </span></a></li> </a>
        
    </div>
    
  </div>
  
  <br>
    
    <br>
    <br>
    <br>
    <center>
      <div class="tribal">
      <img src="images/Screen Shot 1442-06-23 at 22.13.24.png" width="350" />
    </center>
    <br>
    <br>
    
    
   
    <br>
    <br>
    <br>
    
    <br>
   
    
    <center>
      <div class="tribal1">
      <img src="images/Screen Shot 1442-07-09 at 20.27.32.png" width="350" />
      </div>
    </center>
    <br>
    <br>
    
    
    <br>
    <br>
    <br>
    <div class="container">
      
    <div class="row">
        <?php 
           $fetchall = "SELECT * FROM bottom";
           $result = mysqli_query($conn, $fetchall);
               while ($row = mysqli_fetch_array($result)){ 
                   $id2 = $row['id'];
                   $names = $row['nama'];
                   $harga = $row['harga'];
                   $gambar1 = $row['gambar'];
                   $ava = $row['tersedia'];
                   $_SESSION['id'] = $id2;
                   $_SESSION["namaa"] = $id2;
                   
                   ?>
                 
        <div class="col-sm-2">

            <div class="product-grid">
                <div class="product-image">
                        <img class="pic-1" <?php echo "<img src='images/" .$gambar1."'>"; ?>  
                </div>
                    <div class="product-content">
                    <center>
                    
                <div class="product-new-label"> <?php echo $ava ?> </div>
                
                </center>
                <br>
                    <h3 class="title"><a href="userDetailBottoms.php?id= <?php echo $id2 ?>"> <?php echo $names ?></a></h3>
                    <div class="price"> <?php echo "Rp. ".number_format($harga,0,",",".") ?>

                    </div>

                </div>

                </a>
                
            </div>
        </div>
        <?php
              } ?>
    </div>
    <br>
    <br>
    <br>
    <br>
   
    </center>
    <br>
    <br>
    <br>
    
    <br>
    <br>
    <br>
    <br>
    
    <center>
      <div class="tribal3">
        Copyright @ 2021 La Monett. All Rights Reserved
      </div>
    </center>
    <br>
    <br>
    <br>
</body>
</html>
<style>
#navbar-brand2 {
  color: #6A1C11;
    font-family: 'Kaushan Script', cursive;
}
#usrr {
    color: #6A1C11;
    font-family: 'Kaushan Script', cursive;
    font-size: 20pt;

  }
#more {
  text-transform: uppercase;
  width: 50%;
  height: 60px;

    margin-top: 30px;
    margin-bottom: 50px;
    color: black;
    font-family: 'Kaushan Script', cursive;
    background-color: white;
    font-size: 20px;
    border: 2px solid brown;
}
#drop {
  background-color: brown;
  color: white;
  width: 50%;
  height: 60px;
}
#drop1 {
  background-color: white;
  color: white;
  width: 50%;
  height: 60px;
}
.dropdown-menu {
  left: 50%;
  width: 50%;

  right: auto;
  text-align: center;
  transform: translate(-50%, 0);
}
  h3.h3{text-align:center;margin:1em;text-transform:capitalize;font-size:1.7em;}

/********************* shopping Demo-1 **********************/
.product-grid{font-family:Raleway,sans-serif;text-align:center;padding:0 0 72px;overflow:hidden;position:relative;z-index:1}
.product-grid .product-image{width:100%;height:10%;position:relative;transition:all .3s ease 0s}
.product-grid .product-image a{display:block}
.product-grid .product-image img{width:100%;height:20%}
.product-grid .pic-1{opacity:1;transition:all .3s ease-out 0s}
.product-grid:hover .pic-1{opacity:1}
.product-grid .pic-2{opacity:0;position:absolute;top:0;left:0;transition:all .3s ease-out 0s}
.product-grid:hover .pic-2{opacity:1}
.product-grid .social{width:150px;padding:0;margin:0;list-style:none;opacity:0;transform:translateY(-50%) translateX(-50%);position:absolute;top:60%;left:50%;z-index:1;transition:all .3s ease 0s}
.product-grid:hover .social{opacity:1;top:50%}
.product-grid .social li{display:inline-block}
.product-grid .social li a{color:#fff;background-color:#333;font-size:16px;line-height:40px;text-align:center;height:40px;width:40px;margin:0 2px;display:block;position:relative;transition:all .3s ease-in-out}
.product-grid .social li a:hover{color:#fff;background-color:#ef5777}
.product-grid .social li a:after,.product-grid .social li a:before{content:attr(data-tip);color:#fff;background-color:#000;font-size:12px;letter-spacing:1px;line-height:20px;padding:1px 5px;white-space:nowrap;opacity:0;transform:translateX(-50%);position:absolute;left:50%;top:-30px}
.product-grid .social li a:after{content:'';height:15px;width:15px;border-radius:0;transform:translateX(-50%) rotate(45deg);top:-20px;z-index:-1}
.product-grid .social li a:hover:after,.product-grid .social li a:hover:before{opacity:1}
.product-new-label{color:#fff;background-color:#ef5777; width: 80%}
.product-discount-label{background-color:#333;left:auto;right:0}
.product-grid .rating{color:#FFD200;font-size:12px;padding:12px 0 0;margin:0;list-style:none;position:relative;z-index:-1}
.product-grid .rating li.disable{color:rgba(0,0,0,.2)}
.product-grid .product-content{background-color:white;text-align:center;padding:15px 0;margin:0 auto;position:absolute;top:15;left:0;right:0;bottom:-15px;z-index:1;transition:all .3s;}
.product-grid:hover .product-content{bottom:0}
.product-grid .title{font-size:13px;font-weight:400;letter-spacing:.5px;text-transform:capitalize;margin:0 0 10px;transition:all .3s ease 0s}
.product-grid .title a{color:black}
.product-grid .title a:hover,.product-grid:hover .title a{color:#ef5777}
.product-grid .price{color:#333;font-size:17px;font-family:Montserrat,sans-serif;font-weight:700;letter-spacing:.6px;margin-bottom:8px;text-align:center;transition:all .3s}
.product-grid .price span{color:#999;font-size:13px;font-weight:400;text-decoration:line-through;margin-left:3px;display:inline-block}
.product-grid .add-to-cart{color:#000;font-size:13px;font-weight:600}
@media only screen and (max-width:990px){.product-grid{margin-bottom:30px}
}

/********************* Shopping Demo-2 **********************/
.demo{padding:45px 0}
.product-grid2{font-family:'Open Sans',sans-serif;position:relative}
.product-grid2 .product-image2{overflow:hidden;position:relative}
.product-grid2 .product-image2 a{display:block}
.product-grid2 .product-image2 img{width:100%;height:auto}
.product-image2 .pic-1{opacity:1;transition:all .5s}
.product-grid2:hover .product-image2 .pic-1{opacity:0}
.product-image2 .pic-2{width:100%;height:100%;opacity:0;position:absolute;top:0;left:0;transition:all .5s}
.product-grid2:hover .product-image2 .pic-2{opacity:1}
.product-grid2 .social{padding:0;margin:0;position:absolute;bottom:50px;right:25px;z-index:1}
.product-grid2 .social li{margin:0 0 10px;display:block;transform:translateX(100px);transition:all .5s}
.product-grid2:hover .social li{transform:translateX(0)}
.product-grid2:hover .social li:nth-child(2){transition-delay:.15s}
.product-grid2:hover .social li:nth-child(3){transition-delay:.25s}
.product-grid2 .social li a{color:#505050;background-color:#fff;font-size:17px;line-height:45px;text-align:center;height:45px;width:45px;border-radius:50%;display:block;transition:all .3s ease 0s}
.product-grid2 .social li a:hover{color:#fff;background-color:#3498db;box-shadow:0 0 10px rgba(0,0,0,.5)}
.product-grid2 .social li a:after,.product-grid2 .social li a:before{content:attr(data-tip);color:#fff;background-color:#000;font-size:12px;line-height:22px;border-radius:3px;padding:0 5px;white-space:nowrap;opacity:0;transform:translateX(-50%);position:absolute;left:50%;top:-30px}
.product-grid2 .social li a:after{content:'';height:15px;width:15px;border-radius:0;transform:translateX(-50%) rotate(45deg);top:-22px;z-index:-1}
.product-grid2 .social li a:hover:after,.product-grid2 .social li a:hover:before{opacity:1}
.product-grid2 .add-to-cart{color:#fff;background-color:#404040;font-size:15px;text-align:center;width:100%;padding:10px 0;display:block;position:absolute;left:0;bottom:-100%;transition:all .3s}
.product-grid2 .add-to-cart:hover{background-color:#3498db;text-decoration:none}
.product-grid2:hover .add-to-cart{bottom:0}
.product-grid2 .product-new-label{background-color:#3498db;color:#fff;font-size:17px;padding:5px 10px;position:absolute;right:0;top:0;transition:all .3s}
.product-grid2:hover .product-new-label{opacity:0}
.product-grid2 .product-content{padding:20px 10px;text-align:center}
.product-grid2 .title{font-size:17px;margin:0 0 7px}
.product-grid2 .title a{color:#303030}
.product-grid2 .title a:hover{color:#3498db}
.product-grid2 .price{color:#303030;font-size:15px}
@media screen and (max-width:990px){.product-grid2{margin-bottom:30px}
}

/********************* Shopping Demo-3 **********************/
.product-grid3{font-family:Roboto,sans-serif;text-align:center;position:relative;z-index:1}
.product-grid3:before{content:"";height:81%;width:100%;background:#fff;border:1px solid rgba(0,0,0,.1);opacity:0;position:absolute;top:0;left:0;z-index:-1;transition:all .5s ease 0s}
.product-grid3:hover:before{opacity:1;height:100%}
.product-grid3 .product-image3{position:relative}
.product-grid3 .product-image3 a{display:block}
.product-grid3 .product-image3 img{width:100%;height:auto}
.product-grid3 .pic-1{opacity:1;transition:all .5s ease-out 0s}
.product-grid3:hover .pic-1{opacity:0}
.product-grid3 .pic-2{position:absolute;top:0;left:0;opacity:0;transition:all .5s ease-out 0s}
.product-grid3:hover .pic-2{opacity:1}
.product-grid3 .social{width:120px;padding:0;margin:0 auto;list-style:none;opacity:0;position:absolute;right:0;left:0;bottom:-23px;transform:scale(0);transition:all .3s ease 0s}
.product-grid3:hover .social{opacity:1;transform:scale(1)}
.product-grid3:hover .product-discount-label,.product-grid3:hover .product-new-label,.product-grid3:hover .title{opacity:0}
.product-grid3 .social li{display:inline-block}
.product-grid3 .social li a{color:#e67e22;background:#fff;font-size:18px;line-height:50px;width:50px;height:50px;border:1px solid rgba(0,0,0,.1);border-radius:50%;margin:0 2px;display:block;transition:all .3s ease 0s}
.product-grid3 .social li a:hover{background:#e67e22;color:#fff}
.product-grid3 .product-discount-label,.product-grid3 .product-new-label{background-color:#e67e22;color:#fff;font-size:17px;padding:2px 10px;position:absolute;right:10px;top:10px;transition:all .3s}
.product-grid3 .product-content{z-index:-1;padding:15px;text-align:left}
.product-grid3 .title{font-size:14px;text-transform:capitalize;margin:0 0 7px;transition:all .3s ease 0s}
.product-grid3 .title a{color:#414141}
.product-grid3 .price{color:#000;font-size:16px;letter-spacing:1px;font-weight:600;margin-right:2px;display:inline-block}
.product-grid3 .price span{color:#909090;font-size:14px;font-weight:500;letter-spacing:0;text-decoration:line-through;text-align:left;display:inline-block;margin-top:-2px}
.product-grid3 .rating{padding:0;margin:-22px 0 0;list-style:none;text-align:right;display:block}
.product-grid3 .rating li{color:#ffd200;font-size:13px;display:inline-block}
.product-grid3 .rating li.disable{color:#dcdcdc}
@media only screen and (max-width:1200px){.product-grid3 .rating{margin:0}
}
@media only screen and (max-width:990px){.product-grid3{margin-bottom:30px}
.product-grid3 .rating{margin:-22px 0 0}
}
@media only screen and (max-width:359px){.product-grid3 .rating{margin:0}
}

/********************* Shopping Demo-4 **********************/
.product-grid4,.product-grid4 .product-image4{position:relative}
.product-grid4{font-family:Poppins,sans-serif;text-align:center;border-radius:5px;overflow:hidden;z-index:1;transition:all .3s ease 0s}
.product-grid4:hover{box-shadow:0 0 10px rgba(0,0,0,.2)}
.product-grid4 .product-image4 a{display:block}
.product-grid4 .product-image4 img{width:100%;height:auto}
.product-grid4 .pic-1{opacity:1;transition:all .5s ease-out 0s}
.product-grid4:hover .pic-1{opacity:0}
.product-grid4 .pic-2{position:absolute;top:0;left:0;opacity:0;transition:all .5s ease-out 0s}
.product-grid4:hover .pic-2{opacity:1}
.product-grid4 .social{width:180px;padding:0;margin:0 auto;list-style:none;position:absolute;right:0;left:0;top:50%;transform:translateY(-50%);transition:all .3s ease 0s}
.product-grid4 .social li{display:inline-block;opacity:0;transition:all .7s}
.product-grid4 .social li:nth-child(1){transition-delay:.15s}
.product-grid4 .social li:nth-child(2){transition-delay:.3s}
.product-grid4 .social li:nth-child(3){transition-delay:.45s}
.product-grid4:hover .social li{opacity:1}
.product-grid4 .social li a{color:#222;background:#fff;font-size:17px;line-height:36px;width:40px;height:36px;border-radius:2px;margin:0 5px;display:block;transition:all .3s ease 0s}
.product-grid4 .social li a:hover{color:#fff;background:#16a085}
.product-grid4 .social li a:after,.product-grid4 .social li a:before{content:attr(data-tip);color:#fff;background-color:#000;font-size:12px;line-height:20px;border-radius:3px;padding:0 5px;white-space:nowrap;opacity:0;transform:translateX(-50%);position:absolute;left:50%;top:-30px}
.product-grid4 .social li a:after{content:'';height:15px;width:15px;border-radius:0;transform:translateX(-50%) rotate(45deg);top:-22px;z-index:-1}
.product-grid4 .social li a:hover:after,.product-grid4 .social li a:hover:before{opacity:1}
.product-grid4 .product-discount-label,.product-grid4 .product-new-label{color:#fff;background-color:#16a085;font-size:13px;font-weight:800;text-transform:uppercase;line-height:45px;height:45px;width:45px;border-radius:50%;position:absolute;left:10px;top:15px;transition:all .3s}
.product-grid4 .product-discount-label{left:auto;right:10px;background-color:#d7292a}
.product-grid4:hover .product-new-label{opacity:0}
.product-grid4 .product-content{padding:25px}
.product-grid4 .title{font-size:15px;font-weight:400;text-transform:capitalize;margin:0 0 7px;transition:all .3s ease 0s}
.product-grid4 .title a{color:#222}
.product-grid4 .title a:hover{color:#16a085}
.product-grid4 .price{color:#16a085;font-size:17px;font-weight:700;margin:0 2px 15px 0;display:block}
.product-grid4 .price span{color:#909090;font-size:13px;font-weight:400;letter-spacing:0;text-decoration:line-through;text-align:left;vertical-align:middle;display:inline-block}
.product-grid4 .add-to-cart{border:1px solid #e5e5e5;display:inline-block;padding:10px 20px;color:#888;font-weight:600;font-size:14px;border-radius:4px;transition:all .3s}
.product-grid4:hover .add-to-cart{border:1px solid transparent;background:#16a085;color:#fff}
.product-grid4 .add-to-cart:hover{background-color:#505050;box-shadow:0 0 10px rgba(0,0,0,.5)}
@media only screen and (max-width:990px){.product-grid4{margin-bottom:30px}
}

/********************* Shopping Demo-5 **********************/
.product-image5 .pic-1,.product-image5 .pic-2{backface-visibility:hidden;transition:all .5s ease 0s}
.product-grid5{font-family:Poppins,sans-serif;position:relative}
.product-grid5 .product-image5{overflow:hidden;position:relative}
.product-grid5 .product-image5 a{display:block}
.product-grid5 .product-image5 img{width:100%;height:auto}
.product-image5 .pic-1{opacity:1}
.product-grid5:hover .product-image5 .pic-1{opacity:0}
.product-image5 .pic-2{width:100%;height:100%;opacity:0;position:absolute;top:0;left:0}
.product-grid5:hover .product-image5 .pic-2{opacity:1}
.product-grid5 .social{padding:0;margin:0;position:absolute;top:10px;right:10px}
.product-grid5 .social li{display:block;margin:0 0 10px;transition:all .5s}
.product-grid5 .social li:nth-child(2){opacity:0;transform:translateY(-50px)}
.product-grid5:hover .social li:nth-child(2){opacity:1;transform:translateY(0)}
.product-grid5 .social li:nth-child(3){opacity:0;transform:translateY(-50px)}
.product-grid5:hover .social li:nth-child(3){opacity:1;transform:translateY(0);transition-delay:.2s}
.product-grid5 .social li a{color:#888;background:#fff;font-size:14px;text-align:center;line-height:40px;height:40px;width:40px;border-radius:50%;display:block;transition:.5s ease 0s}
.product-grid5 .social li a:hover{color:#fff;background:#1e3799}
.product-grid5 .select-options{color:#777;background-color:#fff;font-size:13px;font-weight:400;text-align:center;text-transform:uppercase;padding:15px 5px;margin:0 auto;opacity:0;display:block;position:absolute;width:92%;left:0;bottom:-100px;right:0;transition:.5s ease 0s}
.product-grid5 .select-options:hover{color:#fff;background-color:#1e3799;text-decoration:none}
.product-grid5:hover .select-options{opacity:1;bottom:10px}
.product-grid5 .product-content{padding:20px 10px}
.product-grid5 .title{font-size:15px;font-weight:600;text-transform:capitalize;margin:0 0 10px;transition:all .3s ease 0s}
.product-grid5 .title a{color:#222}
.product-grid5 .title a:hover{color:#1e3799}
.product-grid5 .price{color:#222;font-size:13px;font-weight:500;letter-spacing:1px}
@media only screen and (max-width:990px){.product-grid5{margin-bottom:30px}
}

/********************* Shopping Demo-6 **********************/
.product-grid6,.product-grid6 .product-image6{overflow:hidden}
.product-grid6{font-family:'Open Sans',sans-serif;text-align:center;position:relative;transition:all .5s ease 0s}
.product-grid6:hover{box-shadow:0 0 10px rgba(0,0,0,.3)}
.product-grid6 .product-image6 a{display:block}
.product-grid6 .product-image6 img{width:100%;height:auto;transition:all .5s ease 0s}
.product-grid6:hover .product-image6 img{transform:scale(1.1)}
.product-grid6 .product-content{padding:12px 12px 15px;transition:all .5s ease 0s}
.product-grid6:hover .product-content{opacity:0}
.product-grid6 .title{font-size:20px;font-weight:600;text-transform:capitalize;margin:0 0 10px;transition:all .3s ease 0s}
.product-grid6 .title a{color:#000}
.product-grid6 .title a:hover{color:#2e86de}
.product-grid6 .price{font-size:18px;font-weight:600;color:#2e86de}
.product-grid6 .price span{color:#999;font-size:15px;font-weight:400;text-decoration:line-through;margin-left:7px;display:inline-block}
.product-grid6 .social{background-color:#fff;width:100%;padding:0;margin:0;list-style:none;opacity:0;transform:translateX(-50%);position:absolute;bottom:-50%;left:50%;z-index:1;transition:all .5s ease 0s}
.product-grid6:hover .social{opacity:1;bottom:20px}
.product-grid6 .social li{display:inline-block}
.product-grid6 .social li a{color:#909090;font-size:16px;line-height:45px;text-align:center;height:45px;width:45px;margin:0 7px;border:1px solid #909090;border-radius:50px;display:block;position:relative;transition:all .3s ease-in-out}
.product-grid6 .social li a:hover{color:#fff;background-color:#2e86de;width:80px}
.product-grid6 .social li a:after,.product-grid6 .social li a:before{content:attr(data-tip);color:#fff;background-color:#2e86de;font-size:12px;letter-spacing:1px;line-height:20px;padding:1px 5px;border-radius:5px;white-space:nowrap;opacity:0;transform:translateX(-50%);position:absolute;left:50%;top:-30px}
.product-grid6 .social li a:after{content:'';height:15px;width:15px;border-radius:0;transform:translateX(-50%) rotate(45deg);top:-20px;z-index:-1}
.product-grid6 .social li a:hover:after,.product-grid6 .social li a:hover:before{opacity:1}
@media only screen and (max-width:990px){.product-grid6{margin-bottom:30px}
}

/********************* Shopping Demo-7 **********************/
.product-grid7{font-family:'Roboto Slab',serif;position:relative;z-index:1}
.product-grid7 .product-image7{border:1px solid rgba(0,0,0,.1);overflow:hidden;perspective:1500px;position:relative;transition:all .3s ease 0s}
.product-grid7 .product-image7 a{display:block}
.product-grid7 .product-image7 img{width:100%;height:auto}
.product-grid7 .pic-1{opacity:1;transition:all .5s ease-out 0s}
.product-grid7 .pic-2{opacity:0;transform:rotateY(-90deg);position:absolute;top:0;left:0;transition:all .5s ease-out 0s}
.product-grid7:hover .pic-2{opacity:1;transform:rotateY(0)}
.product-grid7 .social{padding:0;margin:0;list-style:none;position:absolute;bottom:3px;left:-20%;z-index:1;transition:all .5s ease 0s}
.product-grid7:hover .social{left:17px}
.product-grid7 .social li a{color:#fff;background-color:#333;font-size:16px;line-height:40px;text-align:center;height:40px;width:40px;margin:15px 0;border-radius:50%;display:block;transition:all .5s ease-in-out}
.product-grid7 .social li a:hover{color:#fff;background-color:#78e08f}
.product-grid7 .product-new-label{color:#fff;background-color:#333;padding:5px 10px;border-radius:5px;display:block;position:absolute;top:10px;left:10px}
.product-grid7 .product-content{text-align:center;padding:20px 0 0}
.product-grid7 .title{font-size:15px;font-weight:600;text-transform:capitalize;margin:0 0 10px;transition:all .3s ease 0s}
.product-grid7 .title a{color:#333}
.product-grid7 .title a:hover{color:#78e08f}
.product-grid7 .rating{color:#78e08f;font-size:12px;padding:0;margin:0 0 10px;list-style:none}
.product-grid7 .price{color:#333;font-size:20px;font-family:Lora,serif;font-weight:700;margin-bottom:8px;text-align:center;transition:all .3s}
.product-grid7 .price span{color:#999;font-size:14px;font-weight:700;text-decoration:line-through;margin-left:7px;display:inline-block}
@media only screen and (max-width:990px){.product-grid7{margin-bottom:30px}
}

/********************* Shopping Demo-8 **********************/
.product-grid8{font-family:Poppins,sans-serif;position:relative;z-index:1}
.product-grid8 .product-image8{border:1px solid #e4e9ef;position:relative;transition:all .3s ease 0s}
.product-grid8:hover .product-image8{box-shadow:0 0 10px rgba(0,0,0,.15)}
.product-grid8 .product-image8 a{display:block}
.product-grid8 .product-image8 img{width:100%;height:auto}
.product-grid8 .pic-1{opacity:1;transition:all .5s ease-out 0s}
.product-grid8:hover .pic-1{opacity:0}
.product-grid8 .pic-2{opacity:0;position:absolute;top:0;left:0;transition:all .5s ease-out 0s}
.product-grid8:hover .pic-2{opacity:1}
.product-grid8 .social{padding:0;margin:0;list-style:none;position:absolute;bottom:13px;right:13px;z-index:1}
.product-grid8 .social li{opacity:0;transform:translateY(3px);transition:all .5s ease 0s}
.product-grid8:hover .social li{margin:0 0 10px;opacity:1;transform:translateY(0)}
.product-grid8:hover .social li:nth-child(1){transition-delay:.1s}
.product-grid8:hover .social li:nth-child(2){transition-delay:.2s}
.product-grid8:hover .social li:nth-child(3){transition-delay:.4s}
.product-grid8 .social li a{color:grey;font-size:17px;line-height:40px;text-align:center;height:40px;width:40px;border:1px solid grey;display:block;transition:all .5s ease-in-out}
.product-grid8 .social li a:hover{color:#000;border-color:#000}
.product-grid8 .product-discount-label{display:block;padding:4px 15px 4px 30px;color:#fff;background-color:#0081c2;position:absolute;top:10px;right:0;-webkit-clip-path:polygon(34% 0,100% 0,100% 100%,0 100%);clip-path:polygon(34% 0,100% 0,100% 100%,0 100%)}
.product-grid8 .product-content{padding:20px 0 0}
.product-grid8 .price{color:#000;font-size:19px;font-weight:400;margin-bottom:8px;text-align:left;transition:all .3s}
.product-grid8 .price span{color:#999;font-size:14px;font-weight:500;text-decoration:line-through;margin-left:7px;display:inline-block}
.product-grid8 .product-shipping{color:rgba(0,0,0,.5);font-size:15px;padding-left:35px;margin:0 0 15px;display:block;position:relative}
.product-grid8 .product-shipping:before{content:'';height:1px;width:25px;background-color:rgba(0,0,0,.5);transform:translateY(-50%);position:absolute;top:50%;left:0}
.product-grid8 .title{font-size:16px;font-weight:400;text-transform:capitalize;margin:0 0 30px;transition:all .3s ease 0s}
.product-grid8 .title a{color:#000}
.product-grid8 .title a:hover{color:#0081c2}
.product-grid8 .all-deals{display:block;color:#fff;background-color:#2e353b;font-size:15px;letter-spacing:1px;text-align:center;text-transform:uppercase;padding:22px 5px;transition:all .5s ease 0s}
.product-grid8 .all-deals .icon{margin-left:7px}
.product-grid8 .all-deals:hover{background-color:#0081c2}
@media only screen and (max-width:990px){.product-grid8{margin-bottom:30px}
}

/********************* Shopping Demo-9 **********************/
.product-grid9,.product-grid9 .product-image9{position:relative}
.product-grid9{font-family:Poppins,sans-serif;z-index:1}
.product-grid9 .product-image9 a{display:block}
.product-grid9 .product-image9 img{width:100%;height:auto}
.product-grid9 .pic-1{opacity:1;transition:all .5s ease-out 0s}
.product-grid9:hover .pic-1{opacity:0}
.product-grid9 .pic-2{position:absolute;top:0;left:0;opacity:0;transition:all .5s ease-out 0s}
.product-grid9:hover .pic-2{opacity:1}
.product-grid9 .product-full-view{color:#505050;background-color:#fff;font-size:16px;height:45px;width:45px;padding:18px;border-radius:100px 0 0;display:block;opacity:0;position:absolute;right:0;bottom:0;transition:all .3s ease 0s}
.product-grid9 .product-full-view:hover{color:#c0392b}
.product-grid9:hover .product-full-view{opacity:1}
.product-grid9 .product-content{padding:12px 12px 0;overflow:hidden;position:relative}
.product-content .rating{padding:0;margin:0 0 7px;list-style:none}
.product-grid9 .rating li{font-size:12px;color:#ffd200;transition:all .3s ease 0s}
.product-grid9 .rating li.disable{color:rgba(0,0,0,.2)}
.product-grid9 .title{font-size:16px;font-weight:400;text-transform:capitalize;margin:0 0 3px;transition:all .3s ease 0s}
.product-grid9 .title a{color:rgba(0,0,0,.5)}
.product-grid9 .title a:hover{color:#c0392b}
.product-grid9 .price{color:#000;font-size:17px;margin:0;display:block;transition:all .5s ease 0s}
.product-grid9:hover .price{opacity:0}
.product-grid9 .add-to-cart{display:block;color:#c0392b;font-weight:600;font-size:14px;opacity:0;position:absolute;left:10px;bottom:-20px;transition:all .5s ease 0s}
.product-grid9:hover .add-to-cart{opacity:1;bottom:0}
@media only screen and (max-width:990px){.product-grid9{margin-bottom:30px}
}

</style>
<script>
  var prevScrollpos = window.pageYOffset;
  window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
    if (currentScrollPos > 100) {
      document.getElementById("header").style.top = "-230px";

    } else {
      document.getElementById("header").style.top = "0";

    }
    prevScrollpos = currentScrollPos;
  }
  </script>
<style>
  .row {
    width: 101%;
  }
  .container {            
}
  .tribal2 {
    margin-top: 20px;
    background-image: url('images/wp6979896.jpg');
    height: 300px;
    background-repeat: no-repeat;
    background-size: cover;  
    background-position:  center center;
    width: 90%;
    background-size: 95% 95%;

  }
  #btn1{
    text-transform: uppercase;
    padding: 5px 40px;

    margin-top: 30px;
    margin-bottom: 50px;
    color: black;
    font-family: 'Indie Flower', cursive;
    background-color: white;
    font-size: 20px;
    border: 2px solid brown;
}
#btn1:hover {
    color: white;
    background-color: brown;
}
  .tribal1 {
    font-size: 35pt;
    font-family: 'Kaushan Script', cursive;
    color: #6A1C11;

  }
  .tribal3 {
    font-size: 17pt;
    margin-top: 120px;
    margin-bottom: 20px;
    font-family: 'Space Mono', monospace;
    color: #6A1C11;

  }
  .hh {
    font-family: 'Space Mono', monospace;
    font-size: 15pt;
    margin-left: 30px;
    margin-right: 30px;
    margin-top: 40px;
    color: #6A1C11;
  }
  .hh1 {
    font-family: 'Space Mono', monospace;
    font-size: 14pt;
    margin-left: 100px;
    margin-right: 100px;
    margin-top: 40px;
    text-align: center;
    color: #6A1C11;

  }
  .smart-scroll{
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030;
}
.scrolled-down{
   transform:translateY(-100%); transition: all 0.3s ease-in-out;
}
.scrolled-up{
   transform:translateY(0); transition: all 0.3s ease-in-out;
}
  #sec {
    background-image: url('images/amazing.jpg');
    background-size: 100% 110%;
    width: 100%;
    height: 500px;
    text-align: center;
        background-repeat: no-repeat;
    background-size: cover;  
    background-position:  center center;
    margin-top: 350px
  }
  
  #header {
    height: 300px;
    background-color: white;
  }
  #atas{
    background-image: url('images/forest.jpg');
    background-size: 100% 110%;
    width: 100%;
    height: 300px;
    margin-top: 400px;
    text-align: center;
        
     
}
#rok {
    background-image: url('images/amazing.jpg');
    background-size: 100% 110%;
    width: 100%;
    height: 813px;
    text-align: center;
        background-repeat: no-repeat;
    background-size: cover;  
    background-position:  center center;
    background-attachment: fixed;   
}
#atasan {
    background-image: url('images/forest.jpg');
    background-size: 100% 110%;
    width: 100%;
    height: 813px;
    text-align: center;
        background-repeat: no-repeat;
        margin-left: auto;
        margin-right: auto;
    display: block;
    background-size: cover;   
    background-position:  center center;
    background-attachment: fixed;      
}
#hijab {
    background-image: url('images/clock.jpg');
    background-size: 100% 110%;
    width: 100%;
    height: 813px;
    text-align: center;
        background-repeat: no-repeat;

    background-size: cover;  
    background-position:  center center;
    background-attachment: fixed;       
}

.jumbotron .display-4{
    color: white;
    text-shadow: 5px 5px 5px rgba(0, 0, 0, 0.7);
    font-size: 50px;
    top: 85%;
    left: 50%;
    position: absolute;
    transform: translateX(-50%) translateY(-50%);
}
.display{
    color: white;
    font-size: 50px;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translateX(-50%) translateY(-50%);
}
.jumbotron .display-4 span{
    font-weight: 500;
}

.jumbotron .display-5{
    color: black;
    text-align: center;
    font-weight: 100;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7);
    font-size: 15px;
    margin-bottom: 20px;
}

  #navbar-brand1 {
    font-family: 'Architects Daughter', cursive;

    float: right;
    font-size: 17pt;
    margin-top: 22px;
    margin-right: 40px;
  }
  
  .A {
    font-family: 'Kaushan Script', cursive;
    color: #6A1C11;

  }
  .glyphicon {
    font-size: 15pt;
    
    right: 1;
margin-top: 22px;
position: fixed;
z-index: 1;
  }
  #usr {
    color: #6A1C11;
    font-family: 'Kaushan Script', cursive;

  }
  #usr:hover {
    color: black;
  }
  ul,li,a {
    color: brown;
  }
  .profile {
    font-size: 14pt;
    margin-left: 20px;
    margin-top: -10px;
  }
  
  #menu {
    background-color: brown;
    background-size: 100% 950%;
    width: 100%;
    height: 700px;
    text-align: center;
        background-repeat: no-repeat;
    background-size: cover;   
    background-position:  center center;
    background-attachment: fixed;
    object-fit: cover;
  }
  .jumbotron .display-3{
    color: black;
    font-size: 20px;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translateX(-50%) translateY(-50%);
}
  .form-group {
    width: 30%;
    align-items: center;
  }
  .navbar.transparent.navbar-inverse  {
    height: 80px;

    border-width: 0px;
    -webkit-box-shadow: 0px 0px;
    box-shadow: 0px 0px;
    background-color: rgba(0,0,0,0.0);
    background-image: -webkit-gradient(linear, 50.00% 0.00%, 50.00% 100.00%, color-stop( 0% , rgba(0,0,0,0.00)),color-stop( 100% , rgba(0,0,0,0.00)));
    background-image: -webkit-linear-gradient(270deg,rgba(0,0,0,0.00) 0%,rgba(0,0,0,0.00) 100%);
    background-image: linear-gradient(180deg,rgba(0,0,0,0.00) 0%,rgba(0,0,0,0.00) 100%);
}
  #navv {
    margin-top: 28px;
    float: left;
        margin-right: 0;
        margin-left: 20px;
        background-color: brown;
  }
  #imgs {
    margin-top: 80px;
    float: right;
  }
  #imgs1 {
    margin-top: 245px;
    width: 53%;

  }
  
  #topp {
    background-color: brown;
  }
  .imga {
    width: 200px;
    margin-top: 25px;
    height: 200px;
  }
  .navbar-nav.navbar-center {

    position: absolute;
    left: 50%;
    top: -5%;
    transform: translatex(-50%);
}
ul.navbar-right li a {
  color: red;
}
    ul, li a {
        font-size: 20px;
        margin-top: 10px;
    }
   html, body{
    color: brown;
    width:100%;
    height:100%;
    background-color:transparent;
	font-family: '', sans-serif;
    }

.navbar {
  background-color: brown;
}
#ba{
    font-size: 50px;
    color: white;
    margin-left: 50px;
}
.nav-link {
    color: white;
}

#menu-toggle {
right: 10;
margin-left: 20px;
margin-top: 22px;
position: fixed;
z-index: 1;
}


</style>

<style>
  #sidebar-wrapper {
margin-right: -250px;
right: 0;
width: 250px;
background: white;
position: fixed;
height: 100%;
overflow-y: auto;
z-index: 2000;
transition: all 0.5s ease-in 5s;
-webkit-transition: all 0.5s ease-in 5s;
-moz-transition: all 0.5s ease-in 5s;
-ms-transition: all 0.5s ease-in 5s;
-o-transition: all 0.5s ease-in 5s;
}

.sidebar-nav {
position: absolute;
right: 1;
top: 0;
width: 250px;
list-style: none;
margin: 0;
padding: 0;
}

.sidebar-nav li {
line-height: 50px;
text-indent: 20px;
}

.sidebar-nav li a {
color: black;
display: block;
text-decoration: none;
font-size: 17pt;
}

.sidebar-nav li a:hover {
color: black;
background: rgba(255,255,255,0.2);
text-decoration: none;
}

.sidebar-nav li a:active, .sidebar-nav li a:focus {
text-decoration: none;
}

.sidebar-nav > .sidebar-brand {
height: 55px;
line-height: 55px;
font-size: 18px;
}

.sidebar-nav > .sidebar-brand a {
color: black;
}

.sidebar-nav > .sidebar-brand a:hover {
color: #fff;
background: none;
}

#menu-toggle {
top: 1;
right: 10;
position: fixed;
z-index: 1;
}

#sidebar-wrapper.active {
left: 0px;
width: 250px;
transition: all 0.5s ease-in 5s;
-webkit-transition: all 0.5s ease-in 5s;
-moz-transition: all 0.5s ease-in 5s;
-ms-transition: all 0.5s ease-in 5s;
-o-transition: all 0.5s ease-in 5s;
}

.toggle {
margin: 5px 5px 0 0;
}
</style>


