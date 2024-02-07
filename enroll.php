<?php 
$props='';
include('header.php') ?>

<div class="container-fluid z-depth-1  px-0">

    <section class="contact-section">

        <div class=" p-3 p-md-5">

            <h1 class="text-center font-weight-bold text-white mt-5 mb-5">Enroll in Our Football Academy</h1>

            <form class="mx-md-5" action="enrollment_process.php" method="POST" enctype="multipart/form-data">

                <div class="row">
                    <div class=" mb-4">

                        <div class="card">
                            <div class="card-body px-4">

                                <div class="md-form md-outline mt-0">
                                    <label for="name">Your Full Name</label>
                                    <input type="text" id="name" name="name" class="form-control" required>
                                </div>
                                <div class="md-form md-outline">
                                    <label for="email">Your Email Address</label>
                                    <input type="email" id="email" name="email" class="form-control" required>
                                </div>
                                <div class="md-form md-outline">
                                    <label for="phone">Your Phone Number</label>
                                    <input type="tel" id="phone" name="phone" class="form-control" required>
                                </div>
                                <div class="md-form md-outline">
                                    <label for="dob">Date of Birth</label>
                                    <input type="date" id="dob" name="dob" class="form-control" required>
                                </div>
                                <div class="md-form md-outline">
                                    <label for="gender">Gender</label>
                                    <select id="gender" name="gender" class="form-control" required>
                                        <option value="" disabled selected>Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="md-form md-outline">
                                    <label for="parent_name">Parent's Name</label>
                                    <input type="text" id="parent_name" name="parent_name" class="form-control"
                                        required>
                                </div>
                                <div class="md-form md-outline">
                                    <label for="parent_email">Parent's Email Address</label>
                                    <input type="email" id="parent_email" name="parent_email" class="form-control"
                                        required>
                                </div>
                                <div class="md-form md-outline">
                                    <label for="parent_phone">Parent's Phone Number</label>
                                    <input type="tel" id="parent_phone" name="parent_phone" class="form-control"
                                        required>
                                </div>
                                <div class="md-form md-outline">
                                    <label for="address">Your Address</label>
                                    <input type="text" id="address" name="address" class="form-control" required>
                                </div>
                                <div class="md-form md-outline">
                                    <label for="playing_position">Preferred Playing Position</label>
                                    <select id="playing_position" name="playing_position" class="form-control" required>
                                        <option value="" disabled selected>Select Playing Position</option>
                                        <option value="goalkeeper">Goalkeeper</option>
                                        <option value="defender">Defender</option>
                                        <option value="midfielder">Midfielder</option>
                                        <option value="forward">Forward</option>
                                    </select>
                                </div>
                                <div class="md-form md-outline">
                                    <label for="previous_academy">Previous Football Academy (if any)</label>
                                    <input type="text" id="previous_academy" name="previous_academy"
                                        class="form-control">
                                </div>
                                <div class="md-form md-outline">
                                    <label for="citizenship_certificate">Citizenship or Birth Certificate (File)</label>
                                    <input type="file" id="citizenship_certificate" name="citizenship_certificate"
                                        class="form-control-file" required>
                                </div>
                                <div class="md-form md-outline">
                                    <label for="photo">Passport Size Photo (File)</label>
                                    <input type="file" id="photo" name="photo" class="form-control-file" required>
                                </div>
                                <div class="md-form md-outline">
                                    <label for="additional_info">Additional Information (optional)</label>
                                    <textarea id="additional_info" name="additional_info"
                                        class="md-textarea form-control" rows="3"></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary btn-md btn-block ml-0 mb-0">Submit
                                    Enrollment</button>

                            </div>
                        </div>

                    </div>
                    <div class="col-md-5 offset-md-1 mt-md-4 mb-4 text-white">

                        <!-- Address and contact  -->

                    </div>
                </div>

            </form>

        </div>

    </section>


</div>

<?php include('footer.php') ?>