@include('Tamplet-Parts-EN.head-EN')



<link rel="stylesheet" href="{{ asset('css/educationcss.css') }}">

    <style>
        .flex-row{
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
            align-items: center;
            margin-bottom: 20px;
        }
        .flaticon-building{
            margin-left: 15px !important;
            margin-top: -7px;
        }
        .fa-arrow-right{
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
                            src="{{ asset('images/Main/Education.jpg') }}" alt="website template image" style="object-fit:cover;"></div>
                </div>
                <div class="col-lg-6 wow fadeInUp sector-card2" data-wow-delay="0.3s">
                    <div class="flex-row">
                        <h6 class="section-title bg-white text-start text-primary pe-3">Accommodation & Non-Food Products</h6>
                        <i class="flaticon-building"></i>
                    </div>
                    <br><br>
                    <div class="row gy-2 gx-4 mb-4" >
                        <div class="col-sm-6 p-5">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Rayhan Organization provides shelter assistance and basic materials to displaced individuals and families.</p>
                            <br>
                        </div>

                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>We support the reconstruction of damaged homes and provide basic items such as blankets, clothes and household supplies.</p>
                            <br>
                        </div>

                        <div class="col-sm-12">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>We work to provide psychological and social support to those affected and provide basic services such as clean water and sanitation.
                        </div>
                        <br>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <!-- Education Part End -->

    @include('Tamplet-Parts-EN.footerEN')
