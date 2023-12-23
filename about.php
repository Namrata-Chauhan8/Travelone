<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>

  <!-- Add your CSS and font-awesome links here -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.1.0/swiper-bundle.min.js">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link rel="stylesheet" href="css/style.css"> <!-- Assuming this is your custom CSS -->

  <style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Basic responsive styling for small screens */
@media (max-width: 768px) {
  .about-section {
    display: block;
  }
  .about-image,
  .about-content {
    width: 100%;
  }
}

/* Larger screens layout */
.about-section {
  display: flex;
  background-image:url(aboutus.jpg);
  background-size:cover;
  background-repeat: no-repeat;
  justify-content: space-between;
  align-items: center;
  padding: 80px;
}

.about-content {
  flex: 1;
  padding-right: 40px;
}

.about-content h2 {
  font-size: 28px;
  margin-bottom: 20px;
}

.about-content p {
  font-size: 16px;
  line-height: 1.6;
  color: #333;
}

.about-image {
  flex: 1;
}

.about-image img {
  max-width: 100%;
  height: auto;
}

/* Add your existing CSS styles here */

/* Styling for the "About Us" section */
.about-section2 {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 80px;
}

.about-content2 {
  flex: 1;
  padding-right: 40px;
}

.about-content h2 {
  font-size: 28px;
  margin-bottom: 20px;
}

.about-content p {
  font-size: 16px;
  line-height: 1.6;
  color: #333;
}

.about-image {
  flex: 1;
}

.about-image img {
  max-width: 100%;
  height: auto;
}

/* Styling for "Why Choose Us" section */
.why-choose-us {
  padding: 80px;
  background-color: #f7f7f7;
}

.why-choose-us h2 {
  font-size: 28px;
  margin-bottom: 20px;
}

.why-choose-us ul {
  list-style-type: none;
  padding-left: 20px;
}

.why-choose-us li {
  margin-bottom: 10px;
}

/* Styling for "Join Us" section */
.join-us {
  padding: 80px;
  text-align: center;
  background-color: #fff;
}

.join-us h2 {
  font-size: 28px;
  margin-bottom: 20px;
}

.join-us p {
  font-size: 16px;
  line-height: 1.6;
  color: #333;
}

/* Add your existing CSS styles here */

/* Styling for the testimonial section */
.testimonial-section {
  padding: 40px 20px; /* Adjust padding as needed */
  background-color: #f7f7f7;
  text-align: center;
}

.testimonial-section h2 {
  font-size: 24px;
  margin-bottom: 20px;
}

.testimonial-cards {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: stretch;
}

.testimonial-card {
  flex: 1;
  max-width: 300px;
  margin: 20px;
  padding: 20px;
  background-color: #fff;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
  text-align: center;
}

.testimonial-card img {
  max-width: 100px;
  height: auto;
  border-radius: 50%;
  margin-bottom: 20px;
}

.testimonial-card p {
  font-size: 14px;
  line-height: 1.6;
  color: #333;
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .testimonial-card {
    max-width: 100%;
  }
}


</style>
</head>

<body>
  <section>
    <?php include 'navbar.php'; ?>
  </section>

  <section class="about-section">
    <div class="about-content">
      <h2>Welcome to Travelone: Unveiling the World, One Journey at a Time</h2>
      <p>At Travelone, we believe that every adventure begins with a story waiting to be told. Our passion for exploration and discovery drives us to curate exceptional travel experiences that linger in your memory long after you've returned home. Let us take you on a captivating journey through our world of wanderlust.</p>
    </div>   
  </section>

  <section class="about-section2">
  <div class="about-content2">
    <h2>Who We Are</h2>
    <p>Travelone isn't just a travel agency – we're your fellow globetrotters, your guides to the unknown, and your companions on the path less traveled. With years of combined experience, our team is made up of adventurers, culture enthusiasts, and dedicated travel experts who are as passionate about the destinations as they are about the journey itself.</p>
    
    <h2>Our Mission</h2>
    <p>Our mission is simple: to craft journeys that enrich your soul, broaden your horizons, and create lasting memories. We strive to go beyond the ordinary, seeking out authentic experiences that connect you with the heart and soul of a destination. Whether you're a solo explorer, a couple seeking a romantic getaway, or a family yearning for unforgettable moments, Travelone has the perfect itinerary for you.</p>
  </div>

