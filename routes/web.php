<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\Admincontroller;
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
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\TutorialController;
use App\Http\Controllers\TravelerController;

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

    $p = CarMFG::all();
    return view('index',compact('p'));
})->name('homepage');


Route::get('/searchcar', function () {
    return view('user/searchcar');
});

//Search car

Route::get('/searchcar', [SearchCar::class, "search"])->name("searchcar");
Route::get('/searchcar/filter', [SearchCar::class, "filter"])->name("filter");


Route::get('/searchcar/profile', [RentalContract::class, "carprofile"])->name("carprofile");

Route::get('/searchcar/profile/checkday', [RentalContract::class, "checkdate"])->name("checkday");


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

Route::get('user/profile/{user}',[ProfilesController::class,"index"]);

Route::get('/blog', [BlogController::class,"blog"]);




//Quyền user 


Route::prefix('user')->middleware('checklogin:admin,user')->group(function() {


    //Phần anh Thiện

            Route::get('/index',[AccountController::class,"index"]);
            Route::get('/create',[AccountController::class,"create"]);
            Route::post('/postCreate', [AccountController::class, "postCreate"]);
            Route::get('/update/{id}', [AccountController::class, "update"]);
            Route::post('/postUpdate/{id}', [AccountController::class, "postUpdate"]);
            Route::get('/delete/{id}', [AccountController::class, "delete"]);



            //Route user view profile or edit profile
            Route::get('/profile',[ProfilesController::class,"viewSelfProfile"]);
            Route::get('/profile/{user}/edit',[ProfilesController::class,"edit"])->name('profiles.edit');
            Route::patch('/profile/{user}/update',[ProfilesController::class,"update"]);

            //Changing password
            Route::get('change-password', [ChangePasswordController::class, 'index']);
            Route::post('change-password', [ChangePasswordController::class, 'store'])->name('change.password');






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

            Route::get('triphistory/review/{contract_id}', 'ReviewController@review')->name('review.create');
            Route::post('triphistory/postreview', 'ReviewController@postReview')->name('review.post');














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

  Route::prefix('admin')->name('admin.')->middleware('checklogin:admin')->group(function(){
      
 
   //Của A Thiện 
    Route::get('users', [AccountController::class,"index"])->name('userlist');
    Route::get('gplx',[AccountController::class,"index1"]);
    Route::get('create', [AccountController::class, "create"]);
    Route::post('post', [AccountController::class, "postCreate"]);
    Route::get('resetPass/{id}', [AccountController::class, "resetPassword"]);














    //   Phần của toàn      
          

    
});








Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');













//Quyền admin

  Route::prefix('admin')->name('admin.')->middleware('is_admin:admin')->group(function(){


    Route::get('/', [Admincontroller::class,"viewadmin"])->name('home');

   //Của A Thiện 
    Route::get('/index',[AccountController::class,"index"]);
    Route::get('/create',[AccountController::class,"create"]);
    Route::post('/postCreate', [AccountController::class, "postCreate"]);
    Route::get('/update/{id}', [AccountController::class, "update"]);
    Route::post('/postUpdate/{id}', [AccountController::class, "postUpdate"]);
    Route::get('/delete/{id}', [AccountController::class, "delete"]);




  

   //Admin của a Vương 
    Route::get('rental', 'RentalController@index')->name('rental');
    Route::get('waiting-rental', 'RentalController@waiting')->name('waiting-rental');
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
        Route::get('/blog', [BlogController::class,"get"]);
        Route::get('/blog/createBlog',[BlogController::class,'createBlog']);
        Route::post('/blog/postCreateBlog',[BlogController::class,'postCreateBlog']);
        Route::get('/blog/editBlog/{blog_id}',[BlogController::class,'editBlog']);
        Route::post('/blog/editPostBlog',[BlogController::class,'editPostBlog']);
        Route::get('/blog/delete/{blog_id}',[BlogController::class,'deleteBlog']);


  });

//Tutorial
Route::get('/tutorial1', [TutorialController::class, "tutorial1"]);
Route::get('/tutorial2', [TutorialController::class, "tutorial2"]);
Route::get('/tutorial3', [TutorialController::class, "tutorial3"]);
Route::get('/tutorial4', [TutorialController::class, "tutorial4"]);

//Terms
Route::get('/PolicieRegulation', [TutorialController::class, "PolicieRegulation"]);
Route::get('/Term', [TutorialController::class, "Term"]);
Route::get('/Regu', [TutorialController::class, "Regu"]);
Route::get('/Personalinfo', [TutorialController::class, "Personalinfo"]);
Route::get('/Resolveconflic', [TutorialController::class, "Resolveconflic"]);

//AboutUs
Route::get('/AboutUs', [TutorialController::class, "AboutUs"]);
Route::get('/Features', [TutorialController::class, "Features"]);
Route::get('/Renterbenef', [TutorialController::class, "Renterbenef"]);
Route::get('/Ownerbenef', [TutorialController::class, "Ownerbenef"]);
Route::get('/Carregishowto', [TutorialController::class, "Carregishowto"]);
Route::get('/Procedure1', [TutorialController::class, "Procedure1"]);
Route::get('/Procedure2', [TutorialController::class, "Procedure2"]);



Route::get('test',[SearchCar::class, "testajax1"]);

//AQ
Route::get('/AQ', [OwnerController::class, "AQ"]);

//Owner
Route::get('/AQ/owner/ctgtcxm', [OwnerController::class, "ctgtcxm"]);
Route::get('/AQ/owner/cxhc', [OwnerController::class, "cxhc"]);
Route::get('/AQ/owner/datxenhanh', [OwnerController::class, "datxenhanh"]);
Route::get('/AQ/owner/dgscd', [OwnerController::class, "dgscd"]);
Route::get('/AQ/owner/dvtxctx', [OwnerController::class, "dvtxctx"]);
Route::get('/AQ/owner/dyctx', [OwnerController::class, "dyctx"]);
Route::get('/AQ/owner/gbhcd', [OwnerController::class, "gbhcd"]);
Route::get('/AQ/owner/giaonhanxe', [OwnerController::class, "giaonhanxe"]);
Route::get('/AQ/owner/gttttx', [OwnerController::class, "gttttx"]);
Route::get('/AQ/owner/huongdanchung', [OwnerController::class, "huongdanchung"]);
Route::get('/AQ/owner/khc', [OwnerController::class, "khc"]);
Route::get('/AQ/owner/lichban', [OwnerController::class, "lichban"]);
Route::get('/AQ/owner/phivanhanh', [OwnerController::class, "phivanhanh"]);
Route::get('/AQ/owner/rtqvmi', [OwnerController::class, "rtqvmi"]);
Route::get('/AQ/owner/thongtinxe', [OwnerController::class, "thongtinxe"]);
Route::get('/AQ/owner/thutuc', [OwnerController::class, "thutuc"]);
Route::get('/AQ/owner/tngps', [OwnerController::class, "tngps"]);
Route::get('/AQ/owner/tphd', [OwnerController::class, "tphd"]);
Route::get('/AQ/owner/ttdcx', [OwnerController::class, "ttdcx"]);
Route::get('/AQ/owner/xhxtud', [OwnerController::class, "xhxtud"]);
Route::get('/AQ/owner/xlsc', [OwnerController::class, "xlsc"]);

//traveler
Route::get('/AQ/traveler/bh2cktx', [TravelerController::class, "bh2cktx"]);
Route::get('/AQ/traveler/cxhc', [TravelerController::class, "cxhc"]);
Route::get('/AQ/traveler/dc', [TravelerController::class, "dc"]);
Route::get('/AQ/traveler/dgscd', [TravelerController::class, "dgscd"]);
Route::get('/AQ/traveler/dgscd2', [TravelerController::class, "dgscd2"]);
Route::get('/AQ/traveler/dx', [TravelerController::class, "dx"]);
Route::get('/AQ/traveler/gbhcd', [TravelerController::class, "gbhcd"]);
Route::get('/AQ/traveler/ghqd', [TravelerController::class, "ghqd"]);
Route::get('/AQ/traveler/gnx', [TravelerController::class, "gnx"]);
Route::get('/AQ/traveler/gttttx', [TravelerController::class, "gttttx"]);
Route::get('/AQ/traveler/gxtn', [TravelerController::class, "gxtn"]);
Route::get('/AQ/traveler/gyctx', [TravelerController::class, "gyctx"]);
Route::get('/AQ/traveler/hcsdc', [TravelerController::class, "hcsdc"]);
Route::get('/AQ/traveler/hddx', [TravelerController::class, "hddx"]);
Route::get('/AQ/traveler/ht', [TravelerController::class, "ht"]);
Route::get('/AQ/traveler/ktscd', [TravelerController::class, "ktcsd"]);
Route::get('/AQ/traveler/mihtkcsc', [TravelerController::class, "mihtkcsc"]);
Route::get('/AQ/traveler/ptx', [TravelerController::class, "ptx"]);
Route::get('/AQ/traveler/qltx', [TravelerController::class, "qltx"]);
Route::get('/AQ/traveler/tgtxvtggn', [TravelerController::class, "tgtxvtggn"]);
Route::get('/AQ/traveler/txtc', [TravelerController::class, "txtc"]);
Route::get('/AQ/traveler/txthtxcg', [TravelerController::class, "txthtxcg"]);
Route::get('/AQ/traveler/udkgtbb', [TravelerController::class, "udkgtbb"]);
Route::get('/AQ/traveler/xtmi', [TravelerController::class, "xtmi"]);

Route::get('/admin/blog/detail/{blog_id}', [BlogController::class, 'DetailBlog']);
Route::post('/admin/blog/DetailPostBlog', [BlogController::class, 'DetailPostBlog']);

Route::get('/admin/blog/editBlog/{blog_id}', [BlogController::class, 'editBlog']);
Route::post('/admin/blog/editPostBlog', [BlogController::class, 'editPostBlog']);

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
