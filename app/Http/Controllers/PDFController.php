<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function templateOne(){
     return view('admin.pages.template.one');
    }
    public function templateTwo(){
        return view('admin.pages.template.two');
    }
    public function templateThree(){
        return view('admin.pages.template.three');
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
        //
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
        //
    }

    public function generatePDFOne(Request $request)
    {
        $data = [];
        $r = $request->all();
        $s = 1;
        foreach ($r['text'] as $key=>$t){
            $data['t'.$s++] = $t;
        }
        $s = 1;
        foreach ($r['s'] as $key=>$t){
            $data['s'.$s++] = $t;
        }
      // dd($data);

        $pdf = PDF::loadView('myPDF', $data);

        return $pdf->download(strtotime(Carbon::now()).'.pdf');
    }
    public function generatePDFTwo(Request $request)
    {
        $data = [];
        $r = $request->all();
        $s = 1;
        foreach ($r['text'] as $key=>$t){
            $data['t'.$s++] = $t;
        }
        $s = 1;
        foreach ($r['s'] as $key=>$t){
            $data['s'.$s++] = $t;
        }

        $pdf = PDF::loadView('myPDF2', $data);

        return $pdf->download(strtotime(Carbon::now()).'.pdf');
    }
    public function generatePDFThree(Request $request)
    {
        $data = [];
        $r = $request->all();
        $s = 1;
        foreach ($r['text'] as $key=>$t){
            $data['t'.$s++] = $t;
        }
        $s = 1;
        foreach ($r['s'] as $key=>$t){
            $data['s'.$s++] = $t;
        }
        $pdf = PDF::loadView('myPDF3', $data);

        return $pdf->download(strtotime(Carbon::now()).'.pdf');
    }
}
