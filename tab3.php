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
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Custom CSS -->
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>';

include 'header.html';

include 'nav.html';

echo '
    <br><br><br><br>
    <div style="margin-left:10%;">
<h2 style="text-align: center;">MAPPING WITH PROGRAMME OUTCOMES AND PROGRAMME SPECIFIC OUTCOMES</h2><br>
</div>
  <form>
    <div id="boxcover4">
      <label for="usr">CO Number</label>
      <select class="mdb-select md-form colorful-select dropdown-primary">
        
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
       </select><br>
     
       <br>
       <label for="PO1">PO1 : </label>
                <input class="" type="radio" name="inlineRadioOptions1" id="inlineRadio1" value="option1">
                <label class="" for="inlineRadio1">S</label>
                <input class="" type="radio" name="inlineRadioOptions2" id="inlineRadio2" value="option2">
                <label class="" for="inlineRadio2">M</label>
                <input class="" type="radio" name="inlineRadioOptions3" id="inlineRadio3" value="option3">
                <label class="" for="inlineRadio3">L</label><br>
                
              <label for="PO2">PO2 : </label>
                <input class="" type="radio" name="inlineRadioOptions4" id="inlineRadio4" value="option4">
                <label class="" for="inlineRadio4">S</label>
                <input class="" type="radio" name="inlineRadioOptions5" id="inlineRadio5" value="option5">
                <label class="" for="inlineRadio5">M</label>
                <input class="" type="radio" name="inlineRadioOptions6" id="inlineRadio6" value="option6">
                <label class="" for="inlineRadio6">L</label><br>
                
              <label for="comment">PO3 : </label>
                <input class="" type="radio" name="inlineRadioOptions7" id="inlineRadio1" value="option7">
                <label class="" for="inlineRadio1">S</label>
                <input class="" type="radio" name="inlineRadioOptions8" id="inlineRadio2" value="option8">
                <label class="" for="inlineRadio2">M</label>
                <input class="" type="radio" name="inlineRadioOptions9" id="inlineRadio3" value="option9">
                <label class="" for="inlineRadio3">L</label><br>
              
              <label for="comment">PO4 : </label>
                <input class="" type="radio" name="inlineRadioOptions10" id="inlineRadio1" value="option1">
                <label class="" for="inlineRadio1">S</label>
                <input class="" type="radio" name="inlineRadioOptions11" id="inlineRadio2" value="option2">
                <label class="" for="inlineRadio2">M</label>
                <input class="" type="radio" name="inlineRadioOptions12" id="inlineRadio3" value="option3">
                <label class="" for="inlineRadio3">L</label><br>
              
              <label for="comment">PO5 : </label>
                <input class="" type="radio" name="inlineRadioOptions13" id="inlineRadio1" value="option1">
                <label class="" for="inlineRadio1">S</label>
                <input class="" type="radio" name="inlineRadioOptions14" id="inlineRadio2" value="option2">
                <label class="" for="inlineRadio2">M</label>
                <input class="" type="radio" name="inlineRadioOptions15" id="inlineRadio3" value="option3">
                <label class="" for="inlineRadio3">L</label><br>
              
              <label for="comment">PO6 : </label>
                <input class="" type="radio" name="inlineRadioOptions16" id="inlineRadio1" value="option1">
                <label class="" for="inlineRadio1">S</label>
                <input class="" type="radio" name="inlineRadioOptions17" id="inlineRadio2" value="option2">
                <label class="" for="inlineRadio2">M</label>
                <input class="" type="radio" name="inlineRadioOptions18" id="inlineRadio3" value="option3">
                <label class="" for="inlineRadio3">L</label><br>
             
              <label for="comment">PO7 : </label>
                <input class="" type="radio" name="inlineRadioOptions19" id="inlineRadio1" value="option1">
                <label class="" for="inlineRadio1">S</label>
                <input class="" type="radio" name="inlineRadioOptions20" id="inlineRadio2" value="option2">
                <label class="" for="inlineRadio2">M</label>
                <input class="" type="radio" name="inlineRadioOptions21" id="inlineRadio3" value="option3">
                <label class="" for="inlineRadio3">L</label><br>
             
              <label for="comment">PO8 : </label>
                <input class="" type="radio" name="inlineRadioOptions22" id="inlineRadio1" value="option1">
                <label class="" for="inlineRadio1">S</label>
                <input class="" type="radio" name="inlineRadioOptions23" id="inlineRadio2" value="option2">
                <label class="" for="inlineRadio2">M</label>
                <input class="" type="radio" name="inlineRadioOptions24" id="inlineRadio3" value="option3">
                <label class="" for="inlineRadio3">L</label><br>
             
              <label for="comment">PO9 : </label>
                <input class="" type="radio" name="inlineRadioOptions25" id="inlineRadio1" value="option1">
                <label class="" for="inlineRadio1">S</label>
                <input class="" type="radio" name="inlineRadioOptions26" id="inlineRadio2" value="option2">
                <label class="" for="inlineRadio2">M</label>
                <input class="" type="radio" name="inlineRadioOptions27" id="inlineRadio3" value="option3">
                <label class="" for="inlineRadio3">L</label><br>
             
              <label for="comment">PO10 : </label>
                <input class="" type="radio" name="inlineRadioOptions28" id="inlineRadio1" value="option1">
                <label class="" for="inlineRadio1">S</label>
                <input class="" type="radio" name="inlineRadioOptions29" id="inlineRadio2" value="option2">
                <label class="" for="inlineRadio2">M</label>
                <input class="" type="radio" name="inlineRadioOptions30" id="inlineRadio3" value="option3">
                <label class="" for="inlineRadio3">L</label><br>
           
              <label for="comment">PO11 : </label>
                <input class="" type="radio" name="inlineRadioOptions31" id="inlineRadio1" value="option1">
                <label class="" for="inlineRadio1">S</label>
                <input class="" type="radio" name="inlineRadioOptions32" id="inlineRadio2" value="option2">
                <label class="" for="inlineRadio2">M</label>
                <input class="" type="radio" name="inlineRadioOptions33" id="inlineRadio3" value="option3">
                <label class="" for="inlineRadio3">L</label><br>
              
              <label for="comment">PO12 : </label>
                <input class="" type="radio" name="inlineRadioOptions34" id="inlineRadio1" value="option1">
                <label class="" for="inlineRadio1">S</label>
                <input class="" type="radio" name="inlineRadioOptions35" id="inlineRadio2" value="option2">
                <label class="" for="inlineRadio2">M</label>
                <input class="" type="radio" name="inlineRadioOptions36" id="inlineRadio3" value="option3">
                <label class="" for="inlineRadio3">L</label><br>
              </div>   
       
          <div id="boxcover6">
            <label for="comment">PSO1 : </label>
                <input class="" type="radio" name="inlineRadioOptions37" id="inlineRadio1" value="option1">
                <label class="" for="inlineRadio1">S</label>
                <input class="" type="radio" name="inlineRadioOptions38" id="inlineRadio2" value="option2">
                <label class="" for="inlineRadio2">M</label>
                <input class="" type="radio" name="inlineRadioOptions39" id="inlineRadio3" value="option3">
                <label class="" for="inlineRadio3">L</label><br>
                <label for="comment">PSO2 : </label>
                <input class="" type="radio" name="inlineRadioOptions40" id="inlineRadio1" value="option1">
                <label class="" for="inlineRadio1">S</label>
                <input class="" type="radio" name="inlineRadioOptions41" id="inlineRadio2" value="option2">
                <label class="" for="inlineRadio2">M</label>
                <input class="" type="radio" name="inlineRadioOptions42" id="inlineRadio3" value="option3">
                <label class="" for="inlineRadio3">L</label><br>
                <label for="comment">PSO3 : </label>
                <input class="" type="radio" name="inlineRadioOptions43" id="inlineRadio1" value="option1">
                <label class="" for="inlineRadio1">S</label>
                <input class="" type="radio" name="inlineRadioOptions44" id="inlineRadio2" value="option2">
                <label class="" for="inlineRadio2">M</label>
                <input class="" type="radio" name="inlineRadioOptions45" id="inlineRadio3" value="option3">
                <label class="" for="inlineRadio3">L</label><br>
              <br>
            <button type="submit" class="btn btn-primary">Save</button>
            <button id="right" type="submit" class="btn btn-danger">Cancel</button>
            <br><br>
            </div>
        </form>
        </div>
        </div>
</body>
</html>';
?>