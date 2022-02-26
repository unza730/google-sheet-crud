<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SheetDB\SheetDB;
class GoogleSheetController extends Controller
{
   public function get()
   {
     $sheetdb = new SheetDB('ssj5pgxcxpu2z'); 
    $data = $sheetdb->get();
    //  dd($sheetdb->get());
      return view('googlesheet.googlesheet', ['data'=>$data]);
    }

     public function create(Request $request)
    {
         $sheetdb = new SheetDB('ssj5pgxcxpu2z'); 
        $sheetdb->create([
            'name' => $request->name,
            'agentname' => $request->agentname,
            'nooftask' => $request->nooftask,
            'taskstatus' => $request->taskstatus,

        ]);
        //  return view('googlesheet.googlesheet');
        return redirect(route('sheetss'))->with('status', 'Student Added !!');
    }
}
