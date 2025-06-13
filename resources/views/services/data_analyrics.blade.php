<!DOCTYPE html>
<html lang="en">
<head>
    <x-head></x-head>
    <link rel="stylesheet" href="{{ asset("assets/bootstrap-icons/bootstrap-icons.css") }}">
</head>
<body class="bg-light">
<x-header></x-header>

<div class="service-container">
    <div class="container">
        <section class="sub-service" id="itConsultaion">
            <div class="section-title" data-aos="fade-up">
                <h2>Data Analytics Services</h2>
                <p>Turn Data Into Decisions.
                    At EmaxIT International, we help businesses transform raw data into actionable insights. Our Data Analytics
                    Services uncover trends, explain outcomes, and forecast future possibilities—empowering smarter decisions and
                    strategic growth.</p>
            </div>
            <div class="row g-0 align-items-stretch shadow-sm mt-4 sub-service-content">
                <div class="col-lg-4 d-flex">
                    <div class="w-100 contract-img">
                        <img src="{{ asset('assets/images/services/Data analytics services edit.jpg') }}" alt="Team Discussion" class="img-fluid h-100">
                    </div>
                </div>
                <div class="col-lg-8 d-flex">
                    <div class="contract-card w-100">
                        <!-- Tabs -->
                        <ul class="nav nav-pills mb-3">
                            <li><a class="nav-link active" data-bs-toggle="pill" href="#about-tab1">What We Offer</a></li>
                            <li><a class="nav-link" data-bs-toggle="pill" href="#about-tab2">Real-World Impact</a></li>
                            <li><a class="nav-link" data-bs-toggle="pill" href="#about-tab3">Why It Matters</a></li>
                        </ul><!-- End Tabs -->
                            <!-- Tab Content -->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="about-tab1">
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Descriptive Analytics</h4>
                                </div>
                                <p>Understand what happened with dashboards, KPIs, and trend visualizations.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Diagnostic Analytics</h4>
                                </div>
                                <p>Explore why things happened with root cause analysis, anomaly detection, and data drilling.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Predictive Analytics</h4>
                                </div>
                                <p>Stay ahead using machine learning models that forecast behavior, demand, and risk.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Prescriptive Analytics</h4>
                                </div>
                                <p>Know what to do next through optimization tools and scenario simulations.</p>
                            </div><!-- End Tab 1 Content -->
                            <div class="tab-pane fade" id="about-tab2">
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Manufacturing Firm</h4>
                                </div>
                                <p>Identified bottlenecks and increased production efficiency by 20%.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Healthcare Provider</h4>
                                </div>
                                <p>Used diagnostic analytics to reduce patient readmissions by 30%.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Insurance Company</h4>
                                </div>
                                <p>Boosted customer retention and cross-sell rates by 25% with prescriptive recommendations.</p>
                            </div><!-- End Tab 2 Content -->
                            <div class="tab-pane fade" id="about-tab3">
                                <p>Data is the new currency—if you know how to use it. We turn complex datasets into clear stories, enabling you to
                                    act fast, reduce risk, and lead with confidence.</p>
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

