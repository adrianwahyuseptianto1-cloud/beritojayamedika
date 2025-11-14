<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Project;
use App\Models\Product;
use App\Models\Article;
use App\Models\Category;
use App\Models\FeedbackClient;

class PageController extends Controller
{
    public function home()
    {
        // Ambil beberapa layanan dan proyek terbaru untuk homepage
        $latestServices = Service::latest()->take(3)->get();
        $latestProjects = Project::latest()->take(4)->get();

        return view('pages.home', compact('latestServices', 'latestProjects'));
    }

public function about()
{
    $feedbacks = \App\Models\FeedbackClient::query()
        ->inRandomOrder()
        ->get();
        
    return view('pages.about', compact('feedbacks'));
}
public function toocare()
{
    return view('pages.toocare'); 
}

public function products(Request $request)
    {
        $query = Product::query();

        // Logika Pencarian
        if ($request->has('search') && $request->input('search') != '') {
            $search = $request->input('search');
            $query->where('name', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
        }
        
        $products = Product::with('category')->latest()->get();

        $categories = Category::all();

        return view('pages.products', compact('products', 'categories'));   
    }

    public function services()
    {
        $services = Service::all(); // Ambil semua data layanan
        return view('pages.services', compact('services'));
    }

    public function projects()
    {
        $projects = Project::all(); // Ambil semua data proyek
        return view('pages.projects', compact('projects'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function articles()
    {
        $articles = Article::latest()->get(); // Ambil semua artikel
        return view('pages.articles', compact('articles'));
    }
}