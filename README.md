## Steps

1. Pull this project is public.
2. Check the .env for DB credentials.
3. Migrate using command "php artisan migrate"
4. Seed w/ dummy data manually (sorry for no seed in Laravel), you can get this example. PS: my db is "laravel_ligth_fire" so be careful.

INSERT INTO `laravel_ligth_fire`.`cars` (`id`, `name`, `model`, `created_at`, `updated_at`) VALUES ('1', 'merc', 'a180d', '2020-08-21 19:14:02', '2020-08-21 19:14:03');

INSERT INTO `laravel_ligth_fire`.`cars` (`id`, `name`, `model`, `created_at`, `updated_at`) VALUES ('2', 'bmw', '120d', '2020-08-21 19:16:30', '2020-08-21 19:16:30');

INSERT INTO `laravel_ligth_fire`.`users` (`id`, `name`, `email`, `email_verified_at`, `password`, `created_at`, `updated_at`) VALUES ('1', 'jhon', 'jhon@jhon.pt', '2020-08-21 19:14:36', 'adasdqw', '2020-08-21 19:14:38', '2020-08-21 19:14:39');

INSERT INTO `laravel_ligth_fire`.`users` (`id`, `name`, `email`, `email_verified_at`, `created_at`) VALUES ('2', 'doe', 'doe@doe.pt', '2020-08-21 19:14:47', '2020-08-21 19:14:48');

5. Check the schema created in graphql\test\ folder have car.graphql and user.graphql. These schemas are imported according to the Lighthouse documentation (https://lighthouse-php.com/4.16/digging-deeper/schema-organisation.html#schema-imports) in the graphql\schema.graphql.
6. On terminal run the command "php artisan serve" and check for laravel index page on browser.
7. Turn on Firecamp aplication/ browser pluggin on POST http://localhost:8000/graphql ps: I am using localhost and port 8000, the /graphql is needed. Attention: use POST not GET for the next step, or you will never get the schema to Firecamp.
8. Click on the Explorer tab from Firecamp and then click in the "click here to fetch Schema".
9. Check the schema there..It is only the users query.. if you change the "car.graphql" name to "wcar.graphql" (file will be the last on the \test folder). Close the Firecamp for new fetch.
10. When you fetch again (using step 7. and 8.) only get the Cars query.

**Thanks,**
	:smile: