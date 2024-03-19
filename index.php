<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allen DECLERUS Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobile.css" media="screen and (max-width:760px)">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <script src="https://web3forms.com/client/script.js" async defer></script>
</head>

<body>

    <!-- nav -->
    <nav class="navbar mt-5 ">
        <div class="container">
            <div class="navbar-left">
                <a href="">
                    <h1 class="text-violet">AD</h1>
                </a>
            </div>

            <div class="navbar-right text-dark " id="menu">
                <ul>
                    <li>
                        <a href="#about">about</a>
                    </li>
                    <li>
                        <a href="#project">Projects</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end nav -->

    <!-- header  content -->

    <!-- commentaire -->
    <header>
        <div class="container">
            <div class="brand ">

                <div class="brand-left ">
                    <div class="content pt-5">
                        <div class="title mt-3">
                            <h1>Allen <br> DECLERUS</h1>
                        </div>

                        <div class="paragraph mt-2">
                            <p data-aos="fade-right" class="text-dark">
                                Data analyst |
                                Beatmaker  YMP | 
                                computer science student
                            </p>
                        </div>


                        <div class="hire-me mt-5">
                            <a href="">
                                <button class="button">
                                Contact Me
                                </button>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="brand-right ">

                    <div class="img-header">
                        <img src="images/Allen.jpg
                      " alt="" class="brand--image">
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!--end header content -->

    <!-- main content -->
    <main class="princ">
        <!-- section experience*********** -->
        <section class="partnerss">
            <div class="container">
                <div class="partners">
                    <img src="images/go.gif" alt="img" id="im1">
                    <img src="images/go.gif" alt="img" id="im2">
                    <img src="images/go.gif" alt="img" id="im3">
                    <img src="images/go.gif" alt="img" id="im4">
                </div>
            </div>
        </section>


        <section class="experience">
            <div class="container">

                <!-- ****** -->
                <div class="experience--part">
                    <div class="experience--part__left">
                        <?php 
                            $dateActuelle = new DateTime();
                            $dateAutre = new DateTime('2023-10-30');
                            $diff = $dateActuelle->diff($dateAutre);
                            $experience= $diff->y
                        ?>
                        <h1><?php echo  $experience ."+"; ?></h1>
                        <p>Years of Work Experience</p>
                    </div>

                    <div class="experience--part__right">
                        <h3>Skilled data analyst and experienced beatmaker, with expertise in specified fields.</h3>
                        <div class="experience--part__rightCards">
                            <div class="experience--part__rightCard">
                                <div>

                                    <i class="fas fa-drafting-compass"></i>

                                    <h4>Data analyst</h4>

                                    <a href="#">Découvrir plus &nbsp;</i></a>
                                </div>
                            </div>
                            <!-- *** -->
                            <div class="experience--part__rightCard">
                                <div>

                                    <i class="fas fa-desktop"></i>
                                    <h4>Beatmaker</h4>

                                    <a href="https://declerusallen.github.io/ymp_stream/">Découvrir plus &nbsp;</i></a>
                                </div>
                            </div>
                            <!-- *** -->
                            <div class="experience--part__rightCard">
                                <div>
                                    <i class="fas fa-bolt"></i>
                                    <h4>Others</h4>

                                    <a href="#">Découvrir plus &nbsp;</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- fin fin section****** -->




        <div class="container mt-5">
            <!-- section work************************************************* -->
            <section class="work">
                <div class="container">
                    <div class="work--title">
                        <div>
                            <h3>PROJECTS</h3>
                        </div>

                        <div>
                            <p>Explore my portfolio: showcasing recent creations born from passion and unique vision.</p>

                            <a href="https://github.com/DeclerusAllen">Explore more &nbsp;<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- ***** -->
                    <div class="work--cards" id="project">
                        <div class="work--card">
                           <a href="https://ymp.netlify.app"> <img src="images/ymplay.png" alt="image"></a>
                        </div>

                        <div class="work--card">
                            <img src="images/Experience1.png" alt="image">
                        </div>

                        <div class="work--card">
                            <img src="images/SM.png" alt="image">
                        </div>

                        <div class="work--card">
                            <img src="images/YD.png" alt="image">
                        </div>
                        <div class="work--card">
                            <img src="images/vrzone.png" alt="image">
                        </div>

                        <div class="work--card">
                            <img src="images/Experience1.png" alt="image">
                        </div>

                        
                    </div>
                </div>
            </section>
            <!--fin section work************************************************* -->
        </div>

        <!-- fin section************************************************* -->


        <!-- fin prix section****** -->
        <div class="container waiting-bloc-text">
            <div class="row">

                <div class="col-sm-5 text-center">
                    <img data-aos="fade-up-right" class="waiting-cover" src="images/Allen.jpg" alt="cover" style="border-radius: 8px;">
                </div>

                <div class="col-sm-7" id="about">
                    <h1 class="waiting-text-header text-violet">Who is Allen</h1>
                    <div id="hau">
                    <p class="mt-3 text-dark">Allen <em>Declerus</em> 
                        Allen excels in data analysis, mastering the art of deciphering complex datasets to extract meaningful insights. His expertise lies in using advanced data analysis tools and techniques to identify trends, patterns, and valuable insights. He is particularly skilled in predictive analysis, solving complex problems across various domains.
                    <br>
                    <p class="waiting-text-desc text-dark">Simultaneously, his interest in scalable database design and artificial intelligence reflects his desire to understand the technological foundations necessary for efficient data management and analysis. This technical expertise seamlessly integrates with his love for music, showcasing his ability to merge sharp analytical skills with artistic and technological domains.
                    </p>
                </div>

                    <div class="google--button mt-3">
                        <a class="" href="https://www.linkedin.com/in/allendeclerus"
                            target="_blank"><img src="images/github.png" height="60" alt="google play"></a>
                    </div>

                </div>
            </div>
        </div>
        <!-- fin fin section****** -->
        <!-- section testimonials************************************************* -->
        <section class="testimonials" id="contact">
            <div class="container">
                <div class="testimonials--card">
                    <div class="illus">
                        <i class="fas fa-quote-right"></i>
                        <img src="images/Icon.png" alt="image">
                    </div>
                    <div class="descrip">
                        <p>&#10077; comment 1
                        </p>

                        <span>Name</span>
                    </div>
                </div>

                <div class="testimonials--card">
                    <div class="illus">
                        <i class="fas fa-quote-right"></i>
                        <img src="images/Icon.png" alt="image">
                    </div>
                    <div class="descrip">
                        <p>&#10077; comment 2
                        </p>

                        <span>Name
                        </span>
                    </div>
                </div>

                <div class="testimonials--card">
                    <div class="illus">
                        <i class="fas fa-quote-right"></i>
                        <img src="images/Icon.png" alt="image">
                    </div>
                    <div class="descrip">
                        <p>&#10077; comment 3
                        </p>

                        <span>Name</span>
                    </div>
                </div>
            </div>
        </section>


    </main>
    <!--end main content -->

    <!-- footer content  -->
    <footer id="footer">
        <div class="container">
            <div class="footer--left">
                <h2>Let's connect</h2>
                <p>Connect with me on the networks below</p>

                <div class="icons">
                    
                    <a href="https://www.linkedin.com/in/allendeclerus">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="https://github.com/DeclerusAllen">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="https://www.facebook.com/allen.declerus">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="https://www.instagram.com/dallbeat2.0/">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>

                <h4><a href="mailto: declerusallen20@gmail.com">declerusallen20@gmail.com&nbsp;<i class="fas fa-arrow-right"></i></a></h4>
            </div>
            <!-- ***** -->
            <div class="footer--right" id="contact">
                <h2>Drop me a message, let's collaborate and create something together.</h2>

                <form action="https://api.web3forms.com/submit" method="POST">

                    <input type="hidden" name="access_key" value="a0d08bed-6891-4a51-8f45-2a3b524078a4">
                
                    <input type="text" name="name" placeholder="your fullname" required>
                    <input type="email" name="email" placeholder="your mail" required>
                    <textarea name="message" placeholder="How CAN I HELP YOU?" required></textarea>
                    <div class="h-captcha" data-captcha="true"></div>
                    <button type="submit">Submit Form</button>
                
                </form>
            </div>
        </div>
    </footer>
    <div class="footer--little">
        <h4>Designed by AD</h4>
    </div>
    <!--end footer content  -->


    <script src="https://unpkg.com/scrollreveal"></script> 

    <script>
        ScrollReveal().reveal('.work--cards');
        ScrollReveal().reveal('.brand');
        ScrollReveal().reveal('.testimonials');
        ScrollReveal().reveal('.experience');
        ScrollReveal().reveal('.experience--2');
    </script>
   
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!--<script>
        function sendEmail(){
            Email.send({
                SecureToken:"ee4a8cca-9f5c-41c3-9237-7eb8c5377694",
            /*Host : "smtp.elasticemail.com",
            Username : "dallbeat20@gmail.com",
            Password : "F4E9161CC7DFA0E523D4C91F66BD073B88EA",
            */
            To : 'dallbeat20@gmail.com',
            From : document.getElementById("email").value,
            Subject : "New contact Form Enquery",
            Body : "Name: " + document.getElementById("name").value
                + "<br> Email: " + document.getElementaryById("email").value
                + "<br> message: " + document.getElementaryById("message").value
        }).then(
        message => alert("message send successfully")
        );
        }
    </script>
-->

</body>

</html>