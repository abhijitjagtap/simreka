<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use DataTables;

class AdminController extends Controller
{
    //

    public function index(Request $request)
    {  
    
        if ($request->ajax()) {
           
            $data = User::latest()->get();
            

            return Datatables::of($data)

                    ->addIndexColumn()

                    ->addColumn('action', function($row){

   

                           $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';

     

                            return $btn;

                    })

                    ->rawColumns(['action'])

                    ->make(true);

        }
       
        return view('admin.views.dashboard');
    }
}
