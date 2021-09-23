<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="lib/sal.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/typo.css">
    <link rel="stylesheet" href="style/hero-anim.css">
    <link rel="stylesheet" href="style/contact.css">

</head>
<body>

    <nav class="sticky-nav">
        <ul>
            <li class="desktop-menu"><a href="index.html">Strona główna</a></li>
            <li class="desktop-menu"><a href="projects.html">Projekty</a></li>
            <li class="desktop-menu"><a href="contact.php">Kontakt</a></li>
            <li class="desktop-menu"><a href="#">O mnie</a></li>
            <li class="mobile-menu"><a href="#"></a></li>
        </ul>

    </nav>

    <div class="mobile-menu-items">
        <ul>
            <li class="mobile-menu-item"><a href="index.html">Strona główna</a></li>
            <li class="mobile-menu-item"><a href="projects.html">Projekty</a></li>
            <li class="mobile-menu-item"><a href="contact.php">Kontakt</a></li>
            <li class="mobile-menu-item"><a href="#">O mnie</a></li>
        </ul>
    </div>

    <header class="hero-image hero-contact"> 
        <h1
            data-sal="slide-up"
            data-sal-delay="400"
            data-sal-duration="1000"
            data-sal-easing="ease-out-back">
            Kontakt
        </h1>
        <div class="hero-anim-shape shape-1"></div>
        <div class="hero-anim-shape shape-2"></div>
        <div class="hero-anim-shape shape-3"></div>
        <div class="hero-anim-shape shape-4"></div>
        <div class="hero-anim-shape shape-5"></div>
    </header>

        <?php
            if(isset($_POST['submit'])){
                $to      = 'przemek.cwiertka@gmail.com';
                $subject = $_POST['subject'];
                $message = $_POST['message'];
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
                $headers .= "From: kaihatsu@gmail.com" . "\r\n" .
                "Reply-To: kaihatsu@gmail.com" . "\r\n" .
                "X-Mailer: PHP/" . phpversion();

            mail($to, $subject, $message, $headers);
            }
        ?>

        <div class="wrapper contact-wrapper">
            <span class="contact-frame-top"></span>
            <span class="contact-frame-dots"></span>
            <form action="" method="post">
                <div class="dest-msg">
                    <h2 class="dest-msg__header">Napisz do</br><span class="msg-underline">mnie</span></h2>
                    <span class="dest-msg__decor"></span>
                </div>
                <div class="form-msg">
                    <span class="name1 input"><input type="text" name="first_name" placeholder="Imię" required></span>
                    <span class="name2 input"><input type="text" name="last_name" placeholder="Nazwisko" required></span>
                    <span class="title input"><input type="text" name="subject" placeholder="Tytuł" required></span>
                    <span class="mail input"><input type="text" name="email" placeholder="Adres email" required></span>
                    <span class="mail input"><textarea rows="5" name="message" placeholder="Wiadomość" cols="30" required></textarea></span>
                    <input class="submit-btn input" type="submit" name="submit" value="Wyślij">
                </div>
            </form>
        </div>

    <div class="page-up">
        <img src="svg/050-up chevron.svg" alt="">
    </div>

    <script src="lib/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="lib/sal.js"></script>
    <script src="js/index.js"></script>

    <footer class="footer">
        <div class="footer__links">
            <p>Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></p>
        </div>
        <div class="footer__social">
            <img src="svg/programing/github-brands.svg" alt="">
            <img src="svg/programing/linkedin-brands.svg" alt="">
            <img src="svg/programing/envelope-open-text-solid.svg" alt="">
        </div>
    </footer>




</body>
</html>