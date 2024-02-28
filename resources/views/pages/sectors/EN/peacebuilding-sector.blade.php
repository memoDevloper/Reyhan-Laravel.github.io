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

        .flaticon-transport {
            margin-left: 15px !important;
            margin-top: -7px;
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
                    <div class="position-relative h-100"><img class="img-fluid sector-image position-absolute w-100 h-100"
                            src="{{ asset('images/Main/Picebelder.jpg') }}" alt="website template image"
                            style="object-fit:cover;"></div>
                </div>
                <div class="col-lg-6 wow fadeInUp sector-card2 tl5" data-wow-delay="0.3s">
                    <div class="flex-row">
                        <h6 class="section-title bg-white text-start text-primary pe-3">Advocacy, social cohesion, and peacebuilding</h6>
                        <i class="flaticon-transport"></i>
                    </div>
                    <div class="row gy-2 gx-4 mb-4 ff11">
                        <div class="col-sm-6">
                            <p class="mb-0 padspace"><i class="fa fa-arrow-right text-primary me-2"></i>Rayhan Organization is
                                interested in promoting social cohesion and building peace through advocacy and
                                dialogue.</p>
                        </div>

                        <div class="col-sm-6">
                            <p class="mb-0 padspace"><i class="fa fa-arrow-right text-primary me-2"></i>Rayhan Organization is
                                interested in promoting social cohesion and building peace through advocacy and
                                dialogue.</p>
                        </div>

                        <div class="col-sm-6">
                            <p class="mb-0 padspace"><i class="fa fa-arrow-right text-primary me-2"></i>Our efforts focus on
                                reconciliation and promoting a culture of peace and tolerance within societies.
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0 padspace"><i class="fa fa-arrow-right text-primary me-2"></i>We work to enhance civil
                                society participation and community participation in the decision-making process to
                                achieve positive social change.Of course, here is the professionally suggested item</p>
                        </div>
                        <div class="col-sm-6 mltp">
                            <p class="mb-0 padspace"><i class="fa fa-arrow-right text-primary me-2"></i>Promoting the culture of
                                volunteering and encouraging volunteer work by supporting volunteer teams and enabling
                                community initiatives, with the aim of enhancing community participation.</p>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <!-- Education Part End -->

    @include('Tamplet-Parts-EN.footerEN')
