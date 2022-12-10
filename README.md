# PHP ext/cbor stub

PHP Stub files for CBOR codec extension


## License

BSD 2-Clause License


## What is this?

This package contains stub definitions for [CBOR codec extension](https://github.com/ranvis/php-ext-cbor/).
IDE can autocomplete symbols available in the extension by installing it.

The package also provides the extension's interfaces for autoloading.
Userland applications implementing those will not break when the extension is not available.

To make this fallback possible, this package itself does not add a dependency to the extension.


## Installation

`
composer require ranvis/ext-cbor-stub:~0.4
`

The version of this package should be in synchronized with the extension.

You may add `--dev` option if the extension is always available on production, so that the package is omitted on that environment.
