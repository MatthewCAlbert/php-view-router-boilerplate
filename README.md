# PHP with View and Router Boilerplate
## Information
- View and router only
- Using Laravel Blade Templating Engine

## Prerequisite
- Composer
- PHP 7.x
- To use serve.bat, you must have PHP environment set.

## Installation
\> composer install

## Serve Locally (Windows)
\> ./serve.bat

## Root Folder Deployment (not using public folder)
1.  Modify ROOT_DIR variable at .env file, empty the variable.
2.  Delete public directory.

## Non-root Domain Directory Deployment
> Modify ROOT variable at .env file, don't add "/" / trailing slashes at the end.

## Production Deployment
> Modify PRODUCTION variable at .env file, set to TRUE.