<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>{{ $title }}</title>
        <meta name="description" content="{{ $site_name }}" />

        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="{{ $title }}" />
        <meta property="og:description" content="{{ $site_name }}" />
        <meta property="og:site_name" content="{{ $site_name }}" />

        <!-- Bootstrap 4.6 CSS - this *MUST* be the first CSS instantiated on the page -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-xl">
                <a class="navbar-brand" href="/">
                    <svg width="206px" height="55px" id="svg__logo" viewBox="0 0 206 55" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title>Lean TECHniques</title>

                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Group" transform="translate(0.001000, 0.001000)">
                                <polygon class="fill" sid="Fill-1104" fill="#1C5268" fill-rule="nonzero" points="70.5499 24.8452 70.5499 11.0272 71.7519 11.0272 71.7519 23.7682 78.4429 23.7682 78.4429 24.8452"></polygon>
                                <polygon class="fill" id="Fill-1105" fill="#1C5268" fill-rule="nonzero" points="83.4154 24.8452 83.4154 11.0272 92.1784 11.0272 92.1784 12.1042 84.5964 12.1042 84.5964 17.2212 92.0334 17.2212 92.0334 18.2992 84.5964 18.2992 84.5964 23.7682 92.1784 23.7682 92.1784 24.8452"></polygon>
                                <path class="fill" d="M102.2687,12.291 L98.9957,20.37 L105.5207,20.37 L102.2687,12.291 Z M107.2817,24.845 L105.9137,21.448 L98.6017,21.448 L97.2347,24.845 L95.8677,24.845 L101.5227,11.027 L102.9937,11.027 L108.6487,24.845 L107.2817,24.845 Z" id="Fill-1106" fill="#1C5268" fill-rule="nonzero"></path>
                                <polygon class="fill" id="Fill-1107" fill="#1C5268" fill-rule="nonzero" points="122.4696 24.8452 113.7686 12.9742 113.7686 24.8452 112.5876 24.8452 112.5876 11.0272 113.7896 11.0272 122.4486 22.7322 122.4486 11.0272 123.6296 11.0272 123.6296 24.8452"></polygon>
                                <polygon class="fill" id="Fill-1108" fill="#1C5268" fill-rule="nonzero" points="73.4706 44.9082 73.4706 33.2242 69.2856 33.2242 69.2856 31.0902 80.0796 31.0902 80.0796 33.2242 75.8936 33.2242 75.8936 44.9082"></polygon>
                                <polygon class="fill" id="Fill-1109" fill="#1C5268" fill-rule="nonzero" points="83.2766 44.9082 83.2766 31.0902 92.7446 31.0902 92.7446 33.2242 85.6996 33.2242 85.6996 36.7872 92.5996 36.7872 92.5996 38.9212 85.6996 38.9212 85.6996 42.7742 92.7446 42.7742 92.7446 44.9082"></polygon>
                                <path class="fill" d="M95.9189,38.0093 C95.9189,33.7423 99.0889,30.8623 103.1699,30.8623 C105.9459,30.8623 107.6859,32.2913 108.7009,33.9483 L106.6499,35.0263 C105.9869,33.8663 104.6409,33.0163 103.1699,33.0163 C100.4349,33.0163 98.4049,35.0883 98.4049,38.0093 C98.4049,40.8893 100.4349,43.0023 103.1699,43.0023 C104.6409,43.0023 105.9869,42.1323 106.6499,40.9923 L108.7219,42.0293 C107.6639,43.6853 105.9459,45.1563 103.1699,45.1563 C99.0889,45.1563 95.9189,42.2573 95.9189,38.0093" id="Fill-1110" fill="#1C5268" fill-rule="nonzero"></path>
                                <polygon class="fill" id="Fill-1112" fill="#1C5268" fill-rule="nonzero" points="121.7029 44.9082 121.7029 38.8592 114.5149 38.8592 114.5149 44.9082 112.0909 44.9082 112.0909 31.0902 114.5149 31.0902 114.5149 36.7252 121.7029 36.7252 121.7029 31.0902 124.1259 31.0902 124.1259 44.9082"></polygon>
                                <polygon class="fill" id="Fill-1114" fill="#1C5268" fill-rule="nonzero" points="138.5766 44.9082 129.8756 33.0372 129.8756 44.9082 128.6946 44.9082 128.6946 31.0902 129.8966 31.0902 138.5556 42.7952 138.5556 31.0902 139.7366 31.0902 139.7366 44.9082"></polygon>
                                <polygon class="fill" id="Fill-1116" fill="#1C5268" fill-rule="nonzero" points="144.739 44.908 145.919 44.908 145.919 31.09 144.739 31.09"></polygon>
                                <path class="fill" d="M160.1109,43.1264 L157.9769,40.9094 L158.8059,40.1434 L160.9389,42.3804 C161.8919,41.2834 162.4519,39.7714 162.4519,38.0094 C162.4519,34.5084 160.2979,31.9384 156.9829,31.9384 C153.6469,31.9384 151.5129,34.5084 151.5129,38.0094 C151.5129,41.4894 153.6469,44.0794 156.9829,44.0794 C158.1829,44.0794 159.2609,43.7274 160.1109,43.1264 M150.2699,38.0094 C150.2699,33.9694 152.9219,30.8624 156.9829,30.8624 C161.0219,30.8624 163.6949,33.9694 163.6949,38.0094 C163.6949,40.1014 162.9699,41.9244 161.7259,43.2094 L163.1769,44.7214 L162.3689,45.4674 L160.8979,43.9544 C159.8409,44.7214 158.5159,45.1564 156.9829,45.1564 C152.9219,45.1564 150.2699,42.0484 150.2699,38.0094" id="Fill-1118" fill="#1C5268" fill-rule="nonzero"></path>
                                <path class="fill" d="M168.0606,39.6045 L168.0606,31.0895 L169.2626,31.0895 L169.2626,39.5845 C169.2626,42.3805 170.7326,44.0795 173.4456,44.0795 C176.1606,44.0795 177.6316,42.3805 177.6316,39.5845 L177.6316,31.0895 L178.8326,31.0895 L178.8326,39.6045 C178.8326,43.0225 177.0096,45.1565 173.4456,45.1565 C169.9036,45.1565 168.0606,43.0015 168.0606,39.6045" id="Fill-1119" fill="#1C5268" fill-rule="nonzero"></path>
                                <polygon class="fill" id="Fill-1120" fill="#1C5268" fill-rule="nonzero" mask="url(#mask-8)" points="183.7976 44.9082 183.7976 31.0902 192.5606 31.0902 192.5606 32.1672 184.9776 32.1672 184.9776 37.2842 192.4156 37.2842 192.4156 38.3622 184.9776 38.3622 184.9776 43.8302 192.5606 43.8302 192.5606 44.9082"></polygon>
                                <path class="fill" d="M195.9175,42.9604 L196.6845,42.0704 C197.5745,43.0854 199.0255,44.0794 201.0135,44.0794 C203.8305,44.0794 204.6395,42.5044 204.6395,41.3244 C204.6395,37.2634 196.3525,39.3764 196.3525,34.5494 C196.3525,32.2924 198.3825,30.8624 200.8895,30.8624 C202.9395,30.8624 204.5155,31.5874 205.5715,32.8094 L204.7845,33.6794 C203.7895,32.4784 202.3805,31.9394 200.8275,31.9394 C198.9835,31.9394 197.5955,32.9954 197.5955,34.4874 C197.5955,38.0304 205.8825,36.0834 205.8825,41.2414 C205.8825,43.0224 204.7015,45.1564 200.9725,45.1564 C198.6935,45.1564 196.9745,44.2244 195.9175,42.9604" id="Fill-1121" fill="#1C5268" fill-rule="nonzero"></path>
                                <polygon class="fill" id="Fill-1122" fill="#1C5268" fill-rule="nonzero" mask="url(#mask-12)" points="13.1716 16.271 13.1716 37.771 30.2216 37.771 30.2216 38.511 12.4306 38.511 12.4306 16.271"></polygon>
                                <polygon id="Fill-1123" class="fill" fill="#1C5268" fill-rule="nonzero" mask="url(#mask-14)" points="36.8689 18.9912 36.8689 38.5612 34.0549 38.5612 34.0549 18.9912 26.7959 18.9912 26.7959 16.1772 44.1279 16.1772 44.1279 18.9912"></polygon>
                                <polyline class="stroke lt-border" id="polyline" stroke="#743837" stroke-width="5" points="52.7756383 28.167413 52.7756383 2.58437462 2.65558906 2.58437462 2.65558906 52.3003964 49.7166378 52.3003964"></polyline>
                            </g>
                        </g>
                    </svg>
                </a>
                <ul class="navbar-nav mr-md-auto">
                    <li class="nav-item">
                        <h5 class="mb-0"><a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">{{ $title }}</a></h5>
                    </li>
                </ul>
            </nav>
        </header>
        <main id="main-content">
            <div class="container">
