<!DOCTYPE html>
<html lang="en">

<x-head></x-head>
<!-- Google Web Fonts -->


<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" />

<style>
/*** Footer ***/
.footer {
    background: url("{{ asset('assets/images/61769.jpg') }}") center center no-repeat;
    background-size: cover;
    padding: -60px 0;

}

.footer .btn.btn-social {
    margin-right: 5px;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #000;
    border: 1px solid rgb(191, 100, 47);
    border-radius: 40px;
    transition: .3s;
    
}

.footer .btn.btn-social:hover {
    /* color: var(--primary); */
}

.footer .btn.btn-link {
    display: block;
    margin-bottom: 10px;
    padding: 0;
    text-align: left;
    color:rgb(238, 116, 46);
    font-weight: 400;
    transition: .3s;
    font-size: 16px;
    font-family: 'poppins', sans-serif !important;
}



.footer .btn.btn-link::before {
    position: relative;
    content: "\f105";
    font-family: 'poppins', sans-serif !important;
    font-weight: 900;
    margin-right: 10px;
}

.footer .btn.btn-link:hover {
    letter-spacing: 1px;
    box-shadow: none;
}

.footer .copyright {
    padding: 25px 0;
    font-size: 14px;
    border-top: 1px solid rgba(256, 256, 256, .1);
}

.footer .copyright a {
    color: rgba(255, 255, 255, .5);
}

.footer .copyright a:hover {
    color: #FFFFFF;
}

.footer .footer-menu a {
    margin-right: 15px;
    padding-right: 15px;
    border-right: 1px solid #ff8700;
    color: #ff8700;
    font-weight: normal;
    transition: color 0.3s ease;
}

.footer .footer-menu a:last-child {
    margin-right: 0;
    padding-right: 0;
    border-right: none;
}

#btn {
    background: #ff8700;
    border-radius: 45%;
    border: solid 2px #fff;
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 9999;
    transition: background-color 0.3s ease;
}

#btn:hover {
    background-color: #fff;
    color: #ff8700;
    border: solid 2px #ff8700;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);

}

#btn i {
    color: #fff;
    font-size: 26px;
}

#btn:hover i {
    color: #ff8700;
}

#btn:focus {
    outline: none;
    box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.5);
}

.fa-tiktok {
    color: #111111;

    filter: drop-shadow(2px 0px 0px #FD3E3E) drop-shadow(-2px -2px 0px #4DE8F4);
}
</style>

<body>

    <a href="#" id="btn" class="btn btn-lg  btn-lg-square back-to-top pt-2" style=""><i class="bi bi-arrow-up"></i></a>


    <!-- Footer Start -->
    <div class="container-fluid  text-white-50 footer pt-5">
        <div class="container py-5">

            <div class="row g-5">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <!-- <a href="index.html" class="d-inline-block mb-3">
                        <h1 class="text-white">AI<span class="text-primary">.</span>Tech</h1>
                    </a> -->
                    <a href="/" class=" mb-3" style="height: 85px; ">
                        <img src="{{ asset('assets/images/emaxit _logo.png') }}" alt=""
                            style=" height: 29%; margin-top: 20px; display: float; margin-left: -60px;">
                    </a>
                    <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                        <!-- <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p><i class="fa fa-envelope me-3"></i>info@example.com</p> -->
                        <div class="d-flex pt-2 mt-3">
                            <a class="btn btn-outline-warning btn-social"
                                href="https://www.tiktok.com/@emaxit.international"><i
                                    class="fab fa-tiktok fa-1x"></i></a>
                            <a class="btn btn-outline-warning btn-social"
                                href="https://web.facebook.com/people/EmaxIT/100083792292682/"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-warning btn-social"
                                href="https://www.youtube.com/@EmaxITInternational"><i class="fab fa-youtube"></i></a>

                            <a class="btn btn-outline-warning btn-social"
                                href="https://www.linkedin.com/company/emaxit-international/"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <h5 class="text-dark mb-4">Popular Link</h5>
                    <a class="btn btn-link" href="/about">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="/solutions">solutions</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Career</a>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <h5 class="text-dark mb-4">Our Services</h5>
                    <a class="btn btn-link" href="">Robotic Automation</a>
                    <a class="btn btn-link" href="">Machine learning</a>
                    <a class="btn btn-link" href="">Predictive Analysis</a>
                    <a class="btn btn-link" href="">Data Science</a>
                    <a class="btn btn-link" href="">Robot Technology</a>
                    <a class="btn btn-link" href="">Data Science</a>
                    <a class="btn btn-link" href="">Robot Technology</a>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <h5 class="text-dark mb-4">Our Services</h5>
                    <a class="btn btn-link" href="">Robotic Automation</a>
                    <a class="btn btn-link" href="">Machine learning</a>
                    <a class="btn btn-link" href="">Predictive Analysis</a>
                    <a class="btn btn-link" href="">Data Science</a>
                    <a class="btn btn-link" href="">Robot Technology</a>
                    <a class="btn btn-link" href="">Data Science</a>
                    <a class="btn btn-link" href="">Robot Technology</a>
                </div>
            </div>
        </div>
        <div class="container wow fadeIn" data-wow-delay="0.1s">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-dark text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="text-dark border-bottom" href="#">EmaxIT Co.</a>, All Right Reserved.

                        Designed By <a class="text-info " href="https://www.linkedin.com/in/nasser-khairy/">nasser
                            khairy</a>
                    </div>

                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FAQs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const btn = document.getElementById("btn");

        window.addEventListener("scroll", function() {
            if (window.scrollY > 100) {
                btn.style.display = "block"; // يظهر الزر
            } else {
                btn.style.display = "none"; // يخفي الزر
            }
        });

        // نخفيه بالبداية
        btn.style.display = "none";
    });
    </script>


</body>

</html>