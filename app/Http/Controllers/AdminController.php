<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;
use App\Models\Category;
use App\Models\Borrow;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::check()) {  // Better authentication check
            $user_type = Auth::user()->usertype;

            if ($user_type == 'admin') 
            {
                $user = User::all()->count();
                $book = Book::all()->count();
                $borrow = Borrow::where('status', 'approved')->count();
                $returned = Borrow::where('status', 'returned')->count();
                return view('admin.index', compact('user', 'book', 'borrow','returned'));
            } elseif ($user_type == 'user') {
                $data= Book::all();
                return view('home.index', compact('data'));
            }
        }

        // Redirect to login if not authenticated or invalid user type
        return redirect()->route('login');
    }

    public function category_page()
    {
        $data = Category::all();

        return view('admin.category', compact('data'));  // Assuming standard view directory structure
    }

    public function add_category(request $request)
    {
        $data = new Category;

        $data ->cat_title = $request->category;
        
        $data->save();

        return redirect()->back()->with('message', 'Category Added Successfully');
    }

    public function cat_delete($id)
    {
        $data= Category::find($id);

        $data->delete();

        return redirect()->back()->with('message','Category Successfully Deleted');
    }

    public function edit_category($id)
    {
        $data = Category::find($id);

        return view('admin.edit_category', compact('data'));

    }

    public function update_category(Request $request, $id)
    {
        $data = Category::find($id);

        $data->cat_title = $request->cat_name;

        $data->save();

        return redirect('/category_page')->with('message', 'Category Successfully Updated');
    }

    public function add_book()
    {
        $data = Category::all();

        return view('admin.add_book', compact('data'));
    }

    public function store_book(request $request)
    {

        $data =new Book;

        $data->title = $request->book_name;
        $data->ISBN = $request->ISBN;
        $data->author = $request->author_name;
        $data->quantity = $request->quantity;
        $data->description = $request->description;
        $data->category_id = $request->category;
        $book_img=$request->book_img;
        $author_img=$request->author_img;
        $book_img = $request->book_img;
        $author_img = $request->author_img;

        if($book_img) {
            $book_image_name = time().'.'.$book_img->getClientOriginalExtension();

            $request->book_img->move('book', $book_image_name);

            $data->book_img = $book_image_name;
        }

        if($author_img) {
            
            $author_image_name = time().'.'.$author_img->getClientOriginalExtension();
            
            $request->author_img->move('author', $author_image_name);
            
            $data->author_img = $author_image_name;
        }
        
        $data->save();

        return redirect()->back();
    }

    public function show_book()
    {
        $book = Book::all();
        return view('admin.show_book', compact('book'));
    }

    public function book_delete($id)
    {
        $data = Book::find($id);

        $data->delete();
        return redirect()->back()->with('message', 'Book Successfully Deleted');
    }

    public function edit_book($id)
    {
        $data = Book::find($id);
        $category = Category::all();
        return view('admin.edit_book', compact('data', 'category'));
    }

    public function update_book(Request $request, $id)
    {
        $data = Book::find($id);

        $data->title = $request->title;
        $data->ISBN = $request->ISBN;
        $data->author = $request->author;
        $data->description = $request->description;
        $data->quantity = $request->quantity;
        $data->category_id = $request->category;
        $book_img = $request->book_img;
        $author_img = $request->author_img;

        if($book_img) {
            $book_image_name = time().'.'.$book_img->getClientOriginalExtension();

            $request->book_img->move('book', $book_image_name);

            $data->book_img = $book_image_name;
        }

        if($author_img) {
            
            $author_image_name = time().'.'.$author_img->getClientOriginalExtension();
            
            $request->author_img->move('author', $author_image_name);
            
            $data->author_img = $author_image_name;
        }

        $data->save();
        return redirect('/show_book') ->with('message', 'book successfully updated');

    }

    public function borrow_request()
    {
        $data = Borrow::all();
        return view('admin.borrow_request', compact('data'));
    }
    
    public function approved_book($id)
    {
        $data = Borrow::find($id);
        $status = $data->status;
        if ($status == 'approved') 
        {
            return redirect()->back();
        }

        else
        {
            $data->status = 'approved';
            $data->save();
            $bookid = $data->book_id;
            $book = Book::find($bookid);
            $book_qty = $book->quantity - '1';
            $book->quantity = $book_qty;
            $book->save();
            return redirect()->back();
        }
        
    }

    public function rejected_book($id)
    {

        $data = Borrow::find($id);
        $status = $data->status;

        if ($status == 'rejected')
        {
            return redirect()->back();
        }

        else
        {
            $data->status = 'rejected';
            $data->save();
            return redirect()->back();
        }
    }

    public function returned_book($id)
    {
        $data = Borrow::find($id);
        $status = $data->status;
        if ($status == 'returned') 
        {
            return redirect()->back();
        }
        else
        {
            $data->status = 'returned';
            $data->save();
            $bookid = $data->book_id;
            $book = Book::find($bookid);
            $book_qty = $book->quantity + '1';
            $book->quantity = $book_qty;
            $book->save();
            return redirect()->back();
        }
    }
}