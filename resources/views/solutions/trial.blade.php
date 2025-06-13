<x-head></x-head>
<x-header></x-header>

    <style>

        .container {
            max-width: 1200px;
        }

        /* Section Styling */
        section {
            padding: 80px 0;
            position: relative;
            z-index: 1;
        }

        .section-light-bg {
            background-color: #fff; /* Light Orange */
        }

      

        .section-dark-bg h1, .section-dark-bg h2, .section-dark-bg h3, .section-dark-bg h4, .section-dark-bg p {
            color: #fff;
        }

        .section-title {
            font-size: 2.8rem;
            margin-bottom: 20px;
            text-align: center;
            color: #ff7800; /* Dark Orange */
        }

        .section-subtitle {
            font-size: 1.15rem;
            color: #ff7800; /* Lighter Brown */
            text-align: center;
            max-width: 700px;
            margin: 0 auto 60px;
        }
        .section-dark-bg .section-title, .section-dark-bg .section-subtitle {
            color: #fff;
        }

        /* Hero Section */
        .section-hero {
            background: linear-gradient(to right, #ff9800, #f57c00); /* Orange Gradient */
            color: #fff;
            padding: 120px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero-title {
            font-size: 4.2rem;
            font-weight: 700;
            margin-bottom: 25px;
            color: #fff;
        }

        .hero-description {
            font-size: 1.35rem;
            font-weight: 400;
            max-width: 800px;
            margin: 0 auto 50px;
            color: #ffe0b2; /* Lighter Orange */
        }

        /* Buttons */
        .btn-primary-custom {
            background-color: #ff7800; /* Orange */
            color: #fff;
            padding: 15px 40px;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 8px 20px rgba(255, 120, 0, 0.3);
            text-decoration: none;
            display: inline-block;
            border: none;
        }

        .btn-primary-custom:hover {
            background-color: #f57c00;
            transform: translateY(-3px);
            color: #fff;
            box-shadow: 0 12px 25px rgba(255, 120, 0, 0.4);
            text-decoration: none;
        }
        .btn-secondary-custom {
            background-color: transparent;
            color: #ff7800; /* Orange */
            padding: 15px 40px;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            transition: all 0.3s ease;
            border: 2px solid #ff7800; /* Orange */
            text-decoration: none;
            display: inline-block;
        }
        .btn-secondary-custom:hover {
            background-color: #ff7800;
            color: #fff;
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(255, 120, 0, 0.4);
            text-decoration: none;
        }

        /* Feature Blocks */
        .feature-block {
            display: flex;
            align-items: center;
            margin-bottom: 80px;
        }
        .feature-block:last-child {
            margin-bottom: 0;
        }
        .feature-block img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        .feature-text {
            padding: 0 50px;
        }
        .feature-text h3 {
            font-size: 2.2rem;
            font-weight: 600;
            margin-bottom: 20px;
            color: #ff7800; /* Orange */
        }
        .feature-text p {
            font-size: 1.1rem;
            color: #5d4037; /* Dark Brown */
            line-height: 1.8;
        }
        /* Alternate feature block layout */
        .feature-block.reversed .col-md-6:first-child {
            order: 2;
        }
        .feature-block.reversed .col-md-6:last-child {
            order: 1;
        }

        /* Image Grid Section */
        .image-grid-section {
            padding: 80px 0;
            background-color: #fff3e0; /* Light Orange */
        }

        .image-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); /* Responsive Grid */
            grid-gap: 20px;
        }

        .image-grid img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            transition: transform 0.3s ease;
        }

        .image-grid img:hover {
            transform: translateY(-5px);
        }

        /* Responsive Adjustments */
        @media (max-width: 991.98px) {
            .section {
                padding: 60px 0;
            }
            .section-hero {
                padding: 90px 0;
            }
            .hero-title {
                font-size: 3rem;
            }
            .hero-description {
                font-size: 1.1rem;
            }
            .section-title {
                font-size: 2.2rem;
            }
            .section-subtitle {
                font-size: 1rem;
                margin-bottom: 40px;
            }
            .feature-block {
                flex-direction: column;
                text-align: center;
                margin-bottom: 60px;
            }
            .feature-block.reversed .col-md-6:first-child,
            .feature-block.reversed .col-md-6:last-child {
                order: unset;
            }
            .feature-block img {
                margin-bottom: 30px;
            }
            .feature-text {
                padding: 0;
            }
            .feature-text h3 {
                font-size: 1.8rem;
                margin-top: 20px;
            }
        }

        @media (max-width: 767.98px) {
            .section-hero {
                padding: 70px 0 50px;
            }
            .hero-title {
                font-size: 2.5rem;
            }
            .hero-description {
                font-size: 1rem;
                margin-bottom: 40px;
            }
            .section-title {
                font-size: 1.8rem;
                margin-bottom: 15px;
            }
            .section-subtitle {
                font-size: 0.95rem;
                margin-bottom: 30px;
            }
            .btn-primary-custom, .btn-secondary-custom {
                padding: 12px 30px;
                font-size: 1rem;
            }
            .feature-text h3 {
                font-size: 1.5rem;
            }
            .feature-text p {
                font-size: 0.95rem;
            }
        }
    </style>

