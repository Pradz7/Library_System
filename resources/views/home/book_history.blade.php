<!DOCTYPE html>
<html lang="en">

  <head>

    @include('home.css')

    <style type="text/css">
    .table_deg
    {
        border: 1px solid white;
        margin: auto;
        text-align: center;
        margin-top: 100px;
    }

    th
    {
        color: white;
        background-color: skyblue;
        font-weight: bold;
        font-size: 18px;  /* fix font size typo */
        padding: 10px;
    }

    td
    {
        color: white;
        background-color: black;
        border: 1px solid white;
        font-weight: bold;
        font-size: 18px;  /* fix font size typo */
    }

    .book_img
    {
        height: 120px;
        width: 80px;
        margin: auto;
    }

</style>

    </style>
  </head>

<body>

  @include('home.header') <!-- Place header here -->

  <div class="currently-market">
      <div class="container">
          <div class="row">
              <table class="table_deg">
                  <tr>
                      <th>Book Name</th>
                      <th>ISBN</th>
                      <th>Author</th>
                      <th>Book Status</th>
                      <th>Book Image</th>
                  </tr>
                      @foreach ($data as $data)
                      <tr>
                          <td>{{ $data->book->title }}</td>
                          <td>{{ $data->book->author }}</td>
                          <td>{{ $data->book->ISBN }}</td>
                          <td>{{ $data->status }}</td>
                          <td>
                            <img class="book_img" src="book/{{$data->book->book_img}}">
                          </td>
                      </tr>
                      @endforeach
              </table>
          </div>
      </div>
  </div>

  @include('home.footer')

</body>

</html>