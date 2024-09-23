<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Auction - Car Bidding Platform</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f9f9f9;
            font-family: 'Arial', sans-serif;
        }

        .auction-section {
            background-color: #fff;
            padding: 60px 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin: 20px;
        }

        .auction-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .auction-header h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #333;
        }

        .auction-content {
            font-size: 1rem;
            color: #444;
            line-height: 1.6;
        }

        .car-item {
            margin-bottom: 40px;
        }

        .car-item img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .car-item h3 {
            font-size: 1.8rem;
            margin-bottom: 15px;
        }

        .bid-button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
        }

        .bid-button:hover {
            background-color: #0056b3;
        }

        .timer {
            font-size: 1.2rem;
            color: #d9534f;
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <div class="container">
        <!-- Car Auction Section -->
        <section class="auction-section">
            <div class="auction-header">
                <h1>Car Auction</h1>
                <p>Bid on your favorite cars now!</p>
            </div>
            <div class="auction-content">
                <!-- Car Item 1 -->
                <div class="car-item">
                    <img src="https://example.com/car-image.jpg" alt="Car Image">
                    <h3>2019 BMW X5</h3>
                    <p>Current Bid: $30,000</p>
                    <div class="bid-button">Place Bid</div>
                    <div class="timer">Auction ends in: <span id="timer1">02:30:00</span></div>
                </div>

                <!-- Car Item 2 -->
                <div class="car-item">
                    <img src="https://example.com/car-image2.jpg" alt="Car Image">
                    <h3>2020 Tesla Model S</h3>
                    <p>Current Bid: $50,000</p>
                    <div class="bid-button">Place Bid</div>
                    <div class="timer">Auction ends in: <span id="timer2">01:15:00</span></div>
                </div>

                <!-- Add more car items as needed -->
            </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Example of a countdown timer
        function startTimer(duration, display) {
            var timer = duration,
                hours, minutes, seconds;
            setInterval(function() {
                hours = parseInt(timer / 3600, 10);
                minutes = parseInt((timer % 3600) / 60, 10);
                seconds = parseInt(timer % 60, 10);

                hours = hours < 10 ? "0" + hours : hours;
                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = hours + ":" + minutes + ":" + seconds;

                if (--timer < 0) {
                    timer = 0;
                }
            }, 1000);
        }

        window.onload = function() {
            var timer1 = 2 * 60 * 60 + 30 * 60, // 2 hours 30 minutes in seconds
                timer2 = 1 * 60 * 60 + 15 * 60, // 1 hour 15 minutes in seconds
                display1 = document.querySelector('#timer1'),
                display2 = document.querySelector('#timer2');
            startTimer(timer1, display1);
            startTimer(timer2, display2);
        };
    </script>
</body>

</html>