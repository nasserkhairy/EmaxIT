<html>

<head>
    <x-head></x-head>
</head>
<x-header></x-header>

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

</html>