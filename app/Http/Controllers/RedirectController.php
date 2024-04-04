<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\UserOffer;
use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function index($link)
    {
        $user_offer=UserOffer::query()->where('link','=',$link)->first();
        $offer=Offer::query()->where('id','=',$user_offer->offer_id)->first();
        $redirect_link=$offer->link;

        $user_offer->clicks=$user_offer->clicks+1;
        $user_offer->update();
        //dd($user_offer);


        return redirect($redirect_link);
    }
}
