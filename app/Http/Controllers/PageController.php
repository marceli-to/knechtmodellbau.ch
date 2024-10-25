<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller
{
  public function home(Request $request)
  {
    return view('pages.home');
  }

  public function portrait(Request $request)
  {
    return view('pages.portrait');
  }

  public function gallery(Request $request)
  {
    return view('pages.gallery');
  }

  public function services(Request $request)
  {
    return view('pages.services');
  }

  public function contact(Request $request)
  {
    return view('pages.contact');
  }

  public function imprint(Request $request)
  {
    return view('pages.imprint');
  }

  public function privacy(Request $request)
  {
    return view('pages.privacy');
  }
}