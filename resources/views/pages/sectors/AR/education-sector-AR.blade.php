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
                        <img class="img-fluid position-absolute w-100 sector-image2"
                            src="{{ asset('images/Main/Education2.jpeg') }}" alt="website template image"
                            style="object-fit:cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp sector-card2" data-wow-delay="0.3s">
                    <div class="flex-row flex-right">
                        <h6 class="section-title bg-white text-start text-primary pe-3">التعليم</h6>
                        <i class="flaticon-restaurant1 icone-right mlt"></i>
                    </div>
                    <br><br>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6 p-5">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>تلتزم منظمة ريحان بتعزيز الوصول الآمن والكريم إلى التعليم وتوفير بيئات تعليمية آمنة ومحفزة للجميع.</p>
                            <br>
                        </div>

                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>نسعى لتقديم برامج تعليمية شاملة تشمل التعليم الأساسي والتدريب المهني وتطوير المهارات.</p>
                            <br>
                        </div>
                        <div class="col-sm-6 mt-5">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>المساهمة في تحسين جودة التعليم وخلق بيئات تعليمية تشجع على التعلم والابتكار.</p>
                        </div>

                        <div class="col-sm-6 mar-top--176">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>نعمل على توفير الموارد التعليمية اللازمة لتعزيز عملية التعلم وتطوير المهارات.</p>
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
