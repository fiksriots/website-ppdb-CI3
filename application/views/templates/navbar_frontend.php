<body>
    <div class="hero_area">
        <!-- heade strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.html">
                        <h3>
                            PPDB
                        </h3>
                        <span> ONLINE</span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <spar sectionn class="navbar-toggler-icon"></spar>
                    </button>

                    <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
                        <ul class="navbar-nav  ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about"> About </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#course"> Panduan </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#event"> Gelombang </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('auth/login') ?>">Login</a>
                            </li>
                        </ul>

                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
        <!-- slider section -->
        <section class=" slider_section position-relative">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="detail-box">
                                        <div>
                                            <h1>
                                                PPDB ONLINE
                                            </h1>
                                            <span>Ayo Segera Daftar
                                                <br></span>
                                            <a href="<?php  echo base_url('register') ?>">
                                                Daftar
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="detail-box">
                                        <div>
                                            <h1>
                                                SMK BARUNAWATI SURABAYA
                                            </h1>
                                            <a href="https://smk.ybbs-surabaya.id/">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="detail-box">
                                        <div>
                                            <h1>
                                                YAYASAN BARUNAWATI BIRU SURABAYA
                                            </h1>
                                            <a href="https://ybbs-surabaya.id/">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end slider section -->
    </div>