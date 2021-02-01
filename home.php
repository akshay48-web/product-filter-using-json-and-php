
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="header">
	<h1>prospareto.com</h1>
</div>
<div class="nav">
	<a href="http://localhost/filter/home.php">Home</a>
	<a href="#">About</a>
	<a href="#">Contact</a>
	<a href="#">Blogs</a>
</div>
<div class="section">
	<div class="filter">
		<h1>filter</h1>

<div class="dropdown">  
<button class="dropbtn">Vehicals</button>  
<div class="dropdown-content">  

<a href="http://localhost/filter/cars.php"> Cars </a>  
<a href="http://localhost/filter/bike.php"> Bikes </a> 
</div>
</div>
<div class="cust">
<p>Customers rating</p>

<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
<label for="vehicle1">4* & above</label><br>
<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
<label for="vehicle2">3* & above</label><br>
<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
<label for="vehicle3">2* & above</label><br> 
<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
<label for="vehicle3">1* & above</label><br> 
</div>

<div class="price1">
<p>Price</p>



<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
<label for="vehicle1">0-10,000</label><br>
<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
<label for="vehicle2">10,000-20,000</label><br>
<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
<label for="vehicle3">20,000-50,000</label><br> 
<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
<label for="vehicle3">50,000-100000</label><br> 
</div>

<div class="color">
<p>Colors</p>
<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
<label for="vehicle1">Red</label><br>
<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
<label for="vehicle2">Blue</label><br>
<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
<label for="vehicle3">Orange</label><br> 
<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
<label for="vehicle3">Others</label><br> 
</div>


<div class="comesoon">
	<p>Comming soon</p>
<a href="#">New BMW relase Soon...</a>

</div>

</div>  
</div>
<div class="products">
<?php
$json = '[
{
	"Vehical":"Bikes1",
    "price":300000,
    "name":"Duke",
    "text":"250 Duke User Reviews · 5.0 nice bike very sweet then i am interested · 4.2 Super look and super perfect and super performance and super coler and super riding ...",
    "colors":"Red"
 },
{
	"Vehical":"Bikes2",
	"price":500000,
	"name":"Yamaha",
	"text":"SELECTION OF YAMAHA QUAD, KIDS & FARM YAMAHA QUADS, KODIAK 450, KODIAD 700EPS, GRIZZLY 350, FINANCE AVAILABLE ON ...",
	"colors":"White"
},
{
	"Vehical":"Cars1",
	"price":1000000,
	"name":"Bmw",
	"text":". A wholly owned subsidiary of German based company BMW, its motorcycle division called BMW Motorrad ...","colors":"Yellow"
},
{
	"Vehical":"Cars2",
	"price":3000000,
	"name":"Honda-city",
	"text":"Being sleek low-slung and Japanese the Honda City was quite a hit among car enthusiasts. Its currently in its sixth-generation form after these twenty years of ...",
	"colors":"Black"
}
]';
?>
   <div class="cars1">
<?php
$array = json_decode($json,true);?>
<?php
foreach ($array as list("Vehical"=>$Vehical,"price"=>$price,"name"=>$name,"text"=>$text,"colors"=>$colors)){?>

	<?php if($Vehical == "Cars1"){?>
	<h1><?php echo $Vehical ."</br>";?></h1>
 <?php if($name == "Bmw"){?>
  <h1> <?php echo $name."</br>";?></h1>
    <?php if($price == 1000000){?>
     <p class="price"> Price :-<?php echo $price; ?></p>
   <?php if($colors == "Yellow"){?>
   	<p class="colors">Colors => <?php echo $colors;?> </p>
<p> <?php echo $text."</br>";?></p>
<p><button>Add to Cart</button></p>
   <?php } ?>
   <?php } ?>
  <?php }?>
  <?php }?>
<?php } ?>
</div>

  <div class="cars2">
<?php
foreach ($array as list("Vehical"=>$Vehical,"price"=>$price,"name"=>$name,"text"=>$text,"colors"=>$colors)){?>

	<?php if($Vehical == "Cars2"){?>
	<h1><?php  echo $Vehical ."</br>";?></h1>
 <?php if($name == "Honda-city"){?>
   <h1><?php echo $name."</br>";?></h1>
   <?php if($price == 3000000){?>
     <p class="price"> Price :-<?php echo $price; ?></p>
   <?php if($colors == "Black"){?>
   	<p class="colors">Colors => <?php echo $colors ;?> </p>
  <p> <?php echo $text;?></p>
   <p><button>Add to Cart</button></p>
 <?php }?>
  <?php }?>
<?php } ?>
<?php }?>
<?php }?>
</div>
 <div class="bikes1">
<?php
foreach ($array as list("Vehical"=>$Vehical,"price"=>$price,"name"=>$name,"text"=>$text,"colors"=>$colors)){?>

	<?php if($Vehical == "Bikes1"){?>
	<h1><?php  echo $Vehical ."</br>";?></h1>
 <?php if($name == "Duke"){?>
   <h1><?php echo $name."</br>";?></h1>
   <?php if($price == 300000){?>
     <p class="price"> Price :-<?php echo $price; ?></p>
   <?php if($colors == "Red"){?>
   	<p class="colors">Colors => <?php echo $colors ;?> </p>
   <p><?php echo $text;?></p>
   <p><button>Add to Cart</button></p>
 <?php }?>
  <?php }?>
<?php } ?>
<?php }?>
<?php }?>
</div>
 <div class="bikes2">
<?php
foreach ($array as list("Vehical"=>$Vehical,"price"=>$price,"name"=>$name,"text"=>$text,"colors"=>$colors)){?>

	<?php if($Vehical == "Bikes2"){?>
	<h1><?php  echo $Vehical ."</br>";?></h1>
 <?php if($name == "Yamaha"){?>
   <h1><?php echo $name."</br>";?></h1>
   <?php if($price == 500000){?>
     <p class="price"> Price :- <?php echo $price; ?></p>
   <?php if($colors == "White"){?>
   	<p class="colors">Colors => <?php echo $colors;?> </p>
  <p> <?php echo $text;?></p>
   <p><button>Add to Cart</button></p>
 
 <?php }?>
  <?php }?>
<?php } ?>
<?php }?>
<?php }?>
</div>

 

 </div>




</body>
</html>