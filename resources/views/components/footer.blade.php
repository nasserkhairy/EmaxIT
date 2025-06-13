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
    background: url("{{ asset('assets/images/footer2.png') }}") center center no-repeat;
    background-size: cover;
    padding: -60px 0;

    font-family: 'Poppins', sans-serif !important;


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
    text-align: center;
    display: block;
    margin-bottom: 10px;
    padding: 0;
    text-align: left;
    color: rgb(237, 232, 230);
    font-weight: 400;
    transition: .3s;
    font-size: 17px;
    font-family: 'poppins', sans-serif !important;
}
.footer .btn.btn-link::before {
    font-family: 'FontAwesome';
    position: relative;
    content: "\f105";
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
    background: #ff8700;
    border-radius: 5px;
    padding: 0 5px;
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
    color: #fff;


}

.fab {
    color: #fff;
}
/* .btn{
    background-color: transparent !important;
    color: #ff8700 !important;
    font-weight: 600;
    font-size: 20px;
    font-family: 'Poppins', sans-serif !important;
    margin: 1px ;
}
.btn:hover {
    color: #ff8700 !important;
    background-color: black !important;
    text-decoration: underline !important;
    font-size: 21px !important;
} */
.address {
    color: #ff8700 !important;
    font-weight: 600;
    font-size: 20px;
    font-family: 'Poppins', sans-serif !important;
}
</style>

<body>

    <a href="#" id="btn" class="btn btn-lg  btn-lg-square back-to-top pt-2" style=""><i class="bi bi-arrow-up"></i></a>


    <!-- Footer Start -->
    <div class="container-fluid  text-white-50 footer pt-5">
        <div class="container py-5">

            <div class="row g-5">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <a href="/">
                        <img src="{{ asset('assets/images/emaxit _logo.png') }}" alt="" class="img-fluid">
                    </a>
                    <div class="" data-wow-delay="0.3s">
                        <div class="d-flex pt-2 mt-3 justify-content-center">
                            <a class="btn btn-outline-warning btn-social"
                                href="https://www.tiktok.com/@emaxit.international" target="_blank"><i
                                    class="fab fa-tiktok fa-1x"></i>
                            </a>
                            <a class="btn btn-outline-warning btn-social"
                                href="https://web.facebook.com/people/EmaxIT/100083792292682/ " target="_blank"><i
                                    class="fab fa-facebook-f"></i>
                            </a>
                            <a class="btn btn-outline-warning btn-social"
                                href="https://www.youtube.com/@EmaxITInternational" target="_blank"><i class="fab fa-youtube"></i>
                            </a>
                            <a class="btn btn-outline-warning btn-social"
                                href="https://www.linkedin.com/company/emaxit-international/ " target="_blank"><i
                                    class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="btn btn-outline-warning btn-social"
                                href="https://www.instagram.com/emax.it/" target="_blank"><i
                                    class="fab fa-instagram"></i>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <h5 class="address mb-4 text-center text-md-start">Software Development</h5>
                    <a class="btn btn-link sub-service-link" href="/customSD">Application Modernization</a>
                    <a class="btn btn-link sub-service-link" href="/customSD" data-target="mobile">Mobile Development</a>
                    <a class="btn btn-link sub-service-link" href="/customSD" data-target="web">Web Development</a>
                    <a class="btn btn-link sub-service-link" href="/customSD" data-target="microservices">Microservices</a>
                    <a class="btn btn-link sub-service-link" href="/customSD" data-target="quality">Quality Assurance</a>
                    <a class="btn btn-link sub-service-link" href="/customSD" data-target="devOps">DevOps Services</a>
                    <a class="btn btn-link sub-service-link" href="/customSD" data-target="solutionArchitecting">Solution Architecture</a>
                    <a class="btn btn-link sub-service-link" href="/customSD" data-target="apiIntegration">API Integration</a>
                    <a class="btn btn-link sub-service-link" href="/customSD" data-target="databaseMigration">Database Migration </a>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <h5 class="address mb-4 text-center text-md-start">Consultation</h5>
                    <a class="btn btn-link sub-service-link" href="/consultation">IT Consultation</a>
                    <a class="btn btn-link sub-service-link" href="/consultation" data-target="businessAnalysis">Business Analysis</a>
                    <a class="btn btn-link sub-service-link" href="/consultation" data-target="solutionArchitecting">Solution Architecting</a>
                    <a class="btn btn-link sub-service-link" href="/consultation" data-target="artificialIntelligence">Artificial Intelligence</a>
                    <a class="btn btn-link sub-service-link" href="/consultation" data-target="cloudConsultation">Cloud Solution Consultation</a>
                    <a class="btn btn-link sub-service-link" href="/consultation" data-target="ecommerce">E-Commerce Consultation</a>
                    <a class="btn btn-link sub-service-link" href="/consultation" data-target="integrationArchitect">Integration Architect</a>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <h5 class="address mb-4 text-center text-md-start">Data Analysis</h5>
                    <a class="btn btn-link mb-3" href="/data_analysis">Data Analytics Services</a>

                    <h5 class="address mb-4 mt-4 text-center text-md-start">Digital Marketing</h5>
                    <a class="btn btn-link mb-2" href="/digital_markting">Digital Marketing Services</a>
                </div>
            </div>
        </div>
        <div class="container wow fadeIn" data-wow-delay="0.1s">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-light text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="text-light border-bottom" href="#">EmaxIT Co.</a>, All Right Reserved 2025.

                        Designed By <a class="text-light " href="https://www.linkedin.com/in/nasser-khairy/">NASSER
                            KHAIRY</a>
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