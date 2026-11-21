    </main>

    <!-- Back to Top Button -->
    <a href="#" id="backToTop" class="back-to-top" title="Back to Top" aria-label="Back to top"><i class="fas fa-arrow-up"></i></a>

    <!-- Call-to-action band -->
    <section class="cta-band">
        <div class="container">
            <div>
                <h3>Ready to book your Innova Crysta?</h3>
                <p>Chauffeur-driven, sanitised and on time. Get an instant quote for local or outstation trips.</p>
            </div>
            <div class="cta-actions">
                <a href="tel:+917290885949" class="cta-call"><i class="fas fa-phone-alt"></i> Call +91 72908 85949</a>
                <a href="https://wa.me/917290885949" class="cta-wa" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i> WhatsApp Us</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-col">
                    <a href="index.php" class="brand">
                        <span class="brand-mark"><i class="fas fa-car-side"></i></span>
                        <span class="brand-text">
                            <span class="brand-name">Innova Crysta</span>
                            <span class="brand-sub">On Rent · Delhi</span>
                        </span>
                    </a>
                    <p class="footer-about">Your trusted partner for comfortable and stylish travel in Delhi NCR. Reliability and comfort guaranteed.</p>
                    <div class="social-links">
                        <a href="https://www.facebook.com/GetMeCabFB" aria-label="Facebook" target="_blank" rel="noopener"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/innova_crystaonrent/" aria-label="Instagram" target="_blank" rel="noopener"><i class="fab fa-instagram"></i></a>
                        <a href="https://x.com/getmecab" aria-label="X" target="_blank" rel="noopener"><i class="fab fa-x-twitter"></i></a>
                        <a href="https://www.youtube.com/@getmecab9627" aria-label="YouTube" target="_blank" rel="noopener"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="fleet.php">Fleet</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="destinations.php">Destinations</a></li>
                        <li><a href="why-us.php">Why Us</a></li>
                        <li><a href="testimonials.php">Testimonials</a></li>
                        <li><a href="blog.php">Blogs</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Tour Packages</h4>
                    <ul>
                        <li><a href="golden-triangle-innova-package.php">Golden Triangle</a></li>
                        <li><a href="char-dham-innova-package.php">Char Dham Yatra</a></li>
                        <li><a href="himachal-innova-package.php">Himachal</a></li>
                        <li><a href="kashmir-innova-package.php">Kashmir</a></li>
                        <li><a href="leh-ladakh-innova-package.php">Leh Ladakh</a></li>
                        <li><a href="rajasthan-innova-package.php">Rajasthan</a></li>
                        <li><a href="uttarakhand-innova-package.php">Uttarakhand</a></li>
                        <li><a href="pilgrimage-innova-package.php">Pilgrimage</a></li>
                        <li><a href="wildlife-innova-package.php">Wildlife</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Get in Touch</h4>
                    <ul class="contact-list">
                        <li><i class="fas fa-phone-alt"></i><a href="tel:+917290885949">+91 72908 85949</a></li>
                        <li><i class="fab fa-whatsapp"></i><a href="https://wa.me/917290885949" target="_blank" rel="noopener">WhatsApp Booking</a></li>
                        <li><i class="fas fa-envelope"></i><a href="mailto:onrentinnovacrysta@gmail.com">onrentinnovacrysta@gmail.com</a></li>
                        <li><i class="fas fa-map-marker-alt"></i><span>B-26, Rajeev Nagar, Near Radhey Krishna Mandir, Begumpur, New Delhi-110086</span></li>
                        <li><i class="fas fa-clock"></i><span>Open 24 hours, 7 days a week</span></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <span>&copy; <?php echo date('Y'); ?> Innova Crysta on Rent Delhi. All rights reserved.</span>
                <span><a href="contact.php">Contact</a><a href="sitemap.xml" target="_blank">Sitemap</a></span>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu (slide-in drawer)
        const hamburger = document.getElementById('hamburger');
        const navMenu = document.getElementById('navMenu');
        const navBackdrop = document.getElementById('navBackdrop');

        function setMenu(open) {
            navMenu.classList.toggle('active', open);
            if (navBackdrop) navBackdrop.classList.toggle('show', open);
            hamburger.setAttribute('aria-expanded', open ? 'true' : 'false');
            hamburger.innerHTML = open ? '<i class="fas fa-times"></i>' : '<i class="fas fa-bars"></i>';
            document.body.style.overflow = open ? 'hidden' : '';
        }

        if (hamburger && navMenu) {
            hamburger.addEventListener('click', () => setMenu(!navMenu.classList.contains('active')));
            if (navBackdrop) navBackdrop.addEventListener('click', () => setMenu(false));
            document.querySelectorAll('.nav-menu a').forEach(link => {
                link.addEventListener('click', () => setMenu(false));
            });
            document.addEventListener('keydown', e => { if (e.key === 'Escape') setMenu(false); });
        }

        // Header shadow once the page is scrolled
        const siteHeader = document.getElementById('siteHeader');

        // Intersection Observer for scroll animations
        const observerOptions = {
            threshold: 0.2,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.section-title, .hero-text, .hero-image, .about-content, .about-image, .feature-card, .fleet-card, .why-item, .testimonial-card').forEach(el => {
            observer.observe(el);
        });

        // Back to Top Button + header shadow
        const backToTopBtn = document.getElementById("backToTop");
        window.addEventListener("scroll", () => {
            const y = window.pageYOffset;
            if (siteHeader) siteHeader.classList.toggle("scrolled", y > 10);
            if (backToTopBtn) backToTopBtn.classList.toggle("show", y > 300);
        }, { passive: true });
        if (backToTopBtn) {
            backToTopBtn.addEventListener("click", (e) => {
                e.preventDefault();
                window.scrollTo({ top: 0, behavior: "smooth" });
            });
        }
    </script>
</body>
</html>
