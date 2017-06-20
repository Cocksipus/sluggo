## Sluggo

A PHP class to create slug from string


### How to use

```php

    /* simple use */    
    $string = "Hello world !";
    Sluggo::toSlug( $string ); // will output : hello-world

   /* Using with a particular glue Ex: _ */   
    $string = "Hello world !";
    Sluggo::toSlug( $string, '_'); // will output : hello_world
```
