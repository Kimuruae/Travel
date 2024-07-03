<?php
include_once("templates/header.php");
 include_once("templates/nav.php");?>
 
     <!-- Main Container -->
  <div class="container mt-4">
    <h1 class="text-center">Blog</h1>
    <div class="row mt-4">
      <!-- Blog Posts Section -->
      <div class="col-md-8">
        <!-- Blog Post 1 -->
        <div class="card mb-4">
          <img src="images/blog1.jpg" class="card-img-top" alt="Blog Post 1">
          <div class="card-body">
            <h5 class="card-title">Exploring the Wildlife of Kenya</h5>
            <p class="card-text">Join us on an adventure through Kenya's most famous national parks and reserves, where you can witness the incredible wildlife up close.</p>
            <a href="post1.html" class="btn btn-primary">Read More</a>
          </div>
        </div>
        <!-- Blog Post 2 -->
        <div class="card mb-4">
          <img src="images/blog2.jpg" class="card-img-top" alt="Blog Post 2">
          <div class="card-body">
            <h5 class="card-title">Top Beach Destinations in Kenya</h5>
            <p class="card-text">Discover the best beaches in Kenya for a relaxing holiday, complete with pristine sands, clear waters, and luxurious resorts.</p>
            <a href="post2.html" class="btn btn-primary">Read More</a>
          </div>
        </div>
        <!-- Blog Post 3 -->
        <div class="card mb-4">
          <img src="images/blog3.jpg" class="card-img-top" alt="Blog Post 3">
          <div class="card-body">
            <h5 class="card-title">Cultural Experiences in Kenya</h5>
            <p class="card-text">Learn about the rich cultural heritage of Kenya by visiting traditional villages, attending cultural festivals, and exploring museums.</p>
            <a href="post3.html" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>
      <!-- Sidebar Section -->
      <div class="col-md-4">
        <!-- Categories -->
        <div class="card mb-4">
          <div class="card-header">
            Categories
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><a href="#">Wildlife</a></li>
            <li class="list-group-item"><a href="#">Beach Holidays</a></li>
            <li class="list-group-item"><a href="#">Cultural Tours</a></li>
            <li class="list-group-item"><a href="#">Adventure Activities</a></li>
            <li class="list-group-item"><a href="#">City Excursions</a></li>
          </ul>
        </div>
        <!-- Recent Posts -->
        <div class="card mb-4">
          <div class="card-header">
            Recent Posts
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><a href="post1.html">Exploring the Wildlife of Kenya</a></li>
            <li class="list-group-item"><a href="post2.html">Top Beach Destinations in Kenya</a></li>
            <li class="list-group-item"><a href="post3.html">Cultural Experiences in Kenya</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <?php include_once("templates/footer.php");?>