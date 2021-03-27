<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>News & Events</title>
</head>>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }

body { 
    margin: 0;
    padding; 0;
    background-color: #E5C184;
    font-family: Arial, Helvetica, sans-serif;
    }

#navbar {
    overflow: hidden;
    background-color: #C99738;
    padding: 40px 10px;
    transition: 0.4s;
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 99;
    }

#navbar a {
    float: left;
    color: white;
    text-align: center;
    padding: 14px;
    text-decoration: none;
    font-size: 21px; 
    line-height: 25px;
    border-radius: 8px;
    }

#navbar #logo {
    font-size: 35px;
    font-weight: bold;
    transition: 0.4s;
    }

#navbar a:hover {
    background-color: #ddd;
    color: black;
    }

#navbar a.active {
    background-color: dodgerblue;
    color: white;
    }

#navbar-right {
    float: right;
    }

.footer {
    padding: 15px;
    text-align: center;
    background: #C99738;
    margin-top: 15px;
    }

@media screen and (max-width: 580px) {
  #navbar {
    padding: 20px 10px !important;
    }
  #navbar a {
    float: none;
    display: block;
    text-align: left;
    }
  #navbar-right {
    float: none;
    }
 }

.wrapper {
    margin-top: 0;
    }

.wrapper h1 {
    font-family: 'Arial';
    font-size: 40px;
    margin-bottom: 10px;
    text-align: center;
    }

.box {
    display: flex;
    justify-content: center;
    width: auto;
    text-align: center;
    flex-wrap: wrap;
    }

.box .box1 {
    background:  #F1D7A6;
    margin: 5px;
    margin-bottom: 50px;
    width: 300px;
    padding: 20px;
    line-height: 20px;
    color: black;  
    position: relative;
    }

.box .box1 h3 {
    color: RGB(46, 6, 54);
    font-size: 26px;
    margin-top: 50px;
    }

.box .box1 p.role {
    color: grey;
    margin: 12px 0;
    font-size: 12px;
    text-transform: uppercase;
    }

.box .box1 .box_img {
    position: absolute;
    top: -50px;
    left: 50%;
    transform: translateX(-50%);
    width: 120px;
    height: 120px;
    border-radius: 50%;
    background: RGB(46, 6, 54);
    }

.box .box1 .box_img img {
    width: 120px;
    height: 120px;
    padding: 5px;
    }

.pic{
    width:900px;
    height:400px;
    vertical-align:middle;
    margin-left:300px;
    margin-top:50px;

}
</style>

<body>

    <div id="navbar">
        <a href="" id="logo">KAWEIEE <br> UNIVERSITY</a>
            <div id="navbar-right">
                <br>
                <a href="home.php">HOME</a>
                <a href="Admin_about.php">ABOUT US</a>
                <a href="Admin_event.php">NEWS & EVENTS</a>
                <a href="Admin_contact.php">CONTACT</a>
                <a href="Admin_approve.php">APPROVE</a>
                <a href="home.php">LOG OUT</a>
                </div>
        </div>
    
    <br><br><br><br>
    
    <header>
    <br><br><br>
  <img class="pic" src="picture/slide.jpg">
  <img class="pic" src="picture/slide2.png">
  <img class="pic" src="picture/slide3.jpg">
  <img class="pic" src="picture/slide4.jpg">

  <script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("pic");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 5 seconds
}
</script>
</div>

        </header>

    <br>

