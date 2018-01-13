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
if(isset($_GET['id'])){
    if(is_numeric($_GET['id'])){
    $linkid = $_GET['id'];
    }
}
else{
    $linkid = 1;
}
if((isset($_GET['id']) and $_GET['id'] < 2 )){
    redirect('./news.php');
}

if(isset($_GET['id'])){
echo "<div class='row'>";
    
echo "<div class='col-md-12' style='margin-top:50px'>";
    $selectionall2 = "select NewID,NewType,NewTitle,NewBody from News Limit 4";
    $queryness2 = MYSQLI_QUERY($db,$selectionall2);  
    
while($p2 = MYSQLI_FETCH_ARRAY($queryness2,MYSQLI_ASSOC)){
echo "<table style='color:white;border:1px solid black;margin-bottom:10px'>
       <tr>
       <td rowspan='2' style='padding:10px'>
       
       <img src='./goldimage/newsevent.png' 
       
       class='img-fluid' style='width:200px;height:200px' /></td>
       <th style='text-align:center;width:100%;height:50px;border:1px solid black'>
                  ".$p2['NewTitle']." 
       </th>
       </tr><tr>
       <td style='vertical-align:top;text-align:left;border:1px solid black'>
               ".$p2['NewBody']."
       </td>
       </tr>
       
       </table>";
    
    }
echo" </div>";
   
//end row end
echo "</div>";
echo "<div><table style='width:100%;border:1px solid black'> 
       <tr>
       <td style='text-align:right;width:33% '><a href='news.php?id=".($linkid - 1)."'>Prev</a></td>
       <td style='text-align:center;width:33%'>#</td>
       <td style='text-align:left;width:33%'><a href='news.php?id=".($linkid + 1)."'>Next</a></td>
       </tr>
       </table></div>"; 
}
else{
echo "<div class='row'>";
/*echo "<div class='col-md-3' style='margin-top:50px;border:1px solid black'>
       <table style='height:500px'>
        <tr>
         <th style='padding:10px;color:red'>News</th>
       </tr>
       <tr>
          <th style='padding:10px;color:red'>Promotions</th>
       </tr>
       <tr>
           <th style='padding:10px;color:red'>Daily Special !!!</th>
       </tr>
       <tr>
          <th style='padding:10px;color:red'>Events Happening</th>
       </tr>
       
       </table></div>
       ";
*/
echo "<div class='col-md-12' style='margin-top:50px'>";
    $selectionall = "select NewID,NewType,NewTitle,NewBody from News Limit 4";
    $queryness = MYSQLI_QUERY($db,$selectionall);  
    
while($p = MYSQLI_FETCH_ARRAY($queryness,MYSQLI_ASSOC)){
echo "<table style='color:white;border:1px solid black;margin-bottom:10px'>
       <tr>
       <td rowspan='2' style='padding:10px'>
       
       <img src='./goldimage/newsevent.png' 
       
       class='img-fluid' style='width:200px;height:200px' /></td>
       <th style='text-align:center;width:100%;height:50px;border:1px solid black'>
                  ".$p['NewTitle']." 
       </th>
       </tr><tr>
       <td style='vertical-align:top;text-align:left;border:1px solid black'>
               ".$p['NewBody']."
       </td>
       </tr>
       
       </table>";
    
    }
echo" </div>";
   
//end row end
echo "</div>";
echo "<div><table style='width:100%;border:1px solid black'> 
       <tr>
       <td style='text-align:right;width:33% '><a href='news.php?id=".($linkid - 1)."'>Prev</a></td>
       <td style='text-align:center;width:33%'>#</td>
       <td style='text-align:left;width:33%'><a href='news.php?id=".($linkid + 1)."'>Next</a></td>
       </tr>
       </table></div>";    
}
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