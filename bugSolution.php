To avoid the unintended side effects of passing by reference, it is best to avoid the use of references unless it is absolutely necessary.  If a function needs to modify a variable, either pass it by value and return a new modified value, or if you must modify in place, make sure you understand the implications of changes made within that function and ensure that it does not result in unexpected behavior for other parts of the code.

```php
function modifyValueAndReturn($value) {
  return $value * 2;
}

$number = 10;
$newNumber = modifyValueAndReturn($number);
echo $number; // Outputs 10
echo $newNumber; // Outputs 20
```

For objects, consider cloning the object before passing it to a function that might modify it if you need to preserve the original object's state.  Use the `clone` keyword to create a copy.

```php
class MyClass {
  public $value;
}

function modifyObject(MyClass $obj) {
  $obj->value = $obj->value * 2;
}

$myObject = new MyClass();
$myObject->value = 10;

// Create a copy to avoid modifying the original object
$myObjectCopy = clone $myObject;
modifyObject($myObjectCopy);

echo $myObject->value; // Outputs 10
echo $myObjectCopy->value; // Outputs 20
```