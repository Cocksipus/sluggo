## Sluggo
[![Build Status](https://travis-ci.org/Cocksipus/sluggo.svg?branch=master)](https://travis-ci.org/Cocksipus/sluggo)  [![Coverage Status](https://coveralls.io/repos/github/Cocksipus/sluggo/badge.svg?branch=master)](https://coveralls.io/github/Cocksipus/sluggo?branch=master)

A PHP class to create slug from string


### How to use

```php
    
    use slugging\Sluggo;
    
    /* simple use */    
    $string = "Hello world !";
    Sluggo::toSlug( $string ); // will output : hello-world

   /* Using with a particular glue Ex: _ */   
    $string = "Hello world !";
    Sluggo::toSlug( $string, '_'); // will output : hello_world
```
