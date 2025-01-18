```php
<?php
function increment_array(&$arr) {
  foreach ($arr as &$value) {
    $value++;
  }
}

$numbers = [1, 2, 3];
increment_array($numbers);
print_r($numbers); // Output: Array ( [0] => 2 [1] => 3 [2] => 4 )

//To modify a copy of an array, you must make a deep copy and then pass the copy by reference.
$moreNumbers = [1,2,3];
$moreNumbersCopy = [];
foreach ($moreNumbers as $value) {
    $moreNumbersCopy[] = $value;
}
increment_array($moreNumbersCopy);
print_r($moreNumbers); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 )
print_r($moreNumbersCopy); // Output: Array ( [0] => 2 [1] => 3 [2] => 4 )
?>
```