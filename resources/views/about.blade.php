<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EmaxIT - Our Achievements</title>
  
  <x-head></x-head> 
  
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  
  <style>
    /* Global Styles & Resets */
    body {
        font-family: 'Poppins', sans-serif;
        margin: 0; /* Remove default body margin */
        background-color: #f8f9fa; /* Light background for the page */
    }

    /* Base Section Styling */
    .Section {
        position: relative;
        padding-top: 96px;
        padding-bottom: 96px;
    }

    .Section--start {
        padding-top: 136px; /* Increased top padding for the first section */
    }

    .u-bg-cod-gray {
        background-color: #fff; /* White background for the section */
    }

    /* Typography Classes */
    .Typography--heading1 {
        font-size: 56px;
        line-height: 64px;
        font-weight: 700;
    }

    .Typography--white {
        color: #fff; /* White text for dark backgrounds */
    }
    
    .Typography--black { /* Added for black text */
        color: #000;
    }

    .Typography--body3 {
        font-size: 18px;
        line-height: 28px;
        font-weight: 400;
    }

    .Typography--heading1custom {
        font-size: 48px;
        font-weight: 700;
        line-height: 1.2; /* Better line height for large numbers */
    }

    .Typography--heading32custom {
        font-size: 32px;
        font-weight: 700;
        margin-left: 4px;
    }

    .Typography--body16 {
        font-size: 16px;
    }

    .Typography--body6custom {
        font-size: 14px;
    }

    /* Utility Margins */
    .u-mb-40 { margin-bottom: 40px; }
    .u-mb-24 { margin-bottom: 24px; }
    .u-mb-8 { margin-bottom: 8px; } /* Corrected from u-mb-sm-8 if always 8px */

    /* Awards Section Specific Styling */
    .Awards {
        display: flex;
        flex-wrap: wrap;
        justify-content: center; /* Center items for better distribution */
        gap: 24px; /* Space between items */
        padding: 48px;
        border-radius: 16px;
        background-color: #ff8700; /* Orange background */
        /* width: 100%; /* Ensure it takes full available width in its container */
        /* margin-left: auto; /* Remove fixed margin-left and let auto margins center it */
        /* margin-right: auto; */ 
        /* Removed fixed width and margin-left, will let Bootstrap's col-12 handle width */
        /* Max-width added to control width while keeping it centered by auto margins */
        max-width: 1200px; /* Example max-width, adjust as needed */
        margin: 0 auto; /* Center the awards section horizontally */
        height: 300px; /* Allow height to adjust based on content */
    }

    .Awards__item {
        flex: 1 1 calc(25% - 24px); /* For 4 items per row with gap */
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        min-width: 160px; /* Prevent items from becoming too small on smaller screens */
    }

 
    .d-flex {
        display: flex;
        gap: 4px; /* Space between number and percentage/plus sign */
        align-items: baseline; /* Align numbers and symbols */
    }

    .u-opacity-8 {
        opacity: 0.8;
    }

    .Awards__desc {
        margin-top: 8px;
    }

    /* Divider between Award Items */
    @media (min-width: 768px) {
        .Awards__item {
            position: relative;
        }

        .Awards__item:not(:last-child)::after {
            content: "";
            position: absolute;
            right: -12px; /* Half of the gap to center the line */
            top: 20%; /* Adjusted from 10% to look better */
            height: 60%; /* Adjusted height */
            width: 1px;
            background-color: rgba(255, 255, 255, 0.2);
        }
    }

    /* Specific adjustments for the main content layout */
    .main-section-content {
        padding: 0 15px; /* Add padding to the container content itself */
    }

    /* Responsive adjustments for text and Awards section */
    @media (max-width: 991.98px) { /* Tablets and smaller */
        .Typography--heading1 {
            font-size: 40px;
            line-height: 48px;
        }
        .Typography--body3 {
            font-size: 16px;
            line-height: 24px;
        }
        .Awards {
            padding: 30px;
            gap: 15px;
        }
        .Awards__item {
            flex: 1 1 calc(50% - 15px); /* 2 items per row on tablets */
        }
        .Awards__item:nth-child(even)::after { /* Remove divider on even items when 2 per row */
            content: none;
        }
        .Awards__item:nth-child(odd)::after { /* Keep divider on odd items (except last of row) */
            right: -7.5px; /* Half of new gap */
        }
    }

    @media (max-width: 767.98px) { /* Mobile phones */
        .Section--start {
            padding-top: 80px; /* Less padding on mobile */
        }
        .Typography--heading1 {
            font-size: 32px;
            line-height: 40px;
            text-align: center; /* Center heading on mobile */
            margin-left: 0 !important; /* Override inline style */
        }
        .main-text-col {
            text-align: center; /* Center body text on mobile */
        }
        .Awards {
            flex-direction: column; /* Stack items vertically on mobile */
            gap: 20px;
            padding: 20px;
            border-radius: 10px;
        }
        .Awards__item {
            flex: 1 1 100%; /* Full width on mobile */
            padding-bottom: 20px; /* Add space below each item */
        }
        .Awards__item:not(:last-child)::after {
            content: "";
            position: absolute;
            bottom: 0; /* Move line to bottom */
            top: auto; /* Remove top constraint */
            left: 20%; /* Center line horizontally */
            width: 60%; /* Make line shorter */
            height: 1px; /* Horizontal line */
            right: auto; /* Remove right constraint */
        }
        .Awards__item:last-child {
            padding-bottom: 0; /* No padding for the very last item */
        }
        .col-6 { /* Reset col-6 for mobile, let it be full width */
            width: 100%;
            margin-right: 0 !important;
        }
    }

    /* Specific fixes for your layout elements */
    .header-content-flex {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap; /* Allow wrapping on smaller screens */
    }
    
    /* Remove the problematic inline style from the first heading */
    .EmaxIT-heading {
        color: #ff8700;
        margin-left: 150px; /* Keep your intended margin for larger screens */
    }

    @media (max-width: 767.98px) {
        .EmaxIT-heading {
            margin-left: 0 !important; /* Override on mobile */
            text-align: center;
        }
        .text-content-column {
            margin-top: 20px; /* Add some space on mobile */
        }
    }

  </style>
