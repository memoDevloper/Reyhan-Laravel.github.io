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
                        <img class="img-fluid position-absolute w-100 sector-image5"
                            src="{{ asset('images/Main/Picebelder.jpg') }}" alt="website template image"
                            style="object-fit:cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp sector-card2" data-wow-delay="0.3s">
                    <div class="flex-row flex-right">
                        <h6 class="section-title bg-white text-start text-primary pe-3">المناصرة، التماسك الاجتماعي، وبناء السلام</h6>
                        <i class="flaticon-transport icone-right"></i>
                    </div>
                    <br><br>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6 p-5">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>تهتم منظمة ريحان بتعزيز التماسك الاجتماعي وبناء السلام من خلال المناصرة والحوار.</p>
                            <br>
                        </div>

                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>ننفذ برامج التوعية والتدريب حول حل النزاعات وتعزيز الحوار واتخاذ القرارات بشكل مشترك.</p>
                            <br>
                        </div>
                        <div class="col-sm-6 mt-5">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>
                                نعمل على تعزيز مشاركة المجتمع المدني والمشاركة المجتمعية في عملية اتخاذ القرار لتحقيق التغيير الاجتماعي الإيجابي.
                                بالطبع، إليك البند المقترح بشكل احترافي
                            </p>
                        </div>

                        <div class="col-sm-6 mt-5">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>تعزيز ثقافة التطوع وتشجيع العمل التطوعي من خلال دعم الفرق التطوعية وتمكين المبادرات المجتمعية، بهدف تعزيز المشاركة المجتمعية.</p>
                        </div>

                        <div class="col-sm-12 mar-top-52">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>جهودنا تركز على التصالح وتعزيز ثقافة السلام والتسامح داخل المجتمعات.
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
