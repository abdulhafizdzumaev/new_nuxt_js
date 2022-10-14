<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
   // public function index() {
   //    return view('welcome');
   // }
   public function submit(Request $req)
   {
      // $contact = new Contact();
      // $contact->name = $req->input('name');
      // $contact->description = $req->input('description');
      // $contact->price = $req->price;
      // $contact->image = $req->input(['image']);
      // $contact->save();
      $image = Storage::putFile('images', $req->file('image'));
   
      Contact::insert([
         'name' => $req['name'],
         'description' => $req['description'],
         'price' => $req['price'],
         'image' => $image
      ]);
      // return "hafis";
      // return $contact;
   }
   // public function allData()
   // {
   //    $contact = new Contact;
   //    // return view('messages', ['data' =>$contact->inRandomOrder()->get()]);
   //    // $contact->orderBy('id')->skip(1)->take(3)->get()
   //    return view('messages', ['data' => $contact->all()]);
   // }
}
