<?php


require_once("tools/config.php");
require_once("tools/DBCon.php");
require_once("tools/EmailSubmit.php");

$toEmail = "contact@ferox.group";
$emailFrom = "leads@ferox.group";


$fromEmail = (isset($_REQUEST["email"]) && !empty($_REQUEST["email"])) ? $_REQUEST["email"] : "none";
$firstName = (isset($_REQUEST["name"]) && !empty($_REQUEST["name"])) ? $_REQUEST["name"] : "none";
$lastName = (isset($_REQUEST["surname"]) && !empty($_REQUEST["surname"])) ? $_REQUEST["surname"] : "none";
$phoneNumber = (isset($_REQUEST["phone"]) && !empty($_REQUEST["phone"])) ? $_REQUEST["phone"] : "none";
$subject = (isset($_REQUEST["need"]) && !empty($_REQUEST["need"])) ? $_REQUEST["need"] : "none";
$emailMessage = (isset($_REQUEST["message"]) && !empty($_REQUEST["message"])) ? $_REQUEST["message"] : "none";

$subjects = array(
	"1"	=> "General Inquiry",
	"2"	=>	"IT Development",
	"3"	=>	"Payment Processing",
	"4"	=>	"Brand Strategy & Identity",
	"5"	=>	"Establish Supply & Distro Networks",
	"6"	=>	"Product to Market Strategy",
	"7"	=>	"Growth Market Strategy",
);


$validRequest = true;

$sendSuccess = false;

if($fromEmail == "none" || $fromEmail == "none" || $fromEmail == "none" || $fromEmail == "none" || $emailMessage == "none" || intval($subject) < 1 || intval($subject) > 7) {
	$validRequest = false;
}

if($validRequest) {


	try {
		$db = new DBCon();
		$db->Link();
		$firstName = $db->EscapeQueryStmt($firstName, true);
		$lastName = $db->EscapeQueryStmt($lastName, true);
		$fromEmail = $db->EscapeQueryStmt($fromEmail, true);
		$phoneNumber = $db->EscapeQueryStmt($phoneNumber, true);
		$subject = $db->EscapeQueryStmt($subject, true);
		$db->Query("INSERT INTO Leads (FirstName, LastName, Phone, Email, Subject) VALUES ('{$firstName}', '{$lastName}', '{$phoneNumber}', '{$fromEmail}', '{$subject}');");
	} catch(Exception $e) {
		// todo handle
	}


	$emailSubject = $subjects[$subject];

	$emailBody = "<h2>New FeroxGroup Lead</h2><br />";
	$emailBody .= "<strong>First Name</strong>: {$firstName}<br />";
	$emailBody .= "<strong>Last Name</strong>: {$lastName}<br />";
	$emailBody .= "<strong>Phone</strong>: {$phoneNumber}<br />";
	$emailBody .= "<strong>Email</strong>: {$fromEmail}<br />";
	$emailMessage = htmlentities($emailMessage);
	$emailBody .= "<strong>User Message:</strong>{$emailMessage}<br />";


	$mail = EmailSubmit::make()
		->setTo($toEmail, 'Brad Pokorny')
		->setSubject($emailSubject)
		->setFrom($emailFrom, 'Lead Site')
		->setReplyTo('noreply@ferox.group', 'Mail Bot')
		->setCc(['Collin' => 'collin@ferox.group', 'tyler' => 'tyler@ferox.group', 'Brad' => 'brad@ferox.group'])
		->addGenericHeader('X-Mailer', 'PHP/' . phpversion())
		->setHtml()
		->setMessage($emailBody)
		->setWrap(78);

	$send = $mail->send();

	if($send) {
		$sendSuccess = true;
	}

}

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
<?php if($validRequest && $sendSuccess) { ?>
<!------------------>
            <div class="col-xl-8 offset-xl-2 py-5" style="position:relative;z-index:800;">

                <h1>Thank you for contacting
                    <a href="https://ferox.group.com"><strong>FEROX GROUP</strong></a>
                </h1>

                <p class="lead">We'll be in touch soon. <a href="index.php" style="color:#E7081C;">Home</a></p>

            </div>
            <!-- /.8 -->
<!------------------->
<?php } else { ?>
<!------------------>
            <div class="col-xl-8 offset-xl-2 py-5" style="position:relative;z-index:800;">

                <h1>There was an error...
                    <a href="mailto:contact@ferox.group"><strong>Email Us</strong></a> (contact@ferox.group)
                </h1>

            </div>
            <!-- /.8 -->
<!------------------->
<?php } ?>
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
