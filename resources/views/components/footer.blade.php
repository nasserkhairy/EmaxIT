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
                            href="https://www.youtube.com/@EmaxITInternational" target="_blank"><i
                                class="fab fa-youtube"></i>
                        </a>
                        <a class="btn btn-outline-warning btn-social"
                            href="https://www.linkedin.com/company/emaxit-international/ " target="_blank"><i
                                class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="btn btn-outline-warning btn-social" href="https://www.instagram.com/emax.it/"
                            target="_blank"><i class="fab fa-instagram"></i>
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
                <a class="btn btn-link sub-service-link" href="/customSD" data-target="solutionArchitecting">Solution
                    Architecture</a>
                <a class="btn btn-link sub-service-link" href="/customSD" data-target="apiIntegration">API
                    Integration</a>
                <a class="btn btn-link sub-service-link" href="/customSD" data-target="databaseMigration">Database
                    Migration </a>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                <h5 class="address mb-4 text-center text-md-start">Consultation</h5>
                <a class="btn btn-link sub-service-link" href="/consultation">IT Consultation</a>
                <a class="btn btn-link sub-service-link" href="/consultation" data-target="businessAnalysis">Business
                    Analysis</a>
                <a class="btn btn-link sub-service-link" href="/consultation"
                    data-target="solutionArchitecting">Solution Architecting</a>
                <a class="btn btn-link sub-service-link" href="/consultation"
                    data-target="artificialIntelligence">Artificial Intelligence</a>
                <a class="btn btn-link sub-service-link" href="/consultation" data-target="cloudConsultation">Cloud
                    Solution Consultation</a>
                <a class="btn btn-link sub-service-link" href="/consultation" data-target="ecommerce">E-Commerce
                    Consultation</a>
                <a class="btn btn-link sub-service-link" href="/consultation"
                    data-target="integrationArchitect">Integration Architect</a>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                <h5 class="address mb-4 text-center text-md-start">Data Analysis</h5>
                <a class="btn btn-link mb-3" href="/data_analysis">Data Analytics Services</a>

                <h5 class="address mb-4 mt-4 text-center text-md-start">Digital Marketing</h5>
                <a class="btn btn-link mb-2" href="/digital_markting">Digital Marketing Services</a>

                <h5 class="address mb-4 mt-4 text-center text-md-start">Get Demos</h5>
                <a class="btn btn-link mb-2" href="/ivision_demo">Ivision Demo</a>
                <a class="btn btn-link mb-2" href="/xight_demo">xight Demo</a>

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