<?php include('header.php') ?>

<div class="container-fluid z-depth-1  px-0">

  <section class="contact-section">

    <div class=" p-3 p-md-5">

      <h1 class="text-center font-weight-bold text-white mt-5 mb-5">Contact Us</h1>

      <form class="mx-md-5" action="">

        <div class="row">
          <div class="col-md-6 mb-4">

            <div class="card">
              <div class="card-body px-4">

                <div class="md-form md-outline mt-0">
                  <input type="text" id="name" class="form-control">
                  <label for="name">Your Name</label>
                </div>
                <div class="md-form md-outline">
                  <input type="text" id="email" class="form-control">
                  <label for="email">Your Email Address</label>
                </div>
                <div class="md-form md-outline">
                  <textarea id="message" class="md-textarea form-control" rows="3"></textarea>
                  <label for="message">Your Message</label>
                </div>

                <button type="submit" class="btn btn-primary btn-md btn-block ml-0 mb-0">Submit inquiry</button>

              </div>
            </div>

          </div>
          <div class="col-md-5 offset-md-1 mt-md-4 mb-4 text-white">

            <h5 class="font-weight-bold">Address</h5>
            <p class="mb-0">1632 Main Street</p>
            <p class="mb-0">Manchester, 94126</p>
            <p class="mb-4 pb-2">United Kingdom</p>

            <h5 class="font-weight-bold">Phone</h5>
            <p class="mb-4 pb-2">+ 01 234 567 89</p>

            <h5 class="font-weight-bold">Email</h5>
            <p>info.mafd@gmail.com</p>

          </div>
        </div>

      </form>

    </div>

  </section>


</div>

<?php include('footer.php') ?>
