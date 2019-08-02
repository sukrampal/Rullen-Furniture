<!DOCTYPE html>
<html>
<title>Rullen-Furniture</title>
<head>
<link rel="stylesheet" href="resources\sass\style.css">
</head>
<body>
<div class="topnav" id="myTopnav">

  <a href="#home" class="active">Home</a>


  <div class="dropdown">
    <button class="dropbtn">Product
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Antiques and Colectibles</a>
      <a href="#">Antique doors and gates</a>
      <a href="#">Rugs</a>
        <a href="#">Chnadeliers</a>
          <a href="#">Bedroom</a>
        <a href="#">Living room</a>
          <a href="#">Dinning room</a>
            <a href="#">Mirrors</a></b>
              <a href="#">Others</a>
    </div>
  </div>
    <a href="#contact">Contact Us</a>
  <a href="#about">About</a>
  <div class="user">
      <a href="#about">login/Register</a>

  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>


</html>
