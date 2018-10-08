<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Restaurant;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = Restaurant::all();
        foreach ($restaurants as $key => $rest) {
            $rest->image = asset('public/' . $rest->photo);
        }
        return $restaurants;
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
        $restaurant = Restaurant::find($id);
        if($restaurant){
            $restaurant->comments;
            $restaurant->photo = asset($restaurant->photo);
            return $restaurant;
        }
        return [
            'mensagem' => 'Restaurante nao encontrado'
        ];
    }

    public function storeComments(Request $request){
        $comment = Comment::crete(array(
            'user_id' => $request->user_id,
            'restaurant_id' => $request->restaurant_id,
            'description' => $request->description,
            'evaluation' => $request->evaluation,
        ));

        return $comment;
    }

    public function listComments($restaurant){
        if(Restaurant::find($restaurant)){
            $comments = Restaurant::find($restaurant)->comments;
            return $comments;
        }
        return [
            'mensagem' => 'Restaurante nao encontrado'
        ];
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
