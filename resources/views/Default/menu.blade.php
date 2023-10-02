<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            background: radial-gradient(circle at center, #d04d4f, #ac2f2f);
            position: relative;
            overflow: hidden;
            font-family: Arial, sans-serif;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1% 5%;
            background: rgba(0, 0, 0, 0.1);
        }

        .small-logo {
            width: 10%;
        }

        .call-us-modern {
            display: flex;
            align-items: center;
            background: #d04d4f;
            color: white;
            padding: 10px 20px;
            border-radius: 20px;
            transition: background 0.3s ease;
        }

        .call-us-modern a {
            text-decoration: none;
            color: white;
            display: flex;
            align-items: center;
        }

        .call-us-modern i {
            margin-right: 10px;
        }

        .call-us-modern:hover {
            background: #ac2f2f;
        }

        .menu-category {
            margin-bottom: 30px;
        }

        .category-header {
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            margin-bottom: 10px;
        }

        .category-icon {
            width: 30px;
            height: 30px;
            margin-right: 10px;
        }

        .category-name {
            font-weight: bold;
            position: relative;
            z-index: 2;
            padding-bottom: 2px;
            color: #fff;
        }

        .category-line {
            position: absolute;
            width: 100%;
            height: 1px;
            background-color: #fff;
            bottom: 0;
            z-index: 1;
        }

        .before-line,
        .after-line {
            content: "";
            position: absolute;
            width: 50%;
            height: 1px;
            background-color: #fff;
            z-index: 1;
        }

        .before-line {
            left: 0;
            bottom: 0;
        }

        .after-line {
            right: 0;
            bottom: 0;
        }

        .menu-item {
            display: flex;
            background: rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .item-image {
            max-width: 30%;
            height: auto;
            border-radius: 10px;
            margin-right: 20px;
        }

        .item-details {
            flex-grow: 1;
        }

        .item-name {
            font-weight: bold;
            margin-top: 10px;
        }

        .item-price {
            margin-top: 10px;
        }

    </style>
</head>
<body>
<div class="header">
    <img class="small-logo" src="{{asset('image/logo.png')}}" alt="Al Haram Al Rabie">
    <div class="call-us-modern">
        <a href="tel:+971542507357"><i class="fas fa-phone-alt"></i> Call Us</a>
    </div>
</div>
<div class="container mt-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="menu-category">
                <div class="category-header">
                    <span class="before-line"></span>
                    <span class="category-icon"><i class="fas fa-pizza-slice"></i></span>
                    <span class="category-name">Category 1</span>
                    <span class="after-line"></span>
                </div>
                <div class="menu-item">
                    <img class="item-image" src="item-image1.jpg" alt="Item Image">
                    <div class="item-details">
                        <div class="item-name">Item Name 1</div>
                        <div class="item-price">$10.00</div>
                    </div>
                </div>
                <div class="menu-item">
                    <img class="item-image" src="item-image2.jpg" alt="Item Image">
                    <div class="item-details">
                        <div class="item-name">Item Name 2</div>
                        <div class="item-price">$12.00</div>
                    </div>
                </div>
                <div class="menu-item">
                    <img class="item-image" src="item-image3.jpg" alt="Item Image">
                    <div class="item-details">
                        <div class="item-name">Item Name 3</div>

                    </div>
                    <div class="item-price">$15.00</div>
                </div>
                <!-- You can replicate the above menu product for Category 1 -->
            </div>
        </div>
        <!-- Add more columns for other categories and product as needed -->
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
