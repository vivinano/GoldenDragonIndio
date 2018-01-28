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
echo"<div class='container-fluid' style='margin-top:10px'>";
echo"<div class='row'>
      <div class= 'col-md-8'>

        <div id='my-slider' class='carousel slide' data-ride='carousel'>
		
			<ol class='carousel-indicators'>
				<li data-target='#my-slider' data-slide-to='0' class='active'></li>
				<li data-target='#my-slider' data-slide-to='1'></li>
				<li data-target='#my-slider' data-slide-to='2'></li>
				<li data-target='#my-slider' data-slide-to='3'></li>
			</ol>
           
            <div class='carousel-inner' roll='listbox'>
                <div class='item active'>
                    <img src='./goldimage/542.jpg'  alt='storesign'>
                    <div class='carousel-caption'>
						<h1></h1>
                    </div>
                </div>
				<div class='item'>
                    <img src='./goldimage/A1-2.png'  alt='food1'> 
                    <div class='carousel-caption'>
						<p></p>
                    </div>
                </div>        
				<div class='item'>
                    <img src='./goldimage/A3-2.png'  alt='food2'> 
                    <div class='carousel-caption'>
						<p></p>
                    </div>
                </div>    
				<div class='item'>
                    <img src='./goldimage/LS16-2.png' alt='food3'> 
                    <div class='carousel-caption'>
						<p></p>
                    </div>
                </div>  	
            </div>
            
   
			<a class='left carousel-control' href='#my-slider' role='button' data-slide='prev'>
				<span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span>
				<span class='sr-only'>Previous</span>
			</a>
			<a class='right carousel-control' href='#my-slider' role='button' data-slide='next'>
				<span class='glyphicon glyphicon-chevron-right' aria-hidden='true'></span>
				<span class='sr-only'>Previous</span>
			</a>                         
        </div>       
     </div>
               
     
       <div class='jumbotron offset-md-1 col-md-3'>
       <h4>Welcome to Golden Dragon in Indio, CA</h4>
       <hr>
       <p style='font-size:12px'> Delicious Chinese Dishes \n Delivery & Takeout Available</p>
      <hr>";
$utcstuff = "select if((Extract(hour from DATE_SUB(UTC_TIME,INTERVAL 8 hour)) >=11
		      and EXTRACT(Hour from DATE_SUB(UTC_TIME,INTERVAL 8 hour)) <= 21)
		       and DAYOFWEEK(DATE_SUB(UTC_TIMESTAMP,INTERVAL 8 HOUR)) != 3,
		       'Open!',
		       'Currently Closed') as timehole";


$timequery = MYSQLI_QUERY($db,$utcstuff);
$times = mysqli_fetch_array($timequery,MYSQLI_ASSOC);
if($times['timehole'] == 'Open!'){
    $opencolor = 'Green';
}
else{
   $opencolor = 'red'; 
}
     echo "<h3 style='color:".$opencolor."'>".$times['timehole']."</h3>
	   Opens 11 AM to 9 PM <br/>
	   Mon, Wed - Sun";
     
      
    echo  " </div>
     </div>";
//main area end
echo"</div>";
 //bottom area start here 
echo "<div class='container'>
       <div class='row'>";

$mysqlcalls = "select * from Menu 
	      where OrderId in 
	     ('LS".rand(1,19)."','A".rand(1,11)."','C".rand(1,13)."','BV".rand(2,3)."') ";
$mysqlq = mysqli_query($db,$mysqlcalls);
while($r = mysqli_fetch_array($mysqlq,MYSQLI_ASSOC)){

//Orange titles above bottom picture row
echo "<div class='col-sm-3'>
       <table>
       <tr><th style='background-color:rgb(255,140,0);border:1px solid white;width:50px'>
       ".$r['OrderName']."";

//Bottom picture row			   
echo "</th></tr>
       <tr><td><img src='".$r['imgpathmenu']."' style='height:200px;width:200px;' 
       class='img-thumbnail'></td>
              
       </table>
       </div>";
};
echo "      </div>
       </div>";
//end body container
echo "</div>";
echo "<footer class='footer' style='margin-top:10px'>
      <div class='container' style='background-color:rgb(128,128,128);width:100%'>
       <div class='row'>
       <div class='col-sm-3'>
       <p style='font-weight:bold'>Phone Number: 760-775-9888<br/>
       Email: fred3008@yahoo.com</p>
       </div>
       
       <div class='col-sm-5'>
       <p style='border-bottom:1px solid black;text-align:center;font-weight:bold';align:bottom>
       Golden Dragon | 81944 US Hwy Ste D | Indio,CA 92201</p>
       </div>
       
       <div class='offset-md-2 col-sm-2'>
       <p style='font-weight:bold'>Find us on: <a href='https://www.facebook.com/indiochinafood/'>
       <img src='./goldimage/482.png'></a></img></p>
       </div>
       
     </div></div></footer>";
echo enddoc();

?>