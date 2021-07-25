<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\MGFCarController;
use App\Http\Controllers\SearchCar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail\NewUserWelcomeMail;
use App\Http\Controllers\FbController;
use App\Http\Controllers\GoogleLogin;
use App\Http\Controllers\RentalContract;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\BlogController;

use App\Models\RentalContract as ModelsRentalContract;
use App\Models\RentalSchedule;
use App\Models\CarRental;
use App\Models\CarPic;
use App\Models\CarMFG;
use App\Models\CarType;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\RentalRequest;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


//Không cần đăng nhập


Route::get('/', function (Request $request) {


    return view('index');
});


Route::get('/searchcar', function () {
    return view('user/searchcar');
});

//Search car

Route::get('/searchcar', [SearchCar::class, "search"])->name("searchcar");
Route::get('/searchcar/filter', [SearchCar::class, "filter"])->name("filter");


Route::get('/searchcar/profile', [RentalContract::class, "carprofile"])->name("carprofile");


//Facebook login
Route::get('auth/facebook', [FbController::class, 'redirectToFacebook']);
Route::get('auth/facebook/callback', [FbController::class, 'facebookSignin']);
//Google login
Route::get('google',function(){
    return view('googleAuth');
});
Route::get('auth/google', [GoogleLogin::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleLogin::class, 'handleGoogleCallback']);
//----------------------------------------------------------------------------------------------------------
//Phân chia login admin

Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');


Route::get('/email', function(){
    return new NewUserWelcomeMail();
});


Route::get('/blog', [BlogController::class,"blog"]);



Route::get('/profile/{user}',[ProfilesController::class,"index"])->name('profiles.show');





//Quyền user 


