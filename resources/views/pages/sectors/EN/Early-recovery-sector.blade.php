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
        .fa-bed-pulse{
            margin-left: 15px !important;
            margin-top: -21px;
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
                <div class="col-lg-6 wow sector-card fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative h-100"><img class="img-fluid position-absolute w-100 h-100"
                            src="{{ asset('images/Main/Erlyrecover.JPG') }}" alt="website template image" style="object-fit:cover;"></div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp; max-width: 100%;">
                    <div class="flex-row">
                        <h6 class="section-title bg-white text-start text-primary pe-3">Early Recovery</h6>
                        <i class="fa-solid fa-bed-pulse"></i>
                    </div>
                    <br><br>
                    <div class="row gy-2 gx-4 mb-4 ff00" >
                        <div class="col-sm-6 p-5">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Rayhan Organization provides the necessary support to communities in the early recovery stage from disasters and crises.</p>
                            <br>
                        </div>

                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>We support the reconstruction of damaged infrastructure and strengthen the resilience of affected communities to return to normal life.</p>
                            <br>
                        </div>

                        <div class="col-sm-12">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>We seek to enhance sustainability and resilience in affected communities, promote integration, and provide psychological and social support to those affected.
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



