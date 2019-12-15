<?php

namespace App\Http\Controllers;

use App\category;
use App\Figure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        $query = $request->search;
        $figures = Figure::with('category')
            ->where('name', 'LIKE', '%' . $query . '%')
            ->paginate(2);
//        dd(count($figures));
        if(count($figures)==0){
            $category = category::where('name','LIKE','%'.$query.'%')->get();
            $figures = Figure::with('category')
                ->where('categoryId','=',$category[0]->id)
                ->paginate(2);
        }
        $figures->appends($request->only('search'));
        return view('home',compact('figures','user'));
    }
}
