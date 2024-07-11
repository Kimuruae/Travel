<?php
require_once("includes/database.php");
include_once("templates/header.php");
include_once("templates/nav.php");

?>
    <!--Main container-->
      <!-- Services Section -->
  <div class="container mt-4">
    <h1 class="text-center">Our Services</h1>
    <div class="row mt-4">
      <!--Safari Tours-->
      <div class="col-md-4">
        <div class="card mb-4">
          <img src="images/Safari.jpg" class="card-img-top" alt="Safari Tours">
          <div class="card-body">
            <h5 class="card-title">Safari Tours</h5>
            <p class="card-text">Experience the wildlife of Kenya through our guided safari tours in famous national parks and reserves.</p>
            <p><strong>Price:</strong> $1000</p>
            <a href="#" class="btn btn-primary">Book Now</a>
          </div>
        </div>
      </div>
    <!-- Beach Holidays -->
    <div class="col-md-4">
      <div class="card mb-4">
        <img src="images/Beach.jpg" class="card-img-top" alt="Beach Holidays">
        <div class="card-body">
          <h5 class="card-title">Beach Holidays</h5>
          <p class="card-text">Relax on the pristine beaches of Kenya's coastline, with luxurious resorts and various water activities.</p>
          <p><strong>Price:</strong> $1500</p>
          <a href="#" class="btn btn-primary">Book Now</a>
        </div>
      </div>
    </div>
    <!-- Cultural Tours -->
    <div class="col-md-4">
      <div class="card mb-4">
        <img src="images/Culture.jpg" class="card-img-top" alt="Cultural Tours">
        <div class="card-body">
          <h5 class="card-title">Cultural Tours</h5>
          <p class="card-text">Explore Kenya's rich cultural heritage through visits to traditional villages, museums, and cultural festivals.</p>
          <p><strong>Price:</strong> $800</p>
          <a href="#" class="btn btn-primary">Book Now</a>
        </div>
      </div>
    </div>
  </div>

  <!-- More Services -->
  <div class="row mt-4">
    <!-- Adventure Activities -->
    <div class="col-md-4">
      <div class="card mb-4">
        <img src="images/Adventure.jpg" class="card-img-top" alt="Adventure Activities">
        <div class="card-body">
          <h5 class="card-title">Adventure Activities</h5>
          <p class="card-text">Enjoy thrilling activities like hiking, mountain climbing, and water sports in Kenya's stunning landscapes.</p>
          <p><strong>Price:</strong> $1200</p>
          <a href="#" class="btn btn-primary">Book Now</a>
        </div>
      </div>
    </div>
    <!-- Luxury Safaris -->
    <div class="col-md-4">
      <div class="card mb-4">
        <img src="images/Luxury.jpg" class="card-img-top" alt="Luxury Safaris">
        <div class="card-body">
          <h5 class="card-title">Luxury Safaris</h5>
          <p class="card-text">Experience Kenya's wildlife in luxury with private tours, exclusive lodges, and personalized services.</p>
          <p><strong>Price:</strong> $3000</p>
          <a href="#" class="btn btn-primary">Book Now</a>
        </div>
      </div>
    </div>
    <!-- Family Tours -->
    <div class="col-md-4">
      <div class="card mb-4">
        <img src="images/Family.jpg" class="card-img-top" alt="Family Tours">
        <div class="card-body">
          <h5 class="card-title">Family Tours</h5>
          <p class="card-text">Enjoy family-friendly tours and activities designed to create unforgettable memories for all ages.</p>
          <p><strong>Price:</strong> $1800</p>
          <a href="#" class="btn btn-primary">Book Now</a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once("templates/footer.php");?>