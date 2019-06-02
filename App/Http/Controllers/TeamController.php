<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Products;
use App\Teamers;
class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $team = new Teamers();
        $team->name = request('name');
        $team->link = request('link');
        $team->file = request('file');
        $team->save();
        if($request->hasFile('file')){
            
            $team->file->storeAs('public/teamers', $team->name);
            
        }
        return redirect('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $mytable = DB::table('teamers')->get();
        // $mycurrent = DB::table('teamers')->find($id);
        // $mylast = end($mytable);
        
        // if($mycurrent == $mylast)
        // {
        //     dd('what');
        // }
        Teamers::find($id)->delete();
        DB::table('teamers')->update(['id' => DB::raw('GREATEST(id - 1, 0)')]);

        return redirect('admin');

        
    }
}
