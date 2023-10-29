<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Make;
use App\Models\User;
use App\Models\product;
use App\Models\contact_message;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;




class FormController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:employees|max:255',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password',
            'age' => 'required',
            'contact_no' => 'required|unique:employees|max:255',
        ]);


        $emp = new Employee;

        $emp->name = $request->name;
        $emp->email = $request->email;
        $emp->password = $request->password;
        $emp->password_confirmation = $request->password_confirmation;
        $emp->age = $request->age;
        $emp->contact_no = $request->contact_no;

        $emp->save();

        return redirect('login')->with('status', 'Form Data Has Been validated and insert');
    }
    // public function show()
    // {
    //     //return view("records");
    //     $data =  Employee::all();
    //     return view('records', ['record' => $data]);
    // }
    public function contact_insert(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|max:255',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $emp = new contact_message();

        $emp->name = $request->name;
        $emp->email = $request->email;
        $emp->subject = $request->subject;
        $emp->message = $request->message;
        $emp->save();

        return "Message sent";
    }

    public function delete($id)
    {
        $data = Employee::findOrFail($id);
        $data->delete();

        return redirect()->back()->with('success', 'records deleted successfully');
    }


    public function editform($id)
    {
        $data = Employee::find($id);
        return view('editregister', compact('data'));
    }



    public function register(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required|unique:make',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
            // 'age' => 'required',
            'mobile' => 'required',
            // 'file' => 'required|max:2048',

        ]);
        // $file = time() . '.' . $req->file->extension();
        // $req->file->move(public_path('users_image'), $file)
        // ;

        $make = Make::create([
            // 'file' => $req->input('file'),
            'name' => $req->input('name'),
            'email' =>  $req->input('email'),
            'password' => $req->input('password'),
            'number' => $req->input('mobile'),
            'role' => $req->role,
            'gender' => $req->gen,
        ]);


        if ($make->save()) {
            $data = ['fn' => $req->name, 'em' => $req->email];
            Mail::send(['text' => 'registred_mail'], ['data' => $data], function ($message) use ($data) {
                $message->to($data['em'], $data['fn']);
                $message->from('agupta784@rku.ac.in', 'Abhay');
                $message->subject('Account Activation Link');
            });
            return redirect('beforelogin')->with('success', 'conform your eamil');
            // echo "true";
        } else {
            return redirect('before_registration')->with('fail', 'something went wrong please try again');
            // echo "error";
        }
        // echo "hello";
    }

    public function activate_account($email)
    {
        // echo "hello";
        $affectedRows = Make::where('email', $email)->update([
            'Status' => 'Active',

            // 'profile_pic' => $filename,
        ]);

        return redirect('beforelogin')->with('success', 'conform your eamil');
    }
    public function update(Request $request, $id)
    {
        $request->validate([

            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'cpwd' => 'required|same:password',
            'contact_no' => 'required',
            
        ]);
        $data = Make::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->password_confirmation = $request->password_confirmation;
        $data->age = $request->age;
        $data->contact_no = $request->contact_no;
        $data->save();
        return redirect('/records')
            ->with('success', 'data Has Been updated successfully');
    }
    public function user_store()
    {
        $users = Make::all();
        return view('Admin/user', compact('users'));
    }

    public function login_check(Request $request)
    {
        $request->validate([

            'email' => 'required',
            'password' => 'required',
        ]);

        $data = Make::where('email', $request->email)->first();

        if ($data) {
            if ($data['password'] == $request->password) {
                if ($data['Status'] == 'Active') {
                    session(['email' => $data['email']]);
                    session(['id' => $data['id']]);
                    session(['role' => $data['role']]);

                    if ($data['role'] == 'admin') {

                        // return redirect('admin');
                        return redirect('admin');
                    } else {
                        return redirect('After_home');
                    }
                } else {
                    session()->flash('login', 'Activate your Account first  ');
                }
            } else {
                session()->flash('login', 'Enter Valid Password');
            }
        } else {
            session()->flash('login', 'Enter Registered Email');
        }
        return redirect('beforelogin');
    }



    public function login(Request $request)
    {
        $id = session('id');
        $data = Make::where('id', $id)->first();
        $request->validate([

            // 'old_password' => 'required|same:$data['password']',
            'old_password' => 'required|in:' . $data->password,
            'new_password' => 'required',
            'confirmnew_password' => 'required|same:new_password'

        ], [
            'old_password.in' => 'Incorrect Old Password'
        ]);

        $affectedRows = Make::where('id', $id)->update([
            'password' => $request->new_password,
        ]);

        if ($affectedRows) {
            session()->flash('change_pass', 'Password changed');
        } else {
            session()->flash('change_pass', 'Something went wrong');
        }

        return redirect('change_pass');
    }




    public function profile_validate(request $req)
    {
        $req->validate([

            'name' => 'required|max:30',
            'email' => 'required',
            'phone' => 'required|digits:10',
            'age' => 'required',
            'profile_pic' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ], [
            'name.required' => 'name field is required'
        ]);

        if ($req->hasFile('profile_pic')) {
            $filename = uniqid() . '_' . $req->profile_pic->getClientOriginalName();
            $req->profile_pic->move('img/user/', $filename);

            Make::where('email', $req->email)->update([
                'profile_pic' => $filename,
            ]);
        }



        $affectedRows = Make::where('email', $req->email)->update([
            'name' => $req->name,
            'email' => $req->email,
            'number' => $req->phone,
            'Age' => $req->age,
            // 'profile_pic' => $filename,
        ]);


        // if ($affectedRows) {
        //     echo "true";
        //     echo $req->pic;
        // } else {
        //     echo $req->pic;
        //     echo "false";
        // }
        //    return view('edit_profile');
        return redirect('edit_profile');
    }

    public function logout()
    {
        session::flush();
        return redirect('/');
    }





    //Admin controllers


    public function user(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users|max:255',
            'password' => 'required|confirmed|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,20}$/',
            'password_confirmation' => 'required|same:password',
            'age' => 'required',
            'contact_no' => 'required|unique:users|max:10',
            // 'file' => 'required|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $imageName = time() . '.' . $request->file->extension();
        $request->file->move(public_path('users_image'), $imageName);

        $users = new Make;
        $users->Profile_pic = $imageName;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->password_confirmation = $request->password_confirmation;
        $users->age = $request->age;
        $users->contact_no = $request->contact_no;


        $users->save();
        return back()->withsuccess('User added successfully!!');
    }

    

    public function admin_store()
    {
        $users = Make::select()->where('role', 'admin')->get();
        return view('Admin/Admin_profile', compact('users'));
    }


    public function user_edit($email)
    {
        // dd($email);
        $user = make::where('email', $email)->first();

        return view('Admin/Edit_user', compact('user'));
    }

    public function user_update(Request $request, $email)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'name' => 'required',
            // 'email' => 'required|unique:users|max:255',
            'password' => 'required|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,20}$/',
            // 'password_confirmation' => 'required|same:password',
            'Age' => 'required',
            'number' => 'required|max:10',
            'file' => 'nullable|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $user = Make::where('email', $email)->first();

        if ($request->hasFile('profile_pic')) {
            $filename = uniqid() . '_' . $request->profile_pic->getClientOriginalName();
            $request->profile_pic->move('img/user/', $filename);

            Make::where('email', $request->email)->update([
                'profile_pic' => $filename,
            ]);
        }
        // $user->name = $request->name;
        // $user->password = $request->password;
        // $user->password_confirmation = $request->password_confirmation;
        // $user->Age = $request->Age;
        // $user->number = $request->number;
        $affectedRows = Make::where('email', $request->email)->update([
            'name' => $request->name,
            'password' => $request->password,
            'email' => $request->email,
            'number' => $request->number,
            'Age' => $request->Age,
            // 'profile_pic' => $filename,
        ]);

        return redirect('/user')->withsuccess('User updated successfully!!');
    }

    public function user_delete($email)
    {
        $user = Make::where('email', $email)->first();
        $user->delete();
        return redirect('/user')->withsuccess('Product deleted successfully!!');
    }

    
    //-----------------------------------Product Store/update/delete----------------------------------
    public function products(Request $request)
    {
        $validatedData = $request->validate([
            // product Validation
            'id' => 'required:unique:products',
            'product_name' => 'required',
            'price' => 'required|max:5',
            'file' => 'required|mimes:jpeg,png,jpg,gif,webp,avif|max:2048',
        ]);
        // dd($request->all());
        $imageName = time() . '.' . $request->file->extension();
        $request->file->move(public_path('products_image'), $imageName);

        $product = new Product;
        $product->Image = $imageName;
        $product->id = $request->id;
        $product->product_name = $request->product_name;
        $product->price = $request->price;

        $product->save();
        return back()->withsuccess('Product added successfully!!');
    }


    public function fetch_store(Request $request)
    {
        $search = $request['search'] ?? "";
        if($search != ""){
          $products = product::where('Product_Name','=','%$search')->get();
        } else{
            $products = product::all();
        }
        $data=compact('products','search');
        return view('Admin/store')->with($data);
    }

    public function show($id)
    {
        // dd($id);
        $product = Product::where('id', $id)->first();

        return view('Admin/edit_product', compact('product'));
    }


    public function product_update(Request $request, $id)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'product_name' => 'required',
            'price' => 'required|max:5',
            'file' => 'nullable|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $product = Product::where('id', $id)->first();
        if (isset($request->file)) {
            $imageName = time() . '.' . $request->file->extension();
            $request->file->move(public_path('products_image'), $imageName);
            $product->Image = $imageName;
        }
        $product->product_name = $request->product_name;
        $product->price = $request->price;

        $product->save();
        return redirect('/store')->withsuccess('Product updated successfully!!');
    }

    public function destroy($id)
    {
        $product = Product::where('id', $id)->first();
        $product->delete();
        return redirect('/store')->withsuccess('Product updated successfully!!');
    }
    // public function search()
    // {
    //     $search_text = $_GET['query'];
    //     $products = Product::where('Product_Name','LIKE', "%$search_text%")->get();

    //     return back();
    // }
    
}


////guest 


