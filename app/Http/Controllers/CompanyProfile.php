<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyProfile extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return "Welcome";
    }

    public function home()
    {
        return "Selamat Datang di DEJOSS COMPANY PROFILE";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function produk($id)
    {
        //
        return '<a href="https://www.educastudio.com/category/' . $id . '">https://www.educastudio.com/category/' . $id . '</a>';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function news($id = null)
    // {
    //     if ($id == null) return '<a href="https://www.educastudio.com/news">
    //         https://www.educastudio.com/news/</a>';
    //     return '<a href="https://www.educastudio.com/news">
    //         https://www.educastudio.com/news/</a>';
    // }
    public function news()
    {
        return redirect("https://www.educastudio.com/news");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function program($id)
    {
        return '<a href="https://www.educastudio.com/program/' . $id . '">https://www.educastudio.com/program/' . $id . '</a>';
    }

    public function about()
    {
        return redirect("https://www.educastudio.com/about-us");
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return redirect("https://www.educastudio.com/contact-us");
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
}
