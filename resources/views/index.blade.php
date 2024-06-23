<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelas.com</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .packages:hover {
            background-color: #E0EFF5;
            cursor: pointer;
        }

        .primary-btn {
            color: #C19D6C;
            border: #C19D6C;
        }

        .btn-gold {
            color: #fff;
            background-color: #C19D6C;
            border-color: #C19D6C;
        }

        .btn-gold:hover {
            color: #fff;
            background-color: #C19D6C;
            border-color: #C19D6C;
        }

        .btn-gold:focus,
        .btn-gold.focus {
            box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
        }

        .btn-outline-gold {
            color: #C19D6C;
            border-color: #C19D6C;
        }

        .btn-outline-gold:hover {
            color: #fff;
            background-color: #dcae6d;
            border-color: #C19D6C;
        }

        .btn-outline-gold:focus,
        .btn-outline-gold.focus {
            box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
        }

        .btn-paket {
            background: #87BBD1;
        }

        .btn-paket:hover {
            background: #2D6075;
            color: white;
        }
    </style>
</head>

<body>
    <nav class="navbar justify-content-between navbar-expand-lg" style="background: #FDFDFD;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/images/logo-kelas.jpg" alt="" height="34px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Benefit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Paket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kelas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak Kami</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <button type="button" class="btn btn-gold mx-2">Ajukan Demo</button>
                    <button class="btn btn-outline-gold mx-2" type="submit">Masuk</button>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid p-5 d-flex justify-content-center align-items-center"
        style=" background-image: url('images/bg-1.jpg'); background-size: contain;">
        <div class="text-center text-white">
            <h1 class="display-5 fw-bold">Tingkatkan Performa Bisnis Anda</h1>
            <p class="fs-5">Semua solusi untuk mempermudah Training dan Upskilling karyawan di perusahaan Anda</p>
            <button class="btn btn-gold" type="button">Ajukan Demo</button>
        </div>
    </div>

    <div class="container-fluid p-5 rounded-3 d-flex justify-content-center align-items-center">
        <div class="text-center">
            <h1 class="fs-3 fw-bold mb-4">Telah Dipercaya oleh 10.000+ Profesional User dari</h1>

            {{-- Image For Desktop --}}
            <div class="justify-content-between align-items-center d-none d-lg-flex gap-4">
                <div>
                    <img src="/images/ieg.jpg" alt="" style="height: 75px">
                </div>
                <div>
                    <img src="/images/iep.jpg" alt="" style="height: 75px">
                </div>
                <div>
                    <img src="/images/sctv.jpg" alt="" style="height: 75px">
                </div>
                <div>
                    <img src="/images/emtek.jpg" alt="" style="height: 75px">
                </div>
                <div>
                    <img src="/images/sicepat.jpg" alt="" style="height: 75px">
                </div>
                <div>
                    <img src="/images/cloudhost.jpg" alt="" style="height: 75px">
                </div>
                <div>
                    <img src="/images/adirect.jpg" alt="" style="height: 75px">
                </div>
                <div>
                    <img src="/images/volta.jpg" alt="" style="height: 75px">
                </div>
            </div>

            {{-- Image For Tab and Mobile --}}
            <div id="carouselExampleIndicators" class="carousel slide d-lg-none" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active gap-4">
                        <div class="d-flex">
                            <div>
                                <img src="/images/ieg.jpg" alt="" style="height: 75px">
                            </div>
                            <div>
                                <img src="/images/iep.jpg" alt="" style="height: 75px">
                            </div>
                            <div>
                                <img src="/images/sctv.jpg" alt="" style="height: 75px">
                            </div>
                            <div>
                                <img src="/images/emtek.jpg" alt="" style="height: 75px">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item gap-4">
                        <div class="d-flex">
                            <div>
                                <img src="/images/sicepat.jpg" alt="" style="height: 75px">
                            </div>
                            <div>
                                <img src="/images/cloudhost.jpg" alt="" style="height: 75px">
                            </div>
                            <div>
                                <img src="/images/adirect.jpg" alt="" style="height: 75px">
                            </div>
                            <div>
                                <img src="/images/volta.jpg" alt="" style="height: 75px">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container p-5">
        <div class="mb-4">
            <p class="fs-2 fw-bold text-center">Bagaimana Kelas Center Membantu Anda?</p>
            <p class="fs-6 text-center">Kami menghadirkan platform pembelajaran yang komprehensif untuk
                memberdayakan karyawan Anda. Tingkatkan produktivitas dan efisiensi tim dengan Kelas Center.</p>
        </div>
        <div class="d-flex justify-content-center gap-2 mb-4">
            <button type="button" class="btn btn-outline-gold btn-promo"
                onclick='filterPromo(this, "LMS")'>LMS</button>
            <button type="button" class="btn btn-outline-gold btn-promo"
                onclick='filterPromo(this, "Featured")'>Featured</button>
            <button type="button" class="btn btn-outline-gold btn-promo"
                onclick='filterPromo(this, "Video Learning + Webinar")'>Video Learning + Webinar</button>
            <button type="button" class="btn btn-outline-gold btn-promo"
                onclick='filterPromo(this, "Inquiry Learning")'>Inquiry Learning</button>
        </div>
        <div class="row gap-4">
            <div class="col-12 col-md-6 order-md-1 order-2 " id="promoSection">
            </div>
            <div class="col-12 col-md-6 order-md-2 order-1">
                <div class="container bg-light h-100 w-full rounded">
                    <img src="https://picsum.photos/seed/picsum/300/200?random=1" class="card-img-top" alt="...">
                </div>
            </div>
        </div>
    </div>

    <div class="container p-5">
        <p class="fs-2 fw-bold text-center">Pilihan Paket Untuk Perusahaan di Kelas Center</p>
        <div class="row row-cols-1 row-cols-md-3 mb-4 d-none d-lg-flex">
            @foreach ($packages as $item)
                <div class="col">
                    <div class="packages rounded-5 rounded-bottom-0 h-100 border border-2 border-secondary-subtle p-4"
                        style="">
                        <div class="detail-packages">
                            <p class="title fw-bold fs-4 d-flex align-items-center gap-4">
                                <img src="/images/icons/{{ $item->icons }}" alt="" height="40px">
                                {{ $item->name }}
                            </p>
                            <p class="kelebihan text-secondary my-2 fs-5 fw-light">Kelebihan</p>
                            <ul style="list-style-type: none; padding:0;">
                                @foreach (json_decode($item->benefit) as $benefit)
                                    <li class="fs-6 d-flex mb-2 align-items-center gap-2">
                                        <img src="/images/icons/vector.png" alt="" height="20px">
                                        {{ $benefit }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <hr style="border-top: 2px dashed #8A8A8A">
                        <p class="kelebihan text-secondary my-2 fs-6 fw-light">Rp.
                            {{ number_format($item->base_price) }}</p>
                        <p class="kelebihan my-2 fs-5">
                            <span class="fw-bold">Rp.
                                {{ number_format($item->base_price - $item->base_price * ($item->base_discount / 100)) }}</span>
                            <span class="fw-light fs-6">/ Bulan</span>
                        </p>

                        <div class="d-grid gap-2">
                            <button class="btn btn-paket" type="button">Pilih Paket</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Mobile and Tab View --}}
        <div id="carouselPaket" class="carousel slide d-lg-none mb-4" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($packages as $key => $item)
                    <div class="carousel-item {{$key == 0 ? 'active' : ''}}" data-bs-interval="2000">
                        <div class="packages rounded-5 rounded-bottom-0 h-100 border border-2 border-secondary-subtle p-4"
                            style="">
                            <div class="detail-packages">
                                <p class="title fw-bold fs-4 d-flex align-items-center gap-4">
                                    <img src="/images/icons/{{ $item->icons }}" alt="" height="40px">
                                    {{ $item->name }}
                                </p>
                                <p class="kelebihan text-secondary my-2 fs-5 fw-light">Kelebihan</p>
                                <ul style="list-style-type: none; padding:0;">
                                    @foreach (json_decode($item->benefit) as $benefit)
                                        <li class="fs-6 d-flex mb-2 align-items-center gap-2">
                                            <img src="/images/icons/vector.png" alt="" height="20px">
                                            {{ $benefit }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <hr style="border-top: 2px dashed #8A8A8A">
                            <p class="kelebihan text-secondary my-2 fs-6 fw-light">Rp.
                                {{ number_format($item->base_price) }}</p>
                            <p class="kelebihan my-2 fs-5">
                                <span class="fw-bold">Rp.
                                    {{ number_format($item->base_price - $item->base_price * ($item->base_discount / 100)) }}</span>
                                <span class="fw-light fs-6">/ Bulan</span>
                            </p>

                            <div class="d-grid gap-2">
                                <button class="btn btn-paket" type="button">Pilih Paket</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


        <div class="rounded-top-0 rounded-4 text-white p-4" style="background-color: #C19D6C;">
            <div class="d-lg-flex g-md-4 justify-content-between">

                <div class="d-lg-flex align-items-center gap-4">
                    <div class="d-flex align-items-center gap-4">
                        <img src="/images/icons/office.png" alt="" srcset="">
                        <span class="fs-5 fw-bold">Enterprise</span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <img src="/images/icons/vector-white.png" style="filter: grayscale;" alt=""
                            srcset="">
                        <span class="fs-6"> >100 Users </span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <img src="/images/icons/vector-white.png" alt="" srcset="">
                        <span class="fs-6"> All Access Class </span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <img src="/images/icons/vector-white.png" alt="" srcset="">
                        <span class="fs-6"> More Feature </span>
                    </div>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn px-5 btn-light fw-bold" style="color:#C19D6C" type="button">Contact
                        Us</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container p-5">
        <div class="mb-4">
            <p class="fs-2 fw-bold text-center">Lebih dari 2000+ Learning Video</p>
            <p class="fs-6 text-center">Kami juga sudah menyediakan banyak pelatihan yang beragam, pelatihan disusun
                dan dibuat oleh tim kurikulum profesional bersama tim video profesional untuk menghasilkan video dengan
                kualitas tinggi.</p>
        </div>

        <div class="d-flex justify-content-center gap-2 mb-4">
            <button type="button" class="btn btn-outline-gold btn-video"
                onclick='filterVideo(this, "Kelas.com")'>Kelas.com</button>
            <button type="button" class="btn btn-outline-gold btn-video"
                onclick='filterVideo(this, "Kelas.work")'>Kelas.work</button>
            <button type="button" class="btn btn-outline-gold btn-video"
                onclick='filterVideo(this, "Bootcamp")'>Bootcamp</button>
        </div>

        <div class="row row-cols-2 row-cols-md-4 g-4 mb-4" id="videoSection">
        </div>
    </div>

    <div class="container-fluid px-5 py-5 d-flex justify-content-center align-items-center"
        style=" background-image: url('images/bg-1.jpg'); background-size: contain;">
        <div class="text-center text-white">
            <h1 class="fs-4 fw-bold">Tingkatkan Kualitas Perusahaan Anda</h1>
            <p class="fs-6">Kami ingin membantu dan menunjukkan kepada Anda bagaimana Kelas corp dapat membantu dalam
                mengelola pelatihan dan membuat prosesnya lebih cepat dan lebih mudah.</p>
            <button class="btn btn-gold" type="button">Ajukan Demo</button>
        </div>
    </div>

    <div class="footer container-fluid p-5 bg-black">
        <div class="container">
            <div class="row text-white">
                <div class="col-md-3 col-12">
                    <a class="navbar-brand mb-2" href="#">
                        <img src="/images/logo-kelas.png" alt="" height="36px">
                    </a>
                    <p class="subtitle fw-light fs-6">© 2021 Landify UI Kit. All rights reserved</p>
                </div>
                <div class="col-md-3 col-12 mb-4">
                    <p class="fw-bold fs-5 title">Company</p>
                    <p class="subtitle fw-light fs-6">Tentang Kami</p>
                    <p class="subtitle fw-light fs-6">Ajukan Demo</p>
                    <p class="subtitle fw-light fs-6">Kelas.Work</p>
                    <p class="subtitle fw-light fs-6">Kelas.Com</p>
                </div>
                <div class="col-md-3 col-12 mb-4">
                    <p class="fw-bold fs-5 title">Kebijakan</p>
                    <p class="subtitle fw-light fs-6">Kebijakan dan Privasi</p>
                    <p class="subtitle fw-light fs-6">Syarat & Ketentuan</p>
                </div>
                <div class="col-md-3 col-12 mb-4">
                    <p class="fw-bold fs-5 title">Hubungi Kami</p>
                    <span class="subtitle fw-light fs-6 d-flex gap-2 align-items-center">
                        <img src="/images/icons/email.png" alt="" height="16px">
                        Nabila.Anggraini@kelas.com
                    </span>
                    <span class="subtitle fw-light fs-6 d-flex gap-2 align-items-center">
                        <img src="/images/icons/wa.png" alt="" height="16px">
                        +62 811 3366 763 (Nabilla Anggraini)
                    </span>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

<script>
    let videos = {!! json_encode($videos) !!}
    let promo = {!! json_encode($promotions) !!}

    document.addEventListener("DOMContentLoaded", function() {
        const firstButton = document.querySelector('.btn-video')
        const firstButtonPromo = document.querySelector('.btn-promo')
        if (firstButton) {
            filterVideo(firstButton, "Kelas.com");
        };

        if (firstButtonPromo) {
            filterPromo(firstButtonPromo, "LMS")
        }
    });

    function filterVideo(button, params = 'Kelas.com') {
        // Handle button class changes
        const buttons = document.querySelectorAll('.btn-video');
        buttons.forEach((btn, index) => {
            if (btn === button) {
                btn.classList.remove('btn-outline-gold');
                btn.classList.add('btn-gold');
            } else {
                btn.classList.remove('btn-gold');
                btn.classList.add('btn-outline-gold');
            }
        });

        let result = videos.filter(item => item.category.includes(params))
        displayResults(result)

    }

    function displayResults(results) {
        const resultsContainer = document.getElementById('videoSection');
        resultsContainer.innerHTML = '';

        results.forEach(item => {
            const resultDiv = document.createElement('div');
            resultDiv.className = 'result-item col';
            resultDiv.innerHTML = `
                <div class="col">
                    <div class="card">
                        <img src="https://picsum.photos/seed/picsum/300/200" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fs-5 fw-bold">${item.video_title}</h5>
                            <p class="fs-6 fw-light">
                                <span>${item.speaker}</span>
                            </p>
                            <p class="fs-6 fw-light">
                                <span>${item.speaker_title}</span>
                            </p>
                        </div>
                    </div>
                </div>
            `;
            resultsContainer.appendChild(resultDiv);
        });
    }

    function filterPromo(button, params = 'LMS') {
        // Handle button class changes
        const buttons = document.querySelectorAll('.btn-promo');
        buttons.forEach((btn, index) => {
            if (btn === button) {
                btn.classList.remove('btn-outline-gold');
                btn.classList.add('btn-gold');
            } else {
                btn.classList.remove('btn-gold');
                btn.classList.add('btn-outline-gold');
            }
        });

        let result = promo.filter(item => item.type.includes(params))
        displayResultsPromo(result)
    }

    function displayResultsPromo(results) {
        const resultsContainer = document.getElementById('promoSection');
        resultsContainer.innerHTML = '';

        results.forEach(item => {
            const resultDiv = document.createElement('div');
            resultDiv.className = 'result-item';

            let benefits = JSON.parse(item.benefits)
            let benefitHtml = benefits.map(benefit => {
                return `
                    <div>
                        <div style="background-color: #F6F6F6;"
                            class="px-4 mb-2 py-3 fs-6 fw-bold rounded d-flex gap-2 align-items-center">
                            <img src="/images/icons/check.png" alt="" height="24px">
                            ${benefit.title}
                        </div>
                        <p>${benefit.description}</p>
                    </div>
                `;
            }).join('');

            resultDiv.innerHTML = `
                <p class="fs-4 fw-bold mb-2"> ${item.title}</p>
                <p class="fs-6">${item.description}</p>
                ${benefitHtml}
            `;
            resultsContainer.appendChild(resultDiv);
        });
    }
</script>

</html>
