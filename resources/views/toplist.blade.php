<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Brand top list</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/toplist.css') }}">
    <script src="{{ asset('js/toplist.js') }}"></script>
</head>

<body>
    <div class="container">
        <div class="toplist-container border">
            <div class="toplist-container_title">
                <h2>Notre sélection des meilleurs casinos en ligne fiables et certifiés par les experts en 2025
                </h2>
            </div>
            <div class="toplist-filter">
                <div>
                    <label for="sort-select" class="toplist-container_label">Trier par pays</label>
                    <select id="country-code" class="toplist-container_select">
                        <option value="all">Tous les pays</option>
                        <option value="cm">Cameroun</option>
                        <option value="ca">Canada</option>
                        <option value="be">Belgique</option>
                        <option value="fr">France</option>
                        <option value="sn">Sénégal</option>
                    </select>
                </div>
            </div>
            <div style="margin: auto; padding: 2em;" id="loading">Chargement en cours...</div>
            <div id="brand-container" class="toplist-container_brands border">

                {{-- <div class="toplist-container_brands_item">
                    <div class="brand-top">
                        <div class="brand-top_number border">
                            <span>1</span>
                        </div>
                        <div class="brand-top_logo border">
                            <img src="https://www.casinoonlinefrancais.info/cdn-cgi/image/format=webp,width=255,height=100,quality=80/img/logo250/cashed-casino.webp"
                                alt="">
                        </div>
                        <div class="brand-top_name border">
                            <div class="brand-rating-stars">
                                <div class="brand-rating">4.8</div>
                                <div class="brand-stars">⭐⭐⭐⭐</div>
                            </div>
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
                </div> --}}

            </div>

        </div>
    </div>
</body>

</html>
