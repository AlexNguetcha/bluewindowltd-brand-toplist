<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Brand top list</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/toplist.css') }}">
    <style>
        body {
            padding: 0 !important;
            margin: 0 !important;
            font-family: 'Open Sans', Open-Sans-fallback, sans-serif !important;
            background-color: #ebebeb;
            color: #26313E;
        }

        .container {
            padding-left: 1rem;
            padding-right: 1rem;
            margin-top: 20px;
        }

        @media (min-width: 768px) {
            .container {
                padding-left: 1rem;
                padding-right: 1rem;
            }
        }

        @media (min-width: 1024px) {
            .container {
                padding-left: 4rem;
                padding-right: 4rem;
            }
        }

        @media (min-width: 1440px) {
            .container {
                padding-left: 16rem;
                padding-right: 16rem;
            }
        }

        .toplist-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
            position: relative;
            border: 1px solid #b4b4b4;
            background: #fff;
            padding: 2em 15px;
            border-radius: 2px;
            margin-bottom: 25px;
            /* padding-bottom: 15px; */
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
            flex-direction: column;
            gap: 25px;
        }

        .toplist-container_brands_item {
            width: 100%;
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
            font-weight: 600;
        }

        .toplist-container_brands_item .brand-terms div {
            max-width: 90%;
            word-wrap: break-word;
        }

        .border {
            /* border: 1px solid red; */
        }

        .toplist-container_brands_item .brand-top_number {
            background: #f0f1f5;
            width: 33px;
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-grow: 0;
        }

        .toplist-container_brands_item .brand-top_name {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            flex-grow: 1;

        }

        .toplist-container_brands_item .brand-top_name .brand-rating {
            font-size: 24px;
            line-height: 30px;
            text-align: center;
            font-weight: 800;
        }

        .toplist-container_brands_item .brand-top_name .brand-name {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 2px;
            font-size: 18px;
            text-align: center;
            font-weight: 700;
            color: #343A40;
        }

        .toplist-container_brands_item .brand-top_bonus {
            font-size: 1.565rem;
            padding-inline: 10px;
            text-align: center;
            font-weight: 900;
            line-height: 1;
            display: grid;
            justify-items: center;
            align-items: center;
            gap: 10px;
            width: 20%;
            flex-grow: 1;
        }

        .toplist-container_brands_item .brand-top_logo {
            flex-grow: 1;
            margin-left: 20px;
        }

        .toplist-container_brands_item .brand-top_bonus>span {
            font-size: 18px;
            padding-block: 3px;
            font-weight: 700;
            text-align: center;
            display: inline;
            line-height: 1;
            vertical-align: middle;
            padding: 0;
            margin: 0;
        }

        .toplist-container_brands_item .brand-top_actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-direction: column;
            min-width: 30%;
            flex-grow: 1;
            gap: 10px;
        }

        .toplist-container_brands_item .brand-top_actions .get-bonus {
            display: block;
            font-size: 16px;
            line-height: 24px;
            font-weight: 600;
            text-transform: uppercase;
            color: #fff;
            background: #149D6A;
            box-shadow: 0px 2px 0px 0px #009a62;
            border-radius: 5px;
            padding: 0.5rem .0rem;
            border: 0;
            width: 85%;
            min-width: 90px;
            text-decoration: none;
            text-align: center;
        }

        .toplist-container_brands_item .brand-top_actions .get-bonus:hover {
            box-shadow: none;
            color: #fff;
        }

        .toplist-container_brands_item .brand-top_actions .visit-website {
            text-transform: unset;
            text-align: center;
            margin: 12px auto 0;
            font-size: 16px;
            text-decoration: underline;
            color: #0F73E6;
            font-weight: 600;
        }

        @media (max-width: 768px) {
            .brand-top {
                flex-direction: column;
                align-items: flex-start;
                padding: 15px;
            }

            .brand-top_logo,
            .brand-top_name,
            .brand-top_bonus,
            .brand-top_actions {
                width: 100%;
                margin: 10px 0;
                text-align: center;
            }

            .brand-top_actions {
                flex-direction: row;
                justify-content: center;
                flex-wrap: wrap;
                gap: 10px;
            }

            .brand-top_bonus {
                font-size: 1.2rem;
                   min-width: 80% !important;
            }

            .brand-top_number {
                display: none !important;
            }

            .brand-top_name .brand-rating,
            .brand-top_name .brand-stars,
            .brand-top_name .brand-name {
                text-align: center;
            }

            .toplist-container_title h2 {
                font-size: 16px;
                text-align: center;
            }

            .brand-terms div {
                max-width: 100%;
                text-align: justify;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="toplist-container border">
            <div class="toplist-container_title">
                <h2>Notre sélection des meilleurs casinos en ligne fiables et certifiés par les experts de
                    CasinoOnlineFrancais en 2025
                </h2>
            </div>
            <div class="toplist-container_brands border">

                <div class="toplist-container_brands_item">
                    <div class="brand-top">
                        <div class="brand-top_number border">
                            <span>1</span>
                        </div>
                        <div class="brand-top_logo border">
                            <img src="https://www.casinoonlinefrancais.info/cdn-cgi/image/format=webp,width=255,height=100,quality=80/img/logo250/cashed-casino.webp"
                                alt="">
                        </div>
                        <div class="brand-top_name border">
                            <div class="brand-rating">4.8</div>
                            <div class="brand-stars">⭐⭐⭐⭐</div>
                            <div class="brand-name">
                                <img src="https://www.casinoonlinefrancais.info/img/commons/bcel/icon_verified.svg"
                                    alt="verified icon" loading="lazy" height="18px" width="18px"
                                    title="Certified by CasinoOnlineFrancais.info">
                                Cashed Casino
                            </div>
                        </div>
                        <div class="brand-top_bonus border">
                            Jusqu'à 750$
                            <span>+ 200 Tours Gratuits</span>
                        </div>
                        <div class="brand-top_actions border">
                            <a href="#" class="get-bonus">
                                Obtenir le bonus
                            </a>
                            <a href="#" class="visit-website">
                                Visiter le site
                            </a>
                        </div>
                    </div>
                    <div class="brand-terms">
                        <div>
                            Découvrez Cashed Casino, la nouvelle destination de divertissement en ligne préférée des
                            joueurs
                            français. Plongez dans son univers de jeu passionnant et profitez de tous ses bonus et
                            fonctionnalités.
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</body>

</html>
