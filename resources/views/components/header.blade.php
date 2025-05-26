<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo nav-link">
                        <img src="{{ asset('assets/images/emaxit _logo.png') }}" alt="" style=" height: 35px; margin-top: 20px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section">
                            <a href="/" class="<?php echo $_SERVER['REQUEST_URI'] == '/' ? 'active' : ''; ?>">Home</a>
                        </li>
                        <li class="scroll-to-section">
                            <a href="/solutions" class="<?php echo $_SERVER['REQUEST_URI'] == '/solutions' ? 'active' : ''; ?>">Solutions</a>
                        </li>
                        <li class="scroll-to-section">
                            <a href="/about" class="<?php echo $_SERVER['REQUEST_URI'] == '/about' ? 'active' : ''; ?>">About Us</a>
                        </li>
                        <li class="submenu">
                            <a class="<?php echo $_SERVER['REQUEST_URI'] == '/services' ? 'active' : ''; ?>" href="#">
                              Services
                            </a>
                            <ul>
                              <li><a href="/customSD" class="<?php echo $_SERVER['REQUEST_URI'] == '/customSD' ? 'active' : ''; ?>">Software development</a></li>
                              <li><a href="/data_analyrics" class="<?php echo $_SERVER['REQUEST_URI'] == '/data_analyrics' ? 'active' : ''; ?>">Data analytics</a></li>
                              <li><a href="/digital_markting" class="<?php echo $_SERVER['REQUEST_URI'] == '/digital_markting' ? 'active' : ''; ?>">Digital marketing</a></li>
                              <li><a href="/consultation" class="<?php echo $_SERVER['REQUEST_URI'] == '/consultation' ? 'active' : ''; ?>">Consultation</a></li>
                            </ul>
                        </li>
                       
                        <li class="scroll-to-section"><a href="#contact" class="<?php echo $_SERVER['REQUEST_URI'] == '/contact' ? 'active' : ''; ?>">Contact Us</a></li>
                        <li class="scroll-to-section">
                            <div class="main-blue-button"><a href="#contact">Request Demo</a></div>
                        </li>
                    </ul>
                    <a class='menu-trigger'>

                        <span >Menu</span>

                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>