@extends('website.master')

@section('title')
    Contact us
@endsection

@section('body')
    <div style="position: fixed; top: -20px; left: 50%; transform: translate(-50%, -50%); background-image: linear-gradient(to right, #A1CDA0, #4B8B3B); color: #fff; padding: 5px 15px; border-radius: 5px; display: flex; align-items: center; gap: 10px; opacity: 0; z-index: -1;" id="success-message">
        <svg xmlns="http://www.w3.org/2000/svg" height="14" width="14" viewBox="0 0 512 512">
            <path fill="#ffffff"
                d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z" />
        </svg> Message sent successfully
    </div>

    <section id="contact-us" class="contact-us section">
        <div class="container">
            <div class="contact-head">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>Contact Us</h2>
                            <p>There are many variations of passages of Lorem
                                Ipsum available, but the majority have suffered alteration in some form.</p>
                        </div>
                    </div>
                </div>
                <div class="contact-info">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-12">
                            <div class="single-info-head">

                                <div class="single-info">
                                    <i class="lni lni-map"></i>
                                    <h3>Address</h3>
                                    <ul>
                                        <li>44 Shirley Ave. West Chicago,<br> IL 60185, USA.</li>
                                    </ul>
                                </div>


                                <div class="single-info">
                                    <i class="lni lni-phone"></i>
                                    <h3>Call us on</h3>
                                    <ul>
                                        <li><a href="tel:+18005554400">+1 800 555 44 00 (Toll free)</a></li>
                                        <li><a href="tel:+321556667890">+321 55 666 7890</a></li>
                                    </ul>
                                </div>


                                <div class="single-info">
                                    <i class="lni lni-envelope"></i>
                                    <h3>Mail at</h3>
                                    <ul>
                                        <li><a
                                                href="#"><span
                                                    class="__cf_email__">[email&#160;protected]</span></a>
                                        </li>
                                        <li><a
                                                href="#"><span
                                                    class="__cf_email__">[email&#160;protected]</span></a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12 col-12">
                            <div class="contact-form-head">
                                <div class="form-main">
                                    <form class="form" id="contactForm">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="form-group">
                                                    <input name="name" type="text" placeholder="Your Name" required="required">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="form-group">
                                                    <input name="subject" type="text" placeholder="Your Subject" required="required">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="form-group">
                                                    <input name="email" type="email" placeholder="Your Email" required="required">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="form-group">
                                                    <input name="phone" type="text" placeholder="Your Phone" required="required">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group message">
                                                    <textarea name="message" placeholder="Your Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group button">
                                                    <button type="submit" class="btn ">Submit Message</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#contactForm').submit(function(e) {
                e.preventDefault();
                $('.error_msg').html('');
                $.ajax({
                    type: 'POST',
                    url: '{{ route('contact.message.store') }}',
                    data: $(this).serialize(),
                    success: function(response) {
                        if (response.success) {
                            setTimeout(() => {
                                document.getElementById('success-message').style
                                    .zIndex = 1024;
                                document.getElementById('success-message').style
                                    .opacity = 1;
                                document.getElementById('success-message').style.top =
                                    '40px';
                                document.getElementById('success-message').style
                                    .transition = 'all 0.3s ease-in-out';
                                setTimeout(() => {
                                    document.getElementById('success-message')
                                        .style.zIndex = -1;
                                    document.getElementById('success-message')
                                        .style.opacity = 0;
                                    document.getElementById('success-message')
                                        .style.top = '-20px';
                                    document.getElementById('success-message')
                                        .style.transition =
                                        'all 0.3s ease-in-out';
                                }, 3000);
                            }, 100);
                            $('#contactForm')[0].reset();

                            $('html, body').animate({
                                scrollTop: 0
                            }, 100);
                        } else {
                            $.each(response.errors, function(key, value) {
                                var errorElement = $('#' + key + '_error');
                                if (errorElement.length) {
                                    errorElement.html(value);
                                    $('html, body').animate({
                                        scrollTop: errorElement.offset().top -
                                            100
                                    }, 100);
                                }
                            });
                        }
                    }
                });
            });
        });
    </script>
@endpush
