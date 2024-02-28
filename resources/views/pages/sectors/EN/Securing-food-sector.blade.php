@include('Tamplet-Parts-EN.head-EN')


        <link rel="stylesheet" href="{{ asset('css/educationcss.css') }}">


    <style>
        .flex-row {
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
            align-items: center;
            margin-bottom: 20px;
        }

        .flaticon-travel {
            margin-left: 15px !important;
            margin-top: -23px;
        }

        .fa-arrow-right {
            padding-right: 8px;
        }
    </style>


</head>

<body>
    @include('Tamplet-Parts-EN.header')

    <!-- Education Part Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp sector-card" data-wow-delay="0.1s">
                    <div class="position-relative h-100"><img class="img-fluid position-absolute w-100 h-100"
                            src="{{ asset('images/Main/Food-Help.JPG') }}" alt="website template image"
                            style="object-fit:cover;"></div>
                </div>
                <div class="col-lg-6 wow fadeInUp sector-card2" data-wow-delay="0.3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="flex-row">
                        <h6 class="section-title bg-white text-start text-primary pe-3">Securing food and livelihoods
                        </h6>
                        <i class="flaticon-travel"></i>
                    </div>
                    <div class="row gy-2 gx-4 mb-4 ff11">
                        <div class="col-sm-6 p-5">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Rayhan Organization works
                                to enhance food security and promote sustainable livelihoods for vulnerable groups.</p>
                            <br>
                        </div>

                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>We support sustainable
                                agricultural practices, provide vocational training and facilitate market access for
                                local agricultural products.</p>
                            <br>
                        </div>

                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>We seek to create job
                                opportunities and enhance the entrepreneurial spirit among young people and job seekers.
                            </p>
                        </div>
                        <br>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>We provide support to
                                small and medium businesses and promote innovation in agriculture to ensure food
                                security and economic stability.</p>
                            <br>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <!-- Education Part End -->

    @include('Tamplet-Parts-EN.footerEN')
