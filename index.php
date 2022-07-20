<?php


require_once("tools/Mobile_Detect.php");

$detect = new Mobile_Detect;

$IS_MOBILE = $detect->isMobile();


$SHOW_VIDEO = (!isset($_COOKIE["vidPlayed"]) && $_COOKIE["vidPlayed"] != "played");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ferox Group - Growing American Small Businesses</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
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

<body data-vp="<?php echo $SHOW_VIDEO; ?>">
    <div class="content">
		<?php if($SHOW_VIDEO) { ?>
        <div class="video">
            <img class="intro mobile-only" src="./video/intro-mobile.gif">
            <video class="intro desktop-only" width="auto" height="100%" autoplay muted>
				<?php if($IS_MOBILE) { ?>
                <source src="video/intro.mp4" type="video/mp4">
                <?php } else { ?>
				<source src="video/intro-desk.mp4" type="video/mp4">
				<?php } ?>
            </video>
        </div>
        <?php } ?>
        <header>
            <div class="center">
                <div class="flex-row">
                    <div class="logo">
                        <img src="images/logo.png">
                    </div>
					<div class="menu">
						<i class="fal fa-bars"></i>
						<nav>
							<ul>
								<li>
									<a href="#meet">Meet The Team</a>
								</li>
								<li>
									<a href="#services">Services</a>
								</li>
								<li>
									<a href="#about">Contact Us</a>
								</li>
								<li>
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
                        <h1 class="balboa" data-aos="fade-right" data-aos-delay="5100">EMPOWERING<br> AMERICAN <br>SMALL
                            BUSINESS</h1>
                        <h2 data-aos="fade-right" data-aos-delay="5100">Imagine what you could accomplish if you had a team of super intelligent, like-minded individuals that
