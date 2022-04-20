# PHP ext/cbor stub

PHP Stub files for CBOR codec extension


## License

BSD 2-Clause License


## What is this?

This package contains stub definitions for [CBOR codec extension](https://github.com/ranvis/php-ext-cbor/).
IDE can autocomplete symbols available in the extension by installing it.

The package also provides interfaces for autoloading.
Applications implementing those can fallback when the extension is not available.


## Installation

`
composer require ranvis/ext-cbor-stub:~0.4
`

The version of this package should be in synchronized with the extension.

Add `--dev` option if the extension is always available on production, so that the stub is omitted on that environment.
