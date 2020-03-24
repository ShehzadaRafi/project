<?php

namespace App\Http\Controllers;

use App\jobs;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->user()->user_type_id_fk == 1){
            return redirect('/Admin');
        }elseif (auth()->user()->user_type_id_fk == 2) {
           if (auth()->user()->status == 112) {
               return redirect('/waiting');
           }else{
            return redirect('/');
           }
        }elseif (auth()->user()->user_type_id_fk == 3) {
            if (auth()->user()->status == 112) {
               return redirect('/waiting');
           }else{
            return redirect('/');
           }
        }else{
            return redirect('/No_user');
        }
    }
    public function jobstore(Request $request){
      $job=jobs::create([
            'job_email'=>$request->email,
            'job_title'=>$request->title,
            'job_description'=>$request->description,
            'job_experience_min'=>$request->job_min_experience,
            'job_experience_max'=>$request->job_max_experience,
            'job_min_salary'=>$request->job_min_salary,
            'job_max_salary'=>$request->job_max_salary,
            'min_job_degree_level'=>$request->job_min_degree,
            'max_job_degree_level'=>$request->job_max_degree,
            'job_location'=>$request->location,
            'job_company_name'=>$request->company_name,
            'job_company_website'=>$request->company_website,
            'job_category_id_fk'=>$request->job_category,
            'job_subcategory_id_fk'=>$request->job_subcategory,
            'job_type_id_fk'=>$request->job_type,
            'job_post_status'=>$request->post_status,
            'job_post_user_id_fk'=>$request->user_id,
        ]);

        return redirect('/UserAuthSet');
    }
}