already understood self-sacrifice, loyalty, and commitment for the cause with an unprecedented drive
and work ethic. That is the premise behind Ferox Group. Give a group of highly skilled, highly intelligent
individuals a task and have everyone facing the same direction and say go! With your idea and
understanding of your product, what could stop you? We’re going to bet nothing.</h2>
                        <a data-aos="fade-right" data-aos-delay="5300" href="contact.php">Grow your business</a>
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
						<div class="bio"></div>
                        <div class="image">
                            <div class="image-box" data-aos="fade-up">
                                <img src="./images/team-bradp.jpg">
                            </div>
                            <h3 data-aos="fade-right" class="balboa">Bradley Pokorny, MBA</h3>
                            <div class="bullets" data-aos="fade-up">
                                <ul class="mono">
                                    <li>Chief Executive Officer</li>
                                    <li>82nd Airborne Division</li>
                                    <li>OIF / OEF</li>
                                    <li>MBA, Syracuse University</li>
                                    <li>Growth Market Strategy, Cornell University</li>
                                    <li style="visibility: hidden;"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="meet-col">
                        <div class="image">
                            <div class="image-box" data-aos="fade-up" data-aos-delay="100">
                                <img src="./images/team-ilinai.jpg">
                            </div>
                            <h3 data-aos="fade-right" class="balboa">Ilina Ivanova, MBA</h3>
                            <div class="bullets" data-aos="fade-up" data-aos-delay="100">
                                <ul class="mono">
                                    <li>Chief Operations Officer</li>
                                    <li>MBA in Finance, Northern Illinois University</li>
                                    <li>PHR, HRCI</li>
                                    <li>Professional in Human Capital Management and Finance</li>
                                    <li style="visibility: hidden;"></li>
                                    <li style="visibility: hidden;"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-row">
                    <div class="meet-col">
						<div class="bio"></div>
                        <div class="image">
                            <div class="image-box" data-aos="fade-up">
                                <img src="./images/team-timothyl.jpg">
                            </div>
                            <h3 data-aos="fade-right" class="balboa">Timothy Lankau, JD</h3>
                            <div class="bullets" data-aos="fade-up">
                                <ul class="mono">
                                    <li>General Counsel for Ferox Group</li>
                                    <li>Law School, Washington Lee University (Magna Cum Laude)</li>
                                    <li>Bachelor of Business, Texas A&amp;M</li>
                                    <li>General Counsel, Ethos Behavioral Health Group</li>
                                    <li>Equity Partner, The GCF Group</li>
                                    <li>Specializes in Business Law, Contracts, and Investment/Acquisitions</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="meet-col">
                        <div class="image">
                            <div class="image-box" data-aos="fade-up" data-aos-delay="100">
                                <img src="./images/team-ashleym.jpg">
                            </div>
                            <h3 data-aos="fade-right" class="balboa">Ashley Matthews</h3>
                            <div class="bullets" data-aos="fade-up" data-aos-delay="100">
                                <ul class="mono">
                                    <li>Chief Financial Officer</li>
                                    <li>Business Finance</li>
                                    <li>Texas State University</li>
                                    <li style="visibility: hidden;"></li>
                                    <li style="visibility: hidden;"></li>
                                    <li style="visibility: hidden;"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-row">
                    <div class="meet-col">
						<div class="bio"></div>
                        <div class="image">
                            <div class="image-box" data-aos="fade-up">
                                <img src="./images/team-mossievq.jpg">
                            </div>
                            <h3 data-aos="fade-right" class="balboa">Mossiev Quintero</h3>
                            <div class="bullets" data-aos="fade-up">
                                <ul class="mono">
                                    <li>Formulations/Manufacturing Ops</li>
                                    <li>US Army Special Operations</li>
                                    <li>OIF/OEF</li>
                                    <li>BS Information Technology, AMU</li>
                                    <li>Advanced Dietary Supplements Advisor, IHS</li>
                                    <li>Anti-Aging Specialist</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="meet-col">
                        <div class="image">
                            <div class="image-box" data-aos="fade-up" data-aos-delay="100">
                                <img src="./images/team-ashleym.jpg">
                            </div>
                            <h3 data-aos="fade-right" class="balboa">Ashley Matthews</h3>
                            <div class="bullets" data-aos="fade-up" data-aos-delay="100">
                                <ul class="mono">
                                    <li>Chief Financial Officer</li>
                                    <li>Business Finance</li>
                                    <li>Texas State University</li>
                                    <li style="visibility: hidden;"></li>
                                    <li style="visibility: hidden;"></li>
                                    <li style="visibility: hidden;"></li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
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



        <section id="services" class="services">
            <div class="center">
                <h4 class="balboa" data-aos="fade-right">Services</h4>
                <div class="service-box" data-aos="fade-up">
                    <div class="flex-row">
                        <div class="service-col">
                            <div class="service-inner" data-aos="fade-up">
                                <div class="service-image">
                                    <img src="images/update/itdev.jpg">
                                </div>
                                <span>
                                    <h5 class="balboa">IT Development</h5>
                                    <p>Build and deploy powerful, intelligent, affordable business solutions.</p>
                                </span>
                            </div>
                        </div>
                        <div class="service-col">
                            <div class="service-inner" data-aos="fade-up" data-aos-delay="100">
                                <div class="service-image">
                                    <img src="images/update/paymentprocessing.jpg">
                                </div>
                                <span>
                                    <h5 class="balboa">Payment Processing (FeroxPay)</h5>
                                    <p>Accept all common payment types, even as a high-risk merchant.</p>
                                </span>
                            </div>
                        </div>
                        <div class="service-col">
                            <div class="service-inner" data-aos="fade-up" data-aos-delay="200">
                                <div class="service-image">
                                    <img src="images/update/brandid.jpg">
                                </div>
                                <span>
                                    <h5 class="balboa">Brand Strategy & Identity</h5>
                                    <p>Attract fiercely loyal customers & differentiate your business with powerful visuals.</p>
                                </span>
                            </div>
                        </div>
                        <div class="service-col">
                            <div class="service-inner" data-aos="fade-up">
                                <div class="service-image">
                                    <img src="images/update/supply.jpg">
                                </div>
                                <span>
                                    <h5 class="balboa">Establish Supply & Distro Networks</h5>
                                    <p>Solidify your resources & grow your reach.</p>
                                </span>
                            </div>
                        </div>
                        <div class="service-col">
                            <div class="service-inner" data-aos="fade-up">
                                <div class="service-image">
                                    <img src="images/update/ProductToMarketStrat.jpg">
                                </div>
                                <span>
                                    <h5 class="balboa">Manufacturing Operations</h5>
                                    <p>Establish an end-to-end vision & roadmap for your product or service.</p>
                                </span>
                            </div>
                        </div>
                        <div class="service-col">
                            <div class="service-inner" data-aos="fade-up">
                                <div class="service-image">
                                    <img src="images/update/GrowthMarketStartegy.jpg">
                                </div>
                                <span>
                                    <h5 class="balboa">Growth Market Strategy</h5>
                                    <p>Achieve higher levels of market share with a comprehensive plan of action.</p>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-cta" data-aos="fade-up" data-aos-delay="100">
                    <a href="contact.php">Build your empire</a>
                </div>
                <div class="text-bg">
                    <img src="images/text-services.svg">
                </div>
            </div>
        </section>



		<section id="about" class="who">
            <div class="center">
                <div class="flex-row">
                    <div class="who-col">
                        <h3 data-aos="fade-right" class="aos-init aos-animate"><br>Whatever <strong>your mission</strong>, we'll help you <strong>get it done</strong>.<br></h3>
                        <p data-aos="fade-right" class="aos-init aos-animate">As a veteran- and active duty owned-business, we know how to work toward a shared vision.<br>Ready to team up?</p>
                    </div>
                </div>
                <div class="text-bg">
                    <img src="images/update/contactus.svg">
                </div>
                <div class="verticals">
                    <div class="v-three"></div>
                </div>
                <div class="contact-cta" data-aos="fade-up" data-aos-delay="100">
                    <a href="contact.php">Contact Us</a>
                </div>
            </div>
        </section>




        <footer>
            <div class="center">
                <p>Copyright &copy; 2022 &middot; Ferox Group</p>
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
///////////////////		COOKIE
    
    function setCookie(key, value, expiry) {
        var expires = new Date();
        expires.setTime(expires.getTime() + (expiry * 24 * 60 * 60 * 1000));
        document.cookie = key + '=' + value + ';expires=' + expires.toUTCString() + '; Secure';
    }

    function getCookie(key) {
        var keyValue = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)');
        return keyValue ? keyValue[2] : null;
    }

    function eraseCookie(key) {
        var keyValue = getCookie(key);
        setCookie(key, keyValue, '-1');
    }
///////////////////		/COOKIE
    
        $("document").ready(function () {
			
			if(getCookie("vidPlayed") != "played") {
				setCookie("vidPlayed", "played", 3);
			}
			
            setTimeout(
                function () {
                    $('body').addClass('scroll');
                    $('.video').width("1px").height("1px");
                }, 5000);

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
