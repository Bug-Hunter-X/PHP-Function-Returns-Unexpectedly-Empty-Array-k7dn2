```php
function processData(array $data): array
{
  // ... some code to process the data ...
  return $data;
}

$myData = ['a' => 1, 'b' => 2, 'c' => 3];
$processedData = processData($myData);

// Unexpected behavior: $processedData is empty!
// foreach loop does not iterate.
foreach ($processedData as $key => $value) {
  echo "{$key} => {$value}\n";
}
```