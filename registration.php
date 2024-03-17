<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- link -->
    <script src="./assets/js/search.js"> </script>
    <!-- link -->

    <!-- link for Bootstrap -->
    <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- link for Bootstrap -->

    <!-- backgournd -->
    <style>
        body {
            background-color: #ecf0f1;
        }
    </style>
    <!-- backgournd -->
</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <!-- image -->
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="./assets/img/sport-car.png" height="50">
            </a>
            <!-- image -->

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navigation bars front -->
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./registration.php">Registration</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./reservation.php">Reservation</a>
                    </li>
                </ul>

            </div>
            <!-- Navigation bars buttom-->
        </div>
    </nav>
    <!-- For Text/Typography Front -->
    <div class="container-fluid mb-5">
    </div>
    <p class="h1 mt-2">Registration</p>
    <p class="mt-2">You can Register here</p>
    <div class="card mt-2">

        <form action="./model/save.php/" method="POST">


            <div class="card-header" style="text-align : center;"><-----Register Now !!!-----></div>
            <div class="card-body">

                <!-- Alert --> 
                 <?php
                if (isset($_GET { 'success'})){
                    ?>
                    
                        <div class="alert alert-success">
                            <b>Successfully Registered : </b>Congrats !!!.. Thank You!!!
                        </div>
                        
                        <hr>
                        <?php
                } elseif (isset($_GET { 'invalid'})) {
                    ?>
                        <div class="alert alert-danger">
                            <b>Existed ID </b>. please try another ID ...Thank You!!
                        </div>
                        <hr>
                        <?php
                }
                ?> 
                <!-- Alert -->


                <div class="row">
                    

                    <!-- Fname -->
                    <div class="col-md-4">
                        <label>First Name <b class="text-danger"></b></label>
                        <input name="inp_FName" required type="text" placeholder="Enter Your First Name here..."
                            class="form-control mt-2">
                    </div>
                    <!-- Fname -->

                    <br>

                    <!-- Middle Name -->
                    <div class="col-md-4">
                        <label>Middle Name <b class="text-danger"></b></label>
                        <input name="inp_MName" required type="text" placeholder="Enter your Middle Name here..."
                            class="form-control mt-2">
                    </div>
                    <!-- Middle Name -->

                    <br>

                    <!-- Last Name -->
                    <div class="col-md-4">
                        <label>Last Name <b class="text-danger"></b></label>
                        <input name="inp_LName" required type="text" placeholder="Enter Your Last Name here..."
                            class="form-control mt-2">
                    </div>
                    <!-- Last Name -->

                    <br>

                    <!-- ID -->
                    <div class="col-md-4 ">
                        <label>ID<b class="text-danger"></b></label>
                        <input name="inp_ID" required type="text" placeholder="Input Valid ID here..."
                            class="form-control mt-2 ">
                    </div>
                    <!-- ID -->

                    <br>

                    <!-- Contact# -->
                    <div class="col-md-4">
                        <b class="text-danger">Contact #: </b>
                        <label class="">Personal Number </label>
                        <input name="inp_Contact_Num" required type="text" placeholder="09XXXXXXXXX"
                            class="form-control mt-2">
                    </div>
                    <!-- Contact# -->

                    <br>

                    <!-- Gender -->
                    <div class="col-md-4 ">
                        <label>Gender <b class="text-danger"></b></label>
                        <select name="inp_Gender" required class="form-control mt-2">
                            <option value="" disabled selected>--SELECT GENDER--</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <!-- Gender -->

                    <br>

                     <!-- Address -->
                     <div class="col-md-6">
                        <b class="text-danger">Address:</b>
                        <label class="">Current Location</label>
                        <input name="inp_Address" required type="text" placeholder="Your Address..."
                            class="form-control mt-2">
                    </div>
                    <!--Address-->

                    <br>

                    <!-- Gmail -->
                    <div class="col-md-6">
                        <label>Gmail: <b class="text-danger"></b></label>
                        <input name="inp_Gmail" required type="text" placeholder="Ex.ParkingSystem@gmail.com..."
                            class="form-control mt-2">
                    </div>
                    <!-- Gmail -->

                </div>

                <!-- Modal footer -->
                <div class="card-footer">

                    <button class="btn btn-success">
                        Register Now!!
                    </button>


                </div>

            </div>
    </div>

    <!-- For Text/Typography Buttom-->

</body>
<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<!-- jquery -->

</html>