<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Python Course</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>


    <?php
    include("config.php");
    session_start();
    function remove_user()
    {
        $id = $_SESSION['userID'];

        $sql = "DELETE FROM python 
            WHERE userID = '$id'";;
        $result = mysqli_query($GLOBALS['db'], $sql);

        $sql = "UPDATE `user` SET `python` = '0' 
            WHERE `user`.`userID` = '$id'";
        $result = mysqli_query($GLOBALS['db'], $sql);
        $_SESSION['python'] = 0;
        header("location: Dashboard.php");
    }


    if (isset($_GET['click'])) {
        remove_user();
    }



    ?>

    <nav class=" navbar-inverse">
        <div class="nav-bar container-fluid ">
            <ul class="nav navbar-nav ">
                <li><a class="nav-bar-header" href="Dashboard.php" style="font-size: 25px;">WebCoursera</a></li>
                <li class="activate nav-bar-header"><a class="nav-bar-header" href="Course Python.php">Python</a></li>
                <li class="activate nav-bar-header"><a class="nav-bar-header" href="About Us.html">About Us</a></li>
                <li class="nav-bar-header"><a class="nav-bar-header" href="Contact.html">Contact Us</a></li>
                <li class="nav-bar-header"><a class="nav-bar-header" href="All Courses.php">Courses</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <form class="form-inline my-2 my-lg-0" style="display: flex;">
                        <input style="color: red; border-radius: 10px; margin-top: 12px;" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button style="background-color: rgb(228, 224, 224); border-radius: 10px; margin-left: 6px; margin-top: 12px; margin-right: 10px;" class="btn btn-outline-success my-2 my-sm-0 " type="submit ">Search</button>
                    </form>
                </li>
                <li class="nav-bar-header"><a class="nav-bar-header" href="Login.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
        </div>

    </nav>

    <div style="width: 100%; display: flex; justify-content: center;">
        <div style="width: 60%;">
            <div class="mb-3">
                <div class="card_course_details" style="height: 320px;">
                    <div class="card-body">
                        <div class="float-container-new-course border-line">
                            <div class="float-child-new-course" style="width:20%; text-align: center;">
                                <img src="courses_icon/python.png" alt="Admin" class="rounded-circle" width="150px" height="150px" style="margin-top:25px; background-color: white; border-width: 1px; border-color: black; border-style: solid; border-radius: 20px;">
                                <h3 style="margin-top: 20px; ">Python</h3>
                                <p>Instructor: Surya</p>

                            </div>
                            <div class="vr">
                            </div>
                            <div class="float-child-new-course" style="width:40%; padding:15px">
                                <h4>Course Details</h4>
                                <p>This course provides an introduction to programming and the Python language. Students are introduced to core programming concepts like data structures, conditionals, loops, variables, and functions. This course includes
                                    an overview of the various tools available for writing and running Python, and gets students coding quickly. It also provides hands-on coding exercises using commonly used data structures, writing custom functions,
                                    and reading and writing to files.
                                </p>
                            </div>
                            <div class="vr">
                            </div>
                            <div class="float-child-new-course" style="width:40%;">
                                <h4 style="margin-left: 15px; margin-top: 25px;">References</h4>
                                <ol style="margin-right: 10px;">
                                    <li>Python Pocket Reference, 5th Edition Mark Lutz ISBN: 1449357016 O'Reilly Media, February 2014, 264 pages</li>
                                    <br>
                                    <li>
                                        Python in a Nutshell, 3rd Edition [AlexMartelli] ISBN: 144939292X O'Reilly Media, May 2017, 654 pages</li>
                                    <br>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="width: 30%;">
            <div>
                <div class="mb-3">
                    <div class="card_eval_course">
                        <div class="card-body">
                            <h4 class="d-flex align-items-center mb-3">
                                Upcoming Evaluations
                            </h4>

                            <div class="indiv_eval test_course">
                                <h5>Python Final Evaluation</h5>
                                <h5>30th September, 2021</h5>
                            </div>
                            <div class="indiv_eval assg_course">
                                <h5>Python Final Assignment</h5>
                                <h5>28st September, 2021</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="mb-3">
                    <div class="card_result_course">
                        <div class="card-body">
                            <h4 class="d-flex align-items-center mb-3">
                                Previous Results
                            </h4>

                            <div class="indiv_eval test_course">
                                <h5>Python - Mid Evaluation</h5>
                                <h4>40 / 40</h4>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="option_filters">
        <div class="options_duration" style="width: 25%">

            <a class="duration_button" href="course Python/Course Python Short.html ">Short</a>
            <a class="duration_button" href="course Python/Course Python Medium.html ">Medium</a>
            <a class="duration_button" href="course Python/Course Python Long.html ">Long</a>
        </div>

        <div class="options_duration" style="width: 25% ">
            <a class="duration_button" href="course Python/Course Python Week 1.html">Week 1</a>
            <a class="duration_button" href="course Python/Course Python Week 2.html">Week 2</a>
            <a class="duration_button" href="course Python/Course Python Week 3.html">Week 3</a>
        </div>
    </div>

    <div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
                <div class="table100">
                    <table class="sortable">
                        <thead>
                            <tr class="table100-head">
                                <th class="column1">S.No.</th>
                                <th class="column2">Lecture</th>
                                <th class="column3">Date (DD/MM/YYYY)</th>
                                <th class="column4">Description</th>
                                <th class="column5">Duration (mins)</th>
                                <th class="column6">Link</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="column1">001</td>
                                <td class="column2">Introduction</td>
                                <td class="column3">02/09/2021</td>
                                <td class="column4">This is a mock description for the lecture video, explaining in brief, what the video is about.</td>
                                <td class="column5">20</td>
                                <td class="column6"><a href="Track Progress.php?id=0&table=python&url=https://www.youtube.com/watch?v=hEgO047GxaQ&list=PLsyeobzWxl7poL9JTVyndKe62ieoN-MZ3&index=2">Watch Now</a></td>
                            </tr>
                            <tr>
                                <td class="column1">002</td>
                                <td class="column2">Comments, Variables & Data Types</td>
                                <td class="column3">05/09/2021</td>
                                <td class="column4">This is a mock description for the lecture video, explaining in brief, what the video is about.</td>
                                <td class="column5">15</td>
                                <td class="column6"><a href="Track Progress.php?id=1&table=python&url=https://www.youtube.com/watch?v=TqPzwenhMj0&list=PLsyeobzWxl7poL9JTVyndKe62ieoN-MZ3&index=5">Watch Now</a></td>
                            </tr>
                            <tr>
                                <td class="column1">003</td>
                                <td class="column2">String Formatting & Methods</td>
                                <td class="column3">09/09/2021</td>
                                <td class="column4">This is a mock description for the lecture video, explaining in brief, what the video is about.</td>
                                <td class="column5">28</td>
                                <td class="column6"><a href="Track Progress.php?id=2&table=python&url=https://www.youtube.com/watch?v=Eaz5e6M8tL4&list=PLsyeobzWxl7poL9JTVyndKe62ieoN-MZ3&index=6">Watch Now</a></td>
                            </tr>
                            <tr>
                                <td class="column1">004</td>
                                <td class="column2">Lists</td>
                                <td class="column3">13/09/2021</td>
                                <td class="column4">This is a mock description for the lecture video, explaining in brief, what the video is about.</td>
                                <td class="column5">45</td>
                                <td class="column6"><a href="Track Progress.php?id=3&table=python&url=https://www.youtube.com/watch?v=Eaz5e6M8tL4&list=PLsyeobzWxl7poL9JTVyndKe62ieoN-MZ3&index=6">Watch Now</a></td>
                            </tr>
                            <tr>
                                <td class="column1">005</td>
                                <td class="column2">Tuples & Sets</td>
                                <td class="column3">15/09/2021</td>
                                <td class="column4">This is a mock description for the lecture video, explaining in brief, what the video is about.</td>
                                <td class="column5">33</td>
                                <td class="column6"><a href="Track Progress.php?id=4&table=python&url=https://www.youtube.com/watch?v=Mf7eFtbVxFM&list=PLsyeobzWxl7poL9JTVyndKe62ieoN-MZ3&index=7">Watch Now</a></td>
                            </tr>
                            <tr>
                                <td class="column1">006</td>
                                <td class="column2">Dictionaries</td>
                                <td class="column3">18/09/2021</td>
                                <td class="column4">This is a mock description for the lecture video, explaining in brief, what the video is about.</td>
                                <td class="column5">50</td>
                                <td class="column6"><a href="Track Progress.php?id=5&table=python&url=https://www.youtube.com/watch?v=2IsF7DEtVjg&list=PLsyeobzWxl7poL9JTVyndKe62ieoN-MZ3&index=8">Watch Now</a></td>
                            </tr>
                            <tr>
                                <td class="column1">007</td>
                                <td class="column2">Functions</td>
                                <td class="column3">21/09/2021</td>
                                <td class="column4">This is a mock description for the lecture video, explaining in brief, what the video is about.</td>
                                <td class="column5">55</td>
                                <td class="column6"><a href="Track Progress.php?id=6&table=python&url=https://www.youtube.com/watch?v=BVfCWuca9nw&list=PLsyeobzWxl7poL9JTVyndKe62ieoN-MZ3&index=36">Watch Now</a></td>
                            </tr>
                            <tr>
                                <td class="column1">008</td>
                                <td class="column2">Conditionals</td>
                                <td class="column3">25/09/2021</td>
                                <td class="column4">This is a mock description for the lecture video, explaining in brief, what the video is about.</td>
                                <td class="column5">64</td>
                                <td class="column6"><a href="Track Progress.php?id=7&table=python&url=https://www.youtube.com/watch?v=PqFKRqpHrjw&list=PLsyeobzWxl7poL9JTVyndKe62ieoN-MZ3&index=22">Watch Now</a></td>
                            </tr>
                            <tr>
                                <td class="column1">009</td>
                                <td class="column2">Loops</td>
                                <td class="column3">29/09/2021</td>
                                <td class="column4">This is a mock description for the lecture video, explaining in brief, what the video is about.</td>
                                <td class="column5">112</td>
                                <td class="column6"><a href="Track Progress.php?id=8&table=python&url=https://www.youtube.com/watch?v=HZARImviDxg&list=PLsyeobzWxl7poL9JTVyndKe62ieoN-MZ3&index=23">Watch Now</a></td>
                            </tr>
                            <tr>
                                <td class="column1">010</td>
                                <td class="column2">Modules</td>
                                <td class="column3">02/10/2021</td>
                                <td class="column4">This is a mock description for the lecture video, explaining in brief, what the video is about.</td>
                                <td class="column5">79</td>
                                <td class="column6"><a href="Track Progress.php?id=9&table=python&url=https://www.youtube.com/watch?v=1RuMJ53CKds&list=PLsyeobzWxl7poL9JTVyndKe62ieoN-MZ3&index=49">Watch Now</a></td>
                            </tr>
                            <tr>
                                <td class="column1">011</td>
                                <td class="column2">Classes & Objects</td>
                                <td class="column3">06/10/2021</td>
                                <td class="column4">This is a mock description for the lecture video, explaining in brief, what the video is about.</td>
                                <td class="column5">75</td>
                                <td class="column6"><a href="Track Progress.php?id=10&table=python&url=https://www.youtube.com/watch?v=8O5kX73OkIY&list=PLsyeobzWxl7poL9JTVyndKe62ieoN-MZ3&index=53">Watch Now</a></td>
                            </tr>
                            <tr>
                                <td class="column1">012</td>
                                <td class="column2">Working With Files</td>
                                <td class="column3">10/10/2021</td>
                                <td class="column4">This is a mock description for the lecture video, explaining in brief, what the video is about.</td>
                                <td class="column5">86</td>
                                <td class="column6"><a href="Track Progress.php?id=11&table=python&url=https://www.youtube.com/watch?v=aequTxAvQq4&list=PLsyeobzWxl7poL9JTVyndKe62ieoN-MZ3&index=70">Watch Now</a></td>
                            </tr>
                            <tr>
                                <td class="column1">013</td>
                                <td class="column2">Working With JSON</td>
                                <td class="column3">12/10/2021</td>
                                <td class="column4">This is a mock description for the lecture video, explaining in brief, what the video is about.</td>
                                <td class="column5">91</td>
                                <td class="column6"><a href="Track Progress.php?id=12&table=python&url=https://www.youtube.com/watch?v=WDEyt2VHpj4&list=PLsyeobzWxl7poL9JTVyndKe62ieoN-MZ3&index=77">Watch Now</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <fieldset style="margin:auto; width:50%; padding-left:10%;">
        <div>
            <input type="checkbox" id="end_check" onclick="myFunction()">
            <label for="end_check" style="width: 80%; padding-left:10px; display:inline-block; vertical-align:top;">
            I have finished watching all the videos and wish to end the course. I understand that once I end the course, I will not be able to access the course materials until I enroll for the course again.</label>


