<!DOCTYPE html>
<html lang="en">

<head>

    <title>Contact</title>

    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="footer.css">

    <style>
        body,
        html {
            height: 100%;
            margin: 0;
        }

        .bg {
            /* The image used */
            background-image: url("ima.jpg");

            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;

        }

        .cent {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 25px;
        }

        .topright {
            position: absolute;
            top: 8px;
            right: 016px;
            font-size: 18px;
        }

        .topleft {
            position: absolute;
            top: 8px;
            left: 16px;
            font-size: 18px;
        }
    </style>
</head>

<body>



    <div class="bg">
        <div class="topright">
            <ul aling="center">
                <li><a href="home.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                
                <li><a href="mgallery.html">Gallery</a></li>
                <li><a href="Career.html">Career</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="php_set/login system/login_form.php">Order</a></li>
            </ul>
        </div>
        <div class="topleft">
            <img src="log.png" width="200" height="170">
        </div>
        <div class="cent">
            <h1
                style="text-align: center;font-family: AvantGarde Bk BT;font-size: 48px;background-color: rgba(255, 255, 255, 0.349);">
                Let’s Get Together</h1>
            <h3 style="text-align: center;font-family: AvantGarde Bk BT;background-color: rgba(255, 255, 255, 0.349);">
                Contact Us</h3>
        </div>
    </div>

    <br><br><br>

    <div class="row">

        <div class="col-md-5">
            <h1 style="color: red;text-align: center;">Contact</h1>
            <p style="text-align: center;">We strive to constantly be evolving and improving our business to bring you
                the best
                dining experience possible. We value your comment and feedback, so please don’t
                hesitate to fill out this online form if you have any concerns. We will get back to you
                as soon as possible.
                <br>
                You are reaching Okami Head Office. We can be reached during office hours Monday – Friday
                9:30 am – 5:00 pm AEST (except Sri Lanka Public Holidays). For urgent requests,
                please contact the restaurant directly.
            </p>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-6">

            <div class="container">
                <h3>Request Quote or Submit feedback</h3>
                <form action="form-process.php" method="POST">
                    <div class="form-group">
                        <label for="firstname">Firstname</label>
                        <input type="text" name="firstname" id="firstname" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="lastname">Lastname</label>
                        <input type="text" name="lastname" id="lastname" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="tel" name="phone" id="phone" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <input type="text" name="message" id="message" class="form-control" required>
                    </div>
                    <div class="form-group">
                <button class="btn btn-success" type="submit">Submit</button>
                <button class="btn btn-danger" type="reset">Reset</button>
            </div>
                </form>
            </div>
            
        </div>
    </div>

    <footer class="footer-distributed">

        <div class="footer-left">

            <h3><span>SUSHI</span> Japanese Restaurant</h3>

            <p class="footer-links">
                <a href="home.html" class="link-1">Home</a>

                <a href="about.html">About</a>
                <a href="menu.html">Menu</a>
                <a href="mgallery.html">Gallery</a>

                <a href="Career.html">Career</a>

                <a href="contact.html">Contact</a>


            </p>

            <p class="footer-company-name">Company Name © 2015</p>
        </div>

        <div class="footer-center">

            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>No.444</span> Main Road, Gall</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+1.555.555.5555</p>
            </div>

            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:support@company.com">sushires.com</a></p>
            </div>

        </div>

        <div class="footer-right">

            <p class="footer-company-about">
                <span>About the company</span>
                SUSHI Japanese Restaurant is a pioneer in bringing Japanese style All You Can Eat into Sri Lanka. Every
                dish at SUSHI is freshly made to order from the menu with 30+ options. Combined with the cozy
                atmosphere, this makes SUSHU us an essentially family and group gathering friendly venue.
            </p>

            <div class="footer-icons">

                <a href=""><i class="fa-brands fa-facebook"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href=""><i class="fa-brands fa-twitter"></i></a>
                <a href=""><i class="fa-brands fa-google-plus"></i></a>
                <a href=""><i class="fa-brands fa-youtube"></i></a>

            </div>

        </div>

    </footer>


</body>

</html>