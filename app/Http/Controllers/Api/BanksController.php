<?php

namespace App\Http\Controllers\Api;


use App\Bank;
use App\Http\Controllers\Controller;

class BanksController extends Controller
{
    use \App\Http\Controllers\ApiController;

    public function __construct(Bank $model)
    {
        $this->model = $model;
        $this->relations = ['accounts'];
    }
}
