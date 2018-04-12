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
    public function storemgtcategory()
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

      return view('storemgtcategory',['store'=>$store,'current'=>$current,'wallpaper'=>$wallpaper]);
    }

    public function membercategory()
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

      return view('membercategory',['store'=>$store,'current'=>$current,'wallpaper'=>$wallpaper]);
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
        $member=DB::table('customer_list')
        ->whereRaw('IC_No="'.$icno.'"')
        ->get();
      }
      elseif($contactnumber)
      {
        $member=DB::table('customer_list')//from phpmyadmin
        ->whereRaw('Contact_No="'.$contactnumber.'"')
        ->get();
      }

       if(sizeof($member)>0)
       {
         $input = $request->all();

         $member = DB::table('customer_list')
         ->where('Contact_No', $contactnumber)
         ->orwhere('IC_No', $icno)
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

        $id = DB::table('customer_list')->insertGetId(
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
    
    public function storemgtcategory()
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

      return view('storemgtcategory',['store'=>$store,'current'=>$current,'wallpaper'=>$wallpaper]);
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
        public function summaryredemption() //Firdaus - 03/04/2018
    {

      $wallpaper = DB::table('image')
      ->select('image.*')
      ->first();

      $redemption1 = DB::table('redemption')
          ->join('store_list', 'redemption.store', '=', 'store_list.Store')
          ->select('redemption.*','store_list.Store','store_list.Name',DB::raw('COUNT(redemption.redemption_id) AS total_quantity'))
          ->groupby('store_list.Name')
          ->orderby('store_list.Store')
          ->get();

      // $redemption1 = DB::select(DB::raw('
      // SELECT s.Name, s.Store, r.redemption_alu, r.redemption_dcs, COUNT(r.redemption_id) AS total_quantity
      // FROM redemption r
      // LEFT JOIN store_list s ON (s.Store = r.store)
      // GROUP BY s.Name
      // ORDER BY s.Store ASC
      // '));

      $redemption4 = DB::table('redemption')
          ->rightjoin('customer_list', 'redemption.customer_id', '=', 'customer_list.Cust_ID')
          ->select('redemption.*','customer_list.Name','customer_list.DOB','customer_list.Category','customer_list.Region','customer_list.Race','customer_list.Email')
          ->orderby('redemption.redemption_id')
          ->get();

      $redemption6 = DB::table('redemption')
          ->rightjoin('customer_list', 'redemption.customer_id', '=', 'customer_list.Cust_ID')
          ->select('redemption.*','customer_list.Name','customer_list.DOB','customer_list.Total_Unit','customer_list.Visits','customer_list.Total_Sale')
          ->orderby('customer_list.Name')
          ->get();

      // $redemption1_1 = DB::table('redemption')
      //     ->sum('redemption_quantity')
      //     ->union($redemption1);

      // $redemption1 = DB::select(
      //   'SELECT r.redemption_alu, r.redemption_dcs, s.Name, s.Store
      //    FROM redemption r
      //    LEFT JOIN store_list s ON (s.Store = r.store)
      //
      //    UNION ALL
      //
      //    SELECT "TOTAL" redemption_alu, COUNT (redemption_quantity)
      //    FROM redemption'
      // );

      // $redemption3 = DB::select(
      //   'SELECT r.redemption_alu, r.redemption_dcs
      //    FROM redemption r
      //    LEFT JOIN ');

      $redemption2 = DB::table('customer_list')
          ->join('store_list', 'store_list.Store', '=', 'customer_list.Str_Code')
          ->select('customer_list.*','store_list.Name', 'store_list.Store')
          ->get();

      // $redemption4 = DB::table('redemption')
      //     ->join('store_list', 'redemption.customer_id', '=', 'customer_list.Cust_ID')
      //     ->select('customer_list.*','redemption.redemption_id')
      //     ->get();
      //
      // $redemption5 = DB::table('redemption')
      //     ->join('customer_list', 'redemption.customer_id', '=', 'customer_list.Cust_ID')
      //     ->select('customer_list.*','redemption.redemption_id')
      //     ->get();
      //
      // $redemption6 = DB::table('redemption')
      //     ->join('customer_list', 'redemption.customer_id', '=', 'customer_list.Cust_ID')
      //     ->select('customer_list.*','redemption.redemption_id')
      //     //->sum()
      //     ->get();


        return view('summaryredemption',['wallpaper'=>$wallpaper],['redemption1'=>$redemption1])->with(['redemption2'=>$redemption2])->with(['redemption4'=>$redemption4])
        ->with(['redemption6'=>$redemption6]);
    }

    public function summarysales() //Firdaus - 03/04/2018
    {

      $wallpaper = DB::table('image')
      ->select('image.*')
      ->first();

      $sales3 = DB::table('sales_receipt_summary')
          ->rightjoin('store_list', 'sales_receipt_summary.Store', '=', 'store_list.Store')
          ->select('sales_receipt_summary.*','store_list.Name')
          ->orderby('store_list.Store','ASC')
          ->get();

      $sales5 = DB::table('customer_list')
          ->join('store_list', 'customer_list.Str_Code', '=', 'store_list.Store')
          ->select('store_list.*',DB::raw('COUNT(CASE WHEN customer_list.Region = "Malaysia" THEN 1 ELSE NULL END) as "Local"'),DB::raw('COUNT(CASE WHEN customer_list.Region != "Malaysia" THEN 1 ELSE NULL END) as "Foreigner"'))
          ->groupby('store_list.Name')
          ->orderby('store_list.Store', 'ASC')
          ->get();

        return view('summarysales',['wallpaper'=>$wallpaper],['sales3'=>$sales3])->with(['sales5'=>$sales5]);
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
    
        $data=DB::table('stocks')
        ->inRandomOrder()
        ->where('Quantity','>', 0)
        ->take(20)
        ->get();
        
        $product_img=DB::table('redemption_image')
        ->select("redemption_image.*")
        ->get();
        return view ('redemptgift', ['store'=>$store,'redemptgift'=>$redemptgift,'current'=>$current,'wallpaper'=>$wallpaper,'data' =>$data,'product_img' =>$product_img]);
    }
    public function redemptvalidate(Request $request)
    {   
      
        $wallpaper = DB::table('image')
        ->select('image.*')
        ->first();
        $input = $request->all();

        if($input["product_value"] == null)
              return back();
        else
        {   
            $confirmation=DB::table('redemption')->insertGetId(
                [
                  'redemption_alu' => $input["product_value"],
                  'redemption_dcs' => $input["product_dcs"],
                  'redemption_dt' => Carbon::now('Asia/Kuala_Lumpur'),
                  'method' => $input["method"],
                  'customer_id' => $input['cust_id'],
                ]
              );
            DB::table('stocks')
            ->where('ALU','=', $input["product_value"])
            ->decrement('Quantity');

            return view('redemptconfirmation',['wallpaper'=>$wallpaper]);
        }
            
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
