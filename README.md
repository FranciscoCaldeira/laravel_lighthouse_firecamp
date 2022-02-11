#Repo for testing!

![240_F_314747471_27goX35BoEs4pnaLFkZuUn07JJUFfERX](https://user-images.githubusercontent.com/45494986/153661295-61b5c3a3-7b83-4a7b-a9c8-6cd40746c966.jpg)

## Steps

1. Pull this project is public.
2. Check the .env for DB credentials.
3. Migrate using command "php artisan migrate"
4. Go to folder **graphql\test\car.graphql**, and if you want, add `@validator` directive in the *input type* as in  https://lighthouse-php.com/5.2/security/validation.html#validator-classes
5. Later create the validator class do the following command `php artisan lighthouse:validator CreateCarInputValidator`.
6. Add the rule same(https://laravel.com/docs/8.x/validation#rule-same) to this class on the fields (color or color_confirmation).
7. Same value(color == color_confirmation) or not (color != color_confirmation) both fail in validation.

**Thanks,**
	:smile:
