<?php
namespace controllers;

use models\name;

class homeController
{
    public function index()
    {
        view('status')->render();
    }
}
