<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Layouts') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

        <style type="text/css">
        	.add-ml {
				margin-left: 30%;
			}

			.add-w {
				width: 30%;
			}

			@media (max-width: 767px) {
				.add-md-w {
					width: 70%;
				}
			}

        	@media (max-width: 639px) {
				.add-sm-w {
					width: 100%;
				}

				.rm-sm-ml {
					margin-left: 0;
				}

				.add-sm-w {
					width: 100%;
				}
			}
        </style>
    </head>
    <body class="font-sans antialiased">

        <div class="min-h-screen bg-gray-100">
            <!-- Page Heading -->
            <header class="bg-red-400 opacity-75 fixed w-full shadow-md z-50 right-0 top-0 add-sm-w add-md-w h-16">
                <x-header-layout />
            </header>

            <div class="">
                <aside class="h-full add-w sm:fixed z-10 top-0 overflow-y-auto pt-16 bg-gray-300 hidden sm:block">
                    {{ $aside }}
                </aside>
                <!-- Page Content -->
                <main class="add-ml pt-16 h-full bg-blue-400 rm-sm-ml">
                    {{ $slot }}
                </main>
            </div>
        </div>

        <script type="text/javascript">

        </script>
    </body>
</html>
