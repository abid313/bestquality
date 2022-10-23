<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Hexashop - Product Detail Page</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('assets/css/templatemo-hexashop.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('assets/css/owl-carousel.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('assets/css/lightbox.css') }}">
<!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo">
                            <img src="{{ asset('logo.png') }}" width="195" height="59">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="/" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="/">Rings</a></li>
                            <li class="scroll-to-section"><a href="/">Necklaces</a></li>
                            <li class="scroll-to-section"><a href="/">Bracelets</a></li>
                            <li class="scroll-to-section"><a href="../product">Products</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Other</a>
                                <ul>
                                    <li><a href="../about">About Us</a></li>
                                    <li><a href="../contact">Contact Us</a></li>
                                </ul>
                            </li>
                        </ul>   
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <br><br>


    <!-- ***** Product Area Starts ***** -->
    <section class="section" id="product">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                <div class="left-images">
                    <img src="{{ asset('products/fushia_rings01.jpeg') }}">
                    <img src="{{ asset('products/fushia_rings02.jpeg') }}">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="right-content">
                    <h4>Fushia Ring</h4>
                    <span class="price">Rp29.000</span>
                    <ul class="stars">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul>
                    <span>
                        Bahan : Alloy <br>
                        Warna : emas <br>
                        1 set isi 12 pcs <br>
                        Untuk ukuran cincinnya diameter 1,5cm - 1,65 cm
                    </span>
                    <br>
                    <div class="total">
                        <div class="main-border-button">
                            <a href="https://shopee.co.id/bestqualityy.in/6458636613">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- ***** Product Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="first-item">
                        <div class="logo">
                            <img src="{{ asset('logo-putih.png') }}" alt="bestquality.in" width="195" height="59">
                        </div>
                        <ul>
                            <li><a href="#">Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta</a></li>
                            <li><a href="#">Mam.cil.indonesia@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h4>Shopping &amp; Categories</h4>
                    <ul>
                        <li><a href="#">Ring Shopping</a></li>
                        <li><a href="#">Necklace Shopping</a></li>
                        <li><a href="#">Bracelet Shopping</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="/">Homepage</a></li>
                        <li><a href="about">About Us</a></li>
                        <li><a href="product">Products</a></li>
                        <li><a href="contact">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © 2022 bestquality.in Co., Ltd. All Rights Reserved. 
                    </div>
                </div>
            </div>
        </div>
    </footer>
    

    <!-- jQuery -->
    <script src="{{ URL::asset('assets/js/jquery-2.1.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ URL::asset('assets/js/popper.js') }}"></script>
    <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ URL::asset('assets/js/owl-carousel.js') }}"></script>
    <script src="{{ URL::asset('assets/js/accordions.js') }}"></script>
    <script src="{{ URL::asset('assets/js/datepicker.js') }}"></script>
    <script src="{{ URL::asset('assets/js/scrollreveal.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/imgfix.min.js') }}"></script> 
    <script src="{{ URL::asset('assets/js/slick.js') }}"></script> 
    <script src="{{ URL::asset('assets/js/lightbox.js') }}"></script> 
    <script src="{{ URL::asset('assets/js/isotope.js') }}"></script> 
    <script src="{{ URL::asset('assets/js/quantity.js') }}"></script>
    
    <!-- Global Init -->
    <script src="{{ URL::asset('assets/js/custom.js') }}"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

  </body>

</html>
