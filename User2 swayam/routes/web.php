<?php

use App\Http\Controllers\cart_controller;
use App\Http\Controllers\contactcontroller;
use App\Http\Controllers\forget_controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\MoneyController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\Users;
use App\Models\Make;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware('user')->group(function () {



    Route::get('After_home', function () {
        $indexcardviewside = DB::select("select * from indexcardviewside");
        $indexcardview = DB::select("select * from indexcardview");
        $immergencyresponse = DB::select("select * from immergencyresponse");
        $index_slider = DB::select("select * from index_slider");
        $index_footer_slider = DB::select("select * from index_footer_slider");
        return view('/index', [
            'indexcardviewside' => $indexcardviewside,
            'indexcardview' => $indexcardview,
            'immergencyresponse' => $immergencyresponse,
            'index_slider' => $index_slider,
            'index_footer_slider' => $index_footer_slider
        ]);
    });




    //profile

    Route::get('profile', function () {
        $id = session('id');
        $make = DB::select("SELECT * FROM make WHERE id = ?", [$id]);

        // $make = DB::select("select * from  make where id=1");
        return view('profile', [
            'make' => $make
        ]);
    });

    Route::get('edit_profile', function () {
        $id = session('id');
        $make = DB::select("SELECT * FROM make WHERE id = ?", [$id]);

        // $make = DB::select("select * from  make where id=1");
        return view('edit_profile', [
            'make' => $make
        ]);
    });

    // Route::get ('edit_profile', function () {
    //     $make = DB::select("select * from  make where id=1");
    //     return view('edit_profile',[
    //         'make'=>$make 
    //     ]);
    // });

    Route::get('/login', function () {
        $id = session('id');
        //   $make = DB::select("select * from  make where id=1");
        $make = DB::select("SELECT * FROM make WHERE id = ?", [$id]);

        return view('login', [
            'make' => $make
        ]);
    });

    Route::get('/change_pass', function () {
        $id = session('id');
        // $make = DB::select("select * from  make where id=1");
        $make = DB::select("SELECT * FROM make WHERE id = ?", [$id]);
        return view('change_pass', [
            'make' => $make
        ]);
    });


    //who we are
    Route::get('/swayam', function () {
        $who_we_are = DB::select("select * from who_we_are");
        return view('swayam', [
            'who_we_are' => $who_we_are
        ]);
    });
    //Product
    Route::get('/after_product', function () {
        $products = DB::select("select * from products");
        return view('product', [
            'products' => $products
        ]);
    });

    //what to do
    Route::get('/what_we_do', function () {
        $what_we_do = DB::select("select * from what_we_do");
        return view('what_we_do', [
            'what_we_do' => $what_we_do
        ]);
    });

    //programs
    Route::get('/programs', function () {
        $programs = DB::select("select * from addprograms");
        return view('programs', [
            'programs' => $programs
        ]);
    });

    Route::get('buy/{id}', function () {
        return view('buy');
    });

    Route::post('buy', [FormController::class, 'orders']);

    Route::get('/contact', function () {
        return view('contact');
    });

    Route::get('/after_donate', function () {
        $donates = DB::select("select * from donates");
        return view('after_donate',[
            'donates' => $donates
        ]);
    });
    // Route::get('/product', function () {
    //     return view('product');
    // });
    // Route::get('/what_we_do', function () {
    //     return view('what_we_do');
    // });
    // Route::get('/swayam', function () {
    //     // $who_we_are = DB::select("select * from who_we_are");
    //     return view('swayam');
    // });
    Route::get('/promises', function () {
        return view('promises');
    });
    Route::get('/donate', function () {
        return view('donate');
    });
    Route::get('/form', function () {
        return view('form');
    });
    // Route::get('/profile', function () {
    //     return view('profile');
    // });
    // Route::get('/programs', function () {
    //     return view('programs');
    // });
    Route::get('/register', function () {
        return view('register');
    });
    Route::get('/forget', function () {
        return view('forget');
    });
    // Route::get('/edit_profile', function () {
    //     return view('edit_profile');
    // });


    // Users Controller 
    Route::get('users', [Users::class, 'user']);

    //registerform
    Route::get('form', [FormController::class, 'index']);
    Route::post('store-form', [FormController::class, 'store']);
    Route::get('records', [FormController::class, 'show']);
    //for delete operation

    //for edit
    Route::get('records/delete/{id}', [FormController::class, 'delete'])->name('employees.delete');
    //edit

    Route::get('/editform/{id}', [FormController::class, 'editform']);
    Route::post('edit-form/{id}', [FormController::class, 'update']);



    //for donation
    Route::get('donate', [MoneyController::class, 'index1']);
    Route::post('store-donate', [MoneyController::class, 'store1']);
    Route::get('drecords', [MoneyController::class, 'show1']);
    //for delete operation
    Route::get('donate/delete/{id}', [MoneyController::class, 'delete'])->name('donates.delete');
    //for edit


    Route::get('/edit/{id}', [MoneyController::class, 'edit']);
    Route::post('update-data/{id}', [MoneyController::class, 'update']);





    //for login


    Route::post('login-form', [FormController::class, 'login']);



    Route::get('/logout', [FormController::class, 'logout'])->name('logout.index');

    // validate 
    Route::post('profile_check', [FormController::class, 'profile_validate']);
});

