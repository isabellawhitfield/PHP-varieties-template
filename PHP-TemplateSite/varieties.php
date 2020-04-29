<?php
$title = "Varieties";
$description ="Here are the varieties of coffee we offer";


require("templates/header.php");
//require("templates/nav.php");


?>


<main class="px-5 d-flex justify-content-center">
	<div class="row coffee col-6">
	<div class="col">
		<img src="images/coffee1.png" alt="Coffee"/>
	</div>
	<div>
		<p > A short black is a 30ml shot of espresso served in a demitasse cup, 
        and a good/fresh short black will have a thick golden crema on top. This is of 
        course the basis for almost all espresso coffees.
		</p>
	</div>
    <div class="col">
		<img src="images/coffee2.png" alt="Coffee" />
	</div>
	<div>
		<p > A French press (also called press pot, coffee press, coffee plunger or cafetière) 
        is a special machine used to make coffee. It is easy to operate. The coffee it can make 
        is stronger than that produced by other means.
		</p>
	</div>
    <div class="col">
		<img src="images/coffee3.png" alt="Coffee"/>
	</div>
	<div>
		<p > A long black is a style of coffee commonly found in Australia and New Zealand. 
        It is similar to an Americano, but with a stronger aroma and taste. A long black is made 
        by pouring a double-shot of espresso or ristretto over hot water. ... Usually the water is 
        also heated by the espresso machine.
		</p>
	</div>

</div>
</main>


<?php
require("templates/footer.php");

?>
