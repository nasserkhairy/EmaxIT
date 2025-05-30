<x-head></x-head>
<x-header></x-header>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<style>
:root {
    --default-font: 'Poppins', sans-serif;
    --heading-font: 'Poppins', sans-serif;
    --nav-font: 'Poppins', sans-serif;
}


/* Global Colors - The following color variables are used throughout the website. Updating them here will change the color scheme of the entire website */
:root {
    --background-color: #ffffff;
    /* Background color for the entire website, including individual sections */
    --default-color: #444444;
    /* Default color used for the majority of the text content across the entire website */
    --heading-color: #2c4964;
    /* Color for headings, subheadings and title throughout the website */
    --accent-color: #5846f9;
    /* Accent color that represents your brand on the website. It's used for buttons, links, and other elements that need to stand out */
    --surface-color: #ffffff;
    /* The surface color is used as a background of boxed elements within sections, such as cards, icon boxes, or other elements that require a visual separation from the global background. */
    --contrast-color: #ffffff;
    /* Contrast color for text, ensuring readability against backgrounds of accent, heading, or default colors. */
}

/* Nav Menu Colors - The following color variables are used specifically for the navigation menu. They are separate from the global colors to allow for more customization options */
:root {
    --nav-color: rgba(255, 255, 255, 0.8);
    /* The default color of the main navmenu links */
    --nav-hover-color: #ffffff;
    /* Applied to main navmenu links when they are hovered over or active */
    --nav-mobile-background-color: #ffffff;
    /* Used as the background color for mobile navigation menu */
    --nav-dropdown-background-color: #ffffff;
    /* Used as the background color for dropdown items that appear when hovering over primary navigation items */
    --nav-dropdown-color: #444444;
    /* Used for navigation links of the dropdown items in the navigation menu. */
    --nav-dropdown-hover-color: #5846f9;
    /* Similar to --nav-hover-color, this color is applied to dropdown navigation links when they are hovered over. */
}

/* Color Presets - These classes override global colors when applied to any section or element, providing reuse of the sam color scheme. */

.light-background {
    --background-color: #f9f8ff;
    --surface-color: #ffffff;
}

.dark-background {
    --background-color: #060606;
    --default-color: #ffffff;
    --heading-color: #ffffff;
    --surface-color: #202020;
    --contrast-color: #ffffff;
}

.accent-background {
    --background-color: #5846f9;
    --default-color: #ffffff;
    --heading-color: #ffffff;
    --accent-color: #ffffff;
    --surface-color: #7c25ba;
    --contrast-color: #ffffff;
}

/* Smooth scroll */
:root {
    scroll-behavior: smooth;
}

/*--------------------------------------------------------------
        # General Styling & Shared Classes
        --------------------------------------------------------------*/
body {
    color: var(--default-color);
    background-color: var(--background-color);
    font-family: 'poppins', sans-serif;
}

a {
    color: var(--accent-color);
    text-decoration: none;
    transition: 0.3s;
}

a:hover {
    color: color-mix(in srgb, var(--accent-color), transparent 25%);
    text-decoration: none;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    color: var(--heading-color);
    font-family: 'poppins', sans-serif;
}

/* PHP Email Form Messages
        ------------------------------*/
.php-email-form .error-message {
    display: none;
    background: #df1529;
    color: #ffffff;
    text-align: left;
    padding: 15px;
    margin-bottom: 24px;
    font-weight: 600;
}

.php-email-form .sent-message {
    display: none;
    color: #ffffff;
    background: #059652;
    text-align: center;
    padding: 15px;
    margin-bottom: 24px;
    font-weight: 600;
}

.php-email-form .loading {
    display: none;
    background: var(--surface-color);
    text-align: center;
    padding: 15px;
    margin-bottom: 24px;
}

.php-email-form .loading:before {
    content: "";
    display: inline-block;
    border-radius: 50%;
    width: 24px;
    height: 24px;
    margin: 0 10px -6px 0;
    border: 3px solid var(--accent-color);
    border-top-color: var(--surface-color);
    animation: php-email-form-loading 1s linear infinite;
}

@keyframes php-email-form-loading {
    0% {
        transform: rotate(0deg);
    }

    100% {
        transform: rotate(360deg);
    }
}

/*--------------------------------------------------------------
        # Contact Section
        --------------------------------------------------------------*/
.contact .info-item {
    background: color-mix(in srgb, var(--default-color), transparent 96%);
    padding: 30px;
}

.contact .info-item i {
    font-size: 38px;
    line-height: 0;
    color: var(--accent-color);
}

.contact .info-item h3 {
    font-size: 20px;
    font-weight: 700;
    margin: 20px 0 10px 0;
}

.contact .info-item p {
    padding: 0;
    line-height: 24px;
    font-size: 14px;
    margin-bottom: 0;
}

.contact .php-email-form {
    background: color-mix(in srgb, var(--default-color), transparent 96%);
    padding: 30px;
    height: 82%;

}

