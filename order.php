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
echo "<div class='container'>
       <div class='row'>
       <div class='col-sm-12'>";
echo "<table style='width:100%;margin-top:100px;margin-bottom:30%'>
       <tr><th style='text-align:center;font-size:20px;color:red'>Order Functionality Currently not available</th></tr>
       <tr><td style='text-align:center;font-size:10px;color:white'>Future Update will allow Orders to placed
       for delivery or pick up</td></tr> 
       </table>
       ";

echo"</div></div></div>";
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