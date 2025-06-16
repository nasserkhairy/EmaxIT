 <x-head></x-head>
  <style>


  </style>
 <x-header></x-header>
<body>
 

 
  <div class="main-content-wrapper" style="margin-top: 100px;">
    <div class="container py-5">
      <div class="row justify-content-center align-items-stretch">
       
        <div class="col-md-10 info-column order-md-2 order-lg-1"> 
          <div class="info-section">
              <img src="{{ asset('assets/images/xight-studio-logo.png') }}" alt="XightStudio Logo">
              <p>
                
                  <br><br>
                  When you request <strong style="color:#ff8700;">XightStudio</strong> demo, there's absolutely no commitment or questions asked — we
                  will arrange for a friendly, personalized session designed to show you how our business
                  intelligence platform will add new dimensions to your decisions. Whether you're looking to
                  streamline reporting, improve data visualization, or unlock deeper insights, we'll tailor the
                  demo to focus on what matters most to you.
              </p>
              <p class="mt-3">
                  If you'd like to learn more, feel free to contact our team or read more about XightStudio. We're
                  here to help every step of the way!
              </p>
          </div>
        </div>

       
        <div class="col-md-10 form-column order-md-1 order-lg-2"> 
          <div class="form-container">
              <h2 class="form-section-title">Request XightStudio Demo</h2>
              <form action="" method="post" class="php-email-form">
                  <div class="row gy-4">
                      <div class="col-md-6">
                          <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                      </div>
                      <div class="col-md-6">
                          <input type="text" name="job_title" class="form-control" placeholder="Job Title" required>
                      </div>
                      <div class="col-md-6">
                          <input type="text" name="Phone" class="form-control" placeholder="Your Phone" required>
                      </div>
                      <div class="col-md-6">
                          <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                      </div>
                      <div class="col-md-12">
                          <input type="text" name="Company_Name" class="form-control" placeholder="Company Name" required>
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
                              <option value="Transportation and Logistics">Transportation and Logistics</option>
                              <option value="Travel">Travel</option>
                              <option value="Marketing and Advertising">Marketing and Advertising</option>
                              <option value="Media and Journalism">Media and Journalism</option>
                              <option value="Technology">Technology</option>
                              <option value="Non-profit">Non-profit</option>
                              <option value="Other">Other</option>
                          </select>
                      </div>
                      <div class="col-md-12">
                          <textarea name="message" rows="6" class="form-control" placeholder="Preferred Date and Time / Any Notes" required></textarea>
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

  <footer>
    <x-footer></x-footer>
  </footer>

</body>
</html>