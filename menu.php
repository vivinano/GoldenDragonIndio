
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
                      <a href='menu.php?id=1'
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
echo"<div class='container'> 
      <table style='width:100%;color:blue;margin-bottom:10px'><tr>
      <th><a href='./menu.php?id=1'>| Appetizer |</a></th>
      <th><a href='./menu.php?id=2'>| Lunch Specials |</a></th>
      <th><a href='./menu.php?id=3'>| House Specials |</a></th>
      <th><a href='./menu.php?id=4'>| Seafood |</a></th>
      <th><a href='./menu.php?id=5'>| Beef,Chicken,Pork |</a></th>
      <th><a href='./menu.php?id=6'>| Vegetables |</a></th>
      <th><a href='./menu.php?id=7'>| Lo-Mein |</a></th>
      <th><a href='./menu.php?id=8'>| Fried Rice |</a></th>
      <th><a href='./menu.php?id=9'>| Chop Suey |</a></th>
      <th><a href='./menu.php?id=10'>| Egg Foo Young |</a></th>
      
      </tr></table>
      </div>";

echo"<div class='container'>
      <div class='row'>";
//if get put here
/*if(isset($_GET['id'] != true)){
    redirect('./menu.php?id=1');
}*/ 
//comment above to allow standard menu

if(isset($_GET['id'])){
    if($_GET['id'] == 1){
	$wherevar = "'A%'";	
    }
    elseif($_GET['id'] == 2){
	$wherevar = "'LS%'";
    }
    elseif($_GET['id'] == 3){
	$wherevar = "'H%'";
    }
    elseif($_GET['id'] == 4){
	$wherevar = "'S%' and OrderId not like 'SP%'";
    }
    elseif($_GET['id'] == 5){
	$wherevar = "'P%' or (OrderId like 'C%' and OrderId not like 'CS%') or 
		      (OrderId like 'B%' and OrderId not like 'BV%')";
    }
    elseif($_GET['id'] == 6){
	$wherevar = "'V%'";
    }
    elseif($_GET['id'] == 7){
	$wherevar = "'N%'";
    }
    elseif($_GET['id'] == 8){
	$wherevar = "'F%'";
    }
    elseif($_GET['id'] == 9){
	$wherevar = "'CS%'";
    }
    elseif($_GET['id'] == 10){
	$wherevar = "'E%'";
    }
	  
	   
    $limitedSQL = "select OrderId,
		    Ordername,
		    LunchOnly,
		    Spicy,
		    Amount,
		    Price
		    from Menu where OrderId like ".$wherevar."";
    $limitedQue = MYSQLI_QUERY($db,$limitedSQL);
  
   
    while($l = MYSQLI_FETCH_ARRAY($limitedQue,MYSQLI_ASSOC)){
	
	
          $imagefile = './goldimage/'.$l['OrderId'].'.jpg';
	echo $imagefile;
	 //$imagefile = './goldimage/411.png';
	If(file_exists($imagefile) == true){
	    $imagepath2 = $imagefile;
	}
	
	else{
	    $imagepath2 = './goldimage/411.png';
	}
      
	echo "<div class='col-md-6'>
	       <table style='width:100%;margin-bottom:5px'>
	       <tr>
	       <th rowspan='3'>
	       <img src='".$imagepath2."' class='img-thumbnail' 
	       style='display:block;width:100px;height:100px'/>
	       </th>
	       <th style='color:white;width:73%'>".$l['Ordername']."</th>
	       </tr>
	       <tr>
		  <th style='color:red'>".$l['Price']."
		   </th>
	       </tr>
	       <tr>
 	       <td style='color:red'>---</td>
	       </tr>
	       
	       </table>
	       </div>"; 
       
	
    }
	   
}
else{
//else here


   $selectitems = "select OrderId,
                          Ordername,
                          LunchOnly,
                          Spicy,
		          Amount,
		          Price 
		          from Menu";
   $itemque = MYSQLI_QUERY($db,$selectitems);

while($i = MYSQLI_FETCH_ARRAY($itemque,MYSQLI_ASSOC)){
    $imagefileall = './goldimage/' . $i['OrderId'] . '.jpg';
    
    if(file_exists($imagefileall)){
	$imgpath = $imagefileall;
    }
    else{
	$imgpath = './goldimage/411.png';
    }
 
echo"<div class='col-md-6'>
      <table style='width:100%'>
      <tr><th rowspan='3'>
      <img src=".$imgpath." class='img-thumbnail' style='width:100px;height:100px'/>
      </th>
      <th>".$i['Ordername']."</th>
      </tr>
      <tr>
      <th>".$i['Price']."</th>
      </tr>
      <tr>
      <th>Description</th>
      </tr>
      </table>
      </div>";
    

 }
}
//end else here
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