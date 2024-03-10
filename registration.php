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
                        <a class="nav-link" href="./index.php">Dashboard</a>
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
        <p class="h1 mt-2">Registration</p>
        <p class="mt-2">You can Register here</p>
        <div class="card mt-2">
            <div class="card-header" style="text-align : center;"><-----Register Now !!!-----></div>
            <div class="card-body">

            <form action="">
                <div class="row">
                    <!-- ID -->
                        <div class="col-md-2">
                            <label>ID : <b class="text-danger"></b>Any type of ID</label>
                            <input type="" placeholder="Enter Any ID..." class="form-control mt-2">
                        </div>
                        <!-- ID -->
                        <br>
                        <!-- Fname -->
                        <div class="col-md-2">
                            <label>First Name : <b class="text-danger"></b></label>
                            <input type="" placeholder="Enter first name here..." class="form-control mt-2">
                        </div>
                        <!-- Fname -->
                        <br>
                        <!-- Lname -->
                        <div class="col-md-2">
                            <label>Last Name : <b class="text-danger"></b></label>
                            <input type="" placeholder="Enter Last name here..." class="form-control mt-2">
                        </div>
                        <!-- Lname -->
                        <br>
                        <!-- Mname -->
                        <div class="col-md-2">
                            <label>Middle Name : <b class="text-danger"></b></label>
                            <input type="" placeholder="Enter Middle name here..." class="form-control mt-2">
                        </div>
                        <!-- Mname -->
                        <br>
                        <!-- email -->
                        <div class="col-md-8">
                            <label>Gmail: <b class="text-danger"></b></label>
                            <input type="" placeholder="Enter Gmail here..." class="form-control mt-2">
                        </div>
                        <!-- email -->
                        <br>
                        <!-- Address -->
                        <div class="col-md-8">
                            <label>Address : <b class="text-danger"></b></label>
                            <input type="" placeholder="Enter Address here..." class="form-control mt-2">
                        </div>
                        <!-- Address -->
                        <br>
                        <!-- Contact# -->
                        <div class="col-md-6">
                            <label>Contact # : <b class="text-danger"></b></label>
                            <input type="" placeholder="Enter Contact Number here..." class="form-control mt-2">
                        </div>
                        <!-- Contact# -->
                        <br>
                        <!-- Gender -->
                        <div class="col-md-2">
                            <label>Gender : <b class="text-danger"></b></label>
                            <select name="" id="" class="for-control mt-2">
                            <option value="" disabled selected>--SELECT GENDER--</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            </select>
                            
                        </div>
                        <!-- Gender -->
                </div>
            </form>

                <!-- Modal footer -->
                <div class="card-footer">
                

                <!-- For Text/Typography Buttom-->

</body>
<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<!-- jquery -->

</html>