<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preload" as="image" href="{{ asset('assets/images/world-map.webp') }}">
    <link rel="preload" as="image" href="{{ asset('assets/images/p1.webp') }}">
    <x-head></x-head>
</head>

<body class="bg-light">

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <x-header></x-header>
    <!-- ***** Header Area End ***** -->

    <section class="slider-section " style="margin-top: 100px !important;">
        <div class="slider-wrapper">
            <div class="slider">
                <div class="slider-item" id="slide-1">
                    <div class="slider-text ">
                        <h2><span></span> iVisionMT Suite</h2>
                        <p class="d-none d-md-block">Discover iVisionMT Suite, the comprehensive solution for
                            efficient workforce management</p>
                        <a href="#" class="slider-btn d-none d-md-inline-block">Learn More</a>
                    </div>
                    <img src="{{ asset('assets/images/p1.webp') }}" style=" transform: scaleX(-1);" alt="Image 1">
                </div>
                <div class="slider-item" id="slide-2">
                    <div class="slider-text">
                        <h2><span></span> IT Consulting</h2>
                        <p class=" d-none d-md-block">Leverage IT consulting to enhance your organization’s
                            performance and achieve your goals</p>
                        <a href="#" class="slider-btn  d-none d-md-inline-block">Learn More</a>
                    </div>
                    <img src="{{ asset('assets/images/p4.webp') }}" style=" transform: scaleX(-1);" alt="Image 2">
                </div>
                <div class="slider-item" id="slide-3">
                    <div class="slider-text ">
                        <h2><span></span> Digital Transformation</h2>
                        <p class=" d-none d-md-block">Embrace the future with digital transformation! Make
                            your business more efficient and innovative</p>
                        <a href="#" class="slider-btn  d-none d-md-inline-block">Learn More</a>
                    </div>
                    <img src="{{ asset('assets/images/p3.webp') }}" style=" transform: scaleX(1);" alt="Image 3">
                </div>
                <div class="slider-item" id="slide-4">
                    <div class="slider-text ">
                        <h2><span></span> BI Solutions</h2>
                        <p class=" d-none d-md-block">
                            Gain accurate insights with Business Intelligence solutions.
                            Make data-driven decisions with confidence</p>
                        <a href="#" class="slider-btn  d-none d-md-inline-block">Learn More</a>
                    </div>
                    <img src="{{ asset('assets/images/p2.webp') }}" style=" transform: scaleX(-1);" alt="Image 3">
                </div>
            </div>
            <div class="slider-nav">
                <a href="#slide-1" class="dot"></a>
                <a href="#slide-2" class="dot"></a>
                <a href="#slide-3" class="dot"></a>
                <a href="#slide-4" class="dot"></a>

            </div>
        </div>
    </section>
    {{-- Contract Section --}}
    <section class="contract-section mt-5">
        <div class="container">
          <div class="row g-0 align-items-stretch shadow-sm">
            <div class="col-lg-6 d-flex">
              <div class="contract-card w-100">
                <h2>Starts with Your Smart Choices</h2>
                <p>EmaxIT International Inc. is a leading software company that has earned its reputation as a trusted partner in the realm of enterprise technology solutions and services.</p><br>
                <p>Since its founding in 2000, EmaxIT International has been at the forefront of innovation and professionalism, offering a comprehensive suite of services designed to help businesses thrive in an increasingly competitive digital world.</p><br>
                <p>With expertise spanning a wide range of cutting-edge technologies and methodologies, EmaxIT delivers tailored solutions that empower organizations and businesses to achieve their strategic objectives, enhance operational efficiency, and drive growth.</p><br>
                <a class="btn btn-readmore rounded-pill px-4" href="">About EmaxIT</a>
              </div>
            </div>
            <div class="col-lg-6 d-flex">
              <div class="w-100 contract-img">
                <img src="{{ asset('assets/images/EMAXIT contract photo.webp') }}" alt="Team Discussion" class="img-fluid h-100">
              </div>
            </div>
          </div>
        </div>
    </section>
    {{-- /Contract Section --}}
    <!-- Stats Section -->
    <section id="stats" style="margin-top: 100px !important;" class="stats section accent-background mt-5">

        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-2 col-md-6 offset-lg-1">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="21" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Countries</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-2 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="450" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Clients</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-2 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="622" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Projects</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-2 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="1278" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Implementations</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-2 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span style="display: inline-block !important;" data-purecounter-start="0" data-purecounter-end="120" data-purecounter-duration="1" class="purecounter"></span>
                        <small style="color:#fff;  font-size:25px;">m+</small>
                        <p>Transactions</p>
                    </div>
                </div><!-- End Stats Item -->

            </div>

        </div>

    </section><!-- /Stats Section -->
