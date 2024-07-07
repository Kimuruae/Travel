 <?php require_once("templates/header.php");?>
<?php include_once("templates/nav.php");?>
    <!--Main container-->
    <div id="home" class="container mt-4">
        <h2>Home</h2>
        <p>Welcome to Tour Kenya. The number one Travel and tour agency in Kenya</p>
        <p>Experience a whole new adventure exploring</p>
    </div>
    <div id="about" class="container mt-4">
        <h2>About</h2>
        <a class="nav-link" href="about.php" class="btn btn-primary">Learn More</a> 
    </div>
    <div id="services" class="container mt-4">
        <h2>Services</h2>
        <p>Discover our services in this section.</p>
    </div>
        <!-- Featured Destinations -->
        <div class="featured-destinations mt-4">
            <h2>Featured Destinations</h2>
            <div class="row">
              <div class="col-md-6">
                <div class="card mb-4">
                  <img src="images/MM.jpg" class="card-img-top" alt="Maasai Mara">
                  <div class="card-body">
                    <h5 class="card-title">Maasai Mara</h5>
                    <p class="card-text">Witness the incredible wildlife and the Great Migration in Maasai Mara National Reserve.</p>
                    <a href="destination.html" class="btn btn-primary">Learn More</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card mb-4">
                  <img src="images/diani.jpg" class="card-img-top" alt="Diani Beach">
                  <div class="card-body">
                    <h5 class="card-title">Diani Beach</h5>
                    <p class="card-text">Relax on the beautiful white sands and enjoy water sports at Diani Beach.</p>
                    <a href="destination.html" class="btn btn-primary">Learn More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
      
          <!-- Customer Testimonials -->
          <div class="testimonial mt-4">
            <h2>What Our Customers said</h2>
            <div class="row">
              <div class="col-md-6">
                <blockquote class="blockquote">
                  <p class="mb-0">"Tour Kenya provided an unforgettable safari experience.I highly recommend their services!"</p>
                  <footer class="blockquote-footer">J.J</footer>
                </blockquote>
              </div>
              <div class="col-md-6">
                <blockquote class="blockquote">
                  <p class="mb-0">"The cultural tour was eye-opening. Learned so much about Kenya's rich heritage."</p>
                  <footer class="blockquote-footer">Jane Smith</footer>
                </blockquote>
              </div>
<?php include_once("templates/footer.php");?>
