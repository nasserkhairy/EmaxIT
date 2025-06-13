<x-head></x-head>
<x-header></x-header>

<style>
body {
    font-family: 'Poppins', sans-serif;
    background-color: #fff;
    color: #333;
    line-height: 1.6;
    margin: 0;
    padding: 0;
}

.section-hero {
    background-color: #fff;
    padding: 100px 0 60px;
    text-align: center;
}

.hero-title {
    font-size: 3.5rem;
    font-weight: 700;
    color: #ff8700;
    margin-bottom: 20px;
}

.hero-description {
    font-size: 1.25rem;
    font-weight: 400;
    color: #555;
    max-width: 800px;
    margin: 0 auto 50px;
}

.suite-section {
    padding: 80px 0;
    overflow: hidden;
}

.bg-light-blue {
    background-color: #f0f8ff;
}

.section-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: #ff7800;
    margin-bottom: 20px;
}

.section-subtitle {
    font-size: 1.1rem;
    color: #666;
    margin-bottom: 30px;
}

.content-block {
    display: flex;
    align-items: center;
    margin-bottom: 60px;
}

.content-block:last-child {
    margin-bottom: 0;
}

.content-block img {
    max-width: 100%;
    height: auto;
    border-radius: 15px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
}

.text-content {
    padding: 0 40px;
}

.text-content h3 {
    font-size: 2rem;
    font-weight: 600;
    color: #ff7800;
    margin-bottom: 15px;
}

.text-content p {
    font-size: 1.05rem;
    color: #444;
    line-height: 1.8;
}

.image-left .text-content {
    padding-left: 40px;
    padding-right: 0;
}

.image-right .text-content {
    padding-right: 40px;
    padding-left: 0;
}

.btn-call-to-action {
    background-color: #ff8700;
    color: #fff;
    padding: 15px 35px;
    border-radius: 50px;
    font-size: 1.1rem;
    font-weight: 600;
    transition: background-color 0.3s ease, transform 0.2s ease;
    box-shadow: 0 4px 15px rgba(255, 135, 0, 0.3);
    text-decoration: none;
}

.btn-call-to-action:hover {
    background-color: #e67a00;
    transform: translateY(-2px);
    color: #fff;
}


/* Carousel Styles */
.carousel-container {
    padding: 60px 0;
    background-color: #f8f9fa;
}

/* تعديلات عرض الصور جنب بعض */
.app-screenshot-carousel .carousel-item {
    display: flex;
    /* لعرض الصور جنب بعض */
    justify-content: center;
    /* لتوسيط الصور */
    align-items: center;
    height: auto;
    /* لضمان مرونة الارتفاع */
}

.app-screenshot-carousel .screenshot-thumbnail {
    margin: 0 10px;
    /* مسافة بين الصور المصغرة */
    width: 200px;
    /* حجم الصورة المصغرة */
    height: 300px;
    /* ارتفاع ثابت للصور المصغرة */
    object-fit: contain;
    /* للحفاظ على أبعاد الصورة داخل الإطار */
    cursor: pointer;
    /* لإظهار إمكانية الضغط عليها */
    border: 2px solid transparent;
    transition: border-color 0.3s ease;
}

.app-screenshot-carousel .screenshot-thumbnail:hover {
    border-color: #ff8700;
    /* إطار عند تمرير الماوس */
}

/* إخفاء أزرار التحكم ومؤشرات الكاروسيل الافتراضية */
.app-screenshot-carousel .carousel-control-prev,
.app-screenshot-carousel .carousel-control-next,
.app-screenshot-carousel .carousel-indicators {
    display: none !important;
}

/* تعديل أزرار التحكم المخصصة إذا كنت تريدها (يمكن إضافتها يدوياً) */
.custom-carousel-controls {
    text-align: center;
    margin-top: 20px;
}

