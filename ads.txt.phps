<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/Organization" lang="">
<head>
    <meta http-equiv="origin-trial" content="AuMIhPiI/SulZt/mn9DI6CjtPpnhRnD0zwQS3nDwCFdErMazWrGpX9kJWNg6LMgDfoN4yP8Ib6N5Zf7CF8mSmwsAAABgeyJvcmlnaW4iOiJodHRwczovL3RoZW1vbmV5dGl6ZXIuY29tOjQ0MyIsImZlYXR1cmUiOiJQcml2YWN5U2FuZGJveEFkc0FQSXMiLCJleHBpcnkiOjE2NjEyOTkxOTl9">
    <meta http-equiv="expires" content="Tue, 01 Jan 2000 00:00:00 GMT">
    <meta http-equiv="last-modified" content="Fri, 01 May 2026 10:10:26 GMT" />
    <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate, max-age=0" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2">
    <meta name="description" content="">

    <meta itemprop="name" content="The Moneytizer">
    <meta itemprop="description" content="The Moneytizer est une plateforme publicitaire permettant aux sites de moyennes et petites tailles d'optimiser leurs revenus publicitaires (et invendus des sites premium). La technologie développée par les équipes de The Moneytizer permet de mettre en place un véritable yield management afin d'optimiser le revenu pour mille pages vues. De plus, The Moneytizer propose à la long tail des formats innovants et impactants usuellement réservés aux sites premium">
    <meta itemprop="image" content="https://cdn.themoneytizer.fr/global/img/logomoneytizer.png">

    <!-- InMobi Choice. Consent Manager Tag v3.0 (for TCF 2.2) -->
<script type="text/javascript" async=true>
    (function() {
        var host = "www.themoneytizer.com";
        var element = document.createElement('script');
        var firstScript = document.getElementsByTagName('script')[0];
        var url = 'https://cmp.inmobi.com'
            .concat('/choice/', '6Fv0cGNfc_bw8', '/', host, '/choice.js?tag_version=V3');
        var uspTries = 0;
        var uspTriesLimit = 3;
        element.async = true;
        element.type = 'text/javascript';
        element.src = url;

        firstScript.parentNode.insertBefore(element, firstScript);

        function makeStub() {
            var TCF_LOCATOR_NAME = '__tcfapiLocator';
            var queue = [];
            var win = window;
            var cmpFrame;

            function addFrame() {
                var doc = win.document;
                var otherCMP = !!(win.frames[TCF_LOCATOR_NAME]);

                if (!otherCMP) {
                    if (doc.body) {
                        var iframe = doc.createElement('iframe');

                        iframe.style.cssText = 'display:none';
                        iframe.name = TCF_LOCATOR_NAME;
                        doc.body.appendChild(iframe);
                    } else {
                        setTimeout(addFrame, 5);
                    }
                }
                return !otherCMP;
            }

            function tcfAPIHandler() {
                var gdprApplies;
                var args = arguments;

                if (!args.length) {
                    return queue;
                } else if (args[0] === 'setGdprApplies') {
                    if (
                        args.length > 3 &&
                        args[2] === 2 &&
                        typeof args[3] === 'boolean'
                    ) {
                        gdprApplies = args[3];
                        if (typeof args[2] === 'function') {
                            args[2]('set', true);
                        }
                    }
                } else if (args[0] === 'ping') {
                    var retr = {
                        gdprApplies: gdprApplies,
                        cmpLoaded: false,
                        cmpStatus: 'stub'
                    };

                    if (typeof args[2] === 'function') {
                        args[2](retr);
                    }
                } else {
                    if(args[0] === 'init' && typeof args[3] === 'object') {
                        args[3] = Object.assign(args[3], { tag_version: 'V3' });
                    }
                    queue.push(args);
                }
            }

            function postMessageEventHandler(event) {
                var msgIsString = typeof event.data === 'string';
                var json = {};

                try {
                    if (msgIsString) {
                        json = JSON.parse(event.data);
                    } else {
                        json = event.data;
                    }
                } catch (ignore) {}

                var payload = json.__tcfapiCall;

                if (payload) {
                    window.__tcfapi(
                        payload.command,
                        payload.version,
                        function(retValue, success) {
                            var returnMsg = {
                                __tcfapiReturn: {
                                    returnValue: retValue,
                                    success: success,
                                    callId: payload.callId
                                }
                            };
                            if (msgIsString) {
                                returnMsg = JSON.stringify(returnMsg);
                            }
                            if (event && event.source && event.source.postMessage) {
                                event.source.postMessage(returnMsg, '*');
                            }
                        },
                        payload.parameter
                    );
                }
            }

            while (win) {
                try {
                    if (win.frames[TCF_LOCATOR_NAME]) {
                        cmpFrame = win;
                        break;
                    }
                } catch (ignore) {}

                if (win === window.top) {
                    break;
                }
                win = win.parent;
            }
            if (!cmpFrame) {
                addFrame();
                win.__tcfapi = tcfAPIHandler;
                win.addEventListener('message', postMessageEventHandler, false);
            }
        };

        makeStub();

        var uspStubFunction = function() {
            var arg = arguments;
            if (typeof window.__uspapi !== uspStubFunction) {
                setTimeout(function() {
                    if (typeof window.__uspapi !== 'undefined') {
                        window.__uspapi.apply(window.__uspapi, arg);
                    }
                }, 500);
            }
        };

        var checkIfUspIsReady = function() {
            uspTries++;
            if (window.__uspapi === uspStubFunction && uspTries < uspTriesLimit) {
                console.warn('USP is not accessible');
            } else {
                clearInterval(uspInterval);
            }
        };

        if (typeof window.__uspapi === 'undefined') {
            window.__uspapi = uspStubFunction;
            var uspInterval = setInterval(checkIfUspIsReady, 6000);
        }
    })();
