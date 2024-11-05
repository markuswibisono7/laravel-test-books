<?php


namespace App\Http\Controllers;

//import Model "Post
use App\Models\Post;

//return type View
use Illuminate\View\View;

use Illuminate\Http\Request;




use App\Models\InsertBukuModel;


use App\Models\InsertAuthorsModel;


use App\Models\UbahBukuModel;

use App\Models\UbahAuthorsModel;

use App\Models\HapusBukuModel;

use App\Models\HapusAuthorsModel;


use DB;

class ProdukController extends Controller
{

    public function tampilbuku()
    {

        

        $buku =DB::table('tbbooks')
                ->join('tbauthors','tbbooks.author_id', '=', 'tbauthors.id')
                ->select('tbbooks.id as id','tbbooks.title as title', 'tbbooks.serial_number as serial_number', 'tbbooks.published_at as published_at', 'tbauthors.name as nama_penerbit')
                ->get();


            return view('welcome', ['buku' => $buku]);

    }
    
    public function tambahbuku()
    {

        
        $buku =DB::table('tbauthors')
                ->select('id')
                ->get();
                

        return view('tambahbuku', ['buku' => $buku]);
    }

	public function getindexbuku() {   

		header('Access-Control-Allow-Origin: *');

        $buku =DB::table('tbauthors')
        ->select('id as totaldata')
        ->orderBy('id', 'DESC')
        ->limit('1')
        ->get();


        echo json_encode($buku);

	}

    

    public function simpanbuku(Request $request) {

        $innsertbuku = InsertBukuModel::create([
            'title' => $request->textjudulbuku,
            'serial_number' => $request->textserialnumber,
            'published_at' => $request->textpenerbit,
            'author_id'=>$request->idautors,
            'created_at' => date("Y-m-d"),
            'updated_at' => NULL,
        ]);

        
        $innsertauthors = InsertAuthorsModel::create([
            'name' => $request->textpenulis,
            'email' => $request->textemailpenulis,
            'created_at' => date("Y-m-d"),
            'updated_at' => NULL,
        ]);

        
        return redirect()->route('tampilbuku');

    }

    public function formeditbuku($id)
    {

        $buku =DB::table('tbbooks')
                ->join('tbauthors','tbbooks.author_id', '=', 'tbauthors.id')
                ->where('tbbooks.id', '=', $id)
                ->select('tbbooks.id as id','tbbooks.title as title',  'tbbooks.serial_number as serial_number', 'tbbooks.published_at as published_at', 'tbauthors.name as penulis', 'tbauthors.email as emailpenulis')
                ->get();

        return view('formedit', ['buku' => $buku]);
    }


    public function ubahbuku(Request $request)
    {



        $ubahbuku = UbahBukuModel::where('id', $request->ideditbuku)
        ->update([
               'title' => $request->textjudulbuku,
               'serial_number' => $request->textserialnumber,
               'published_at' => $request->textpenerbit,
               'updated_at' => date("Y-m-d"),
        ]);

        $ubahauthors = UbahAuthorsModel::where('id', $request->ideditbuku)
        ->update([
               'name' => $request->textpenulis,
               'email' => $request->textemailpenulis,
               'updated_at' => date("Y-m-d"),
        ]);


         return redirect()->route('tampilbuku');

       
    }



    public function deletebuku($id) {


    
         $deletebuku = HapusBukuModel::where('id', $id)
         ->delete();


         $deleteauthors = HapusAuthorsModel::where('id', $id)
         ->delete();

         return redirect()->route('tampilbuku');

    }

}

