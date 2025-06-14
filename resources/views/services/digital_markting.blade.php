<!DOCTYPE html>
<html lang="en">

<head>
    <x-head></x-head>
</head>

<body class="bg-light">
    <x-header></x-header>

    <div class="service-container">
        <div class="container">
            <section class="sub-service" id="itConsultaion">
                <div class="section-title" data-aos="fade-up">
                    <h2>Digital Marketing Services</h2>
                    <p>Reach. Engage. Convert.
                        At EmaxIT International, we design data-driven digital marketing strategies that turn attention
                        into action.
                        From SEO and PPC to social media and e-mail marketing, we help brands grow, engage audiences,
                        and maximize ROI.</p>
                </div>
                <div class="row g-0 align-items-stretch shadow-sm mt-4 sub-service-content">
                    <div class="col-lg-4 d-flex">
                        <div class="w-100 contract-img">
                            <img src="{{ asset('assets/images/services/Digital marketing services edit.webp') }}"
                                alt="Team Discussion" class="img-fluid h-100">
                        </div>
                    </div>
                    <div class="col-lg-8 d-flex">
                        <div class="contract-card w-100">
                            <!-- Tabs -->
                            <ul class="nav nav-pills mb-3">
                                <li><a class="nav-link active" data-bs-toggle="pill" href="#about-tab1">What We
                                        Offer</a></li>
                                <li><a class="nav-link" data-bs-toggle="pill" href="#about-tab2">Real-World Impact</a>
                                </li>
                                <li><a class="nav-link" data-bs-toggle="pill" href="#about-tab3">Why It Matters</a></li>
                            </ul><!-- End Tabs -->
                            <!-- Tab Content -->
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="about-tab1">
                                    <div class="d-flex align-items-center mt-4">
                                        <i class="bi bi-check2"></i>
                                        <h4>Search Engine Optimization (SEO)</h4>
                                    </div>
                                    <p>Boost your Google ranking for long-term growth.</p>

                                    <div class="d-flex align-items-center mt-4">
                                        <i class="bi bi-check2"></i>
                                        <h4>Pay-Per-Click (PPC) Advertising</h4>
                                    </div>
                                    <p>Drive conversions instantly with targeted ads on Google, Facebook, and
                                        Instagram—designed to drive conversions, not
                                        just clicks.</p>

                                    <div class="d-flex align-items-center mt-4">
                                        <i class="bi bi-check2"></i>
                                        <h4>Social Media Marketing</h4>
                                    </div>
                                    <p>Grow your brand and engagement across platforms.</p>

                                    <div class="d-flex align-items-center mt-4">
                                        <i class="bi bi-check2"></i>
                                        <h4>E-mail Marketing</h4>
                                    </div>
                                    <p>Retain customers with automated, personalized emails.</p>
                                </div><!-- End Tab 1 Content -->
                                <div class="tab-pane fade" id="about-tab2">
                                    <div class="d-flex align-items-center mt-4">
                                        <i class="bi bi-check2"></i>
                                        <h4>Bakery</h4>
                                    </div>
                                    <p>Increased foot traffic by 40% after ranking #1 on Google for local keywords.</p>
                                    <div class="d-flex align-items-center mt-4">
                                        <i class="bi bi-check2"></i>
                                        <h4>Travel Agency</h4>
                                    </div>
                                    <p>Achieved 200% ROAS through PPC campaigns.</p>
                                    <div class="d-flex align-items-center mt-4">
                                        <i class="bi bi-check2"></i>
                                        <h4>E-commerce Brand</h4>
                                    </div>
                                    <p>Recovered 25% of abandoned carts via automated e-mails, boosting revenue by
                                        $50K/month.</p>
                                </div><!-- End Tab 2 Content -->
                                <div class="tab-pane fade" id="about-tab3">
                                    <p>Your customers are online—are you showing up where it counts? We help you connect
                                        with the right people, at the
                                        right time, with the right message.</p>
                                </div><!-- End Tab 3 Content -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>


    <x-footer></x-footer>
    <x-scripts></x-scripts>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        const targetId = sessionStorage.getItem('scrollToSection');
        if (targetId) {
            const el = document.getElementById(targetId);
            if (el) {
                el.scrollIntoView({ behavior: 'smooth' });
            }
            sessionStorage.removeItem('scrollToSection');
        }
    });
    </script>
</body>

</html>