</head>
<body>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TJCZ4R7" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    
    <div class="Page">
        <x-header></x-header>

        <main>
            <section class="Section Section--start u-bg-cod-gray">
                <div class="container"> <div class="row header-content-flex u-mb-40"> <div class="col-12 col-md-6"> <h1 class="Typography Typography--heading1 EmaxIT-heading">EmaxIT</h1>
                        </div>

                        <div class="col-12 col-md-6 text-content-column"> <p class="Typography Typography--body3 Typography--black u-mb-8">
                                We are a software development company that builds custom web and mobile applications for
                                businesses worldwide.
                            </p>
                            <p class="Typography Typography--body3 Typography--black">
                                Our team of over 200 experts specializes in fintech, eLearning, real estate, and more,
                                delivering innovative solutions that drive success.
                            </p>
                        </div>
                    </div>

                    <div class="Awards"> <div class="Awards__item">
                            <div class="Awards__img">
                                <img alt="star" width="64" height="64" src="{{ asset('assets/images/client reviews.png') }}" />
                            </div>
                            <div class="Awards__title d-flex">
                                <h3 class="Typography Typography--heading1custom Typography--white">4.9</h3>
                                <span class="Typography Typography--body16 Typography--white u-opacity-8">Clutch
                                    rating</span>
                            </div>
                            <span class="Awards__desc Typography Typography--body6custom Typography--white">based on 30+
                                client reviews</span>
                        </div>
                        <div class="Awards__item">
                            <div class="Awards__img">
                                <img width="64" height="64" src="{{ asset('assets/images/are ready to recommend us.png') }}" />
                            </div>
                            <div class="Awards__title d-flex">
                                <h3 class="Typography Typography--heading1custom Typography--white"><span>97</span><span
                                        class="Typography--heading32custom">%</span></h3>
                                <span class="Typography Typography--body16 Typography--white u-opacity-8">of
                                    customers</span>
                            </div>
                            <span class="Awards__desc Typography Typography--body6custom Typography--white">are ready to
                                recommend us</span>
                        </div>
                        <div class="Awards__item">
                            <div class="Awards__img Awards__img--devs">
                                <img width="170" height="68" src="{{ asset('assets/images/degree in engineering.png') }}" />
                            </div>
                            <div class="Awards__title d-flex">
                                <h3 class="Typography Typography--heading1custom Typography--white">
                                    <span>100</span><span class="Typography--heading32custom">%</span>
                                </h3>
                                <span class="Typography Typography--body16 Typography--white u-opacity-8">of
                                    developers</span>
                            </div>
                            <span class="Awards__desc Typography Typography--body6custom Typography--white">have a
                                degree in engineering</span>
                        </div>
                        <div class="Awards__item">
                            <div class="Awards__img">
                                <img width="64" height="64" src="{{ asset('assets/images/successfully.png') }}" />
                            </div>
                            <div class="Awards__title d-flex">
                                <h3 class="Typography Typography--heading1custom Typography--white">
                                    <span>600</span><span class="Typography--heading32custom Awards__plus">+</span>
                                </h3>
                                <span class="Typography Typography--body16 Typography--white u-opacity-8">projects</span>
                            </div>
                            <span class="Awards__desc Typography Typography--body6custom Typography--white">successfully
                                <br /> delivered</span>
                        </div>
                    </div>
                </div> </section>
        </main>
    </div>
    
    <x-footer></x-footer>

</body>
</html>