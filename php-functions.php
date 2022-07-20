<?php 

function formatProduct($product){


	//echo "{$product['name']} costs $ {$product['price']}  to buy </br>";

	return "{$product['name']} costs $ {$product['price']}  to buy </br>";
}


  $formatted = formatProduct(['name'=>'Goku', 'price' =>1500]);

  echo $formatted;





 ?>