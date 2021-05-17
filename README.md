## Installation steps
1. composer install
2. cp .env.example .env
3. change DB credentials to your own preferred ones
4. php artisan key:generate
5. in the .env file APP_URL should be the same as with which you reach it through the browser
6. php artisan migrate:fresh --seed
7. php artisan storage:link (mostly it does not matter but better to have it)

## Admin
    - Can be reached from your_url/admin
    - Default email: admin@admin.com
    - Default password: admin


