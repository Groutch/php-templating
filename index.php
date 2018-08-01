<?php
require 'vendor/autoload.php';
$faker = Faker\Factory::create('fr_FR');
\Bezhanov\Faker\ProviderCollectionHelper::addAllProvidersTo($faker);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Title </title>
</head>

<body>
    <?php
    $loader = new Twig_Loader_Filesystem(__DIR__. '/templates');
    $twig = new Twig_Environment($loader,['cache' => false]);
    echo $twig->render('template.twig',[
        'name'=>$faker->name,
        'job'=>$faker->jobTitle,
        'mail'=>$faker->safeEmail,
        'phone'=>$faker->phoneNumber,
        'numRue'=>$faker->buildingNumber,
        'nomRue'=>$faker->streetName,
        'codePostal'=>$faker->postcode,
        'ville'=>$faker->city,
        'imgCust'=>$faker->imageUrl($width = 500, $height = 500,'cats'),
        'imgProd'=>$faker->imageUrl($width = 500, $height = 300),
        'companyName'=>$faker->company,
        'catchPhrase'=>$faker->catchPhrase,
        'color'=>$faker->safeColorName,
        'productAdjective'=>"merveilleux",
        'productName'=>$faker->productName,
        'productMaterial'=>$faker->word,
        'url'=>$faker->url,
        'prix'=>$faker->randomFloat($nbMaxDecimals = 2,$min = 0, $max = 100),
        
    ]);
    
    ?>
</body>

</html>
