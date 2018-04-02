<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Excel;
Use App\Store_list;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     public function login()
     {
       $wallpaper = DB::table('image')
       ->select('image.*')
       ->first();

         return view('auth.login',['wallpaper'=>$wallpaper]);
     }
     public function setting()
     {
       $wallpaper = DB::table('image')
       ->select('image.*')
       ->first();

        return view('setting',['wallpaper'=>$wallpaper]);
     }
     public function admindashboard()
     {
       $wallpaper = DB::table('image')
       ->select('image.*')
       ->first();

         return view('admindashboard',['wallpaper'=>$wallpaper]);
     }
     public function newstore()
     {
       $wallpaper = DB::table('image')
       ->select('image.*')
       ->first();

         return view('newstore',['wallpaper'=>$wallpaper]);
     }
     public function addstore(Request $request )
     {
       $input = $request->all();

         $id = DB::table('users')->insertGetId(
           [
             'name' => $input["store_name"],
             'email' => $input["store_email"],
             'password' => bcrypt($input["store_password"]),
             'usertype' => $input["usertype"],
           ]
         );

         $wallpaper = DB::table('image')
         ->select('image.*')
         ->first();

         return view('addstoremessage',['wallpaper'=>$wallpaper]);
     }
     public function availablesummary()
     {
       $wallpaper = DB::table('image')
       ->select('image.*')
       ->first();

         return view('availablesummary',['wallpaper'=>$wallpaper]);
     }
     public function newuser()
     {
       $wallpaper = DB::table('image')
       ->select('image.*')
       ->first();

         return view('newuser',['wallpaper'=>$wallpaper]);
     }
     public function adduser(Request $request )
     {
       $input = $request->all();

         $id = DB::table('users')->insertGetId(
           [
             'name' => $input["username"],
             'email' => $input["useremail"],
             'password' => bcrypt($input["password"]),
             'usertype' => $input["usertype"],
           ]
         );

         $wallpaper = DB::table('image')
         ->select('image.*')
         ->first();

         return view('addusermessage',['wallpaper'=>$wallpaper]);
     }
     public function addusermessage()
     {
       $wallpaper = DB::table('image')
       ->select('image.*')
       ->first();

         return view('addusermessage',['wallpaper'=>$wallpaper]);
     }
     public function addstoremessage()
     {
       $wallpaper = DB::table('image')
       ->select('image.*')
       ->first();

         return view('addstoremessage',['wallpaper'=>$wallpaper]);
     }
     public function stock()
     {
       $wallpaper = DB::table('image')
       ->select('image.*')
       ->first();

         return view('stock',['wallpaper'=>$wallpaper]);
     }
     public function newstock(Request $request)
     {
       $input = $request->all();

         $id = DB::table('stocks')->insertGetId(
           [
             'Name' => $input["itemname"],
             'Quantity' => $input["quantity"],
           ]
         );

         $wallpaper = DB::table('image')
         ->select('image.*')
         ->first();

         return view('stock',['wallpaper'=>$wallpaper]);
     }
     public function changewallpaper()
     {
       $wallpaper = DB::table('image')
       ->select('image.*')
       ->first();

         return view('changewallpaper',['wallpaper'=>$wallpaper]);
     }
     public function savewallpaper(Request $request)
     {
        $input = $request->all();
    		$type="User";
    		$uploadcount=1;
    			//$file = Input::file('profilepicture');
    			if ($request->hasFile('wallpaper')) {
    				$file = $request->file('wallpaper');
    				$destinationPath=public_path()."/private/upload/User";
    				$extension = $file->getClientOriginalExtension();
    				$originalName=$file->getClientOriginalName();
    				$fileSize=$file->getSize();
    				$fileName=time()."_".$uploadcount.".".$extension;
    				$upload_success = $file->move($destinationPath, $fileName);
    				DB::table('image')->update(
    					['Type' => $type,
    					 'File_Name' => $originalName,
    					 'File_Size' => $fileSize,
    					 'Web_Path' => '/private/upload/User/'.$fileName
    					]
    				);

            $wallpaper = DB::table('image')
            ->select('image.*')
            ->first();

    				return view('savewallpapermessage',['wallpaper'=>$wallpaper]);
    			}
    			else {
    				return 0;
    			}
    	}
      public function savewallpapermessage()
      {
        $wallpaper = DB::table('image')
        ->select('image.*')
        ->first();

        return view('savewallpapermessage',['wallpaper'=>$wallpaper]);
      }
      public function import(){

        $wallpaper = DB::table('image')
        ->select('image.*')
        ->first();

        return view ('import',['wallpaper'=>$wallpaper]);

      }
      public function importedfiles(){

        $wallpaper = DB::table('image')
        ->select('image.*')
        ->first();

        return view ('importedfiles',['wallpaper'=>$wallpaper]);

      }

      public function importExport()
      {
          return view('importExport');
      }

      // Firdaus - 21/3/2018
      // public function downloadExcel($type)
      // {
      //     $data = Item::get()->toArray();
      //     return Excel::create('itsolutionstuff_example', function($excel) use ($data)
      //     {
      //           $excel->sheet('mySheet', function($sheet) use ($data)
      //           {
      //             $sheet->fromArray($data);
      //           });
      //     })->download($type);
      // }

      public function importExcelCustomerList()
      {
          if(Input::hasFile('import_file')){
        // if(Input::get('import_file_name') == 'customer_list'){
          {    
                $path = Input::file('import_file')->getRealPath();
                $data = Excel::load($path, function($reader)
                {

                })->get();
                $query = sprintf("LOAD DATA LOCAL INFILE '%s' INTO TABLE customer_list
            FIELDS TERMINATED BY ','
            OPTIONALLY ENCLOSED BY '\"'
            LINES TERMINATED BY '\n'
            IGNORE 1 LINES 
            (`Str_Code`,`Cust_ID`,`Last`,`First`,`Phone1`,`Info1`,`Last_Sale_Dt`,`Category`,`Prc_Lvl`,`Name`,`Total_Unit`,`Total_Sale`,`Total_Trans`,`Visits`,`Created_By`,`Create_Dt`,`Race`,`Region`,`Email`)", addslashes($path));

            DB::connection()->getpdo()->exec($query);
            /*
                if(!empty($data) && $data->count())
                {    
                    foreach ($data as $key => $value)
                    {  
                        $insert[] = [
                                                          'Str_Code' => $value->str_code,
                                                          'Cust_ID' => $value->cust_id,
                                                          'Last' => $value->last,
                                                          'First' => $value->first,
                                                          'Phone1' => $value->phone1,
                                                          'Info1' => $value->info1,
                                                          'Last_Sale_Dt' => $value->last_sale_dt,
                                                          'Category' => $value->category,
                                                          'Prc_Lvl' => $value->prc_lvl,
                                                          'Name' => $value->name,
                                                          'Total_Unit' => $value->total_units,
                                                          'Total_Sale' => $value->total_sales,
                                                          'Total_Trans' => $value->total_trans,
                                                          'Visits' => $value->visits,
                                                          'Created_By' => $value->created_by,
                                                          'Create_Dt' => $value->create_dt,
                                                          'Race' => $value->race,
                                                          'Region' => $value->region,
                                                          'Email' => $value->e_mail
                                    ];
                    }
                    if(!empty($insert))
                    {
                        DB::table('customer_list')->insert($insert);
                        dd('Insert Record successfully.');
                    }
                }*/
            }
            return back();
          }
      }
      

      public function importExcelCustomerSales(Request $request)
      {  
         // if(Input::get('import_file') == 'ca')
          {
          //get file
          $upload=$request->file('import_file');
          $filePath=$upload->getRealPath();
          $path = Input::file('import_file')->getRealPath();
          $data = Excel::load($path, function($reader)
            {
            })
            ->get();
            $query = sprintf("LOAD DATA LOCAL INFILE '%s' INTO TABLE customer_sales
            FIELDS TERMINATED BY ','
            OPTIONALLY ENCLOSED BY '\"'
            LINES TERMINATED BY '\\n' 
            IGNORE 3 LINES 
            (Store_Name ,Customer_Name,Email_Addr,ALU,Item_Name,DCS_Code,INVC_No,Qty_Sold,Orig_Price,Sales,Disc,Price,Orig_Tax)",addslashes($path));

            DB::connection()->getpdo()->exec($query);
            /*
            if(!empty($data) && $data->count())
                {    
                    foreach ($data as $key => $value)
                    {   //echo $value;
                        $insert[] = [
                            'Store_Name' =>  $value ->store_name,
                            'Customer_Name' => $value ->customer_name,
                            'Email_Addr' => $value ->email_addr,
                            'ALU' => $value ->alu,
                            'Item_Name' => $value ->itemname,
                            'DCS_Code' => $value ->dcs_code,
                            'INVC_No' => $value ->invc_no,
                            'Qty_Sold' => $value ->qty_sold,
                            'Orig_Price' => $value ->orig_price,
                            'Sales' => $value ->sales,
                            'Disc' => $value ->disc,
                            'Price' => $value ->price,
                            'Orig_Tax' => $value ->orig_tax
                                    ];
                    }/*
          //skip header (2 rows)
          $row = 1;
          $skip = 3;
          if (($handle = fopen($filePath, 'r')) !== FALSE) {
              for ($i = 0; $i < $skip; $i++) {
                  fgets($handle);
              }

              while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                  $num = count($data);
                  $row++;
                  $insert[]  = [
                                          
                  ];
                  unset($data);
              }*/
              
           /*   if(!empty($insert))
                    {   
                        DB::table('customer_sales')->insert($insert);
                        DB::connection()->disableQueryLog();
                        dd('Insert Record successfully.');
                    }
                    fclose($handle); */
          //}
        }
         return back();

      }


      public function importExcelSalesItemSummary()
      {
          if(Input::hasFile('import_file'))
          {
                $path = Input::file('import_file')->getRealPath();
                $data = Excel::load($path, function($reader)
                {

                })->get();
                $query = sprintf("LOAD DATA LOCAL INFILE '%s' INTO TABLE sales_item_summary
                         FIELDS TERMINATED BY ','
                         OPTIONALLY ENCLOSED BY '\"'
                         LINES TERMINATED BY '\r\n' 
                         IGNORE 6 LINES 
                         (DCS_Code, D, C, S, Description1, @dummy, @dummy, @dummy, ALU, UPC, @dummy, Qty_Sold, Disc, @dummy, Disc_Amt, @dummy, Ext_P, @dummy, Ext_PT)",addslashes($path));

                DB::connection()->getpdo()->exec($query);
                /*
                if(!empty($data) && $data->count())
                {
                    foreach ($data as $key => $value)
                    {   
                        $insert[] = [
                                                          // 'DCS_Code' => $value->{'DCS Code'},
                                                          // 'D' => $value->D,
                                                          // 'C' => $value->C,
                                                          // 'S' => $value->S,
                                                          // 'Description1' => $value->Description1,
                                                          // 'ALU' => $value->ALU,
                                                          // 'UPC' => $value->UPC,
                                                          // 'Qty_Sold' => $value->{'Qty Sold'},
                                                          // 'Disc' => $value->{'Disc %'},
                                                          // 'Disc_Amt' => $value->{'Disc Amt'},
                                                          // 'Ext_P' => $value->{'Ext P$'},
                                                          // 'Ext_PT' => $value->{'Ext P$T$'}

                                                          'DCS_Code' => $value->dcs_code,
                                                          'D' => $value->d,
                                                          'C' => $value->c,
                                                          'S' => $value->s,
                                                          'Description1' => $value->description1,
                                                          'ALU' => $value->alu,
                                                          'UPC' => $value->upc,
                                                          'Qty_Sold' => $value->qty_sold,
                                                          'Disc' => $value->disc,
                                                          'Disc_Amt' => $value->disc_amt,
                                                          'Ext_P' => $value->ext_p,
                                                          'Ext_PT' => $value->ext_pt
                                    ];
                    }
                    if(!empty($insert))
                    {
                        DB::table('sales_item_summary')->insert($insert);
                        dd('Insert Record successfully.');
                    }
                }*/
            }
            return back();
      }

      public function importExcelSalesReceiptSummary()
      {
        $path = Input::file('import_file')->getRealPath();
        $query = sprintf("LOAD DATA LOCAL INFILE '%s' INTO TABLE sales_receipt_summary
                         FIELDS TERMINATED BY ','
                         OPTIONALLY ENCLOSED BY '\"'
                         LINES TERMINATED BY '\r\n' 
                         IGNORE 5 LINES 
                         (Customer_Name, @dummy, @dummy, Store, Rcpt, @Rcpt_date, @Rcpt_time, Tender_Name, @dummy, Ext_Orig_Price, @dummy, Ext_Disc, Ext_Disc_Amt, Ext_P, @dummy, Ext_PT, Rcpt_Tax_Amt, @dummy, Rcpt_Total)
                         SET Rcpt_Date_Time=concat(@Rcpt_date, @Rcpt_time)",addslashes($path));

        DB::connection()->getpdo()->exec($query);
        return back();
      }

      public function importExcelStoreList(Request $request)
      {
          if(Input::get('import_file') == 'ca'){

          //get file
          $upload=$request->file('import_file');
          $filePath=$upload->getRealPath();

          //open and read
          //$file=fopen($filePath, 'r');
          //$header = fgetcsv($file);



          //skip header (6 rows)
          $row = 1;
          $skip = 6;
          if (($handle = fopen($filePath, 'r')) !== FALSE) {
              for ($i = 0; $i < $skip; $i++) {
                  fgets($handle);
              }

              while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                  $num = count($data);
                  $row++;
                  /*for ($c=0; $c < $num; $c++) {
                      //echo $data[$c];
                  }*/
                      $insert[]  = [
                                          'Store' =>  $data[0],
                                          'Name'  =>  $data[1]

                                   ];
              }
              if(!empty($insert))
                    {
                        DB::table('store_list')->insert($insert);
                        dd('Insert Record successfully.');
                    }
              
              //fclose($handle);
          }
        }
         // return back();

      }

      public function importExcelItem()
      {
          if(Input::hasFile('import_file'))
          {
                $path = Input::file('import_file')->getRealPath();
                $data = Excel::load($path, function($reader)
                {

                })->get();
                if(!empty($data) && $data->count())
                {
                    foreach ($data as $key => $value)
                    {
                        $insert[] = [
                                                          'ids' => $value->id,
                                                          'titles' => $value->title,
                                                          'descriptions' => $value->descriptions,
                                                          'store' => $value->store,
                                                          'name' => $value->name
                                    ];
                    }
                    if(!empty($insert))
                    {
                        DB::table('item')->insert($insert);
                        dd('Insert Record successfully.');
                    }
                }
            }
            return back();
      }

      // Import csv for Customer List
      // public function importExcelCustomerList()
      // {
      //     if(Input::hasFile('import_file'))
      //     {
      //           $path = Input::file('import_file')->getRealPath();
      //           $data = Excel::load($path, function($reader)
      //           {
      //
      //           })->get();
      //           if(!empty($data) && $data->count())
      //           {
      //               foreach ($data as $key => $value)
      //               {
      //                   $insert[] = [ 'Str_Code' => $value->Str_Code,
      //                                 'Cust_ID' => $value->Cust_ID
      //                                 // 'Last' => $value->Last,
      //                                 // 'First' => $value->First,
      //                                 // 'Phone1' => $value->Phone1,
      //                                 // 'Info1' => $value->Info1,
      //                                 // 'Last_Sale_Dt' => $value->Last_Sale_Dt,
      //                                 // 'Category' => $value->Category,
      //                                 // 'Prc_Lvl' => $value->Prc_Lvl,
      //                                 // 'Name' => $value->Name,
      //                                 // 'Total_Units' => $value->Total_Units,
      //                                 // 'Total_Sales' => $value->Total_Sales,
      //                                 // 'Total_Trans' => $value->Total_Trans,
      //                                 // 'Visits' => $value->Visits,
      //                                 // 'Created_By' => $value->Created_By,
      //                                 // 'Create_Dt' => $value->Create_Dt,
      //                                 // 'Race' => $value->Race,
      //                                 // 'Region' => $value->Region,
      //                                 // 'Email' => $value->Email
      //                               ];
      //               }
      //               if(!empty($insert))
      //               {
      //                   DB::table('customer_list')->insert($insert);
      //                   dd('Insert Record successfully.');
      //               }
      //           }
      //       }
      //       return back();
      // }

      // Import csv for Total Sales Transaction Record
       public function importExcelTotalSalesTransactionRecord()
       {
          // if(Input::hasFile('import_file'))
           {     
                 $path = Input::file('import_file')->getRealPath();
                 $data = Excel::load($path, function($reader)
                 {
      
                 })->get();
                 if(!empty($data) && $data->count())
                 {   
                     foreach ($data as $key => $value)
                     {
                         $insert[] = [ 'STORE_NAME' => $value->STORE_NAME,
                                       'CUSTOMER_NAME' => $value->CUSTOMER_NAME,
                                       'INVC_NO' => $value->INVC_NO,
                                       'RollingMonth' => $value->RollingMonth,
                                       'DCS_CODE' => $value->DCS_CODE,
                                       'ALU' => $value->ALU,
                                       'ITEMNAME' => $value->ITEMNAME,
                                       'Year' => $value->Year,
                                       'Qty Sold' => $value->Qty_Sold,
                                       'Orig Price' => $value->Orig_Price,
                                       'Sales' => $value->Sales,
                                       'Disc %' => $value->Disc,
                                       'Price' => $value->Price,
                                       'Orig Tax' => $value->Orig_Tax
                                     ];
                     }
                     if(!empty($insert))
                     {
                         DB::table('total_sales_transaction')->insert($insert);
                         dd('Insert Record successfully.');
                     }
                 }
             }
      //       return back();
       }
      // Firdaus - 21/3/2018
}