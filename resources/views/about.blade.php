<!DOCTYPE html>
<html lang="en">

<head>
    <x-head></x-head>
    <link rel="stylesheet" href="{{ asset("assets/bootstrap-icons/bootstrap-icons.css") }}">
    <style>
    body,
    h1,
    h2,
    h3,
    h4,
    html,
    img,
    p,
    section {
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: initial
    }

    section {
        display: block
    }

    body {
        line-height: 1
    }

    body,
    html {
        height: 100%;
        min-height: 100%
    }

    body {
        margin: 0;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    body {
        font-family: Wix Madefor Display, arial_fallback, sans-serif
    }

    html {
        box-sizing: border-box;
        -ms-overflow-style: scrollbar
    }

    .Page {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        min-height: 100%
    }

    body {
        padding-top: 138px
    }

    @media screen and (max-width: 533px) {
        body {
            padding-top: 168px
        }
    }

    .Awards {
        border: 1px solid #ff7800;
        border-radius: 20px;
        display: flex
    }

    @media (max-width: 767.98px) {
        .Awards {
            flex-direction: column
        }
    }

    .Awards__img {
        min-height: 64px
    }

    @media (max-width: 991.98px) {
        .Awards__img--rating img:not(:first-child) {
            margin-left: -8px
        }
    }

    .Awards__img--devs {
        display: flex
    }

    .Awards__img--devs img {
        border-radius: 100%;
        overflow: hidden
    }

    .Awards__img--devs img:not(:first-child) {
        margin-left: -12px
    }

    @media (max-width: 991.98px) {
        .Awards__img--devs img:not(:first-child) {
            margin-left: -28px
        }
    }

    @media (max-width: 767.98px) {
        .Awards__img--devs img:not(:first-child) {
            margin-left: -12px
        }
    }

    .Awards__item {
        display: flex;
        flex-basis: 100%;
        flex-direction: column;
        justify-content: space-between;
        min-height: 384px;
        padding: 28px
    }

    @media (max-width: 1199.98px) {
        .Awards__item {
            min-height: 340px;
            padding: 16px
        }
    }

    @media (max-width: 767.98px) {
        .Awards__item {
            min-height: 282px
        }
    }

    .Awards__item:not(:first-child) {
        border-left: 1px solid #ff7800
    }

    @media (max-width: 767.98px) {
        .Awards__item:not(:first-child) {
            border-left: 0;
            border-top: 1px solid #ff7800
        }
    }

    @media (max-width: 767.98px) {
        .Awards__item br {
            display: none
        }
    }

    .Awards--small .Awards__desc {
        width: 75%
    }

    @media (max-width: 991.98px) {
        .Awards--small .Awards__desc {
            width: 100%
        }
    }

    @media (min-width: 768px) {
        .Awards--small .Awards__item {
            min-height: 276px
        }
    }

    @media (min-width: 768px) {
        .Awards--small .Awards__img {
            height: 36px;
            min-height: unset
        }
    }

    @media (min-width: 768px) {
        .Awards--small .Awards__img img {
            height: 100%;
            width: auto
        }
    }

    @media (min-width: 768px) {
        .Awards--small .Awards__img--rating {
            height: 28px
        }
    }

    @media (max-width: 991.98px) {
        .Awards--small .Awards__img--devs img:not(:first-child) {
            margin-left: -12px
        }
    }

    .Awards__plus {
        display: inline-block;
        transform: translateY(-9px);
        -webkit-transform: translateY(-9px);
        -moz-transform: translateY(-9px);
        -ms-transform: translateY(-9px);
        -o-transform: translateY(-9px);
    }

    .BorderedGroup--top {
        border-top: 1px solid transparent
    }

    .BorderedGroup--emperor {
        border-color: #4f4f4f
    }

    .Image {
        display: block;
        height: auto;
        max-width: 100%;
        position: relative
    }

    .Section {
        overflow: hidden;
        padding-bottom: 80px;
        padding-top: 80px;
        position: relative
    }

    @media (max-width: 991.98px) {
        .Section {
            padding-bottom: 60px;
            padding-top: 60px
        }
    }

    .Section--start {
        padding-bottom: 30px;
        padding-top: 212px
    }

    @media (max-width: 991.98px) {
        .Section--start {
            padding-bottom: 10px;
            padding-top: 190px
        }
    }

    .Section-content {
        margin: 0 auto;
        max-width: 1300px;
        padding-left: 70px;
        padding-right: 70px;
        position: relative;
        width: 100%
    }

    .Section-content p {
        text-align: justify;
    }

    @media (max-width: 991.98px) {
        .Section-content {
            padding-left: 20px;
            padding-right: 20px
        }
    }

    .Typography--alto {
        color: #cecece
    }

    .Typography--alto:-internal-autofill-selected,
    .Typography--alto:-webkit-autofill,
    .Typography--alto:-webkit-autofill:focus,
    .Typography--alto:-webkit-autofill:hover {
        -webkit-text-fill-color: #cecece
    }

    .Typography--white {
        color: #fff
    }

    .Typography--white:-internal-autofill-selected,
    .Typography--white:-webkit-autofill,
    .Typography--white:-webkit-autofill:focus,
    .Typography--white:-webkit-autofill:hover {
        -webkit-text-fill-color: #fff
    }

    .Typography--heading1 {
        font-size: 56px;
        line-height: 64px;
        font-weight: 700
    }

    @media (max-width: 991.98px) {
        .Typography--heading1 {
            font-size: 36px;
            line-height: 44px
        }
    }

    .Typography--heading2 {
        font-size: 40px;
        line-height: 48px;
        font-weight: 700
    }

    @media (max-width: 991.98px) {
        .Typography--heading2 {
            font-size: 28px;
            line-height: 36px
        }
    }

    .Typography--heading4 {
        font-size: 28px;
        line-height: 39px
    }

    @media (max-width: 991.98px) {
        .Typography--heading4 {
            font-size: 22px;
            line-height: 26px
        }
    }

    .Typography--body2 {
        font-size: 18px;
        line-height: 28px;
        font-weight: 400
    }

    @media (max-width: 991.98px) {
        .Typography--body2 {
            font-size: 16px;
            line-height: 26px
        }
    }

    .Typography--body3 {
        font-size: 22px;
        line-height: 34px;
        font-weight: 400
    }

    @media (max-width: 991.98px) {
        .Typography--body3 {
            font-size: 16px;
            line-height: 26px
        }
    }

    .Typography--body6 {
        font-size: 22px;
        line-height: 34px;
        font-weight: 400
    }

    @media (max-width: 991.98px) {
        .Typography--body6 {
            font-size: 18px;
            line-height: 26px
        }
    }

    .Typography--body16 {
        font-size: 16px;
        line-height: 24px;
        font-weight: 400
    }

    .Typography--centered {
        text-align: center
    }

    .Image--table-icon {
        width: 40px;
        margin-right: 60px
    }

    @media (max-width: 767.98px) {
        .Image--table-icon {
            margin-right: 0;
            margin-bottom: 16px
        }
    }

    .Section--start {
        padding-bottom: 80px;
        padding-top: 220px
    }

    @media (max-width: 767.98px) {
        .Section--start {
            padding-bottom: 60px;
            padding-top: 190px
        }
    }

    .Typography {
        line-height: 1.4
    }

    .Typography--heading1 {
        line-height: 1.2
    }

    @media (max-width: 767.98px) {

        .Typography--heading2,
        .Typography--heading4 {
            line-height: 1.2
        }
    }

    .Typography--heading1custom {
        font-size: 64px;
        line-height: 64px;
        font-weight: 700
    }

    @media (max-width: 1098.98px) {
        .Typography--heading1custom {
            font-size: 52px;
            line-height: 56px
        }
    }

    @media (max-width: 767.98px) {
        .Typography--heading1custom {
            font-size: 56px;
            line-height: 56px
        }
    }

    .Typography--heading4 {
        font-weight: 700
    }

    @media (max-width: 1098.98px) {
        .Typography--heading4 {
            font-size: 18px;
            line-height: 26px
        }
    }

    @media (max-width: 767.98px) {
        .Typography--heading4 {
            font-size: 22px;
            line-height: 26px
        }
    }

    .Typography--heading32custom {
        font-size: 32px;
        line-height: 44px;
        font-weight: 700
    }

    .Typography--body6custom {
        font-size: 22px;
        line-height: 30px;
        font-weight: 400
    }

    @media (max-width: 1098.98px) {
        .Typography--body6custom {
            font-size: 18px;
            line-height: 26px
        }
    }

    .u-bg-cod-gray {
        background-color: #111;
    }

    .u-bg-cod-light-gray {
        background-color: #f8f9fa;
    }

    .u-bg-cerise-red {
        background-color: #ff7800
    }

    .u-mb-40 {
        margin-bottom: 40px
    }

    .u-mb-24 {
        margin-bottom: 24px
    }

    .u-mb-52 {
        margin-bottom: 52px
    }

    @media (max-width: 767.98px) {
        .u-mb-sm-8 {
            margin-bottom: 8px
        }
    }

    @media (max-width: 767.98px) {
        .u-mb-sm-16 {
            margin-bottom: 16px
        }
    }

    @media (max-width: 767.98px) {
        .u-mb-sm-24 {
            margin-bottom: 24px
        }
    }

    .u-opacity-8 {
        opacity: .8
    }

    .u-border-gradient-red {
        border-style: solid;
        border-width: 0 1px;
        border-color: #f8f9fa;
        padding: 1px;
        background: linear-gradient(180deg, #f8f9fa, #ff7800 50%, #f8f9fa)
    }

    .u-w-80 {
        width: 80%
    }

    @media (max-width: 767.98px) {
        .u-w-80 {
            width: 100%
        }
    }

    .u-p-24 {
        padding: 24px
    }

    @media (max-width: 767.98px) {
        .u-p-sm-16 {
            padding: 16px
        }
    }

    .u-align-center {
        align-items: center
    }

    .u-py-32 {
        padding-top: 32px;
        padding-bottom: 32px
    }

    @media (max-width: 767.98px) {
        .u-py-sm-24 {
            padding-top: 24px;
            padding-bottom: 24px
        }
    }
    </style>
</head>

<body class="bg-light">
    <x-header></x-header>
    {{-- <section style="margin-top: 100px" class="main-title">
    <h1 class="text-center">Software Development</h1>
</section> --}}

    <div class="">
        <!-- first tow sections -->
        <section class="Section Section--start u-bg-cod-light-gray">
            <div class="Section-content">
                <!-- intro -->
                <div class="row u-mb-40">
                    <div class="col-md-4 col-12 u-mb-24">
                        <h1 class="Typography Typography--heading1">EmaxIT</h1>
                    </div>
                    <div class="col-md-8 col-12">
                        <p class="Typography Typography--body3 u-mb-24 u-mb-sm-8">Founded in 2000, EmaxIT International
                            Inc. is a global leader in enterprise technology, offering tailored software, consulting,
                            and managed services. The company empowers businesses to embrace digital transformation by
                            streamlining operations and enhancing collaboration. Its integrated approach combines
                            cutting-edge technology, strategic planning, and knowledge management to drive smarter
                            decisions and sustained growth. Focused on innovation and continuous improvement, EmaxIT
                            helps organizations stay agile in a rapidly evolving market. With a strong foundation in
                            data-driven insights and scalable solutions, the company ensures clients achieve operational
                            excellence and competitive advantage across industries.</p>
                    </div>
                    <div class="col-12">
                        <p class="Typography Typography--body3">EmaxIT International builds long-term partnerships based
                            on trust, transparency, and collaboration. The company tailors its enterprise solutions to
                            fit the unique needs of regional and global markets. By adopting modern management
                            methods—like agile development, lean operations, and data analytics—EmaxIT ensures
                            efficiency and responsiveness. Its client-centric approach fosters loyalty and delivers
                            lasting results. Committed to innovation and customer satisfaction, EmaxIT has earned a
                            strong international reputation. As businesses navigate digital transformation, EmaxIT
                            remains a reliable partner, helping organizations succeed through smart, future-ready
                            technology and personalized service.</p>
                    </div>
                </div>

                <!-- awards -->
                <div class="Awards  u-bg-cerise-red">
                    <div class="Awards__item">
                        <div class="Awards__img Awards__img--rating d-flex">
                            <img alt="star" width="64" height="64"
                                src="{{ asset('assets/images/client reviews.png') }}" />

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
                            <img width="64" height="64"
                                src="{{ asset('assets/images/are ready to recommend us.png') }}" />
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
                            <img width="58" height="58"
                                src="{{ asset('assets/images/degree in engineering.png') }}" /><img width="58"
                                height="58"
                                src="/packs/media/images/shared/dev_2-6868150498f52b6d35adb440f6c8b100.jpg" /><img
                                width="58" height="58"
                                src="/packs/media/images/shared/dev_3-1e7ed454a9c80abc40085c692e01c6fc.jpg" /><img
                                width="58" height="58"
                                src="/packs/media/images/shared/dev_4-c89d328001451f18b6377adb49cabc81.jpg" />
                        </div>
                        <div class="Awards__title">
                            <h3 class="Typography Typography--heading1custom Typography--white"><span>100</span><span
                                    class="Typography--heading32custom">%</span></h3>
                            <span class="Typography Typography--body16 Typography--white u-opacity-8">of
                                developers</span>
                        </div>
                        <span class="Awards__desc Typography Typography--body6custom Typography--white">have a degree in
                            engineering</span>
                    </div>
                    <div class="Awards__item">
                        <div class="Awards__img  d-flex">
                            <img width="64" height="64" src="{{ asset('assets/images/successfully.png') }}" />
                        </div>
                        <div class="Awards__title">
                            <h3 class="Typography Typography--heading1custom Typography--white"><span>600</span><span
                                    class="Typography--heading32custom Awards__plus">+</span></h3>
                            <span class="Typography Typography--body16 Typography--white u-opacity-8">projects</span>
                        </div>
                        <span class="Awards__desc Typography Typography--body6custom Typography--white">successfully
                            <br /> delivered</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- mission -->
        <section class="Section u-bg-cod-light-gray">
            <div class="Section-content">
                <div class="d-flex justify-content-center u-mb-52">
                    <div class="u-border-gradient-red u-w-80">
                        <div
                            class="u-bg-cod-light-gray u-p-24 u-p-sm-16 d-flex flex-column u-align-center justify-center">
                            <h2 class="Typography Typography--heading2 u-mb-24 Typography--centered">Mission</h2>
                            <p class="Typography Typography--body6 Typography--bold Typography--centered u-w-80">
                                Empowering businesses through innovative, data-driven enterprise technology solutions
                                that drive efficiency, growth, and digital transformation. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- values -->
        <section class="Section u-bg-cod-light-gray">
            <div class="Section-content">
                <div class="row u-mb-40  u-mb-sm-24">
                    <div class="col-md-6">
                        <h2 class="Typography Typography--heading2">Values</h2>
                    </div>
                </div>
                <div class="BorderedGroup--top BorderedGroup--emperor u-py-32 u-py-sm-24">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 d-flex align-items-start u-mb-sm-16">
                            <img alt="icon" loading="lazy" class="Image Image--table-icon"
                                src="{{ asset('assets/images/successfully.png') }}" />
                            <h4 class="Typography Typography--heading4">Respect</h4>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <p class="Typography Typography--body2">
                                for our clients, our team, and the unique goals of every organization we serve.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="BorderedGroup--top BorderedGroup--emperor u-py-32 u-py-sm-24">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 d-flex align-items-start u-mb-sm-16">
                            <img alt="icon" loading="lazy" class="Image Image--table-icon"
                                src="{{ asset('assets/images/successfully.png') }}" />
                            <h4 class="Typography Typography--heading4">Honesty</h4>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <p class="Typography Typography--body2">
                                We communicate openly, recognize our successes, take accountability for challenges, and
                                constantly learn from experience.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="BorderedGroup--top BorderedGroup--emperor u-py-32 u-py-sm-24">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 d-flex align-items-start u-mb-sm-16">
                            <img alt="icon" loading="lazy" class="Image Image--table-icon"
                                src="{{ asset('assets/images/successfully.png') }}" />
                            <h4 class="Typography Typography--heading4">Freedom</h4>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <p class="Typography Typography--body2">
                                to express ideas, choose the best tools, and collaborate openly—fostering creativity and
                                ownership at all levels.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="BorderedGroup--top BorderedGroup--emperor u-py-32 u-py-sm-24">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 d-flex align-items-start u-mb-sm-16">
                            <img alt="icon" loading="lazy" class="Image Image--table-icon"
                                src="{{ asset('assets/images/successfully.png') }}" />
                            <h4 class="Typography Typography--heading4">Pride</h4>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <p class="Typography Typography--body2">
                                in delivering impactful solutions, being part of a visionary team, and contributing to
                                digital innovation.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="BorderedGroup--top BorderedGroup--emperor u-py-32 u-py-sm-24">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 d-flex align-items-start u-mb-sm-16">
                            <img alt="icon" loading="lazy" class="Image Image--table-icon"
                                src="{{ asset('assets/images/successfully.png') }}" />
                            <h4 class="Typography Typography--heading4">Erudition and broad <br /> knowledge</h4>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <p class="Typography Typography--body2">
                                We promote continuous learning, mastery of emerging technologies, and excellence in
                                everything we build.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <x-footer></x-footer>
    <x-scripts></x-scripts>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const targetId = sessionStorage.getItem('scrollToSection');
        if (targetId) {
            const el = document.getElementById(targetId);
            if (el) {
                el.scrollIntoView({
                    behavior: 'smooth'
                });
            }
            sessionStorage.removeItem('scrollToSection');
        }
    });
    </script>
</body>

</html>