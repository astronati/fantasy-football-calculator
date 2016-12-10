[![Build Status](https://api.travis-ci.org/astronati/php-fantasy-football-calculator.svg?branch=master)](https://travis-ci.org/astronati/calculator)
[![Codacy Badge](https://api.codacy.com/project/badge/Coverage/43c132465684468cab8c1f9df367952d)](https://www.codacy.com/app/astronati/php-fantasy-football-calculator?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=astronati/php-fantasy-football-calculator&amp;utm_campaign=Badge_Coverage)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/43c132465684468cab8c1f9df367952d)](https://www.codacy.com/app/astronati/php-fantasy-football-calculator?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=astronati/php-fantasy-football-calculator&amp;utm_campaign=Badge_Grade)
[![Dependency Status](https://www.versioneye.com/user/projects/58442e61b1c38c0a5d2b7e21/badge.svg?style=flat-square)](https://www.versioneye.com/user/projects/58442e61b1c38c0a5d2b7e21)
[![MIT licensed](https://img.shields.io/badge/license-MIT-blue.svg)](./LICENSE.md)

# Fantasy Football Calculator
This library allows user to calculate the points that a team has reached after a soccer match. The total can be altered
through some bonus like the defense one.

## Installation
You can install the library and its dependencies using `composer` running:
```sh
$ composer require fantasy-football-calculator
```

## Documentation
The documentation is generated using [phpDocumentor](http://www.phpdoc.org/) and you can find it in
[docs/api](http://astronati.github.io/php-fantasy-football-calculator/docs/api).

### Calculator
Run the following command to instantiate a calculator:
```php
$calculator = CalculatorFactory::create($quotations, $options);
```
See [CalculatorFactory API](http://astronati.github.io/php-fantasy-football-calculator/docs/api/classes/FFC.CalculatorFactory.html)
for more details.

## Development
The environment requires [phpunit](https://phpunit.de/), that has been already included in the `dev-dependencies` of the
`composer.json`.

### Dependencies
To install all modules you just need to run following command:

```sh
$ composer install
```

### Documentation
Please use the following command to generate the project documentation:
```sh
$ composer docs
```

### Testing
Tests files are created next to related file as follows:
```
.
+-- src
|   +-- [folder-name]
|   |   +-- [file-name].php
|   |   +-- [file-name]Test.php
```

Execute following command to run the tests suite:
```sh
$ composer test
```

See [Code Coverage](http://astronati.github.io/php-fantasy-football-calculator/test/report/html/index.html) for more
details.

## License
This package is released under the [MIT license](LICENSE.md).
