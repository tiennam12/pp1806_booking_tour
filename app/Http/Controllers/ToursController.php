<?php

namespace App\Http\Controllers;

use App\Tour;
use Illuminate\Http\Request;

class ToursController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('Tours.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only(['category_id', 'discount', 'tour_name','start', 'image', 'quantity', 'avg_rating', 'price', 'created_by', 'description']);
        $currentUserId = auth()->id();
        $target_dir = public_path() . "/" . config('tours.image_path');
        $imageName = basename($_FILES["image"]["name"]);
        $target_file = $target_dir . $imageName;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $data['image'] = $imageName;

        try {
            $data['user_id'] = $currentUserId;
            $tour=Tour::create($data);
        } catch (Exception $e) {

            return back()->with('status', 'Create fail');
        }

        return redirect('/tours/' . $tour->id)->with('status','created');
        $data = $request->only(['category_id', 'discount', 'start', 'tour_name', 'image', 'quantity', 'avg_rating', 'price', 'created_by', 'description']);
        try {
            $tour = Product::create($data);
        } catch (Exception $e) {

            return back()->with('status', 'Create fail!');
        }
        
        return redirect('tours/' . $tour->id)->with('status', 'Create success!');
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
}