</script>
<!-- End InMobi Choice. Consent Manager Tag v3.0 (for TCF 2.2) -->
    <title></title>

    
    <meta name="facebook-domain-verification" content="ffuvtnpelrqc9m3tbrzmxeyjq1ex8m" />

    
    
    <link rel="stylesheet" href="https://www.themoneytizer.com/global/styles/bootstrap.min-5.4.1.css">

                <link rel="stylesheet" type='text/css' lazyload href="https://www.themoneytizer.com/global/styles/new_global.css?v=5.28">
                    <link rel="stylesheet" type='text/css' lazyload href="https://www.themoneytizer.com/modules/mod_new_manager/styles/login.css?v=5.28">
        
    <meta name="robots" content="index, follow">

        <link rel="canonical" href="https://www.themoneytizer.com/new_manager/login" />
        <link rel="shortcut icon" type="image/x-icon" href="https://cdn.themoneytizer.fr/global/img/favico.ico">
    <link href="https://fonts.googleapis.com/css2?family=Livvic&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Livvic:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <script type="text/javascript" src="https://www.themoneytizer.com/global/js/jquery-2.1.0.min.js"></script>
    <script type="text/javascript" src="https://www.themoneytizer.com/global/js/bootstrap.bundle.min-5.4.1.js"></script>
    <script async src='https://www.google.com/recaptcha/api.js'></script>
    <script async type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="https://www.themoneytizer.com/global/js/new_global.js?v=5.23"></script>

    <script>
    function isEmpty(obj) {
        for(var prop in obj) {
            if(obj.hasOwnProperty(prop))
                return false;
        }
        return true;
    }
