<?php


//auto load from composer
require_once 'vendor/autoload.php';

/*   _                _      __ _
*  | |_   __ __ __  (_)    / _` |
*  |  _|  \ V  V /  | |    \__, |
*  _\__|   \_/\_/  _|_|_   |___/
*_|"""""|_|"""""|_|"""""|_|"""""|
*"`-0-0-'"`-0-0-'"`-0-0-'"`-0-0-'
*
* In twig we define variables and use them with html
* Variables can be values from the database used wiht html by way of double curly braces
* We then decalre combinations of variables and html (template) to load
* The variables below would be values from the db for a listing by ID
*/

//pretend we called the db and declare some variables we can use in our templates
$address = '123 fake street';
$price = '100,000,000';
$remarks = 'This is my description';
$attribution = 'template example from Antonio';


//TEMPLATES
//build templates we can load using html and double curlys
// avaiable to use {{ address }}, {{ price }}, and {{ remarks }}
$loader = new Twig_Loader_Array(array(
    'first' => '<h1>{{ address }}</h1>
                <br>
                <h2>{{ remarks }}</h2>
                <p>{{ price }}</p>
                <p>{{ attribution }}</p>',
    'second' => '<h1>You Buy Home Cheap Now</h1>
                <h2>{{ price }}</h2>
                <p>{{ remarks }}</p>
                <p>{{ price }}</p>',
    'mine' => '<!--Start of your own template -->



                <!-- End of your template-->'
    ));

$twig = new Twig_Environment($loader);

//decalre what template to load
$load_template = 'mine';

//load a template with variables
echo $twig->render($load_template,
                    array('address' => $address,
                            'price' => $price,
                            'remarks' => $remarks,
                            'attribution'=>$attribution
                            ));

?>
