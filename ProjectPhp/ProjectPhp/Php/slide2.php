<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-content w3-section" style="max-width:500px">
  <p>The w3-animate-fading class animates an element in and out (takes about 10 seconds).</p>

  <img class="mySlides w3-animate-fading" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhM_d4-AnpyqPT4UgaKRWpHEfeqRWYCeGyO98oR4dOswzGvK8U&s" style="width:100%">
  <img class="mySlides w3-animate-fading" src="https://occ-0-990-987.1.nflxso.net/art/46ebc/b551f3f5fd0a21f80364bb183c1ec9010fb46ebc.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="https://i.ytimg.com/vi/vP_7GzdmBKE/hqdefault.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="https://i.ytimg.com/vi/nS80l9x4zR0/hqdefault.jpg" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 9000);    
}
</script>

</body>
</html>
