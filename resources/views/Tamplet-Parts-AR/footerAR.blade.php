</body>

<!--works end -->
<div class="frame4">
    <div class="div22">
        <img class="layer2" src="{{ asset('images/Main/Logo.svg') }}" />
        <p class="text-wrapper2">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nec tortor lacus. In in volutpat magna, vitae
            rutrum diam. In consequat sapien velit, non porttitor orci elementum et.
        </p>
        <div class="socail_media">
            <img class="img" src="{{ asset('images/Main/facbook.svg') }}" />
            <img class="img" src="{{ asset('images/Main/instgram.svg') }}" />
            <img class="img" src="{{ asset('images/Main/titok.svg') }}" />
        </div>
    </div>
    <div class="frame-wrapper2">
        <div class="div-32">
            <div class="div-wrapper2">
                <div class="text-wrapper-22">المؤسسية</div>
            </div>
            <div class="div-wrapper-22">
                <div class="text-wrapper-32">من نحن</div>
            </div>
            <div class="div-wrapper-32">
                <div class="text-wrapper-32">معلومات عنا</div>
            </div>
            <div class="div-wrapper-32">
                <div class="text-wrapper-32">مشاريعنا</div>
            </div>
            <div class="div-wrapper-32">
                <div class="text-wrapper-32">اتصل بنا</div>
            </div>
        </div>
    </div>
    <div class="div-32">
        <div class="div-wrapper-42">
            <div class="text-wrapper-42">قطاعاتنا</div>
        </div>
        <div class="div-wrapper-42">
            <div class="text-wrapper-52">قطاع التعليم</div>
        </div>
        <div class="div-wrapper-42">
            <p class="p2">قطاع الأمن الغذائي وسبل العيش</p>
        </div>
        <div class="div-wrapper-42">
            <p class="p2">قطاع الإقامة والمنتجات غير الغذائية</p>
        </div>
        <div class="div-wrapper-42">
            <p class="p2">قطاع الأمن الغذائي وسبل العيش</p>
        </div>
        <div class="div-wrapper-42">
            <p class="p2">الوئام الاجتماعي وبناء السلام</p>
        </div>
    </div>
    <div class="div-42">
        <div class="div-wrapper-52">
            <p class="text-wrapper-22">أرسل بريدك الإلكتروني وسنتصل بك</p>
        </div>
        <div class="div-52">
            <div class="div-wrapper-62">
                <div class="text-wrapper-62">Example@example.com</div>
            </div>
            <div class="div-wrapper-72">
                <div class="text-wrapper-22">ارسل</div>
            </div>
        </div>
    </div>
</div>
<!-- Include all js compiled plugins (below), or include individual files as needed -->

<script type="text/javascript">
    function handleSelect(elm) {
		window.location = elm.value;
	}
</script>

<script src="https://kit.fontawesome.com/bdf262e385.js" crossorigin="anonymous"></script>

<script src="{{asset('js/jquery.js')}}"></script>

<!--modernizr.min.js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

<!--bootstrap.min.js-->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<!-- bootsnav js -->
<script src="{{ asset('js/bootsnav.js') }}"></script>

<!--feather.min.js-->
<script src="{{ asset('js/feather.min.js') }}"></script>

<!-- counter js -->
<script src="{{ asset('js/jquery.counterup.min.js') }}"></script>


<script src="{{ asset('js/waypoints.min.js') }}"></script>

<!--slick.min.js-->
<script src="{{ asset('js/slick.min.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

<!--Custom JS-->
<script src="{{ asset('js/custom.js') }}"></script>

<!-- Memo Script -->
<script src="{{ asset('js/script.js') }}"></script>

<script>
window.addEventListener('resize', function() {
  var width = window.innerWidth; // Use window.innerWidth for more accurate viewport width

  if (width < 750) {
    // Append extra menu items for smaller screens
    document.getElementById('append_the_extra_menu').innerHTML = `
    <li class=" scroll" id="memo5"><a href="/">الصفحة الرئيسية</a></li>
    <li class="scroll" id="memo3"><a href="#reviews">عنا</a></li>
    <li class="scroll" id="memo4"><a href="#works">من نحن</a></li>
    <li class="scroll" id="memo1" ><a href="#explore">مشاريعنا</a></li>
    <li class="scroll" id="memo2"><a href="#contact">تواصل معنا</a></li>
    <li class="scroll"><a href="#contact">قصص ريحان</a></li>
    <li class="scroll"><a href="#contact">فعاليات</a></li>
    <li class="scroll"><a href="#contact">مبادرات</a></li>
    <li class="scroll"><a href="#contact">حملات</a></li>
    <li class="scroll"><a href="#contact">معرض ريحان</a></li>
    `;

    // Hide the other menu for smaller screens
    document.getElementById('hide_the_menu').style.display = 'none';
    document.getElementById('tabara3').style.display = 'none';
    document.getElementById('memo1').style.display = 'none';
    document.getElementById('memo2').style.display = 'none';
    document.getElementById('memo3').style.display = 'none';
    document.getElementById('memo4').style.display = 'none';
    document.getElementById('memo5').style.display = 'none';
  } else {
    // Reset the menu for larger screens
    document.getElementById('append_the_extra_menu').innerHTML = ''; // Clear any extra items
    document.getElementById('hide_the_menu').style.display = ''; // Show the other menu
  }
});

</script>

</body>

</html>
