
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<?php

// Include the library
include('simple_html_dom.php');
 
$url = "https://www.amazon.com/gp/product/B016DJAL0K/ref=s9_acsd_hps_bw_c_x_1?pf_rd_m=ATVPDKIKX0DER&pf_rd_s=merchandised-search-4&pf_rd_r=RE9471BGZJCHNBHQ0XD3&pf_rd_t=101&pf_rd_p=2484600682&pf_rd_i=6358539011";
//'https://davidwalsh.name/'

// Retrieve the DOM from a given URL
$html = file_get_html($url);

echo '<br>Title Of Product:<br> ';
// Find the title of product
foreach($html->find('span#productTitle') as $e){
    echo $e->plaintext . '<br>';
}

echo '<br>Price Of Product:<br> ';
 // Find the price of producr
foreach($html->find('span#priceblock_ourprice') as $e){
    echo $e->plaintext . '<br>';

}

echo '<br>IMG Of Product:<br> ';
 // Find the img of product
foreach($html->find('img#landingImage') as $e){
    echo $e->src  . '<br>';

}

echo '<br>Features Of Product:<br> ';
 // Find the features of product
foreach($html->find('div#feature-bullets') as $e){
    // print feature by feature   
    foreach($e->find('li') as $feature){
        echo $feature->plaintext  . '<br>';
    }
}


        ?>
    </body>
</html>
