
<?php require_once("templates/header.php");?>
<?php include_once("templates/nav.php");?>

   <!-- Main Container -->
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h2 class="text-center mb-4">Sign In</h2>
            <form>
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" required>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-primary">Sign In</button>
              </div>
              <div class="mt-3 text-center">
                <p>Don't have an account? <a href="signup.html">Sign Up</a></p>
                <p><a href="#">Forgot your password?</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include_once("templates/footer.php");?>
