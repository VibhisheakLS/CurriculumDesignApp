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

include 'header.html';

include 'nav.html';

echo '

<div class="container">
<br><br>        <div style="margin-left:10%;">
            <h2 style="text-align: center;">Assessment Pattern: Cognitive Domain </h2><br>
            </div>
            <div id="boxcover4">  
            <form>
                  <label for="usr">Cognitive Domain</label>
                  <select class="mdb-select md-form">
                    
                    <option selected>Choose the Domain</option>
                    <option value="1">Continuous Assessment Test 1</option>
                    <option value="2">Continuous Assessment Test 2</option>
                    <option value="3">Continuous Assessment Test 3</option>
                    <option value="4">Assignment 1</option>
                    <option value="5">Assignment 2</option>
                    <option value="6">Assignment 3</option>
                    <option value="7">Terminal Examination</option>
                   </select> </label><br>
                   <label for="user">Remember</label>
                    <input type="text" class="form-control" id="user" width="50%"><br>
                    <label for="user">Understand</label>
                    <input type="text" class="form-control" id="user" width="50%"><br>
                    <label for="user">Apply</label>
                    <input type="text" class="form-control" id="user" width="50%"><br>
                    <label for="user">Analyze</label>
                    <input type="text" class="form-control" id="user" width="50%"><br>
                    <label for="user">Evaluate</label>
                    <input type="text" class="form-control" id="user" width="50%"><br>
                    <label for="user">Create</label>
                    <input type="text" class="form-control" id="user" width="50%"><br>
                    <button type="submit" class="btn btn-primary">Save</button>
            <button id="right" type="submit" class="btn btn-danger">Cancel</button>
                                </div><br>
        <div style="margin-left:10%;">
            <h2 style="text-align: center;">Assessment Pattern: Psychomotor</h2><br>
            <h3 style="text-align: center;">Psychomotor skill</h3><br>
        </div>

  <div id="boxcover2">
  <form>
    <label for="user">Perception</label>
    <input type="text" class="form-control" id="user" width="50%"><br>
    <label for="user">Set</label>
    <input type="text" class="form-control" id="user" width="50%"><br>
    <label for="user">Guided Response</label>
    <input type="text" class="form-control" id="user" width="50%"><br>
    <label for="user">Mechanism</label>
    <input type="text" class="form-control" id="user" width="50%"><br>
    <label for="user">Complex Overt Responses</label>
    <input type="text" class="form-control" id="user" width="50%"><br>
    <label for="user">Adaptation</label>
    <input type="text" class="form-control" id="user" width="50%"><br>
    <label for="user">Origination</label>
    <input type="text" class="form-control" id="user" width="50%"><br>
    <button type="submit" class="btn btn-primary">Save</button>
            <button id="right" type="submit" class="btn btn-danger">Cancel</button>
    </form>
  </div>
  
  </div>
    </body>
</html>';
?>