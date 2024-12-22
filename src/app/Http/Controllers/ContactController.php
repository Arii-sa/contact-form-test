<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Category;

class ContactController extends Controller
{
    //
    public function index()
    {
        $contacts=Contact::with('category')->get();
        $categories = Category::all();
        return view('index', compact('contacts', 'categories'));
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['category_id','last_name', 'first_name', 'gender', 'email', 'tel', 'address','building','detail']);
        return view('confirm', compact('contact'));
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->only(['category_id','last_name', 'first_name', 'gender', 'email', 'tel', 'address','building','detail']);
        Contact::create($contact);
        return view('thanks');
    }

}
