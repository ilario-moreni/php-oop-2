<?php 
include __DIR__.'./models/Product.php';
include __DIR__.'./models/Food.php';
include __DIR__.'./models/Shelter.php';
include __DIR__.'./models/Category.php';

/* categorie */

$arr_categories= [
    'gatto' => new Category('gatti', '<i class="fa-solid fa-cat"></i>'),
    'cane' => new Category('cani', '<i class="fa-solid fa-dog"></i>'),
    'pappagallo' => new Category('pappagalli', '<i class="fa-solid fa-crow"></i>'),
];



/* istanze */

$cat_food = new Food('Croccantini per gatti',$arr_categories['gatto'], '6.70', 'https://www.tigros.it/photo2/2020/09/23/9/main/photo/pim-00000008030582015958-main-20200914-082657.jpg', 'Tonno, salmone e pesce azzurro', true);
$dog_food = new Food('Croccantini per cani', $arr_categories['cane'], '5.90', 'https://primia.digitelematica.org/photo/2020/05/19/10/main/photo/pim-00000008030582015781-main-20190521-150840.jpg', 'Pollo', true);
$cat_food_2 = new Food('Bocconcini per gatti',$arr_categories['gatto'], '9.50', 'https://primia.digitelematica.org/photo/2020/05/19/10/main/photo/pim-00000008030582015699-main-20191001-093005.jpg', 'Pollo e tacchino', false);
$dog_shelter = new Shelter('Cuccia per cane', $arr_categories['cane'], '184.99', 'https://croci.net/wp-content/uploads/2020/09/Cuccia_per_cani_da_esterno_Chalet.jpg', 'Legno e gomma', '200x140x160 cm');
$cat_sheler = new Shelter('Cuccia per gatti',$arr_categories['gatto'], '15.90', 'https://shop-cdn-m.mediazs.com/bilder/letto/cozy/kingdom/4/400/48523_PLA_Cozy_Kuschelbett_Kingdom_FG_11_63_4.jpg', 'Cotone e gommapiuma', '60x40x40');
$parrot_shelter = new Shelter('Voliera per pappagallo', $arr_categories['pappagallo'], '49.50', 'https://images.eprice.it/nobrand/0/Lightbox/338/210737338/DAM210737338-0-939686ea-8f28-4dd1-afa9-d32bad4424ca.jpg', 'Acciaio C40', '40x70x200 cm');

$arr_products = [
    $parrot_shelter,
    $cat_food,
    $dog_food,
    $dog_shelter,
    $cat_sheler,
    $cat_food_2,
]


?>