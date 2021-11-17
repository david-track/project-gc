

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
