<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>XightStudio BI Solution - Business Intelligence</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Poppins', sans-serif;
      color: #343a40;
    }

    .header {
      background:  linear-gradient(135deg,rgb(214, 165, 128) 0%, #FF9100 100%);
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
      width: 180px; /* Adjust if you have a specific BI logo */
      margin-bottom: 25px;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.2);
    }

    .header h1 {
      font-size: 3.5rem;
      font-weight: 700;
      margin-bottom: 15px;
      line-height: 1.2;
    }

    .header p {
      font-size: 1.3rem;
      opacity: 0.95;
      max-width: 700px;
      margin: 0 auto;
    }

    .section-spacing {
      padding: 60px 0;
    }

    .section-title {
      font-size: 2.2rem;
      font-weight: 600;
      color: #ff8700; /* Blue for titles */
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
      background-color: #ff8700; /* Blue underline */
      border-radius: 2px;
    }

    /* Core Flexbox for rows containing cards to ensure equal height */
    .row.equal-height-cards {
        display: flex;
        flex-wrap: wrap; /* Allows items to wrap to the next line */
    }

    /* Card styling for features */
    .card-feature, .bi-concept-card {
      background-color: white;
      border-radius: 15px;
      padding: 30px;
      margin-bottom: 30px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.08);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      /* Ensure column takes full height of its content, not limiting it */
      height: auto; /* Changed from 100% to auto for better responsiveness with flex row */
      display: flex;
      flex-direction: column;
      justify-content: flex-start; /* Aligns content to the top within the card */
    }

    .card-feature:hover, .bi-concept-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 15px 40px rgba(0,0,0,0.12);
    }

    .card-feature .icon {
      font-size: 3rem;
      color: #ff8700; /* Blue icons */
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
      flex-grow: 1; /* Allows the paragraph to take up available space, pushing other content down */
    }

    /* List styling with checkmarks */
    .list-item {
      font-size: 1.05rem;
      margin-bottom: 12px;
      color: #495057;
      display: flex;
      align-items: flex-start; /* Align text to top if multiple lines */
    }

    .list-item i {
      color: #28a745; /* Green checkmark */
      margin-right: 10px;
      font-size: 1.2rem;
      margin-top: 4px; /* Adjust for better alignment with text */
      flex-shrink: 0; /* Prevents icon from shrinking on smaller screens */
    }

    /* BI Concept Card specific styling */
    .bi-concept-card {
        padding: 40px; /* Slightly more padding for these cards */
        min-height: 380px; /* Ensures cards have a minimum height */
        
    }

    .bi-concept-card h3 {
        font-size: 1.8rem;
        font-weight: 600;
        color: #ff8700;
        margin-bottom: 15px;
        border-bottom: 2px solid #e9ecef;
        padding-bottom: 10px;
        display: flex;
        align-items: center;
    }

    .bi-concept-card h3 i {
        margin-right: 15px;
        font-size: 2.2rem;
        color: #ff8700;
    }

    .bi-concept-card p {
        font-size: 1.1rem;
        line-height: 1.7;
        color: #495057;
    }


    .roi-section {
      background: linear-gradient(135deg, #212529 0%, #343a40 100%); /* Darker gradient for ROI */
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
      color: #ffc107; /* Yellow highlight */
      margin-bottom: 5px;
    }

    .roi-section .stat-item .label {
      font-size: 1.1rem;
      opacity: 0.8;
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
    @media (max-width: 767.98px) {
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
      .bi-concept-card h3 {
        font-size: 1.5rem;
      }
      .bi-concept-card p {
        font-size: 0.95rem;
      }
      /* Ensure full width on smaller screens for cards, Bootstrap columns usually handle this */
      .card-feature, .bi-concept-card {
        margin-left: auto;
        margin-right: auto;
        max-width: 95%; /* A little margin for very small screens, avoid 100% to prevent horizontal scroll */
      }
    }
  </style>
</head>
<body>

  <div class="header">
    <div class="container">
      <img src="{{ asset('assets/images/xight-studio-logo.png') }}" alt="XightStudio BI Logo" style="padding:10px;" /> <h1>XightStudio BI Solution</h1>
      <p>Transforming Raw Data into **Actionable Insights** for Smarter Business Decisions.</p>
    </div>
  </div>

  <div class="container section-spacing">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <h2 class="section-title">What is Business Intelligence (BI)?</h2>
        <div class="card-feature text-center">
            <div class="icon"><i class="fas fa-lightbulb"></i></div>
            <p class="lead">BI turns raw data into **clear, actionable insights** to help businesses make better decisions and significantly improve overall performance.</p>
        </div>

        <h2 class="section-title mt-5">Key Features of BI</h2>
        <div class="row equal-height-cards">
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="card-feature">
              <div class="icon"><i class="fas fa-database"></i></div>
              <h5>Data Integration & Cleaning</h5>
              <p>Collects and meticulously cleans data from numerous disparate sources, ensuring accuracy and reliability.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="card-feature">
              <div class="icon"><i class="fas fa-chart-area"></i></div>
              <h5>Visual Dashboards & Reports</h5>
              <p>Presents complex data visually through interactive dashboards and easy-to-understand reports for quick comprehension.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="card-feature">
              <div class="icon"><i class="fas fa-cogs"></i></div>
              <h5>Predictive Analytics</h5>
              <p>Leverages advanced models to forecast future trends, anticipate potential risks, and identify emerging opportunities.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="card-feature">
              <div class="icon"><i class="fas fa-user-cog"></i></div>
              <h5>User-Friendly Analysis</h5>
              <p>Empowers users to analyze data effortlessly without requiring specialized technical skills, promoting widespread adoption.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="card-feature">
              <div class="icon"><i class="fas fa-tachometer-alt"></i></div>
              <h5>Real-Time Monitoring</h5>
              <p>Monitors crucial key performance indicators (KPIs) and metrics in real-time, allowing for immediate response and adjustments.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="card-feature">
              <div class="icon"><i class="fas fa-users"></i></div>
              <h5>Collaboration & Sharing</h5>
              <p>Facilitates seamless team collaboration and easy sharing of insights, fostering a data-driven culture across the organization.</p>
            </div>
          </div>
        </div>
        <p class="lead text-center mt-4">**Benefits:** Business Intelligence helps you **save costs, increase efficiency, and significantly boost profits.**</p>
      </div>
    </div>
  </div>

  <div class="container section-spacing pt-0">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <h2 class="section-title">How Business Intelligence Works</h2>
        <div class="row equal-height-cards">
            <div class="col-md-12 mb-4">
                <div class="bi-concept-card">
                    <h3><i class="fas fa-chart-pie"></i> Core Functionality</h3>
                    <p>Business Intelligence (BI) tools gather and analyze data from various sources to provide clear insights through dashboards and reports, helping businesses track performance and make smarter decisions. They turn raw data into actionable information to improve efficiency and identify opportunities.</p>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="bi-concept-card">
                    <h3><i class="fas fa-warehouse"></i> Data Warehousing</h3>
                    <p>Centralizes and organizes data from various sources for efficient storage, historical analysis, and reporting, ensuring data quality, security, and scalability.</p>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="bi-concept-card">
                    <h3><i class="fas fa-exchange-alt"></i> ETL (Extract, Transform, Load)</h3>
                    <p>ETL moves data from multiple sources, cleans and transforms it to fit analytical needs, then loads it into data warehouses. It ensures data integrity, handles errors, and scales to large volumes, often automating processes. Future trends include real-time ETL and AI-driven data transformation.</p>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="bi-concept-card">
                    <h3><i class="fas fa-eye"></i> Data Visualization</h3>
                    <p>Transforms complex data into interactive, customizable visuals like dashboards and maps, making insights easy to understand and act upon. It supports real-time updates, mobile access, and self-service creation to empower all users. Future trends include AI-driven visualization suggestions and augmented reality for immersive data experiences.</p>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="bi-concept-card">
                    <h3><i class="fas fa-brain"></i> Predictive & Prescriptive Analytics</h3>
                    <p>Uses statistical models to forecast future outcomes and recommends optimal actions based on those predictions, helping businesses make smarter, data-driven decisions.</p>
                </div>
            </div>
            <div class="col-md-12 mb-4">
                <div class="bi-concept-card">
                    <h3><i class="fas fa-laptop-code"></i> Self-Service BI</h3>
                    <p>Enables non-technical users to easily explore and analyze data through intuitive tools like drag-and-drop interfaces and natural language queries, promoting wider data access and faster insights without relying on IT.</p>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container section-spacing pt-0">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <h2 class="section-title">Introducing XightStudio BI Solution</h2>
        <div class="row">
          <div class="col-md-12">
            <ul class="list-unstyled">
              <li class="list-item"><i class="fas fa-check-circle"></i> **Integrated Data Platform:** Seamlessly integrates data from multiple sources into a powerful, centralized platform.</li>
              <li class="list-item"><i class="fas fa-check-circle"></i> **Advanced Data Cleansing:** Meticulously cleans and transforms data to ensure unparalleled accuracy and reliability.</li>
              <li class="list-item"><i class="fas fa-check-circle"></i> **Interactive Visuals:** Provides intuitive, interactive dashboards and easy-to-understand reports for immediate insights.</li>
              <li class="list-item"><i class="fas fa-check-circle"></i> **Real-Time Reporting:** Offers up-to-the-minute reporting for instant performance insights and agile decision-making.</li>
              <li class="list-item"><i class="fas fa-check-circle"></i> **AI-Powered Insights:** Utilizes AI-powered predictive analytics and smart recommendations for proactive business strategies.</li>
              <li class="list-item"><i class="fas fa-check-circle"></i> **Customizable Metrics:** Allows full customization of metrics and reports, precisely fitting your unique business needs.</li>
            </ul>
          </div>
        </div>
        <p class="lead text-center mt-4">**Benefit:** XightStudio helps your business gain **deeper insights** and make **informed, strategic decisions** for sustainable growth.</p>
      </div>
    </div>
  </div>

  <div class="container section-spacing pt-0">
    <div class="roi-section">
      <h2 class="section-title">XightStudio ROI Summary</h2>
      <p>XightStudio automates data analysis, saving time and reducing errors while enabling smarter, faster decisions. It scales with your business and empowers teams with easy access to insights.</p>
      <div class="stats">
        <div class="stat-item">
          <div class="number">50%</div>
          <div class="label">Faster Reporting</div>
        </div>
        <div class="stat-item">
          <div class="number">90%</div>
          <div class="label">Fewer Data Errors</div>
        </div>
        <div class="stat-item">
          <div class="number">40%</div>
          <div class="label">Quicker Decisions</div>
        </div>
      </div>
      <p class="mt-4">Invest in **XightStudio** for efficient, data-driven growth and **increase profitability by finding hidden opportunities.**</p>
    </div>
  </div>

<x-footer>

</x-footer>

</body>
</html>