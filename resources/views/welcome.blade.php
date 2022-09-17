<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Landing Page</title>
        <link rel="icon" href="{{ asset('favicon.ico') }}">
    </head>
    <body id="top">
        @include('include.header')

        <main>
            <section>
                
            </section>
        </main>

        <a href="#top"><i class="fa fa-angle-up"></i></a>

        @include('include.footer')
    </body>
</html>
