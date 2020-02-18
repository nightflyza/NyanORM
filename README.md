# NyanORM
Most kawaii and simplest database abstraction layer ever

# Features
  
  * It does not impose any restrictions on the naming of database tables
  * It does not dictate any conditions for the fields and content of these tables
  * Allows you to work with existing data structures without any problems
  * Allows you to mix code both with its use and in the old raw style
  * It does not require a long and boring describing of models before starting to work
  * Ideal for ultrafast prototyping of business logic of applications
  * Written in as minimal a style as possible using the simplest mechanics
  * Minimizes overheads for memory and callbacks. May be.
  * Allows inheritance to modify any model as you wish and the methods of working with it do not limit itself at all
  * It does not provide any requirements and tools for filtering data. You can use whatever you want
  * Works equally well on PHP5 and PHP7. Legacy!
  * Acceptable for use in web or CLI applications.
  * The most obvious syntax and mechanics that require a minimum level of IQ for their understanding
  * High level of kawaii

# Few Usage examples

Creating model for database table "devices" with some kind of magic:
```
$devices=new nya_devices();
```

Retrieving all data from it:
```
$allDevices=$devices->getAll();
```

Filtering data before selecting data:
```
$devices->where('id','=','42');
```

Creating new device
```
$devices->data('name','device name');
$devices->data('price','50');
$devices->create();
```

Changing some device record:
```
$devices->data('name','newname');
$devices->where('id','=','42');
$devices->save();
```

Deleting device record:
```
$devices->where('id','=','42');
$devices->delete();
```

....and many many other things

## Please check out some usage guidelines

  * [Documentation at Ubilling wiki](http://wiki.ubilling.net.ua/doku.php?id=nyanorm)

### Contribute

1. Fork the repository on GitHub to start making your changes.
1. Make code changes to implement the feature or fix the bug.
1. Send a pull request to get your changes merged and published.

![NYA!](http://piclod.com/i/1576549155/nyanorm.gif)

[![Build Status](https://travis-ci.org/nightflyza/NyanORM.svg?branch=master)](https://travis-ci.org/nightflyza/NyanORM)
