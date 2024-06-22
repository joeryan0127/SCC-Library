
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Book Library</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.4.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    .book {
        margin-bottom: 20px;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }
    .book img {
        max-width: 100px;
        height: auto;
        margin-right: 10px;
    }
    /* Custom CSS to float book cards left */
    .book-card {
        float: left;
        margin-right: 15px; /* Add some margin between the cards */
    }
</style>
</head>
<body>
<div class="container">
    <h1>Book Library</h1>
    <div class="row">
        <div class="col-md-6">
            <form class="mb-4">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search books...">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 book-card">
            <div class="book">
                <img src="https://via.placeholder.com/100" alt="Book Cover">
                <h3>Book Title</h3>
                <p>Author Name</p>
                <p>Description</p>
                <button class="btn btn-secondary">Details</button>
            </div>
        </div>
        <div class="col-md-4 book-card">
            <div class="book">
                <img src="https://via.placeholder.com/100" alt="Book Cover">
                <h3>Book Title</h3>
                <p>Author Name</p>
                <p>Description</p>
                <button class="btn btn-secondary">Details</button>
            </div>
        </div>
        <div class="col-md-4 book-card">
            <div class="book">
                <img src="https://via.placeholder.com/100" alt="Book Cover">
                <h3>Book Title</h3>
                <p>Author Name</p>
                <p>Description</p>
                <button class="btn btn-secondary">Details</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>