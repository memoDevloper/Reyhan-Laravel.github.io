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

        .fa-cloud-sun-rain{
            margin-left: 15px !important;
            margin-top: -10px;
            color: rgb(70, 194, 194);
        }

        .fa-arrow-right {
            padding-right: 8px;
        }

        .padspace{
            padding: 20px;
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
                    <div class="position-relative h-100"><img class="img-fluid position-absolute w-100 height-1001"
                        src="{{ asset('images/Main/Prodacion.jpg') }}" alt="website template image" style="object-fit:cover;"></div>
                </div>
                <div class="col-lg-6 wow fadeInUp sector-card2 tl5" data-wow-delay="0.3s">
                    <div class="flex-row">
                        <h6 class="section-title bg-white text-start text-primary pe-3">Environment & Climate Change
                        </h6>
                        <i class="fa-solid fa-cloud-sun-rain"></i>
                    </div>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0 padspace"><i class="fa fa-arrow-right text-primary me-2"></i>Rayhan Organization is committed to protecting the environment and confronting the challenges related to climate change.</p>
                        </div>
                        <br>
                        <div class="col-sm-6">
                            <p class="mb-0 padspace" style="padding-top: 0 !important;"><i class="fa fa-arrow-right text-primary me-2"></i>We raise awareness of environmental issues and promote sustainable practices in resource management.</p>
                        </div>
                    </div>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0 padspace"><i class="fa fa-arrow-right text-primary me-2"></i>Our initiatives include renewable energy projects and waste and water management in accordance with environmental standards.
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0 padspace"><i class="fa fa-arrow-right text-primary me-2"></i>We work to build the capabilities of communities to confront the effects of climate change and reduce environmental degradation through sustainable development practices.</p>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <!-- Education Part End -->

@include('Tamplet-Parts-EN.footerEN')
