<!DOCTYPE html>
<html lang="en">

<head>
    <x-head></x-head>
    <link rel="stylesheet" href="{{ asset(" assets/bootstrap-icons/bootstrap-icons.css") }}">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            /* Light background */
            color: #343a40;

            /* --- التعديلات الجديدة للـ Body --- */
            display: flex;
            flex-direction: column;
            /* يرتب المحتوى عمودياً */
            min-height: 100vh;
            /* يضمن أن الـ Body يأخذ على الأقل ارتفاع الشاشة بالكامل */
            /* --- نهاية التعديلات الجديدة للـ Body --- */

            padding: 0;
            /* إزالة الـ padding من الـ body للسماح للمحتوى بالتمدد */
            margin: 0;
            /* إزالة الـ margin الافتراضي */
        }

        /* --- التعديل الجديد للمحتوى الرئيسي لدفع الفوتر لأسفل --- */
        .main-content-wrapper {
            flex-grow: 1;
            /* يجعل هذا العنصر يتمدد ليأخذ كل المساحة العمودية المتاحة */
            padding: 40px 0;
            /* نقل الـ padding الذي كان على الـ body هنا */
            display: flex;
            /* لضمان محاذاة المحتوى الداخلي بشكل صحيح */
            justify-content: center;
            align-items: center;
        }

        /* --- نهاية التعديل الجديد للمحتوى الرئيسي --- */

        .form-container {
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            padding: 50px;
            margin: auto;
            /* Center the container itself */
        }

        .form-section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #ff8700;
            /* Primary orange color */
            text-align: center;
            margin-bottom: 40px;
            position: relative;
        }

        .form-section-title::after {
            content: '';
            position: absolute;
            left: 50%;
            bottom: -10px;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background-color: #ff8700;
            /* Orange underline */
            border-radius: 2px;
        }

        .php-email-form .form-control,
        .php-email-form select {
            border-radius: 8px;
            border: 1px solid #ced4da;
            padding: 14px 18px;
            /* Increased padding for more spacious feel */
            height: auto;
            font-size: 1.05rem;
            /* Slightly larger font for better readability */
            transition: all 0.3s ease;
            box-shadow: none;
        }

        /* Apply spacing to each column containing an input */
        .php-email-form .row.gy-4>[class*="col-"] {
            padding-bottom: 20px;
            /* Space below each column */
        }

        /* Remove padding from the last row's columns to prevent extra space at the bottom of the form */
        .php-email-form .row.gy-4>[class*="col-"]:last-child {
            padding-bottom: 0;
        }


        .php-email-form .form-control:focus,
        .php-email-form select:focus {
            border-color: #ff8700;
            /* Orange border on focus */
            box-shadow: 0 0 0 0.2rem rgba(255, 135, 0, 0.25);
            /* Orange shadow on focus */
        }

        .php-email-form textarea.form-control {
            min-height: 150px;
            /* Increased min-height for textarea */
            resize: vertical;
            /* Allow vertical resizing */
        }

        .php-email-form button[type="submit"] {
            background-color: #ff8700;
            /* Orange button background */
            color: white;
            border: 0;
            padding: 15px 40px;
            border-radius: 50px;
            transition: background-color 0.3s ease, transform 0.2s ease;
            font-size: 1.1rem;
            font-weight: 600;
            box-shadow: 0 4px 15px rgba(255, 135, 0, 0.3);
            /* Orange button shadow */
        }

        .php-email-form button[type="submit"]:hover {
            background-color: #e67a00;
            /* Darker orange on hover */
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255, 135, 0, 0.4);
            /* Deeper orange shadow on hover */
        }

        .info-section {
            text-align: center;
            display: flex;
            /* Use flexbox for inner alignment */
            flex-direction: column;
            /* Stack logo and text vertically */
            justify-content: center;
            align-items: center;
            padding: 30px;
            background-color: #fff;
            /* Match form container background for consistency */
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            /* Match form container shadow */
            height: 100%;
            /* Important: make info section take full height of its column */
        }

        .info-section img {
            max-width: 150px;
            /* Smaller size for logo */
            height: auto;
            margin-bottom: 20px;
            /* Space between logo and text */
            border-radius: 10px;
            /* Slightly smaller radius for logo */
            padding: 10px;
            /* Add some padding around the logo */
            transition: transform 0.3s ease;
        }

        .info-section img:hover {
            transform: scale(1.05);
            /* Slightly more pronounced hover for a logo */
        }

        .info-section p {
            font-size: 1rem;
            line-height: 1.6;
            color: #555;
            text-align: justify;
            /* Text will be justified ( مستنسر ) */
            max-width: 90%;
            /* Control text width for readability */
            margin: 0 auto;
            /* Center text block */
            word-wrap: break-word;
            /* Ensure long words break */
        }

        /* Footer styling */
        footer {
            width: 100%;
            /* Ensure footer takes full width */
            text-align: center;
            padding: 30px;
            background-color: #343a40;
            /* Dark background for footer */
            color: white;
            margin-top: auto;
            /* يدفع الفوتر لأسفل في وضع Flexbox */
        }


        /* Responsive adjustments */
        @media (min-width: 992px) {

            /* On large devices (desktops) */
            .form-column {
                flex: 0 0 55%;
                /* Slightly reduced form width to give info more space */
                max-width: 55%;
            }

            .info-column {
                flex: 0 0 45%;
                /* Made the info column noticeably wider */
                max-width: 45%;
            }
        }

        @media (max-width: 991.98px) {

            /* For tablets and smaller */
            .form-container,
            .info-section {
                padding: 30px;
            }

            .info-column {
                margin-top: 40px;
                /* Add space between form and info section on stacked view */
            }

            .info-section img {
                max-height: 120px;
                /* Adjust logo size for stacked view */
                margin-bottom: 15px;
            }

            .info-section p {
                font-size: 0.95rem;
            }

            /* Ensure default Bootstrap col behavior for stacking */
            .form-column,
            .info-column {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .php-email-form .row.gy-4>[class*="col-"] {
                padding-bottom: 15px;
                /* Slightly less padding for mobile */
            }
        }

        @media (max-width: 767.98px) {

            /* For mobile phones */
            .form-section-title {
                font-size: 2rem;
                margin-bottom: 30px;
            }

            .php-email-form button[type="submit"] {
                padding: 12px 30px;
                font-size: 1rem;
            }

            body {
                padding: 20px 0;
            }

            .form-container,
            .info-section {
                padding: 25px;
            }
        }
    </style>
</head>

<body class="bg-light">
    <x-header></x-header>
    <div class="service-container main-content-wrapper">
        <div class="container py-5">
            <div class="row justify-content-center align-items-stretch">
                <!-- Info/Logo Section on left for large, right for medium/small -->
                <div class="col-md-12 info-column order-md-2 order-lg-1">
                    <div class="info-section">
                        <img src="{{ asset('assets/images/ivision-mt-logo.webp') }}" alt="XightStudio Logo">
                        <p>
                            <br><br>
                            Ready to see <strong style="color:#ff8700;">iVisionMT</strong> in action? Use the following
                            form to request a personalized,
                            no-obligation demo tailored to your business needs. Our sales representative will contact
                            you shortly to schedule a live demonstration whenever you want to show you this brilliant,
                            efficient, and ready-to-go software, answer all your questions, and discuss how iVisionMT
                            can transform your workforce management — without any commitment or pressure.
                        </p>
                        <p class="mt-3">
                            It's quick, easy, and completely free. Fill out the form below to get started!
                        </p>
                    </div>
                </div>

                <!-- Form Section on right for large, left for medium/small -->
                <div class="col-md-12 form-column order-md-1 order-lg-2 mt-5">
                    <div class="form-container">
                        <h2 class="form-section-title">Request iVisionMT Demo</h2>
                        <form action="" method="post" class="php-email-form">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="job_title" class="form-control" placeholder="Job Title"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="Phone" class="form-control" placeholder="Your Phone"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email"
                                        required>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" name="Company_Name" class="form-control"
                                        placeholder="Company Name" required>
                                </div>
                                <div class="col-md-6">
                                    <select name="company_size" id="company_size" class="form-control">
                                        <option value="" disabled selected>Company Size</option>
                                        <option value="1-50">1-50 Employees</option>
                                        <option value="51-500">51-500 Employees</option>
                                        <option value="501-5000">501-5000 Employees</option>
                                        <option value="5001-20000">5001-20000 Employees</option>
                                        <option value="20000+">20000+ Employees</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select name="data_source" id="data_source" class="form-control">
                                        <option value="" disabled selected>Main Data Source</option>
                                        <option value="Oracle">Oracle</option>
                                        <option value="SQL Server">SQL Server</option>
                                        <option value="MySQL">MySQL</option>
                                        <option value="PostgreSQL">PostgreSQL</option>
                                        <option value="MongoDB">MongoDB</option>
                                        <option value="SQLite">SQLite</option>
                                        <option value="IBMDB2">IBM DB2</option>
                                        <option value="Other">Other</option>
                                        <option value="Not Sure">Not Sure</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <select name="industry" id="industry" class="form-control">
                                        <option value="" disabled selected>Industry</option>
                                        <option value="Architechture">Architechture</option>
                                        <option value="Banking">Banking</option>
                                        <option value="Construction">Construction</option>
                                        <option value="Consulting">Consulting</option>
                                        <option value="Education">Education</option>
                                        <option value="Energy">Energy</option>
                                        <option value="Engineering">Engineering</option>
                                        <option value="Entertainment and Sports">Entertainment and Sports</option>
                                        <option value="Finance">Finance</option>
                                        <option value="Government">Government</option>
                                        <option value="Healthcare">Healthcare</option>
                                        <option value="Hospitality">Hospitality</option>
                                        <option value="Utilities">Utilities</option>
                                        <option value="Retail">Retail</option>
                                        <option value="Real state">Real state</option>
                                        <option value="Telecommunications">Telecommunications</option>
                                        <option value="Transportation and Logistics">Transportation and Logistics
                                        </option>
                                        <option value="Travel">Travel</option>
                                        <option value="Marketing and Advertising">Marketing and Advertising</option>
                                        <option value="Media and Journalism">Media and Journalism</option>
                                        <option value="Technology">Technology</option>
                                        <option value="Non-profit">Non-profit</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <textarea name="message" rows="6" class="form-control"
                                        placeholder="Preferred Date and Time / Any Notes" required></textarea>
                                </div>
                                <div class="col-md-12 text-center mt-3">
                                    <button type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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