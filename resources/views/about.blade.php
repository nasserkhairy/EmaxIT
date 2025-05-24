```html
<x-head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <style>
        /* About Us Section CSS */
        .about-us {
            padding: 80px 0;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        }

        .section-heading h6 {
            font-size: 16px;
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            text-transform: uppercase;
            color: #7c8d93;
            margin-bottom: 15px;
        }

        .section-heading h2 {
            font-size: 48px;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            color: #2d3436;
        }

        .section-heading h2 em {
            color: #ff7800;
            font-style: normal;
        }

        .section-heading h2 span {
            color: #6fbbfe;
            font-style: italic;
        }

        .about-item {
            text-align: center;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }

        .about-item:hover {
            transform: translateY(-5px);
        }

        .about-item h4 {
            font-size: 36px;
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            color: #ff7800;
            margin-bottom: 10px;
        }

        .about-item h6 {
            font-size: 16px;
            font-family: 'Poppins', sans-serif;
            color: #2d3436;
        }

        .left-image img {
            max-width: 100%;
            height: auto;
            border-radius: 15px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        .main-green-button a {
            display: inline-block;
            padding: 12px 30px;
            background-color: #28a745;
            color: #fff;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            border-radius: 25px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .main-green-button a:hover {
            background-color: #218838;
        }

        .stats-section {
            background: #fff;
            padding: 40px 0;
            margin-top: 50px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .stats-item {
            text-align: center;
            padding: 20px;
        }

        .stats-item h3 {
            font-size: 40px;
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            color: #ff7800;
            margin-bottom: 10px;
        }

        .stats-item p {
            font-size: 16px;
            font-family: 'Poppins', sans-serif;
            color: #2d3436;
            text-transform: uppercase;
        }

        /* Responsive Design */
        @media (max-width: 991px) {
            .about-us {
                padding: 50px 0;
            }

            .section-heading h2 {
                font-size: 36px;
            }

            .about-item h4 {
                font-size: 28px;
            }

            .left-image {
                margin-bottom: 30px;
            }
        }

        @media (max-width: 767px) {
            .section-heading h2 {
                font-size: 28px;
            }

            .about-item h4 {
                font-size: 24px;
            }

            .stats-item h3 {
                font-size: 30px;
            }

            .about-us {
                padding: 30px 0;
            }
        }
    </style>
</x-head>
<x-header></x-header>

<div id="about" class="about-us section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="left-image animate__animated animate__fadeInLeft" data-animate-duration="1.5s" data-animate-delay="0.8s">
                    <img src="assets/images/p5.png" alt="About Us Image">
                </div>
            </div>
            <div class="col-lg-6 align-self-center animate__animated animate__fadeInRight" data-animate-duration="1s" data-animate-delay="0.5s">
                <div class="section-heading">
                    <h6>About Us</h6>
                    <h2>Top <em>marketing</em> agency & consult your website <span>with us</span></h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-4">
                        <div class="about-item">
                            <h4>750+</h4>
                            <h6>projects finished</h6>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="about-item">
                            <h4>340+</h4>
                            <h6>happy clients</h6>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="about-item">
                            <h4>128+</h4>
                            <h6>awards</h6>
                        </div>
                    </div>
                </div>
                <p>
                    <a rel="nofollow" href="https://templatemo.com/tm-563-seo-dream" target="_parent">EmaxIT</a>
                    International Inc. is a rapidly growing software company that has established itself as a leader in the dynamic and ever-evolving field of enterprise technology solutions. Founded in 2000, the company has consistently pushed the boundaries of innovation, delivering cutting-edge solutions tailored to meet the diverse needs of businesses across industries. With a forward-thinking approach, EmaxIT International has positioned itself at the forefront of technological advancement, helping organizations harness the power of digital transformation to achieve their requirements and strategic goals.
                    <br><br>
                    At the heart of EmaxIT International's success lies its holistic and integrated approach to enterprise solutions. By combining state-of-the-art technology, comprehensive services, managed solutions, expert consultation, dedicated support, and customized training programs, the company empowers its clients to extend their operational capabilities and foster meaningful connections across the entire value chain. Whether it's streamlining internal processes, enhancing customer experiences, or driving collaboration among stakeholders, EmaxIT International provides the tools and expertise necessary to unlock new levels of efficiency and growth.
                    <br><br>
                    <!-- Rest of the content remains the same -->
                    Why Partner with EmaxIT International?
                    <ul>
                        <li><strong>Strategic IT Leadership:</strong> Leverage our expertise to transform your business through data-driven, innovative solutions.</li>
                        <li><strong>Advanced Technological Frameworks:</strong> Deploy state-of-the-art systems that optimize performance and drive operational efficiency.</li>
                        <li><strong>Client-Centric Customization:</strong> Delivering bespoke strategies tailored to address the unique demands of your organization.</li>
                        <li><strong>Global Capabilities, Local Expertise:</strong> Combining international best practices with region-specific insights for seamless execution.</li>
                        <li><strong>Holistic IT Solutions:</strong> Comprehensive services spanning cloud infrastructure, cybersecurity, digital transformation, and beyond.</li>
                        <li><strong>Scalable Architectures for Growth:</strong> Future-proof systems designed to evolve alongside your expanding enterprise requirements.</li>
                        <li><strong>Uncompromising Security Protocols:</strong> Safeguard critical assets with enterprise-grade cybersecurity measures aligned with global standards.</li>
                        <li><strong>Proven Track Record of Excellence:</strong> A history of delivering measurable outcomes and fostering long-term client success.</li>
                    </ul>
                    We empower organizations to achieve operational excellence and sustainable growth through strategic IT innovation.
                </p>
                <div class="main-green-button"><a href="#">Discover company</a></div>
            </div>
        </div>
      
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Optional: Add counter animation for stats
    document.addEventListener('DOMContentLoaded', () => {
        const counters = document.querySelectorAll('.stats-item h3');
        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-target') || counter.textContent;
                let count = 0;
                const increment = target / 100;
                const update = () => {
                    if (count < target) {
                        count += increment;
                        counter.textContent = Math.ceil(count);
                        setTimeout(update, 20);
                    } else {
                        counter.textContent = target;
                    }
                };
                update();
            };
            updateCount();
        });
    });
</script>
```