<?php 
include __DIR__.'./models/Product.php';
include __DIR__.'./models/Food.php';
include __DIR__.'./models/Shelter.php';





/* istanze */

$cat_food = new Food('Croccantini per gatti', 'Gatti', '6.70', 'https://www.tigros.it/photo2/2020/09/23/9/main/photo/pim-00000008030582015958-main-20200914-082657.jpg', 'Tonno, salmone e pesce azzurro', true);
$dog_shelter = new Food('Croccantini per gatti', 'Gatti', '6.70', 'https://www.tigros.it/photo2/2020/09/23/9/main/photo/pim-00000008030582015958-main-20200914-082657.jpg', 'Tonno, salmone e pesce azzurro', true);
$parrot_shelter = new Food('Croccantini per gatti', 'Gatti', '6.70', 'https://www.tigros.it/photo2/2020/09/23/9/main/photo/pim-00000008030582015958-main-20200914-082657.jpg', 'Tonno, salmone e pesce azzurro', true);

$arr_products = [
    $cat_food,
    $dog_shelter,
    $parrot_shelter
]

?>