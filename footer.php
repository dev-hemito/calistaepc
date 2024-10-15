<footer>
  <div class="container">
    <div class="top-foot">
      <div class="row">
        <div class="col-lg-6">
          <h3>Want to keep up with the latest?
          </h3>
        </div>
        <div class="col-lg-6">
          <h6>Sign Up For Our Newsletter
          </h6>
          <form action="mailer/subscribe.php" method="POST" class="d-flex subscribe-from">
            <input type="email" placeholder="Enter Your Email" name="email" required>
            <button type="submit" class="news-btn"><i class="fa fa-arrow-right" aria-hidden="true"></i>
            </button>
          </form>
        </div>
      </div>

    </div>
    <div class="bottom-foot">
      <div class="row">
        <div class="col-lg-8">
          <img src="images/logo.webp" alt="" width="200px">

          <ul class="foot-menu mt-4">
            <li><a class="nav-link" href="./">Home</a></li>
            <li><a class="nav-link" href="about">About</a></li>
            <li><a class="nav-link" href="services">Services</a></li>
            <li><a class="nav-link" href="portfolio">Portfolio</a></li>
            <li><a class="nav-link" href="contact">Contact</a></li>
          </ul>
        </div>


        <div class="col-lg-4 text-lg-right">
          <ul class="foot-menu social mt-4 ">
            <li><a href="https://www.instagram.com/calista_epc?igsh=MWJyZ2dvYzJsaGRvcw==" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://www.facebook.com/calistaepc" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="https://youtube.com/@calistaepc?si=hU3SGH1k5_U0dOme" target="_blank" title="YouTube"><i class="fab fa-youtube"></i></a></li>
          </ul>
        </div>

      </div>
    </div>
  </div>
</footer>

<div id="popup-form" class="popup-form">
        <div class="popup-content">

            <span class="close">&times;</span>

            <div class="calista-contact-form mt-5 ">
                <form action="mailer/contact.php" method="post" class="co-form">
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name" required>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group">
                                <label for="phone">Phone Number:</label>
                                <input type="tel" id="phone" name="phone" class="form-control" placeholder="Enter your phone number" required>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group">
                                <label for="Subject">Subject:</label>
                                <input type="text" id="Subject" name="subject" class="form-control" placeholder="Enter your Subject" required>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label for="address">Address:</label>
                                <textarea id="address" name="address" class="form-control" placeholder="Enter your address" rows="4" required></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="cont-btn">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <div class="fixed-contact">

    <!-- Phone Number -->
    <a href="tel:+919947093771" target="_blank" class="bg-phone">
        <i class="fa fa-phone"></i>
    </a>

    <!-- WhatsApp Link -->
    <a href="https://wa.me/919947093771?text=Hello" target="_blank" class="bg-whatsapp">
        <i class="fab fa-whatsapp"></i>
    </a>


</div>