<body>

    <section class="section-hero">
        <div class="container">
            <h1 class="hero-title">XightStudio: Empowering Your Business with Data</h1>
            <p class="hero-description">
                Unlock actionable insights, streamline reporting, and drive strategic growth with XightStudio's comprehensive Business Intelligence suite.
            </p>
            
        </div>
    </section>

    <section class="section-light-bg">
        <div class="container">
            <div class="row feature-block align-items-center">
                <div class="col-md-6">
                    <img src="https://emaxit.com/wp-content/uploads/xightstudio-01.jpg" alt="Business Intelligence" class="img-fluid">
                </div>
                <div class="col-md-6 feature-text">
                    <h3 >Comprehensive Business Intelligence</h3>
                    <p>
                        XightStudio delivers a robust Business Intelligence platform designed to transform raw data into meaningful insights. Our tools empower decision-makers with a holistic view of their operations, enabling them to identify trends, pinpoint opportunities, and mitigate risks effectively.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-dark-bg">
        <div class="container">
            <div class="row feature-block reversed align-items-center">
                <div class="col-md-6">
                    <img src="https://emaxit.com/wp-content/uploads/xightstudio-02.jpg" alt="Real-time Analytics" class="img-fluid">
                </div>
                <div class="col-md-6 feature-text">
                    <h3>Real-time Analytics & Dashboards</h3>
                    <p>
                        Gain immediate access to critical data with XightStudio's real-time analytics capabilities. Our intuitive dashboards provide dynamic, up-to-the-minute visualizations, allowing you to monitor KPIs, track performance, and react swiftly to market changes.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-light-bg">
        <div class="container">
            <div class="row feature-block align-items-center">
                <div class="col-md-6">
                    <img src="https://emaxit.com/wp-content/uploads/xightstudio-03.jpg" alt="Advanced Reporting" class="img-fluid">
                </div>
                <div class="col-md-6 feature-text">
                    <h3 >Advanced Reporting & Customization</h3>
                    <p>
                        Generate detailed and customizable reports that meet your specific business needs. XightStudio offers flexible reporting options, from scheduled reports to ad-hoc analysis, ensuring you always have the data you need in the format you prefer for strategic planning.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-dark-bg">
        <div class="container">
            <div class="row feature-block reversed align-items-center">
                <div class="col-md-6">
                    <img src="https://emaxit.com/wp-content/uploads/xightstudio-04.jpg" alt="Data Integration" class="img-fluid">
                </div>
                <div class="col-md-6 feature-text">
                    <h3>Seamless Data Integration & Warehousing</h3>
                    <p>
                        XightStudio simplifies the complex process of data integration, bringing together information from disparate sources into a centralized data warehouse. This ensures data consistency, reliability, and accessibility for comprehensive analysis.
                    </p>
                </div>
            </div>
        </div>
    </section>



    <section class="section-light-bg text-center">
        <div class="container">
            <h2 class="section-title">Ready to Transform Your Business?</h2>
            <p class="hero-description" style="color: #555;">
                Contact us today to schedule a personalized demo and discover how XightStudio can empower your organization.
            </p>
            <a href="/xight_demo" class="btn btn-primary-custom">Get Started Now</a>
        </div>
    </section>


</body>
</html>