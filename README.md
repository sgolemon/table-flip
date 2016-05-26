Inspired by Adam Harvey: https://twitter.com/LGnome/status/735573024825430016

Usages:
  * throw new （╯°□°）╯︵┻━┻; // TableFlip
  * throw new （ノ゜Д゜）ノ︵┻━┻; // PudgyTableFlip
  * throw new （ノಥ益ಥ）ノ︵┻━┻; // AgroTableFlip
  * （╯°□°）╯︵┻━┻(); // Function shorthand
  * assert(（╯°□°）╯︵┻━┻() ); // Use in an assert to only flip in dev

All three table-flip classes extend \Exception and implement the ┻━┻ interface,
so the following works:

```
try {
  $ret = doSomething();
  if ($ret === null) {
    throw new （╯°□°）╯︵┻━┻;
  } elseif ($ret === false) {
    throw new （ノಥ益ಥ）ノ︵┻━┻;
  } elseif (!is_string($ret)) {
    throw new （ノ゜Д゜）ノ︵┻━┻;
  }
} catch (┻━┻ $e) {
  undoSomething();
  throw $e;
}
```

Note that the parentheses used in the class/function names here are
U+FF08 FULLWIDTH LEFT PARENTHESIS and U+FF09 FULLWIDTH RIGHT PARENTHESIS
since normal parens (U+0028/U+0029) are not allowed in PHP labels.

Similarly, the customary space is omitted entirely to make this a valid PHP label.
