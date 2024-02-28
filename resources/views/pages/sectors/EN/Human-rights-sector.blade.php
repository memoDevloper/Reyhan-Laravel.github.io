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
        .fa-scale-balanced{
            margin-left: 15px !important;
            margin-top: -18px;
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
                            src="{{ asset('images/Main/HumenRights.jpg') }}" alt="website template image" style="object-fit:cover;"></div>
                </div>
                <div class="col-lg-6 wow fadeInUp sector-card2" data-wow-delay="0.3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="flex-row">
                        <h6 class="section-title bg-white text-start text-primary pe-3">Human rights and democracy</h6>
                        <i class="fa-solid fa-scale-balanced"></i>
                    </div>
                    <br><br>
                    <div class="row gy-2 gx-4 mb-4 ff00" >
                        <div class="col-sm-6 p-5">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Rayhan Organization seeks to support human rights and promote democracy and the rule of law in the communities it serves.</p>
                            <br>
                        </div>

                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>The organization seeks to spread the culture of human rights and civil awareness.</p>
                            <br>
                        </div>

                        <div class="col-sm-12">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>We cooperate with local authorities and international partners to strengthen democratic governance and protect human rights.
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
