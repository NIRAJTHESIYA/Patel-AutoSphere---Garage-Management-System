<?php

namespace App\Http\Controllers\Admin;

use App\Models\category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = category::all();
        return view('Admin.category', compact('categories'));
    }

    public function create()
    {
        return view('Admin.new_category');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|string|max:255',
        ]);

        category::create([
            'category_name' => $request->category_name,
        ]);

        return redirect()->route('admin.categories')->with('success', 'Category added successfully!');
    }

    public function edit($id)
    {
        $category = category::find($id);

        if ($category) {
            return view('Admin.category_edit', compact('category'));
        } else {
            return redirect()->back()->with('error', 'Category not found.');
        }
    }

    public function update(Request $request, $id)
    {
        $category = category::find($id);

        if ($category) {
            $category->update([
                'category_name' => $request->input('category_name'),
            ]);

            return redirect()->route('admin.categories')->with('success', 'Category updated successfully.');
        } else {
            return redirect()->back()->with('error', 'Category not found.');
        }
    }

    public function destroy($id)
    {
        $category = category::find($id);

        if ($category) {
            $category->delete();
            return redirect()->back()->with('success', 'Category deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Category not found.');
        }
    }
}
