<style>
/* خلفية القسم */
body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    color: #000;
}

.Section {
    position: relative;
    padding-top: 96px;
    padding-bottom: 96px;
}

.Section--start {
    padding-top: 136px;
}

.u-bg-cod-gray {
    background-color: #fff;
}

/* النص */
.Typography--heading1 {
    font-size: 56px;
    line-height: 64px;
    font-weight: 700;
}

.Typography--white {
    color: #000;
}

.Typography--body3 {
    font-size: 18px;
    line-height: 28px;
    font-weight: 400;
}

.Typography--alto {
    color: #000;
}

/* الهوامش */
.u-mb-40 {
    margin-bottom: 40px;
}

.u-mb-24 {
    margin-bottom: 24px;
}

.u-mb-sm-8 {
    margin-bottom: 8px;
}

.row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}

.col-12 {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
}

@media (min-width: 768px) {
    .col-md-6 {
        width: 50%;
    }
}

/* قسم الإحصائيات */
.Awards {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 24px;
    padding: 48px;
    border-radius: 16px;
    margin-left: 300px;
}

.u-bg-cerise-red {
    background-color: #ff8700;
    width: 60%;
}

.Awards__item {
    flex: 1 1 calc(25% - 24px);
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.Awards__img {
    margin-bottom: 16px;
}

.d-flex {
    display: flex;
    gap: 4px;
}

/* عناوين وأرقام */
.Typography--heading1custom {
    font-size: 48px;
    font-weight: 700;
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

.u-opacity-8 {
    opacity: 0.8;
}

.Awards__desc {
    margin-top: 8px;
}

.Awards__plus {
    margin-left: 4px;
}

@media (min-width: 768px) {
    .Awards__item {
        position: relative;
    }

    .Awards__item:not(:last-child)::after {
        content: "";
        position: absolute;
        right: 0;
        top: 10%;
        height: 80%;
        width: 1px;
        background-color: rgba(255, 255, 255, 0.2);
        /* خط أبيض شفاف */
    }
}
</style>







<body class="">
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TJCZ4R7" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <div class="Page">



        <main>


            <section class="Section Section--start u-bg-cod-gray">
                <div class="Section-content">
                    <div class="row u-mb-40 d-flex justify-content-between align-items-center" style="gap: 300px;">

                        <div class="col-6 me-3">
                            <h1 class="Typography Typography--heading1" style="color: #ff8700; margin-left:150px;">EmaxIT</h1>
                        </div>

                        <div class="col-6 " style="margin-top: 50px;">
                            <p class="Typography Typography--body3 " >
                                We are a software development company that builds custom web and mobile applications for
                                businesses worldwide.
                            </p>
                            <p class="Typography Typography--body3" >
                                Our team of over 200 experts specializes in fintech, eLearning, real estate, and more,
                                delivering innovative solutions that drive success.
                            </p>
                        </div>

                    </div>
                </div>

    </div>


    <div class="Awards  u-bg-cerise-red">
        <div class="Awards__item">
            <div class="Awards__img Awards__img--rating d-flex">
                <img alt="star" width="64" height="64" src="{{ asset('assets/images/client reviews.png') }}" />
            </div>
            <div class="Awards__title">
                <h3 class="Typography Typography--heading1custom Typography--white">4.9</h3>
                <span class="Typography Typography--body16 Typography--white u-opacity-8">Clutch
                    rating</span>
            </div>
            <span class="Awards__desc Typography Typography--body6custom Typography--white">based on 30+
                client reviews</span>
        </div>
        <div class="Awards__item">
            <div class="Awards__img  d-flex">
                <img width="64" height="64" src="{{ asset('assets/images/are ready to recommend us.png') }}" />
            </div>
            <div class="Awards__title">
                <h3 class="Typography Typography--heading1custom Typography--white"><span>97</span><span
                        class="Typography--heading32custom">%</span></h3>
                <span class="Typography Typography--body16 Typography--white u-opacity-8">of
                    customers</span>
            </div>
            <span class="Awards__desc Typography Typography--body6custom Typography--white">are ready to
                recommend us</span>
        </div>
        <div class="Awards__item">
            <div class="Awards__img Awards__img--devs d-flex">
                <img width="170" height="68" src="{{ asset('assets/images/degree in engineering.png') }}" />
            </div>
            <div class="Awards__title">
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
            <div class="Awards__img  d-flex">
                <img width="64" height="64" src="{{ asset('assets/images/successfully.png') }}" />
            </div>
            <div class="Awards__title">
                <h3 class="Typography Typography--heading1custom Typography--white">
                    <span>600</span><span class="Typography--heading32custom Awards__plus">+</span>
                </h3>
                <span class="Typography Typography--body16 Typography--white u-opacity-8">projects</span>
            </div>
            <span class="Awards__desc Typography Typography--body6custom Typography--white">successfully
                <br /> delivered</span>
        </div>
    </div>

    </div>
    </section>





    </main>



    </div>




</body>