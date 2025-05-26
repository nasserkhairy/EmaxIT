<x-head></x-head>
<x-header></x-header>
<style>
/* Challange Area css 23 march 2023
============================================================================================ */
.challange_area {
    padding: 100px 0;
}

.challange_text_inner {
    max-width: 100%; /* تغيير max-width ليكون متجاوب */
    padding: 0 15px; /* إضافة padding عام للنصوص */
}

.challange_text_inner p {
    font-size: 20px;
    line-height: 28px;
    color: rgb(20, 22, 22);
    font-family: 'poppins', sans-serif !important;
    font-weight: 500;
    padding-right: 25px;
}

.challange_img {
    display: flex !important;
    justify-content: center; /* محاذاة الصورة في المنتصف */
}

.challange_img .challange_img_inner {
    align-self: center !important;
    box-shadow: 0px 27px 68px 0px rgba(0, 0, 0, 0.4) !important;
}

.l_title {
    padding-bottom: 55px;
    text-align: center;
}

.l_title img {
    padding-bottom: 30px;
    max-width: 100%; /* التأكد من أن الصورة متجاوبة */
    height: auto;
}

.l_title h6 {
    font-size: 14px;
    font-family: 'poppins', sans-serif !important;
    font-weight: bold;
    text-transform: uppercase;
    color: #7c8d93;
    padding-bottom: 10px;
}

.l_title h2 {
    font-size: 60px;
    color: #ff7800;
    font-family: 'poppins', sans-serif !important;
    font-weight: 600;
}

.l_title h2 span {
    font-style: italic;
    color: #6fbbfe;
}

/* Media Queries للشاشات الصغيرة */
@media (max-width: 991px) {
    .challange_area {
        padding: 50px 0; /* تقليل الـ padding للشاشات الصغيرة */
        margin-top: 100px; /* إضافة مسافة أعلى */
    }

    .container-fluid {
        padding: 0 15px !important; /* تقليل الـ padding للموبايل */
    }

    .l_title h2 {
        font-size: 40px; /* تقليل حجم العنوان */
    }

    .challange_text_inner p {
        font-size: 16px; /* تقليل حجم النص */
        line-height: 24px;
        padding-right: 0; /* إزالة padding إضافي */
    }

    .challange_img {
        margin-top: 30px; /* إضافة مساحة فوق الصورة */
    }

    .challange_img .challange_img_inner img {
        max-width: 100%; /* التأكد من أن الصورة متجاوبة */
        height: auto;
    }
}

@media (max-width: 767px) {
    .l_title h2 {
        font-size: 30px; /* تقليل حجم العنوان أكتر للموبايل */
    }

    .challange_text_inner p {
        font-size: 14px; /* تقليل حجم النص أكتر */
        line-height: 22px;
    }

    .challange_area {
        padding: 30px 0; /* تقليل الـ padding أكتر */
    }
}
</style>
<section class="challange_area">
    <div class="container-fluid">
        <div class="row">
            <div class="l_title text-center">
                <h6>Discover the services</h6>
                <h2>Application Modernization</h2>
            </div>
            <div class="col-lg-7 col-md-12">
                <div class="challange_text_inner">
                    <div style="font-family: Arial, sans-serif; line-height: 1.6; color: #333; padding: 2px; text-align: justify;">
                        <p>
                            Legacy systems slow you down? At <strong>EmaxIT International</strong>, we help enterprises
                            modernize outdated applications—
                            turning them into agile, secure, cloud-native solutions built for scale and innovation.
                        </p>

                        <h3 style="margin-top: 20px; color: #000; font-weight:600;">What We Deliver</h3>
                        <ul>
                            <li><strong>Legacy to Cloud:</strong> Migrate legacy systems to AWS, Azure, or hybrid cloud
                                environments.</li>
                            <li><strong>Modular Architecture:</strong> Break monolithic apps into microservices for
                                speed, flexibility, and fault tolerance.</li>
                            <li><strong>Smarter Systems:</strong> Add AI, machine learning, and real-time analytics to
                                boost performance and insights.</li>
                            <li><strong>Stronger Security:</strong> Embed zero-trust, encryption, and compliance by
                                design (HIPAA, GDPR, etc.).</li>
                        </ul>

                        <h3 style="margin-top: 20px; color: #000; font-weight:600;">Business Impact</h3>
                        <ul>
                            <li><strong>Retail:</strong> Replacing batch processing with real-time inventory updates cut
                                stockouts by 30%.</li>
                            <li><strong>Insurance:</strong> Migrating claims app to serverless reduced costs by 40% and
                                boosted speed 5x.</li>
                            <li><strong>Healthcare:</strong> Modernized patient portal passed HIPAA audits and slashed
                                security incidents by 90%.</li>
                        </ul>

                        <h3 style="margin-top: 20px; color: #000;font-weight:600;">Transform More Than Code</h3>
                        <p>
                            Application modernization isn’t just IT—it’s business evolution. Let us help you build
                            faster, scale smarter, and stay ahead.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 challange_img">
                <div class="challange_img_inner">
                    <img class="img-fluid" src="{{ asset('assets/images/new.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>