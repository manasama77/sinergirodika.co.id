@extends('template')

@section('content')
    <div class="container">

        <div class="row py-4">
            <div class="col-lg-6" style="min-height: 80vh;">

                <h2 class="font-weight-bold text-8 mt-2 mb-0">Contact Us</h2>
                <p class="mb-4 text-dark">Feel free to ask for details, don't save any questions!</p>

                <form id="form" class="contact-form" action="{{ route('send-mail') }}" method="POST">
                    @csrf

                    @if (session('success'))
                        <div class="contact-form-success alert alert-success mt-4">
                            <strong>Success!</strong> Your message has been sent to us.
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="contact-form-error alert alert-danger mt-4">
                            <strong>Error!</strong> There was an error sending your message.
                            <span class="mail-error-message text-1 d-block"></span>
                        </div>
                    @endif

                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="contact-form-error alert alert-danger mt-4">
                                <strong>Error!</strong> {{ $error }}
                            </div>
                        @endforeach
                    @endif

                    <div class="row">
                        <div class="form-group col-lg-12">
                            <label class="form-label mb-1 text-2 text-dark">Full Name</label>
                            <input type="text" value="" data-msg-required="Please enter your name." maxlength="100"
                                class="form-control text-3 h-auto py-2" name="full_name" required>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="form-label mb-1 text-2 text-dark">Email Address</label>
                            <input type="email" value="" data-msg-required="Please enter your email address."
                                data-msg-email="Please enter a valid email address." maxlength="100"
                                class="form-control text-3 h-auto py-2" name="email" required>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="form-label mb-1 text-2 text-dark">WhatsApp</label>
                            <input type="tel" value="" data-msg-required="Please enter your WhatsApp."
                                data-msg-tel="Please enter a valid WhatsApp." class="form-control text-3 h-auto py-2"
                                name="whatsapp" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label mb-1 text-2 text-dark">Subject</label>
                            <input type="text" value="" data-msg-required="Please enter the subject."
                                maxlength="50" class="form-control text-3 h-auto py-2" name="subject" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label mb-1 text-2 text-dark">Message</label>
                            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="5"
                                class="form-control text-3 h-auto py-2" name="message" required></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <input id="submit" type="submit" value="Send Message" class="btn btn-primary btn-modern"
                                data-loading-text="Loading...">
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-lg-6">

                <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0">
                    <h4 class="mt-2 mb-1">Our <strong>Office</strong></h4>
                    <ul class="list list-icons list-icons-style-2 mt-2">
                        <li class="text-dark"><i class="fas fa-map-marker-alt top-6"></i> <strong
                                class="text-dark">Address:</strong> Jl.
                            Jalur Sutera Timur Kav. 6A No. 16 Alam Sutera, Tangerang Banten 15144</li>
                        <li class="text-dark"><i class="fas fa-phone top-6"></i> <strong class="text-dark">Phone:</strong>
                            <a href="tel:02122352886">021 22352886</a>
                        </li>
                        <li class="text-dark"><i class="fab fa-whatsapp top-6"></i> <strong
                                class="text-dark">Whatsapp:</strong> <a href="https://wa.me/628111923762">08111923762</a>
                        </li>
                        <li class="text-dark"><i class="fas fa-envelope top-6"></i> <strong
                                class="text-dark">Email:</strong> <a
                                href="mailto:sinergi.rodika@gmail.com">sinergi.rodika@gmail.com</a></li>
                    </ul>
                </div>

                <h4 class="pt-5 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0">PT
                    <strong>SINERGI RODIKA UTAMA</strong>
                </h4>
                <p class="lead mb-0 text-4 appear-animation text-dark" data-appear-animation="fadeIn"
                    data-appear-animation-delay="0">
                    Substation and Electrical Services, Electric Vehicle Charger and Energy & Environment Management</p>

            </div>
        </div>

    </div>
@endsection

@section('js')
    <script>
        // disabled submit button after form submit
        $(document).ready(function() {
            $('#form').submit(function() {
                $('#submit').prop('disabled', true);
            });
        });
    </script>
@endsection
