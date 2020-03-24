<?php

namespace App\Http\Controllers;

use App\job_subcategories;
use App\job_categories;
use Illuminate\Http\Request;

class SubCategories extends Controller
{
    public function create(){
    	$category=job_categories::all();
    	return view('Admin.subcategory.add_subcategories',compact('category'));
    }
    public function show(){
    	$category=job_subcategories::all();
    	return view('Admin.subcategory.display_subcategories',compact('category'));
    }
    public function store(Request $request)
    {
        $category=job_subcategories::create([
            'job_subcategory_name'=>$request->job_subcategory,
            'job_category_id_fk'=>$request->cat_id,
        ]);

        return redirect('/Admin/display_subcategories');
    }
    public function edit($id)
    {
    	$categories = job_subcategories::findOrFail($id);
    	$category=job_categories::all();
        return view('admin.subcategory.edit_subcategories', compact('categories','category'));
    }
    public function update(Request $request,$id)
    {
        $cat = job_subcategories::find($id);
        if ($request->cat_id=='none') {
        	$cat_new_id=$request->prev_cat_id;
        }else{
        	$cat_new_id=$request->cat_id;
        }
		$cat->job_subcategory_name = $request->job_subcategory_name;
		$cat->job_category_id_fk = $cat_new_id;

		$cat->save();
        return redirect('/Admin/display_subcategories');
    }
    public function destroy($id)
    {
    	$cat_id_del = job_subcategories::find($id);
        $cat_id_del->delete();

        return redirect('/Admin/display_subcategories');
    }
}
