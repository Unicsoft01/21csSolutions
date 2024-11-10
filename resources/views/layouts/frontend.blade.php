<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title>Homepage &#8211; BeClean</title>

    @livewireStyles

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <meta name='robots' content='max-image-preview:large' />
    <link rel="alternate" type="application/rss+xml" title="BeClean &raquo; Feed"
        href="https://demo.creativemox.com/beclean/feed/" />
    <link rel="alternate" type="application/rss+xml" title="BeClean &raquo; Comments Feed"
        href="https://demo.creativemox.com/beclean/comments/feed/" />
    <script>
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/demo.creativemox.com\/beclean\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.6.2"
            }
        };
        /*! This file is auto-generated */
        ! function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e
                        .getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !
                            n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e,
                                "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                            );
                    case "emoji":
                        return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(
                        300, 150) : i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function(e) {
                    o[e] = t(a, e, n)
                }), o
            }

            function t(e) {
                var t = i.createElement("script");
                t.src = e, t.defer = !0, i.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function(e) {
                i.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function(t) {
                var n = function() {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() <
                            e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" !=
                        typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p
                                .toString()
                            ].join(",") + "));",
                            r = new Blob([e], {
                                type: "text/javascript"
                            }),
                            a = new Worker(URL.createObjectURL(r), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(a.onmessage = function(e) {
                            c(n = e.data), a.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function(e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n
                    .supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports
                        .everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n
                    .DOMReady = !1, n.readyCallback = function() {
                        n.DOMReady = !0
                    }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e
                    .concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
    </script>
    <style id='wp-emoji-styles-inline-css'>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <style id='classic-theme-styles-inline-css'>
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id='global-styles-inline-css'>
        :root {
            --wp--preset--aspect-ratio--square: 1;
            --wp--preset--aspect-ratio--4-3: 4/3;
            --wp--preset--aspect-ratio--3-4: 3/4;
            --wp--preset--aspect-ratio--3-2: 3/2;
            --wp--preset--aspect-ratio--2-3: 2/3;
            --wp--preset--aspect-ratio--16-9: 16/9;
            --wp--preset--aspect-ratio--9-16: 9/16;
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flex {
            display: flex;
        }

        .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        .is-layout-flex> :is(*, div) {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        .is-layout-grid> :is(*, div) {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :root :where(.wp-block-pullquote) {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='stylesheet' id='template-kit-export-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/template-kit-export/assets/public/template-kit-export-public.1982?ver=1.0.23'
        media='all' />
    <link rel='stylesheet' id='hello-elementor-css'
        href='{{ url('/') }}/beclean/wp-content/themes/hello-elementor/style.min41fe.css?ver=3.0.1'
        media='all' />
    <link rel='stylesheet' id='hello-elementor-theme-style-css'
        href='{{ url('/') }}/beclean/wp-content/themes/hello-elementor/theme.min41fe.css?ver=3.0.1'
        media='all' />
    <link rel='stylesheet' id='hello-elementor-header-footer-css'
        href='{{ url('/') }}/beclean/wp-content/themes/hello-elementor/header-footer.min41fe.css?ver=3.0.1'
        media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/elementor/assets/css/frontend.min2401.css?ver=3.24.0'
        media='all' />
    <link rel='stylesheet' id='elementor-post-7-css'
        href='{{ url('/') }}/beclean/wp-content/uploads/sites/2/elementor/css/post-73b0a.css?ver=1726037155'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min0fd8.css?ver=5.31.0'
        media='all' />
    <link rel='stylesheet' id='swiper-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min94a4.css?ver=8.4.5'
        media='all' />
    <link rel='stylesheet' id='e-swiper-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/elementor/assets/css/conditionals/e-swiper.min2401.css?ver=3.24.0'
        media='all' />
    <link rel='stylesheet' id='elementor-pro-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/elementor-pro/assets/css/frontend.minde8f.css?ver=3.21.0'
        media='all' />
    <link rel='stylesheet' id='widget-text-editor-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/elementor/assets/css/widget-text-editor.min2401.css?ver=3.24.0'
        media='all' />
    <link rel='stylesheet' id='e-animation-slideInDown-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/elementor/assets/lib/animations/styles/slideInDown.min.c2401.dela?ver=3.24.0'
        media='all' />
    <link rel='stylesheet' id='e-animation-fadeInLeft-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/elementor/assets/lib/animations/styles/fadeInLeft.min.d2401.delay?ver=3.24.0'
        media='all' />
    <link rel='stylesheet' id='widget-image-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/elementor/assets/css/widget-image.min2401.css?ver=3.24.0'
        media='all' />
    <link rel='stylesheet' id='e-animation-fadeInDown-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/elementor/assets/lib/animations/styles/fadeInDown.min.f2401.delay?ver=3.24.0'
        media='all' />
    <link rel='stylesheet' id='mediaelement-css'
        href='{{ url('/') }}/beclean/wp-includes/js/mediaelement/mediaelementplayer-legacy.min1f61.css?ver=4.2.17'
        media='all' />
    <link rel='stylesheet' id='wp-mediaelement-css'
        href='{{ url('/') }}/beclean/wp-includes/js/mediaelement/wp-mediaelement.min109c.css?ver=6.6.2'
        media='all' />
    <link rel='stylesheet' id='e-animation-fadeInUp-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/elementor/assets/lib/animations/styles/fadeInUp.min.122401.delaye?ver=3.24.0'
        media='all' />
    <link rel='stylesheet' id='e-animation-fadeInRight-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/elementor/assets/lib/animations/styles/fadeInRight.min.132401.del?ver=3.24.0'
        media='all' />
    <link rel='stylesheet' id='widget-heading-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/elementor/assets/css/widget-heading.min2401.css?ver=3.24.0'
        media='all' />
    <link rel='stylesheet' id='widget-icon-box-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/elementor/assets/css/widget-icon-box.min2401.css?ver=3.24.0'
        media='all' />
    <link rel='stylesheet' id='e-animation-zoomIn-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/elementor/assets/lib/animations/styles/zoomIn.min2401.css?ver=3.24.0'
        media='all' />
    <link rel='stylesheet' id='e-animation-rotateInUpRight-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/elementor/assets/lib/animations/styles/rotateInUpRight.min.172401?ver=3.24.0'
        media='all' />
    <link rel='stylesheet' id='e-animation-rotateInUpLeft-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/elementor/assets/lib/animations/styles/rotateInUpLeft.min.182401?ver=3.24.0'
        media='all' />
    <link rel='stylesheet' id='e-animation-fadeIn-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/elementor/assets/lib/animations/styles/fadeIn.min2401.css?ver=3.24.0'
        media='all' />
    <link rel='stylesheet' id='e-animation-bounceIn-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/elementor/assets/lib/animations/styles/bounceIn.min.1a2401.delaye?ver=3.24.0'
        media='all' />
    <link rel='stylesheet' id='widget-counter-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/elementor/assets/css/widget-counter.min2401.css?ver=3.24.0'
        media='all' />
    <link rel='stylesheet' id='widget-icon-list-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/elementor/assets/css/widget-icon-list.min2401.css?ver=3.24.0'
        media='all' />
    <link rel='stylesheet' id='widget-divider-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/elementor/assets/css/widget-divider.min2401.css?ver=3.24.0'
        media='all' />
    <link rel='stylesheet' id='widget-star-rating-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/elementor/assets/css/widget-star-rating.min2401.css?ver=3.24.0'
        media='all' />
    <link rel='stylesheet' id='elementor-post-37-css'
        href='{{ url('/') }}/beclean/wp-content/uploads/sites/2/elementor/css/post-3709b2.css?ver=1726037156'
        media='all' />
    <link rel='stylesheet' id='elementor-post-64-css'
        href='{{ url('/') }}/beclean/wp-content/uploads/sites/2/elementor/css/post-6409b2.css?ver=1726037156'
        media='all' />
    <link rel='stylesheet' id='elementor-post-146-css'
        href='{{ url('/') }}/beclean/wp-content/uploads/sites/2/elementor/css/post-14609b2.css?ver=1726037156'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-ekiticons-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/elementskit-lite/modules/elementskit-icon/ekiticons.222c3d.delaye?ver=3.2.7'
        media='all' />
    <link rel='stylesheet' id='skb-cife-brands_icon-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/icomoon_brands.23ce14.d?ver=1.0.8'
        media='all' />
    <link rel='stylesheet' id='skb-cife-devicons_icon-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/devicons.min.24ce14.del?ver=1.0.8'
        media='all' />
    <link rel='stylesheet' id='skb-cife-elegant_icon-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/c/elegant.25ce14.delaye?ver=1.0.8'
        media='all' />
    <link rel='stylesheet' id='skb-cife-elusive_icon-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/elusive-icons.min.26ce1?ver=1.0.8'
        media='all' />
    <link rel='stylesheet' id='skb-cife-icofont_icon-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/icofont.min.27ce14.dela?ver=1.0.8'
        media='all' />
    <link rel='stylesheet' id='skb-cife-icomoon_icon-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/c/icomoon.28ce14.delaye?ver=1.0.8'
        media='all' />
    <link rel='stylesheet' id='skb-cife-iconic_icon-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/cs/iconic.29ce14.delaye?ver=1.0.8'
        media='all' />
    <link rel='stylesheet' id='skb-cife-ion_icon-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/ionicons.min.2ace14.del?ver=1.0.8'
        media='all' />
    <link rel='stylesheet' id='skb-cife-linearicons_icon-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/linearicons.2bce14.dela?ver=1.0.8'
        media='all' />
    <link rel='stylesheet' id='skb-cife-lineawesome_icon-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/line-awesome.min.2cce14?ver=1.0.8'
        media='all' />
    <link rel='stylesheet' id='skb-cife-line_icon-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/lineicons.2dce14.delaye?ver=1.0.8'
        media='all' />
    <link rel='stylesheet' id='skb-cife-materialdesign_icon-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/materialdesignicons.min?ver=1.0.8'
        media='all' />
    <link rel='stylesheet' id='skb-cife-open_iconic-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/open-iconic.2fce14.dela?ver=1.0.8'
        media='all' />
    <link rel='stylesheet' id='skb-cife-simpleline_icon-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/simple-line-icons.30ce1?ver=1.0.8'
        media='all' />
    <link rel='stylesheet' id='skb-cife-themify_icon-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/c/themify.31ce14.delaye?ver=1.0.8'
        media='all' />
    <link rel='stylesheet' id='ekit-widget-styles-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/elementskit-lite/widgets/init/assets/css/widget-styles.322c3d.del?ver=3.2.7'
        media='all' />
    <link rel='stylesheet' id='ekit-responsive-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/elementskit-lite/widgets/init/assets/css/responsive.332c3d.delaye?ver=3.2.7'
        media='all' />
    <link rel='stylesheet' id='google-fonts-1-css'
        href='https://fonts.googleapis.com/css?family=Sora%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.6.2'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-skb_cife-materialdesign-icon-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/materialdesignicons.min?ver=1.0.8'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-skb_cife-icofont-icon-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/icofont.min.27ce14.dela?ver=1.0.8'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-skb_cife-lineawesome-icon-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/line-awesome.min.2cce14?ver=1.0.8'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-shared-0-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.3452d5.dela?ver=5.15.3'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-solid-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min52d5.css?ver=5.15.3'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-skb_cife-themify-icon-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/c/themify.31ce14.delaye?ver=1.0.8'
        media='all' />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script src="{{ url('/') }}/beclean/wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1" id="jquery-core-js">
    </script>
    <script src="{{ url('/') }}/beclean/wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1"
        id="jquery-migrate-js"></script>
    <script
        src="{{ url('/') }}/beclean/wp-content/plugins/template-kit-export/assets/public/template-kit-export-public.3898?ver=1.0.23"
        id="template-kit-export-js"></script>
    {{-- <link rel="https://api.w.org/" href="https://demo.creativemox.com/beclean/wp-json/" /> --}}
    <link rel="EditURI" type="application/rsd+xml" title="RSD"
        href="https://demo.creativemox.com/beclean/xmlrpc.php?rsd" />
    <meta name="generator" content="WordPress 6.6.2" />
    <link rel="canonical" href="index.html" />
    <link rel='shortlink' href='https://demo.creativemox.com/beclean/?p=37' />
    <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
        href="https://demo.creativemox.com/beclean/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdemo.creativemox.com%2Fbeclean%2Ftemplate-kit%2Fhomepage%2F" />
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
        href="https://demo.creativemox.com/beclean/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdemo.creativemox.com%2Fbeclean%2Ftemplate-kit%2Fhomepage%2F&amp;format=xml" />
    <script>
        document.documentElement.className = document.documentElement.className.replace('no-js', 'js');
    </script>
    <style>
        .no-js img.lazyload {
            display: none;
        }

        figure.wp-block-image img.lazyloading {
            min-width: 150px;
        }

        .lazyload,
        .lazyloading {
            opacity: 0;
        }

        .lazyloaded {
            opacity: 1;
            transition: opacity 400ms;
            transition-delay: 0ms;
        }
    </style>
    <meta name="generator"
        content="Elementor 3.24.0; features: additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-auto">
    <style>
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
            background-image: none !important;
        }

        @media screen and (max-height: 1024px) {

            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }

        @media screen and (max-height: 640px) {

            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }
    </style>
</head>

<body
    class="envato_tk_templates-template envato_tk_templates-template-elementor_header_footer single single-envato_tk_templates postid-37 elementor-default elementor-template-full-width elementor-kit-7 elementor-page elementor-page-37">

    {{-- header --}}
    @livewire('frontend.widgets.header')

    {{ $slot }}

    <!-- Scroll to top -->
    {{-- <a href="#" class="scroll-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a> --}}

    @livewireScripts

    <!-- Optional JavaScript -->
    {{-- <script data-navigate-once src="{{ url('/') }}/frontend/js/jquery.min.js"></script> --}}

    <div data-elementor-type="footer" data-elementor-id="146"
        class="elementor elementor-146 elementor-location-footer" data-elementor-post-type="elementor_library">
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-3652bd5 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="3652bd5" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-background-overlay"></div>
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9612d54"
                    data-id="9612d54" data-element_type="column"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-83b6669 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="83b6669" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5f1da12"
                                    data-id="5f1da12" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-5f9845e elementor-widget__width-auto elementor-widget elementor-widget-image"
                                            data-id="5f9845e" data-element_type="widget"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <a href="https://demo.creativemox.com/beclean">
                                                    <img width="428" height="96"
                                                        src="{{ url('/') }}/beclean/wp-content/uploads/sites/2/2023/09/Logo_BeClean_1.png"
                                                        class="attachment-full size-full wp-image-58" alt=""
                                                        srcset="https://demo.creativemox.com/beclean/wp-content/uploads/sites/2/2023/09/Logo_BeClean_1.png 428w, https://demo.creativemox.com/beclean/wp-content/uploads/sites/2/2023/09/Logo_BeClean_1-300x67.png 300w"
                                                        sizes="(max-width: 428px) 100vw, 428px" loading="lazy" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2eb1b5c"
                                    data-id="2eb1b5c" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-97b9f01 elementor-widget elementor-widget-heading"
                                            data-id="97b9f01" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">Cleaning
                                                    your worries away!</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-6627251"
                                    data-id="6627251" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-427b420 elementor-shape-circle e-grid-align-right e-grid-align-mobile-center elementor-grid-0 elementor-widget elementor-widget-social-icons"
                                            data-id="427b420" data-element_type="widget"
                                            data-widget_type="social-icons.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-social-icons-wrapper elementor-grid">
                                                    <span class="elementor-grid-item">
                                                        <a class="elementor-icon elementor-social-icon elementor-social-icon-icon-facebook elementor-repeater-item-e438bf2"
                                                            href="#" target="_blank">
                                                            <span class="elementor-screen-only">Icon-facebook</span>
                                                            <i class="icon icon-facebook"></i> </a>
                                                    </span>
                                                    <span class="elementor-grid-item">
                                                        <a class="elementor-icon elementor-social-icon elementor-social-icon-icon-twitter1 elementor-repeater-item-f021e28"
                                                            href="#" target="_blank">
                                                            <span class="elementor-screen-only">Icon-twitter1</span>
                                                            <i class="icon icon-twitter1"></i> </a>
                                                    </span>
                                                    <span class="elementor-grid-item">
                                                        <a class="elementor-icon elementor-social-icon elementor-social-icon-icon-instagram-1 elementor-repeater-item-a90d67d"
                                                            href="#" target="_blank">
                                                            <span class="elementor-screen-only">Icon-instagram-1</span>
                                                            <i class="icon icon-instagram-1"></i> </a>
                                                    </span>
                                                    <span class="elementor-grid-item">
                                                        <a class="elementor-icon elementor-social-icon elementor-social-icon-icon-youtube-v elementor-repeater-item-b3498c5"
                                                            href="#" target="_blank">
                                                            <span class="elementor-screen-only">Icon-youtube-v</span>
                                                            <i class="icon icon-youtube-v"></i> </a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-c7271bf elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="c7271bf" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-6301d0e"
                                    data-id="6301d0e" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-ed626d3 elementor-widget elementor-widget-heading"
                                            data-id="ed626d3" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">Contact Us
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-0f85d80 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                            data-id="0f85d80" data-element_type="widget"
                                            data-widget_type="icon-list.default">
                                            <div class="elementor-widget-container">
                                                <ul class="elementor-icon-list-items">
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-text">Office : Jl Cempaka
                                                            Wangi No 22 Jakarta - Indonesia</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <a href="#">

                                                            <span class="elementor-icon-list-text">Email :
                                                                hello@yourdomain.tld</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-8aabea2 elementor-view-stacked elementor-position-left elementor-vertical-align-middle elementor-mobile-position-left elementor-shape-circle elementor-widget elementor-widget-icon-box"
                                            data-id="8aabea2" data-element_type="widget"
                                            data-widget_type="icon-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-icon-box-wrapper">

                                                    <div class="elementor-icon-box-icon">
                                                        <span class="elementor-icon elementor-animation-">
                                                            <i aria-hidden="true" class="icon icon-phone1"></i>
                                                        </span>
                                                    </div>

                                                    <div class="elementor-icon-box-content">

                                                        <h3 class="elementor-icon-box-title">
                                                            <span>
                                                                888 4000-234 </span>
                                                        </h3>


                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-c37ae07"
                                    data-id="c37ae07" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-1b9f370 elementor-widget elementor-widget-heading"
                                            data-id="1b9f370" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">Services
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-ee6a29d elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                            data-id="ee6a29d" data-element_type="widget"
                                            data-widget_type="icon-list.default">
                                            <div class="elementor-widget-container">
                                                <ul class="elementor-icon-list-items">
                                                    <li class="elementor-icon-list-item">
                                                        <a href="#">

                                                            <span class="elementor-icon-list-text">Room
                                                                Cleaning</span>
                                                        </a>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <a href="#">

                                                            <span class="elementor-icon-list-text">Window
                                                                Cleaning</span>
                                                        </a>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <a href="#">

                                                            <span class="elementor-icon-list-text">Toilet
                                                                Cleaning</span>
                                                        </a>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <a href="#">

                                                            <span class="elementor-icon-list-text">Garden
                                                                Cleaning</span>
                                                        </a>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <a href="#">

                                                            <span class="elementor-icon-list-text">Kitchen
                                                                Cleaning</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-682d8b0"
                                    data-id="682d8b0" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-466d535 elementor-widget elementor-widget-heading"
                                            data-id="466d535" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">Quick Links
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-3efed56 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                            data-id="3efed56" data-element_type="widget"
                                            data-widget_type="icon-list.default">
                                            <div class="elementor-widget-container">
                                                <ul class="elementor-icon-list-items">
                                                    <li class="elementor-icon-list-item">
                                                        <a href="#">

                                                            <span class="elementor-icon-list-text">About Us</span>
                                                        </a>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <a href="#">

                                                            <span class="elementor-icon-list-text">Offers</span>
                                                        </a>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <a href="#">

                                                            <span class="elementor-icon-list-text">Pricing
                                                                Table</span>
                                                        </a>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <a href="#">

                                                            <span class="elementor-icon-list-text">Partners</span>
                                                        </a>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <a href="#">

                                                            <span class="elementor-icon-list-text">Faq's Page</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-62c3344"
                                    data-id="62c3344" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-17f7a5c elementor-widget elementor-widget-heading"
                                            data-id="17f7a5c" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">Newsletter
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-3485d16 elementor-widget elementor-widget-text-editor"
                                            data-id="3485d16" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>Subscribe our newsletter to get our latest update &amp; news</p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-8cd0b2e elementor-button-align-stretch elementor-widget elementor-widget-form"
                                            data-id="8cd0b2e" data-element_type="widget"
                                            data-settings="{&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;button_width&quot;:&quot;100&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}"
                                            data-widget_type="form.default">
                                            <div class="elementor-widget-container">
                                                <form class="elementor-form" method="post" name="New Form">
                                                    <input type="hidden" name="post_id" value="146" />
                                                    <input type="hidden" name="form_id" value="8cd0b2e" />
                                                    <input type="hidden" name="referer_title" value="Homepage" />

                                                    <input type="hidden" name="queried_id" value="37" />

                                                    <div class="elementor-form-fields-wrapper elementor-labels-">
                                                        <div
                                                            class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-100 elementor-field-required">
                                                            <label for="form-field-email"
                                                                class="elementor-field-label elementor-screen-only">
                                                                Email </label>
                                                            <input size="1" type="email"
                                                                name="form_fields[email]" id="form-field-email"
                                                                class="elementor-field elementor-size-sm  elementor-field-textual"
                                                                placeholder="Enter your email" required="required"
                                                                aria-required="true">
                                                        </div>
                                                        <div
                                                            class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons">
                                                            <button type="submit"
                                                                class="elementor-button elementor-size-sm">
                                                                <span>
                                                                    <span class=" elementor-button-icon">
                                                                    </span>
                                                                    <span
                                                                        class="elementor-button-text">Subscribe</span>
                                                                </span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-292545e elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="292545e" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-6a02ddc"
                                    data-id="6a02ddc" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-c035482 elementor-widget elementor-widget-heading"
                                            data-id="c035482" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">Copyright ©
                                                    2023 BeClean, All rights reserved. Powered by MoxCreative</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-a8b7671"
                                    data-id="a8b7671" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-a78f858 elementor-icon-list--layout-inline elementor-align-right elementor-mobile-align-center elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                            data-id="a78f858" data-element_type="widget"
                                            data-widget_type="icon-list.default">
                                            <div class="elementor-widget-container">
                                                <ul class="elementor-icon-list-items elementor-inline-items">
                                                    <li class="elementor-icon-list-item elementor-inline-item">
                                                        <a href="#">

                                                            <span class="elementor-icon-list-text">Privacy
                                                                Policy</span>
                                                        </a>
                                                    </li>
                                                    <li class="elementor-icon-list-item elementor-inline-item">
                                                        <a href="#">

                                                            <span class="elementor-icon-list-text">Cookie
                                                                Policy</span>
                                                        </a>
                                                    </li>
                                                    <li class="elementor-icon-list-item elementor-inline-item">
                                                        <a href="#">

                                                            <span class="elementor-icon-list-text">Terms of
                                                                Service</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/fontawesome.min.js"></script>

    <script type='text/javascript'>
        const lazyloadRunObserver = () => {
            const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
            const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        let lazyloadBackground = entry.target;
                        if (lazyloadBackground) {
                            lazyloadBackground.classList.add('e-lazyloaded');
                        }
                        lazyloadBackgroundObserver.unobserve(entry.target);
                    }
                });
            }, {
                rootMargin: '200px 0px 200px 0px'
            });
            lazyloadBackgrounds.forEach((lazyloadBackground) => {
                lazyloadBackgroundObserver.observe(lazyloadBackground);
            });
        };
        const events = [
            'DOMContentLoaded',
            'elementor/lazyload/observe',
        ];
        events.forEach((event) => {
            document.addEventListener(event, lazyloadRunObserver);
        });
    </script>
    <link rel='stylesheet' id='widget-social-icons-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/elementor/assets/css/widget-social-icons.min2401.css?ver=3.24.0'
        media='all' />
    <link rel='stylesheet' id='e-apple-webkit-css'
        href='{{ url('/') }}/beclean/wp-content/plugins/elementor/assets/css/conditionals/apple-webkit.min2401.css?ver=3.24.0'
        media='all' />
    <script
        src="{{ url('/') }}/beclean/wp-content/themes/hello-elementor/assets/js/hello-frontend.min41fe.js?ver=3.0.1"
        id="hello-theme-frontend-js"></script>
    <script id="mediaelement-core-js-before">
        var mejsL10n = {
            "language": "en",
            "strings": {
                "mejs.download-file": "Download File",
                "mejs.install-flash": "You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/",
                "mejs.fullscreen": "Fullscreen",
                "mejs.play": "Play",
                "mejs.pause": "Pause",
                "mejs.time-slider": "Time Slider",
                "mejs.time-help-text": "Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.",
                "mejs.live-broadcast": "Live Broadcast",
                "mejs.volume-help-text": "Use Up\/Down Arrow keys to increase or decrease volume.",
                "mejs.unmute": "Unmute",
                "mejs.mute": "Mute",
                "mejs.volume-slider": "Volume Slider",
                "mejs.video-player": "Video Player",
                "mejs.audio-player": "Audio Player",
                "mejs.captions-subtitles": "Captions\/Subtitles",
                "mejs.captions-chapters": "Chapters",
                "mejs.none": "None",
                "mejs.afrikaans": "Afrikaans",
                "mejs.albanian": "Albanian",
                "mejs.arabic": "Arabic",
                "mejs.belarusian": "Belarusian",
                "mejs.bulgarian": "Bulgarian",
                "mejs.catalan": "Catalan",
                "mejs.chinese": "Chinese",
                "mejs.chinese-simplified": "Chinese (Simplified)",
                "mejs.chinese-traditional": "Chinese (Traditional)",
                "mejs.croatian": "Croatian",
                "mejs.czech": "Czech",
                "mejs.danish": "Danish",
                "mejs.dutch": "Dutch",
                "mejs.english": "English",
                "mejs.estonian": "Estonian",
                "mejs.filipino": "Filipino",
                "mejs.finnish": "Finnish",
                "mejs.french": "French",
                "mejs.galician": "Galician",
                "mejs.german": "German",
                "mejs.greek": "Greek",
                "mejs.haitian-creole": "Haitian Creole",
                "mejs.hebrew": "Hebrew",
                "mejs.hindi": "Hindi",
                "mejs.hungarian": "Hungarian",
                "mejs.icelandic": "Icelandic",
                "mejs.indonesian": "Indonesian",
                "mejs.irish": "Irish",
                "mejs.italian": "Italian",
                "mejs.japanese": "Japanese",
                "mejs.korean": "Korean",
                "mejs.latvian": "Latvian",
                "mejs.lithuanian": "Lithuanian",
                "mejs.macedonian": "Macedonian",
                "mejs.malay": "Malay",
                "mejs.maltese": "Maltese",
                "mejs.norwegian": "Norwegian",
                "mejs.persian": "Persian",
                "mejs.polish": "Polish",
                "mejs.portuguese": "Portuguese",
                "mejs.romanian": "Romanian",
                "mejs.russian": "Russian",
                "mejs.serbian": "Serbian",
                "mejs.slovak": "Slovak",
                "mejs.slovenian": "Slovenian",
                "mejs.spanish": "Spanish",
                "mejs.swahili": "Swahili",
                "mejs.swedish": "Swedish",
                "mejs.tagalog": "Tagalog",
                "mejs.thai": "Thai",
                "mejs.turkish": "Turkish",
                "mejs.ukrainian": "Ukrainian",
                "mejs.vietnamese": "Vietnamese",
                "mejs.welsh": "Welsh",
                "mejs.yiddish": "Yiddish"
            }
        };
    </script>
    <script src="{{ url('/') }}/beclean/wp-includes/js/mediaelement/mediaelement-and-player.min1f61.js?ver=4.2.17"
        id="mediaelement-core-js"></script>
    <script src="{{ url('/') }}/beclean/wp-includes/js/mediaelement/mediaelement-migrate.min109c.js?ver=6.6.2"
        id="mediaelement-migrate-js"></script>
    <script id="mediaelement-js-extra">
        var _wpmejsSettings = {
            "pluginPath": "\/beclean\/wp-includes\/js\/mediaelement\/",
            "classPrefix": "mejs-",
            "stretching": "responsive",
            "audioShortcodeLibrary": "mediaelement",
            "videoShortcodeLibrary": "mediaelement"
        };
    </script>
    <script src="{{ url('/') }}/beclean/wp-includes/js/mediaelement/wp-mediaelement.min109c.js?ver=6.6.2"
        id="wp-mediaelement-js"></script>
    <script
        src="{{ url('/') }}/beclean/wp-content/plugins/elementor/assets/lib/jquery-numerator/jquery-numerator.min.4d3958?ver=0.2.1"
        id="jquery-numerator-js"></script>
    <script
        src="{{ url('/') }}/beclean/wp-content/plugins/elementskit-lite/libs/framework/assets/js/frontend-script.4e2c3d?ver=3.2.7"
        id="elementskit-framework-js-frontend-js"></script>
    <script id="elementskit-framework-js-frontend-js-after">
        var elementskit = {
            resturl: 'https://demo.creativemox.com/beclean/wp-json/elementskit/v1/',
        }
    </script>
    <script
        src="{{ url('/') }}/beclean/wp-content/plugins/elementskit-lite/widgets/init/assets/js/widget-scripts.4f2c3d.del?ver=3.2.7"
        id="ekit-widget-scripts-js"></script>
    <script
        src="{{ url('/') }}/beclean/wp-content/plugins/elementor-pro/assets/lib/smartmenus/jquery.smartmenus.min.501576?ver=1.2.1"
        id="smartmenus-js"></script>
    <script
        src="{{ url('/') }}/beclean/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.minde8f.js?ver=3.21.0"
        id="elementor-pro-webpack-runtime-js"></script>
    <script src="{{ url('/') }}/beclean/wp-content/plugins/elementor/assets/js/webpack.runtime.min2401.js?ver=3.24.0"
        id="elementor-webpack-runtime-js"></script>
    <script src="{{ url('/') }}/beclean/wp-content/plugins/elementor/assets/js/frontend-modules.min2401.js?ver=3.24.0"
        id="elementor-frontend-modules-js"></script>
    <script src="{{ url('/') }}/beclean/wp-includes/js/dist/hooks.min2757.js?ver=2810c76e705dd1a53b18"
        id="wp-hooks-js"></script>
    <script src="{{ url('/') }}/beclean/wp-includes/js/dist/i18n.minc33c.js?ver=5e580eb46a90c2b997e6" id="wp-i18n-js">
    </script>
    <script id="wp-i18n-js-after">
        wp.i18n.setLocaleData({
            'text direction\u0004ltr': ['ltr']
        });
    </script>
    <script id="elementor-pro-frontend-js-before">
        var ElementorProFrontendConfig = {
            "ajaxurl": "https:\/\/demo.creativemox.com\/beclean\/wp-admin\/admin-ajax.php",
            "nonce": "e0ee8c96fa",
            "urls": {
                "assets": "https:\/\/demo.creativemox.com\/beclean\/wp-content\/plugins\/elementor-pro\/assets\/",
                "rest": "https:\/\/demo.creativemox.com\/beclean\/wp-json\/"
            },
            "shareButtonsNetworks": {
                "facebook": {
                    "title": "Facebook",
                    "has_counter": true
                },
                "twitter": {
                    "title": "Twitter"
                },
                "linkedin": {
                    "title": "LinkedIn",
                    "has_counter": true
                },
                "pinterest": {
                    "title": "Pinterest",
                    "has_counter": true
                },
                "reddit": {
                    "title": "Reddit",
                    "has_counter": true
                },
                "vk": {
                    "title": "VK",
                    "has_counter": true
                },
                "odnoklassniki": {
                    "title": "OK",
                    "has_counter": true
                },
                "tumblr": {
                    "title": "Tumblr"
                },
                "digg": {
                    "title": "Digg"
                },
                "skype": {
                    "title": "Skype"
                },
                "stumbleupon": {
                    "title": "StumbleUpon",
                    "has_counter": true
                },
                "mix": {
                    "title": "Mix"
                },
                "telegram": {
                    "title": "Telegram"
                },
                "pocket": {
                    "title": "Pocket",
                    "has_counter": true
                },
                "xing": {
                    "title": "XING",
                    "has_counter": true
                },
                "whatsapp": {
                    "title": "WhatsApp"
                },
                "email": {
                    "title": "Email"
                },
                "print": {
                    "title": "Print"
                },
                "x-twitter": {
                    "title": "X"
                },
                "threads": {
                    "title": "Threads"
                }
            },
            "facebook_sdk": {
                "lang": "en_US",
                "app_id": ""
            },
            "lottie": {
                "defaultAnimationUrl": "https:\/\/demo.creativemox.com\/beclean\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"
            }
        };
    </script>
    <script src="{{ url('/') }}/beclean/wp-content/plugins/elementor-pro/assets/js/frontend.minde8f.js?ver=3.21.0"
        id="elementor-pro-frontend-js"></script>
    <script src="{{ url('/') }}/beclean/wp-includes/js/jquery/ui/core.minb37e.js?ver=1.13.3" id="jquery-ui-core-js">
    </script>
    <script id="elementor-frontend-js-before">
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close",
                "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
                "a11yCarouselPrevSlideMessage": "Previous slide",
                "a11yCarouselNextSlideMessage": "Next slide",
                "a11yCarouselFirstSlideMessage": "This is the first slide",
                "a11yCarouselLastSlideMessage": "This is the last slide",
                "a11yCarouselPaginationBulletMessage": "Go to slide"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile Portrait",
                        "value": 767,
                        "default_value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Landscape",
                        "value": 880,
                        "default_value": 880,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "tablet": {
                        "label": "Tablet Portrait",
                        "value": 1024,
                        "default_value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Landscape",
                        "value": 1200,
                        "default_value": 1200,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1366,
                        "default_value": 1366,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 2400,
                        "default_value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                }
            },
            "version": "3.24.0",
            "is_static": false,
            "experimentalFeatures": {
                "additional_custom_breakpoints": true,
                "container_grid": true,
                "e_swiper_latest": true,
                "e_nested_atomic_repeaters": true,
                "e_onboarding": true,
                "theme_builder_v2": true,
                "hello-theme-header-footer": true,
                "home_screen": true,
                "ai-layout": true,
                "landing-pages": true,
                "link-in-bio": true,
                "floating-buttons": true,
                "form-submissions": true
            },
            "urls": {
                "assets": "https:\/\/demo.creativemox.com\/beclean\/wp-content\/plugins\/elementor\/assets\/",
                "ajaxurl": "https:\/\/demo.creativemox.com\/beclean\/wp-admin\/admin-ajax.php"
            },
            "nonces": {
                "floatingButtonsClickTracking": "21b74b568d"
            },
            "swiperClass": "swiper",
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description",
                "hello_header_logo_type": "title",
                "hello_header_menu_layout": "horizontal",
                "hello_footer_logo_type": "logo"
            },
            "post": {
                "id": 37,
                "title": "Homepage%20%E2%80%93%20BeClean",
                "excerpt": "",
                "featuredImage": "https:\/\/demo.creativemox.com\/beclean\/wp-content\/uploads\/sites\/2\/2023\/09\/Homepage-210x1024.jpg"
            }
        };
    </script>
    <script src="{{ url('/') }}/beclean/wp-content/plugins/elementor/assets/js/frontend.min2401.js?ver=3.24.0"
        id="elementor-frontend-js"></script>
    <script
        src="{{ url('/') }}/beclean/wp-content/plugins/elementor-pro/assets/js/elements-handlers.minde8f.js?ver=3.21.0"
        id="pro-elements-handlers-js"></script>
    <script
        src="{{ url('/') }}/beclean/wp-content/plugins/elementskit-lite/widgets/init/assets/js/animate-circle.min.5a2c3d?ver=3.2.7"
        id="animate-circle-js"></script>
    <script id="elementskit-elementor-js-extra">
        var ekit_config = {
            "ajaxurl": "https:\/\/demo.creativemox.com\/beclean\/wp-admin\/admin-ajax.php",
            "nonce": "f8dbfe5a16"
        };
    </script>
    <script
        src="{{ url('/') }}/beclean/wp-content/plugins/elementskit-lite/widgets/init/assets/js/elementor2c3d.js?ver=3.2.7"
        id="elementskit-elementor-js"></script>
</body>

</html>
