2021/11/25
- Add base files for factories and seeders
	- sail artisan make:factory ModelNameFactory
	- sail artisan make:seeder ModelNameSeeder
- Fill in factory files
	- add name of corresponding model, example:
	  protected $model = ModelName::class;
	- dont't forget to add use App\Models\ModelName at the top if extensions don't do it automatically!
	- fill in public function definition() which will return an array. Example can be found in automatically added UserFactory
- Add seederfile to DatabaseSeeder. Example available in file.
- Add factory to seeder
	- Example in run()
	ModelName::factory()->times(count:5)->create();
	- dont't forget to add use App\Models\ModelName at the top if extensions don't do it automatically!
- sail artisan migrate:fresh --seed

2021/11/24
- Redesign UML and update on github
- Redesign database
	- edit migration files
	- add new migration files
	- add models, controllers, requests
	- sail artisan migrate:fresh
- Update Models to conform to new UML

2021/11/18
- Create UML out of previous notes for database
- Update migration files to conform to uml
	- edit migration files
	- sail artisan migrate:fresh
	
2021/11/17
- Generate migrations for categories, products, product_options and images
	- sail artisan make:migration create_nameof_table
	- edit migration files
	- sail artisan migrate
- Generate models, requests and resource class 
	- sail artisan make:model NameofModel --controller --resource --requests

2021/11/16
- Setup Laravel/git
	- Docker
	- curl -s "https://laravel.build/example-app" | bash
	- edit .env
	- add phpmyadmin to docker-compose
- Add Jetstream/Livewire
	- sail composer require laravel/jetstream
	- sail artisan jetstream:install livewire
	- sail npm install
	- sail npm run dev
	- sail artisan migrate
