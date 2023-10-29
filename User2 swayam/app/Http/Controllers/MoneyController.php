<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\donate;


class MoneyController extends Controller
{
    public function index1()
    {
        return view('donate');
    }
 
    public function donate(Request $request)
    {
         
        $validatedData = $request->validate([
            'name'=>'required',
          'amount' => 'required',
          'message' => 'required|unique:donates|max:255', //donates database name 
         
        ]);
        

        $donate = new Donate;
        $donate->name = $request->name;
        $donate->amount = $request->amount;
        $donate->message = $request->message;
      
 
        $donate->save();
 
        return redirect('donate')->with('status1', 'Form Data Has Been validated and insert');

 
    }
    public function fetch_store(){
        $donates=donate::all();
        return view('Admin/donate',compact('donates'));
       }
    //delete 


   //edit

   public function donate_edit($name){
    // dd($name);
    $donate = donate::where('name', $name)->first();

    return view('Admin/Edit_donate',compact('donate'));
  } 
   
    public function donate_update(Request $request)
    {
      // dd($request->all());
      $validatedData = $request->validate([
        'name'=>'required',
      'amount' => 'required',
      'message' => 'nullable|unique:donates|max:255', //donates database name 
    ]);

    $donate = new Donate;
    $donate->name = $request->name;
    $donate->amount = $request->amount;
    $donate->message = $request->message;
  

    $donate->save();

    return redirect('donate')->with('status1', 'Form Data Has Been validated and insert');


        }
        public function donate_delete($name)
        {
            $user = donate::where('name', $name)->first();
            $user->delete();
            return redirect('/donate')->withsuccess('Product deleted successfully!!');
        }
     
 

}


