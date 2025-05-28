<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .book-card {
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.08);
            margin-bottom: 2rem;
            transition: transform 0.3s ease;
            overflow: hidden;
            height: 100%;
        }

        .book-card:hover {
            transform: translateY(-6px);
        }

        .book-image-container {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
            background-color: #f1f4f8;
            border-right: 1px solid #e0e0e0;
        }

        .book-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 6px;
        }

        .book-details {
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
        }

        .book-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 0.5rem;
        }

        .book-author {
            font-size: 1.1rem;
            color: #3498db;
            margin-bottom: 0.5rem;
        }

        .book-isbn {
            font-size: 0.9rem;
            color: #7f8c8d;
            margin-bottom: 1rem;
        }

        .availability-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top: 1px solid #ecf0f1;
            padding-top: 1rem;
        }

        .availability-text {
            font-size: 0.95rem;
            color: #34495e;
        }

        .availability-number {
            font-size: 1.3rem;
            font-weight: bold;
            color: #27ae60;
            margin-left: 0.3rem;
        }

        .borrow-btn {
            background-color: #2980b9;
            color: #fff;
            border: none;
            padding: 0.6rem 1.3rem;
            border-radius: 25px;
            transition: all 0.3s ease;
            white-space: nowrap;
        }

        .borrow-btn:hover {
            background-color: #3498db;
            transform: scale(1.05);
        }

        @media (max-width: 768px) {
            .book-image {
                height: 150px;
            }

            .book-title {
                font-size: 1.3rem;
            }

            .availability-section {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.75rem;
            }
        }

        .custom-footer {
            background: linear-gradient(90deg, #6a11cb 0%, #2575fc 100%);
            color: #fff;
            font-family: 'Roboto', sans-serif;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .custom-footer .footer-link {
            color: #ffffff;
            font-weight: 500;
            text-decoration: underline;
            transition: color 0.3s ease;
        }

        .custom-footer .footer-link:hover {
            color: #ffe082;
        }
    </style>
</head>

<body>
    @include('home.header')

    <div class="container py-5">
        <h1 class="mb-4 text-center text-primary">Available Books</h1>

        <form action="{{ url('search') }}" method="get">
            @csrf
            <div class="row mb-4">
                <div class="col-md-8">
                    <input class="form-control" type="search" name="search" placeholder="Search for Book title, Author Name, ISBN">
                </div>
                <div class="col-md-4">
                    <input class="btn btn-primary w-100" type="submit" value="Search">
                </div>
            </div>
        </form>


        
        <div class="row">
            @foreach($data as $data)
            <div class="col-lg-6 mb-4">
                <div class="book-card">
                    <div class="row g-0 h-100">
                        <div class="col-md-4 book-image-container">
                            <img src="{{ asset('book/' . $data->book_img) }}" 
                                 class="book-image" 
                                 alt="{{ $data->title }}">
                        </div>
                        
                        <div class="col-md-8 h-100">
                            <div class="book-details">
                                <div>
                                    <h2 class="book-title">{{ $data->title }}</h2>
                                    <div class="book-author">{{ $data->author }}</div>
                                    <div class="book-isbn">ISBN: {{ $data->ISBN }}</div>
                                </div>
                                
                                <div class="availability-section">
                                    <div class="availability-text">
                                        Copies Available:
                                        <span class="availability-number">{{ $data->quantity }}</span>
                                    </div>
                                    <button class="borrow-btn">
                                        Apply to Borrow
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    @include('home.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
