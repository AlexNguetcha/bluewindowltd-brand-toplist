<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Brand top list</title>
    <link rel="stylesheet" href="{{ asset('css/toplist.css') }}">
    <style>
        body {
            padding: 0 !important;
            margin: 0 !important;
            font-family: 'Open Sans', Open-Sans-fallback, sans-serif;
            font-weight: 600;
            font-size: 16px;
            background-color: #ebebeb;
            color: #26313E;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .toplist-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
            border: 1px solid #ccc;
            padding: 10px;

            position: relative;
            border-radius: 2px;
            background: #fff;
            border: 1px solid #b4b4b4;
            margin-bottom: 25px;
            padding-bottom: 15px !important;
        }

        .toplist-container_title {}

        .toplist-container_title h2 {
            padding: 12px;
            margin-bottom: 0;
            margin-top: 0;
            color: #fff;
            text-shadow: 0 1px 1px rgba(0, 0, 0, .5);
            text-align: left;
            border-radius: 2px 2px 0 0;
            background-clip: padding-box;
            background-image: -webkit-linear-gradient(bottom, #212933 0, #283442 100%);
            position: relative;
            font-size: 19px;
            line-height: 26px;
            font-weight: 900;
        }

        .toplist-container_brands {
            display: flex;
            gap: 15px;
        }

        .toplist-container_brands_item .brand-top {
            display: flex;
            align-items: center;
            background: #fff;
            border-radius: 3px;
            position: relative;
            border: solid 1px rgba(0, 0, 0, 0.075);
            box-shadow: 0 0.125em 0.25em rgba(0, 0, 0, 0.075);
            padding: 20px 0;
        }

        .toplist-container_brands_item .brand-terms {
            background: #F0F1F5;
            font-size: 12px;
            line-height: 16px;
            padding: 10px 16px;
            border-radius: 0 0 3px 3px;
            z-index: 1;
            color: #4E525D;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="toplist-container">
            <div class="toplist-container_title">
                <h2>Notre sélection des meilleurs casinos en ligne fiables et certifiés par les experts de
                    CasinoOnlineFrancais en 2025
                </h2>
            </div>
            <div class="toplist-container_brands">
                <div class="toplist-container_brands_item">
                    <div class="brand-top">

                    </div>
                    <div class="brand-terms">
                        Découvrez Cashed Casino, la nouvelle destination de divertissement en ligne préférée des joueurs
                        français. Plongez dans son univers de jeu passionnant et profitez de tous ses bonus et
                        fonctionnalités.
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
