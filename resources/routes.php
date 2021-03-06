<?php

/*
 * This file is part of Laravel E-Mail Authentication.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

Route::get(config('email-authenticate.route.uri'), [
    'as'   => config('email-authenticate.route.as'),
    'uses' => config('email-authenticate.route.uses'),
]);