Route::prefix('user')->middleware('is_admin:admin,user')->group(function() {


    //Phần anh Thiện

            Route::get('/index',[AccountController::class,"index"]);
            Route::get('/create',[AccountController::class,"create"]);
            Route::post('/postCreate', [AccountController::class, "postCreate"]);
            Route::get('/update/{id}', [AccountController::class, "update"]);
            Route::post('/postUpdate/{id}', [AccountController::class, "postUpdate"]);
            Route::get('/delete/{id}', [AccountController::class, "delete"]);



            //Route user view profile or edit profile
            Route::get('/profile',[ProfilesController::class,"viewSelfProfile"])->name('profiles.show');
            Route::get('/profile/{user}/edit',[ProfilesController::class,"edit"])->name('profiles.edit');
            Route::patch('/profile/{user}',[ProfilesController::class,"update"])->name('profiles.update');















    // Phần anh Vương


            Route::get('/mycars', 'MyCarController@index')->name('rental.index');
            Route::get('/mycars/rental', 'MyCarController@create')->name('rental.create');
            Route::get('/mycars/newrental', 'MyCarController@create1');
            Route::post('/mycars/checkRental', 'MyCarController@store')->name('rental.store');
            Route::get('/mycars/update/{car_id}', 'MyCarController@update')->name('rental.update');

            Route::post('/mycars/edit', 'MyCarController@edit')->name('rental.edit');
            Route::get('/mycars/delete/{car_id}', 'MyCarController@delete')->name('rental.delete');
            Route::get('/mycars/image/{car_id}', 'MyCarController@image')->name('rental.image');
            Route::get('/mycars/image/upload', 'MyCarController@upload')->name('rental.upload');
            Route::post('/mycars/image/checkUpload', 'MyCarController@checkUpload')->name('rental.checkUpload');
            Route::get('/mycars/rental/image/update/{car_id}', 'MyCarController@updateImage')->name('rental.image.update');
            Route::post('/mycars/rental/image/checkUpdate/{car_id}', 'MyCarController@checkupdateImage')->name('rental.image.checkupdate');

            Route::get('/review', 'ReviewController@index')->name('review');
            Route::post('/review/post', 'ReviewController@store')->name('review.post');














    //Phần Nhân



            Route::post('/searchcar/profile/checkout', [RentalContract::class, "checkout"])->name("carprofile");


            //mytrip


            //mytrip sau khi thanh toán
            Route::post('/mytrip', [RentalContract::class, "mytrip"])->name("mytrip");

            //mytrip bình thường
            Route::get('/mytrips', [RentalContract::class, "mytrips"])->name("mytrips");


            //Form hủy chuyến
            Route::get('/mytrips/cancell/{id}', function ($id) {

                return view('profiles.formreport',compact('id'));
            })->name("formcancell");
            Route::post('/mytrips/cancell',  [RentalContract::class, "cencelform"])->name("formcancell");

          

            //Xóa lịch sử
            Route::get('/triphistory/delete/{id}',[RentalContract::class, "delete"]);
            //Danh sách chuyến
            Route::get('/mycars/triplist',[RentalContract::class, "triplist"])->name("triplist");

            //Mycars

            // Route::get('/user/mycars', function (Request $request) {

            //     $data = $request->session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');
            //     $mycar = CarRental::where('user_id', $data)->get();
            //     return view('profiles.Mycars', compact('mycar'));

            // });

            Route::get('/mycars/register', function (Request $request) {

                $hangxe=CarMFG::all();
                $tenxe=CarType::all();

                $data = $request->session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');
                return view('profiles.registercar', compact('data','hangxe','tenxe'));

            });


            Route::get('/mycars/triplist/xacnhan/{id}', function ($id) {

                // Đang liên hệ

                $post= ModelsRentalContract::where('contract_id',$id)->get()->first();
                $post['status']="Đang liên hệ";
                $post->save();

                $post= RentalSchedule::where('id_rental_contract',$id)->get()->first();
                $post['status']="Đang giao xe";
                $post->save();

                return redirect()->route('triplist');
            });

            Route::get('/mycars/triplist/dagiaoxe/{id}', function ($id) {

                // Đang liên hệ

                $post= ModelsRentalContract::where('contract_id',$id)->get()->first();
                $post['status']="Đang trong chuyến";
                $post->save();

                $post= RentalSchedule::where('id_rental_contract',$id)->get()->first();
                $post['status']="Đang cho thuê";
                $post->save();

                return redirect()->route('triplist');
            });

            Route::get('/mycars/triplist/danhanxe/{id}',[RentalContract::class, "danhanxe"]);



            //Lịch sử cho thuê 
            Route::get('/mycars/history',[RentalContract::class, "historyforrental"])->name("historyforrental");
            Route::get('/mycars/triplist/xemchitiet/{id}', [RentalContract::class, "detailsrental"]);
              //Lich sử chuyến đi
            Route::get('/triphistory', [RentalContract::class, "historytrip"])->name("triphistory");

            //Xem chi tiết
            Route::get('/mycars/mytrips/xemchitiet/{id}', [RentalContract::class, "detailsrentaluser"]);


            Route::get('/mytrips/rental', function(){
                return view('profiles.pagerental');
            });















    //   Phần của toàn      
          

    
});








Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');













//Quyền admin

  Route::prefix('admin')->name('admin.')->middleware('is_admin')->group(function(){
    Route::get('/', function () {
        return view('AdminHome');
    });

   //Của A Thiện 
    Route::get('users', [AccountController::class,"index"])->name('userlist');
    Route::get('create', [AccountController::class, "create"]);
    Route::post('post', [AccountController::class, "postCreate"]);
    Route::get('resetPass/{id}', [AccountController::class, "resetPassword"]);














    //   Phần của toàn      
          

    
});








Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');













