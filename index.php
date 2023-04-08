<?php
include("./inclued/header.php");
include("../azaelprinting.com-v1/src/sendmail.php");
?>


<div class="container-fluid">
    <nav>
        <div class="container nav_container">
            <a href="index.php">
                <h4><a href="index.php"> <img id="imag" src="./image/index/logoindx.png" alt="Not found" srcset="" style="position:absolute;width: 18rem; height:3rem; top:2rem; float:left; left: 4rem;"></a>
                </h4>
            </a>

            <ul class="nav_menu">
                <li class="active"><a href="index.php" title=" to go home page"> Home </a></li>
                <li><a href="./src/about.php" title="detailes about us"> About </a></li>
                <li><a href="./src/service.php" title="available service provide by us"> Service </a></li>
                <li><a href="./src/contact.php" title="detailes to contact us"> ContactUs </a>
                </li>
            </ul>
            <button id="open-menu-btn" title="click on to open Menu"><i class="uil uil-bars"></i> </button>
            <button id="close-menu-btn" title="click on to close Menu"><i class="uil uil-multiply"></i>
            </button>
        </div>
    </nav>
    <!-- </div> -->
    <!-- <div class="container-fluid"> -->
    <!-- ================================FIRST SECTION ======================= -->
    <!-- ========================== Footer ===================== -->
    <div class="home_minor_css" title="You welcom to Azael Printing!  ">
        <!-- <h1>Home</h1> -->
        <div class="container home_container">
            <div class="homeBackground">
                <img class="bgImg" src="./image/index/index.png" alt="Erorr 404: image not found ">

                <!-- <img   -->
                <div class="fgPra">
                    <h1>Printing Service <br>In Addis Ababa</h1>
                    <p>
                        Azael is a printing business that offers high-quality products and services.
                        We offer custom printing, design, and delivery, so you can get the perfect
                        product for any occasion. We use the latest technology to ensure the
                        highest quality prints and fast turnaround times. Get in touch today to
                        see how we can help you!
                    </p>
                </div>
                <p><a href="./src/contact.php " class="btn" title="click on to contact us"><strong>Contact Us</strong></a> </p>

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

            <article class="service">
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

            <article class="service">
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

    <!-- ================================THIRD SECTION ======================= -->
    <div class="testimonials" title="Customer Testimonial">
        <!-- <h1>Testimonial</h1> -->
        <div class="container testimonials-container">
            <div class="testimonial">
                <img class="imgT" src="./image/index/index5.png" alt="Thsi is picture five ***********">
                <div class="testimonial_speach">

                    <!-- end of testimonial speechs -->
                    <p>
                        Azael in Addis Ababa has been an absolute dream to work with.
                        They have been incredibly helpful, quick and professional. I would highly
                        recommend them for all your digital printing
                        needs. <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        - Girma Getachew
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- ================================END OF #THIRD SECTION ======================= -->

    <!-- ================================FOURTH SECTION ======================= -->
    <div class="contactus" title="Contact Us Form" id="contactus">
        <!-- <h1>Contact Us </h1> -->
        <!-- <div class="contactus_right"> -->
        <div class="container content contactus_container">
            <div class="azaelPrint contact_left">
                <h1>Azael Digital Printing Contact Form</h1>
                <p>Fill Out This Form To Get In Touch With The Team At Azael Digital Printing For All Your
                    Printing
                    Needs.
                </p>
            </div>

            <div class="right-side contact_right">
                <!-- <div class="topic-text">Send us a message</div>
                            <p>If you have any work from me or any types of quries related to my tutorial, you can send me message from
                                here. It's my pleasure to help you.</p> -->
                <form method="post" name="contact_form">
                    <div class="inputs">
                        <input type="text" name="name" placeholder="Name" title="Please filout your name here.." required>
                        <input type="email" name="email" placeholder="Email" title="Please filout your email here.." required>
                    </div>
                    <div class="msg">
                        <br>
                        <input type="text" name="subject" placeholder="Subject..." title="Please filout a subject here.." required>
                        <textarea name="message" placeholder="Message" rows="7" cols="20" title="Please leave your message here.." required></textarea>

                    </div>
                    <div class="send">
                        <?php if (empty($msg)) { ?>
                            <!-- <form method="post" enctype="multipart/form-data"> -->
                            <input class="fileChoose" type="hidden" name="MAX_FILE_SIZE" value="100000">
                            <!-- Select one or more files -->
                            <input class="fileChoose" name="userfile[]" type="file" multiple="multiple" title="If you want, attch your file/s here...">
                            <!-- <input class="fileChoose" type="submit" value="Send Files"> -->
                            <!-- </form> -->
                        <?php } else {
                            echo htmlspecialchars($msg);
                        } ?>

                        <button type="submit" name="submit" class="btn btn-primary" onclick="openPopup()" id="btn" title="If you finished, just click send button."> Submit</button>
                    </div>
                    <div>
                        <label for="info">Your Submission Status: <?php echo $alert; ?> </label>

                    </div>
                    <!-- <p>
                                    <label for="to">To: </label>
                                    <input type="text" name="to" placeholder="To.." >
                                </p>
                                <p>
                                    <label for="subject">Subject</label>
                                    <input type="text" name="subject" placeholder="Subject..." >
                                </p>
                                <p>
                                    <label for="name">Message</label>
                                    <input type="text" name="message" placeholder="Message" >
                                </p>
                                <button name="submit" name='submit' >Send</button>
                             -->


                </form>

            </div>
        </div>
        <!-- </div> -->
    </div>
    <!-- ================================END OF #FOURTH SECTION ======================= -->

    <!-- ================================ FIVTH SECTION ======================= -->
    <div class="aboutus" title="About Us">

        <div class="about_container">
            <div class="container aboutus_container">

                <img class="abtImg" src="./image/index/index6.png" alt="">
                <div class="aboutus_htry">
                    <h1>About us</h1>
                    <p>
                        <!-- <marquee behavior="scroll" direction="up"> -->
                        Hello everyone! I'm the founder of Azael, a
                        digital
                        printing business based here in the city. We
                        specialize in printing business cards, flyers, brochures, and other promotional
                        materials. We
                        also offer customers to have a satisfactory experience make sure your promotional
                        materials look
                        exactly the way you At Azael, we use the latest
                        technology and highest-quality materials to make sure that all of our products stand
                        out. We
                        also take pride in providing excellent customer
                        service, so that you always have a positive experience
                        with us. We strive to make sure that your project comes out exactly how you
                        envisioned it. So if
                        you're looking for a reliable printing service,
                        look no further than Azael!
                        <!-- </marquee> -->
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- ================================END OF #FIVTH SECTION ======================= -->
    <!-- </div> -->
    <?php
    include("footer.php");
    ?>
    <!-- </div> -->
    <!-- </div> -->