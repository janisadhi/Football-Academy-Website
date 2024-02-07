<?php include('header.php');?>


<div class="container-fluid   px-0">


    <section class="contact-section">

        <div class=" up-cont text-white  pb-2 px-3 px-md-5 mx-md-5" style="padding-top:10rem;">
            <h1 >Upcoming Football Events</h1>
            <p>Discover exciting football events across the academy! Whether you're a player or a fan, there are
                numerous football-related activities happening. From training sessions and tournaments to thrilling
                matches, find your favorite football events and have an incredible time across the academy. Explore
                these events to immerse yourself in the football culture and entertainment scene. Come and experience
                the spirit of football across the academy while you uncover and delve into the details. With
                AllEvents.in, discover your weekend getaways, things to do in the academy, and all the upcoming football
                events near you.</p>
        </div>

        <div class="filter mx-md-5 px-2 px-md-5 py-3">
            <select name="Category" id="Category">
                <option value="" disabled selected hidden>Event Type</option>
                <option value="training">Training</option>
                <option value="tournament">Tournament</option>
                <option value="match">Match</option>
            </select>

            <select name="Date" id="Date">
                <option value="" disabled selected hidden>Event Date</option>
                <option value="">Tomorrow</option>
                <option value="">Next week</option>
                <option value="">Next Month</option>
                <option value="">Daily Events</option>


            </select>

            <select name="Price" id="Price">
                <option value="" disabled selected hidden>Entry Fee</option>
                <option value="free">Free</option>
                <option value="paid">Paid</option>
            </select>
        </div>

    </section>




</div>

<div class="container mt-5">
    <div class="row">

        <!-- Event Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://source.unsplash.com/random/300x300/?football" class="card-img-top"
                    alt="Football Training Session">
                <div class="card-body">
                    <h5 class="card-title ">Football Training Session</h5>
                    <p class="card-text">Join our upcoming football training session to enhance your skills on the
                        field.</p>
                    <p class="card-text"><strong>Date:</strong> January 15, 2024</p>
                    <p class="card-text"><strong>Entry Fee:</strong> Free</p>
                    <a href="#" class="btn btn-interest">Interested <i class="fas fa-star"></i></a>
                    <button class="btn btn-calendar" onclick="addToCalendar('January 15, 2024')">Add to
                        Calendar</button>
                </div>
            </div>
        </div>

        <!-- Event Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://source.unsplash.com/random/300x300/?soccer" class="card-img-top"
                    alt="Youth Football Camp">
                <div class="card-body">
                    <h5 class="card-title">Youth Football Camp</h5>
                    <p class="card-text">Join our youth football camp and learn from experienced coaches.</p>
                    <p class="card-text"><strong>Date:</strong> February 5, 2024</p>
                    <p class="card-text"><strong>Entry Fee:</strong> $20</p>
                    <a href="#" class="btn btn-interest">Interested <i class="fas fa-star"></i></a>
                    <button class="btn btn-calendar" onclick="addToCalendar('February 5, 2024')">Add to
                        Calendar</button>
                </div>
            </div>
        </div>
        <!-- Event Card 3 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://source.unsplash.com/random/300x300/?foot-ball" class="card-img-top"
                    alt="Goalkeeping Workshop">
                <div class="card-body">
                    <h5 class="card-title">Goalkeeping Workshop</h5>
                    <p class="card-text">Improve your goalkeeping skills with our specialized workshop.</p>
                    <p class="card-text"><strong>Date:</strong> March 10, 2024</p>
                    <p class="card-text"><strong>Entry Fee:</strong> $15</p>
                    <a href="#" class="btn btn-interest">Interested <i class="fas fa-star"></i></a>
                    <button class="btn btn-calendar" onclick="addToCalendar('March 10, 2024')">Add to Calendar</button>
                </div>
            </div>
        </div>

        <!-- Event Card 4 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://source.unsplash.com/random/300x300/?football squad" class="card-img-top"
                    alt="Team Building Tournament">
                <div class="card-body">
                    <h5 class="card-title">Team Building Tournament</h5>
                    <p class="card-text">Join our team-building tournament and foster camaraderie on the field.</p>
                    <p class="card-text"><strong>Date:</strong> April 20, 2024</p>
                    <p class="card-text"><strong>Entry Fee:</strong> $25</p>
                    <a href="#" class="btn btn-interest">Interested <i class="fas fa-star"></i></a>
                    <button class="btn btn-calendar" onclick="addToCalendar('April 20, 2024')">Add to Calendar</button>
                </div>
            </div>
        </div>

        <!-- Add more event cards here -->

    </div>
</div>
<div class="banner-bottom mt-5"></div>

<?php include('footer.php');?>