<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cur_date = Carbon::now()->format('Y m d');
        $news = Article::get();
        return view('main_page', compact('cur_date', 'news'));
    }
}