</script>

        <script>
            window.top.__tcfapi('addEventListener', 2, function(tcData, success) {
                if(success && (tcData.gdprApplies === false || isEmpty(tcData.vendor.consents) === false)) {
                    var gtag_script = document.createElement('script');
                    gtag_script.type = 'text/javascript';
                    gtag_script.async = true;
                    gtag_script.src = 'https://www.googletagmanager.com/gtag/js?id=UA-49770115-1';
                    document.head.append(gtag_script);

                    window.dataLayer = window.dataLayer || [];
                    function gtag() {
                        dataLayer.push(arguments);
                    }

                    gtag('js', new Date());
                    gtag('config', 'UA-49770115-1');
                }
            })
        </script>
        <script>
    window.top.__tcfapi('addEventListener', 2, function(tcData, success) {
        if(success && (tcData.gdprApplies === false || isEmpty(tcData.vendor.consents) === false)) {
            var gtag_script = document.createElement('script');
            gtag_script.type = 'text/javascript';
            gtag_script.async = true;
            gtag_script.src = 'https://www.googletagmanager.com/gtag/js?id=UA-49770115-10';
            document.head.append(gtag_script);

            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }

            gtag('js', new Date());
            gtag('config', 'UA-49770115-10');

            var gtag_script_AW = document.createElement('script');
            gtag_script_AW.type = 'text/javascript';
            gtag_script_AW.async = true;
            gtag_script_AW.src = 'https://www.googletagmanager.com/gtag/js?id=AW-962537846';
            document.head.append(gtag_script_AW);

            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'AW-962537846');

            // Quora
            !function(q,e,v,n,t,s){if(q.qp) return; n=q.qp=function(){n.qp?n.qp.apply(n,arguments):n.queue.push(arguments);}; n.queue=[];t=document.createElement(e);t.async=!0;t.src=v; s=document.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t,s);}(window, 'script', 'https://a.quora.com/qevents.js');
            qp('init', '93198f1e487c4247b5730ec3770a1c39');
            qp('track', 'ViewContent');

            // GTAG
            (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-WLZ3M69');
        }
    })
