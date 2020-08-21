Steps
Pull this project is public.
Check the .env for DB credentials.
Migrate using command "php artisan migrate"
Seed w/ dummy data manually (sorry for no seed in Laravel), you can get this example. PS: my db is "laravel_ligth_fire" so be careful.
INSERT INTO laravel_ligth_fire.cars (id, name, model, created_at, updated_at) VALUES ('1', 'merc', 'a180d', '2020-08-21 19:14:02', '2020-08-21 19:14:03');

INSERT INTO laravel_ligth_fire.cars (id, name, model, created_at, updated_at) VALUES ('2', 'bmw', '120d', '2020-08-21 19:16:30', '2020-08-21 19:16:30');

INSERT INTO laravel_ligth_fire.users (id, name, email, email_verified_at, password, created_at, updated_at) VALUES ('1', 'jhon', 'jhon@jhon.pt', '2020-08-21 19:14:36', 'adasdqw', '2020-08-21 19:14:38', '2020-08-21 19:14:39');

INSERT INTO laravel_ligth_fire.users (id, name, email, email_verified_at, created_at) VALUES ('2', 'doe', 'doe@doe.pt', '2020-08-21 19:14:47', '2020-08-21 19:14:48');

Check the schema created in graphql\test\ folder have car.graphql and user.graphql. These schemas are imported according to the Lighthouse documentation (https://lighthouse-php.com/4.16/digging-deeper/schema-organisation.html#schema-imports) in the graphql\schema.graphql.
On terminal run the command "php artisan serve" and check for laravel index page on browser.
Turn on Firecamp aplication/ browser pluggin on POST http://localhost:8000/graphql ps: I am using localhost and port 8000, the /graphql is needed. Attention: use POST not GET for the next step, or you will never get the schema to Firecamp.
Click on the Explorer tab from Firecamp and then click in the "click here to fetch Schema".
Check the schema there..It is only the users query.. if you change the "car.graphql" name to "wcar.graphql" (file will be the last on the \test folder). Close the Firecamp for new fetch.
When you fetch again (using step 7. and 8.) only get the Cars query.
Thanks, 😄
