<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Gloudemans\Shoppingcart\Facades\Cart;

use Flash;

class CartController extends Controller
{
    public function add(Request $request)
    {
        Cart::add(
            [
                'id' => $request->id,
                'name' => $request->name,
                'qty' => $request->qty,
                'price' => $request->price,
                'options' => [
                    'image' => $request->image
                ]
            ]
        );
        Flash::success('Item Added successfully.');
        return back();
    }

    public function delete(Request $request)
    {
        \Cart::remove($request->rowId);
        Flash::success('Item Removed Successfully.');
        return back();
    }

    public function update(Request $request)
    {

        \Cart::update($request->rowId, ['qty' => $request->qty]);

        Flash::success('Item Updated Successfully.');
        return back();

    }


    public function viewCart()
    {
        return view('frontend.site.cartview');
    }

    public function checkout( Request $request)
    {


        $data = $request->all();


        $sent = \Mail::send('emails.email', ['data' => $data], function ($m) use ($data) {
            $m->from('info@readnwrite.org', 'readnwrite');
            $m->to("adnanmumtazmayo@gmail.com", "Adnanmumtaz")->subject('New Order Recieved ');
        });
        alert()->success('Your inquiry has successfully submitted', 'Thanks')->persistent('close');

        Flash::success('Your order has successfully submitted');

        \Cart::destroy();
        return redirect()->to('/');


    }

}
