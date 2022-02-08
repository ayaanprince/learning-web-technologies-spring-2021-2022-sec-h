<?php
   function vat($price,$vat=15) {

    $price_with_vat=0;
    $price_with_vat = $price + ($vat*($price/100));
    $price_with_vat = round($price_with_vat, 2);
    return $price_with_vat;
}
echo vat(15);

?>