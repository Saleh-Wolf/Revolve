<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }
    
    
public function sendContact(Request $request)
{
    $validated = $request->validate([
        'name'    => ['required', 'string', 'min:3', 'max:100'],
        'email'   => ['required', 'email', 'max:150'],
        'message' => ['required', 'string', 'min:10', 'max:2000'],
    ]);

    // حاليا هنعتبرها "تم الإرسال" بدون DB/Email
    // بعدين ممكن نخزنها أو نبعث email

    return back()->with('success', '✅ Message sent successfully!')->withInput();
}
    }
