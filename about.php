<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

* {box-sizing: border-box;}

body { 
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;;
    }

#navbar {
    overflow: hidden;
    background-color: RGB(27, 94, 209);
    padding: 90px 10px;
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
    padding: 6px;
    text-decoration: none;
    font-size: 22px; 
    line-height: 25px;
    border-radius: 4px;
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

input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('search.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
    }

input[type=text]:focus {
    width: 100%;
}

/* Header/Blog Title */
.header {
    padding: 30px;
    font-size: 40px;
    text-align: center;
    background: white;
    }

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
    float: left;
    width: 75%;
    }

/* Right column */
.rightcolumn {
    float: left;
    width: 25%;
    padding-left: 20px;
    }

/* Fake image */
.fakeimg {
    background-color: #aaa;
    width: 70%;
    padding: 5px;
    }

/* Add a card effect for articles */
.card {
    background-color: white;
    padding: 20px;
    margin-top: 20px;
    }

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
    }

/* Footer */
.footer {
    padding: 20px;
    text-align: center;
    background: #ddd;
    margin-top: 20px;
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

</style>
</head>
<body>

<div id="navbar">
    <a href="login.php" id="logo">KAWEIEE <br> UNIVERSITY</a>
        <div id="navbar-right">
            <a href="home.php">HOME</a>
            <a href="about.php">ABOUT US</a>
            <a href="event.php">EVENT</a>
            <a href="contact.php">CONTACT</a><br>
            <input type="text" name="search" placeholder="Search...">
        </div>
    </div>

<br><br><br><br><br><br><br><br><br><br><br><br>

<div class="row">
    <div class="leftcolumn">
        <div class="card">
            <h2>The University</h2>
            <h4>Introduction</h4>
            <div class="fakeimg" style="height:215px;"><img src='uni.png' width='100%'></div>

<br><br>            

        <p>Welcome to Kaweiee University, one of Malaysia’s leading private universities which is a strictly not-for-profit institution and dedicated 
        to quality education, supporting enterprise, and undertaking research focused on key global problems. The University is relatively young by 
        global standards, but is already ranked within the top 2% of universities in the world (QS World University Rankings), and in the top 1.5% of 
        universities in Asia, as well as being ranked within the top 150 universities in the world under 50 years old.
        </p>

        <p>The University has a 5-star “excellent” rating by the Malaysian government and is one of just eleven universities in Malaysia to be awarded 
        the special “Premier Digital Technology University” status. We have developed close collaborations with many leading international universities 
        including Harvard University and the Universities of Oxford and Cambridge.
        </p>

        <p>So welcome to a globally connected, forward looking university, dedicated to sustainability, and located in arguably one of the most exciting campus 
        destinations on the planet in the warm heart of tropical sunny Malaysia.
        </p>
    </div>

    <div class="card">
        <h2>Vision & Mission</h2>
            <h2>Educational Goals & Creed</h2>
                <div class="fakeimg" style="height:210px;"><img src='uni1.png' width='100%'></div>

            <h5>Our Vision</h5>
                <ul><li>Making international engagement our distinctive cross-cutting theme.</li></ul>
                <ul><li>Maintaining our reputation for teaching excellence and a quality student experience.</li></ul>

        <h5>Our Mission</h5>
                <ul><li>To nurture all-round individuals and devote ourselves to the discovery, advancement,
                        transmission and application of knowledge that meet the needs of our society and the global community.
                    </li></ul>

        <h5>Our Educational Goals</h5>
                <ul><li>become independent, lifelong learners who actively pursue knowledge and appreciate its global application to economic, 
                        political, social and cultural development.
                    </li></ul>
                <ul><li>value integrity and become ethical, accountable, caring and responsible members of society.</li></ul>

        <h5>Our Creed</h5>
                <ul><li>Kaweiee University will carry out its mission with integrity and unwavering dedication to excellence, 
                        enterprise, professionalism, financial self-reliance, innovation, mutual respect and team spirit.
                    </li></ul>
        </div>
    </div>

<div class="rightcolumn">
    <div class="card">
        <h2>About Us</h2>
            <div class="fakeimg" style="height:130px;"><img src='uni2.png' width='100%'></div>

            <p>We make lives better by producing leaders of society and equipping our people with leadership qualities 
               so they can serve our communities at every level.
            </p>
    </div>

<div class="card">
    <h2>Popular Post</h2>
        <div class="fakeimg" style="height:145px;"><img src='uni3.png' width='100%'></div><br>
        <div class="fakeimg" style="height:158px;"><img src='uni4.png' width='100%'></div><br>
        <div class="fakeimg" style="height:142px;"><img src='uni5.png' width='100%'></div><br>
    </div>

<div class="card">
    <h2>History</h2>
        <p>Kaweiee University or KU, Malaysia's technology university, is situated on a 922 acre (373.12 hectare) 
        campus in the southwest of Kuala Lumpur, the capital of Malaysia.
        </p>
        </div>
    </div>
</div>

<div class="footer">
    <p style="color:blue;">© 2021 KAWEIEE UNIVERSSITY | Privacy Policy</p>
</div>

<script>
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = "30px 10px";
    document.getElementById("logo").style.fontSize = "25px";
    } else {
    document.getElementById("navbar").style.padding = "80px 10px";
    document.getElementById("logo").style.fontSize = "35px";
    }
}
</script>

</body>
</html>