# Set up Mail for every Application

```php
php artisan make:mail acknowledgeNewApplications -m
```
*-m is to create a markdown version*

## cache the app's files for easy access

```php
php artisan optimize
```

# Notify all adminds

## create notification class

```php
php artisan make:notification NewApplicationNotification
```