## Overview

This package provides a static constructor interface and a trait that implements the interface.

### Installation

Via Composer:

```
composer require aviator/makeable
```

### Testing

Via Composer:

```
composer test
```

### Usage

Use the trait:

```php
class Something
{
    use MakeableTrait;
}
```

Then the class can be constructed using `make(...$args)`:

```php
$instance = Something::make($arg1, $arg2);
```

The interface is optional, though it can be useful in composite interfaces to specify that a static constructor should be present:

```php
interface SomeInterface extends Makeable, SomeOtherInterface
{
    /* ... etc */
}
```

Since the static constructor simply returns `new static(...$args)`, it can be used in abstract classes and parent classes without having to re-use it on child classes:

```php
abstract class Seuss
{
    use MakeableTrait;
}

class ThingOne extends Seuss {};
class ThingTwo extends ThingOne {};

// Get an instance of ThingOne
$instance = ThingOne::make();

// Get an instance of ThingTwo
$instance = ThingTwo::make();
```


## Other

### License

This package is licensed with the [MIT License (MIT)](LICENSE).

