<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Sites
    |--------------------------------------------------------------------------
    |
    | For each of your Statamic sites, you can setup a new store which allows you
    | to use different currencies, tax rates and shipping methods.
    |
    */

    'sites' => [
        'default' => [
            'currency' => 'GBP',

            'tax' => [
                'rate'               => 20,
                'included_in_prices' => false,
            ],

            'shipping' => [
                'methods' => [
                    \DoubleThreeDigital\SimpleCommerce\Shipping\StandardPost::class,
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Gateways
    |--------------------------------------------------------------------------
    |
    | You can setup multiple payment gateways for your store with Simple Commerce.
    | Here's where you can configure the gateways in use.
    |
    */

    'gateways' => [
        \DoubleThreeDigital\SimpleCommerce\Gateways\DummyGateway::class => [],

        // \DoubleThreeDigital\SimpleCommerce\Gateways\StripeGateway::class => [
        //     'key' => env('STRIPE_KEY'),
        //     'secret' => env('STRIPE_SECRET'),
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Notifications
    |--------------------------------------------------------------------------
    |
    | Simple Commerce can automatically send notifications to customers after
    | events occur in your store. eg. a cart being completed.
    |
    | Here's where you can toggle if certain notifications are enabled/disabled.
    |
    */

    'notifications' => [
        'cart_confirmation' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Collections & Taxonomies
    |--------------------------------------------------------------------------
    |
    | Simple Commerce uses Statamic's native collections and taxonomies functionality.
    | It will automatically create collections/taxonomies upon addon installation if
    | they don't already exist. However, if you'd like to use a different collection
    | or taxonomy, like one you've already setup, here's the place to change that.
    |
    */

    'collections' => [
        'products'  => 'products',
        'orders'    => 'orders',
        'coupons'   => 'coupons',
        'customers' => 'customers',
    ],

    'taxonomies' => [
        'product_categories' => 'product_categories',
    ],

    /*
    |--------------------------------------------------------------------------
    | Cart Key
    |--------------------------------------------------------------------------
    |
    | Under the hood, Simple Commerce sets an entry in the session to store the customers'
    | current cart ID. If you want to, you can change the key of the session entry.
    |
    */

    'cart_key' => 'simple-commerce-cart',

];
