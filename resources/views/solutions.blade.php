<x-head></x-head>
<x-header></x-header>
    <!-- تأكد إن Bootstrap و Animate.css بيشتغلوا -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <style>
        /* Portfolio Section CSS */
        .ftco-section.ftco-portfolio {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .portfolio-wrap {
            margin-bottom: 40px;
            border-radius: 15px;
            overflow: hidden;
            background: #fff; /* خلفية بيضاء للكارد */
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); /* ظل خفيف للكارد */
        }

        .img.js-fullheight {
            background-size: cover;
            background-position: center;
            min-height: 400px;
            position: relative;
            border-radius: 15px;
            border: 2px solid rgba(255, 120, 0, 0.3); /* إطار بلون الـ branding */
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.4), 0 10px 25px rgba(0, 0, 0, 0.3) !important; /* ظل قوي */
            transition: box-shadow 0.4s ease, transform 0.4s ease, border-color 0.4s ease;
        }

        .img.js-fullheight:hover {
            box-shadow: 0 35px 70px rgba(0, 0, 0, 0.55), 0 15px 35px rgba(0, 0, 0, 0.35) !important; /* ظل أقوى عند الـ hover */
            transform: scale(1.05);
            border-color: #ff7800;
        }

        .text {
            padding: 20px;
            font-family: 'Poppins', sans-serif !important;
            background: #fff;
            border-radius: 10px;
        }

        .desc .top .subheading {
            font-size: 14px;
            font-weight: 700;
            text-transform: uppercase;
            color: #7c8d93;
            margin-bottom: 10px;
            display: block;
        }

        .desc .top h2 {
            font-size: 36px;
            font-weight: 600;
            color: #2d3436;
            margin-bottom: 20px;
        }

        .desc .top h2 a {
            color: #2d3436;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .desc .top h2 a:hover {
            color: #ff7800;
        }

        .desc .absolute p {
            font-size: 16px;
            line-height: 1.6;
            color: #333;
            margin-bottom: 20px;
        }

        .custom-btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: #ff7800;
            color: #fff;
            font-family: 'Poppins', sans-serif !important;
            font-weight: 500;
            border-radius: 25px;
            text-decoration: none;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .custom-btn:hover {
            background-color: #e56b00;
            transform: translateY(-3px);
        }

        /* Responsive Design */
        @media (max-width: 991px) {
            .ftco-section.ftco-portfolio {
                padding: 50px 0;
            }

            .img.js-fullheight {
                min-height: 300px;
                box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3), 0 5px 10px rgba(0, 0, 0, 0.2) !important;
            }

            .img.js-fullheight:hover {
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4), 0 8px 15px rgba(0, 0, 0, 0.25) !important;
            }

            .desc .top h2 {
                font-size: 28px;
            }

            .text {
                padding: 15px;
            }
        }

        @media (max-width: 767px) {
            .img.js-fullheight {
                min-height: 200px;
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.25) !important;
            }

            .img.js-fullheight:hover {
                box-shadow: 0 15px 30px rgba(0, 0, 0, 0.35) !important;
            }

            .desc .top h2 {
                font-size: 24px;
            }

            .desc .absolute p {
                font-size: 14px;
            }

            .ftco-section.ftco-portfolio {
                padding: 30px 0;
            }
        }
    </style>



<section class="ftco-section ftco-portfolio" style="margin-top: 120px; padding-top: 0;">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-12 portfolio-wrap animate__animated animate__fadeInUp" data-animate-duration="1s" data-animate-delay="0.2s">
                <div class="row no-gutters align-items-center">
                    <div class="col-md-5 img js-fullheight" style="background-image: url('{{ asset('assets/images/5795f7347868cee29ec2828b0b20f54b.png') }}'); background-size: contain; background-position: center; background-repeat: no-repeat;">
                    </div>
                    <div class="col-md-7">
                        <div class="text pt-5 pl-0 pl-lg-5 pl-md-4">
                            <div class="px-4 px-lg-4">
                                <div class="desc">
                                    <div class="top">
                                        <span class="subheading">Exterior {12/07/2020}</span>
                                        <h2 class="mb-4"><a href="work.html">iVisionMT TNA software</a></h2>
                                    </div>
                                    <div class="absolute">
                                        <p>A brilliant workforce management software that is professional, accurate, flexible, comprehensive, reliable, and easy to use.</p>
                                        <p><a href="#" class="custom-btn">View Portfolio</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 portfolio-wrap animate__animated animate__fadeInUp" data-animate-duration="1s" data-animate-delay="0.4s">
                <div class="row no-gutters align-items-center">
                    <div class="col-md-5 order-md-last img js-fullheight" style="background-image: url('{{ asset('assets/images/EMAXIT contract photo copy.jpg') }}');">
                    </div>
                    <div class="col-md-7">
                        <div class="text pt-5 pr-md-5">
                            <div class="px-4 px-lg-4">
                                <div class="desc text-md-right">
                                    <div class="top">
                                        <span class="subheading">Furniture {12/07/2020}</span>
                                        <h2 class="mb-4"><a href="work.html">Twin Office</a></h2>
                                    </div>
                                    <div class="absolute">
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                                        <p><a href="#" class="custom-btn">View Portfolio</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 portfolio-wrap animate__animated animate__fadeInUp" data-animate-duration="1s" data-animate-delay="0.6s">
                <div class="row no-gutters align-items-center">
                    <div class="col-md-5 img js-fullheight" style="background-image: url('{{ asset('assets/images/EMAXIT contract photo copy.jpg') }}');">
                    </div>
                    <div class="col-md-7">
                        <div class="text pt-5 pl-md-5 pl-md-4">
                            <div class="px-4 px-lg-4">
                                <div class="desc">
                                    <div class="top">
                                        <span class="subheading">Building {12/07/2020}</span>
                                        <h2 class="mb-4"><a href="work.html">Cultural Complex Centre</a></h2>
                                    </div>
                                    <div class="absolute">
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                                        <p><a href="#" class="custom-btn">View Portfolio</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<x-footer></x-footer>
<x-scripts></x-scripts>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
