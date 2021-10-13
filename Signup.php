<?php

session_start();
echo $_SESSION['emailID'];
echo $_SESSION['fName']; 
echo $_SESSION['lName'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>



    <nav class=" navbar-inverse">
        <div class="nav-bar container-fluid ">
            <ul class="nav navbar-nav ">
                <li><a class="nav-bar-header" href="#" style="font-size: 25px;">WebCoursera</a></li>
                <li class="activate nav-bar-header"><a class="nav-bar-header" href="About Us.html">About Us</a></li>
                <li class="nav-bar-header"><a class="nav-bar-header" href="Contact.html">Contact Us</a></li>
                <li class="nav-bar-header"><a class="nav-bar-header" href="All Courses.html">Courses</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-bar-header"><a class="nav-bar-header" href="Signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li class="nav-bar-header"><a class="nav-bar-header" href="Login.html"><span class="glyphicon glyphicon-log-in" ></span> Login</a></li>
            </ul>
        </div>
    </nav>


    <div class='some-page-wrapper' style="height: 550px;">
        <div class='rows'>
            <div class='columns'>
                <div class='column_left'>


                    <div class="w3-content w3-section" style="max-width:100%; max-height:100%">
                        <img class="mySlides fade" src="promotions/img1.png" style="width:100%;height:550px; background-color: white;">
                        <img class="mySlides fade" src="promotions/img2.png" style="width:100%;height:550px">
                        <img class="mySlides fade" src="promotions/img3.png" style="width:100%;height:550px">
                        <img class="mySlides fade" src="promotions/img4.png" style="width:100%;height:550px">
                        <img class="mySlides fade" src="promotions/img5.png" style="width:100%;height:550px">
                        <img class="mySlides fade" src="promotions/img6.png" style="width:100%;height:550px">
                    </div>

                </div>
            </div>

            <script>
                var myIndex = 0;
                carousel();

                function carousel() {
                    var i;
                    var x = document.getElementsByClassName("mySlides");
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    myIndex++;
                    if (myIndex > x.length) {
                        myIndex = 1
                    }
                    x[myIndex - 1].style.display = "block";
                    setTimeout(carousel, 4000); // Change image every 2 seconds
                }
            </script>


            <div class='column'>
                <div class='column_right'>

                    <div class="card">
                        <div class="container" style="width: 400px; ">
                            <h3 class="display-4" style="text-align:center;margin-bottom: 20px; color: white;">Sign Up</h3>
                            <form action="Dashboard.html">
                                <div class="form-group">
                                    <input id="inputUsername" type="text" placeholder="Username" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                </div>
                                <div class="form-group">
                                    <input id="inputEmail" type="email" placeholder="Email address" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                </div>

                                <div class="form-group mb-3">
                                    <input id="inputPhone" type="number" placeholder="Phone Number" required="" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                                </div>
                                <div class="form-group mb-3">
                                    <input id="inputPassword" type="password" placeholder="Password" required="" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                                </div>
                                <div class="form-group mb-3">
                                    <input id="confirmPassword" type="password" placeholder="Confirm Password" required="" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                                </div>
                                <div style="display: flex; justify-content: space-between;" class="custom-control custom-radio mb-3">
                                    <div style="margin: 5px; margin-bottom: 10px; color: white;">
                                        Gender
                                    </div>
                                    <div style=" color: white;">

                                        <input id="customRadio1" type="radio" name="gender" value="male">
                                        <label style="padding-right: 10px;" for="customRadio1">Male</label>
                                        <input id="customRadio2" type="radio" name="gender" value="female">
                                        <label style="padding-right: 10px;" for="customRadio2">Female</label>
                                        <input id="customRadio3" type="radio" name="gender" value="others">
                                        <label for="customRadio3">Others</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm" style="background-color: rgb(252, 152, 3);">Sign Up</button>




                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <div class="footer-basic fix">
        <footer>
            <div class="social">
                <a href="#"><i style="color: rgb(107, 253, 107);" class="fa fa-whatsapp fa-fw"></i></a>
                <a href="#"><i style="color: rgb(255, 134, 219);" class="fa fa-instagram fa-fw"></i></a>
                <a href="#"><i style="color: rgb(255, 0, 34);" class="fa fa-google-plus fa-fw"></i></a>
                <a href="#"><i style="color: rgb(110, 110, 255);" class="fa fa-facebook fa-fw"></i></a>
                <a href="#"><i style="color: rgb(251, 255, 0);" class="fa fa-snapchat-ghost fa-fw"></i></a></div>

            <ul class="list-inline">
                <li style="color: black" class="list-inline-item"><a href="Help.html">Help and Support</a></li>
                <li style="color: black" class="list-inline-item"><a href="Terms.html">Terms and Conditions</a></li>
                <li style="color: black" class="list-inline-item"><a href="Privacy Policy.html">Privacy Policy</a></li>
            </ul>
            <p class="copyright">WebCoursera © 2021</p>
        </footer>
    </div>
</body>




</html>