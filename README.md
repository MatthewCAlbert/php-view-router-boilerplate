# PHP with View and Router Boilerplate
## Information
- View and router only
- Using Laravel Blade Templating Engine

## Prerequisite
- Composer
- PHP 7.x
- To use serve.bat, you must have PHP environment set.

## Tutorial and Documentation
- [bramus/router](https://github.com/bramus/router) for Routing
- [jenssegers/blade](https://github.com/jenssegers/blade) for View Blade Templating Engine or just learn Blade Templating Engine at Laravel Documentation

## Installation
\> composer install

## Serve Locally (Windows)
\> ./serve.bat

## Root Folder Deployment (not using public folder)
1.  Modify ROOT_DIR variable at .env file, empty the variable.
2.  Delete public directory.

## Non-root Domain Directory Deployment
> Modify ROOT variable at .env file, don't add "/" or trailing slashes at the end.

## Production Deployment
> Modify PRODUCTION variable at .env file, set to TRUE.