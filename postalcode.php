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
                        <a class="nav-link" href="./index.php">Home</a>
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
    <p class="h1 mt-2">Postal Code Registration</p>
    <p class="mt-2">You can add record for clients here.</p>
    <div class="card mt-2">

        <form action="./model/save-postal-code.php" method="POST">


            <div class="card-header" style="text-align : center;">Register Form</div>
            <div class="card-body">

                <!-- Alert --> 
                 <?php
                if (isset($_GET { 'success'})){
                    ?>
                    
                        <div class="alert alert-success">
                            <b>New Postal Code Added : </b>Congrats !!!.. Thank You!!!
                        </div>
                        
                        <hr>
                        <?php
                } elseif (isset($_GET { 'invalid'})) {
                    ?>
                        <div class="alert alert-danger">
                            <b>Existed Postal Code </b>. please try another Postal Code ...Thank You!!
                        </div>
                        <hr>
                        <?php
                }
                ?> 
                <!-- Alert -->

                    <?php
                include "./config/database.php";

                ?>
                    <!-- Address -->
                    <div class="row mt-3">
                    <div class="col-md-12">
                    <br>
                    </div>
                    <div class="col-md-3">
                        <label>Region :<b class="text-danger">*</b></label>
                        <select name="inp_region" id="inp_region" onchange="display_province(this.value)" required class="form-control mt-2">
                        <option value="" disabled selected >--SELECT REGION--</option>
                    <?php
                     $sql = "SELECT * FROM ph_region WHERE regCode='10'";
                     $result = $conn->query($sql);

                     if ($result->num_rows > 0) {
                 // output data of each row
                     while($row = $result->fetch_assoc()) {
                    ?>
                    <option value="<?= $row["regCode"] ?>"><?= $row ["regDesc"] ?></option>
                    <?php
                  }
                     } else {
                     echo "0 results";
                     }
                     $conn->close();
                     ?>   
                    </select>

                    </div>
                    <div class="col-md-3">
                        <label>Province : <b class="text-danger">*</b></label>
                        <select name="inp_province" id="inp_province" onchange="display_citymun(this.value)" required class="form-control mt-2">
                        <option value="" disabled selected >--SELECT PROVINCE--</option>
                    </select>

                    </div>
                    <div class="col-md-3">
                        <label>Municipality : <b class="text-danger">*</b></label>
                        <select name="inp_citymun" id="inp_citymun" onchange="display_brgy(this.value)" required class="form-control mt-2">
                        <option value="" disabled selected >--SELECT MUNICIPALITY--</option>
                    </select>

                    </div>
                    <div class="col-md-3">
                        <label>Postal Code : <b class="text-danger">*</b></label>
                        <input type="number" name="inp_postalcode" class="form-control mt-2" placeholder="Postal Code here..">
                    </div>
                </div>

                    <!-- Address -->

                </div>

                <!-- Modal footer -->
                <div class="card-footer">

                    <button class="btn btn-success">
                       Add Postal Code
                    </button>


                </div>

            </div>
    </div>

    <!-- For Text/Typography Buttom-->

</body>

<script>
    function display_province(regCode){

    $.ajax({

    url: './model/address.php', 
    type: 'POST', 
    data: { 'type' : 'region', 'past_Code' : regCode }, 
    success: function(response){
        $('#inp_province').html(response); 
    }
    });
    }

    function display_citymun(provCode){

    $.ajax({

    url: './model/address.php', 
    type: 'POST', 
    data: { 'type' : 'province', 'past_Code' : provCode }, 
    success: function(response){
        $('#inp_citymun').html(response); 
    }
    });
    }

    function display_brgy(citymunCode){

$.ajax({

url: './model/address.php', 
type: 'POST', 
data: { 'type' : 'citymun', 'past_Code' : citymunCode }, 
success: function(response){
    $('#inp_brgy').html(response); 
}
});
}

</script>


<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<!-- jquery -->

</html>