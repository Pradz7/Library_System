<!DOCTYPE html>
<html>
    <base href='/public'>
  <head>
   @include('admin.css')
   
   <style type="text/css">

    .div_center
    {
        text-align: center;
        margin: auto;
    }

    .title
    {
        color: white;
        padding: 30px;
        font-size: 30px;
        font-weight: bold;
    }

    label
    {
        display: inline-block;
        width: 200px;
    }

    .div_pad
    {
        padding: 15px;
    }


   </style>
   
   

</head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
     <!-- Sidebar Navigation-->
     @include('admin.sidebar')
      <!-- Sidebar Navigation end-->

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">

            <div class="div_center">
                <h1 class="title">Update Book</h1>
                <form action="{{ url('update_book', $data->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="div_pad">
                        <label>Book title</label>
                        <input type="text" name="title" value="{{ $data->title }}">
                    </div>

                    <div class="div_pad">
                        <label>ISBN</label>
                        <input type="text" name="ISBN" value="{{ $data->ISBN }}">
                    </div>

                    <div class="div_pad">
                        <label>Author Name</label>
                        <input type="text" name="author" value="{{ $data->author }}">
                    </div>
                    
                    <div class="div_pad">
                        <label>Description</label>
                        <textarea name="description">{{ $data->description }}</textarea>
                    </div>

                    <div class="div_pad">
                        <label>Quantity</label>
                        <input type="number" name="quantity" value="{{ $data->quantity }}">
                    </div>

                    <div class="div_pad">
                        <label>Category</label>
                        <select name="category">
                            <option value="{{$data->category_id}}">{{ $data->category->cat_title }}</option>
                            @foreach ($category as $category)
                            
                            <option value="{ $category->cat_title }}">{{ $category->cat_title }}</option>
                            @endforeach
                        </select>
                        <div class="div_pad">
                            <label>Book Cover</label>
                            <img style="width: 120px; margin: auto;" src="/book/{{ $data->book_img }}">
                        </div>

                        <div class="div_pad">
                            <label>Change Book Cover</label>
                            <input type="file" name="book_img">
                        </div>

                        <div class="div_pad">
                            <label>Author Image</label>
                            <img style="width: 80px; border-radius: 50%; margin: auto;" src="/author/{{ $data->author_img }}">
                        </div>

                        <div class="div_pad">
                            <label>Change Author Image</label>
                            <input type="file" name="author_img">
                        </div>


                        <div class="div_pad">
                            <input class="btn btn-info" type="submit" value="Update Book">
                        </div>
                    </div>

                </form>
            </div>

            </div>
        </div>
    </div>
    
        @include('admin.footer')
  </body>
</html>