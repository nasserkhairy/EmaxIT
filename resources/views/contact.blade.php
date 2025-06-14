<!DOCTYPE html>
<html lang="en">

<head>
    <x-head></x-head>
</head>

<body class="bg-light">
    <x-header></x-header>
    <!-- Contact Section -->
    <section id="contact" class="contact section" style="padding-top: 150px">
        <!-- Section Title -->
        <div class="container section-title  mb-5" data-aos="fade-up">
            <h2>Contact us</h2>

        </div><!-- End Section Title -->

        <div class="container mb-5" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-6">
                    <p class=" text-center mb-4" style="color:#ff8700 ;font-size: 1.8em;margin-top: 10px;">

                        Send a message to</p>
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <a href="mailto:sales@emaxit.com?subject=Sales%20Inquiry">
                                <div class="info-item  text-center" data-aos="fade" data-aos-delay="200">
                                    <i class="bi bi-people"></i>
                                    <h3>Sales Team</h3>

                                </div>
                            </a>

                        </div><!-- End Info Item -->

                        <div class="col-md-6">
                            <a href="mailto:support@emaxit.com?subject=Asking%20for%20Support">
                                <div class="info-item  text-center" data-aos="fade" data-aos-delay="300">
                                    <i class="bi bi-person-gear"></i>
                                    <h3>Support Team</h3>

                                </div>
                            </a>

                        </div><!-- End Info Item -->

                        <div class="  col-md-6">
                            <a href="mailto:license@emaxit.com?subject=License%20Request">
                                <div class="  info-item text-center" data-aos="fade" data-aos-delay="400">
                                    <i class="bi bi-key-fill"></i>
                                    <h3>Licensing</h3>

                                </div>
                            </a>

                        </div><!-- End Info Item -->

                        <div class="col-md-6">
                            <a href="mailto:info@emaxit.com?subject=General%20Message">
                                <div class="info-item text-center" data-aos="fade" data-aos-delay="500">
                                    <i class="bi bi-envelope"></i>
                                    <h3>General</h3>

                                </div>
                            </a>

                        </div><!-- End Info Item -->

                    </div>

                </div>

                <div class="col-lg-6">
                    <p class=" text-center mb-4" style="color:#ff8700 ;font-size: 1.8em;margin-top: 10px;">Contact Us
                    </p>
                    <form action="" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email"
                                    required="">
                            </div>

                            <div class="col-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject"
                                    required="">
                            </div>

                            <div class="col-12">
                                <textarea style="height:53px" class="form-control" name="message" rows="6"
                                    placeholder="Message" required=""></textarea>
                            </div>

                            <div class="col-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>

                                <button class="main-blue-button" type="submit">Send Message</button>
                            </div>

                        </div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>

    </section><!-- /Contact Section -->
    <x-footer></x-footer>
    <x-scripts></x-scripts>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    const targetId = sessionStorage.getItem('scrollToSection');
    if (targetId) {
        const el = document.getElementById(targetId);
        if (el) {
            el.scrollIntoView({
                behavior: 'smooth'
            });
        }
        sessionStorage.removeItem('scrollToSection');
    }
});
    </script>
</body>

</html>