</section>

<section class="why-choose-us">
  <h2>Why Choose Us</h2>
  <ul>
    <li><strong>Personalized Itineraries:</strong> We understand that no two travelers are alike, which is why we take the time to get to know your preferences, interests, and travel style. Your journey with us is tailored to your dreams.</li>
    <li><strong>Expert Guides:</strong> Our local guides are not only knowledgeable about the destinations, but they are also passionate storytellers who bring history and culture to life.</li>
    <li><strong>Impeccable Service:</strong> From the moment you start planning until you return home, we're dedicated to providing you with seamless service, ensuring a stress-free and enjoyable travel experience.</li>
    <li><strong>Sustainable Travel:</strong> We believe in responsible travel that respects the environment and supports local communities. Our itineraries are designed with sustainability in mind, allowing you to explore with a conscience.</li>
    <li><strong>24/7 Support:</strong> Travel mishaps can happen, but with our round-the-clock support, you can rest easy knowing that we're just a call away, no matter where you are in the world.</li>
  </ul>
</section>

<section class="join-us">
  <h2>Join Us in Exploring the Extraordinary</h2>
  <p>Embark on a journey with Travelone and open yourself up to a world of possibilities. Dive into the turquoise waters of remote islands, immerse yourself in the bustling energy of vibrant markets, and savor the flavors of cultures both ancient and modern. Let us be your compass as you navigate the globe, creating memories that will forever be etched in your heart.</p>

  <p>Ready to start your adventure? <strong>Contact us today</strong> and let's begin crafting your next unforgettable travel story together. Travelone: Dare to Discover, Dare to Be You.</p>
</section>

<section class="testimonial-section">
  <h2>Client Testimonials</h2>
  <div class="testimonial-cards">
    <div class="testimonial-card">
      <img src="testimonial.jpg" alt="Testimonial 1">
      <p><strong>Kalyani Acharya </strong> </p>
      <p>"I had an incredible journey with Travelone. Their attention to detail and personalized itinerary made my trip unforgettable."</p>
    </div>
    <div class="testimonial-card">
      <img src="testimonial2.jpg" alt="Testimonial 2">
      <p><strong>Vidhi Chudasama </strong> </p>
      <p>"My TravelOne experience surpassed all hopes. From luxurious stays to exhilarating activities, every moment was unforgettable. A huge thanks for turning my travel dreams into cherished memories. TravelOne has a customer for life in me, and I'm eagerly counting down to the next adventure!"</p>
    </div>
    <div class="testimonial-card">
      <img src="testimonial03.jpg" alt="Testimonial 3">
      <p><strong>Shashwat Rajput </strong> </p>
      <p>"TravelOne has truly transformed the way I explore the world! From the moment I landed on their website, I was impressed by the user-friendly interface and the wide range of travel options they offer. Booking my dream vacation was a breeze, and their attention to detail ensured that every aspect of my trip was perfectly planned."</p>
      </div> 
    <div class="testimonial-card">
      <img src="testimonial04.jpg" alt="Testimonial 4">
      <p><strong>Vinit Chauhan</strong> </p>
      <p>My recent vacation booked through TravelOne exceeded all my expectations. The accommodations were top-notch, the activities were thrilling, and I came back with memories that will last a lifetime. I can't thank TravelOne enough for making my travel dreams a reality. They've earned a loyal customer in me, and I can't wait to see where they'll take me next!</p>
    </div>
    <div class="testimonial-card">
      <img src="testimonial05.jpg" alt="Testimonial 5">
      <p><strong>Kumkum Acharya</strong> </p>
      <p>My recent vacation booked through TravelOne exceeded all my expectations. The accommodations were top-notch, the activities were thrilling, and I came back with memories that will last a lifetime. I can't thank TravelOne enough for making my travel dreams a reality. They've earned a loyal customer in me, and I can't wait to see where they'll take me next!</p>
    </div>
  </div>
</section>



  

  <section>
    <?php require 'footer.php'; ?>
  </section>
</body>

</html>