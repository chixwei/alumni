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

      <section>

        <div class= "slideshow-container">

        <div class= "mySlides fade">
          <img src="homeabout.jpg" style="width: 100%">
          <div class="text">About </div>
        </div>

        <div class="mySlides fade">
          <img src="homeevents.jpg" style="width: 100%">
          <div class="text">News and Events </div>
        </div>

        <div class="mySlides fade">
          <img src="homecontact.jpg" style="width: 100%">
          <div class="text">Contacts </div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10094;</a>

      </div>

      <script>
        var slideIndex= 1;
        showSlides(slideIndex);

        function plusSlides(n) {
          showSlides(slidesIndex += n);

        }

        function currentSlide(n) {
          showSlides(slideIndex = n);
        }

        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");

          if (n > slides.length) {
            slideIndex= 1;
          }

          if (n < 1) {
            slideIndex= slides.length
          }

          for (i= 0; i< slides.length; i++) {
            slides[i].style.display= "none";
          }

          slides[slideIndex-1].style.display= "block";
  
        }

        </script>

      </section>

          <footer>
            <p>Footer</p>
          </footer>
        
    </body>
</html>