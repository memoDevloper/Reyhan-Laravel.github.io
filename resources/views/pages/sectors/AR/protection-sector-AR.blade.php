@include('Tamplet-Parts-AR.head-AR')

    <!-- icones.css -->
    <style>
        * {
            text-align: end !important;
        }
        .mlt{
            margin-top: 8px;
        }
    </style>



</head>

<body>
    @include('Tamplet-Parts-AR.header')

    <!-- Education Part Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp sector-card" data-wow-delay="0.1s">
                    <div class="position-relative h-100 mr-t-30">
                        <img class="img-fluid position-absolute w-100 sector-image6 "
                            src="{{ asset('images/Main/Prodacion2.jpg') }}" alt="website template image"
                            style="object-fit:cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp sector-card2" data-wow-delay="0.3s">
                    <div class="flex-row flex-right">
                        <h6 class="section-title bg-white text-start text-primary pe-3">الحماية</h6>
                        <i class="flaticon-pills1 icone-right mtt-10"></i>
                    </div>
                    <br><br>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6 p-5">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>تعزيز الوصول الآمن والمُشِّرف للحقوق والخدمات للجميع وبشكل خاص الفئات المستضعفة والمهمشة.</p>
                            <br>
                        </div>

                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>تسعى منظمة ريحان إلى حماية الأفراد الضعفاء وتقديم الدعم اللازم لضمان سلامتهم وحقوقهم.</p>
                            <br>
                        </div>
                        <div class="col-sm-6 mt-5">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>تتمحور برامجنا حول منع ومعالجة العنف والاستغلال وتقديم الدعم النفسي والاجتماعي للمتأثرين.
                            </p>
                        </div>

                        <div class="col-sm-6 mt-5">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>من خلال توفير الاستشارة القانونية والتوجيه، نسعى لحماية حقوق وكرامة الأفراد الذين نخدمهم.</p>
                        </div>

                        <div class="col-sm-12 mar-top-52">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>تعزيز الصحة النفسية والاجتماعية للأفراد والمجتمعات المستضعفة والمتضررة من خلال تقديم الدعم النفسي الاجتماعي وخدمات الرعاية النفسية.
                              </p>
                        </div>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <!-- Education Part End -->
    @include('Tamplet-Parts-AR.footerAR')
