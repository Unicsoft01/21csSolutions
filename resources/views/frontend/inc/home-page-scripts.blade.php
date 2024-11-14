<div>
    
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
    <script  src="{{ url('/') }}/beclean/wp-includes/js/mediaelement/mediaelement-and-player.min1f61.js?ver=4.2.17"
        id="mediaelement-core-js"></script>
    <script  src="{{ url('/') }}/beclean/wp-includes/js/mediaelement/mediaelement-migrate.min109c.js?ver=6.6.2"
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
    <script  src="{{ url('/') }}/beclean/wp-includes/js/mediaelement/wp-mediaelement.min109c.js?ver=6.6.2"
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
    <script  src="{{ url('/') }}/beclean/wp-content/plugins/elementor/assets/js/webpack.runtime.min2401.js?ver=3.24.0"
        id="elementor-webpack-runtime-js"></script>
    <script  src="{{ url('/') }}/beclean/wp-content/plugins/elementor/assets/js/frontend-modules.min2401.js?ver=3.24.0"
        id="elementor-frontend-modules-js"></script>
    <script  src="{{ url('/') }}/beclean/wp-includes/js/dist/hooks.min2757.js?ver=2810c76e705dd1a53b18"
        id="wp-hooks-js"></script>
    <script  src="{{ url('/') }}/beclean/wp-includes/js/dist/i18n.minc33c.js?ver=5e580eb46a90c2b997e6" id="wp-i18n-js">
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
    <script  src="{{ url('/') }}/beclean/wp-content/plugins/elementor-pro/assets/js/frontend.minde8f.js?ver=3.21.0"
        id="elementor-pro-frontend-js"></script>
    <script  src="{{ url('/') }}/beclean/wp-includes/js/jquery/ui/core.minb37e.js?ver=1.13.3" id="jquery-ui-core-js">
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
    <script  src="{{ url('/') }}/beclean/wp-content/plugins/elementor/assets/js/frontend.min2401.js?ver=3.24.0"
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
</div>
