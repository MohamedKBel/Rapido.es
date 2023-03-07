<?php

namespace App\Http\Controllers;
use App\Models\Ad;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        $ads = Ad::orderBy('created_at','desc')->take(6)->get();
        return view('welcome',compact('ads'));
    }

    public function adsByCatagory(Category $category){
        $ads = $category->ads()->get();
        return view('ad.by-category',compact ('category','ads'));
    }


}
