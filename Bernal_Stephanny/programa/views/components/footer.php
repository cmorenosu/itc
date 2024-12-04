<?php
?>
<style>
  footer {
      background-color: #2C3E50;
      color: #ffffff;
      padding: 40px 0;
      font-family: 'Arial', sans-serif;
  }

  .footer-container {
      display: flex;
      justify-content: space-around;
      max-width: 1200px;
      margin: 0 auto;
  }

  .footer-content {
      display: flex;
      justify-content: space-between;
      width: 100%;
  }

  .contact-info ul, .footer-links ul, .social-media ul {
      list-style-type: none;
      padding: 0;
  }

  .contact-info ul li, .footer-links ul li {
      margin: 10px 0;
  }

  .contact-info ul li i, .social-media ul li i {
      margin-right: 10px;
  }

  .footer-links a {
      text-decoration: none;
      color: #ffffff;
      font-weight: bold;
  }

  .footer-links a:hover {
      color: #3498DB;
  }

  .social-media ul {
      display: flex;
      padding: 0;
  }

  .social-media ul li {
      margin-right: 15px;
  }

  .social-media ul li a {
      color: #ffffff;
      font-size: 24px;
  }

  .social-media ul li a:hover {
      color: #3498DB;
  }

  .newsletter form {
      display: flex;
      flex-direction: column;
  }

  .newsletter input {
      margin: 5px 0;
      padding: 10px;
      border: none;
      outline: none;
      border-radius: 4px;
  }

  .newsletter button {
      padding: 10px;
      background-color: #3498DB;
      color: #ffffff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-weight: bold;
  }

  .avatar {
      width: 50px;
      height: 50px;
  }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<footer>
  <div class="footer-container">
      <div class="footer-content">
          <div class="contact-info">
              <ul>
                  <li><i class="fas fa-phone"></i> 601-301-31-81</li>
                  <li><i class="fas fa-envelope"></i> tanquesdeguerra@itc.edu.co</li>
                  <li><i class="fas fa-map-marker-alt"></i> Universidad E.T.I.T.C </li>
              </ul>
          </div>

          <div class="footer-links">
              <h3>Enlaces</h3>
              <ul>
                  <li><a href="#">Inicio</a></li>
                  <li><a href="#">Nosotros</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Contacto</a></li>
              </ul>
          </div>

          <div class="social-media">
              <h3>Redes Sociales</h3>
              <ul>
                  <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="https://web.whatsapp.com/"><i class="fab fa-whatsapp"></i></a></li>
                  <li><a href="https://www.instagram.com/invites/contact/?igsh=rtnb3j1fp11c&utm_content=3pd4l71"><i class="fab fa-instagram"></i></a></li>
              </ul>
          </div>   
      </div>
  </div>
</footer>



</html>