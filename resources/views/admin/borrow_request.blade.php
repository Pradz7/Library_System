<!DOCTYPE html>
<html>
    <base href='/public'>
  <head>
   @include('admin.css')

   <style type="text/css">

    .center
    {
        text-align: center;
        margin: auto;
        margin-top: 60px;
        width: 80%;
        border: 1px solid white;
    }

    th{
        background-color: skyblue;
        text-align: center;
        color: white;
        font-size: 15px;
        font-weight: bold;
        padding: 1;
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

            <table class="center">
                <tr>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Book Title</th>
                    <th>ISBN</th>
                    <th>Quantity</th>
                    <th>Status</th>
                    <th>Change Status</th>
                    <th>Book Image</th>
                </tr>

                @foreach ($data as $data)
                
                

                <tr>
                    <td>{{ $data->user->name }}</td>
                    <td>{{ $data->user->email }}</td>
                    <td>{{ $data->user->phone }}</td>
                    <td>{{ $data->book->title }}</td>
                    <td>{{ $data->book->ISBN }}</td>
                    <td>{{ $data->book->quantity }}</td>
                    <td>
                        @if ($data->status == 'approved')
                            <span style="color: greenyellow">{{ ucfirst($data->status) }}</span>
                        @elseif ($data->status == 'rejected')
                            <span style="color: red">{{ ucfirst($data->status) }}</span>
                        @elseif ($data->status == 'returned')
                            <span style="color: skyblue">{{ ucfirst($data->status) }}</span>
                        @else
                            <span style="color: yellow">{{ ucfirst($data->status) }}</span>
                        @endif
                    </td>

                    <td>
                        <img style="height:200px; width: 150px;" src="book/{{ $data->book->book_img }}">
                    </td>
                    <td>
                        <a class="btn btn-warning" href="{{ url('approved_book', $data->id) }}">Approved</a>
                        <a class="btn btn-danger" href="{{ url('rejected_book', $data->id) }}">Rejected</a>
                        <a class="btn btn-info" href="{{ url('returned_book', $data->id) }}">Returned</a>
                    </td>
                </tr>

                @endforeach
            </table>

            </div>
        </div>
    </div>
        @include('admin.footer')
  </body>
</html>