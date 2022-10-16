<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/font-awesome.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/knockout.js') }}"></script>
<!-- <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script> -->
<script src="{{ asset('js/admin/config.js') }}"></script>
<script src="{{ asset('js/admin/overlayscrollbars/OverlayScrollbars.min.js') }}"></script>
<script src="{{ asset('js/admin/popper/popper.min.js') }}"></script>
<script src="{{ asset('js/admin/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/admin/anchorjs/anchor.min.js') }}"></script>
<script src="{{ asset('js/admin/is/is.min.js') }}"></script>
<script src="{{ asset('js/admin/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('js/admin/fontawesome/all.min.js') }}"></script>
<script src="{{ asset('js/admin/lodash/lodash.min.js') }}"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
<script src="{{ asset('js/admin/list.js/list.min.js') }}"></script>
<script src="{{ asset('js/admin/theme.js') }}"></script>
<script>
  var isRTL = JSON.parse(localStorage.getItem('isRTL'));
  if (isRTL) {
    var linkDefault = document.getElementById('style-default');
    var userLinkDefault = document.getElementById('user-style-default');
    linkDefault.setAttribute('disabled', true);
    userLinkDefault.setAttribute('disabled', true);
    document.querySelector('html').setAttribute('dir', 'rtl');
  } else {
    var linkRTL = document.getElementById('style-rtl');
    var userLinkRTL = document.getElementById('user-style-rtl');
    linkRTL.setAttribute('disabled', true);
    userLinkRTL.setAttribute('disabled', true);
  }
</script>
<script>
var navbarStyle = localStorage.getItem("navbarStyle");
if (navbarStyle && navbarStyle !== 'transparent') {
  document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
}
</script>
<!-- <script type="text/javascript" src="{{ asset('js/script.js') }}"></script> -->