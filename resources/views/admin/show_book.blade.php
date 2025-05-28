<!DOCTYPE html>
<html>
    <base href='/public'>
  <head>

    <style type="text/css">

    .table_center
    {
        text-align: center;
        margin: auto;
        border: 1px solid yellowgreen;
        margin-top: 50px;

    }

    th
    {
        background-color: skyblue;
        padding: 10px;
        font-size: 20px;
        color: black;
        font-weight: bold;
    }

    .img_book
    {
        width: 120px;
    }

    .author_book
    {
        width: 80px;
        border-radius: 50%;
    }

    </style>

   @include('admin.css')

    <!-- Load SweetAlert FIRST -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.16.1/sweetalert2.min.js" integrity="sha512-LGHBR+kJ5jZSIzhhdfytPoEHzgaYuTRifq9g5l6ja6/k9NAOsAi5dQh4zQF6JIRB8cAYxTRedERUF+97/KuivQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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

            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                </div>
            @endif

            <div>

                <table class="table_center">
                    <tr>
                        <th>Book Title</th>
                        <th>ISBN</th>
                        <th>Author Name</th>
                        <th>Quantity</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Book Image</th>
                        <th>Author Image</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>

                    @foreach ($book as $book)
                    
                    
                    <tr>
                        <td>{{$book->title}}</td>
                        <td>{{$book->ISBN}}</td>
                        <td>{{$book->author}}</td>
                        <td>{{$book->quantity}}</td>
                        <td>{{$book->description}}</td>
                        <td>{{$book->category->cat_title}}</td>

                        <td>
                            <img class="img_book" src="book/{{$book->book_img}}">
                        </td>
                        <td>
                            <img class="author_book" src="author/{{$book->author_img}}">
                        </td>

                        <td>
                            <a onclick="confirmation(event)" href="{{ url('book_delete',$book->id) }}" class="btn btn-danger">delete</a>
                        </td>

                        <td>
                            <a href="{{ url('edit_book',$book->id) }}" class="btn btn-info">update</a>
                        </td>
                    </tr>

                    @endforeach
                </table>

            </div>

            </div>
        </div>
    </div>  
    
     

        @include('admin.footer')

        <script type="text/javascript">
            <!-- SweetAlert Delete Confirmation -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function confirmation(ev) {
            ev.preventDefault();
            var urlToRedirect = ev.currentTarget.getAttribute('href');

            Swal.fire({
                title: "Are you sure you want to delete this?",
                text: "You will not be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "Cancel"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = urlToRedirect;
                }
            });
        }
    </script>

        </script>
  </body>
</html>