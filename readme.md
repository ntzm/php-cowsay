# PHP Cowsay

[Cowsay](https://en.wikipedia.org/wiki/Cowsay) in PHP 7.

## Installation

```bash
composer install
```

## Usage

```bash
echo "Hello World!" | php cowsay
```

## Known inconsistencies

- Entering a message before flags only shows the message, whereas the original
  shows the flags in the message, but does not use them.
- No cowthink.
- Entering a blank message produces an incorrect result.
- Does not show warning when entering unknown flag or option.
