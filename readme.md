# Admin-Dash For Laravel 5.4
## Installation

Follow [the basic instructions](https://help.github.com/articles/fork-a-repo/) for forking a repo from Github.

You will have to create your own .env file for laravel.  You can get an example of a .env from the [master](https://github.com/laravel/laravel/blob/master/.env.example):

~~~~

APP_ENV=local
APP_KEY=generate-your-app-key
APP_DEBUG=true
APP_LOG_LEVEL=debug
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=log
MAIL_HOST="mailtrap.io"
MAIL_PORT=2525
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_ENCRYPTION=null

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=

FACEBOOK_ID=your-face-book-id
FACEBOOK_SECRET=your-facebook-secret
FACEBOOK_URL=http://your-domain.com/auth/facebook/callback

GITHUB_ID=your-github-id
GITHUB_SECRET=your-github-secret
GITHUB_URL=http://your-domain.com/auth/github/callback



~~~~ 

You’ll note it has a blank APP_KEY.  You will need to run the following from the command line:

~~~~

php artisan key:generate

~~~~

The MAIL_DRIVER is set to log, setting up with mailtrap.io is recommended.

You will also need to add your Github and Facebook .env parameters if you wish to use the social logins:

~~~~

FACEBOOK_ID=
FACEBOOK_SECRET=
FACEBOOK_URL=

GITHUB_ID=
GITHUB_SECRET=
GITHUB_URL=

~~~~

Obviously, you will have to create your Facebook and Github apps on your own to supply the credentials.  The starter app does support form-based login and registration, so you don’t need to have Facebook and Github setup for it to work.

You should also add your DB info in your .env file:

~~~~

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your-db-name
DB_USERNAME=your-db-username
DB_PASSWORD=your-db-password

~~~~

After creating your DB and supplying the credentials, you will need to run from the command line:

~~~~

php  artisan migrate

~~~~

Next, from the command line,  run:

~~~~

npm install

~~~~

To navigate to the admin dashboard, create a user and change their is_admin value to 1 in the database.  This will cause the admin link to appear on the user dash.  Note that admin users are directed to the admin dash upon login.

On the admin panel, check the site pages link for additional pages with working data grids, written in Vue.js.

To use this application, you need a working knowledge of the Laravel framework, with composer installed.  If you are unfamiliar with Laravel, see the [docs](https://laravel.com/docs/5.4).
## License

Admin-Dash is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).