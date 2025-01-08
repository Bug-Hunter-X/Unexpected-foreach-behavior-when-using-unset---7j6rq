function foo(array &$arr) {
  $keysToRemove = [];
  foreach ($arr as $key => $value) {
    if ($value === 'target') {
      $keysToRemove[] = $key;
    }
  }

  foreach ($keysToRemove as $key) {
    unset($arr[$key]);
  }
  return $arr;
}

$arr = ['a', 'b', 'target', 'c', 'd'];
echo "Original array: "; print_r($arr);
$result = foo($arr);
echo "Modified array: "; print_r($result); 
