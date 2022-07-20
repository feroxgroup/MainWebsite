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
                    <div class="sphere" data-aos="fade-up" data-aos-delay="5400">
                        <img src="images/update/logo-sphere.png">
                    </div>
<!------------------>
            <div class="col-xl-8 offset-xl-2 py-5" style="position:relative;z-index:800;">

                <h1>Contact
                    <a href="https://ferox.group.com"><strong>FEROX GROUP</strong></a>
                </h1>

                <p class="lead">Whatever <strong>your mission</strong>, we'll help you <strong>get it done</strong>.<br></p>


                <form id="contact-form" method="post" action="contact-submit.php" role="form">

                    <div class="messages"></div>

                    <div class="controls">

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="form_name">Firstname *</label>
                                    <input id="form_name" type="text" name="name" class="form-control" placeholder="First name" required="required" data-error="Firstname is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="form_lastname">Lastname *</label>
                                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Last Name" required="required" data-error="Lastname is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="form_phone">Phone *</label>
                                    <input id="form_phone" type="text" name="phone" class="form-control" placeholder="123-456-7890" required="required" data-error="Phone Number is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_email">Email *</label>
                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="your@mission.com" required="required" data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_need">Subject *</label>
                                    <select id="form_need" name="need" class="form-control" required="required" data-error="Please specify your need.">
                                        <option value="">Select From:</option>
                                        <option value="1">General Inquiry</option>
                                        <option value="2">IT Development</option>
                                        <option value="3">Payment Processing</option>
                                        <option value="4">Brand Strategy & Identity</option>
                                        <option value="5">Establish Supply & Distro Networks</option>
                                        <option value="6">Product to Market Strategy</option>
                                        <option value="7">Growth Market Strategy</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="form_message">Message *</label>
                                    <textarea id="form_message" name="message" class="form-control" placeholder="What's your mission?" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-send" value="Submit">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="text-muted">
                                    <strong>*</strong> These fields are required.
                            </div>
                        </div>
                    </div>

                </form>

            </div>
            <!-- /.8 -->


<!------------------->
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
