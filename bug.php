In PHP, a common yet easily overlooked error involves improper handling of references. When passing arguments to functions, PHP uses "pass-by-value" by default. However, when using the `&` symbol to create a reference, changes made to the variable within the function will directly affect the original variable.  This can lead to unexpected behavior if not managed carefully.

```php
function modifyValue(&$value) {
  $value = $value * 2;
}

$number = 10;
modifyValue($number);
echo $number; // Outputs 20, because of the reference

function modifyValueNoRef($value) {
  $value = $value * 2;
}

$number = 10;
modifyValueNoRef($number);
echo $number; // Outputs 10, the original value is unchanged
```

Another problem may arise when using references with objects.  If a reference to an object is passed to a function that modifies the object's properties, the original object will also be changed. This can be problematic if you intend to keep a copy of the original object's state.