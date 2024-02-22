<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon (2).png" type="">
    <link rel="stylesheet" href="assests.css">
    <style>
        .coin-list {
            position: absolute;
            right: 2%;
            bottom: 80px;
            display: flex;
            align-items: center;
            margin-bottom: -20px;




        }

        .coin {
            display: flex;
            align-items: center;
            font-size: 14px;
            margin: 0 15px;
            color: #ff960b;
            border: 1px solid #fff;
            padding-left: 10px;
            padding-right: 10px;
            border-radius: 8px;

        }

        .coin img {
            width: 20px;
            margin-right: 10px;
        }

        .coin h3 {
            color: white;
        }
    </style>

    <title>Wirex exchange</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- font awesome style -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <style>
        .slider_section {
            font-size: large;
        }

        .detail-box {
            font-size: large;
        }

        .crypto-box {
            max-width: 100%;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }

        .crypto-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .crypto-list li {
            width: calc(20% - 20px);
            margin-bottom: 10px;
            text-align: center;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }

        .crypto-list li img {
            width: 50px;
            height: 50px;
            margin-bottom: 5px;
        }

        .crypto-list li .crypto-info {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .crypto-list li .crypto-price {
            font-weight: bold;
        }

        @media (max-width: 768px) {
            .crypto-list li {
                width: calc(50% - 20px);
            }
        }

        @media (max-width: 480px) {
            .crypto-list li {
                width: 100%;
            }
        }
    </style>

</head>

<body>

    <div class="hero_area">

        <div class="hero_bg_box">
            <div class="bg_img_box">
                <img src="{{ asset('images/hero-bg.png') }}" alt="">
            </div>
        </div>

        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.html">
                        <span style="">
                            WIREX EXCHANGE
                        </span>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#above"> About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#services">Services</a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" href="/signup"> <i class="fa fa-user" aria-hidden="true"></i>
                                    Signup</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/login"> <i class="fa fa-user" aria-hidden="true"></i>
                                    Login</a>
                            </li>
                            <form class="form-inline">
                                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </form>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
        <!-- slider section -->
        <section class="slider_section ">
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="detail-box">
                                        <h1 style="font-size: 50px;">
                                            Crypto <br>
                                            <span style="color: rgb(201, 107, 0);"> Currency</span>
                                        </h1>
                                        <p>
                                            we offer a seamless and user-friendly platform for buying and selling
                                            cryptocurrencies.
                                            Sign up.
                                        </p>
                                        <div class="btn-box">
                                            <a href="/signup" class="btn1"
                                                style="background-color: rgb(201, 107, 0); ">
                                                Start Trading
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="img-box">
                                        <img src="{{ asset('images/slider-img.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="detail-box">
                                        <h1>
                                            Wirex <br>
                                            <span style="color:rgb(201, 107, 0);;">Security</span>
                                        </h1>
                                        <p>
                                            where security is our top priority. In the dynamic world of cryptocurrency,
                                            safeguarding your digital assets and personal information is paramount.
                                        </p>
                                        <div class="btn-box">
                                            <a href="/signup" class="btn1"
                                                style="background-color: rgb(201, 107, 0);;">
                                                Start Trading
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="img-box">
                                        <img src="{{ asset('images/2.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="detail-box">
                                        <h1>
                                            Be calm about your <br>
                                            <span style="color: rgb(201, 107, 0);;"> Crypto Assets</span>
                                        </h1>
                                        <p>
                                            Your transactions are valuable, and we prioritize the security of your
                                            transactions. Enjoy secure payment methods to ensure a smooth and worry-free
                                            experience.
                                        </p>
                                        <div class="btn-box">
                                            <a href="/signup" class="btn1"
                                                style="background-color: rgb(201, 107, 0);;">
                                                Start Trading
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="img-box">
                                        <img src="{{ asset('images/3.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
          <li data-target="#customCarousel1" data-slide-to="2"></li>

        -->

                </ol>



            </div>
    </div>

    </section>
    <!-- end slider section -->
    </div>

    <div class="crypto-box">
        <ul class="crypto-list">
            <li>
                <div class="crypto-info">
                    <img src="{{ asset('images/images/bitcoin.png') }}" alt="Crypto 1">
                    <span>Bitcoin</span>
                    <h3>$ <span id="bitcoin1"></span></h3>
                </div>
            </li>
            <li>
                <div class="crypto-info">
                    <img src="{{ asset('images/images/ethereum.png') }}" alt="Crypto 2">
                    <span>Ethereum</span>
                    <h3>$ <span id="ethereum1"></span></h3>

                </div>
            </li>
            <li>
                <div class="crypto-info">
                    <img src="{{ asset('images/images/dogecoin.png') }}" alt="Crypto 3">
                    <span>dogecoin</span>
                    <h3>$ <span id="dogecoin1"></span></h3>

                </div>
            </li>
            <li>
                <div class="crypto-info">
                    <img src="{{ asset('images/images/bnb (1).png') }}" alt="Crypto 4">
                    <span>litecoin</span>
                    <h3>$ <span id="litecoin1"></span></h3>


                </div>
            </li>
        </ul>
    </div>

    </div>
    </center>
    <!-- TradingView Widget END -->
    <!-- service section -->

    <section class="service_section layout_padding">
        <div class="service_container">
            <div class="container ">
                <div class="heading_container heading_center">
                    <h2>
                        Our <span>Services</span>
                    </h2>
                    <p>

                    </p>
                </div>
                <div class="row">
                    <div class="col-md-4 ">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{ asset('images/s1.png') }}" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Currency Wallet
                                </h5>
                                <p>
                                    we understand the paramount importance of security when it comes to managing
                                    cryptocurrencies. That's why we're proud to offer you our state-of-the-art secure
                                    wallet solution, designed to provide you with peace of mind and confidence in
                                    safeguarding your digital assets.
                                    The
                                    point of using
                                </p>
                                <a href="">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{ asset('images/s2.png') }}" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Security Storage
                                </h5>
                                <p>
                                    We employ cutting-edge encryption technology to safeguard your data and transactions
                                    from unauthorized access and interception. All sensitive information transmitted
                                    through our platform is encrypted using industry-standard protocols, ensuring that
                                    your privacy remains intact at all times.
                                </p>
                                <a href="">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{ asset('images/s3.png') }}" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Expert Support
                                </h5>
                                <p>
                                    That's why we're dedicated to providing you with unparalleled expert support every
                                    step of the way. Whether you're a seasoned trader or just starting your crypto
                                    journey, our team of knowledgeable professionals is here to assist you around the
                                    clock.
                                </p>
                                <a href="">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-box">
                    <a href="">
                        View All
                    </a>
                </div>
            </div>
        </div>
    </section>
    <script></script>

    <!-- end service section -->
    <!--list of 10  more coins-->
    <div class="container1">
        <div class="box1">
            <img class="coin-image" src="images/images/card.png" alt="Bitcoin">
            <div class="coin-name">Cardano (ADA) </div>
            <br>
            <button class="trade-button">Trade</button>
        </div>
        <div class="box1">
            <img class="coin-image" src="images/images/solana.png" alt="Ethereum">
            <div class="coin-name">Solana (SOL)</div>
            <br>
            <button class="trade-button">Trade</button>
        </div>


        <div class="box1">
            <img class="coin-image" src="images/images/ripple.png" alt="Ethereum">
            <div class="coin-name">Ripple (XRP)</div>
            <br>
            <button class="trade-button">Trade</button>
        </div>

        <div class="box1">
            <img class="coin-image" src="images/images/pakadot.png" alt="Ethereum">
            <div class="coin-name">Polkadot (DOT)</div>
            <br>
            <button class="trade-button">Trade</button>
        </div>

        <div class="box1">
            <img class="coin-image" src="images/images/chainlink.png" alt="Ethereum">
            <div class="coin-name">Chainlink (LINK)</div>
            <br>
            <button class="trade-button">Trade</button>
        </div>

        <div class="box1">
            <img class="coin-image" src="images/images/avalanche.png" alt="Ethereum" width="20px">
            <div class="coin-name">Avalanche </div>
            <br>
            <button class="trade-button">Trade</button>
        </div>

        <div class="box1">
            <img class="coin-image" src="images/images/algorand-64.png" alt="Ethereum">
            <div class="coin-name">Algorand (ALGO)</div>
            <br>
            <button class="trade-button">Trade</button>
        </div>

        <div class="box1">
            <img class="coin-image" src="images/images/steller.png" alt="Ethereum">
            <div class="coin-name">Stellar (XLM)</div>
            <br>
            <button class="trade-button">Trade</button>
        </div>
        <div class="box1">
            <img class="coin-image" src="images/images/uniswap.png" alt="Ethereum">
            <div class="coin-name">Uniswap (UNI)</div>
            <br>
            <button class="trade-button">Trade</button>
        </div>
        <div class="box1">
            <img class="coin-image" src="images/images/terra.png" alt="Ethereum">
            <div class="coin-name">Terra (LUNA)</div>
            <br>
            <button class="trade-button">Trade</button>
        </div>
        <!-- Add more boxes for other coins -->
    </div>


    <!-- about section -->

    <section class="about_section layout_padding">
        <div class="container  ">
            <div class="heading_container heading_center">
                <h2>
                    About <span>Us</span>
                </h2>

            </div>
            <div class="row">
                <div class="col-md-6 ">
                    <div class="img-box">
                        <img src="images/about-img.png" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-box">
                        <h3>
                            We Are Wirex- <p style="color: gold;">Exchange</p>
                        </h3>
                        <p>
                            "Welcome to [Wirex-Exchange], your premier destination for secure and seamless
                            cryptocurrency trading. As the digital economy continues to thrive, our platform offers an
                            intuitive and reliable way for individuals and institutions to buy, sell, and trade a
                            diverse range of cryptocurrencies. With a focus on accessibility, transparency, and
                            cutting-edge technology, we empower users worldwide to participate in the exciting world of
                            digital assets. Whether you're a seasoned trader or just starting your crypto journey,
                            [Wirex-Exchange] provides the tools, resources, and support you need to navigate the
                            ever-evolving landscape of cryptocurrencies with confidence."
                        </p>

                        <a href="">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end about section -->








    <!-- info section -->

    <section class="info_section layout_padding2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 info_col">
                    <div class="info_contact">
                        <h4>

                        </h4>
                        <div class="contact_link_box">

                            <span>

                            </span>
                            </a>
                        </div>
                    </div>
                    <div class="info_social">
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 info_col">
                    <div class="info_detail">
                        <h4>
                            Info
                        </h4>
                        <p>
                            necessary, making this the first true generator on the Internet. It uses a dictionary of
                            over 200 Latin words, combined with a handful
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 mx-auto info_col">
                    <div class="info_link_box">
                        <h4>
                            Links
                        </h4>
                        <div class="info_links">
                            <a class="active" href="/">
                                Home
                            </a>
                            <a class="" href="#about">
                                About
                            </a>
                            <a class="" href="#services">
                                Services
                            </a>


                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 info_col ">
                    <h4>
                        Subscribe
                    </h4>
                    <form action="#">
                        <input type="text" placeholder="Enter email" />
                        <button type="submit">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- end info section -->

    <!-- footer section -->
    <section class="footer_section">
        <div class="container">
            <p>
                &copy; <span id="displayYear"></span> All Rights Reserved By
                <a href="https://wirexexchange.com/">Wirex-Exchange</a>
            </p>
        </div>
    </section>
    <!-- footer section -->

    <!-- jQery -->
    <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <!-- popper js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- bootstrap js -->
    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
    <!-- owl slider -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <!-- custom js -->
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
    <!-- End Google Map -->
    <!--
  script for live api crypto
-->
    <script src="{{ asset('script.js') }}"></script>
    <script src="{{ asset('coins.js') }}"></script>
    <script src="{{ asset('10coins.js') }}"></script>
</body>

</html>
