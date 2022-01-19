<?php

echo '
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="icon" href="assets/tce1logo.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="tabs.css">
        <!-- Font Awesome CDN -->
        <script src="https://kit.fontawesome.com/e31a891432.js" crossorigin="anonymous"></script>

        <!-- Google Fonts -->
        <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
        <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
        <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/fontawesome.min.css" integrity="sha512-r9kUVFtJ0e+8WIL8sjTUlHGbTLwlOClXhVqGgu4sb7ILdkBvM2uI+n/Fz3FN8u3VqJX7l9HLiXqXxkx2mZpkvQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Curriculum | TCE</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
       
</head>

<body>';

  include "header.html";
  include 'nav.html';

echo '
  <br><br>
  <h2 style="text-align: center;">COURSE OUTCOMES</h2><br>
  <div id="boxcover2">
  <form>

      <label for="usr">CO Number</label><br>
      <select class="mdb-select md-form">

        <option>Choose the CO Number</option><br>
        <option value="1">CO1</option>
        <option value="2">CO2</option>
        <option value="3">CO3</option>
        <option value="4">CO4</option>
        <option value="5">CO5</option>
        <option value="6">CO6</option>
        <option value="7">CO7</option>
        <option value="8">CO8</option>
        <option value="9">CO9</option>
        <option value="10">CO10</option>
        <option value="11">CO11</option>
        <option value="12">CO12</option>
       </select><br><br>
        <label for="comment">Course Outcome Statement</label>
        <textarea class="form-control" rows="5" id="comment"></textarea><br>
        
        <div class="form-outline">
        <label for="user">Weightage</label>
        <input type="text" class="form-control" id="user" width="50%"><br>
        <button type="submit" class="btn btn-primary">Save</button>
        <button id="right" type="submit" class="btn btn-danger">Cancel</button><br><br>
        </div>
  </form>
  </div>
<br><br>
<h2 style="text-align: center;">CO MAPPING WITH CDIO CURRICULUM FRAMEWORK </h2><br>
<div id="boxcover3">  
<form>
      <label for="usr">CO Number</label><br>
      <select class="mdb-select md-form">
        
        <option selected>Choose the CO Number</option><br>
        <option value="1">CO1</option>
        <option value="2">CO2</option>
        <option value="3">CO3</option>
        <option value="4">CO4</option>
        <option value="5">CO5</option>
        <option value="6">CO6</option>
        <option value="7">CO7</option>
        <option value="8">CO8</option>
        <option value="9">CO9</option>
        <option value="10">CO10</option>
        <option value="11">CO11</option>
        <option value="12">CO12</option>
       </select><br><br>
       <div class="form-group">
        <label for="comment">TCE Proficiency Scale</label>
        <input type="text" class="form-control" id="user"><br>
        
        <div class="form-group">
            <label for="user">Learning Domain Level</label><br>
            <label for="user">Cognitive</label>
            <select class="form-control" id="sel1" name="sellist1" placeholder="Choose">
                <option>Apply</option>
                <option>Value</option>
                <option>Mechanism</option>
            </select><br>
            <label for="user">Affective</label>
            <select class="form-control" id="sel2" name="sellist3">
                <option>Apply</option>
                <option>Value</option>
                <option>Mechanism</option>
            </select><br>
            <label for="user">Psychomotor</label>
            <select class="form-control" id="sel3" name="sellist3">
                <option>Apply</option>
                <option>Value</option>
                <option>Mechanism</option>
            </select><br>
            <label for="comment">CDIO Curriculum Components </label>
            <input type="text" class="form-control" id="user"><br>
            <button type="submit" class="btn btn-primary">Save</button>
            <button id="right" type="submit" class="btn btn-danger">Cancel</button>
            <br><br><br>
            </div>
            </div>
        </form>
        </div>
  </div>
</body>
</html> ';
?>