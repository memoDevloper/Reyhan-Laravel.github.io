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
        .flaticon-pills1{
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
                            src="{{ asset('images/Main/Prodacion2.jpg') }}" alt="website template image" style="object-fit:cover; height: 503px;"></div>
                </div>
                <div class="col-lg-6 wow fadeInUp sector-card2 tl5" data-wow-delay="0.3s">
                    <div class="flex-row">
                        <h6 class="section-title bg-white text-start text-primary pe-3">Protection</h6>
                        <i class="flaticon-pills1"></i>
                    </div>
                    <div class="row gy-2 gx-4 mb-4 ff11" >
                        <div class="col-sm-6 p-5">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Promoting safe and honorable access to rights and services for all, especially vulnerable and marginalized groups.</p>
                            <br>
                        </div>

                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Rayhan Organization seeks to protect vulnerable individuals and provide the necessary support to ensure their safety and rights.</p>
                            <br>
                        </div>

                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Our programs focus on preventing and treating violence and exploitation and providing psychological and social support to those affected.
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Promoting the psychological and social health of vulnerable and affected individuals and communities by providing psychosocial support and psychological care services.</p>
                            <br>
                        </div>
                        <br>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>By providing legal advice and guidance, we seek to protect the rights and dignity of the individuals we serve.</p>
                            <br>
                        </div>

                    </div>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <!-- Education Part End -->

    @include('Tamplet-Parts-EN.footerEN')
