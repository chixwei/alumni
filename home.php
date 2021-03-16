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

        <div class="flex-container">
            <div class="sec1">
              <div class="sec1-section">
                  <div class="sec1-container">
                    <div class="sec1-actionBox">

                      <p class="sec1-para">Kaweiee University have founded in 2021. Want to know more about us? Explore more !</p>
                      <button class="sec1-btn"><a href="about.php"> About Us</a></button>

                    </div>
                  </div>
              </div>
            </div>

            <div class="main">

            <div class="slideshow-container">

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
              <br>
        
              <script>
              var slideIndex = 0;
              showSlides();
              
              function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                  slides[i].style.display = "none";  
                }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}    

                slides[slideIndex-1].style.display = "block";  
                setTimeout(showSlides, 2000); // Change image every 2 seconds
              }
              </script>
            </div>
            </div>

          <footer>
            <p>Footer</p>
          </footer>
        
    </body>
</html>