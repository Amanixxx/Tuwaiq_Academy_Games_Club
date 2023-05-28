<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\courses;
use App\Models\allreg;

class CoursesController extends Controller
{
    public function show()
    {

      $data =courses::all();

       return view('/courses',['courses'=>$data]);
    }

    public function showallreg()
    {

       $data =allreg::all();

       return view('allreg',['allregs'=>$data]);
    }


    public function create(){
 return  view('addCourse');
    }

    public function store(Request $request){

courses::create([
  'CourseName'=>$request->CourseName,
  'image'=>$request->image,
  'description'=>$request->description,
  'Date'=>$request->date,
]);
    return back() ;
         }

// checkout part
  public function checkout($id){
//dd($id);
$course=DB::table('courses')
->where('id','=',$id)
->first();
return view('/courseCheckout',['course'=>$course]);
}




                 // course reg//

public function createReg(){
  return  view('courseCheckout');
     }
  public function storeReg(Request $request){
// dd($request);
 allreg::create([
  'Name'=>$request->fullname,
  'NationalID'=>$request->NationalID,
  'email' =>$request->email,
  'country'=>$request-> country,
  'phone' =>$request->phone,
  'address'=>$request->address,
  'CourseID'=>$request->CourseID,
  'kkuID'=>$request->kkuID,
 // 'statuse'=>$request->,

 ]);
    //  return back() ;
    return redirect('/courses') ;
          }

}