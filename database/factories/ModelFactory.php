<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Brackets\AdminAuth\Models\AdminUser::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'activated' => true,
        'forbidden' => $faker->boolean(),
        'language' => 'en',
        'deleted_at' => null,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        'last_login_at' => $faker->dateTime,
        
    ];
});/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Role::class, static function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'guard_name' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Permission::class, static function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'guard_name' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\GeoVar::class, static function (Faker\Generator $faker) {
    return [
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\GeoVar::class, static function (Faker\Generator $faker) {
    return [
        'datetime' => $faker->sentence,
        'comments' => $faker->sentence,
        'name' => $faker->firstName,
        'description' => $faker->sentence,
        'lat1' => $faker->sentence,
        'lng1' => $faker->sentence,
        'lat2' => $faker->sentence,
        'lng2' => $faker->sentence,
        'tpl_var' => $faker->sentence,
        'tpl_val' => $faker->sentence,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Post::class, static function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'slug' => $faker->unique()->slug,
        'perex' => $faker->text(),
        'published_at' => $faker->date(),
        'enabled' => $faker->boolean(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\BravoBooking::class, static function (Faker\Generator $faker) {
    return [
        'code' => $faker->sentence,
        'vendor_id' => $faker->randomNumber(5),
        'customer_id' => $faker->randomNumber(5),
        'payment_id' => $faker->randomNumber(5),
        'gateway' => $faker->sentence,
        'object_id' => $faker->randomNumber(5),
        'object_model' => $faker->sentence,
        'start_date' => $faker->dateTime,
        'end_date' => $faker->dateTime,
        'total' => $faker->randomNumber(5),
        'total_guests' => $faker->randomNumber(5),
        'currency' => $faker->sentence,
        'status' => $faker->sentence,
        'deposit' => $faker->randomNumber(5),
        'deposit_type' => $faker->sentence,
        'commission' => $faker->randomNumber(5),
        'commission_type' => $faker->sentence,
        'email' => $faker->email,
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'phone' => $faker->sentence,
        'address' => $faker->sentence,
        'address2' => $faker->sentence,
        'city' => $faker->sentence,
        'state' => $faker->sentence,
        'zip_code' => $faker->sentence,
        'country' => $faker->sentence,
        'customer_notes' => $faker->text(),
        'create_user' => $faker->randomNumber(5),
        'update_user' => $faker->randomNumber(5),
        'deleted_at' => null,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\BravoBookingPayment::class, static function (Faker\Generator $faker) {
    return [
        'booking_id' => $faker->randomNumber(5),
        'payment_gateway' => $faker->sentence,
        'amount' => $faker->randomNumber(5),
        'currency' => $faker->sentence,
        'converted_amount' => $faker->randomNumber(5),
        'converted_currency' => $faker->sentence,
        'exchange_rate' => $faker->randomNumber(5),
        'status' => $faker->sentence,
        'logs' => $faker->text(),
        'create_user' => $faker->randomNumber(5),
        'update_user' => $faker->randomNumber(5),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
