# Type Juggling - PHP

## What's wrong ?

- MD5 (deprecated cryptographic hash functions)
- Loose comparison

That's all ?


## How to pwned it ?

Try with a default password:

````console
$ src/cli.php --password p4ssW0rD
````

Your are not authorized.

Try with "240610708" as password

````console
$ src/cli.php --password 240610708
````


## What do you should know ?

- [Type Jugling](https://www.php.net/manual/en/language.types.type-juggling.php) and [String conversion to numbers](https://www.php.net/manual/en/language.types.string.php#language.types.string.conversion)

- Magic Hashes are strings which will be evaluated as float (exponational notation with `e`)

- Loose comparison is [weird with float](https://www.php.net/manual/en/language.types.float.php)


## How to secure it ?

- strict comparison (not enought, what about timming attack ?)
- use `password_hash()`, `password_verify()` or `hash_equals()`. these functions are constant time. This makes it safe against timing attacks.
- Use modern hash function such as argon2, scrypt or bcrypt.
