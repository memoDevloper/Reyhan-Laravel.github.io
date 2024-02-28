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
                            src="{{ asset('images/Main/HumenRights.jpg') }}" alt="website template image"
                            style="object-fit:cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp sector-card2" data-wow-delay="0.3s">
                    <div class="flex-row flex-right">
                        <h6 class="section-title bg-white text-start text-primary pe-3">حقوق الإنسان والديمقراطية</h6>
                        <i class="fa-solid fa-scale-balanced down-lettel icone-right"></i>
                    </div>
                    <br><br>
                    <div class="row gy-2 gx-4 mb-4">


                        <div class="col-sm-6 p-5">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>تسعى منظمة إلى نشر ثقافة حقوق الإنسان والوعي المدني.</p>
                            <br>
                        </div>

                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>نتعاون مع السلطات المحلية والشركاء الدوليين لتعزيز الحوكمة الديمقراطية وحماية حقوق الإنسان.</p>
                        </div>
                        <br>
                        <div class="col-sm-12">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>تسعى منظمة ريحان لدعم حقوق الإنسان وتعزيز الديمقراطية وسيادة القانون في المجتمعات التي تخدمها.</p>
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
    @include('Tamplet-Parts-AR.footerAR')
