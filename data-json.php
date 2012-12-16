
<?php

$unsortedArray = array();
$sortedArray = array();

// Get the number of items
$numberOfItems = $_REQUEST['number_of_items'];

// Get each item
for (int $iterator = 1; $iterator <= $numberOfItems; $iterator)
{

}

//$returnData = json_encode($_REQUEST);

$array = array("unsorted_numbers" => array(12, 124, 32));

$returnData = json_encode($array);

// Send the JSON document
Header('Content-type: application/json');
print ($returnData);


//print($jx);



/*
// Get request data
$val1 = $_REQUEST["val1"];
$val2 = $_REQUEST["val2"];

// Calculate results
$result_add = $val1 + $val2;
$result_subtract = $val1 - $val2;
$result_multiply = $val1 * $val2;

// Example of a JSON entity
//$j = json_encode(array(4 => "four", 8 => "eight"));

/*
$sort_object = array (
    "sort" => array (
        "unsorted_numbers" => array(45, 12, 79),
        "sorted_numbers" => array(12, 45, 79)
    )
);

$j = json_encode($sort_object);


//$unsorted_numbers_val = array(45, 12, 79);
$unsorted_numbers_val[0] = 45;
$unsorted_numbers_val[1] = 12;
$unsorted_numbers_val[2] = 79;
$sorted_numbers_val = array(12, 45, 79);
$sort_val = array("unsorted_numbers" => $unsorted_numbers_val, "sorted_numbers" => $sorted_numbers_val);
$sort_object = array("sort" => $sort_val);

$j = json_encode($sort_object);

// Example of a JSON entity for arithmetic


<math_op>
    <operands>
        <operand1>4</operand1>
        <operand2>2</operand2>
    </operands>
    <results>
        <add>6</add>
        <subtract>2</subtract>
        <multiply>8</multiply>
    </results>
</math_op>
*/

/*
$arithmetic_entity = array(
    "math_op" => array(
        "operands" => array(
            "operand1" => 4,
            "operand2" => 2
        ),
        "results" => array(
            "add" => 6,
            "subtract" => 2,
            "multiply" => 8
        )
    )
);


$arithmetic_entity = array(
    "math_op" => array(
        "operands" => array(
            "operand1" => $val1,
            "operand2" => $val2
        ),
        "results" => array(
            "add" => $val1 + $val2,
            "subtract" => $val1 - $val2,
            "multiply" => $val1 * $val2
        )
    )
);

$jx = json_encode($arithmetic_entity);

// Create JSON entity
//$j = json_encode(array(4 => "four", 8 => "eight"));

// Create XML document to be sent
/*
$math_op = new SimpleXMLElement('<math_op/>');

$operands = $math_op->addChild('operands');
$operand1 = $operands->addChild('operand1', $val1);
$operand2 = $operands->addChild('operand2', $val2);

$results = $math_op->addChild('results');
$add = $results->addChild('add', $result_add);
$subtract = $results->addChild('subtract', $result_subtract);
$multiply = $results->addChild('multiply', $result_multiply);
*/


/*
for ($i = 1; $i <= 8; ++$i) {
    $track = $xml->addChild('track');
    $track->addChild('path', "song$i.mp3");
    $track->addChild('title', "Track $i - Track Title");
}
*/

// Send the XML document
/*
Header('Content-type: text/xml');
print($math_op->asXML());
*/



?>
