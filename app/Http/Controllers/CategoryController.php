<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function category() 
    {
       return view ('pages.category');
    }
    public function saveCategory(Request $request){
        
       $category= new category();
       $category->name = $request->CategoryName;
       $category->description = $request->CategoryDescription;
       $category->save();

       return redirect()->route('category.manage')->with('successMessage', 'New Category is saved');
    }
    public  function manageCategory (){
        $categories = Category::orderBy('id','DESC')->get();
        return view ('pages.category.manage-category')->with('categories',$categories);
    }

    public  function editCategory ($id)
    {
        $category = Category::FindorFail($id);
        return view ('pages.category.edit-category')->with('category',$category);
    }

    public function updateCategory(Request $request){
        
        $category= Category::findorFail($request->id);
        $category->name = $request->CategoryName;
        $category->description = $request->CategoryDescription;
        $category->save();
 
        return redirect()->route('category.manage')->with('successMessage', 'Category is updated');
     }

     public function deleteCategory($id){
        
        $category= Category::findorFail($request->id);
        $category->delete();
 
        return redirect()->route('category.manage')->with('successMessage', 'Category is deleted');
     }
}
