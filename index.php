<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="./assets/js/search.js"> </script>

    <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>


    <style>
        body{
            background-color: #ecf0f1;
        }
    </style>
        
</head>

<body>
    
        
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <span class="navbar-text">Welcome to Smart Reservation Parking System</span>
        </div>
    </nav>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="./assets/img/sport-car.png" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Link</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="text" placeholder="Search">
                    <button class="btn btn-primary" type="button">Search</button>
                </form>
            </div>
        </div>
    </nav>
<div style="display: none;">


    <strong>Search : </strong>
    <input onkeyup="search(this.value)" type="text" placeholder="Search Guest here">
    <hr>
    <table border="1" style="width= 100%" ;>
        <thead>
            <tr>
                <th width="100">Guest Id</th>
                <th style="text-align: left; padding-left: 10px">ID</th>
            </tr>
        </thead>
        <tbody id="results">
        </div>
        </tbody>

    </table>

</body>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>

</html>