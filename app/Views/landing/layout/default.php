<!doctype html>
<html>


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <title>Home - Bitsplash.uk</title>
    <link rel="shortcut icon" href="<?= site_url() ?>assets/images/icon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="<?= site_url() ?>assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?= site_url() ?>assets/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="<?= site_url() ?>assets/font-awesome-4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="<?= site_url() ?>assets/font-awesome-4.7.0/css/font-awesome.min.css" />
    <script src="<?= site_url() ?>assets/js/jquery-1.11.3.min.js"></script>
    <script src="<?= site_url() ?>assets/js/wow.js"></script>
    <script>
        wow = new WOW();
        wow.init();
    </script>
    <script src="<?= site_url() ?>assets/js/jquery.particleground.js"></script>
    <script src="<?= site_url() ?>assets/js/demo.js"></script>
    <script src="<?= site_url() ?>assets/js/jquery.leanModal.min.js"></script>
    <script src="<?= site_url() ?>assets/js/calculator.js"></script>

    <!-- <script src="http://code.jivosite.com/widget/LhNjRubE3r" async></script> -->
</head>

<body>


    <script>
        function load() {

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {

                    var data = JSON.parse(this.responseText);
                    document.getElementById("bitfinex").textContent = "$" + Number(data.rates.bitfinex).toFixed(2);
                }
            };

            xhttp.open("GET.html", "get_price.html", true);
            xhttp.send();


        }
        window.onload = load;
    </script>



    <div class="main-btc-rate">
        <div class="btc-r-img">
            <img src="<?= site_url() ?>assets/images/btc-cu.png" />
        </div>
        <div class="btc-rate-ri">
            <p>Bitcoin Price</p>
            <span id="bitfinex">$ 0.00</span>
        </div>
    </div>
    <div id="main-header">
        <div id="sub-header">
            <div class="logo">
                <a href="indexbc14.html?a=home"><img src="<?= site_url() ?>assets/images/logo.png"></a>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="indexbc14.html?a=home" class="hover-act">home</a></li>
                    <li><a href="index7b87.html?a=cust&amp;page=about-us">about us</a></li>
                    <li><a href="index9c68.html?a=cust&amp;page=affiliate">Affiliate Program</a></li>
                    <li><a href="index56ca.html?a=news">news</a></li>
                    <li><a href="index38cd.html?a=faq">F.a.q</a></li>

                    <li><a href="indexa972.html?a=rules">Terms</a></li>
                    <li><a href="index15a0.html?a=support" class="hover-act">Support</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div id="down-header">
        <div id="sub-down-header">
            <div class="header-leftup">
                <div class="hcon">
                    <p><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Started : Aug 27, 2019</p>
                </div>
                <div style="width: 578px;" class="hcon">
                </div>
            </div>
            <div class="reg-login">

                <div class="register">
                    <a href="indexcca3.html?a=signup" class="a-link">REGISTRATION</a>
                </div>
                <div class="login">
                    <a id="modal_trigger" href="#modal" class="a-link">LOG IN</a>
                </div>

            </div>
        </div>
    </div>


    <?=  $this->renderSection('content') ?>



    <div id="main-footer">
        <div id="sub-footer">
            <div class="footer-up">
                <div class="fo-about">

                    <div class="about-text" style="    padding-top: 0px;
    margin-top: -3px;">
                        <img style="margin-top: 10px;margin-left: 38px;  margin-bottom: 10px;   width: 192px;"
                            src="<?= site_url() ?>assets/images/logo.png" />

                        <p style="color: #e0dddd;" align="justify">We are dedicated to making Bitcoin trading and
                            cryptocurrency trading more secure & profitable for you. </p>




                    </div>
                    <div class="fo-media">
                        <div class="media-one-">
                            <div class="media-one-icon-">
                                <a target="_blank" href="https://facebook.com/BitXxa-464582640547905/"><i
                                        class="fa fa-facebook"></i></a>
                            </div>
                        </div>
                        <div class="media-one-">
                            <div class="media-one-icon-">
                                <a target="_blank" href="https://twitter.com/BitXxa"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="related-links">
                    <div class="fo-headline">
                        <h3>related links</h3>
                    </div>
                    <div class="rel-menu">
                        <ul>



                            <li><a href="indexbc14.html?a=home"><i class="fa fa-angle-double-right"
                                        aria-hidden="true"></i> home</a></li>
                            <li><a href="index7b87.html?a=cust&amp;page=about-us"><i class="fa fa-angle-double-right"
                                        aria-hidden="true"></i> about us</a></li>
                            <li><a href="index9c68.html?a=cust&amp;page=affiliate"><i class="fa fa-angle-double-right"
                                        aria-hidden="true"></i> Affiliate Program</a></li>
                            <li><a href="indexa972.html?a=rules"><i class="fa fa-angle-double-right"
                                        aria-hidden="true"></i> Rules & Agreement</a></li>

                            <li><a href="index38cd.html?a=faq"><i class="fa fa-angle-double-right"
                                        aria-hidden="true"></i> Frequently Asked Question</a></li>
                        </ul>
                    </div>
                </div>
                <div class="related-links">
                    <div class="fo-headline">
                        <h3>related links</h3>
                    </div>
                    <div class="rel-menu">
                        <ul>


                            <li><a href="index56ca.html?a=news"><i class="fa fa-angle-double-right"
                                        aria-hidden="true"></i> Latest News</a></li>
                            <li><a href="index0706.html?a=cust&amp;page=rate-us"><i class="fa fa-angle-double-right"
                                        aria-hidden="true"></i> Rate Us</a></li>
                            <li><a href="index15a0.html?a=support"><i class="fa fa-angle-double-right"
                                        aria-hidden="true"></i> Support</a></li>
                            <li><a href="indexcca3.html?a=signup"><i class="fa fa-angle-double-right"
                                        aria-hidden="true"></i> Register</a></li>
                            <li><a href="indexc30b.html?a=login"><i class="fa fa-angle-double-right"
                                        aria-hidden="true"></i> Login</a></li>



                        </ul>
                    </div>
                </div>
                <div class="fo-contact">
                    <div class="fo-headline">
                        <h3>contact</h3>
                    </div>
                    <div class="clr"></div>
                    <div class="contact-map">
                        <div class="add-one">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> <span>16 Wellesley Mansions,<br>
                                    Edith Villas, London,<br> W14 9AH, United Kingdom</span></p>
                        </div>
                        <div class="add-one">
                            <p><i class="fa fa-envelope" aria-hidden="true"></i> Email : <span>
                                    admin@Bitsplash.uk</span></p>
                        </div>
                        <div class="add-one">
                            <p><i class="fa fa-phone" aria-hidden="true"></i> Phone : <span> Coming Soon!</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="fi-footer">
            <div class="demoforex">
                <p>Bitsplash.uk All Rights Reserved.</p>
            </div>
        </div>

    </div>







    <script type="text/javascript">

        $("a[href*=#modal]").leanModal();

        $("#modal_trigger").leanModal({ top: 200, overlay: 0.6, closeButton: ".modal_close" });

        $(function () {
            // Calling Login Form
            $("#login_form").click(function () {
                $(".social_login").hide();
                $(".user_login").show();
                return false;
            });

            // Calling Register Form
            $("#register_form").click(function () {
                $(".social_login").hide();
                $(".user_register").show();
                $(".header_title").text('Register');
                return false;
            });

            // Going back to Social Forms
            $(".back_btn").click(function () {
                $(".user_login").hide();
                $(".user_register").hide();
                $(".social_login").show();
                $(".header_title").text('Login');
                return false;
            });

        })
    </script>


</body>

<!-- Mirrored from Bitsplash.uk/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jun 2021 20:34:53 GMT -->

</html>
