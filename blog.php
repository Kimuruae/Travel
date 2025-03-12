<?php
include_once("templates/header.php");
include_once("templates/nav.php");
?>

<!-- Main Container -->
<div class="container mt-4">
    <h1 class="text-center">Blog</h1>
    <div class="row mt-4">
        <!-- Blog Posts Section -->
        <div class="col-md-8">
            <!-- Blog Post 1 -->
            <div class="card mb-4">
                <img src="images/Lk.jpg" class="card-img-top" alt="Lions roaming in Kenya's national parks">
                <div class="card-body">
                    <h5 class="card-title">Exploring the Wildlife of Kenya</h5>
                    <p class="card-text">Join us on an adventure through Kenya's most famous national parks and reserves, where you can witness the incredible wildlife up close.</p>
                    <a href="post1.html" class="btn btn-primary">Read More</a>
                </div>
            </div>
            <!-- Blog Post 2 -->
            <div class="card mb-4">
                <img src="images/Beach.jpg" class="card-img-top" alt="Beautiful beach in Kenya">
                <div class="card-body">
                    <h5 class="card-title">Top Beach Destinations in Kenya</h5>
                    <p class="card-text">Discover the best beaches in Kenya for a relaxing holiday, complete with pristine sands, clear waters, and luxurious resorts.</p>
                    <a href="post2.html" class="btn btn-primary">Read More</a>
                </div>
            </div>
            <!-- Blog Post 3 -->
            <div class="card mb-4">
                <img src="images/Culture.jpg" class="card-img-top" alt="Traditional Kenyan dance">
                <div class="card-body">
                    <h5 class="card-title">Cultural Experiences in Kenya</h5>
                    <p class="card-text">Learn about the rich cultural heritage of Kenya by visiting traditional villages, attending cultural festivals, and exploring museums.</p>
                    <a href="post3.html" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <?php include_once("templates/side_bar.php"); ?>
    </div> <!-- Close row -->

</div> <!-- Close container -->

<?php include_once("templates/footer.php"); ?>