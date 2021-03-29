<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>About Us</title>
<style>

* {box-sizing: border-box;}

body { 
    margin: 0;
    padding; 0;
    background-color:  #B9B49E;
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

.leftcolumn {   
    float: left;
    width: 75%;
    }

.rightcolumn {
    float: left;
    width: 25%;
    padding-left: 15px;
    }

.fakeimg {
    background-color:#DBAFAD;
    width: 70%;
    padding: 5px;
    }

.card {
    background-color:#F2DCBD;
    padding: 20px;
    margin-top: 20px;
    }

.row:after {
    content: "";
    display: table;
    clear: both;
    }

.footer {
    padding: 15px;
    text-align: center;
    background: RGB(16, 58, 99);
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

</style>
</head>
<body>

<div id="navbar">
    <a href="" id="logo">KAWEIEE <br> UNIVERSITY</a>
        <div id="navbar-right">
            <br>
            <a href="home.php">HOME</a>
            <a href="User_about.php">ABOUT US</a>
            <a href="User_event.php">NEWS & EVENTS</a>
            <a href="User_contact.php">CONTACT</a>
            <a href="User_profile.php">PROFILE</a>
            <a href="home.php">LOG OUT</a>
        </div>
    </div>

<br><br><br>

<header>
        <img src='picture/uni0.png' width='100%'>
    </header>

<div class="row">
    <div class="leftcolumn">
        <div class="card">
            <h2>The University</h2>
            <h4>Introduction</h4>
            <div class="fakeimg" style="height:215px;"><img src='picture/uni.png' width='100%'></div>

<br><br>            
        
        <p>Welcome to Kaweiee University, one of Malaysia’s leading private universities which is a strictly not-for-profit institution and dedicated 
        to quality education, supporting enterprise, and undertaking research focused on key global problems. The University is relatively young by 
        global standards, but is already ranked within the top 2% of universities in the world (QS World University Rankings), and in the top 1.5% of 
        universities in Asia, as well as being ranked within the top 150 universities in the world under 50 years old.
        </p>

        <p>The University has a 6-star “excellent” rating by the Malaysian government and is one of just eleven universities in Malaysia to be awarded 
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
                <div class="fakeimg" style="height:210px;"><img src='picture/uni1.png' width='100%'></div><br>

            <h4>Our Vision</h4>
                <ul><li>Making international engagement our distinctive cross-cutting theme.</li></ul>
                <ul><li>Maintaining our reputation for teaching excellence and a quality student experience.</li></ul>

        <b><h4>Our Mission</h4></b>
                <ul><li>To nurture all-round individuals and devote ourselves to the discovery, advancement,
                        transmission and application of knowledge that meet the needs of our society and the global community.
                    </li></ul>

        <h4>Our Educational Goals</h4>
                <ul><li>become independent, lifelong learners who actively pursue knowledge and appreciate its global application to economic, 
                        political, social and cultural development.
                    </li></ul>
                <ul><li>value integrity and become ethical, accountable, caring and responsible members of society.</li></ul>

        <h4>Our Creed</h4>
                <ul><li>Kaweiee University will carry out its mission with integrity and unwavering dedication to excellence, 
                        enterprise, professionalism, financial self-reliance, innovation, mutual respect and team spirit.
                    </li></ul>
        </div>
    </div>

<div class="rightcolumn">
    <div class="card">
        <h2>About Us</h2>
            <div class="fakeimg" style="height:130px;"><img src='picture/uni2.png' width='100%'></div><br>

            <p>We make lives better by producing leaders of society and equipping our people with leadership qualities 
               so they can serve our communities at every level.
            </p>
    </div>

<div class="card">
    <h2>Popular Post</h2>
        <div class="fakeimg" style="height:145px;"><img src='picture/uni3.png' width='100%'></div><br><br>
        <div class="fakeimg" style="height:158px;"><img src='picture/uni4.png' width='100%'></div><br><br>
        <div class="fakeimg" style="height:142px;"><img src='picture/uni5.png' width='100%'></div><br>
    </div>

<div class="card">
    <h2>History</h2>
        <p>Kaweiee University or KU, Malaysia's technology university, is situated on a 922 acre (373.12 hectare) 
        campus in the southwest of Kuala Lumpur, the capital of Malaysia.
        <div class="fakeimg" style="height:225px;"><img src='picture/uni6.png' width='100%'></div><br>
        </p>
        </div>
    </div>
</div>

<div class="footer">
    <p style="color:white;">© 2021 KAWEIEE UNIVERSITY | Privacy Policy</p>
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