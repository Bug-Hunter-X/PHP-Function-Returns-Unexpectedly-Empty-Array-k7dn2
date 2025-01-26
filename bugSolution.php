```php
function processData(array $data): array
{
  // ... some code to process the data ...
  //Error was here: The function was modifying the passed array instead of creating a new one
  return $data;
}

function processDataCorrectly(array $data): array
{
  $newData = $data; // Create a copy of the input array
  // ... some code to process the $newData array...
  return $newData; // Return the modified copy
}

$myData = ['a' => 1, 'b' => 2, 'c' => 3];
//$processedData = processData($myData); // This would still return an empty array
$processedData = processDataCorrectly($myData);

// Now, the foreach loop correctly iterates.
foreach ($processedData as $key => $value) {
  echo "{$key} => {$value}\n";
}
```