.contact .php-email-form input[type=text],
.contact .php-email-form input[type=email],
.contact .php-email-form textarea {
    font-size: 14px;
    padding: 10px 15px;
    box-shadow: none;
    border-radius: 0;
    color: var(--default-color);
    background-color: color-mix(in srgb, var(--background-color), transparent 50%);
    border-color: color-mix(in srgb, var(--default-color), transparent 80%);
}

.contact .php-email-form input[type=text]:focus,
.contact .php-email-form input[type=email]:focus,
.contact .php-email-form textarea:focus {
    border-color: var(--accent-color);
}

.contact .php-email-form input[type=text]::placeholder,
.contact .php-email-form input[type=email]::placeholder,
.contact .php-email-form textarea::placeholder {
    color: color-mix(in srgb, var(--default-color), transparent 70%);
}

.contact .php-email-form button[type=submit] {
    background: var(--accent-color);
    color: var(--contrast-color);
    border: 0;
    padding: 10px 30px;
    transition: 0.4s;
    border-radius: 4px;
}

.contact .php-email-form button[type=submit]:hover {
    background: color-mix(in srgb, var(--accent-color), transparent 20%);
}

.info-item {
    padding: 30px;
    border-radius: 15px;
    background-color: #fff;
    transition: all 0.4s ease;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
}

.info-item i {
    font-size: 40px;
    color: #ff6600;
    transition: transform 0.4s ease, color 0.4s ease;
    display: block;
    margin-bottom: 15px;
}

.info-item:hover {
    transform: scale(1.05);
    background-color: #fff4e6;
    box-shadow: 0 8px 20px rgba(255, 102, 0, 0.3);
}

.info-item:hover i {
    transform: rotate(15deg) scale(1.2);
    color: #ff6600;
}

.info-item h3 {
    font-size: 20px;
    color: #333;
    transition: color 0.4s ease;
}

.info-item:hover h3 {
    color: #ff6600;
}

.contact .php-email-form button[type=submit] {
    background: #ff6600;
    color: #fff;
    border: 0;
    padding: 10px 30px;
    transition: 0.4s;
    border-radius: 4px;
    margin-top: 10px;
}

.contact .php-email-form button[type=submit]:hover {
    background: color-mix(in srgb, #ff6600, transparent 20%);
}
</style>


<!-- Contact Section -->
<section id="contact" class="contact section" style="margin-top: 100px;">

    <!-- Section Title -->
    <div class="container section-title  mb-5" data-aos="fade-up">
        <h2>Contact us</h2>
        <p>We are committed to fostering meaningful connections with our clients — because your success is our priority.
            Whether you're a first-time visitor, a potential customer exploring opportunities, or an existing client
            seeking support, we’re here to guide you every step of the way.

            Our dedicated teams are passionate about addressing your questions, building trust through transparent and
            mutually beneficial relationships, and delivering exceptional after-sales service that ensures long-term
            satisfaction. We take pride in offering reliable solutions tailored to meet your needs.</p>
    </div><!-- End Section Title -->

    <div class="container mb-5" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

            <div class="col-lg-6">
                <p class=" text-center mb-4"
                    style="color:#ff8700 ;font-size: 1.8em; font-weight: bold; margin-top: 10px;">

                    Send a message to</p>
                <div class="row gy-4">
                    <div class="col-md-6">
                        <div class="info-item  text-center" data-aos="fade" data-aos-delay="200">
                            <i class="bi bi-people"></i>
                            <h3>Sales Team</h3>

                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item  text-center" data-aos="fade" data-aos-delay="300">
                            <i class="bi bi-person-gear"></i>
                            <h3>Support Team</h3>

                        </div>
                    </div><!-- End Info Item -->

                    <div class="  col-md-6">
                        <div class="  info-item text-center" data-aos="fade" data-aos-delay="400">
                            <i class="bi bi-key-fill"></i>
                            <h3>Licensing</h3>

                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item text-center" data-aos="fade" data-aos-delay="500">
                            <i class="bi bi-envelope"></i>
                            <h3>General</h3>

                        </div>
                    </div><!-- End Info Item -->

                </div>

            </div>

            <div class="col-lg-6">
                <p class=" text-center mb-4"
                    style="color:#ff8700 ;font-size: 1.8em; font-weight: bold; margin-top: 10px;">Contact us Form</p>
                <form action="" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                    <div class="row gy-4">

                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                        </div>

                        <div class="col-md-6 ">
                            <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                        </div>

                        <div class="col-12">
                            <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                        </div>

                        <div class="col-12">
                            <textarea style="height:53px" class="form-control" name="message" rows="6"
                                placeholder="Message" required=""></textarea>
                        </div>

                        <div class="col-12 text-center">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>

                            <button class="main-blue-button" type="submit">Send Message</button>
                        </div>

                    </div>
                </form>
            </div><!-- End Contact Form -->

        </div>

    </div>

</section><!-- /Contact Section -->
<x-footer></x-footer>