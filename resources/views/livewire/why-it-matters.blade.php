<div>

    <!-- Breadcrumb Section -->
    @include('partials.breadcrumb', [
        'title' => 'Why It Matters',
        'subtitle' => 'Our Commitment to Protection & Love',
    ])

    <!-- Why It Matters Intro Section -->
    <section class="why-matters-section">
        <div class="container">
            <div class="why-intro">
                <h2>Why It Matters</h2>
                {{-- <p>At Peace, we are driven by a core belief that every person deserves protection, every
                    ministry deserves clarity, and that safeguarding the vulnerable is central to living out Christlike
                    love. Our work is rooted in these fundamental principles that guide every decision we make and every
                    program we implement.</p> --}}
            </div>

            <!-- Three Reasons Cards -->
            <div class="row g-5 mt-4">
                <!-- Reason 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="matter-card">
                        <div class="matter-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3>Because every person deserves protection</h3>
                        <p>Protection is a fundamental human right. Every individual—regardless of age, gender, or
                            socioeconomic status—deserves to live free from harm, exploitation, and abuse. We are
                            committed to creating safe environments where vulnerable populations can thrive, develop,
                            and reach their full potential. Through our comprehensive safeguarding initiatives, we
                            establish standards, training, and systems that prioritize human dignity and security.</p>
                    </div>
                </div>

                <!-- Reason 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="matter-card">
                        <div class="matter-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h3>Because every ministry deserves clarity</h3>
                        <p>Transparency and clear communication are essential to trust. Every organization,
                            particularly faith-based ministries, should operate with complete clarity about its
                            practices, policies, and processes. We believe in providing ministries with the guidance,
                            resources, and frameworks they need to implement effective safeguarding policies. By
                            promoting accountability and transparency, we help organizations build stronger, more
                            trustworthy communities.</p>
                    </div>
                </div>

                <!-- Reason 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="matter-card">
                        <div class="matter-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h3>Because safeguarding the vulnerable is central to living out Christlike love</h3>
                        <p>At the heart of our mission lies a spiritual conviction: protecting the vulnerable is an
                            expression of Christlike love. Jesus consistently advocated for the marginalized, the
                            afflicted, and the defenseless. We believe that safeguarding—preventing harm, responding
                            to abuse, and promoting healing—is not just a policy initiative; it is a sacred calling.
                            When
                            we protect the vulnerable, we fulfill the mandate to love one another as Christ loved us.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