<button type="button" onclick="location.href='Course Python.php?click=remove';" class="btn btn-danger" id="cancel" style="display: none;margin-left:20%; margin-top:20px;"><a style="text-decoration:none; color:white;" href="certificates/python.png" download="Fundamentals of Python Course Certificate">Disenroll From The Course</a></button>


            <script>
                function myFunction() {
                    var checkBox = document.getElementById("end_check");
                    var text = document.getElementById("cancel");
                    if (checkBox.checked == true) {
                        text.style.display = "block";
                    } else {
                        text.style.display = "none";
                    }
                }
            </script>

        </div>
    </fieldset>

    <div class="footer-basic" style="margin-top: 30px;">
        <footer>
            <div class="social">
                <a href="#"><i style="color: rgb(107, 253, 107);" class="fa fa-whatsapp fa-fw"></i></a>
                <a href="#"><i style="color: rgb(255, 134, 219);" class="fa fa-instagram fa-fw"></i></a>
                <a href="#"><i style="color: rgb(255, 0, 34);" class="fa fa-google-plus fa-fw"></i></a>
                <a href="#"><i style="color: rgb(110, 110, 255);" class="fa fa-facebook fa-fw"></i></a>
                <a href="#"><i style="color: rgb(251, 255, 0);" class="fa fa-snapchat-ghost fa-fw"></i></a>
            </div>

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