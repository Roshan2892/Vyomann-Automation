<?php

namespace App\Http\Controllers;

use App\Model\Contact;
use App\Model\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Validator;

class BaseController extends Controller
{
    public function home(){
        return view('home');
    }

    public function application(){
        return view('applications');
    }

    public function products(){
        $products = [];
        $products = Product::get();
        
        return view('products', compact('products'));
    }

    public function productDetail($id){
        $product = Product::find($id);
        
        if(isset($product)){
            return view('product-detail', compact('product'));
        }
        
        toastr()->error('Page not found');

        return back();
    }

    public function consultancy(){
        return view('consultancy');
    }

    public function contact(){
        return view('contact');
    }

    public function postContact(Request $request){
        $messages = [
            'name.required' => 'A name is required',
            'phone.required' => 'A phone is required',
            'phone.max' => 'Phone can\'t be more than 15 digits',
            'email.required' => 'An email is required',
            'email.max' => 'Email can\'t be more than 50 letters',
            'message.required'  => 'A message is required'
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'phone' => 'required|max:15',
            'email' => 'required|email|max:50',
            'message' => 'required'
        ], $messages);

        if ($validator->fails()) {
            
            $messages = $validator->messages();
            foreach ($messages->all() as $message)
            {
                \Toastr::error($message, 'Failed', ['timeOut' => 10000]);
            }
            return back()->withInput();
        }

        $contact = Contact::create([
            'name' => $request->name,
            'mobile' => $request->phone,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        if ($contact instanceof Model) {
            toastr()->success('Message sent! We\'ll get back to you soon');

            return back();
        }

        toastr()->error('An error has occurred please try again later.');

        return back()->withInput();
    }
}
