<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon ;
use DateTime;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user = Auth::user();

      // dd($auth->usertype);
      date_default_timezone_set('Asia/Kuala_Lumpur');
      $current = Carbon::now();
      $current = new Carbon();

      $store = DB::table('users')
      ->select('users.*')
      ->where('users.id','=',$user->id)
      ->first();

      $wallpaper = DB::table('image')
      ->select('image.*')
      ->first();

      return view('home',['store'=>$store,'current'=>$current,'wallpaper'=>$wallpaper]);
    }

    public function membership()
    {
      $wallpaper = DB::table('image')
      ->select('image.*')
      ->first();

      return view('membership',['wallpaper'=>$wallpaper]);
    }
    public function memberlogin()
    {
        $user = Auth::user();

        date_default_timezone_set('Asia/Kuala_Lumpur');
        $current = Carbon::now();
        $current = new Carbon();

        $store = DB::table('users')
        ->select('users.*')
        ->where('users.id','=',$user->id)
        ->first();

        $wallpaper = DB::table('image')
        ->select('image.*')
        ->first();

        return view('memberlogin',['store'=>$store,'current'=>$current,'wallpaper'=>$wallpaper]);
    }
    public function redempt(Request $request)
    {
      $user = Auth::user();

      date_default_timezone_set('Asia/Kuala_Lumpur');
      $current = Carbon::now();
      $current = new Carbon();

      $store = DB::table('users')
      ->select('users.*')
      ->where('users.id','=',$user->id)
      ->first();

      $wallpaper = DB::table('image')
      ->select('image.*')
      ->first();

      $input=$request->all();
      $icno=$input['ic_number'];
      $contactnumber=$input['contact_number'];

      if($icno)
      {
        $member=DB::table('member')
        ->whereRaw('IC_No="'.$icno.'"')
        ->get();
      }
      elseif($contactnumber)
      {
        $member=DB::table('member')//from phpmyadmin
        ->whereRaw('Contact_No="'.$contactnumber.'"')
        ->get();
      }

       if(sizeof($member)>0)
       {
         $input = $request->all();

         $member = DB::table('member')
         ->whereRaw('Contact_No="'.$contactnumber.'" OR IC_No="'.$icno.'"')
         ->get();

         return view('identityconfirmation',['member'=>$member,'store'=>$store,'current'=>$current,'wallpaper'=>$wallpaper]);
       }else {
        return Redirect::to('/memberlogin')->with('message', 'Ops your data is incorrect');
       }

       return 1;
    }
    public function memberregister()
    {
      $user = Auth::user();

      date_default_timezone_set('Asia/Kuala_Lumpur');
      $current = Carbon::now();
      $current = new Carbon();

      $store = DB::table('users')
      ->select('users.*')
      ->where('users.id','=',$user->id)
      ->first();

      $wallpaper = DB::table('image')
      ->select('image.*')
      ->first();

      return view('memberregister',['store'=>$store,'current'=>$current,'wallpaper'=>$wallpaper]);
    }

    public function memberregister1(Request $request )
    {
      $input = $request->all();

        $id = DB::table('member')->insertGetId(
          [
            'First' => $input["firstname"],
            'Last' => $input["lastname"],
            'IC_No' => $input["IC_No"],
            'DOB' => $input["DOB"],
            'Contact_No' => $input["Contact_No"],
            'Email' => $input["Email"],
          ]
        );

        $wallpaper = DB::table('image')
        ->select('image.*')
        ->first();

        return view('success',['wallpaper'=>$wallpaper]);
    }
    public function register()
    {
      $wallpaper = DB::table('image')
      ->select('image.*')
      ->first();

        return view('register',['wallpaper'=>$wallpaper]);
    }
    public function promocode()
    {
        $user = Auth::user();

        date_default_timezone_set('Asia/Kuala_Lumpur');
        $current = Carbon::now();
        $current = new Carbon();

        $store = DB::table('users')
        ->select('users.*')
        ->where('users.id','=',$user->id)
        ->first();

        $wallpaper = DB::table('image')
        ->select('image.*')
        ->first();

        return view('promocode',['store'=>$store,'current'=>$current,'wallpaper'=>$wallpaper]);
    }
    public function spinner()
    {
        $user = Auth::user();

        date_default_timezone_set('Asia/Kuala_Lumpur');
        $current = Carbon::now();
        $current = new Carbon();

        $store = DB::table('users')
        ->select('users.*')
        ->where('users.id','=',$user->id)
        ->first();

        $wallpaper = DB::table('image')
        ->select('image.*')
        ->first();

        return view('spinner',['store'=>$store,'current'=>$current,'wallpaper'=>$wallpaper]);
    }
    public function summaryredemption()
    {

      $wallpaper = DB::table('image')
      ->select('image.*')
      ->first();

        return view('summaryredemption',['wallpaper'=>$wallpaper]);
    }
    public function redemptmethod()
    {
      $redemptgift = DB::table('redemptmethod')
      ->select('redemptmethod.*')
      ->first();

      $wallpaper = DB::table('image')
      ->select('image.*')
      ->first();

        return view('redemptmethod', ['redemptgift'=>$redemptgift,'wallpaper'=>$wallpaper]);
    }
    public function savemethod(Request $request)
    {
      $input = $request->all();

        $id = DB::table('redemptmethod')
            ->update(array(
            'value' => $input["method"],
            ));

        $redemptgift = DB::table('redemptmethod')
        ->select('redemptmethod.*')
        ->first();

        $wallpaper = DB::table('image')
        ->select('image.*')
        ->first();

        return view('redemptmethodmessage',['wallpaper'=>$wallpaper]);
    }
    public function redemptgift(){

      $user = Auth::user();

      date_default_timezone_set('Asia/Kuala_Lumpur');
      $current = Carbon::now();
      $current = new Carbon();

      $store = DB::table('users')
      ->select('users.*')
      ->where('users.id','=',$user->id)
      ->first();

      $redemptgift = DB::table('redemptmethod')
      ->select('redemptmethod.*')
      ->first();

      $wallpaper = DB::table('image')
      ->select('image.*')
      ->first();

        return view ('redemptgift', ['store'=>$store,'redemptgift'=>$redemptgift,'current'=>$current,'wallpaper'=>$wallpaper]);
    }
    public function redemptmethodmessage()
    {
      $wallpaper = DB::table('image')
      ->select('image.*')
      ->first();

        return view('redemptmethodmessage',['wallpaper'=>$wallpaper]);
    }
    public function product()
    {
        $user = Auth::user();

        date_default_timezone_set('Asia/Kuala_Lumpur');
        $current = Carbon::now();
        $current = new Carbon();

        $store = DB::table('users')
        ->select('users.*')
        ->where('users.id','=',$user->id)
        ->first();

        $wallpaper = DB::table('image')
        ->select('image.*')
        ->first();

        return view('product',['store'=>$store,'current'=>$current,'wallpaper'=>$wallpaper]);
    }
    public function identityconfirmation()
    {
        $user = Auth::user();

        date_default_timezone_set('Asia/Kuala_Lumpur');
        $current = Carbon::now();
        $current = new Carbon();

        $store = DB::table('users')
        ->select('users.*')
        ->where('users.id','=',$user->id)
        ->first();

        $wallpaper = DB::table('image')
        ->select('image.*')
        ->first();

        return view('identityconfirmation',['store'=>$store,'current'=>$current,'wallpaper'=>$wallpaper]);
    }
}
