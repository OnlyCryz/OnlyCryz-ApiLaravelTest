<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        //$status= DB::connection('sybase')->select(DB::raw("SELECT * FROM am_ains'"));

        // Facade
        $status = DB::connection('sybase')->table('am_ains')->get();
      //$books = DB::connection('odbc-connection-name')->table('books')->where('Author', 'Abram Andrea')->get();
        // ORM
        //$books = Book::where('Author', 'Abram Andrea')->get();


        return response()->json([
            'message' => 'Consulta base de datos Sibase',
            "data" => $status,
        ]);
        //return view('user.index', ['users' => $users]);

        // $status= DB::connection('sybase')
        // ->select(DB::raw("SELECT * FROM batch_status"));
        // dd($status);
    }
}
