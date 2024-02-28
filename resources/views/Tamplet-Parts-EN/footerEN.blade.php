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
				<div class="text-wrapper-22">Institutional</div>
			</div>
			<div class="div-wrapper-22">
				<div class="text-wrapper-32">Who are we</div>
			</div>
			<div class="div-wrapper-32">
				<div class="text-wrapper-32">About Us</div>
			</div>
			<div class="div-wrapper-32">
				<div class="text-wrapper-32">Our projects</div>
			</div>
			<div class="div-wrapper-32">
				<div class="text-wrapper-32">Contact us</div>
			</div>
		</div>
	</div>
	<div class="div-32">
		<div class="div-wrapper-42">
			<div class="text-wrapper-42">Our Sectors/EN</div>
		</div>
		<div class="div-wrapper-42">
			<div class="text-wrapper-52">Education Sector</div>
		</div>
		<div class="div-wrapper-42">
			<p class="p2">Food security and livelihood sector</p>
		</div>
		<div class="div-wrapper-42">
			<p class="p2">Accommodation and non-food products sector</p>
		</div>
		<div class="div-wrapper-42">
			<p class="p2">Food security and livelihood sector</p>
		</div>
		<div class="div-wrapper-42">
			<p class="p2">Social harmony and peace building</p>
		</div>
	</div>
	<div class="div-42" style="margin-left: 50px;">
		<div class="div-wrapper-52">
			<p class="text-wrapper-22">Send your e-mail and we will contact you</p>
		</div>
		<div class="div-52">
			<div class="div-wrapper-62">
				<div class="text-wrapper-62">Example@example.com</div>
			</div>
			<div class="div-wrapper-72">
				<div class="text-wrapper-22">Send</div>
			</div>
		</div>
	</div>
</div>
<!-- Include all js compiled plugins (below), or include individual files as needed -->


<script type="text/javascript">
    function handleSelect(elm)
    {
       window.location = elm.value;
    }
  </script>

<script src="https://kit.fontawesome.com/bdf262e385.js" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>



<!--modernizr.min.js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

<!--bootstrap.min.js-->
<script src="assets/js/bootstrap.min.js"></script>
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
        document.getElementById('append_the_extra_menu').innerHTML += `
        <li class="scroll"><a href="#contact">Reyhan Stories</a></li>
        <li class="scroll"><a href="#contact">Events</a></li>
        <li class="scroll"><a href="#contact">Initiatives</a></li>
        <li class="scroll"><a href="#contact">Campaigns</a></li>
        <li class="scroll"><a href="#contact">Reyhan Gallery</a></li>
        `;

        // Hide the other menu for smaller screens
        document.getElementById('hide_the_menu').style.display = 'none';
        document.getElementById('tabara3').style.display = 'none';
      } else {
        // Reset the menu for larger screens
        document.getElementById('append_the_extra_menu').innerHTML = ''; // Clear any extra items
        document.getElementById('hide_the_menu').style.display = ''; // Show the other menu
      }
    });

    </script>

</body>
</html>
