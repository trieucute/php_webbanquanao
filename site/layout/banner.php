<head>
    <link rel="stylesheet" href="../../content/css/header.css">
<style>
    .mySlides{
        object-fit: cover;
        
    }
    
</style>
</head>

           <div class="w3-content w3-section" style="max-width:97%; height: 600px; margin:  0 auto; ">
               <img class="mySlides" src="../../content/uploads/slide1.jpg"  style="width:100%; height: 600px">
               <img class="mySlides" src="../../content/uploads/slide2.jpg" style="width:100%; height: 600px">
               <img class="mySlides" src="../../content/uploads/slide4.jpeg" style="width:100%;height: 600px">

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
                   if (myIndex > x.length) {
                       myIndex = 1
                   }
                   x[myIndex - 1].style.display = "block";
                   setTimeout(carousel, 3000); // Change image every 2 seconds
               }
           </script>
