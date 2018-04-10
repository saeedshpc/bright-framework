<?php namespace App\Controllers;

use Core\Controller;

class SeriesController extends Controller
{
    public function index()
    {
        return "Index Page";
    }

    public function serie($slug)
    {
        return "Series Page";
    }

    public function episode($slug, $id)
    {
        return $slug;
    }
}