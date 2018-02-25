<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lumino - Dashboard</title>
        
        <link href="{{ asset ('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset ('css/datepicker3.css') }}" rel="stylesheet">
        <link href="{{ asset ('css/styles.css') }}" rel="stylesheet">
        
        <!--Icons-->
        <script src="js/lumino.glyphs.js"></script>
        
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
       @include('pages.partials.navbar')
       @include('pages.partials.sidebar')
     

        @yield('dashboard')
        @yield('category')
        @yield('products')
        @yield('manage-category')
        @yield('edit-category')

    <script src="js/jquery-1.11.1.min.js"></script>
	<script src="{{ asset ('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset ('js/chart.min.js') }}"></script>
	<script src="{{ asset ('js/chart-data.js') }}"></script>
	<script src="{{ asset ('js/easypiechart.js') }}"></script>
	<script src="{{ asset ('js/easypiechart-data.js') }}"></script>
	<script src="{{ asset ('js/bootstrap-datepicker.js') }}"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
    </body>
</html>
