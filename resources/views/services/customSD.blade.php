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

<div class="service-container">
    <div class="container">
        <section class="sub-service" id="application">
            <div class="section-title" data-aos="fade-up">
                <h2>Application Modernization</h2>
                <p>Legacy systems slow you down? At EmaxIT International, we help enterprises modernize outdated applications—turning them into agile, secure, cloud-native solutions built for scale and innovation.</p>
            </div>
            <div class="row g-0 align-items-stretch shadow-sm mt-4 sub-service-content">
                <div class="col-lg-4 d-flex">
                    <div class="w-100 contract-img">
                        <img src="{{ asset('assets/images/Api integration.webp') }}" alt="Team Discussion" class="img-fluid h-100">
                    </div>
                </div>
                <div class="col-lg-8 d-flex">
                    <div class="contract-card w-100">
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
                                <p>mbed zero-trust, encryption, and compliance by design (HIPAA, GDPR, etc.).</p>
                            </div><!-- End Tab 1 Content -->
                            <div class="tab-pane fade" id="about-tab2">
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Retail</h4>
                                </div>
                                <p>Replacing batch processing with real-time inventory updates cut stockouts by 30%.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Insurance</h4>
                                </div>
                                <p>Migrating claims app to serverless reduced costs by 40% and boosted speed 5x.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Healthcare</h4>
                                </div>
                                <p>Modernized patient portal passed HIPAA audits and slashed security incidents by 90%.</p>
                            </div><!-- End Tab 2 Content -->
                            <div class="tab-pane fade" id="about-tab3">
                                <p>Application modernization isn’t just IT—it’s business evolution. Let us help you build faster, scale smarter, and stay ahead.</p>
                            </div><!-- End Tab 3 Content -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sub-service" id="mobile">
            <div class="section-title" data-aos="fade-up">
                <h2>Mobile Development</h2>
                <p>Build. Engage. Grow.
                    At EmaxIT International, we craft mobile experiences that go beyond
                    functionality—they inspire loyalty, streamline operations, and drive growth. Whether it's a
                    native app, hybrid solution, or PWA, we deliver high-performance mobile products that users
                    love.
                </p>
            </div>
            <div class="row g-0 align-items-stretch shadow-sm mt-4 sub-service-content">
                <div class="d-none col-lg-4 d-md-flex">
                    <div class="w-100 contract-img">
                        <img src="{{ asset('assets/images/Api integration.webp') }}" alt="Team Discussion" class="img-fluid h-100">
                    </div>
                </div>
                <div class="col-lg-8 d-flex">
                    <div class="contract-card w-100">
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
                                <p>Develop apps for iOS, Android, and web using scalable codebases like React Native or Flutter.</p>

                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>UX/UI Design</h4>
                                </div>
                                <p>Create clean, user-friendly interfaces for a seamless experience.</p>

                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Performance Optimization</h4>
                                </div>
                                <p>Ensure speed, reliability, offline access, and battery efficiency.</p>

                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Monetization Strategy</h4>
                                </div>
                                <p>Increase revenue through subscriptions, in-app purchases, or ads.</p>
                            </div><!-- End Tab 1 Content -->
                            <div class="tab-pane fade" id="mobile-tab2">
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Travel App</h4>
                                </div>
                                <p>Used React Native to cut dev time by 40% and reached 1M+ downloads in 6 months.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Fitness Startup</h4>
                                </div>
                                <p>Boosted daily active users by 60% with a gamified, socially-driven app design.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Gaming Platform</h4>
                                </div>
                                <p>Generated $5M in 3 months via in-app purchases with 25% higher player retention.</p>
                            </div><!-- End Tab 2 Content -->
                            <div class="tab-pane fade" id="mobile-tab3">
                                <p>Smartphones are where your users live—we help you meet them there with apps that are as powerful as they are personal.</p>
                            </div><!-- End Tab 3 Content -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sub-service" id="web">
            <div class="section-title" data-aos="fade-up">
                <h2>Web Development</h2>
                <p>
                    Your website is more than a digital brochure—it's the front line of your brand.
                    At EmaxIT International, we design and build high-performing websites and
                    web applications that drive engagement, simplify operations, and accelerate growth.
                </p>
            </div>
            <div class="row g-0 align-items-stretch shadow-sm mt-4 sub-service-content">
                <div class="col-lg-4 d-flex">
                    <div class="w-100 contract-img">
                        <img src="{{ asset('assets/images/Api integration.webp') }}" alt="Team Discussion" class="img-fluid h-100">
                    </div>
                </div>
                <div class="col-lg-8 d-flex">
                    <div class="contract-card w-100">
                        <!-- Tabs -->
                        <ul class="nav nav-pills mb-3">
                            <li><a class="nav-link active" data-bs-toggle="pill" href="#web-tab1">What We Offer</a></li>
                            <li><a class="nav-link" data-bs-toggle="pill" href="#web-tab2">Real Results</a></li>
                            <li><a class="nav-link" data-bs-toggle="pill" href="#web-tab3">Build for Impact</a></li>
                        </ul><!-- End Tabs -->
                            <!-- Tab Content -->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="web-tab1">
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Front-End Excellence</h4>
                                </div>
                                <p>Responsive, accessible, and interactive UI using React, Angular, or Vue.js.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Powerful Back-End</h4>
                                </div>
                                <p>Secure, scalable infrastructure built with Node.js, Python, PHP, and robust databases.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>CMS Solutions</h4>
                                </div>
                                <p>Easy content management with WordPress, Shopify, or fully custom systems.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Performance Optimization</h4>
                                </div>
                                <p>Fast load times, SEO-friendly, and reliable across devices.</p>
                            </div><!-- End Tab 1 Content -->
                            <div class="tab-pane fade" id="web-tab2">
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Education</h4>
                                </div>
                                <p>A revamped university website boosted traffic by 150% and increased enrollment by 30%.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Healthcare</h4>
                                </div>
                                <p>A custom EHR system cut admin work by 40% and improved data accuracy.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>E-commerce</h4>
                                </div>
                                <p>Speed optimizations lowered bounce rates by 25% and increased sales by 15%.</p>
                            </div><!-- End Tab 2 Content -->
                            <div class="tab-pane fade" id="web-tab3">
                                <p>From startups to enterprises, we help businesses launch websites that don’t just work—but perform. Let’s create
                                    a web experience your users will remember.</p>
                            </div><!-- End Tab 3 Content -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sub-service" id="microservices">
            <div class="section-title" data-aos="fade-up">
                <h2>Microservices Architecture</h2>
                <p>
                    Build smarter, faster, and more scalable applications.
                    At EmaxIT International, we design microservices-based systems that break complex apps into independent, modular
                    services—each handling a specific business function. The result? Better agility, resilience, and speed.
                </p>
            </div>
            <div class="row g-0 align-items-stretch shadow-sm mt-4 sub-service-content">
                <div class="col-lg-4 d-flex">
                    <div class="w-100 contract-img">
                        <img src="{{ asset('assets/images/Api integration.webp') }}" alt="Team Discussion" class="img-fluid h-100">
                    </div>
                </div>
                <div class="col-lg-8 d-flex">
                    <div class="contract-card w-100">
                        <!-- Tabs -->
                        <ul class="nav nav-pills mb-3">
                            <li><a class="nav-link active" data-bs-toggle="pill" href="#Microservices-tab1">Why Microservices?</a></li>
                            <li><a class="nav-link" data-bs-toggle="pill" href="#Microservices-tab2">Real-World Impact</a></li>
                            <li><a class="nav-link" data-bs-toggle="pill" href="#Microservices-tab3">Designed for Change</a></li>
                        </ul><!-- End Tabs -->
                            <!-- Tab Content -->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="Microservices-tab1">
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Decoupled Services</h4>
                                </div>
                                <p>Each service runs independently for easier updates and fault isolation.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>API-Driven Communication</h4>
                                </div>
                                <p>REST, GraphQL, or messaging for seamless interaction between services.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Containerized Deployment</h4>
                                </div>
                                <p>Using Docker & Kubernetes for consistent, scalable environments.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>CI/CD Ready</h4>
                                </div>
                                <p>Perfect fit for Agile and DevOps teams focused on fast, continuous delivery.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Enterprise-Grade Security</h4>
                                </div>
                                <p>OAuth, encryption, RBAC, and regular vulnerability scans.</p>
                            </div><!-- End Tab 1 Content -->
                            <div class="tab-pane fade" id="Microservices-tab2">
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Logistics</h4>
                                </div>
                                <p>Independent services for tracking, routing, and notifications cut maintenance by 25%.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Streaming</h4>
                                </div>
                                <p>Kubernetes-based microservices enabled 99.99% uptime for millions of users.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Fintech</h4>
                                </div>
                                <p>Transitioning to microservices reduced downtime by 80% and release cycles by 90%.</p>
                            </div><!-- End Tab 2 Content -->
                            <div class="tab-pane fade" id="Microservices-tab3">
                                <p>Microservices aren’t just architecture—they’re a mindset. Let’s help your teams move faster, scale smarter, and
                                    innovate without limits.</p>
                            </div><!-- End Tab 3 Content -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sub-service" id="quality">
            <div class="section-title" data-aos="fade-up">
                <h2>Quality Assurance (QA)</h2>
                <p>
                    Delivering reliable, secure, and user-friendly software starts with quality.
                    At EmaxIT International, our QA services ensure your applications meet the highest standards before going
                    live—minimizing risk and maximizing user satisfaction.
                </p>
            </div>
            <div class="row g-0 align-items-stretch shadow-sm mt-4 sub-service-content">
                <div class="col-lg-4 d-flex">
                    <div class="w-100 contract-img">
                        <img src="{{ asset('assets/images/Api integration.webp') }}" alt="Team Discussion" class="img-fluid h-100">
                    </div>
                </div>
                <div class="col-lg-8 d-flex">
                    <div class="contract-card w-100">
                        <!-- Tabs -->
                        <ul class="nav nav-pills mb-3">
                            <li><a class="nav-link active" data-bs-toggle="pill" href="#quality-tab1">What We Offer</a></li>
                            <li><a class="nav-link" data-bs-toggle="pill" href="#quality-tab2">Real-World Impact</a></li>
                            <li><a class="nav-link" data-bs-toggle="pill" href="#quality-tab3">Beyond Bug Fixes</a></li>
                        </ul><!-- End Tabs -->
                            <!-- Tab Content -->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="quality-tab1">
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Strategic Test Planning</h4>
                                </div>
                                <p>Aligned with business goals, risk levels, and compliance requirements.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Manual & Exploratory Testing</h4>
                                </div>
                                <p>Real-world testing scenarios to catch what automation might miss.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Automated Testing</h4>
                                </div>
                                <p>Fast, repeatable, and CI/CD-ready testing using Selenium, TestNG, Cypress, and more.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Security Testing</h4>
                                </div>
                                <p>Penetration testing, vulnerability scans, and compliance checks (HIPAA, GDPR, PCI-DSS).</p>
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Cross-Platform Coverage</h4>
                                </div>
                                <p>Validate across browsers, devices, and operating systems.</p>
                            </div><!-- End Tab 1 Content -->
                            <div class="tab-pane fade" id="quality-tab2">
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Logistics</h4>
                                </div>
                                <p>Independent services for tracking, routing, and notifications cut maintenance by 25%.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Streaming</h4>
                                </div>
                                <p>Kubernetes-based microservices enabled 99.99% uptime for millions of users.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Fintech</h4>
                                </div>
                                <p>Transitioning to microservices reduced downtime by 80% and release cycles by 90%.</p>
                            </div><!-- End Tab 2 Content -->
                            <div class="tab-pane fade" id="quality-tab3">
                                <p>QA isn’t just about testing—it’s about building trust.
                                    We integrate quality across the entire development lifecycle to deliver exceptional digital experiences, every
                                    time.</p>
                            </div><!-- End Tab 3 Content -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sub-service" id="devOps">
            <div class="section-title" data-aos="fade-up">
                <h2>DevOps Services</h2>
                <p>
                    Deliver better software—faster and safer.
                    At EmaxIT International, our DevOps services accelerate delivery by unifying development and operations through
                    automation, collaboration, and continuous improvement.
                </p>
            </div>
            <div class="row g-0 align-items-stretch shadow-sm mt-4 sub-service-content">
                <div class="col-lg-4 d-flex">
                    <div class="w-100 contract-img">
                        <img src="{{ asset('assets/images/Api integration.webp') }}" alt="Team Discussion" class="img-fluid h-100">
                    </div>
                </div>
                <div class="col-lg-8 d-flex">
                    <div class="contract-card w-100">
                        <!-- Tabs -->
                        <ul class="nav nav-pills mb-3">
                            <li><a class="nav-link active" data-bs-toggle="pill" href="#devOps-tab1">What We Offer</a></li>
                            <li><a class="nav-link" data-bs-toggle="pill" href="#devOps-tab2">Real-World Impact</a></li>
                            <li><a class="nav-link" data-bs-toggle="pill" href="#devOps-tab3">Why It Matters</a></li>
                        </ul><!-- End Tabs -->
                            <!-- Tab Content -->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="devOps-tab1">
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>CI/CD Pipelines </h4>
                                </div>
                                <p>Automate code integration, testing, and deployment with tools like Jenkins, GitLab CI, and
                                    Docker.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Infrastructure as Code (IaC)</h4>
                                </div>
                                <p>Provision and manage infrastructure at scale using Terraform, Ansible, and
                                    Kubernetes.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Monitoring & Logging</h4>
                                </div>
                                <p>Real-time performance tracking and log aggregation with Prometheus, Grafana, and ELK
                                    Stack.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>DevSecOps</h4>
                                </div>
                                <p>Build secure-by-design pipelines with automated security scans and compliance audits.</p>
                            </div><!-- End Tab 1 Content -->
                            <div class="tab-pane fade" id="devOps-tab2">
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Logistics</h4>
                                </div>
                                <p>Independent services for tracking, routing, and notifications cut maintenance by 25%.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Streaming</h4>
                                </div>
                                <p>Kubernetes-based microservices enabled 99.99% uptime for millions of users.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Fintech</h4>
                                </div>
                                <p>Transitioning to microservices reduced downtime by 80% and release cycles by 90%.</p>
                            </div><!-- End Tab 2 Content -->
                            <div class="tab-pane fade" id="devOps-tab3">
                                <p>DevOps isn’t just about speed—it’s about resilience, agility, and control.
                                    By embedding quality and security into every phase of the lifecycle, we help you innovate confidently while
                                    staying compliant and cost-efficient.</p>
                            </div><!-- End Tab 3 Content -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sub-service" id="solutionArchitecting">
            <div class="section-title" data-aos="fade-up">
                <h2>Solution Architecting</h2>
                <p>
                    From Vision to Execution
                    At EmaxIT International, our Solution Architecture services ensure your technology investments are aligned with
                    your business goals. We design robust, scalable, and secure systems that solve real-world challenges and support
                    long-term growth.
                </p>
            </div>
            <div class="row g-0 align-items-stretch shadow-sm mt-4 sub-service-content">
                <div class="col-lg-4 d-flex">
                    <div class="w-100 contract-img">
                        <img src="{{ asset('assets/images/Api integration.webp') }}" alt="Team Discussion" class="img-fluid h-100">
                    </div>
                </div>
                <div class="col-lg-8 d-flex">
                    <div class="contract-card w-100">
                        <!-- Tabs -->
                        <ul class="nav nav-pills mb-3">
                            <li><a class="nav-link active" data-bs-toggle="pill" href="#solutionArchitecting-tab1">What We Offer</a></li>
                            <li><a class="nav-link" data-bs-toggle="pill" href="#solutionArchitecting-tab2">Real-World Impact</a></li>
                            <li><a class="nav-link" data-bs-toggle="pill" href="#solutionArchitecting-tab3">Why It Matters</a></li>
                        </ul><!-- End Tabs -->
                            <!-- Tab Content -->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="solutionArchitecting-tab1">
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Business & Technical Alignment</h4>
                                </div>
                                <p>Translate stakeholder requirements into detailed technical blueprints.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>System Design & Prototyping</h4>
                                </div>
                                <p>Visualize architecture, interfaces, and data flows to validate concepts early.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Technology Strategy</h4>
                                </div>
                                <p>Recommend the right tools, frameworks, and platforms based on scalability, cost, and
                                    performance.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Governance & Risk Management</h4>
                                </div>
                                <p>Enforce best practices, mitigate risks, and ensure compliance with industry
                                    standards.</p>
                            </div><!-- End Tab 1 Content -->
                            <div class="tab-pane fade" id="solutionArchitecting-tab2">
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Logistics</h4>
                                </div>
                                <p>Independent services for tracking, routing, and notifications cut maintenance by 25%.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Streaming</h4>
                                </div>
                                <p>Kubernetes-based microservices enabled 99.99% uptime for millions of users.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Fintech</h4>
                                </div>
                                <p>Transitioning to microservices reduced downtime by 80% and release cycles by 90%.</p>
                            </div><!-- End Tab 2 Content -->
                            <div class="tab-pane fade" id="solutionArchitecting-tab3">
                                <p>Solution architecture isn’t just about designing systems—it’s about enabling smarter decisions, smoother
                                    operations, and future-ready digital ecosystems.</p>
                            </div><!-- End Tab 3 Content -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sub-service" id="apiIntegration">
            <div class="section-title" data-aos="fade-up">
                <h2>API Integration</h2>
                <p>
                    Seamless Connectivity, Smarter Systems
                    At EmaxIT International, we specialize in integrating APIs that connect systems, streamline workflows, and
                    unlock new possibilities. Whether it’s payment gateways, third-party platforms, or internal tools—our API
                    solutions ensure your software ecosystem works as one.
                </p>
            </div>
            <div class="row g-0 align-items-stretch shadow-sm mt-4 sub-service-content">
                <div class="col-lg-4 d-flex">
                    <div class="w-100 contract-img">
                        <img src="{{ asset('assets/images/Api integration.webp') }}" alt="Team Discussion" class="img-fluid h-100">
                    </div>
                </div>
                <div class="col-lg-8 d-flex">
                    <div class="contract-card w-100">
                        <!-- Tabs -->
                        <ul class="nav nav-pills mb-3">
                            <li><a class="nav-link active" data-bs-toggle="pill" href="#apiIntegration-tab1">What We Offer</a></li>
                            <li><a class="nav-link" data-bs-toggle="pill" href="#apiIntegration-tab2">Real-World Impact</a></li>
                            <li><a class="nav-link" data-bs-toggle="pill" href="#apiIntegration-tab3">Why It Matters</a></li>
                        </ul><!-- End Tabs -->
                            <!-- Tab Content -->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="apiIntegration-tab1">
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Data Exchange & Synchronization</h4>
                                </div>
                                <p>Enable real-time or batch data sharing with smart error handling and transformation (XML, JSON, etc.).</p>
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Third-Party API Integration</h4>
                                </div>
                                <p>Extend your platform with payment gateways (Stripe, PayPal), social media, AI services, and IoT devices.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Security & Authentication</h4>
                                </div>
                                <p>Implement robust access control with OAuth 2.0, API keys, encryption, and rate limiting.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Performance & Scalability</h4>
                                </div>
                                <p>Optimize APIs with caching, load balancing, and asynchronous processing for high availability.</p>
                            </div><!-- End Tab 1 Content -->
                            <div class="tab-pane fade" id="apiIntegration-tab2">
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Logistics</h4>
                                </div>
                                <p>Independent services for tracking, routing, and notifications cut maintenance by 25%.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Streaming</h4>
                                </div>
                                <p>Kubernetes-based microservices enabled 99.99% uptime for millions of users.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Fintech</h4>
                                </div>
                                <p>Transitioning to microservices reduced downtime by 80% and release cycles by 90%.</p>
                            </div><!-- End Tab 2 Content -->
                            <div class="tab-pane fade" id="apiIntegration-tab3">
                                <p>APIs are the glue of the digital world. We help you connect smarter, scale faster, and deliver better
                                    experiences.</p>
                            </div><!-- End Tab 3 Content -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sub-service" id="databaseMigration">
            <div class="section-title" data-aos="fade-up">
                <h2>Database Migration & Modernization</h2>
                <p>
                    Upgrade Performance. Unlock Possibilities.
                    Outdated databases slow your business down. At EmaxIT International, we help you migrate and modernize your
                    database systems to boost speed, reduce costs, and scale with confidence—whether you’re moving to the cloud or
                    redesigning your data architecture.
                </p>
            </div>
            <div class="row g-0 align-items-stretch shadow-sm mt-4 sub-service-content">
                <div class="col-lg-4 d-flex">
                    <div class="w-100 contract-img">
                        <img src="{{ asset('assets/images/Api integration.webp') }}" alt="Team Discussion" class="img-fluid h-100">
                    </div>
                </div>
                <div class="col-lg-8 d-flex">
                    <div class="contract-card w-100">
                        <!-- Tabs -->
                        <ul class="nav nav-pills mb-3">
                            <li><a class="nav-link active" data-bs-toggle="pill" href="#databaseMigration-tab1">Our Services</a></li>
                            <li><a class="nav-link" data-bs-toggle="pill" href="#databaseMigration-tab2">Real-World Results</a></li>
                            <li><a class="nav-link" data-bs-toggle="pill" href="#databaseMigration-tab3">Why It Matters</a></li>
                        </ul><!-- End Tabs -->
                            <!-- Tab Content -->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="databaseMigration-tab1">
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Assessment & Planning</h4>
                                </div>
                                <p>We assess your systems, identify risks, and define a tailored migration strategy.</p>

                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Data Migration & ETL</h4>
                                </div>
                                <p>Securely extract, transform, and load data with minimal downtime and high integrity.</p>

                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Schema Optimization</h4>
                                </div>
                                <p>Boost performance through indexing, normalization, and query tuning.</p>

                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Security & Compliance</h4>
                                </div>
                                <p>Apply encryption, access control, and auditing to meet industry standards.</p>
                            </div>

                            <div class="tab-pane fade" id="databaseMigration-tab2">
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Logistics</h4>
                                </div>
                                <p>Independent services for tracking, routing, and notifications cut maintenance by 25%.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Streaming</h4>
                                </div>
                                <p>Kubernetes-based microservices enabled 99.99% uptime for millions of users.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Fintech</h4>
                                </div>
                                <p>Transitioning to microservices reduced downtime by 80% and release cycles by 90%.</p>
                            </div><!-- End Tab 2 Content -->
                            <div class="tab-pane fade" id="databaseMigration-tab3">
                                <p>A modern database isn’t just faster—it’s smarter. It powers innovation, drives insights, and gives your business
                                    a competitive edge.</p>
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

