<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f4f6f8;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .book-card {
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
            overflow: hidden;
            height: 100%;
            border: 1px solid #e0e0e0;
        }

        .book-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.08);
        }

        .book-image-container {
            background: #f1f3f5;
            padding: 1.25rem;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
        }

        .book-image {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 8px;
        }

        .book-details {
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .book-title {
            font-size: 1.6rem;
            font-weight: 700;
            color: #2d3436;
            margin-bottom: 0.5rem;
        }

        .book-author {
            font-size: 1rem;
            color: #0984e3;
            margin-bottom: 0.75rem;
        }

        .book-isbn {
            font-size: 0.9rem;
            color: #636e72;
            margin-bottom: 1rem;
        }

        .availability-section {
            margin-top: auto;
            padding-top: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top: 1px solid #ecf0f1;
        }

        .availability-text {
            font-size: 0.95rem;
            color: #2d3436;
        }

        .availability-number {
            font-weight: 700;
            font-size: 1.4rem;
            color: #00b894;
            margin-left: 0.4rem;
        }

        .borrow-btn {
            background: linear-gradient(to right, #6c5ce7, #341f97);
            color: white;
            padding: 0.7rem 1.5rem;
            border-radius: 30px;
            border: none;
            font-weight: 600;
            transition: all 0.3s ease;
            white-space: nowrap;
        }

        .borrow-btn:hover {
            opacity: 0.9;
            transform: scale(1.03);
        }

        @media (max-width: 768px) {
            .book-image {
                height: 160px;
            }

            .book-title {
                font-size: 1.4rem;
            }

            .availability-section {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.75rem;
            }

            .borrow-btn {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <h1 class="mb-4 text-center text-primary fw-bold">Available Books</h1>
        
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
