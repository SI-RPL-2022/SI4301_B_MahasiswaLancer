<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MahasiswaLancer</title>
    <!-- plugins:css -->
    {{-- <link rel="stylesheet" href="assetsmhs/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assetsmhs/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assetsmhs/css/style.css"> --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    <!-- End layout styles -->
    <link rel="stylesheet" href="{{ URL::asset('assetsmhs/css/sidebar.scss') }}">
    {{-- <link rel="shortcut icon" href="assetsmhs/images/dashboard/bxs_graduation1.png" /> --}}
</head>

<body>
    <!--Offcanvas Content Wrapper-->
    <main class="c-offcanvas-content-wrap" role="main" aria-labelledby="accesible-offcanvas">
        <div class="c-page l-wrapper u-pos-relative">

            <h1 id="accesible-offcanvas"><span class="u-hidden-visually">Examples </span>Accesible Offcanvas</h1>
            <h3>Overlay</h3>
            <button class="c-button js-offcanvas-trigger" data-offcanvas-trigger="off-canvas-left">Left</button>
            <button class="c-button js-offcanvas-trigger" data-offcanvas-trigger="off-canvas-right">Right</button>
            <button class="c-button js-offcanvas-trigger" data-offcanvas-trigger="off-canvas-top">Top</button>
            <button class="c-button js-offcanvas-trigger" data-offcanvas-trigger="off-canvas-bottom">Bottom</button>
            <h3>Reveal</h3>
            <button class="c-button js-offcanvas-trigger" data-offcanvas-trigger="off-canvas-left-reveal">Left -
                Reveal</button>
            <button class="c-button js-offcanvas-trigger" data-offcanvas-trigger="off-canvas-right-reveal">Right -
                Reveal</button>
            <h3>Push</h3>
            <button class="c-button js-offcanvas-trigger" data-offcanvas-trigger="off-canvas-left-push">Left -
                Push</button>
            <button class="c-button js-offcanvas-trigger" data-offcanvas-trigger="off-canvas-right-push">Right -
                Push</button>

            <article class="c-callout">
                <h2 class="c-callout__title">Download</h2>
                <p class="c-callout__text">A progressively enhanced jQuery off-canvas navigation plugin which lets you
                    create fully accessible sidebar or top/bottom sliding (or push) panels with keyboard interactions
                    and ARIA attributes.</p>
                <a class="c-callout__button c-button c-button--green"
                    href="https://github.com/vmitsaras/js-offcanvas/archive/master.zip">Download<b>.zip</b></a>
                <p class="c-callout__footer u-text-center">
                    <a href="http://offcanvas.vasilis.co/">View Demo</a>
                    &nbsp;·&nbsp;
                    <a href="https://github.com/vmitsaras/js-offcanvas">Github</a>
                </p>
            </article>

        </div>
    </main>

    <!--
Push
-->
    <!-- Push Left -->
    <aside class="js-offcanvas" data-offcanvas-options='{"modifiers":"left,push"}' id="off-canvas-left-push"
        role="complementary">
        <div class="c-offcanvas__inner o-box u-pos-relative">
            <ul class="c-menu c-menu--border u-unstyled">
                <li class="c-menu__item c-menu__item--heading">Header</li>
                <li class="c-menu__item"><a class="c-menu__link" href="#nogo">Home</a></li>
                <li class="c-menu__item"><a class="c-menu__link" href="#nogo">About</a></li>
                <li class="c-menu__item"><a class="c-menu__link" href="#nogo">Portfolio</a></li>
                <li class="c-menu__item"><a class="c-menu__link" href="#nogo">Projects</a></li>
                <li class="c-menu__item"><a class="c-menu__link" href="#nogo">Contact</a></li>
            </ul>
        </div>
    </aside>

    <script>
        // https://github.com/vmitsaras/js-offcanvas
        $(function() {

            $(document).bind("beforecreate.offcanvas", function(e) {
                var dataOffcanvas = $(e.target).data('offcanvas-component');
                console.log(dataOffcanvas);
                dataOffcanvas.onInit = function() {
                    console.log(this);
                };
            });

            $(document).bind("create.offcanvas", function(e) {
                var dataOffcanvas = $(e.target).data('offcanvas-component');
                console.log(dataOffcanvas);
                dataOffcanvas.onOpen = function() {
                    console.log('Callback onOpen');
                };
                dataOffcanvas.onClose = function() {
                    console.log('Callback onClose');
                };
            });

            $(document).bind("clicked.offcanvas-trigger clicked.offcanvas", function(e) {
                var dataBtnText = $(e.target).text();
                console.log(e.type + '.' + e.namespace + ': ' + dataBtnText);
            });

            $(document).bind("open.offcanvas", function(e) {
                var dataOffcanvasID = $(e.target).attr('id');
                console.log(e.type + ': #' + dataOffcanvasID);
            });

            $(document).bind("resizing.offcanvas", function(e) {
                var dataOffcanvasID = $(e.target).attr('id');
                console.log(e.type + ': #' + dataOffcanvasID);
            });

            $(document).bind("close.offcanvas", function(e) {
                var dataOffcanvasID = $(e.target).attr('id');
                console.log(e.type + ': #' + dataOffcanvasID);
            });

            $('.js-open').bind("create.offcanvas", function(e) {
                var dataOffcanvas = $(this).data('offcanvas-component');
                setTimeout(function() {
                    //dataOffcanvas.open();
                }, 200);
            });

            $(document).bind("beforecreate.offcanvas", function(e) {
                var $offcanvas = $(e.target),
                    api = $offcanvas.data('offcanvas-component');



                function onFocusIn() {
                    console.log('onFocusIn');
                    api.options.resize = false;
                    console.log(api.options.resize);
                    $(window).off('resize.offcanvas orientationchange.offcanvas');
                }

                function onFocusOut() {
                    console.log('onFocusOut');
                    api.options.resize = true;
                    console.log(api.options.resize);
                    $(window).on('resize.offcanvas orientationchange.offcanvas');
                    api.resize();
                }

                $offcanvas.on('focusin', 'input,textarea', onFocusIn)
                    .on('focusout', 'input,textarea', onFocusOut);
            });


            // Trigger Enhance
            $(document).trigger("enhance");
        });
    </script>

</body>

</html>
