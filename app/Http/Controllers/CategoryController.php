<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function viewCategories()
    {
        $categories = Category::all();
        return view('admin.categories.viewcategories', compact('categories'));
    }
    public function addCategories(Request $request)
    {
        $category               =   new Category();
        $category->name         =   $request->name;
        if ($request->file('image')) {
            $file = $request->file('image');
            $imageName = time() . $file->getClientOriginalName();
            $file->move(public_path('/categories/'), $imageName);
            @unlink(public_path($category->image));
            $category->image = 'categories/' . $imageName;
        }
        $category->save();
        return redirect()->route('admin.viewCategories')->with(['success' => 'Categories Added Successfully']);
    }
    public function editCategories($id)
    {
        $category = Category::find($id);
        $categories = Category::all();
        return view('admin.categories.editcategories', compact('category', 'categories'));
    }


    public function updateCategories(Request $request)
    {
        $category = Category::find($request->category_id);

        $category->name = $request->name;

        if ($request->file('image')) {
            $file = $request->file('image');
            $imageName = time() . $file->getClientOriginalName();
            $file->move(public_path('/categories/'), $imageName);
            @unlink(public_path($category->image));
            $category->image = 'categories/' . $imageName;
        }
        $category->save();

        return redirect()->route('admin.viewCategories')->with('success', 'Category updated successfully');
    }

    public function deleteCategory($id)
    {
        $category = Category::find($id);

        if ($category) {
            if (!empty($category->image)) {
                Storage::delete('public/images/' . $category->image);
            }

            $category->delete();

            return redirect()->route('admin.viewCategories')->with('success', 'Category deleted successfully');
        } else {
            return redirect()->route('admin.viewCategories')->with('error', 'Category not found');
        }
    }
}
