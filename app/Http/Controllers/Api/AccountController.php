<?php

namespace App\Http\Controllers\Api;

use App\Account;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    use \App\Http\Controllers\ApiController;

    public function __construct(Account $model)
    {
        $this->model = $model;
        $this->relations = ['bank'];
    }
}
