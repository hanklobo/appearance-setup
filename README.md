# Laravel Appearance Setup Package

This open-source package simplifies the process of customizing the appearance of your Laravel application. It offers a user-friendly setup route to manage various visual aspects of your project.

## Installation

To install the package, follow these steps:

1. Run the following command in your terminal to install the package via Composer:
```
composer require hanklobo/appearance-setup
```
2. After installation, publish the package's assets and configuration files using the following commands:
```
php artisan vendor:publish --provider="HankLobo\AppearanceSetup\AppearanceSetupServiceProvider"
php artisan vendor:publish --tag=appearance-setup-assets
php artisan vendor:publish --tag=appearance-setup-config
```
3. Finally, add the `AppearanceSetupServiceProvider` to the list of providers in your `config/app.php` file:
```php
'providers' => [
    // Other service providers...
    HankLobo\AppearanceSetup\AppearanceSetupServiceProvider::class,
],
```
With these steps, you're ready to use the Laravel Appearance Setup Package to streamline your project's appearance customization process.

## Access Control

To ensure secure access to the appearance setup functionality, this package implements access control. Users must have the 'access-setup' permission to access the `/setup` route.

To grant a user access:

1. Implement the `can` method on your User model or use Laravel's built-in authorization features.
2. Assign the 'access-setup' permission to the appropriate users or roles in your application.

Example of checking for the permission in your User model:
```php
public function can($ability, $arguments = [])
{
    return $this->permissions->contains('name', $ability);
}
```

## Usage

After installation, navigate to the `/setup` route in your application to access the appearance customization interface. Only users with the 'access-setup' permission will be able to view and modify the settings.

## Customization

You can customize the appearance setup process by publishing the package's views and assets and modifying them as needed. The package provides a default implementation, but you may want to tailor it to your specific requirements.

To publish the package's views and assets, run:
```
php artisan vendor:publish --tag=appearance-setup-views
```

This will copy the views and assets to your application, allowing you to modify them as needed.

## Q&A

1. **Q: How do I customize the appearance options available in the setup interface?**
   A: You can modify the `config/appearance.php` file to add, remove, or change the available customization options. Each option in this file corresponds to a field in the setup interface.

2. **Q: Can I extend the functionality of the appearance setup package?**
   A: Yes, you can extend the package by creating your own service provider that binds to the package's interfaces. This allows you to add custom logic or override existing functionality.

3. **Q: How are the appearance settings stored and applied to my application?**
   A: The package stores the settings in the `config/appearance.php` file. When a page is loaded, the package retrieves these settings from the config file and applies them dynamically. You can access these settings in your views or controllers using the provided facade or helper functions.

## Support

If you encounter any issues or have questions, please file an issue on the GitHub repository. We appreciate your feedback and contributions to improve this package.

## License

This package is open-sourced under the MIT License. See the LICENSE file for more details.
