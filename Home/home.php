<?php
    session_start();

    if(isset($_SESSION['l_username'])){
        echo "welcome ". $_SESSION['l_username'];
    }

    else{
        echo "<script>alert('First Login to Access Homepage!!')</script>";
        echo "<script>location.href='../Login/login.php'</script>";
        
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wedding Planner</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Wedding Planner</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#gallery">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../CRUD/insert.php">Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../Login/login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="container mt-5">
    <div class="jumbotron">
      <h1 class="display-4">Welcome to our Wedding Planning Services</h1>
      <p class="lead">We make your dream wedding a reality!</p>
      <a class="btn btn-primary btn-lg" href="#" role="button">Get Started</a>
    </div>
  </div>

<!-- Services Section -->
<section class="services py-5" id="services">
  <div class="container">
    <h2 class="text-center mb-4">Services</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="../images/gaye-holud.jpg" class="card-img-top" alt="Service 1">
          <div class="card-body">
            <h5 class="card-title">Gaye Holud</h5>
            <p class="card-text">The Gaye Holud, also known as the Haldi or Turmeric Ceremony, is a vibrant pre-wedding celebration that blesses and prepares the couple for their big day. It involves applying auspicious turmeric paste on the bride and groom's body, symbolizing good luck and a natural glow. Our team will curate a festive atmosphere, coordinate gift exchanges, and create a delightful menu of traditional dishes and sweets. Leave the details to us as we ensure an unforgettable Gaye Holud experience for you and your loved ones.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="../images/Mahendi-Night.jpg" class="card-img-top" alt="Service 2">
          <div class="card-body">
            <h5 class="card-title">Mahendi Night</h5>
            <p class="card-text">Get ready to embrace the beauty and tradition of Mehendi Night, an enchanting pre-wedding ceremony that celebrates the bride's upcoming union. During this special event, intricate henna designs are applied to the bride's hands and feet, symbolizing love, good fortune, and the beginning of her new chapter. Our team will create a captivating ambiance, ensuring that you and your loved ones enjoy a memorable evening filled with joy, music, dance, and the artistry of henna. Leave the details to us as we make your Mehendi Night truly extraordinary.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="../images/wedding ceremony.jpg" class="card-img-top" alt="Service 3">
          <div class="card-body">
            <h5 class="card-title">Wedding Ceremony</h5>
            <p class="card-text">Congratulations on your wedding! We are thrilled to assist you in planning a magical wedding ceremony that captures the essence of your love story. Our team will ensure that every detail, from the venue setup to the ceremonial rituals, reflects your unique style and desires. Sit back, relax, and let us create an unforgettable wedding ceremony that will be remembered for a lifetime.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="../images/bouvat.jpg" class="card-img-top" alt="Service 3">
          <div class="card-body">
            <h5 class="card-title">Bouvat</h5>
            <p class="card-text">Get ready for the joyous Bouvat ceremony, where love and blessings overflow. Bouvat is a cherished tradition where the newlywed couple receives blessings, well wishes, and gifts from their loved ones. Our team will create a warm and inviting atmosphere, ensuring that this heartfelt celebration becomes a cherished memory. Leave the arrangements to us as we curate a meaningful and joyful Bouvat experience for you and your guests.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  <!-- Photo Gallery -->
<section class="gallery py-5" id="gallery">
  <div class="container">
    <h2 class="text-center mb-4">Gallery</h2>
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="../images/gayeholud1.jpg" style="width: 348px; height:230px;" class="card-img-top" alt="Image 1">
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="../images/gayeholud2.jpg" style="width: 348px; height:230px;" class="card-img-top" alt="Image 2">
          
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="../images/gayeholud3.jpg" style="width: 348px; height:230px;" class="card-img-top" alt="Image 3">
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="../images/mahendi1.jpg" style="width: 348px; height:230px;" class="card-img-top" alt="Image 3">
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="../images/mahendi2.jpg" style="width: 348px; height:230px;" class="card-img-top" alt="Image 3">
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="../images/wedding.jpg" style="width: 348px; height:230px;" class="card-img-top" alt="Image 3">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Contact Section -->
<section class="contact py-5" id="contact">
  <div class="container">
    <h2 class="text-center mb-4">Contact</h2>
    <div class="row">
      <div class="col-md-6">
        <form>
          <div class="form-group">
            <label for="name" style="font-weight:bold;">Your Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name">
          </div>
          <div class="form-group">
            <label for="email" style="font-weight:bold;">Your Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email">
          </div>
          <div class="form-group">
            <label for="message" style="font-weight:bold;">Message</label>
            <textarea class="form-control" id="message" rows="5" placeholder="Enter your message"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="col-md-6">
        <h4>Contact Information</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rhoncus orci eu magna sollicitudin, ut
          ullamcorper ligula dapibus. </p>
        <ul class="list-unstyled">
          <li><i class="fas fa-map-marker-alt"></i> Address: 123 Street, City, Country</li>
          <li><i class="fas fa-phone-alt"></i> Phone: +1 123 456 7890</li>
          <li><i class="fas fa-envelope"></i> Email: info@example.com</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<?php
  echo "<br><a href='../Login/logout.php'><input type='button' value='logout' name='logout'></a>";
?>


  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
