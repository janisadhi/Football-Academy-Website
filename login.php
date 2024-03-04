<?php include('header.php') ?>

<div class="container-fluid z-depth-1  px-0">

  <section class="contact-section">

    <div class=" p-3 p-md-5">

      <h1 class="text-center font-weight-bold text-white mt-5 mb-5">Login to your account</h1>

      <form class="mx-md-5" action="">

  <div class="row">
    <div class="col-md-6 mb-4">

      <div class="card">
        <div class="card-body px-4">

          <div class="md-form md-outline mt-0">
          <label for="username">Username</label>

            <input type="text" id="username" class="form-control" placeholder="email or phone number">
          </div>
          <div class="md-form md-outline">
          <label for="password">Password</label>

            <input type="password" id="password" class="form-control">
          </div>

          <button type="submit" class="btn btn-primary btn-md btn-block ml-0 mb-0 mt-5">Login</button>

        </div>
      </div>

    </div>
    <div class="col-md-5 offset-md-1 mt-md-4 mb-4 text-white">

      <h5 class="font-weight-bold">Forgot Password?</h5>
      <p>If you forgot your password, <a href="#">click here</a> to reset it.</p>

      <h5 class="font-weight-bold">New User?</h5>
      <p>If you are a new user, <a href="./enroll.php">click here</a> to register</p>

    </div>
  </div>

</form>

    </div>

  </section>


</div>

<?php include('footer.php') ?>
