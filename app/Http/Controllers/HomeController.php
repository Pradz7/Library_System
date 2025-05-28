<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Borrow;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $data = Book::all();
        return view('home.index', compact('data'));
    }

    public function borrow_books($id)
    {
        $data = Book::find($id);
        $book_id = $id;
        $quantity = $data->quantity;

        if ($quantity >= 1) {
            if (Auth::id()) {
                $user_id = Auth::user()->id;

                $borrow = new Borrow;
                $borrow->user_id = $user_id; // Fix: was incorrectly assigning $id instead of $user_id
                $borrow->book_id = $book_id; // Add this if your `borrows` table has a book_id
                $borrow->status = 'applied';
                $borrow->save();

                return redirect()->back()->with('message', 'A request is sent to admin to proceed your borrow request');
            } else {
                return redirect('/login');
            }
        } else {
            return redirect()->back()->with('message', 'Not enough books available');
        }
    }

    public function book_details()
    {
        return view('home.book_details');
    }
    
    public function book_history()
    {
        if(Auth::id())
        {
            $userid = Auth::user()->id;
            $data = Borrow::where('user_id', '=', $userid)->get();
            return view('home.book_history', compact('data'));
        }
    }

    public function explore()
    {
        $category = Category::all();
        $data = Book::all();
        return view('home.explore', compact('data', 'category'));
    }

    public function search(Request $request)
    {
        $category = Category::all();
        $search = $request->search;
        $data = Book::where('title', 'like', "%$search%")
                   ->orWhere('author', 'like', "%$search%")
                   ->orWhere('ISBN', 'like', "%$search%")
                   ->get();
        return view('home.explore', compact('data', 'category'));
    }

}
