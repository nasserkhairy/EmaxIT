<!DOCTYPE html>
<html lang="en">
<head>
    <x-head></x-head>
    <link rel="stylesheet" href="{{ asset("assets/bootstrap-icons/bootstrap-icons.css") }}">
</head>
<body class="bg-light">
<x-header></x-header>
{{-- <section style="margin-top: 100px" class="main-title">
    <h1 class="text-center">Software Development</h1>
</section> --}}
    <!-- About Section -->
        <section id="application" class="sub-service section shadow-sm">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
              <h2>Application Modernization</h2>
              {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> --}}
            </div><!-- End Section Title -->
            <div class="container" data-aos="fade-up">
              <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-5">
                  <div class="about-img">
                    <img src="{{ asset('assets/images/new.png')}}" class="img-fluid" alt="">
                  </div>
                </div>
                <div class="col-lg-7">
                  <p class="pt-0 pt-lg-5 intro">Legacy systems slow you down? At EmaxIT International, we help enterprises
                    modernize outdated applications—
                    turning them into agile, secure, cloud-native solutions built for scale and innovation.</p>
                  <!-- Tabs -->
                  <ul class="nav nav-pills mb-3">
                    <li><a class="nav-link active" data-bs-toggle="pill" href="#about-tab1">What We Deliver</a></li>
                    <li><a class="nav-link" data-bs-toggle="pill" href="#about-tab2">Business Impact</a></li>
                    <li><a class="nav-link" data-bs-toggle="pill" href="#about-tab3">Transform More Than Code</a></li>
                  </ul><!-- End Tabs -->
                  <!-- Tab Content -->
                  <div class="tab-content">
                    <div class="tab-pane fade show active" id="about-tab1">
                      <div class="d-flex align-items-center mt-4">
                        <i class="bi bi-check2"></i>
                        <h4>Legacy to Cloud</h4>
                      </div>
                      <p>Migrate legacy systems to AWS, Azure, or hybrid cloud environments.</p>
                      <div class="d-flex align-items-center mt-4">
                        <i class="bi bi-check2"></i>
                        <h4>Modular Architecture</h4>
                      </div>
                      <p>Break monolithic apps into microservices for speed, flexibility, and fault tolerance.</p>
                      <div class="d-flex align-items-center mt-4">
                        <i class="bi bi-check2"></i>
                        <h4>Smarter Systems</h4>
                      </div>
                      <p>Add AI, machine learning, and real-time analytics to boost performance and insights.</p>
                      <div class="d-flex align-items-center mt-4">
                        <i class="bi bi-check2"></i>
                        <h4>Stronger Security</h4>
                      </div>
                      <p>mbed zero-trust, encryption, and compliance by
                        design (HIPAA, GDPR, etc.).</p>
                    </div><!-- End Tab 1 Content -->
                    <div class="tab-pane fade" id="about-tab2">
                        <div class="d-flex align-items-center mt-4">
                            <i class="bi bi-check2"></i>
                            <h4>Retail</h4>
                          </div>
                          <p>Replacing batch processing with real-time inventory updates cut
                            stockouts by 30%.</p>
                          <div class="d-flex align-items-center mt-4">
                            <i class="bi bi-check2"></i>
                            <h4>Insurance</h4>
                          </div>
                          <p>Migrating claims app to serverless reduced costs by 40% and
                            boosted speed 5x.</p>
                          <div class="d-flex align-items-center mt-4">
                            <i class="bi bi-check2"></i>
                            <h4>Healthcare</h4>
                          </div>
                          <p>Modernized patient portal passed HIPAA audits and slashed
                            security incidents by 90%.</p>
                    </div><!-- End Tab 2 Content -->
                    <div class="tab-pane fade" id="about-tab3">
                      <p>Application modernization isn’t just IT—it’s business evolution. Let us help you build
                        faster, scale smarter, and stay ahead.</p>
                    </div><!-- End Tab 3 Content -->
                  </div>
                </div>
              </div>
            </div>
        </section><!-- /About Section -->
        <section class="sub-service section shadow-sm">
            <!-- Section Title -->
            <div id="mobile" class="container section-title" data-aos="fade-up">
              <h2>Mobile Development</h2>
              {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> --}}
            </div><!-- End Section Title -->
            <div class="container" data-aos="fade-up">
              <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-5">
                  <div class="about-img">
                    <img src="{{ asset('assets/images/Mobile development.webp')}}" class="img-fluid" alt="">
                  </div>
                </div>
                <div class="col-lg-7">
                  <p class="pt-0 pt-lg-5 intro">
                    Build. Engage. Grow.
                    At EmaxIT International, we craft mobile experiences that go beyond
                    functionality—they inspire loyalty, streamline operations, and drive growth. Whether it's a
                    native app, hybrid solution, or PWA, we deliver high-performance mobile products that users
                    love.
                  </p>
                  <!-- Tabs -->
                  <ul class="nav nav-pills mb-3">
                    <li><a class="nav-link active" data-bs-toggle="pill" href="#mobile-tab1">What We Offer</a></li>
                    <li><a class="nav-link" data-bs-toggle="pill" href="#mobile-tab2">Real-World Impact</a></li>
                    <li><a class="nav-link" data-bs-toggle="pill" href="#mobile-tab3">Why It Matters</a></li>
                  </ul><!-- End Tabs -->
                  <!-- Tab Content -->
                  <div class="tab-content">
                    <div class="tab-pane fade show active" id="mobile-tab1">
                      <div class="d-flex align-items-center mt-4">
                        <i class="bi bi-check2"></i>
                        <h4>Cross-Platform Development</h4>
                      </div>
                      <p>Reach users on iOS, Android, and the web
                        with efficient, scalable codebases using React Native, Flutter, or native technologies.</p>
                      <div class="d-flex align-items-center mt-4">
                        <i class="bi bi-check2"></i>
                        <h4>UX/UI Design</h4>
                      </div>
                      <p>Design intuitive, elegant interfaces that boost
                        engagement and ensure a frictionless user journey—from first tap to repeat use.</p>
                      <div class="d-flex align-items-center mt-4">
                        <i class="bi bi-check2"></i>
                        <h4>Performance Optimization</h4>
                      </div>
                      <p>Build apps that are fast, reliable, and
                        energy-efficient. Features include offline access, push notifications, and battery
                        optimization.</p>
                      <div class="d-flex align-items-center mt-4">
                        <i class="bi bi-check2"></i>
                        <h4>Monetization Strategy</h4>
                      </div>
                      <p>Maximize ROI with smart revenue models:
                        freemium, in-app purchases, subscriptions, or seamless ad integration.</p>
                    </div><!-- End Tab 1 Content -->
                    <div class="tab-pane fade" id="mobile-tab2">
                        <div class="d-flex align-items-center mt-4">
                            <i class="bi bi-check2"></i>
                            <h4>Travel App</h4>
                          </div>
                          <p>Used React Native to cut dev time by 40% and reached 1M+
                            downloads in 6 months.</p>
                          <div class="d-flex align-items-center mt-4">
                            <i class="bi bi-check2"></i>
                            <h4>Fitness Startup</h4>
                          </div>
                          <p>Boosted daily active users by 60% with a gamified,
                            socially-driven app design.</p>
                          <div class="d-flex align-items-center mt-4">
                            <i class="bi bi-check2"></i>
                            <h4>Gaming Platform</h4>
                          </div>
                          <p>Generated $5M in 3 months via in-app purchases with
                            25% higher player retention.</p>
                    </div><!-- End Tab 2 Content -->
                    <div class="tab-pane fade" id="mobile-tab3">
                      <p>Smartphones are where your users live—we help you meet them there with apps that are as
                        powerful as they are personal.</p>
                    </div><!-- End Tab 3 Content -->
                  </div>
                </div>
              </div>
            </div>
        </section><!-- /About Section -->

<x-footer></x-footer>
<script src="{{ asset("assets/js/bootstrap.bundle.min.js") }}"></script>
</body>

</html>

