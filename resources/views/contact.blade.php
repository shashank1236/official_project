<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Contact</title>
        <link rel="icon" href="{{ asset('favicon.ico') }}">
    </head>
    <body id="top">
        @include('include.header')

        <main class="main-section">
            <div class="gp-contact-outer">
                <div class="">
                    hello
                </div>

                <!-- Map -->
                <div>
                    <div class="gmap_canvas">
                        <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=848&amp;height=500&amp;hl=en&amp;q=gyan bharti public school bargo gorakhpur&amp;t=&amp;z=19&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                        <a href="https://mcpenation.com/">https://mcpenation.com</a>
                    </div>
                </div>
            </div>
        </main>

        <button id="scroll-to-top" href="" class="scroll-to-top"><i class="fa fa-angle-up"></i></button>

        <script type="text/javascript" src="{{ asset('js/mo.js') }}"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule="" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

        @include('include.footer')
    </body>
</html>
