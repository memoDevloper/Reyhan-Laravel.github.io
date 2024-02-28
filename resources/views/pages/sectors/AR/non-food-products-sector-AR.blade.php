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
                        <img class="img-fluid position-absolute w-100 sector-image4"
                            src="{{ asset('images/Main/Education.jpg') }}" alt="website template image"
                            style="object-fit:cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp sector-card2" data-wow-delay="0.3s">
                    <div class="flex-row flex-right">
                        <h6 class="section-title bg-white text-start text-primary pe-3">المأوى والمواد غير الغذائية</h6>
                        <i class="flaticon-building icone-right"></i>
                    </div>
                    <br><br>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6 p-5">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>تقدم منظمة ريحان مساعدة الإيواء والمواد الأساسية للأفراد والعائلات النازحة.</p>
                            <br>
                        </div>

                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>ندعم إعادة بناء المنازل المتضررة وتوفير المواد الأساسية مثل البطانيات والملابس ولوازم المنزل.</p>
                            <br>
                        </div>

                        <div class="col-sm-12">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>نعمل على تقديم الدعم النفسي والاجتماعي للمتضررين وتوفير الخدمات الأساسية كالمياه النظيفة والصرف الصحي.</p>
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
