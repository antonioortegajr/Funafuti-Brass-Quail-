<html>
<head>
  <script>
  function slide(){

  }
  </script>
</head>
<body>
<h1> Settings!</h1>
<?php

//installed php55-mongodb via homebrew
//slide "_id" is "ygP4PpSwbcDnXpwSf"

$manager = new MongoDB\Driver\Manager("mongodb://admin:Changeme123@localhost:3001");

$query = ['_id' => 'ygP4PpSwbcDnXpwSf'];
$command = new MongoDB\Driver\Command([
    // build the 'distinct' command
    'distinct' => 'tasks', // specify the collection name
    'key' => 'text', // specify the field for which we want to get the distinct values
    'query' => $query // criteria to filter documents
]);
$cursor = $manager->executeCommand('meteor', $command); // retrieve the results

var_dump($cursor);



echo '<hr>';


//form to update
if ($_SERVER['REQUEST_METHOD'] === 'GET'){
$doc = $_GET["num"];

$prev = $doc - 1;
$next = $doc + 1;

echo '<hr>';
echo '<a href="http://192.168.1.85:2000/settings?num='.$prev.'"><img src="http://192.168.1.85:3000/assets/'.$prev.'.jpg" width="100px">Prev</a> <== <img src="http://192.168.1.85:3000/assets/'.$doc.'.jpg" width="100px"> ==> <a href="http://192.168.1.85:2000/settings?num='.$next.'">Next<img src="http://192.168.1.85:3000/assets/'.$next.'.jpg" width="100px"></a>';
echo '<hr>';




//update a document

// Specify the search criteria and update operations (or replacement document)
$filter = ["_id" => "ygP4PpSwbcDnXpwSf"];
$newObj = ['$set' => ["_id"=> "ygP4PpSwbcDnXpwSf", "text" => $doc]];

/* Specify some command options for the update:
 *
 *  * multi (boolean): Updates all matching documents when true; otherwise, only
 *    the first matching document is updated. Defaults to false.
 *  * upsert (boolean): If there is no matching document, create a new document
 *    from $filter and $newObj. Defaults to false.
 */
$options = ["multi" => true, "upsert" => false];
// Create a bulk write object and add our update operation
$bulk = new MongoDB\Driver\BulkWrite;
$bulk->update($filter, $newObj, $options);
$wc = '';
try {
    /* Specify the full namespace as the first argument, followed by the bulk
     * write object and an optional write concern. MongoDB\Driver\WriteResult is
     * returned on success; otherwise, an exception is thrown. */
    $result = $manager->executeBulkWrite("meteor.tasks", $bulk);
    var_dump($result);
} catch (MongoDB\Driver\Exception\Exception $e) {
    echo $e->getMessage(), "\n";
}








//form again
echo '<br><br>Jump to slide:
<form action="" method="GET">
<input name="num">
<br>
<button type="submit">Jump to slide number</button>
</form>';
}
else{
  echo '<br><br>Jump to slide:
  <form action="" method="GET">
  <input name="num">
  <br>
  <button type="submit">Jump to slide number</button>
  </form>';
}

$slideTotal = 9;

while($slideTotal > 10){
  //form again
  echo '<br><br>Jump to slide:
  <form action="" method="GET">
  <input name="'.$slideTotal.'">
  <br>
  <button type="submit">Jump to slide number</button>
  </form>';
  }



?>

</body>
</html>
