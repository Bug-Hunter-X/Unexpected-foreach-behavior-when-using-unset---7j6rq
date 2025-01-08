function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'target') {
      unset($arr[$key]);
      break; // This is where the bug might occur
    }
  }
  return $arr;
}

$arr = ['a', 'b', 'target', 'c', 'd'];
echo "Original array: "; print_r($arr);
$result = foo($arr);
echo "Modified array: "; print_r($result);