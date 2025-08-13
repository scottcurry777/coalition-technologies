# coalition-technologies
## Coalition Technologies Interview Test

To view the working project:
1. Clone this github repository.

> git clone https://github.com/scottcurry777/coalition-technologies.git

2. Set your document root on your server to the public directory of task-manager.

> Example using Laragon: `DocumentRoot "C:/laragon/www/coalition-technologies/task-manager/public"`

3. Install the project
   1. composer install
   2. npm install
   3. php artisan key:generate
   4. php artisan migrate
   5. php artisan db:seed
   6. npm run build