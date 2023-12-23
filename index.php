<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>

  <!-- Add your CSS and font-awesome links here -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.1.0/swiper-bundle.min.js">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link rel="stylesheet" href="css/style.css"> <!-- Assuming this is your custom CSS -->

  <style>
    .header {
      position: relative;
      background-image: url('home.jpg');
      /* Check if the image path is correct */
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 100vh;
      /* Set a height for the header to see the background */
    }

    .header::after {
      content: "";
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      opacity: 1;
      /* Adjust the opacity as needed */
      z-index: -1;
    }

    .text {
      padding-top: 10%;
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      font-weight: normal;
      float: left;
      padding-left: 10%;
      line-height: 1.5;
      margin-bottom: 10px;
      font-size: xx-large;
      color: white;
      font-style: bolder;
      font-weight: bold;
    }

    @media (max-width: 768px) {
      .header {
        background-image: url(home3.jpg);
        /* Different background image for mobile view */
      }

      .text {
        font-size: x-large;
        padding-top: 30%;
        color: white;
        font-weight: bold;
      }
    }

    /* Your other CSS styles */
  </style>
</head>

<body>
  <!--header starts-->
  <section>
    <?php include 'navbar.php'; ?>
  </section>
  <section class="header">
    <div class="text">
      <p>
      <h1>Welcome!!!</h1>
      </p>
      <p>Discover the world with Travelone!<br>
        Your passport to unforgettable experiences,<br>
        breathtaking landscapes, and cultural wonders.<br>
        Whether it's a tranquil escape or an <br>
        adrenaline-packed adventure, let Travelone turn <br>
        your travel dreams into reality. Explore, indulge,<br>
        and create memories that last a lifetime.<br>
        Your journey begins now...<br></p>
    </div>
  </section>
  <section>
    <?php include 'footer.php'; ?>
  </section>

  <!-- Add your JavaScript libraries and scripts here -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>