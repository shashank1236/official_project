<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Landing Page</title>
        <link rel="icon" href="{{ asset('favicon.ico') }}">
    </head>
    <body id="top">
        @include('include.header')

        <main>
            <!-- Carasouel -->
            <section>
                <!-- Slider 1 -->
                <div class="slider" id="slider1">
                    <!-- Slides -->
                    <div style="background-image:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/30256/1200_110627-8240-Myst.jpg)"></div>
                    <div style="background-image:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/30256/Gif-pont-lueur-600.gif)"></div>
                    <div style="background-image:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/30256/1200_Sharpened-version.jpg)"></div>
                    <div style="background-image:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/30256/jungle.jpg)"></div>
                    <div style="background-image:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/30256/1200_bodie-11.jpg)"></div>
                    <!-- The Arrows -->
                    <i class="left" class="arrows" style="z-index:2; position:absolute;">
                        <svg viewBox="0 0 100 100">
                            <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"></path>
                        </svg>
                    </i>
                    <i class="right" class="arrows" style="z-index:2; position:absolute;">
                        <svg viewBox="0 0 100 100">
                            <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" transform="translate(100, 100) rotate(180) "></path>
                        </svg>
                    </i>
                </div>
            </section>

            <!-- Buttons -->
            <section>
                
            </section>
            
            <!-- Image Gallery -->
            <section>
                <ul class="honeycomb" lang="es">
                    <li class="honeycomb-cell">
                        <img class="honeycomb-cell__image" src="https://source.unsplash.com/random/1">
                        <div class="honeycomb-cell__title">Diseño exclusivo</div>
                    </li>
                    <li class="honeycomb-cell">
                        <img class="honeycomb-cell__image" src="https://source.unsplash.com/random/2">
                        <div class="honeycomb-cell__title">Impermeables</div>
                    </li>
                    <li class="honeycomb-cell">
                        <img class="honeycomb-cell__image" src="https://source.unsplash.com/random/3">
                        <div class="honeycomb-cell__title">Tablero doble cara</div>
                    </li>
                    <li class="honeycomb-cell">
                        <img class="honeycomb-cell__image" src="https://source.unsplash.com/random/4">
                        <div class="honeycomb-cell__title">Maletín de empaque</div>
                    </li>
                    <li class="honeycomb-cell">
                        <img class="honeycomb-cell__image" src="https://source.unsplash.com/random/5">
                        <div class="honeycomb-cell__title">Antireflectivo<small>No vidrio</small></div>
                    </li>
                    <li class="honeycomb-cell">
                        <img class="honeycomb-cell__image" src="https://source.unsplash.com/random/6">
                        <div class="honeycomb-cell__title">6 fichas<small>1 de repuesto</small></div>
                    </li>
                    <li class="honeycomb-cell">
                        <img class="honeycomb-cell__image" src="https://source.unsplash.com/random/7">
                        <div class="honeycomb-cell__title">Tablero magnético</div>
                    </li>
                    <li class="honeycomb-cell">
                        <img class="honeycomb-cell__image" src="https://source.unsplash.com/random/8">
                        <div class="honeycomb-cell__title">Tablero magnético</div>
                    </li>
                    <li class="honeycomb-cell">
                        <img class="honeycomb-cell__image" src="https://source.unsplash.com/random/9">
                        <div class="honeycomb-cell__title">Tablero magnético</div>
                    </li>
                    <li class="honeycomb-cell honeycomb__placeholder"></li>
                </ul>
            </section>

            <!-- Testimonials -->
            <section id="testimonials">
                <div class="testimonial-container">
                    <div class="testimonail">
                        <div class="text">
                            <div class="quote">“</div>
                            <p class="review">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. In, esse
                                quos error beatae dolores, dicta maxime libero optio voluptatem
                                culpa, obcaecati omnis!
                            </p>
                        </div>
                        <div class="info">
                            <div class="pfp">
                                <img src="https://source.unsplash.com/random" alt="Den Kerdian">
                            </div>
                            <div class="information">
                                <span class="name">Den Kerdian</span>
                                <div class="social">
                                    <a target="_blank" href="https://www.facebook.com">
                                        <ion-icon name="logo-facebook" role="img" class="md hydrated" aria-label="logo facebook"></ion-icon>
                                    </a>
                                    <a target="_blank" href="https://www.twitter.com">
                                        <ion-icon name="logo-twitter" role="img" class="md hydrated" aria-label="logo twitter"></ion-icon>
                                    </a>
                                    <a target="_blank" href="https://www.linkedin.com">
                                        <ion-icon name="logo-linkedin" role="img" class="md hydrated" aria-label="logo linkedin"></ion-icon>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonail">
                        <div class="text">
                            <div class="quote">“</div>
                            <p class="review">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. In, esse
                                quos error beatae dolores, dicta maxime libero optio voluptatem
                                culpa, obcaecati omnis!
                            </p>
                        </div>
                        <div class="info">
                            <div class="pfp">
                                <img src="https://unsplash.it/1200/1200" alt="Den Kerdian">
                            </div>
                            <div class="information">
                                <span class="name">Betha Staty</span>
                                <div class="social">
                                    <a href="https://www.facebook.com">
                                        <ion-icon name="logo-facebook" role="img" class="md hydrated" aria-label="logo facebook"></ion-icon>
                                    </a>
                                    <a href="https://www.twitter.com">
                                        <ion-icon name="logo-twitter" role="img" class="md hydrated" aria-label="logo twitter"></ion-icon>
                                    </a>
                                    <a href="https://www.linkedin.com">
                                        <ion-icon name="logo-linkedin" role="img" class="md hydrated" aria-label="logo linkedin"></ion-icon>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonail">
                        <div class="text">
                            <div class="quote">“</div>
                            <p class="review">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. In, esse
                                quos error beatae dolores, dicta maxime libero optio voluptatem
                                culpa, obcaecati omnis!
                            </p>
                        </div>
                        <div class="info">
                            <div class="pfp">
                                <img src="https://unsplash.it/1300/1300" alt="Den Kerdian">
                            </div>
                            <div class="information">
                                <span class="name">Ram Kishan</span>
                                <div class="social">
                                    <a href="https://www.facebook.com">
                                        <ion-icon name="logo-facebook" role="img" class="md hydrated" aria-label="logo facebook"></ion-icon>
                                    </a>
                                    <a href="https://www.twitter.com">
                                        <ion-icon name="logo-twitter" role="img" class="md hydrated" aria-label="logo twitter"></ion-icon>
                                    </a>
                                    <a href="https://www.linkedin.com">
                                        <ion-icon name="logo-linkedin" role="img" class="md hydrated" aria-label="logo linkedin"></ion-icon>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><div class="testimonail">
                        <div class="text">
                            <div class="quote">“</div>
                            <p class="review">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. In, esse
                                quos error beatae dolores, dicta maxime libero optio voluptatem
                                culpa, obcaecati omnis!
                            </p>
                        </div>
                        <div class="info">
                            <div class="pfp">
                                <img src="https://unsplash.it/1200/1200" alt="Den Kerdian">
                            </div>
                            <div class="information">
                                <span class="name">Betha Staty</span>
                                <div class="social">
                                    <a href="https://www.facebook.com">
                                        <ion-icon name="logo-facebook" role="img" class="md hydrated" aria-label="logo facebook"></ion-icon>
                                    </a>
                                    <a href="https://www.twitter.com">
                                        <ion-icon name="logo-twitter" role="img" class="md hydrated" aria-label="logo twitter"></ion-icon>
                                    </a>
                                    <a href="https://www.linkedin.com">
                                        <ion-icon name="logo-linkedin" role="img" class="md hydrated" aria-label="logo linkedin"></ion-icon>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonail">
                        <div class="text">
                            <div class="quote">“</div>
                            <p class="review">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. In, esse
                                quos error beatae dolores, dicta maxime libero optio voluptatem
                                culpa, obcaecati omnis!
                            </p>
                        </div>
                        <div class="info">
                            <div class="pfp">
                                <img src="https://unsplash.it/1300/1300" alt="Den Kerdian">
                            </div>
                            <div class="information">
                                <span class="name">Ram Kishan</span>
                                <div class="social">
                                    <a href="https://www.facebook.com">
                                        <ion-icon name="logo-facebook" role="img" class="md hydrated" aria-label="logo facebook"></ion-icon>
                                    </a>
                                    <a href="https://www.twitter.com">
                                        <ion-icon name="logo-twitter" role="img" class="md hydrated" aria-label="logo twitter"></ion-icon>
                                    </a>
                                    <a href="https://www.linkedin.com">
                                        <ion-icon name="logo-linkedin" role="img" class="md hydrated" aria-label="logo linkedin"></ion-icon>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><div class="testimonail">
                        <div class="text">
                            <div class="quote">“</div>
                            <p class="review">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. In, esse
                                quos error beatae dolores, dicta maxime libero optio voluptatem
                                culpa, obcaecati omnis!
                            </p>
                        </div>
                        <div class="info">
                            <div class="pfp">
                                <img src="https://unsplash.it/1300/1300" alt="Den Kerdian">
                            </div>
                            <div class="information">
                                <span class="name">Ram Kishan</span>
                                <div class="social">
                                    <a href="https://www.facebook.com">
                                        <ion-icon name="logo-facebook" role="img" class="md hydrated" aria-label="logo facebook"></ion-icon>
                                    </a>
                                    <a href="https://www.twitter.com">
                                        <ion-icon name="logo-twitter" role="img" class="md hydrated" aria-label="logo twitter"></ion-icon>
                                    </a>
                                    <a href="https://www.linkedin.com">
                                        <ion-icon name="logo-linkedin" role="img" class="md hydrated" aria-label="logo linkedin"></ion-icon>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Map -->
            <section>
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=848&amp;height=500&amp;hl=en&amp;q=gyan bharti public school bargo gorakhpur&amp;t=&amp;z=19&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                        <a href="https://mcpenation.com/">https://mcpenation.com</a>
                    </div>
                </div>
            </section>
        </main>

        <button id="scroll-to-top" href="" class="scroll-to-top" style="display: none"><i class="fa fa-angle-up"></i></button>

        <!-- <script type="text/javascript" src="{{ asset('js/mo.js') }}"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule="" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
 -->
        @include('include.footer')
    </body>
</html>
