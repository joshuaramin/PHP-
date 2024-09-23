<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite("resources/css/app.css")
    <style>
        body {
            background-color: #000;
            font-family: 'Helvetica Neue', sans-serif;
        }

        .header {
            width: 100%;
            display: flex;
            justify-content: space-between;
            padding: 20px 30px;
            color: #fff;
        }

        .header .links-separtor {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        a {
            color: #fff;
        }

        .hero {
            background: url('https://unsplash.com/photos/white-cars-on-the-road-KP_aqDegg20') no-repeat center center;
            background-size: cover;
            color: #fff;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .hero h1 {
            font-size: 4rem;
            margin-bottom: 20px;
        }

        .cta-btn {
            background-color: #ff6f61;
            border: none;
            padding: 10px 20px;
            font-size: 1.2rem;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }

        .features {
            padding: 60px 20px;
        }

        .feature-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px;
            transition: transform 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-10px);
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- <div class="relative flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <header class="flex bg-gray-900  h-[500px]">
                    <div class="flex items-cetner justify-center">
                        <div class="w-full flex items-center justify-center h-full">
                            <h2 class="text-lg">Bidding Application</h2>
                        </div>
                        <div class="w-full bg-black justify-center">
                            <a href="/about-us">About</a>
                            <a href="/">About</a>
                        </div>
                    </div>
                  
                </header>


            </div>
        </div> -->
        <div class="header">
            <h2>Car Bidding</h2>
            <div class="links-separtor">
                <a href="/about-us">About</a>
                <a href="/terms-and-condition">Terms and Condition</a>
                <a href="/privacy-policy">Privacy</a>
                <a href="/auction-cars">Car Auction</a>
            </div>
            @if (Route::has('login'))
            <nav class="">
                @auth
                <a
                    href="{{ url('/dashboard') }}"
                    class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                    Dashboard
                </a>
                @else
                <a
                    href="{{ route('login') }}"
                    class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                    Log in
                </a>

                @if (Route::has('register'))
                <a
                    href="{{ route('register') }}"
                    class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                    Register
                </a>
                @endif
                @endauth
            </nav>
            @endif
        </div>
        <section class="hero">
            <div>
                <h1>Welcome to Car Bidding</h1>
                <p>Your gateway to the best car deals. Bid, Win, Drive!</p>
                <a href="#features" class="cta-btn">Get Started</a>
            </div>
        </section>
        <section id="features" class="features container">
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="feature-card">
                        <h3>Diverse Inventory</h3>
                        <p>Explore a wide range of vehicles, from economy to luxury, all in one place.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <h3>Competitive Bidding</h3>
                        <p>Bid confidently and secure the best deals on your dream car.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <h3>Secure Transactions</h3>
                        <p>Experience peace of mind with our secure payment and transaction processes.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="text-center py-4">
            <p class="text-white">&copy; 2024 Car Bidding Platform. All Rights Reserved.</p>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </div>
</body>

</html>