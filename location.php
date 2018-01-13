<?php
include 'mysql_connect.php';
include 'functions.php';

begindoc('Golden Dragon | Order Online | Indio, CA 92201 | Chinese ');

//main body
echo "<div class='container'>";

echo "<div class='container'>";
echo "<div class= 'row'>
       <div class = 'text-center col-md-3' 
       style='color:white;background-color:rbg(64,64,64)'>
       <img 
       src='./goldimage/416.png' 
       class='img-thumbnail' 
       style='background-color:rgb(64,64,64);border-color:rgb(64,64,64)'>
       The Taste of China
       </div>
       
       <div class = 'col-md-8 offset-md-1'>
             <div class='containter' style='background-color:rgb(64,64,64)'>
               <div class='row'>
                     <div class ='col-md-2 text-center' style='padding:10px'>
                       <a href='index.php' 
                       style='color:rgb(255,140,0);font-weight:bold'>
                          Home</a>
                      </div>
                      <div class='col-md-2 text-center' style='padding:10px'>
                      <a href='news.php'
                       style='color:rgb(255,140,0);font-weight:bold'>
                       News & Events</a>
                      </div>
                   
                      <div class='col-md-2 text-center' style='padding:10px'>
                      <a href='./menu.php?id=1'
                      style='color:rgb(255,140,0);font-weight:bold'>
                       Menu </a>
                      </div>
                      
                      <div class='col-md-2 text-center' style='padding:10px'>
                      <a href='order.php' 
                      style='color:rgb(255,140,0);font-weight:bold;'>
       
                      Online Order </a>
                      </div>
                      
                      <div class='col-md-2 text-center' style='padding:10px'>
                      <a href='location.php' 
                      style='color:rgb(255,140,0);font-weight:bold;'>
       
                      Location </a>
                      </div>
       
                     
                      <div class='col-md-2 text-center' style='padding:10px'>
                      <a href='contact.php' 
                     style='color:rgb(255,140,0);font-weight:bold;'>
		     Contact Us </a>
                      </div>
               </div>
             </div>
       </div>
       
       </div>";

// Nav area closer
echo "</div>";

//main area start
echo "<div class='container'>";
echo"<div class='row'><div class='col-md-3'>
      <table style='width:100%;height:400px;color:orange;margin-bottom:20px'>
      <tr><th style='color:white'>81944 Us Hwy 111, Ste D <br />
      Indio, CA 92201</th></tr>
      <tr><td>Phone: 760-775-9888 <br />
      Email: fred30008@yahoo.com</td></tr>
      <tr><th style='color:green;height:10px'>Currently No Delivery!</th> </tr>
      
      <tr><th>Store Hours: <br />
      Mon-Sun 11:00AM - 09:00PM </th></tr>
      </table>
      
      </div>
      <div class='col-md-9'>
     <a href='https://www.google.com/maps/@33.7143668,-116.2353973,20z?hl=en'> 
   <img src='./goldimage/map.PNG' class='img-fluid' alt='map' style='width:100%;height:400px;margin-top:10px;margin-bottom:20px' />
    </a>
      
      </div>";
echo "</div>";
//main area end
echo"</div>";

//end body container
echo "</div>";
echo "<footer class='footer' style='margin-top:10px'>
      <div class='container' style='background-color:rgb(128,128,128);width:100%'>
       <div class='row'>
       <div class='col-sm-3'>
       <p>Phone Number: 760-775-9888<br/>
       Email: fred3008@yahoo.com</p>
       </div>
       
       <div class='col-sm-5'>
       <p style='border-bottom:1px solid black;text-align:center;'>
       Golden Dragon | 81944 US Hwy Ste D | Indio,CA 92201</p>
       </div>
       
       <div class='offset-md-2 col-sm-2'>
       <p>Find us on: <a href='https://www.facebook.com/indiochinafood/'>
       <img src='./goldimage/482.png'></a></img></p>
       </div>
       
     </div></div></footer>";
echo enddoc();

?>