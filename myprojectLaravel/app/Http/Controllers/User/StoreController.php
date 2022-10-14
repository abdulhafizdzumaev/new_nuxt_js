<?php


namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;


class StoreController extends Controller 
{
  public function __invoke(ContactRequest $req)
  {
    $contact = new Contact();
      $contact->name = $req->input('name');
      $contact->email = $req->input('descrition');
      $contact->subject = $req->input('price');
      $contact->message = $req->input('image');

      $contact->save();
      return redirect('http://127.0.0.1:8000')->with('success', 'Сообщение было добавлено');
  }
}