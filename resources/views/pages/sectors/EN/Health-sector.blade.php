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
        .fa-briefcase-medical{
            margin-left: 15px !important;
            margin-bottom: 17px;
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
                        <h6 class="section-title bg-white text-start text-primary pe-3">Health</h6>
                        <i class="fa-solid fa-briefcase-medical"></i>

                    </div>
                    <br><br><br>
                    <div class="row gy-2 gx-4 mb-4 ff22" >
                        <div class="col-sm-6 p-5">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Rayhan Organization aims to improve health outcomes and provide basic health services to communities that need them.</p>
                            <br>
                        </div>


                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>We provide primary health care services, preventive awareness, and hygiene and proper nutrition awareness campaigns.
                            </p>
                        </div>
                        <br>
                    </div>
                    <br>
                    <br>
                    <br><br>
                </div>
            </div>
        </div>
    </div>
    <!-- Education Part End -->


@include('Tamplet-Parts-EN.footerEN')