//Quyền admin

  Route::prefix('admin')->name('admin.')->middleware('is_admin:admin')->group(function(){
    Route::get('/', function () {
        return view('AdminHome');
    });

   //Của A Thiện 
    Route::get('/index',[AccountController::class,"index"]);
    Route::get('/create',[AccountController::class,"create"]);
    Route::post('/postCreate', [AccountController::class, "postCreate"]);
    Route::get('/update/{id}', [AccountController::class, "update"]);
    Route::post('/postUpdate/{id}', [AccountController::class, "postUpdate"]);
    Route::get('/delete/{id}', [AccountController::class, "delete"]);




  

   //Admin của a Vương 
    Route::get('rental', 'RentalController@index')->name('rental');
    Route::get('active-rental', 'RentalController@active')->name('active-rental');
    Route::get('deny-rental', 'RentalController@deny')->name('deny-rental');
    Route::get('rental/view/{car_id}', 'RentalController@view')->name('rental.view');
    Route::post('rental/approval/{car_id}', 'RentalController@approval')->name('rental.approval');
    Route::get('rental/delete/{car_id}', 'RentalController@delete')->name('rental.delete');
    Route::get('rental/image/{car_id}', 'RentalController@carimg')->name('rental.image');







   //Admin của Tâm  
    Route::get('mfg',[MGFCarController::class, "index"])->name('mfg-index');
    Route::get('mfg/create','MGFCarController@create')->name('mfg-create');
    Route::post('mfg/postCreate','MGFCarController@postCreate')->name('mfg-post-create');
    Route::get('mfg/update/{mfg_id}', 'MGFCarController@update')->name('mfg-update');
    Route::post('mfg/postUpdate/{mfg_id}','MGFCarController@postUpdate');
    Route::get('mfg/delete/{mfg_id}', 'MGFCarController@delete')->name('mfg-delete');

    Route::get('model','ModelcarController@index')->name('model-index');
    Route::get('model/create','ModelcarController@create')->name('model-create');
    Route::post('model/postCreate','ModelcarController@postCreate')->name('model-post-create');
    Route::get('model/update/{type_id}', 'ModelcarController@update')->name('model-update');
    Route::post('model/postUpdate/{type_id}','ModelcarController@postUpdate');
    Route::get('model/delete/{type_id}', 'ModelcarController@delete')->name('model-delete');






   //Admin của Nhân 
    Route::get('rentalcontract/',[RentalContract::class,"getlist"])->name('rentalcontract');
    Route::get('rentalcontract/xemchitiet/{id}', [RentalContract::class, "detailsrentaladmin"]);




    //Admin của Toàn
        Route::get('/admin/blog', [BlogController::class,"get"]);
        Route::get('/admin/blog/createBlog',[BlogController::class,'createBlog']);
        Route::post('/admin/blog/postCreateBlog',[BlogController::class,'postCreateBlog']);
        Route::get('/admin/blog/editBlog/{blog_id}',[BlogController::class,'editBlog']);
        Route::post('/admin/blog/editPostBlog',[BlogController::class,'editPostBlog']);
        Route::get('/admin/blog/delete/{blog_id}',[BlogController::class,'deleteBlog']);



    //Admin của Toàn
        Route::get('/admin/blog', [BlogController::class,"get"]);
        Route::get('/admin/blog/createBlog',[BlogController::class,'createBlog']);
        Route::post('/admin/blog/postCreateBlog',[BlogController::class,'postCreateBlog']);
        Route::get('/admin/blog/editBlog/{blog_id}',[BlogController::class,'editBlog']);
        Route::post('/admin/blog/editPostBlog',[BlogController::class,'editPostBlog']);
        Route::get('/admin/blog/delete/{blog_id}',[BlogController::class,'deleteBlog']);


  });










//----------------------------------------------------------------------------------------------------------






//----------------------------------------------------------------------------------------------------------






//----------------------------------------------------------------------------------------------------------




//----------------------------------------------------------------------------------------------------------

// Route::get('/user-profile', function () {
//     return view('user-profile');
// });



// Route::get('user/index', [UserController::class, "index"]);
// Route::get('user/create', [UserController::class, "create"]);
// Route::post('user/postCreate', [UserController::class, "postCreate"]);
// Route::get('user/update/{id}', [UserController::class, "update"]);
// Route::post('user/postUpdate/{id}', [UserController::class, "postUpdate"]);
// Route::get('user/delete/{id}', [UserController::class, "delete"]);


//Route cho user
// Route::prefix('user')->name('user')->middleware('checkLogin:admin,user')->group(function(){
//     Route::get('profile/{id}',[AccountController::class,"details"]);    
// });


//Route cho admin
// Route::prefix('admin')->name('admin.')->middleware('isAdmin')->group(function(){



//blog

