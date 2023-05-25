  <!--------------------------- -->
  <!------------ Back to Top -->
  <!--------------------------- -->
  <button onclick="topFunction()" id="myBtntotop" title="Go to top"><a href="https://wa.me/+91 1234567890"><i class='bx bxl-whatsapp'></i></a></button>
  <!--------------------------- -->
  <!------------ Footer Section -->
  <!--------------------------- -->
  <footer>
      <div class="footer-grid utility_grid utility_grid-3">
          <div class="footer-grid-contact utility_flex-total-center">
              <h2>Contact</h2>
              <ul class="footer-grid-address">
                  <li class="footer-main-address">Windsor Apartments</li>
                  <li>123, New Lenox</li>
                  <li>Chicago, IL 60606</li>
                  <li><strong>Phone:</strong> <a href=""> 123-456-7890</a></li>
                  <li><strong>Fax:</strong> <a href=""> 098-765-4321</a></li>
                  <li><strong>Email:</strong> <a href=""> info@yoursite.com</a></li>
              </ul>
              <div class="footer-social-icons utility_flex-total-center">
                  <a href="" style="border: 1px solid var(--white);" class="button-ani"><i class='bx bxl-instagram'></i></a>
                  <a href="" style="border: 1px solid var(--white);" class="button-ani"><i class='bx bxl-facebook-square'></i></a>
                  <a href="" style="border: 1px solid var(--white);" class="button-ani"><i class='bx bxl-youtube'></i></a>
              </div>
          </div>
          <div class="footer-grid-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387194.0624612241!2d-74.30933914058495!3d40.69701925381924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1682802076924!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="footer-grid-form utility_flex-total-center">
              <h2>Enquiry</h2>
              <form action="">
                  <input type="text" placeholder="Your Name">
                  <input type="text" placeholder="Your Mobile">
                  <input type="email" placeholder="Your Email">
                  <select name="Projects" id="Projects">
                      <option value="Projects">Projects</option>
                      <option value="Projects1">Project Aveum</option>
                      <option value="Projects2">Projects Aria </option>
                  </select>
                  <textarea placeholder="Your Message" name="" id="" cols="30" rows="10"></textarea>
                  <div class="utility_flex-total-center">
                      <button type="submit" style="border: 1px solid var(--white);" class="button-ani"><a href="#">Schedule a tour</a></button>
                  </div>
              </form>
          </div>
      </div>
      <div class="last-footer utility_flex-total-center">
          <p>Futera © 2023 . All rights reserved. Terms of use and Privacy Policy</p>
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

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
          //   document.body.scrollTop = 0;
          //   document.documentElement.scrollTop = 0;
      }
  </script>