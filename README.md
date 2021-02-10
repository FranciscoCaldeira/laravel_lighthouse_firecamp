## Steps

1. Pull this project is public.
2. Check the .env for DB credentials.
3. Migrate using command "php artisan migrate"
4. Go to folder **graphql\test\car.graphql**, and if you want, add `@validator` directive in the *input type* as in  https://lighthouse-php.com/5.2/security/validation.html#validator-classes
5. This will generate the error > "message": "No directive found for `validator`".
6. Later to create the validator class do the following command `php artisan lighthouse:validator CreateCarInputValidator`, it will say on console > "Command "lighthouse:validator" is not defined." and won't create anything.

**Thanks,**
	:smile:
