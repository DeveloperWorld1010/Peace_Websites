<div>
    <!-- Breadcrumb Section -->
    @include('partials.breadcrumb', ['title' => 'Contact Us', 'subtitle' => 'Get in Touch'])

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">

                    <div class="contact-form">
                        <h3>Send Us a Message</h3>
                        <form action="{{ route('contact.submit') }}" method="POST">
                            @csrf
                            <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                            <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                            <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                            <textarea class="form-control" rows="6" name="message" placeholder="Your Message" required></textarea>
                            <button type="submit" class="btn-custom">
                                <i class="fas fa-paper-plane"></i> Send Message
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-info">
                        <h3>Contact Information</h3>
                        <div class="contact-item">
                            <div class="contact-icon red">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h5>Address</h5>
                                <p>123 Hope Street, Global City<br>New York, NY 10001, USA</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon teal">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div>
                                <h5>Phone</h5>
                                <p>+1 (555) 123-4567<br>+1 (555) 987-6543</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon orange">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h5>Email</h5>
                                <p>info@hopefoundation.org<br>contact@hopefoundation.org</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <iframe src="https://www.google.com/maps?q=New+Delhi,India&output=embed" loading="lazy" width="100%"
            height="450" style="border:0;" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </section>
</div>
