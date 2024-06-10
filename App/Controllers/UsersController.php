<?php

namespace App\Controllers;

use App\Models\Order;
use App\Models\User;


class UsersController
{
    public function __construct()
    {
        var_dump(static::class);
        echo '<br>';
    }
    public function __invoke()
    {
        $user = new User();
        $order = new Order();
    }
}