.custom-carousel-controls button {
    background-color: #ff8700;
    color: #fff;
    border: none;
    padding: 10px 20px;
    margin: 0 5px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.custom-carousel-controls button:hover {
    background-color: #e67a00;
}


/* Responsive Adjustments */
@media (max-width: 991.98px) {

    .section-hero,
    .suite-section {
        padding: 60px 0;
    }

    .hero-title {
        font-size: 2.8rem;
    }

    .hero-description {
        font-size: 1.1rem;
    }

    .section-title {
        font-size: 2rem;
    }

    .section-subtitle {
        font-size: 1rem;
    }

    .content-block {
        flex-direction: column;
        text-align: center;
        margin-bottom: 40px;
    }

    .content-block .order-md-1,
    .content-block .order-md-2 {
        order: unset !important;
    }

    .text-content {
        padding: 20px 0;
    }

    .content-block img {
        margin-bottom: 20px;
    }

    .image-left .text-content,
    .image-right .text-content {
        padding-left: 0;
        padding-right: 0;
    }

    /* صور الكاروسيل في الشاشات الصغيرة */
    .app-screenshot-carousel .screenshot-thumbnail {
        width: 150px;
        height: 250px;
        margin: 0 5px;
    }
}

@media (max-width: 767.98px) {
    .section-hero {
        padding: 50px 0 30px;
    }

    .hero-title {
        font-size: 2.2rem;
    }

    .hero-description {
        font-size: 0.95rem;
        margin-bottom: 30px;
    }

    .suite-section {
        padding: 40px 0;
    }

    .section-title {
        font-size: 1.8rem;
    }

    .section-subtitle {
        font-size: 0.9rem;
    }

    .content-block {
        margin-bottom: 30px;
    }

    .text-content h3 {
        font-size: 1.6rem;
    }

    .text-content p {
        font-size: 0.9rem;
    }

    .btn-call-to-action {
        padding: 12px 25px;
        font-size: 1rem;
    }

    /* صور الكاروسيل في أصغر الشاشات */
    .app-screenshot-carousel .screenshot-thumbnail {
        width: 100px;
        height: 180px;
        margin: 0 3px;
    }
}
</style>

<body>

    <section class="section-hero">
        <div class="container">
            <h1 class="hero-title">iVisionMT Suite Information</h1>
            <p class="hero-description">
                Explore the comprehensive suite of iVisionMT tools designed to enhance workforce management,
                improve productivity, and drive business growth.
            </p>
        </div>
    </section>

    <section class="suite-section">
        <div class="container">
            <div class="row content-block mb-5 align-items-center">
                <div class="col-md-6 order-md-1">
                    <img src="{{ asset('assets/images/ivision-01.jpg') }}" alt="Time Management" class="img-fluid">
                </div>
                <div class="col-md-6 order-md-2 text-content image-right">
                    <h3 class="section-title">Time Management</h3>
                    <p>
                        iVisionMT's Time Management tool helps organizations track employee work hours efficiently,
                        monitor attendance, and streamline leave management processes. This ensures accurate payroll
                        processing, optimizes resource allocation, and enhances overall operational efficiency.
                    </p>
                </div>
            </div>

            <div class="row content-block mb-5 align-items-center">
                <div class="col-md-6 order-md-2">
                    <img src="{{ asset('assets/images/ivision-02.jpg') }}" alt="Performance Tracking" class="img-fluid">
                </div>
                <div class="col-md-6 order-md-1 text-content image-left">
                    <h3 class="section-title">Performance Tracking</h3>
                    <p>
                        With the Performance Tracking feature, businesses can monitor individual and team performance
                        against set goals. It provides tools for setting clear objectives, offering constructive
                        feedback, and identifying areas for improvement, directly contributing to increased employee
                        productivity and engagement.
                    </p>
                </div>
            </div>

            <div class="row content-block mb-5 align-items-center">
                <div class="col-md-6 order-md-1">
                    <img src="{{ asset('assets/images/ivision-04.jpg') }}" alt="Tasks and Projects" class="img-fluid">
                </div>
                <div class="col-md-6 order-md-2 text-content image-right">
                    <h3 class="section-title">Tasks and Projects</h3>
                    <p>
                        The Tasks and Projects tool allows for seamless organization, assignment, and tracking of all
                        tasks and projects. Teams can collaborate effectively, track progress in real-time, and ensure
                        timely completion of deliverables, enhancing project management capabilities.
                    </p>
                </div>
            </div>

            <div class="row content-block align-items-center">
                <div class="col-md-6 order-md-2">
                    <img src="{{ asset('assets/images/ivision-05.jpg') }}" alt="Alerts and Notifications"
                        class="img-fluid">
                </div>
                <div class="col-md-6 order-md-1 text-content image-left">
                    <h3 class="section-title">Alerts and Notifications</h3>
                    <p>
                        Stay informed with iVisionMT's Alerts and Notifications system, which provides real-time updates
                        on key performance indicators, critical events, and important deadlines. This proactive approach
                        helps management make informed decisions quickly and efficiently.
                    </p>
                </div>
            </div>

            <div class="row text-center mt-5">
                <div class="main-blue-button"><a href="/ivision_demo">Request Demo</a></div>
            </div>
        </div>
    </section>

    <section class="carousel-container">
        <div class="container">
            <h2 class="section-title text-center mb-4">App Screenshots</h2>
            <div id="appScreenshotsCarousel" class="carousel slide app-screenshot-carousel" data-ride="carousel"
                data-interval="3000">
                <div class="carousel-inner">
                    <div class="carousel-item ">
                        <img src="{{ asset('assets/images/ivision-app01.jpg') }}" class="screenshot-thumbnail"
                            alt="App Screenshot 1" data-toggle="modal" data-target="#screenshotModal"
                            data-img-src="{{ asset('assets/images/ivision-app01.jpg') }}">
                        <img src="{{ asset('assets/images/ivision-app02.jpg') }}" class="screenshot-thumbnail"
                            alt="App Screenshot 2" data-toggle="modal" data-target="#screenshotModal"
                            data-img-src="{{ asset('assets/images/ivision-app05.jpg') }}">
                        <img src="{{ asset('assets/images/ivision-app03.jpg') }}" class="screenshot-thumbnail"
                            alt="App Screenshot 3" data-toggle="modal" data-target="#screenshotModal"
                            data-img-src="{{ asset('assets/images/ivision-app07.jpg') }}">
                        <img src="{{ asset('assets/images/ivision-app04.jpg') }}" class="screenshot-thumbnail"
                            alt="App Screenshot 3" data-toggle="modal" data-target="#screenshotModal"
                            data-img-src="{{ asset('assets/images/ivision-app07.jpg') }}">
                        <img src="{{ asset('assets/images/ivision-app05.jpg') }}" class="screenshot-thumbnail"
                            alt="App Screenshot 3" data-toggle="modal" data-target="#screenshotModal"
                            data-img-src="{{ asset('assets/images/ivision-app07.jpg') }}">
                        <img src="{{ asset('assets/images/ivision-app07.jpg') }}" class="screenshot-thumbnail"
                            alt="App Screenshot 3" data-toggle="modal" data-target="#screenshotModal"
                            data-img-src="{{ asset('assets/images/ivision-app07.jpg') }}">
                    </div>


                </div>

            </div>
    </section>

    <div class="modal fade" id="screenshotModal" tabindex="-1" role="dialog" aria-labelledby="screenshotModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="screenshotModalLabel">App Screenshot</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img src="" id="fullScreenshotImage" class="img-fluid" alt="Full App Screenshot">
                </div>
            </div>
        </div>
    </div>


    <x-scripts></x-scripts>
    <x-footer></x-footer>

    <script>
    $(document).ready(function() {
        // When a thumbnail is clicked, open the modal and set the image source
        $('.screenshot-thumbnail').on('click', function() {
            var imgSrc = $(this).data('img-src');
            $('#fullScreenshotImage').attr('src', imgSrc);
            $('#screenshotModal').modal('show');
        });
    });
    </script>

</body>