# Contributing

Use the standard package commands before sending changes:

```bash
composer fix
composer test
composer test-bc
```

## What These Commands Do

- `composer fix` runs Rector, PHP CS Fixer, and Composer normalization.
- `composer test` installs regular dependency versions and runs the validation suite.
- `composer test-bc` installs the lowest supported dependency set and runs the same suite.

## Validation Scope

The package validation currently covers:

- `composer validate`
- PHPUnit with coverage output
- PHPStan
- Rector
- PHP CS Fixer
- YAML lint for `.github/`

## Reporting Issues

- [Open an issue](https://github.com/softspring/doctrine-templates/issues)
- [Send a pull request](https://github.com/softspring/doctrine-templates/pulls)
