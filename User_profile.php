<?php

session_start();
include("connection.php"); 
?>  

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
        
        .card {
            background-color: #FEEED5; /*background*/
            width: 100px;
            padding: 100px;
            line-height:72vh;
            margin:0px;
            /* flex-wrap: nowrap;
            flex-direction: row;
            justify-content: center; */
        }

        .card-cardtion {
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: normal;
            font-size: 1.6rem;
            line-height: 1.9;
            margin: 100px;

        }

        .card-container {
            display: center;
            margin: 100px;
            /* width: 100px; */
        }


        .card-picture img{
            height:350px;
            width:350px;
            margin-top: -190px;
            border-radius: 15px;
            margin-left:30px;
            float:left;

        }

        .card-contact {
            background: #FEEED5;
            height: 250px;
            width: 1000px;
            border-radius: 10px;
            color: black;
            padding: 200px 5px;
            display: center;
            margin-left:50px;  
        }

        table{
            float:right;
            margin-top:-200px;
            margin-right:50px;
        }

        img{
            width:25px;
        }

        @media screen and (max-width: 1000px) {
            .card-container {
                display: center;
                flex-direction: column;
            }

            .card-profile {
                height: 280px;
                width: 800px;
                margin-left:-5%;
            }

            .card-contact {
               margin-left:0%;
               height: 400px;
               width: 570px;
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
<br><br><br><br><br><br>
              <div class="card-cardtion">
                  <div class="card-container">
                    <div class="card-contact">
                    <div class="card-profile">
                      <p class="card-picture"><img src= 'profile/<?= $_SESSION['profile'] ?>'></p>   
                    </div>
                    <form action="User_profile.php" method="POST">

                        <table>
                       
                        <tr>
                            <td colspan=13></td>
                            <td><a href="User_profileedit.php?edit=<?= $_SESSION['ID'] ?>"><img src="picture/edit.png" name="edit"></a></td>
                        </tr>

                        <tr>
                            <td>ID: </td>
                            <td><?=  $_SESSION['ID'] ?></td>
                        </tr>

                        <tr>
                            <td>Name: </td>
                            <td><?=  $_SESSION['name'] ?></td>
                        </tr>

                        <tr>
                            <td>Nickname: </td>
                            <td><?= $_SESSION['nickname'] ?></td>
                        </tr>

                        <tr>
                            <td>Email: </td>
                            <td><?= $_SESSION['email'] ?></td>
                        </tr>

                        <tr>
                            <td>Phone: </td>
                            <td><?= $_SESSION['phone'] ?></td>
                        </tr>

                        <tr>
                            <td>Address: </td>
                            <td><?= $_SESSION['address'] ?></td>
                        </tr>

                        <tr>
                            <td>Job: </td>
                            <td><?= $_SESSION['job'] ?></td>
                        </tr>

                        <tr>
                            <td>Gender: </td>
                            <td><?= $_SESSION['gender'] ?></td>
                        </tr>

                        <tr>
                            <td>Date of Birthday: </td>
                            <td><?= $_SESSION['birth'] ?></td>
                        </tr>

                        <tr>
                            <td>Education: </td>
                            <td><?= $_SESSION['edu'] ?></td>
                        </tr>

                        <tr>
                            <td>Fax Number: </td>
                            <td><?= $_SESSION['fax'] ?></td>
                        </tr>

                        <tr>
                            <td>Company: </td>
                            <td><?= $_SESSION['company'] ?></td>
                        </tr>

                        </table>
                        </form>
                    </div>    
                  </div>
              </div>
            </div>

</body>
<html>