Route::get('logout', [FormController::class, 'logout']);











// Guest User
Route::get('/', function () {
    $indexcardviewside = DB::select("select * from indexcardviewside");
    $indexcardview = DB::select("select * from indexcardview");
    $immergencyresponse = DB::select("select * from immergencyresponse");
    $index_slider = DB::select("select * from index_slider");
    $index_footer_slider = DB::select("select * from index_footer_slider");
    return view('user1/index', [
        'indexcardviewside' => $indexcardviewside,
        'indexcardview' => $indexcardview,
        'immergencyresponse' => $immergencyresponse,
        'index_slider' => $index_slider,
        'index_footer_slider' => $index_footer_slider
    ]);
});
Route::view('forgot_pass', 'user1/forgot_pass');
Route::view('forget', 'user1/forgot_pass');
Route::post('send_forgot_link', [forget_controller::class, 'send_link']);
Route::view('forget_change_pass/{email}', 'user1/change_pass');
Route::get('change_forget_password', [forget_controller::class, 'change_password']);
Route::get('before_swayam', function () {
    $who_we_are = DB::select("select * from who_we_are");
    return view('user1/swayam', [
        'who_we_are' => $who_we_are
    ]);
});

//what to do
Route::get('before_what_we_do', function () {
    $what_we_do = DB::select("select * from what_we_do");
    return view('user1/what_we_do', [
        'what_we_do' => $what_we_do
    ]);
});

//programs
Route::get('before_programs', function () {
    $programs = DB::select("select * from programs");
    return view('user1/programs', [
        'programs' => $programs
    ]);
});

Route::get('before_contact', function () {
    return view('user1/contact');
});

Route::get('before_donate', function () {
    return view('user1/donate');
});
// Route::get('/what_we_do', function () {
//     return view('what_we_do');
// });
// Route::get('/swayam', function () {
//     // $who_we_are = DB::select("select * from who_we_are");
//     return view('swayam');
// });
Route::get('before_store', function () {
    return view('user1/store');
});
Route::get('before_donate', function () {
    return view('user1/donate');
});
Route::get('before_form', function () {
    return view('user1/form');
});

Route::get('before_register', function () {
    return view('user1/before_registration');
});

Route::post('register_user', [FormController::class, 'register_user1']);

Route::post('register', [FormController::class, 'register']);
Route::get('activate/{email}', [FormController::class, 'activate_account']);

// Route::get ('before_form', function () {
//     $make = DB::select("select * from  make where id=1");
//     return view('user1/form',[
//         'make'=>$make 
//     ]);
// });

// Route::get('/programs', function () {
//     return view('programs');
// });
// Route::get('before_register', function () {
//     return view('user1/register');
// });


// Users Controller 
Route::get('users', [Users::class, 'user']);

//registerform
Route::get('form', [FormController::class, 'index']);
Route::post('store-form', [FormController::class, 'store']);
Route::get('records', [FormController::class, 'show']);
//for delete operation

//for edit
Route::get('records/delete/{id}', [FormController::class, 'delete'])->name('employees.delete');
//edit

