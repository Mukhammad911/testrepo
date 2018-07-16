VideoWork
----------------------------------------------------------------------------------------

### Requirements
- PHP >= 7.1.X


### Technical Design & Implementation
- The Laravel Framework 5.6.X
- Composer package management
- Use of PHP 7.1.X and syntax

### Installation

    // Add in your app's composer.json

    "require":{
       "teleglobal/videowork": "dev-master"
    }
    
    // And you must add repositories

    "repositories": [
        {
            "type": "git",
            "url": "https://your.username@bitbucket.org/sunduktv/videowork-package.git"
        }
    ],
    
    // For install package
    
    composer install

    // Publish the package config file to your application. Run these command inside your terminal.
    
    php artisan vendor:publish --provider="Teleglobal\Videowork\VideoWorkServiceProvider"

    //When using the scheduler, you only need to add the following Cron entry to your server
    * * * * * cd /path-to-your-project && php artisan schedule:run >> /dev/null 2>&1
    
### Copyright

(c) Teleglobal.
