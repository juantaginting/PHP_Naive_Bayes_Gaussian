<!DOCTYPE html>
<html>
<head>
  <title>Website Anda</title>
  <style>
    /* CSS untuk footer */
    .footer {
      background-color: #f8f8f8;
      padding: 30px 0;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }

    .footer-content {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    .footer-section {
      flex-basis: 30%;
      margin-bottom: 20px;
    }

    .footer-section h3 {
      font-size: 18px;
      margin-bottom: 10px;
    }

    .social-links a {
      color: #555;
      margin-right: 10px;
      font-size: 16px;
    }

    .social-links a:hover {
      color: #888;
    }

    .footer-section.contact p {
      margin: 5px 0;
    }

    .footer-section.links ul {
      list-style-type: none;
      padding: 0;
    }

    .footer-section.links ul li {
      margin-bottom: 10px;
    }

    .footer-section.links ul li a {
      color: #555;
      text-decoration: none;
    }

    .footer-section.links ul li a:hover {
      color: #888;
    }

    .footer-bottom {
      background-color: #ddd;
      padding: 10px 0;
      text-align: center;
    }

    .footer-bottom p {
      margin: 0;
      font-size: 14px;
      color: #555;
    }
  </style>
</head>
<body>
  <footer class="footer">
    <div class="container">
      <div class="footer-content">
        <div class="footer-section about">
          <h3>About Us</h3>
          <p>I am deeply dedicated to providing high quality products and excellent customer service.
			 My mission is to create long term relationships with clients and contribute to their success.
			  Trust me to be your trusted partner in achieving your goals.</p>
          <div class="social-links">
            <a href="https://www.facebook.com/juanta.maiting"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/ginting_juanta"><i class="fab fa-twitter"></i></a>
            <a href="https://instagram.com/juanta_gins/"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
        <div class="footer-section contact">
          <h3>Contact Us</h3>
          <p><i class="fas fa-phone"></i> +62 81269916659</p>
          <p><i class="fas fa-envelope"></i> 191110034@student.mercubuana-yogya.ac.id</p>
        </div>
       
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2023 Your Website. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>
