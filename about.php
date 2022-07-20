<?php


require_once("tools/Mobile_Detect.php");

$detect = new Mobile_Detect;

$IS_MOBILE = $detect->isMobile();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ferox Group - Growing American Small Businesses</title>
    <!-- CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- CSS End -->
    <!-- Typefaces -->
    <link rel="stylesheet" href="https://use.typekit.net/smi3lym.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Mono&display=swap" rel="stylesheet">
    <!-- Typefaces End-->
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/8cc932b2f3.js" crossorigin="anonymous"></script>
    <!-- FontAwesome End -->
</head>

<body>
    <div class="content">
        <header>
            <div class="center">
                <div class="flex-row">
                    <div class="logo">
                        <img src="images/logo.png">
                    </div>
					<div class="menu">
						<i class="fal fa-bars" style="color:white;"></i>
						<nav>
							<ul class="list-unstyled">
								<li class="list-item">
									<a href="index.php">Home</a>
								</li>
								<li class="list-item">
									<a href="index.php#meet">Meet The Team</a>
								</li>
								<li class="list-item">
									<a href="index.php#services">Services</a>
								</li>
								<li class="list-item">
									<a href="index.php#about">Contact Us</a>
								</li>
								<li class="list-item">
									<a href="about.php">About Us</a>
								</li>
							</ul>
						</nav>
					</div>
                </div>
            </div>
        </header>
        <section class="hero">
            <div class="center">
                <div class="flex-row">
                    <div class="headline">
                        <h1 class="balboa" data-aos="fade-right" data-aos-delay="5100">ABOUT<br> FEROX <br>GROUP</h1>
                        <h2 data-aos="fade-right" data-aos-delay="5100">Ferox Group exists to teach American business owners how to be better at business. We use cutting edge e-commerce technology and powerful small business development tools to help business owners understand and thrive in their current market.</h2>
                    </div>
                    <div class="sphere" data-aos="fade-up" data-aos-delay="5400">
                        <img src="images/update/logo-sphere.png">
                    </div>
                    <div class="growth-message"><!--
                        <img src="./images/text-verticalgrowth.svg">
                        -->
                    </div>
                </div>
                <div class="verticals">
                    <div class="v-one"></div>
                    <div class="v-two"></div>
                    <div class="v-three"></div>
                    <div class="v-four"></div>
                    <div class="v-five"></div>
                </div>
            </div>
        </section>




        <section id="meet" class="meet">
            <div class="center">
                <h4 class="balboa" data-aos="fade-up">Meet Your Team</h4>
                <div class="flex-row">
					<div class="meet-col">
                        <div class="bio">
                            <h5 data-aos="fade-right" class="balboa aos-init aos-animate">Bradley Pokorny</h5>
                            <p data-aos="fade-right" class="aos-init aos-animate">Bradley is from Houston, TX and is currently active duty Army
                                stationed
                                at Fort Bragg, NC.
                                <br><br>
                                He has a Bachelors Degree in Business Management &amp; Finance and is currently an MBA
                                student
                                at Syracuse University with a dual specialization in Entrepreneurship and Marketing
                                Strategy.
                                <br><br>
                                Outside of the Army, Brad has an extensive background in the Oil &amp; Gas sector,
                                specializing
                                in product development for drilling tools.</p>
                        </div>
                        <div class="image">
                            <div class="image-box aos-init aos-animate" data-aos="fade-up">
                                <img src="./images/team-bradp.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-row">
					<div class="meet-col">
                        <div class="bio">
                            <h5 data-aos="fade-right" class="balboa aos-init aos-animate">Collin Snyder</h5>
                            <p data-aos="fade-left" data-aos-delay="100" class="aos-init aos-animate">Collin is from Houston, TX and returned back to
                                Houston after serving four years in 2nd
                                Battalion, 75th Ranger Regiment.
                                <br><br>
                                He has a Bachelors Degree in Media Arts &amp; Animation from the Art Institute of Houston.
                                <br><br>
                                He has experience as a Technical Illustrator &amp; 3D Animator in the Oil &amp; Gas sector. He
                                currently works as a contract User Experience (UX) Designer, with a focus on interaction
                                design and visual design. </p>
                        </div>
                        <div class="image">
                            <div class="image-box aos-init aos-animate" data-aos="fade-up">
                                <img src="./images/team-collins.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-row">
					<div class="meet-col">
                        <div class="bio">
                            <h5 data-aos="fade-right" class="balboa aos-init aos-animate">Tyler Barnes</h5>
                            <p data-aos="fade-right" class="aos-init aos-animate">Tyler is from San Diego, CA and is currently active duty Army
                                stationed at Fort Bragg, NC.
                                <br><br>
                                He has over 10 years of software/web development, logical data design, system architecture, and building intelligent systems.
                                <br><br>
                               </p>
                        </div>
                        <div class="image">
                            <div class="image-box aos-init aos-animate" data-aos="fade-up">
                                <img src="./images/team-tylerb.jpg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-row">
					<div class="meet-col">
                        <div class="bio">
                            <h5 data-aos="fade-right" class="balboa aos-init aos-animate">Ashley Matthews</h5>
                            <p data-aos="fade-right" class="aos-init aos-animate">Ashley is from Houston, TX and
                                <br><br>
                                She has a ____ Degree in ____ &amp; from _____
                                <br><br>
                                Other info</p>
                        </div>
                        <div class="image">
                            <div class="image-box aos-init aos-animate" data-aos="fade-up">
                                <img src="./images/team-ashleym.jpg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-bg">
                    <img src="images/text-yourteam.svg">
                </div>
                <div class="verticals">
                    <div class="v-one"></div>
                    <div class="v-two"></div>
                    <div class="v-three"></div>
                    <div class="v-four"></div>
                    <div class="v-five"></div>
                </div>
            </div>
        </section>





        <footer>
            <div class="center">
                <p>Copyright &copy; 2021 &middot; Ferox Group</p>
            </div>
        </footer>
    </div>
    <!-- Animations JS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000, // values from 0 to 3000, with step 50ms
            easing: 'ease', // default easing for AOS animations
        });
    </script>
    <!-- Animations JS End -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>
    <script>
        $("document").ready(function () {

            setTimeout(
                function () {
                    $('body').addClass('scroll');
                }, 100);

        });
    $("document").ready(function () {
        $(".menu i").click(function () {
            $(".menu").toggleClass("open");
            $("nav").slideToggle("fast", function () {
                // Animation complete.
            });
        });

        $("nav").click(function () {
            $(".menu").toggleClass("open");
            $(this).slideToggle("fast", function () {
                // Animation complete.
            });
        });

        $("nav a").click(function () {
            var href = $(this).attr('href');
            $([document.documentElement, document.body]).animate({
                scrollTop: $(href).offset().top
            }, 2000);
        });
    });
    </script>
</body>

</html>
