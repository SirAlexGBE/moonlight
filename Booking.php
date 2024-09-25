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
            <a class="nav-link" href="news.php">News & Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Services.php">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Gallery.php">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="Booking.php">Bookings</a>
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
        <h2 class="display-4">Booking and Reservation</h2>
      </div>
    </div>
    <!-- title end -->
    <!-- MAIN CONTENT START (b4-form-password for password) -->

    <div class="container-fluid" style="background-color: white; padding: 0px 350px">
      <div class="container" style="padding: 40px 10px; background-color: aqua">
        <form action="" method="post">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your name" required />
          </div>
          <div class="form-group">
            <label for="Address">Address:</label>
            <input type="text" class="form-control" name="address" id="address" placeholder="Address" required />
          </div>
          <div class="form-group">
            <label for="phone">Contact Number:</label>
            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone" required />
          </div>
          <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="youremail@gmail.com" required />
          </div>
          <div class="form-group">
            <label for="ROOMS">Number of rooms</label>
            <input type="number" class="form-control" name="rooms" id="rooms" placeholder="No.of rooms" required />
          </div>
   

          <div class="form-group">
            <button type="submit" name="submit" class="btn btn-success">Book</button>
            <button type="reset" class="btn btn-danger">Cancel</button>
          </div>
        </form>
        <?php
        include 'admin/connection.php';
        if (isset($_POST['submit'])){

          $a=$_POST['name'];
          $b=$_POST['address'];
          $c=$_POST['phone'];
          $d=$_POST['email'];
          $e=$_POST['rooms'];


          $query="insert into bookings (name, address, phone, email, rooms) values('$a','$b','$c','$d', $e )";
          $run=mysqli_query($conn,$query);
          if($run){
            echo "<script>window.alert('Booking Successful')</script>";
            echo "<script>window.open('Booking.php','_self')</script>";
          }
          else{
            echo "<script>window.alert('Not Successful ')</script>";
          }
        }
        ?>
      </div>
    </div>

    <!-- MAIN CONTENT END -->

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