</script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <script data-ad-client="ca-pub-4331408248488567" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>
<body><div class="login-page-wrapper">
    <div class="login-gradiant col-12 col-md-6 col-lg-6 d-flex justify-content-center align-items-center">
        <img class="hero-logo" src="https://cdn.themoneytizer.fr/global/img/azerion_logo_white.png">
    </div>
    <div class="col-12 col-md-6 col-lg-6 d-flex justify-content-center align-items-center login-form-wrapper">
        <div id="page_connexion" class="text-center">
            <div class="container pt-5 pb-5">
                <img class="mb-4" src="https://cdn.themoneytizer.fr/global/img/logo_TMT_azerion.png" style="width: 120px;">
                <div class="fw-semi-bold mb-2 title_manager">Improve Digital Yield</div>
                <p class="mt-4 text-light">The Moneytizer is now part of <strong>Improve Digital Yield</strong>!</p>
                <p class="mb-4 text-light">Please enter your details below to sign in.</p>

                <form class="row needs-validation col-xxl-6 col-xl-7 col-md-10 col-12 m-auto login-ant-form" novalidate method="POST" action="https://www.themoneytizer.com/new_manager/login">
                    <div class="p-0">
                        <div class="col-12 text-start login-email-input-parent">
                            <label class="mb-1 text-light text-label" for="email">Email</label>
                            <input class="col-12 form-control login-ant-input login-ant-input-email"
                                   type="email"
                                   id="email"
                                   placeholder="Email"
                                   required="required"
                                   name="email"
                                   value=""
                                   pattern=".*\S+.*"
                            >
                        </div>
                    </div>
                    <div class="mb-4 p-0">
                        <div class=" text-start">
                            <label class="mb-1 text-light text-label" for="password">Mot de passe</label>
                            <div class="login-ant-input-wrapper">
                                <input class=" form-control login-ant-input login-ant-input-password"
                                       type="password"
                                       id="password"
                                       placeholder="Mot de passe"
                                       required="required"
                                       name="password"
                                >
                                <button type="button" class="login-ant-password-toggle" id="password-toggle" aria-label="Afficher/Masquer le mot de passe">
                                    <span class="icon-eye-closed">
                                        <svg viewBox="64 64 896 896" focusable="false" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                            <path d="M942.2 486.2Q889.47 375.11 816.7 305l-50.88 50.88C807.31 395.53 843.45 447.4 874.7 512 791.5 684.2 673.4 766 512 766q-72.67 0-133.87-22.38L323 798.75Q408 838 512 838q288.3 0 430.2-300.3a60.29 60.29 0 000-51.5zm-63.57-320.64L836 122.88a8 8 0 00-11.32 0L715.31 232.2Q624.86 186 512 186q-288.3 0-430.2 300.3a60.3 60.3 0 000 51.5q56.69 119.4 136.5 191.41L112.48 835a8 8 0 000 11.31L155.17 889a8 8 0 0011.31 0l712.15-712.12a8 8 0 000-11.32zM149.3 512C232.6 339.8 350.7 258 512 258c54.54 0 104.13 9.36 149.12 28.39l-70.3 70.3a176 176 0 00-238.13 238.13l-83.42 83.42C223.1 637.49 183.3 582.28 149.3 512zm246.7 0a112.11 112.11 0 01146.2-106.69L401.31 546.2A112 112 0 01396 512z"></path>
                                            <path d="M508 624c-3.46 0-6.87-.16-10.25-.47l-52.82 52.82a176.09 176.09 0 00227.42-227.42l-52.82 52.82c.31 3.38.47 6.79.47 10.25a111.94 111.94 0 01-112 112z"></path>
                                        </svg>
                                    </span>
                                    <span class="icon-eye-open">
                                        <svg viewBox="64 64 896 896" focusable="false" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                            <path d="M942.2 486.2C847.5 297.4 689.1 186 512 186S176.5 297.4 81.8 486.2a60.3 60.3 0 000 51.5C176.5 726.6 334.9 838 512 838s335.5-111.4 430.2-300.3a60.29 60.29 0 000-51.5zM512 766c-145.5 0-271.8-89.6-363.3-254C240.2 347.6 366.5 258 512 258s271.8 89.6 363.3 254C783.8 676.4 657.5 766 512 766zm0-402c-81.6 0-148 66.4-148 148s66.4 148 148 148 148-66.4 148-148-66.4-148-148-148zm0 224c-41.9 0-76-34.1-76-76s34.1-76 76-76 76 34.1 76 76-34.1 76-76 76z"></path>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                            <div class="mt-2 text-end">
                                <a href="https://www.themoneytizer.com/mot-de-passe-oublie">Mot de passe oublié</a>
                            </div>
                        </div>
                    </div>

                    <center>
                        <div class="mb-4" id="captcha">
                            <div data-callback="capcha_filled" class="g-recaptcha" data-sitekey="6LeSOT0qAAAAAFmr66OWIH7gOIeB2GacoH55YcyS"></div>
                            <div class="invalid-feedback">Veuillez remplir le CAPTCHA</div>
                        </div>
                    </center>

                    
                    
                    <div class="text-center p-0">
                        <button class="col-12" type="submit">Connexion</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    (function () {
        var passwordInput = document.getElementById('password');
        var passwordToggle = document.getElementById('password-toggle');
        if (!passwordInput || !passwordToggle) {
            return;
        }

        passwordToggle.addEventListener('click', function () {
            var isHidden = passwordInput.type === 'password';
            passwordInput.type = isHidden ? 'text' : 'password';
            passwordToggle.classList.toggle('is-visible', isHidden);
        });
    })();
</script>
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window,document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1111108862254955');
    fbq('track', 'PageView');
</script>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WLZ3M69" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<script type="text/javascript">
    function setCookie(name, value, days){
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        var expires = "; expires=" + date.toGMTString();
        document.cookie = name + "=" + value + expires + ";path=/";
    }
    function getParam(p){
        var match = RegExp('[?&]' + p + '=([^&]*)').exec(window.location.search);
        return match && decodeURIComponent(match[1].replace(/\+/g, ' '));
    }
    var gclid = getParam('gclid');
    if(gclid){
        var gclsrc = getParam('gclsrc');
        if(!gclsrc || gclsrc.indexOf('aw') !== -1){
            setCookie('gclid', gclid, 90);
        }
    }
</script>

<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
<script>
    WebFont.load({
        google: {
            families: ['Raleway', 'Montserrat','Oswald','Roboto']
        }
    });
</script>
</body>
</html>