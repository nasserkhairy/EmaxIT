<!DOCTYPE html>
<html lang="en">

<head>
    <x-head></x-head>
</head>

<body class="bg-light">
    <x-header></x-header>
    <div class="service-container main-content-wrapper">
        <div class="container py-5">
            <div class="row justify-content-center align-items-stretch">
                <!-- Info/Logo Section on left for large, right for medium/small -->
                <div class="col-12 order-md-2 order-lg-1">
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
                <div class="col-12 order-md-1 order-lg-2 mt-5">
                    <div class="form-container">
                        @if (isset($_GET['name']))
                            <p class="text-center mt-3" style="color: #ff8700">Thank you for your message. It has been
                                sent.</p>
                            @endif
                        <h2 class="form-section-title">Request iVisionMT Demo</h2>
                        <form id="demoRequestForm" action="" method="get" class="php-email-form">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                                    <span class="msg-err" id="name-err">Please enter a valid name</span>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="job_title" class="form-control" placeholder="Job Title" required>
                                    <span class="msg-err" id="job-err">Please enter a valid job title</span>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="Phone" class="form-control" placeholder="Your Phone" required>
                                    <span class="msg-err" id="phone-err">Please enter a valid phone</span>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                                    <span class="msg-err" id="email-err">Please enter a valid email</span>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" name="Company_Name" class="form-control"
                                        placeholder="Company Name" required>
                                        <span class="msg-err" id="company-err">Please enter a valid company name</span>
                                </div>
                                <div class="col-md-6">
                                    <select name="company_size" id="company_size" class="form-select">
                                        <option value="" disabled selected>Company Size</option>
                                        <option value="1-50">1-50 Employees</option>
                                        <option value="51-500">51-500 Employees</option>
                                        <option value="501-5000">501-5000 Employees</option>
                                        <option value="5001-20000">5001-20000 Employees</option>
                                        <option value="20000+">20000+ Employees</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select name="data_source" id="data_source" class="form-select">
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
                                    <select name="industry" id="industry" class="form-select">
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
                                        <span class="msg-err" id="message-err">Please enter a valid message</span>
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
    <script>
        const demoRequestForm = document.getElementById('demoRequestForm');
        demoRequestForm.addEventListener('submit', function (e) {
            const form = e.target;
            let isValid = true;
            let messages = [];

            const name = form.name.value.trim();
            const jobTitle = form.job_title.value.trim();
            const phone = form.Phone.value.trim();
            const email = form.email.value.trim();
            const companyName = form.Company_Name.value.trim();
            const companySize = form.company_size.value;
            const dataSource = form.data_source.value;
            const industry = form.industry.value;
            const message = form.message.value.trim();
            if (name.length < 2) {
                isValid = false;
                document.getElementById("name-err").style.display="inline";
            }

            if (jobTitle.length < 2) {
                isValid = false;
                document.getElementById("job-err").style.display="inline";
            }

            if (!/^\+?\d{7,15}$/.test(phone)) {
                isValid = false;
                document.getElementById("phone-err").style.display="inline";
            }

            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                isValid = false;
                document.getElementById("email-err").style.display="inline";
            }

            if (companyName.length < 2) {
                isValid = false;
                document.getElementById("company-err").style.display="inline";
            }

            if (!companySize) {
                isValid = false;
                document.getElementById("company_size").style.border="2px solid #ff8700";
            }

            if (!dataSource) {
                isValid = false;
                document.getElementById("data_source").style.border="2px solid #ff8700";
            }

            if (!industry) {
                isValid = false;
                document.getElementById("industry").style.border="2px solid #ff8700";
            }

            if (message.length < 2) {
                isValid = false;
                messages.push("Please enter a valid message or note.");
            }

            if (!isValid) {
                e.preventDefault();
            }
        });

    </script>
</body>

</html>