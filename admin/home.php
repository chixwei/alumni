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
                <img src="homelogo.png" alt="Kaweiee Logo">
            </div>

            <div class="vid">
                <video autoplay muted loop id="homevideo">
                    <source src="homevideo.mp4" type="video/mp4">
                        Your browser does not support HTML5 video
                </video>
            </div>

            <div class="overlay"></div>

            <div class="content">
                <h1>Welcome to Kaweiee University</h1>
                <p>"Never Give Up Because Great Things Take Time"</p>
                <a href="login.php"> Explore More</a> 
            </div>

        </header>

<!-- section 1 -->

        <div class="flex-container">
            <div class="sec">
              <div class="sec-section">
                  <div class="sec-container">
                    <div class="sec-actionBox">

                      <p class="sec-para">Kaweiee University have founded in 2021. Want to know more about us? Explore more !</p>
                      <button class="sec-btn"><a href="login.php"> About Us</a></button>

                    </div>
                  </div>
              </div>
            </div>

            <div class="main">

            <div class="slideshow-container"  data-cycle="2000">

              <div class="mySlides fade">
                <img src="homeabout.jpg" style="width:100%; height:450px;">

              </div>
              
              <div class="mySlides fade">
                <img src="homeevents.jpg" style="width:100%; height:450px;">

              </div>
              
              <div class="mySlides fade">
                <img src="homecontact.jpg" style="width:100%; height:450px;">

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
                      <button class="sec-btn"><a href="login.php"> News and Events</a></button>

                    </div>
                  </div>
              </div>
            </div>

            <div class="main2">

            <div class="slideshow-container"  data-cycle="2500">

              <div class="mySlides fade">
                <img src="event1.jpg" style="width:100%; height:450px;">

              </div>
              
              <div class="mySlides fade">
                <img src="event2.jpg" style="width:100%; height:450px;">

              </div>
              
              <div class="mySlides fade">
                <img src="event3.jpg" style="width:100%; height:450px;">

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
                              <button class="sec-btn"><a href="login.php"> Contact</a></button>

                            </div>
                          </div>
                      </div>
                    </div>

                    <div class="main">

                    <div class="slideshow-container"  data-cycle="2000">

                      <div class="mySlides fade">
                        <img src="contact1.jpg" style="width:100%; height:450px;">

                      </div>
                      
                      <div class="mySlides fade">
                        <img src="contact2.jpg" style="width:100%; height:450px;">

                      </div>
                      
                      <div class="mySlides fade">
                        <img src="contact3.jpg" style="width:100%; height:450px;">

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

          <footer>
            <p>Footer</p>
          </footer>
        
    </body>
</html>