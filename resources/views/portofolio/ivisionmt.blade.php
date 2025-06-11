<x-head></x-head>
<x-header></x-header>

  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Poppins', sans-serif;
      color: #343a40;
    }

    .header {
      background: linear-gradient(135deg,rgb(214, 165, 128) 0%, #FF9100 100%);
      color: white;
      padding: 60px 0;
      text-align: center;
      position: relative;
      overflow: hidden;
     
    }

    .header::before {
      content: '';
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: rgba(255, 255, 255, 0.05);
      transform: rotate(45deg);
      animation: header-bg-animate 15s infinite linear;
      z-index: 0;
    }

    @keyframes header-bg-animate {
      0% { transform: rotate(45deg) translate(-10%, -10%); }
      100% { transform: rotate(45deg) translate(10%, 10%); }
    }

    .header .container {
      position: relative;
      z-index: 1;
    }

    .header img {
      width: 180px;
      margin-bottom: 25px;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.2);
      background-color: #fff;
    }

    .header h1 {
      font-size: 3.5rem;
      font-weight: 700;
      margin-bottom: 15px;
      line-height: 1.2;
      color: #fff;
    }

    .header p {
      font-size: 1.3rem;
      opacity: 0.95;
      max-width: 700px;
      margin: 0 auto;
      color: #fff;
    }

    .section-spacing {
      padding: 60px 0;
    }

    .section-title {
      font-size: 2.2rem;
      font-weight: 600;
      color: #FF6F00;
      margin-bottom: 40px;
      text-align: center;
      position: relative;
    }

    .section-title::after {
      content: '';
      position: absolute;
      left: 50%;
      bottom: -10px;
      transform: translateX(-50%);
      width: 80px;
      height: 4px;
      background-color: #FF6F00;
      border-radius: 2px;
    }

    .card-feature {
      background-color: white;
      border-radius: 15px;
      padding: 30px;
      margin-bottom: 30px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.08);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .card-feature:hover {
      transform: translateY(-8px);
      box-shadow: 0 15px 40px rgba(0,0,0,0.12);
    }

    .card-feature .icon {
      font-size: 3rem;
      color: #FF6F00;
      margin-bottom: 20px;
      text-align: center;
    }

    .card-feature h5 {
      font-size: 1.4rem;
      font-weight: 600;
      margin-bottom: 15px;
      color: #343a40;
    }

    .card-feature p {
      font-size: 1rem;
      line-height: 1.6;
      color: #6c757d;
    }

    .list-item {
      font-size: 1.05rem;
      margin-bottom: 12px;
      color: #495057;
      display: flex;
      align-items: center;
    }

    .list-item i {
      color: #28a745; /* Green checkmark */
      margin-right: 10px;
      font-size: 1.2rem;
    }

    .roi-section {
      background: linear-gradient(135deg, #333 0%, #555 100%);
      color: white;
      padding: 80px 0;
      text-align: center;
      border-radius: 15px;
      margin-bottom: 30px;
      position: relative;
      overflow: hidden;
    }

    .roi-section h2 {
      color: white;
      margin-bottom: 30px;
      position: relative;
      z-index: 1;
    }

    .roi-section h2::after {
        background-color: white;
    }

    .roi-section p {
      font-size: 1.4rem;
      max-width: 900px;
      margin: 0 auto;
      line-height: 1.8;
      font-weight: 300;
      position: relative;
      z-index: 1;
    }

    .roi-section .stats {
      display: flex;
      justify-content: space-around;
      margin-top: 40px;
      flex-wrap: wrap;
    }

    .roi-section .stat-item {
      text-align: center;
      margin: 20px;
    }

    .roi-section .stat-item .number {
      font-size: 3.5rem;
      font-weight: 700;
      color:#fff; /* Yellow highlight */
      margin-bottom: 5px;
    }

    .roi-section .stat-item .label {
      font-size: 1.1rem;
      opacity: 0.8;
    }
  
    .paragraph{
        color:#fff;
    }

    footer {
      text-align: center;
      padding: 30px;
      background-color: #343a40;
      color: white;
      margin-top: 50px;
      font-size: 0.95rem;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
      .header h1 {
        font-size: 2.5rem;
      }
      .header p {
        font-size: 1rem;
      }
      .section-title {
        font-size: 1.8rem;
      }
      .roi-section p {
        font-size: 1.1rem;
      }
      .roi-section .stat-item .number {
        font-size: 2.5rem;
      }
    }
  </style>



  <div class="header" style="margin-top: 110px;">
    <div class="container">
      <img src="{{ asset('assets/images/ivision-mt-logo.webp') }}" alt="iVisionMT Logo" style="padding:10px;" />
      <h1>iVisionMT Suite</h1>
      <p>Your Partner for **Smart Workforce Management** and Peak Business Performance.</p>
    </div>
  </div>

  <div class="container section-spacing">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <h2 class="section-title">Elevate Your Workforce with iVisionMT</h2>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="card-feature">
              <div class="icon"><i class="fas fa-robot"></i></div>
              <h5>Automated Scheduling</h5>
              <p>Experience intelligent, AI-driven shift planning that considers availability, skills, and real-time demand.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="card-feature">
              <div class="icon"><i class="fas fa-clock"></i></div>
              <h5>Real-Time Attendance</h5>
              <p>Effortlessly track work hours using advanced biometrics, GPS, and intuitive mobile tools for accuracy.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="card-feature">
              <div class="icon"><i class="fas fa-chart-line"></i></div>
              <h5>Performance Monitoring</h5>
              <p>Gain insights into employee performance with comprehensive tracking, goal management, and continuous feedback.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="card-feature">
              <div class="icon"><i class="fas fa-balance-scale"></i></div>
              <h5>Compliance Assurance</h5>
              <p>Stay ahead of regulations with automated rule checks, detailed reporting, and robust legal compliance features.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="card-feature">
              <div class="icon"><i class="fas fa-user-friends"></i></div>
              <h5>Employee Empowerment</h5>
              <p>Boost morale and efficiency with self-service portals, allowing employees to manage their schedules and requests.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="card-feature">
              <div class="icon"><i class="fas fa-mobile-alt"></i></div>
              <h5>Mobile & Remote Ready</h5>
              <p>Support your dynamic workforce with full mobile accessibility, real-time data, and seamless communication for remote teams.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container section-spacing pt-0">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <h2 class="section-title">Key Features & Functionalities</h2>
        <div class="row">
          <div class="col-md-6">
            <ul class="list-unstyled">
              <li class="list-item"><i class="fas fa-check-circle"></i> BI Dashboards with Deep Insights</li>
              <li class="list-item"><i class="fas fa-check-circle"></i> Smart Scheduling & Attendance Tracking</li>
              <li class="list-item"><i class="fas fa-check-circle"></i> Automated Compliance & Reporting</li>
              <li class="list-item"><i class="fas fa-check-circle"></i> Exception & Overtime Management</li>
              <li class="list-item"><i class="fas fa-check-circle"></i> Employee Self-Service Portal</li>
              <li class="list-item"><i class="fas fa-check-circle"></i> Geo & Wi-Fi Punch, Face Recognition</li>
            </ul>
          </div>
          <div class="col-md-6">
            <ul class="list-unstyled">
              <li class="list-item"><i class="fas fa-check-circle"></i> Real-Time KPIs & Alerts</li>
              <li class="list-item"><i class="fas fa-check-circle"></i> Custom Reports & Visual Timetables</li>
              <li class="list-item"><i class="fas fa-check-circle"></i> Multi-Level Approvals Workflow</li>
              <li class="list-item"><i class="fas fa-check-circle"></i> Flexible Shift Models (Normal, Flexible, Overtime, etc.)</li>
              <li class="list-item"><i class="fas fa-check-circle"></i> Seamless Integration with ERP/CRM/Payroll Systems</li>
              <li class="list-item"><i class="fas fa-check-circle"></i> Fully Responsive: Mobile & PC-Friendly Interface</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container section-spacing pt-0">
    <div class="roi-section">
      <h2 class="section-title">Experience Tangible Returns on Investment</h2>
      <p class="paragraph">The iVisionMT Suite isn't just software; it's an investment in your business's future. See how we deliver measurable impact:</p>
      <div class="stats">
        <div class="stat-item">
          <div class="number">90%</div>
          <div class="label">Reduction in Payroll Errors</div>
        </div>
        <div class="stat-item">
          <div class="number">30%</div>
          <div class="label">Cut in Admin Costs</div>
        </div>
        <div class="stat-item">
          <div class="number">10+</div>
          <div class="label">Manager Hours Saved Weekly</div>
        </div>
      </div>
      <p class="mt-4 paragraph">Beyond savings, iVisionMT boosts employee satisfaction, ensures robust compliance, and drives overall business growth.</p>
    </div>
  </div>

<x-footer></x-footer>

