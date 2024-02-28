@include('Tamplet-Parts-AR.head-AR')


    <!-- icones.css -->
    <style>
        * {
            text-align: end !important;
        }

        .mlt {
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
                        <img class="img-fluid position-absolute w-100 sector-image7"
                            src="{{ asset('images/Main/Food-Help.JPG') }}" alt="website template image"
                            style="object-fit:cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp sector-card2 mb-60" data-wow-delay="0.3s">
                    <div class="flex-row flex-right">
                        <h6 class="section-title bg-white text-start text-primary pe-3">تأمين الغذاء وسبل العيش</h6>
                        <i class="flaticon-travel icone-right"></i>
                    </div>
                    <br><br>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6 p-5">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>تعمل منظمة ريحان على
                                تعزيز الأمن الغذائي وتعزيز سبل العيش المستدامة للفئات الضعيفة.</p>
                            <br>
                        </div>

                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>ندعم الممارسات الزراعية
                                المستدامة ونقدم التدريب المهني ونسهل الوصول إلى الأسواق للمنتجات الزراعية المحلية.</p>
                            <br>
                        </div>
                        <div class="col-sm-6 mt-0">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>نسعى لخلق فرص عمل وتعزيز
                                روح المبادرة لدى الشباب والباحثين عن العمل.</p>
                        </div>

                        <div class="col-sm-6 mar-top-28">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>نقدم الدعم للأعمال
                                الصغيرة والمتوسطة ونروج للابتكار في الزراعة لضمان الأمن الغذائي والاستقرار الاقتصادي.
                        </div>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <!-- Education Part End -->
        @include('Tamplet-Parts-AR.footerAR')