<div class="wrapper">
        <h1>NEWs</h1><br><br>
    <div class="box">
        <div class="box1">
            <div class="box_img">
                <img src="picture/news1.png">
            </div>
                <h3>6-STAR RATING</h3>
                    <br>
                    <p>Kaweiee University has been ranked among the very best universities in Malaysia.</p>
                    <p>'I am very pleased that our hard work, innovation and creativity has been recognised by the Ministry of Education with this six-star rating'</p>
                    <p class="role">COMMUNITY</p>
                </div>

        <div class="box1">
            <div class="box_img">
                <img src="picture/news2.png">
            </div>
                <h3>A Beginners Guide to Investing</h3>
                    <br>
                    <p>Interested in investing but dont know where to start? </p>
                    <p>Kaweiee alumni, Professor Jane guide to investment answers all your beginners questions!</p>
                    <br>
                    <p class="role">BUSINESS</p>
                </div>

        <div class="box1">
            <div class="box_img">
                <img src="picture/news3.png">
            </div>
                <h3>Building Better Relationships</h3>
                <br>
                    <p>At Kaweiee, it is not just academics. It is about growing as an individual too.</p>
                    <p>Dc.Jane shares how Life Skills helped her understand her personality.</p>
                    <p class="role">OPINIONS</p>
                </div>
        
        <div class="box1">
            <div class="box_img">
                <img src="picture/news4.png">
            </div>
                <h3>Launches the First Robotic Design in Malaysia</h3>
                <br>
                    <p>Integrating knowledge and skills from different engineering disciplines, the programme is built to give students a broad-based overview of multiple specialisations</p>
                    <p class="role">SCIENCE</p>
                </div>
                
        <div class="box1">
            <div class="box_img">
                <img src="picture/news5.png">
            </div>
                <h3>Moving Into 2021 With Hopeful Resolutions</h3>
                <br>
                    <p>It is that time of year to build a new list of resolutions. Kaweiee Karen Grace Prince shares how you can make and keep your 2021 New Years resolution.</p>
                    <p class="role">COMMUNITY | FEATURED</p>
                </div>
                
        <div class="box1">
            <div class="box_img">
                <img src="picture/news6.png">
            </div>
                <h3>A Year of Gratitude A Future Filled With Hope</h3>
                <br>
                    <p>What has the past year taught us? How are you going into 2021? Our Kaweians share how the learnings of 2020 have allowed them to enter 2021 full of hope.</p>
                    <p class="role">COMMUNITY | FEATURED</p>
                </div>
        </div>
    </div>	

    <hr><br>

    <div class="wrapper">
        <h1>EVENTS</h1>
    <div class="box">

    <div class="box1">
        <div class="box_img">
            <img src="picture/events0.png">
        </div>
            <h3>'Energy From The Sun : Role of Nanotechnology'</h3>
                <br>
                <p>Energy from the sun is one of the potential sources of renewable energy for the humankind.</p>
                <p>It is perceived as one of the clean forms of energy as it does not pollute environment.</p>
                <p class="role">EVENTS | 7 JANUARY 2021</p>
            </div>

        <div class="box1">
            <div class="box_img">
                <img src="picture/events2.png">
            </div>
                <h3>Entrepreneurship & Innovation During Pandemic</h3>
                    <br>
                    <p>Join this webinar to learn more about the past and present entrepreneurship trends, the importance of social entrepreneurship and more.</p>
                    <p class="role">EVENTS | 23 MARCH 2021</p>
                </div>

        <div class="box1">
            <div class="box_img">
                <img src="picture/events1.png">
            </div>
                <h3>From Basics to Getting it Right!</h3>
                    <br><br>
                    <p>KAWEIEE INITIATE 2021: Post Conference Workshop</p>
                    <p>Post Conference Workshop</p>
                    <br><br>
                    <p class="role">EVENTS | UPCOMING EVENTS</p>
                </div>

        <div class="box1">
            <br>
                <b><h3>UPCOMING</3></b>
                <b><h3>EVENTS</3></b>
                <b><h3>......</3></b>
            </div>
        </div>
    </div>	

<div class="footer">
    <br>
    <p style="color:white">© 2021 KAWEIEE UNIVERSITY | Privacy Policy</p>
    <br>
</div>

<script>
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
document.getElementById("navbar").style.padding = "10px 10px";
document.getElementById("logo").style.fontSize = "25px";
} else {
document.getElementById("navbar").style.padding = "40px 10px";
document.getElementById("logo").style.fontSize = "30px";
}
}
</script>

</body>
</html>