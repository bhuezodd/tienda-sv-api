<?php

namespace App\Http\Controllers;

use App\Http\Resources\addressResource;
use App\Http\Resources\UserResource;
use App\Models\Address;
use App\Models\User;
use Illuminate\Http\Request;

class addressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = auth()->user()->id;
        $addreses = Address::where('user_id', $id)->orderBy('created_at')->get();
        $user=User::where('id',$id)->first();
        return new UserResource(User::findOrFail($id));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = auth()->user()->id;
        $addreses=Address::where('user_id',$id)->get();
        if($addreses->count<3){
            Address::insertGetId(['user_id'=>$id,'created_at'=>now(),'updated_at'=>now(),'address'=>$request['address'],'municipality'=>$request['municipality']]);
            return new UserResource(User::where('id',$id)->get());
        }else{
            return response('muchas direcciones');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function show(Address $address)
    {
        if (auth()->user()->id == $address->user_id) {
            return new AddressResource($address);
        }
        return response('no maitro', 403);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Address $address)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $address)
    {
        //
    }
}
