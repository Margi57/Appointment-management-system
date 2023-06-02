<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hospital Website</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Custom styles go here */
    /* Example styles for the header and hero section */
    header {
      background-color: #333;
      color: #fff;
      padding: 20px;
    }

    .hero {
      background-image: url('1.jpg');
      background-size: cover;
      background-position: center;
      height: 500px;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: #fff;
    }

    .hero h1 {
      font-size: 48px;
      margin-bottom: 20px;
    }

    .hero p {
      font-size: 24px;
      margin-bottom: 40px;
    }

    .services {
      padding: 50px 0;
    }

    .services h2 {
      text-align: center;
      margin-bottom: 30px;
    }

    .services .card {
      border: none;
      transition: transform 0.3s;
    }

    .services .card:hover {
      transform: translateY(-10px);
    }

    .services .card-body {
      text-align: center;
    }

    .gallery {
      margin-top: 50px;
    }

    .gallery h2 {
      text-align: center;
      margin-bottom: 30px;
    }

    .gallery .card {
      border: none;
      transition: transform 0.3s;
    }

    .gallery .card:hover {
      transform: translateY(-10px);
    }

    .gallery .card img {
      height: 200px;
      object-fit: cover;
    }
  </style>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Hospital Name</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Doctors</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <section class="hero">
    <div class="container">
      <h1>Welcome </h1>
      <p>We provide top-quality healthcare services</p>
      <a href="login.php" class="btn btn-primary btn-lg">Login</a>
    </div>
  </section>

</body>
</html>
