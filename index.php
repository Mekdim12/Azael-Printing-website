<?php
include("./inclued/header.php");
include("../azaelprinting.com-v1/src/sendmail.php");
?>


<div class="container-fluid">
    <nav>
        <div class="container nav_container">
            <a href="index.php">
                <h4>
                    <a href="index.php">
                        <div class="logoimageholder">
                            <img id="logo_image" src="./image/index/logoindx.png" alt="Not found" srcset="">
                        </div>
                    </a>
                </h4>
            </a>

            <ul class="nav_menu">
                <li class="active"><a href="index.php" title=" to go home page"> Home </a></li>
                <li><a href="./src/about.php" title="detailes about us"> About </a></li>
                <li><a href="./src/service.php" title="available service provide by us"> Service </a></li>
                <li><a href="./src/contact.php" title="detailes to contact us"> ContactUs </a>
                </li>

            </ul>
            <div class="ham-btn">
                <button id="open-menu-btn" title="click on to open Menu"><i class="uil uil-bars"></i> </button>
                <button id="close-menu-btn" title="click on to close Menu"><i class="uil uil-multiply"></i>
                </button>
            </div>

        </div>
    </nav>
    <!-- </div> -->
    <!-- <div class="container-fluid"> -->
    <!-- ================================FIRST SECTION ======================= -->
    <!-- ========================== Footer ===================== -->
    <div class="home_minor_css" title="You welcom to Azael Printing!  ">
        <div class="container home_container">
            <div class="homeBackground">

                <img class="bgImg" src="./image/index/index.png" alt="Erorr 404: image not found ">


                <!-- <img   -->
                <div class="fgPra">
                    <h1>Printing Service In <br>Addis Ababa</h1>
                    <p>
                        Azael is a printing business that offers high-quality products and services.
                        We offer custom printing, design, and delivery, so you can get the perfect
                        product for any occasion. We use the latest technology to ensure the
                        highest quality prints and fast turnaround times. Get in touch today to
                        see how we can help you!
                    </p>
                </div>
                <p><a href="./src/contact.php " class="btn contact-us_btn" title="click on to contact us">Contact Us</strong></a> </p>

            </div>
        </div>
    </div>
    <!-- ================================END OF #FIRST SECTION ======================= -->





 <!-- ================================SECOND SECTION ======================= -->
 <section class="services">
        <h1>Services</h1>
        <div class="container services_container" title="available services">
            <article class="service">
                <div class="service_image" title="Label and Stiker">
                    <a href="./dist/contents/labsticker.php"> <img src="./image/index/index-2.jpg" alt=""></a>
                </div>
                <div class="service_info">
                    <h1>Label And Sticker Printing</h1>
                    <p style="color: #2d84e7 !important ;">A Service thatallows customers to request and
                        print docmuments online </p>
                    <!-- <a href="./dist/contents/labsticker.php" class="btn btn-primary">Detailes..</a>                     -->
                </div>                
            </article>

            <article class="service" >
                <div class="service_image" title="Branding Printing">
                    <a href="./dist/contents/branding.php"> <img src="./image/index/index3.png" alt=""></a>
                </div>
                <div class="service_info">
                    <h1>Branding Printing</h1>
                    <p style="color: #2d84e7 !important ;">A Service that allows customers to order
                        personalized
                        documents that help them to brand themseleves
                    </p>
                    <!-- <a href="./dist/contents/branding.php" class="btn btn-primary">Detailes..</a>  -->
                </div>                               
            </article>

            <article class="service" >
                <div class="service_image" title="Logo Designing">
                <a href="./dist/contents/logo.php"> <img id="image" src="./image/index/index4.png" alt="not found"></a>
                </div>
                <div class="service_info">
                    <h1>Logo Designing</h1>

                    <p style="color: #2d84e7 !important ;">A Service that allows customers to have a
                        custom made logoswith best graphics designers</p>
                    <!-- <a href="./dist/contents/logo.php" class="btn btn-primary">Detailes..</a>                      -->
                </div>               
            </article>
        </div>
    </section>
    <!-- ================================END OF #SECOND SECTION ======================= -->




    <script type="text/javascript" src="./dist/script/main.js"></script>