<!-- Services Section -->
    <div class="container-fluid bg-light py-5">
        <div class="container py-5 mt-5">
            <div class="row g-5 align-items-center">
                <div class="col-xl-5 wow fadeIn" data-wow-delay="0.1s">
                    <div style="color: #ff8700 !important;" class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Our Services</div>
                    <h1 class="mb-4">Our Excellent AI Solutions for Your Business</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                        amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus
                        clita duo justo et tempor eirmod magna dolore erat amet</p>
                    <a class="btn btn-readmore rounded-pill px-4" href="">Read More</a>
                </div>
                <div class="col-xl-7">
                    <div class="row g-4" id="services-container">
                        <div class="col-md-6 service-box">
                            <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                <div class="service-icon btn-square">
                                    <!-- <i class="fa fa-home fa-2x"></i> -->
                                    <img src="{{ asset('assets/images/Application Modernization.webp') }}" alt="">
                                </div>
                                <h5 class="mb-3">Application Modernization</h5>
                                <p>Legacy systems slow you down. At EmaxIT International, we help enterprises modernize outdated
                                     applications—turning them into agile, secure, cloud-native solutions built for scale and innovation.</p>
                                <a class="btn px-3 mt-auto mx-auto rounded-pill sub-service-link" href="/customSD">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-6 service-box">
                            <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                <div class="service-icon btn-square">
                                    <!-- <i class="fa fa-home fa-2x"></i> -->
                                    <img src="{{ asset('assets/images/Mobile Development.webp') }}" alt="">

                                </div>
                                <h5 class="mb-3">Mobile Development</h5>
                                <p>Build. Engage. Grow.
                                At EmaxIT International, we craft mobile experiences that go beyond functionality—they inspire loyalty, streamline operations, and drive growth.
                                Whether it’s a native app, hybrid solution, or PWA, we deliver high-performance mobile products that users love.</p>
                                <a class="btn px-3 mt-auto mx-auto rounded-pill sub-service-link" href="/customSD" data-target="mobile">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-6 service-box">
                            <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                <div class="service-icon btn-square">
                                    <!-- <i class="fa fa-home fa-2x"></i> -->
                                    <img src="{{ asset('assets/images/Web Development.webp') }}" alt="">

                                </div>
                                <h5 class="mb-3">Web Development</h5>
                                <p>Your website is more than a digital brochure—it’s the front line of your brand. At EmaxIT International, we design and build high-performing
                                    websites and web applications that drive engagement, simplify operations, and accelerate growth.</p>
                                <a class="btn px-3 mt-auto mx-auto rounded-pill sub-service-link" href="/customSD" data-target="web">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-6 service-box">
                            <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                <div class="service-icon btn-square">
                                    <!-- <i class="fa fa-home fa-2x"></i> -->
                                    <img src="{{ asset('assets/images/Microservices.webp') }}" alt="">

                                </div>
                                <h5 class="mb-3">Microservices</h5>
                                <p>Build smarter, faster, and more scalable applications.
                                At EmaxIT International, we design microservices-based systems that break complex apps into independent,
                                 modular services—each handling a specific business function. The result? Better agility, resilience, and speed.</p>
                                <a class="btn px-3 mt-auto mx-auto rounded-pill sub-service-link" href="/customSD" data-target="microservices">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-6 service-box">
                            <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                <div class="service-icon btn-square">
                                    <!-- <i class="fa fa-home fa-2x"></i> -->
                                    <img src="{{ asset('assets/images/Quality Assurance.webp') }}" alt="">

                                </div>
                                <h5 class="mb-3">Quality Assurance</h5>
                                <p>Delivering reliable, secure, and user-friendly software starts with quality.
                                At EmaxIT International, our QA services ensure your applications meet the highest standards before going live—minimizing risk and maximizing user satisfaction.</p>
                                <a class="btn px-3 mt-auto mx-auto rounded-pill sub-service-link" href="/customSD" data-target="quality">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-6 service-box">
                            <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                <div class="service-icon btn-square">
                                    <!-- <i class="fa fa-home fa-2x"></i> -->
                                     <img src="{{ asset('assets/images/DevOps Services.webp') }}" alt="">
                                </div>
                                <h5 class="mb-3">DevOps Services</h5>
                                <p>Deliver better software—faster and safer.
                                At EmaxIT International, our DevOps services accelerate delivery by unifying development and operations through automation,
                                 collaboration, and continuous improvement.</p>
                                <a class="btn px-3 mt-auto mx-auto rounded-pill sub-service-link" href="/customSD" data-target="devOps">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-6 service-box">
                            <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                <div class="service-icon btn-square">
                                    <!-- <i class="fa fa-home fa-2x"></i> -->
                                    <img src="{{ asset('assets/images/Solution Architect.webp') }}" alt="">

                                </div>
                                <h5 class="mb-3">Solution Architect</h5>
                                <p>From Vision to Execution
                                At EmaxIT International, our Solution Architecture services ensure your technology investments are aligned with your business goals. We design robust, scalable,
                                and secure systems that solve real-world challenges and support long-term growth</p>
                                <a class="btn px-3 mt-auto mx-auto rounded-pill sub-service-link" href="/customSD" data-target="solutionArchitecting">Read More</a>

                            </div>
                        </div>
                        <div class="col-md-6 service-box">
                            <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                <div class="service-icon btn-square">
                                    <!-- <i class="fa fa-home fa-2x"></i> -->
                                    <img src="{{ asset('assets/images/API Integration.webp') }}" alt="">

                                </div>
                                <h5 class="mb-3">API Integration</h5>
                                <p>Seamless Connectivity, Smarter Systems
                                At EmaxIT International, we specialize in integrating APIs that connect systems, streamline workflows, and unlock new possibilities. Whether it’s payment gateways, third-party platforms,
                                or internal tools—our API solutions ensure your software ecosystem works as one.</p>
                                <a class="btn px-3 mt-auto mx-auto rounded-pill sub-service-link" href="/customSD" data-target="apiIntegration">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-6 service-box">
                            <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                <div class="service-icon btn-square">
                                    <!-- <i class="fa fa-home fa-2x"></i> -->
                                    <img src="{{ asset('assets/images/Database Migration and Modernization.webp') }}" alt="">

                                </div>
                                <h5 class="mb-3">Database Migration and Modernization</h5>
                                <p>Upgrade Performance. Unlock Possibilities.
                                Outdated databases slow your business down. At EmaxIT International, we help you migrate and modernize your database systems to boost speed, reduce costs, and
                                scale with confidence—whether you’re moving to the cloud or redesigning your data architecture.</p>
                                <a class="btn px-3 mt-auto mx-auto rounded-pill sub-service-link" href="/customSD" data-target="databaseMigration">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-6 service-box">
                            <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                <div class="service-icon btn-square">
                                    <!-- <i class="fa fa-home fa-2x"></i> -->
                                    <img src="{{ asset('assets/images/IT Consultation.webp') }}" alt="">

                                </div>
                                <h5 class="mb-3">IT Consultation</h5>
                                <p></p>
                                <a class="btn px-3 mt-auto mx-auto rounded-pill" href="">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-6 service-box">
                            <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                <div class="service-icon btn-square">
                                    <!-- <i class="fa fa-home fa-2x"></i> -->
                                    <img src="{{ asset('assets/images/Business Analysis.webp') }}" alt="">

                                </div>
                                <h5 class="mb-3">Business Analysis</h5>
                                <p></p>
                                <a class="btn px-3 mt-auto mx-auto rounded-pill" href="">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-6 service-box">
                            <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                <div class="service-icon btn-square">
                                    <!-- <i class="fa fa-home fa-2x"></i> -->
                                    <img src="{{ asset('assets/images/Solution Architect.webp') }}" alt="">

                                </div>
                                <h5 class="mb-3">solution Architecture</h5>
                                <p></p>
                                <a class="btn px-3 mt-auto mx-auto rounded-pill" href="">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-6 service-box">
                            <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                <div class="service-icon btn-square">
                                    <!-- <i class="fa fa-home fa-2x"></i> -->
                                    <img src="{{ asset('assets/images/Artificial Intelligence.webp') }}" alt="">

                                </div>
                                <h5 class="mb-3">Artificial Intelligence</h5>
                                <p></p>
                                <a class="btn px-3 mt-auto mx-auto rounded-pill" href="">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-6 service-box">
                            <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                <div class="service-icon btn-square">
                                    <!-- <i class="fa fa-home fa-2x"></i> -->
                                    <img src="{{ asset('assets/images/Integration architecture.webp') }}" alt="">

                                </div>
                                <h5 class="mb-3">Integration architecture</h5>
                                <p></p>
                                <a class="btn px-3 mt-auto mx-auto rounded-pill" href="">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-6 service-box">
                            <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                <div class="service-icon btn-square">
                                    <!-- <i class="fa fa-home fa-2x"></i> -->
                                    <img src="{{ asset('assets/images/Cloud Solution Consultation.webp') }}" alt="">

                                </div>
                                <h5 class="mb-3">Cloud Solution Consultation</h5>
                                <p></p>
                                <a class="btn px-3 mt-auto mx-auto rounded-pill" href="">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-6 service-box">
                            <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                <div class="service-icon btn-square">
                                    <!-- <i class="fa fa-home fa-2x"></i> -->
                                    <img src="{{ asset('assets/images/E-Commerce Consultation.webp') }}" alt="">

                                </div>
                                <h5 class="mb-3">E-Commerce Consultation</h5>
                                <p></p>
                                <a class="btn px-3 mt-auto mx-auto rounded-pill" href="">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-6 service-box">
                            <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                <div class="service-icon btn-square">
                                    <!-- <i class="fa fa-home fa-2x"></i> -->
                                    <img src="{{ asset('assets/images/Data analytics services (1).webp') }}" alt="">

                                </div>
                                <h5 class="mb-3">Data Analytics Services</h5>
                                <p></p>
                                <a class="btn px-3 mt-auto mx-auto rounded-pill" href="">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-6 service-box">
                            <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                <div class="service-icon btn-square">
                                    <!-- <i class="fa fa-home fa-2x"></i> -->
                                    <img src="{{ asset('assets/images/Digital Marketing services (1).webp') }}" alt="">

                                </div>
                                <h5 class="mb-3">Digital Marketing Services</h5>
                                <p></p>
                                <a class="btn px-3 mt-auto mx-auto rounded-pill" href="">Read More</a>
                            </div>
                        </div>
                    </div>
                    <nav class="mt-4">
                        <ul class="pagination justify-content-center" id="pagination-numbers"></ul>
                    </nav>
                </div>
            </div>
        </div>
    </div><!-- /Services Section -->


    <x-footer></x-footer>

    <x-scripts></x-scripts>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let dots = document.querySelectorAll('.dot');
            let slides = document.querySelectorAll('.slider-item');
            let currentIndex = 0;

            function changeSlide() {
                // Remove active class from all dots
                dots.forEach(dot => dot.classList.remove('active'));
                // Add active class to current dot
                dots[currentIndex].classList.add('active');
                // Move to the next slide
                currentIndex = (currentIndex + 1) % slides.length;
            }

            // Change slide every 3 seconds
            setInterval(changeSlide, 3000);

            // On click, change to the respective slide
            dots.forEach((dot, index) => {
                dot.addEventListener('click', function() {
                    currentIndex = index;
                    changeSlide();
                });
            });
        });
    </script>

    <script>
        const slider = document.querySelector('.slider');
        const slides = document.querySelectorAll('.slider-item');
        let index = 0;

        setInterval(() => {
            index = (index + 1) % slides.length;
            slider.scrollTo({
                left: slider.clientWidth * index,
                behavior: 'smooth'
            });
        }, 6000); // كل 4 ثواني
    </script>
    <script>
        new PureCounter();
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const services = document.querySelectorAll('.service-box');
            const itemsPerPage = 4;
            const totalPages = Math.ceil(services.length / itemsPerPage);
            const paginationContainer = document.getElementById('pagination-numbers');
            let currentPage = 1;

            function showPage(page) {
                const start = (page - 1) * itemsPerPage;
                const end = start + itemsPerPage;

                services.forEach((service, index) => {
                    service.style.display = (index >= start && index < end) ? 'block' : 'none';
                });

                updatePagination(page);
            }

            function updatePagination(activePage) {
                paginationContainer.innerHTML = '';
                for (let i = 1; i <= totalPages; i++) {
                    const li = document.createElement('li');
                    li.className = 'page-item' + (i === activePage ? ' active' : '');
                    const a = document.createElement('a');
                    a.className = 'page-link';
                    a.href = '#';
                    a.textContent = i;
                    a.addEventListener('click', (e) => {
                        e.preventDefault();
                        currentPage = i;
                        showPage(currentPage);
                    });
                    li.appendChild(a);
                    paginationContainer.appendChild(li);
                }
            }

            showPage(currentPage);
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let dots = document.querySelectorAll('.dot');
            let slides = document.querySelectorAll('.slider-item');
            let currentIndex = 0;

            function changeSlide() {
                // Remove active class from all dots
                dots.forEach(dot => dot.classList.remove('active'));
                // Add active class to current dot
                dots[currentIndex].classList.add('active');
                // Move to the next slide
                currentIndex = (currentIndex + 1) % slides.length;
            }

            // Change slide every 3 seconds
            setInterval(changeSlide, 3000);

            // On click, change to the respective slide
            dots.forEach((dot, index) => {
                dot.addEventListener('click', function() {
                    currentIndex = index;
                    changeSlide();
                });
            });
        });
    </script>

    <script>
        const slider = document.querySelector('.slider');
        const slides = document.querySelectorAll('.slider-item');
        let index = 0;

        setInterval(() => {
            index = (index + 1) % slides.length;
            slider.scrollTo({
                left: slider.clientWidth * index,
                behavior: 'smooth'
            });
        }, 6000); // كل 4 ثواني
    </script>

</body>

</html>