Route::get('user1/editform/{id}', [FormController::class, 'editform']);
Route::post('edit-form/{id}', [FormController::class, 'update']);



//for donation
Route::get('donate', [MoneyController::class, 'index1']);
Route::post('store-donate', [MoneyController::class, 'store1']);
Route::get('drecords', [MoneyController::class, 'show1']);
//for delete operation
Route::get('donate/delete/{id}', [MoneyController::class, 'delete'])->name('donates.delete');
//for edit


Route::get('user1/edit/{id}', [MoneyController::class, 'edit']);
Route::post('update-data/{id}', [MoneyController::class, 'update']);





// for login
Route::get('before_login', function () {
    return view('user1/login');
});



Route::get('logout', [FormController::class, 'logout'])->name('logout.index');

//contact
Route::post('contact_insert', [FormController::class, 'contact_insert']);


Route::view('beforelogin', 'user1/beforelogin');
Route::get('login_check', [FormController::class, 'login_check']);
// Route::post('check_login',[FormController::class,'user_login']); 














//Admin routes

Route::get('add_to_cart/{id}/{qt}',[cart_controller::class, 'cart']);
Route::get('cart_list',[cart_controller::class, 'cart_list']);
Route::get('remove/{id}',[cart_controller::class, 'remove_from_cart']);
Route::get('place_cart_order',[cart_controller::class, 'place_cart_order']);



//search
Route::get('/search',[FormController::class,'search']);




Route::middleware('admin')->group(function () {

    Route::post('Admin/admin',[AdminController::class,'admin']);


//-----------------------for Store edit/update/delete-------------------
Route::post('/Products/store',[FormController::class,'products'])->name('products.store');
Route::get('products/{product}/edit',[FormController::class,'show']);
Route::put('products/{product}/update',[FormController::class,'product_update']);
Route::get('products/{product}/delete',[FormController::class,'destroy']);


//----------------------users Store edit/update/delete------------------
Route::post('/Users/user',[FormController::class,'user']);
// Route::view('profile','Admin/Admin_profile');
Route::get('admin_profile',[FormController::class,'admin_store']);
Route::get('Users/{email}/edit',[FormController::class,'user_edit']);
Route::put('Users/{email}/user_update',[FormController::class,'user_update']);
Route::get('Users/{email}/delete',[FormController::class,'user_delete']);


// donate edit
Route::post('/donate/donation',[MoneyController::class,'donate'])->name('donate.store');
Route::get('donate/{name}/edit',[MoneyController::class,'donate_edit']);
Route::put('donate/{name}/donate_update',[MoneyController::class,'donate_update']);
Route::get('donate/{name}/donate_delete',[MoneyController::class,'donate_delete']);

//Ask For Help
// Route::post('/after_contact',[contactcontroller::class,'contact']);

//program in databse
Route::post('/addprogram/store',[ProgramController::class,'addprogram']);

// --------------------------------------------------------------------------------------------------
// Admin
// Route::view('admin','Admin/index');
Route::get('admin', function () {
    return view('Admin/index');
});
Route::get('user',[FormController::class,'user_store']);
Route::get('donate',[MoneyController::class,'fetch_store']);
Route::get('store',[FormController::class,'fetch_store']);
Route::get('launch',[ProgramController::class,'fetch_store']);
Route::get('cart',[cart_controller::class,'fetchstore']); //Admin/store
 //Admin/store
 //Admin/store
// Route::get('edit_product',[FormController::class,'show']);
Route::view('help','Admin/help');
// Route::view('cart','Admin/cart');
// Route::view('launch','Admin/launch');
// Route::get('demo',[FormController::class,'admin_store2']);








// Admin Form
Route::view('donate3','donate_form');
Route::view('product','Admin/add_product');
Route::view('addprograms','Admin/Add_program');

Route::view('edit_product','Admin/Edit_product');
Route::view('user_register','Admin/Add_user');
Route::view('Edit_user','Admin/Edit_user');
Route::view('Add_Donation','Admin/Add_Donation');
Route::view('Edit_donate','Admin/Edit_donate');
Route::view('Admin_registration','Admin/Admin_registration');


});

Route::get('admin_logout', [FormController::class, 'logout']);