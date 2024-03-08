<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="./assets/js/search.js"> </script>
</head>

<body>
<strong>Search : </strong>
<input onkeyup="search(this.value)" type="text" placeholder="Search Guest here">
<hr>
<table border="1" style="width= 100%";>
    <thead>
    <tr>
        <th width= "100">Guest Id</th>
        <th style= "text-align: left; padding-left: 10px">ID</th>
    </tr>
    </thead> 
 <tbody id="results">

 </tbody>

</table>
</body>
</html>


