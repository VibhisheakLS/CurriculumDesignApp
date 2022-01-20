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
    <body>
';

include 'header.html';

include 'nav.html';
echo '
<br><br>
<div class="container">
<div style="margin-left:10%;">
<h2 style="text-align: center;">Course Contents and Lecture Schedule</h2><br>
</div>
  <div id="boxcover9">
  <form>

      <label for="usr">Module No.</label><br>
      <select class="mdb-select md-form">

        <option>Choose the Module Number</option><br>
        <option value="1">1</option>
        <option value="2">1.1</option>
        <option value="3">1.2</option>
        <option value="4">1.3</option>
        <option value="5">2</option>
        <option value="6">2.1</option>
        <option value="7">2.1.1</option>
        <option value="8">2.1.2</option>
        <option value="9">2.1.3</option>
        <option value="10">2.1.4</option>
        <option value="11">2.1.5</option>
        <option value="12">2.2</option>
        <option value="13">2.2.1</option>
        <option value="14">2.2.2</option>
        <option value="15">2.2.3</option>
        <option value="16">2.2.4</option>
        <option value="17">2.3</option>
        <option value="18">2.3.1</option>
        <option value="19">2.3.2</option>
        <option value="20">2.3.3</option>
        <option value="21">2.4</option>
        <option value="22">2.4.1</option>
        <option value="23">2.4.2</option>
        <option value="24">2.5</option>
        <option value="25">2.5.1</option>
        <option value="26">2.5.2</option>
        <option value="27">3</option>
        <option value="28">3.1</option>
        <option value="29">3.2</option>
        <option value="30">3.3</option>
        <option value="30">3.4</option>
        <option value="30">3.5</option>
        <option value="30">3.6</option>
        <option value="30">3.7</option>
        <option value="30">3.8</option>
        <option value="30">3.9</option>
        <option value="30">3.10</option>
        <option value="30">3.11</option>
        <option value="30">3.12</option>
        <option value="30">4.1</option>
        <option value="30">4.2</option>
        <option value="30">4.2.1</option>
        <option value="30">4.2.2</option>
        <option value="30">4.3</option>
        <option value="30">5</option>
        <option value="30">5.1</option>
        <option value="30">5.2</option>
        <option value="30">6</option>
        <option value="30">6.1</option>
        <option value="30">6.2</option>
        <option value="30">6.3</option>
        <option value="30">7</option>
        <option value="30">7.1</option>
        <option value="30">7.1.1</option>
        <option value="30">7.1.2</option>
        <option value="30">7.1.3</option>
        <option value="30">7.2</option>
        <option value="30">7.2.1</option>
        <option value="30">7.2.1.1</option>
        <option value="30">7.2.1.2</option>
        <option value="30">7.2.1.3</option>
        <option value="30">7.2.1.4</option>
        <option value="30">7.2.1.5</option>
        <option value="30">7.2.1.6</option>
        <option value="30">7.2.1.7</option>
        <option value="30">7.2.2</option>
     </select><br><br>
        <label for="comment">Topic</label>
        <textarea class="form-control" rows="5" id="comment"></textarea><br>
        <label for="usr">No. of Hours</label><br>
        <select class="mdb-select md-form">

            <option>Choose the no. of hours</option><br>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
           
           </select><br><br>
        <div class="form-outline">
        <label for="user">Course Outcomes</label>
        <input type="text" class="form-control" id="user" width="50%"><br>
        <button type="submit" class="btn btn-primary">Save</button>
        <button id="right" type="submit" class="btn btn-danger">Cancel</button><br><br>
        </div>
  </form>
  </div>
  </div>
  </body>
  </html>'
?>