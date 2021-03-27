<?php
session_start();
include("connection.php"); 

$sql = "SELECT ID, Uname, Email, Tel, Upassword, Address, Job, Profile, Gender, Nick, DOB, Edu, Fax, Company FROM user_";

$results = mysqli_query($conn, $sql);

if (mysqli_num_rows($results) > 0) {
    
    while($row = mysqli_fetch_array($results)) {
        $name= $row["Uname"];
        $email= $row["Email"];
        $phone= $row["Tel"];
        $address= $row["Address"];
        $job= $row["Job"];
        $profile= $row["Profile"];
        $gender= $row["Gender"];
        $nick= $row["Nick"];
        $DOB= $row["DOB"];
        $edu= $row["Edu"];
        $fax= $row["Fax"];
        $company= $row["Company"];

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
            margin: 100px;
        }

        .card-container {
            display: center;
            margin: 100px;
            width: 100%;
        }


        .card-picture img{
            height:400px;
            width:400px;
            margin-top: -10px;
            border-radius: 15px;
            display: center;
        }

        .card-contact {
            background: linear-gradient(to right, #fbf6e9, #fdfaf4);
            height: 650px;
            width: 750px;
            border-radius: 10px;
            text-align: center;
            color: black;
            padding: 5px;
            margin-right:auto;
            display: center;
        }

        img{
            width:25px;
        }

        @media screen and (max-width: 1000px) {
            .card-container {
                display: flex;
                flex-direction: column;
            }

            .card-profile {
                height: 280px;
                width: 800px;
                margin-left:-5%;
            }

            .card-contact {
               margin-left:-5%;
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
    
    

    <div class="flex-container">
            <div class="card">
              <div class="card-cardtion">
                  <div class="card-container">
                    <div class="card-profile">
                      <p class="card-picture"><img src= 'profile/<?= $profile ?>'></p>   
                    </div>
                    <div class="card-contact">
                    <form action="User_profileedit.php" method="POST">

                        <table>

                        <tr>
                            <td colspan=12></td>
                            <td><a href="User_profileedit.php?edit=<?= $id?>"><img src="picture/edit.png" name="edit"></a></td>
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

                        <tr>
                            <td>Gender: </td>
                            <td><?= $gender ?></td>
                        </tr>

                        <tr>
                            <td>Nickname: </td>
                            <td><?= $nick ?></td>
                        </tr>

                        <tr>
                            <td>Date of Birthday: </td>
                            <td><?= $DOB ?></td>
                        </tr>

                        <tr>
                            <td>Education: </td>
                            <td><?= $edu ?></td>
                        </tr>

                        <tr>
                            <td>Fax Number: </td>
                            <td><?= $fax ?></td>
                        </tr>

                        <tr>
                            <td>Company: </td>
                            <td><?= $company ?></td>
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