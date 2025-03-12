<?php require_once("templates/header.php"); ?>
<?php include_once("templates/nav.php"); ?>

<!-- Main container -->
<div id="home" class="container mt-4">
    <h2>Home</h2>
    <p>Welcome to Keyian Travel, the number one travel and tour agency in Kenya.<br>Experience a whole new adventure exploring.</p>
</div>

<div id="about" class="container mt-4">
    <h2>About</h2>
    <p>Learn more about us</p>
    <a href="about.php" class="btn btn-primary">Learn More</a>
</div>

<div id="services" class="container mt-4">
    <h2>Services</h2>
    <p>Start an incredible journey with us today.</p>
    <a href="services.php" class="btn btn-primary">Explore Services</a>
</div>

<!-- Featured Destinations -->
<section class="featured-destinations mt-4">
    <h2>Top Destinations</h2>
    <br>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <img src="images/MM.jpg" class="card-img-top" alt="Maasai Mara">
                <div class="card-body">
                    <h5 class="card-title">Maasai Mara</h5>
                    <p class="card-text">Witness the incredible wildlife and the Great Migration in Maasai Mara National Reserve.</p>
                    <a href="destination.php?place=maasai-mara" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <img src="images/diani.jpg" class="card-img-top" alt="Diani Beach">
                <div class="card-body">
                    <h5 class="card-title">Diani Beach</h5>
                    <p class="card-text">Relax on the beautiful white sands and enjoy water sports at Diani Beach.</p>
                    <a href="destination.php?place=diani-beach" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Customer Testimonials -->
<section class="testimonial mt-4">
    <h2>What Our Customers Say</h2>
    <div class="row">
        <div class="col-md-6">
            <blockquote class="blockquote">
                <p class="mb-0">"Keyian Travel provided an unforgettable safari experience. I highly recommend their services!"</p>
                <footer class="blockquote-footer">Joshua Kim</footer>
            </blockquote>
        </div>
        <div class="col-md-6">
            <blockquote class="blockquote">
                <p class="mb-0">"The cultural tour was eye-opening. Learned so much about Kenya's rich heritage."</p>
                <footer class="blockquote-footer">Kane Smith</footer>
            </blockquote>
        </div>
    </div>
</section>

<?php include_once("templates/footer.php"); ?>
