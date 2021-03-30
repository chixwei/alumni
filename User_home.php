<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title> Kaweiee University</title>
    </head>
    <body>
        
        <header>

            <div class="logo">
                <img src="picture/homelogo.png" alt="Kaweiee Logo">
            </div>

            <div class="vid">
                <video autoplay muted loop id="homevideo">
                    <source src="picture/homevideo.mp4" type="video/mp4">
                        Your browser does not support HTML5 video
                </video>
            </div>

            <div class="overlay"></div>

            <div class="content">
                <h1>Welcome to Kaweiee University</h1>
                <p>"Never Give Up Because Great Things Take Time"</p>
                <a href="User_about.php"> Explore More</a> 
            </div>

        </header>

<!-- section 1 -->

        <div class="flex-container">
            <div class="sec">
              <div class="sec-section">
                  <div class="sec-container">
                    <div class="sec-actionBox">

                      <p class="sec-para">Kaweiee University have founded in 2021. Want to know more about us? Explore more !</p>
                      <button class="sec-btn"><a href="User_about.php"> About Us</a></button>

                    </div>
                  </div>
              </div>
            </div>

            <div class="main">

            <div class="slideshow-container"  data-cycle="2000">

              <div class="mySlides fade">
                <img src="picture/homeabout.jpg" style="width:100%; height:450px;">

              </div>
              
              <div class="mySlides fade">
                <img src="picture/homeevents.jpg" style="width:100%; height:450px;">

              </div>
              
              <div class="mySlides fade">
                <img src="picture/homecontact.jpg" style="width:100%; height:450px;">

              </div>
              </div>
            </div>
        </div>

<!-- section 2 -->

        <div class="flex-container2">
            <div class="sec2">
              <div class="sec-section">
                  <div class="sec-container">
                    <div class="sec-actionBox">

                      <p class="sec-para">Our university proviedes alots of fun activities! If you are interest on it, Let's check it out !</p>
                      <button class="sec-btn"><a href="User_event.php"> News and Events</a></button>

                    </div>
                  </div>
              </div>
            </div>

            <div class="main2">

            <div class="slideshow-container"  data-cycle="2500">

              <div class="mySlides fade">
                <img src="picture/event1.jpg" style="width:100%; height:450px;">

              </div>
              
              <div class="mySlides fade">
                <img src="picture/event2.jpg" style="width:100%; height:450px;">

              </div>
              
              <div class="mySlides fade">
                <img src="picture/event3.jpg" style="width:100%; height:450px;">

              </div>
              
              </div>
            </div>
        </div>

<!-- section 3 -->

        <div class="flex-container">
                    <div class="sec">
                      <div class="sec-section">
                          <div class="sec-container">
                            <div class="sec-actionBox">

                              <p class="sec-para">If your have any problems, do not hessitate to contact us !</p>
                              <button class="sec-btn"><a href="User_contact.php"> Contact</a></button>

                            </div>
                          </div>
                      </div>
                    </div>

                    <div class="main">

                    <div class="slideshow-container"  data-cycle="2000">

                      <div class="mySlides fade">
                        <img src="picture/contact1.jpg" style="width:100%; height:450px;">

                      </div>
                      
                      <div class="mySlides fade">
                        <img src="picture/contact2.jpg" style="width:100%; height:450px;">

                      </div>
                      
                      <div class="mySlides fade">
                        <img src="picture/contact3.jpg" style="width:100%; height:450px;">

                      </div>
                      
                      </div>
                    </div>
                </div>

        <script>
              var slideshowContainers = document.getElementsByClassName("slideshow-container");

              for(let s = 0; s < slideshowContainers.length; s++) {
                  
                  var cycle = slideshowContainers[s].dataset.cycle;

                  var slides = slideshowContainers[s].querySelectorAll('.mySlides');
                  var slideIndex = 0;
                  showSlides(slides, slideIndex, cycle);
              };

              function showSlides(slides, slideIndex, cycle) {
                  for (i = 0; i < slides.length; i++) {
                      slides[i].style.display = "none";
                  };
                  slideIndex++;
                  if (slideIndex > slides.length) {
                      slideIndex = 1
                  };
                  slides[slideIndex - 1].style.display = "block";
                  
                  setTimeout(function() {
                      showSlides(slides, slideIndex, cycle)
                  }, cycle);
              };
        </script>

    <footer class="foot">

      <div class="footer-left">
        <img src="picture/footerlogo.png">
        
        <p class="footer-links">
          <a href="User_home.php">Home</a>
          |
          <a href="User_about.php">About</a>
          |
          <a href="User_event.php">News & Events</a>
          |
          <a href="User_contact.php">Contact</a>
          |
          <a href="User_profile.php">Profile</a>
        </p>
          
        <p class="footer-company-name"> © 2021 KAWEIEE UNIVERSITY</p>
      </div>

      <div class="footer-center">
        <div>
            <p class="emoji">&#128205;</p>
					  <p><span> V01-06-01, Lingkaran SV Kaweiee University,<br>
             55100 Kuala Lumpur</span>
						</p>
				</div>

        <div>
					<p class="emoji">&#128222;</p>
					<p><a href="tel:+60123456789">+60 123456789</p>
				</div>

				<div>
					<p class="emoji">&#128233;</i>
					<p><a href="mailto:kaweieeuniversity@mail.com">kaweieeuniversity@mail.com</a></p>
				</div>
			</div>

      <div class="footer-right">
				<p class="footer-company-about">
					<span>About the University</span>
					This is Kaweiee University's Alumni webpage. We will provide you an amazing experience throughout our webpage. </p>
				<div class="footer-icons">
					<a href="https://www.facebook.com/" target="_blank"><img src="picture/facebook.png"></a>
					<a href="https://twitter.com/" target="_blank"><img src="picture/twitter.png"></a>
					<a href="https://www.instagram.com/" target="_blank"><img src="picture/instagram.png"></a>
					<a href="https://www.linkedin.com/" target="_blank"><img src="picture/linkedin.png"></a>
					<a href="https://www.youtube.com/" target="_blank"><img src="picture/youtube.png"></a>
				</div>
			</div>

    </footer>
        
    </body>
</html>