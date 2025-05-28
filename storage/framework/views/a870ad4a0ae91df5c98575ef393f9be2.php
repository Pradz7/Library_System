<!-- book_details.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($book->title); ?> - Details</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #1a1a1a, #2d2d2d);
            color: #ffffff;
            min-height: 100vh;
            padding: 2rem;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: #252525;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0,0,0,0.3);
            overflow: hidden;
        }

        .book-header {
            padding: 2rem;
            background: #1a1a1a;
            border-bottom: 2px solid #3a3a3a;
        }

        .book-title {
            font-size: 2.5rem;
            color: #00ff9d;
            margin-bottom: 0.5rem;
        }

        .book-author {
            color: #a9a9a9;
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        .book-content {
            display: flex;
            gap: 2rem;
            padding: 2rem;
        }

        .book-cover {
            flex: 0 0 300px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 15px rgba(0,0,0,0.5);
        }

        .book-cover img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .book-info {
            flex: 1;
        }

        .book-meta {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .meta-item {
            background: #2d2d2d;
            padding: 1rem;
            border-radius: 8px;
            border-left: 4px solid #7844e6;
        }

        .meta-label {
            color: #7844e6;
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }

        .meta-value {
            font-size: 1.1rem;
            color: #ffffff;
        }

        .book-description {
            line-height: 1.6;
            color: #cccccc;
            margin-bottom: 2rem;
        }

        .action-buttons {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }

        .btn {
            padding: 0.8rem 1.5rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background: #7844e6;
            color: white;
        }

        .btn-primary:hover {
            background: #8d5ff7;
        }

        .btn-secondary {
            background: #3a3a3a;
            color: white;
        }

        .btn-secondary:hover {
            background: #4d4d4d;
        }

        @media (max-width: 768px) {
            .book-content {
                flex-direction: column;
            }

            .book-cover {
                flex: none;
                max-width: 400px;
                margin: 0 auto;
            }

            .book-meta {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="book-header">
            <h1 class="book-title"><?php echo e($book->title); ?></h1>
            <p class="book-author">by <?php echo e($book->author); ?></p>
        </div>
        
        <div class="book-content">
            <div class="book-cover">
                <img src="<?php echo e(url('book/' . $book->book_img)); ?>" alt="<?php echo e($book->title); ?>">
            </div>
            
            <div class="book-info">
                <div class="book-meta">
                    <div class="meta-item">
                        <div class="meta-label">ISBN</div>
                        <div class="meta-value"><?php echo e($book->ISBN); ?></div>
                    </div>
                    
                    <div class="meta-item">
                        <div class="meta-label">Available Copies</div>
                        <div class="meta-value"><?php echo e($book->quantity); ?></div>
                    </div>
                    
                    <div class="meta-item">
                        <div class="meta-label">Total Copies</div>
                        <div class="meta-value"><?php echo e($book->total_quantity); ?></div>
                    </div>
                    
                    <div class="meta-item">
                        <div class="meta-label">Category</div>
                        <div class="meta-value"><?php echo e($book->category->name); ?></div>
                    </div>
                </div>

                <div class="book-description">
                    <h3>Description</h3>
                    <p><?php echo e($book->description ?? 'No description available'); ?></p>
                </div>

                <div class="action-buttons">
                    <a href="<?php echo e(url('/borrow/' . $book->id)); ?>" class="btn btn-primary">Borrow Book</a>
                    <a href="<?php echo e(url('/')); ?>" class="btn btn-secondary">Back to List</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html><?php /**PATH /Users/madeprabawa/Desktop/Library_Project/resources/views/home/book_details.blade.php ENDPATH**/ ?>