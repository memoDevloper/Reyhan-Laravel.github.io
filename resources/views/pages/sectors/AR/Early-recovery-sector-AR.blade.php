@include('Tamplet-Parts-AR.head-AR')

    <!-- icones.css -->
    <style>
        * {
            text-align: end !important;
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
                        <img class="img-fluid position-absolute w-100 sector-image"
                            src="{{ asset('images/Main/Erlyrecover.JPG') }}" alt="website template image"
                            style="object-fit:cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp sector-card2" data-wow-delay="0.3s">
                    <div class="flex-row flex-right">
                        <h6 class="section-title bg-white text-start text-primary pe-3">التعافي المبكر</h6>
                        <i class="fa-solid fa-bed-pulse icone-right"></i>
                    </div>
                    <br><br>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6 p-5">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>تقدم منظمة ريحان الدعم
                                اللازم للمجتمعات في مرحلة التعافي المبكر من الكوارث والأزمات.</p>
                            <br>
                        </div>

                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>ندعم إعادة بناء البنية
                                التحتية المتضررة وتعزيز مرونة المجتمعات المتأثرة للعودة إلى الحياة الطبيعية.</p>
                            <br>
                        </div>

                        <div class="col-sm-12">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>نسعى لتعزيز الاستدامة
                                والمرونة في المجتمعات المتضررة وتعزيز الاندماج وتوفير الدعم النفسي والاجتماعي للمتأثرين.</p>
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

    @include('Tamplet-Parts-AR.footerAR')
