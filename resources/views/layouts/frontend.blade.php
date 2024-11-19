<!doctype html>
<html lang="en">

@if (route('welcome') == url()->current())
    @include('frontend.inc.home-page-links')
@endif

@if (route('about-us.index') == url()->current())
    @include('frontend.inc.about-us-links')
@endif

@if (route('shedule-appointment.index') == url()->current())
    @include('frontend.inc.shedule-appointment-link')
@endif

@if (route('contact-us.index') == url()->current())
    @include('frontend.inc.contact-us-link')
@endif

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
@livewireStyles


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

    <div data-elementor-type="footer" data-elementor-id="146" class="elementor elementor-146 elementor-location-footer"
        data-elementor-post-type="elementor_library">
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
                                                            <i class="fab fa-facebook-f"></i> </a>
                                                    </span>
                                                    <span class="elementor-grid-item">
                                                        <a class="elementor-icon elementor-social-icon elementor-social-icon-icon-twitter1 elementor-repeater-item-f021e28"
                                                            href="#" target="_blank">
                                                            <span class="elementor-screen-only">Icon-twitter1</span>
                                                            <i class="fab fa-twitter"></i> </a>
                                                    </span>
                                                    <span class="elementor-grid-item">
                                                        <a class="elementor-icon elementor-social-icon elementor-social-icon-icon-instagram-1 elementor-repeater-item-a90d67d"
                                                            href="#" target="_blank">
                                                            <span class="elementor-screen-only">Icon-instagram-1</span>
                                                            <i class="fab fa-instagram"></i> </a>
                                                    </span>
                                                    <span class="elementor-grid-item">
                                                        <a class="elementor-icon elementor-social-icon elementor-social-icon-icon-youtube-v elementor-repeater-item-b3498c5"
                                                            href="#" target="_blank">
                                                            <span class="elementor-screen-only">Icon-youtube-v</span>
                                                            <i class="fab fa-youtube"></i> </a>
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
                                                            <i aria-hidden="true" class="fas fa-phone"></i>
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

                                                            <span class="elementor-icon-list-text">House Cleaning</span>
                                                        </a>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <a href="#">

                                                            <span class="elementor-icon-list-text">Laundry</span>
                                                        </a>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <a href="#">

                                                            <span class="elementor-icon-list-text">House Maid</span>
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

                                                            <span class="elementor-icon-list-text">Contact Us</span>
                                                        </a>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <a href="#">

                                                            <span class="elementor-icon-list-text">Shedule a service</span>
                                                        </a>
                                                    </li>
                                                    {{-- <li class="elementor-icon-list-item">
                                                        <a href="#">

                                                            <span class="elementor-icon-list-text">Partners</span>
                                                        </a>
                                                    </li> --}}
                                                    {{-- <li class="elementor-icon-list-item">
                                                        <a href="#">

                                                            <span class="elementor-icon-list-text">Faq's Page</span>
                                                        </a> --}}
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


    @if (route('welcome') == url()->current())
        @include('frontend.inc.home-page-scripts')
    @endif

    @if (route('about-us.index') == url()->current())
        @include('frontend.inc.about-us-scripts')
    @endif

    @if (route('shedule-appointment.index') == url()->current())
        @include('frontend.inc.shedule-appointment-scripts')
    @endif

    @if (route('contact-us.index') == url()->current())
        @include('frontend.inc.contact-us-scripts')
    @endif

</body>

</html>
