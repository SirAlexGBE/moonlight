<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Hotel Moonlight</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta
      name="description"
      content="Hotel Moonlight Pokhara offers a serene retreat with breathtaking views of the Annapurna range. Enjoy luxurious accommodations, warm hospitality, and convenient access to Fewa Lake and local attractions. Perfect for relaxation and adventure, experience the best of Pokhara at our charming hotel."
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <meta name="keywords" content="Hotel Moonlight, best hotel in Pokhara, fewa lake, Adventure, Paragliding, Pame, Club, Nightlife, trekking," />
    <meta name="Author" content="Alex Kandel" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="Css/Style.css" />
    <link rel="shortcut icon" href="Assets/Images/Logo.png" type="image/x-icon" />
  </head>
  <body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: navy">
      <a class="navbar-brand" href="#">
        <img src="Assets/Images/Logo.png" width="60px" alt="" />
        Hotel Moonlight
      </a>
      <button
        class="navbar-toggler d-lg-none"
        type="button"
        data-toggle="collapse"
        data-target="#collapsibleNavId"
        aria-controls="collapsibleNavId"
        aria-expanded="false"
        aria-label="Toggle navigation"
      ></button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="About.php">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="news.php">News & Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Services.php">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Gallery.php">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Booking.php">Bookings</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <a href="Admin/index.php" class="btn btn-outline-warning">Login</a>
        </form>
      </div>
    </nav>
    <!-- navbar end -->
    <!-- title start -->
    <div class="jumbotron">
      <div class="container">
        <h2 class="display-4">News and Events</h2>
      </div>
    </div>
    <!-- title end -->
     <?php
     include 'connection.php'
    
     ?>
    <!-- main body start -->
    <div class="container-fluid" style="padding: 20px; background-color: white">
      <div class="row">
        <div class="col-md-8">
          <h3>Hotel Moonlight Ranked as the Top Hotel in Pokhara</h3>
          <p>
            Pokhara, Nepal – August 2024 – Hotel Moonlight has been officially ranked as the number one hotel in Pokhara, solidifying its reputation as a premier destination for luxury and comfort in
            the heart of Nepal’s most scenic city. This prestigious ranking comes as a result of consistent excellence in service, outstanding guest reviews, and a commitment to providing an
            unparalleled hospitality experience. Since its inception in 2008, Hotel Moonlight has been a beacon of elegance and sophistication, offering guests a unique blend of modern amenities and
            traditional Nepali charm. The hotel’s dedication to quality has earned it top marks across multiple platforms, with visitors praising everything from its meticulously designed rooms and
            breathtaking views of the Annapurna range to its exceptional dining experiences and wide array of adventure activities.
            <a href="#">readmore...</a>
          </p>
        </div>
        <div class="col-md-4">
          <img src="Assets/Images/Outdoor.jpeg" alt="hotel" class="img-thumbnail" style="height: 250px" />
        </div>
      </div>
      <div class="row" style="background-color: rgb(192, 255, 232)">
        <div class="col-md-8">
          <h3>Hotel Moonlight Expands Adventure Offerings to Meet Rising Demand in Pokhara</h3>
          <p>
            Pokhara, Nepal – August 2024 – Hotel Moonlight is taking its commitment to providing exceptional guest experiences to new heights with the expansion of its adventure offerings, responding
            to the growing demand from tourists eager to explore the natural wonders of Pokhara. Known for its luxury accommodations and outstanding service, the hotel is now enhancing its portfolio
            of activities to include even more thrilling options for adventure seekers. Located in the heart of one of Nepal’s most picturesque destinations, Hotel Moonlight has long been a favorite
            among travelers seeking both relaxation and excitement.
            <a href="#">readmore...</a>
          </p>
        </div>
        <div class="col-md-4">
          <img src="Assets/Images/restro.jpg" alt="restro" class="img-thumbnail" style="height: 250px" />
        </div>
      </div>
    </div>
    <!-- Main body end -->
    <!-- Footer Start -->
    <div class="container-fluid bg-dark" style="color: #ffffff; padding: 30px 0px; margin-top: 10px">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>Contact Details</h3>
            <i class="fa fa-bed" aria-hidden="true"></i>
            Hotel Moonlight
            <br />
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            Pokhara,Nepal
            <br />
            <i class="fa fa-envelope" aria-hidden="true"></i>
            info@Hotelmoonlight.com
            <br />
            <i class="fa fa-phone" aria-hidden="true"></i>
            +977 9812345678
          </div>
          <div class="col-md-4">
            <h3 style="text-align: center">Google Maps</h3>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3516.092793355222!2d83.95988461015448!3d28.204493203290756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995951ae003d991%3A0x1270117a2d46541f!2sMoonlight%20Resort%20and%20Spa%20-%20Pokhara!5e0!3m2!1sen!2snp!4v1723636909495!5m2!1sen!2snp"
              width="300"
              height="250"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
          <div class="col-md-4">
            <center>
              <h3>Socials</h3>
              <a href="https://www.facebook.com" target="_blank">
                <i class="fa fa-facebook" aria-hidden="true" style="font-size: 30px"></i>
              </a>
              <a href="https://www.facebook.com" target="_blank">Hotel Moonlight</a>
              <br />
              <a href="https://www.instagram.com" target="_blank">
                <i class="fa fa-instagram" aria-hidden="true" style="font-size: 30px"></i>
              </a>
              <a href="https://www.instagram.com" target="_blank">@moonlight</a>
              <br />
              <a href="https://www.Twitter.com" target="_blank">
                <i class="fa fa-twitter" aria-hidden="true" style="font-size: 30px"></i>
              </a>
              <a href="https://www.facebook.com" target="_blank">@moonlight</a>
              <br />
              <a href="https://www.Whatsapp.com" target="_blank">
                <i class="fa fa-whatsapp" aria-hidden="true" style="font-size: 30px"></i>
              </a>
              <a href="https://www.whatsapp.com" target="_blank">9805868705</a>
              <br />
              <a href="https://www.youtube.com" target="_blank">
                <i class="fa fa-youtube" aria-hidden="true" style="font-size: 30px"></i>
              </a>
              <a href="https://www.youtube.com" target="_blank">Hotel Moonlight</a>
              <br />
            </center>
            <br />
          </div>
          <br />
          <p>All right you reserved: &copy; Hotel Moonlight 2024</p>
        </div>
      </div>
    </div>
    <!-- Footer End -->
  </body>
</html>
