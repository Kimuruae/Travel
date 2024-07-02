
    
<?php
include_once("templates/header.php");
 include_once("templates/nav.php");?>

    <!-- Main Container -->
         <!--Main container-->
    <div id="signup" class="container mt-4">
      <h2>Sign up</h2>
      <p>Sign up to recieve our emails and news.</p>
  </div>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h2 class="text-center mb-4">Sign Up</h2>
            <form>
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" required>
              </div>
              <div class="mb-3">
                <label for="confirm-password" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirm-password" required>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-primary">Sign Up</button>
              </div>
              <div class="mt-3 text-center">
                <p>Already have an account? <a href="signin.html">Sign In</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include_once("templates/footer.php");?>
