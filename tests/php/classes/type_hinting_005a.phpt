--TEST--
Check type hint compatibility in overrides with array hints.
--FILE--
<?php
Class C { function f(array $a) {} }

echo "Compatible hint.\n";
Class D1 extends C { function f(array $a) {} }

echo "Class hint, should be array.\n";
Class D2 extends C { function f(SomeClass $a) {} }
?>
==DONE==
--EXPECTF--
Strict Standards: Declaration of D2::f() should be compatible with C::f(array $a) in %s on line %d
Compatible hint.
Class hint, should be array.
==DONE==
