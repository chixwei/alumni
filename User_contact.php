<!DOCTYPE html>
    <html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>

        *{
            padding:0;
            margin:0;
            
        }

        body{
            background: #e7d9bc;
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

        .flex-container {
            display: flex;
            flex-direction: column;
            
        }
        
        .card {
            background-color: #e7d9bc; /*background*/
            width: 100%;
            padding: 0px;
            line-height:72vh;
            margin:0px;
            flex-wrap: nowrap;
            flex-direction: row;
            justify-content: center;
        }

        .card-cardtion {
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: normal;
            font-size: 1.6rem;
            line-height: 1.3;
            margin: 90px;
        }

        .card-container {
            display: flex;
            margin: 50px;
            width: 100%;
        }

        .card-profile {
            width: 400px;
            height: 280px;
            background: linear-gradient(to right, #FFA500, #e5c063);
            text-align: center;
            color: black;
            padding: 40px;
            border-radius: 10px;
            margin-left: auto;
        }

        .card-picture img{
            height:300px;
            width:300px;
            margin-top: -10px;
            border-radius: 15px;
        }

        .card-contact {
            background: linear-gradient(to right, #fbf6e9, #fdfaf4);
            height: 350px;
            width: 600px;
            border-radius: 10px;
            text-align: left;
            color: black;
            padding: 5px;
            margin-right:auto;
            
        }

        table {
            border-collapse: seperate;
            border-spacing: 10px;
            width: 600px;
            height: auto;
            margin-left:10px;

        }

        img{
            width:25px;
        }

        .search {
            background: #e7d9bc;
        }

        .search table {
            width: 250px;
            margin-left: 1150px;
            margin-top:200px;
        }

        .search input {
            width: 200px;
            height: 30px;
            border-radius: 20px;
            
        }

        .search input:hover {
            background: rgba(207, 198, 168, 0.918);
            box-shadow: 4px 4px rgba(212, 130, 92, 0.952);
        }

        .search button:hover {
            box-shadow: 4px 4px rgba(212, 130, 92, 0.952);
        }
        

        @media screen and (max-width: 1000px) {
            .card-container {
                display: flex;
                flex-direction: column;
            }

            .card-profile {
                height: 280px;
                width: 500px;
                margin-left:-5%;
            }

            .card-contact {
               margin-left:-5%;
               height: 400px;
               width: 570px;
            }

            table {
                border-collapse: seperate;
                border-spacing: 10px;
                width: 550px;
                height: auto;
                margin-left:10px;
            }

            .search {
                margin-top: 260px;
                margin-left:-700px;
            }
            
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
    </head>
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

    <body>

    
        <form action="User_search.php" method="POST" class="search" >
            <table>
                <tr>
                    <td><input type="text" name="name" placeholder="  Search Name..."></td>
                    <td><button type="submit" name="search"><img src= "picture/search.png"></td>
                </tr>
            </table>
        </form>
    
    
<?php

include("connection.php"); 

$sql = "SELECT ID, Uname, Email, Tel, Upassword, Address, Job, Profile FROM user_";

$results = mysqli_query($conn, $sql);

if (mysqli_num_rows($results) > 0) {
    
    while($row = mysqli_fetch_array($results)) {
        $id= $row["ID"];
        $name= $row["Uname"];
        $email= $row["Email"];
        $phone= $row["Tel"];
        $address= $row["Address"];
        $job= $row["Job"];
        $profile= $row["Profile"];

    ?>      

    <div class="flex-container">
            <div class="card">
              <div class="card-cardtion">
                  <div class="card-container">
                    <div class="card-profile">
                      <p class="card-picture"><img src= 'profile/<?= $profile ?>' value="profile picture"></p>   
                    </div>
                    <div class="card-contact">
                    <form action="User_contact.php" method="POST">

                        <table>

                        <tr style="height:30px;">
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>ID: </td>
                            <td><?= $id ?></td>
                        </tr>

                        <tr>
                            <td>Name: </td>
                            <td><?= $name ?></td>
                        </tr>

                        <tr>
                            <td>Email: </td>
                            <td><?= $email ?></td>
                        </tr>

                        <tr>
                            <td>Phone: </td>
                            <td><?= $phone ?></td>
                        </tr>

                        <tr>
                            <td>Address: </td>
                            <td><?= $address ?></td>
                        </tr>

                        <tr>
                            <td>Job: </td>
                            <td><?= $job ?></td>
                        </tr>


                        </table>
                        </form>
                    </div>    
                  </div>
              </div>
            </div>


<?php
    }
}else {
    echo "0 results";
}

?>

</body>
<html>




