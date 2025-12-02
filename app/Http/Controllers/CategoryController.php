<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title="All categories";
        $description="List of all categories";
        $categories=Category::all();
        return view('admin.categories.categories' , compact('title','description','categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title="Create category";
        $description="Create a new category";
        return view('admin.categories.create' , compact('title','description'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
    'name' => 'required|string|max:255',
    'slug' => 'required|string|max:255|unique:categories,slug',
    'description' => 'nullable|string|',
    'status' => 'required|boolean',
    'image' => 'nullable|string|max:255',
]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
    'name' => 'nullable|string|max:255',
    'slug' => 'nullable|string|max:255|unique:categories,slug',
    'description' => 'nullable|string|',
    'status' => 'required|boolean',
    'image' => 'nullable|string|max:255',
]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $result = Category::where('id', $id)->firstorfail();
        if ($result) {
            $result->delete();
            return response()->json(['message' => 'Category deleted successfully.'], 200);
        }
        else {
            return response()->json(['message' => 'Category not found.'], 404);
    }
    }
}
