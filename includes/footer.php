  <!--------------------------- -->
  <!------------ Back to Top -->
  <!--------------------------- -->
  <button id="myBtntotop" title="Go to top"><a href="https://wa.me/+919966906906" target="_blank"><i class='bx bxl-whatsapp'></i></a></button>
  <!--------------------------- -->
  <!------------ Footer Section -->
  <!--------------------------- -->
  <footer>
      <div class="footer-grid utility_grid utility_grid-3">
          <div class="footer-grid-contact utility_flex-total-center">
              <h2>Contact</h2>
              <ul class="footer-grid-address">
                  <li class="footer-main-address">Plot No 27, 28 Vaishnaoi Enclave</li>
                  <li>Petbasheerabad Village Kompally</li>
                  <li>Hyderabad, Telangana 500067</li>
                  <li><strong>Phone:</strong> <a href="tel:+91 9966906906"> +91 9966 906 906</a></li>
                  <li><strong>Email:</strong> <a href="mailto:contact@futeragroup.com"> contact@futeragroup.com</a></li>
              </ul>
              <div class="footer-social-icons utility_flex-total-center">
                  <a href="https://www.instagram.com/futeragroup/" style="border: 1px solid var(--white);" class="button-ani"><i class='bx bxl-instagram'></i></a>
                  <a href="https://www.facebook.com/profile.php?id=100092867637067" style="border: 1px solid var(--white);" class="button-ani"><i class='bx bxl-facebook-square'></i></a>
                  <a href="" style="border: 1px solid var(--white);" class="button-ani"><i class='bx bxl-youtube'></i></a>
              </div>
          </div>
          <div class="footer-grid-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3104.8368963774255!2d78.4920263755859!3d17.522900216636174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTfCsDMxJzIyLjMiTiA3OMKwMjknMzcuNiJF!5e0!3m2!1sen!2sin!4v1687271338403!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3804.803984567535!2d78.47337717406558!3d17.516868033392544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb9aaa6fc2da9d%3A0x63195234f3f41a40!2sPetbasheerabad%2C%20Jeedimetla%2C%20Hyderabad%2C%20Telangana%20500067!5e0!3m2!1sen!2sin!4v1686738609872!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
          </div>
          <div class="footer-grid-form utility_flex-total-center">
              <h2>Enquiry</h2>
              <form action="../pages/form_check-home.php" method="post">
                  <input type="text" placeholder="Your Name" name="username">
                  <input type="text" placeholder="Your Mobile" name="usermobile">
                  <input type="email" placeholder="Your Email" name="useremail">
                  <input type="hidden" name="pageurl" value="<?= $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
                  <select name="Projects" id="Projects">
                      <option value="Projects Aveum">Project Aveum</option>
                      <option value="Projects Aria">Projects Aria </option>
                  </select>
                  <input type="message" placeholder="Your Message" name="usermessage">
                  <div class="utility_flex-total-center">
                      <input type="submit" style="border: 1px solid var(--white);" name="submitbtn" class="submit-btn-form" value="Schedule a tour">
                  </div>
              </form>
          </div>
      </div>
      <div class="last-footer utility_flex-total-center">
          <p>Futera Group © 2023 . All rights reserved. Designed by <a href="">Reymould Technology Solutions</a></p>
      </div>
  </footer>


  <!-- <script src="../assets/js/home-slider.js"></script> -->
  <script src="../assets/js/header.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>


  <script>
      // Get the button
      let myBtntotop = document.getElementById("myBtntotop");

      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {
          scrollFunction()
      };

      function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
              myBtntotop.style.display = "block";
          } else {
              myBtntotop.style.display = "none";
          }
      }
  </script>