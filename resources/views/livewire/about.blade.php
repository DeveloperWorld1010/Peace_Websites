<div>

    <!-- Breadcrumb Section -->
    @include('partials.breadcrumb', ['title' => 'About Us', 'subtitle' => 'Our Story'])

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="section-title fade-in">
                <div class="subtitle">Who We Are</div>
                <h2>About Peace</h2>
                {{-- <p>Building a Better Tomorrow, Today</p> --}}
            </div>
            <div class="about-content">
                <div class="col-lg-5">
                    <div class="about-image">
                        <img src="{{ asset('assets/images/purpose.png') }}" alt="About Us">
                        {{-- <div class="about-badge">
                            <h3>14+</h3>
                            <p>Years of Impact</p>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-text">
                        {{-- <h3>Creating Lasting Change Since 2010</h3> --}}
                        <p>At PEACE, we believe every ministry has the responsibility—and the opportunity—to safeguard
                            the vulnerable. We provide biblically grounded, thoughtfully guided resources that helps
                            churches, schools, and faith based organizations cultivate safe, secure, and caring
                            environments.</p>
                        <p>Our mission is to honor God by empowering ministries with the practical support, courage, and
                            confidence to protect their people and cultivate spaces where safety and hope can thrive.
                        </p>
                        <button class="btn-custom btn-primary-custom mt-3">
                            <i class="fas fa-book-open"></i> Read Our Story
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section: Our Impact in Action -->
    {{-- <section class="gallery-section">
        <div class="container">
            <h2>Our Impact in Action</h2>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <img class="gallery-img w-100"
                        src="https://images.squarespace-cdn.com/content/v1/5f077c68a8a15e3b84ff7dda/1597863245168-0J4TLQ46Y9J9YKD7K1Y9/IMG_0206.jpg"
                        alt="Education Program">

                    <grok-card data-id="207d79" data-type="image_card" data-arg-size="LARGE"></grok-card>

                </div>
                <div class="col-lg-4 col-md-6">
                    <img class="gallery-img w-100"
                        src="https://www.easthamptonstar.com/sites/default/files/20230720_Vils_ArtistsForHaiti.jpg"
                        alt="Healthcare Initiative">

                    <grok-card data-id="6e0d64" data-type="image_card" data-arg-size="LARGE"></grok-card>

                </div>
                <div class="col-lg-4 col-md-6">
                    <img class="gallery-img w-100"
                        src="https://wjla.com/resources/media/1abca20b-44a9-46fa-a34b-53b0cb580abd-large16x9_thumb_168316.png"
                        alt="Community Support">

                    <grok-card data-id="50a64c" data-type="image_card" data-arg-size="LARGE"></grok-card>

                </div>
                <div class="col-lg-4 col-md-6">
                    <img class="gallery-img w-100"
                        src="https://thumbs.dreamstime.com/b/group-diverse-volunteers-working-together-to-support-community-charity-efforts-indoors-five-multiracial-volunteers-smile-425601540.jpg"
                        alt="Diverse Volunteers">

                    <grok-card data-id="d7939c" data-type="image_card" data-arg-size="LARGE"></grok-card>

                </div>
                <div class="col-lg-4 col-md-6">
                    <img class="gallery-img w-100"
                        src="https://t3.ftcdn.net/jpg/08/34/57/38/360_F_834573860_iJeNyIsRqNUDpuLT9ThMsm2sxrQSKInJ.jpg"
                        alt="Volunteer Group">

                    <grok-card data-id="e44a12" data-type="image_card" data-arg-size="LARGE"></grok-card>

                </div>
                <div class="col-lg-4 col-md-6">
                    <img class="gallery-img w-100"
                        src="https://thumbs.dreamstime.com/b/diverse-group-volunteers-sorting-donated-food-boxes-working-community-charity-donation-center-smiling-camera-401950959.jpg"
                        alt="Sorting Donations">

                    <grok-card data-id="22c514" data-type="image_card" data-arg-size="LARGE"></grok-card>

                </div>
            </div>
        </div>
    </section> --}}
</div>
