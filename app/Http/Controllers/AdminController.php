<?php

namespace App\Http\Controllers;

use App\job_categories;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
    	return view('Admin.index');
    }
    public function create(){
    	return view('Admin.add_categories');
    }
    public function show(){
    	$category=job_categories::all();
    	return view('Admin.display_categories',compact('category'));
    }
    public function store(Request $request)
    {

        $category=job_categories::create([
            'job_category_name'=>$request->job_category,
        ]);

        return redirect('/Admin/display_categories');
    }
    public function edit($id)
    {
    	$categories = job_categories::findOrFail($id);
        return view('admin.edit_categories', compact('categories'));
    }
    public function update(Request $request,$id)
    {
        $cat = job_categories::find($id);

		$cat->job_category_name = $request->job_category_name;

		$cat->save();
        return redirect('/Admin/display_categories');
    }
    public function destroy($id)
    {
    	$cat_id_del = job_categories::find($id);
        $cat_id_del->delete();

        return redirect('/Admin/display_categories');
    }
    public function candidates()
    {
        return view('admin.candidates');
    }
    public function cand_update(Request $request,$id)
    {
        $page = User::find($id);
        if($page) {
            $page->status = $request->status_name;
            $page->save();
            return redirect('/Admin/candidates');
        }
    }
    public function employer()
    {
        return view('admin.employers');
    }
    public function emp_update(Request $request,$id)
    {
        $page = User::find($id);
        if($page) {
            $page->status = $request->status_name;
            $page->save();
            return redirect('/Admin/employer');
        }
    }
    public function waiting(){
        return view('admin.waiting');
    }
}
