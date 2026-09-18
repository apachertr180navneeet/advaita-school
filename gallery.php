<?php
/**
 * Photo Gallery Page - Parshv International School
 */
$pageTitle = "Campus Photo Gallery - Parshv International School, Jodhpur";
$activePage = "gallery";

require_once __DIR__ . '/includes/header.php';
?>

<main id="main" class="main-content-wrapper">

    <!-- Page Banner -->
    <section class="adv-page-banner" aria-label="Page Header">
        <div class="adv-container">
            <div class="adv-banner-content">
                <span class="adv-banner-eyebrow">
                    <i class="fa-solid fa-images"></i> LIFE AT PARSHV
                </span>
                <h1 class="adv-banner-title">Campus & Life Photo Gallery</h1>
                <p class="adv-banner-desc">
                    A visual journey capturing the spirit, achievements, celebrations, and daily moments at Parshv International School.
                </p>
                <ul class="adv-breadcrumb">
                    <li><a href="index.php"><i class="fa-solid fa-house"></i> Home</a></li>
                    <li class="adv-breadcrumb-sep"><i class="fa-solid fa-chevron-right"></i></li>
                    <li class="adv-breadcrumb-active">Photo Gallery</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="adv-inner-layout">
        <div class="adv-container">
            
            <!-- Filter Tabs -->
            <div style="display: flex; justify-content: center; gap: 10px; margin-bottom: 36px; flex-wrap: wrap;">
                <button type="button" class="gallery-filter-btn active" data-filter="all" style="padding: 10px 20px; border-radius: 30px; font-weight: 700; border: 1px solid #083B7A; background: #083B7A; color: #fff; cursor: pointer; font-size: 0.9rem;">All Moments</button>
                <button type="button" class="gallery-filter-btn" data-filter="campus" style="padding: 10px 20px; border-radius: 30px; font-weight: 600; border: 1px solid #cbd5e1; background: #fff; color: #334155; cursor: pointer; font-size: 0.9rem;">Campus & Infrastructure</button>
                <button type="button" class="gallery-filter-btn" data-filter="academics" style="padding: 10px 20px; border-radius: 30px; font-weight: 600; border: 1px solid #cbd5e1; background: #fff; color: #334155; cursor: pointer; font-size: 0.9rem;">Classrooms & Labs</button>
                <button type="button" class="gallery-filter-btn" data-filter="sports" style="padding: 10px 20px; border-radius: 30px; font-weight: 600; border: 1px solid #cbd5e1; background: #fff; color: #334155; cursor: pointer; font-size: 0.9rem;">Sports & Athletics</button>
                <button type="button" class="gallery-filter-btn" data-filter="events" style="padding: 10px 20px; border-radius: 30px; font-weight: 600; border: 1px solid #cbd5e1; background: #fff; color: #334155; cursor: pointer; font-size: 0.9rem;">Events & Festivals</button>
            </div>

            <!-- Gallery Grid with Lightbox Data -->
            <div class="parshv-gallery-grid" id="parshvGalleryContainer" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 20px;">
                
                <div class="parshv-gallery-item" data-category="campus" data-lightbox="assets/images/hero-campus-1.jpg" data-title="Parshv Main Academic Building">
                    <img src="assets/images/hero-campus-1.jpg" alt="Parshv Academic Wing">
                    <div class="parshv-gallery-overlay">
                        <span class="parshv-gallery-cat">Campus</span>
                        <h4 class="parshv-gallery-caption">Main Academic Block</h4>
                    </div>
                </div>

                <div class="parshv-gallery-item" data-category="campus" data-lightbox="assets/images/about-campus.jpg" data-title="Green Campus Grounds">
                    <img src="assets/images/about-campus.jpg" alt="Green Campus Grounds">
                    <div class="parshv-gallery-overlay">
                        <span class="parshv-gallery-cat">Campus</span>
                        <h4 class="parshv-gallery-caption">Lush Green Campus</h4>
                    </div>
                </div>

                <div class="parshv-gallery-item" data-category="academics" data-lightbox="assets/images/fac-smart-class.jpg" data-title="Smart Interactive Classroom">
                    <img src="assets/images/fac-smart-class.jpg" alt="Interactive Classroom">
                    <div class="parshv-gallery-overlay">
                        <span class="parshv-gallery-cat">Academics</span>
                        <h4 class="parshv-gallery-caption">Smart Digital Class</h4>
                    </div>
                </div>

                <div class="parshv-gallery-item" data-category="academics" data-lightbox="assets/images/fac-science-lab.jpg" data-title="Advanced Chemistry & Physics Labs">
                    <img src="assets/images/fac-science-lab.jpg" alt="Science Laboratory">
                    <div class="parshv-gallery-overlay">
                        <span class="parshv-gallery-cat">Academics</span>
                        <h4 class="parshv-gallery-caption">Science Laboratories</h4>
                    </div>
                </div>

                <div class="parshv-gallery-item" data-category="academics" data-lightbox="assets/images/fac-robotics.jpg" data-title="STEAM & AI Robotics Lab">
                    <img src="assets/images/fac-robotics.jpg" alt="Robotics Lab">
                    <div class="parshv-gallery-overlay">
                        <span class="parshv-gallery-cat">Academics</span>
                        <h4 class="parshv-gallery-caption">Robotics & STEAM Hub</h4>
                    </div>
                </div>

                <div class="parshv-gallery-item" data-category="academics" data-lightbox="assets/images/fac-library.jpg" data-title="School Reading Library">
                    <img src="assets/images/fac-library.jpg" alt="Central Library">
                    <div class="parshv-gallery-overlay">
                        <span class="parshv-gallery-cat">Academics</span>
                        <h4 class="parshv-gallery-caption">Central Library</h4>
                    </div>
                </div>

                <div class="parshv-gallery-item" data-category="sports" data-lightbox="assets/images/fac-sports.jpg" data-title="Sports Complex & Playgrounds">
                    <img src="assets/images/fac-sports.jpg" alt="Sports Complex">
                    <div class="parshv-gallery-overlay">
                        <span class="parshv-gallery-cat">Sports</span>
                        <h4 class="parshv-gallery-caption">Sports Arena</h4>
                    </div>
                </div>

                <div class="parshv-gallery-item" data-category="sports" data-lightbox="assets/images/gallery-sports.jpg" data-title="Annual Sports Meet Events">
                    <img src="assets/images/gallery-sports.jpg" alt="Annual Sports Meet">
                    <div class="parshv-gallery-overlay">
                        <span class="parshv-gallery-cat">Sports</span>
                        <h4 class="parshv-gallery-caption">Annual Sports Meet</h4>
                    </div>
                </div>

                <div class="parshv-gallery-item" data-category="events" data-lightbox="assets/images/gallery-cultural.jpg" data-title="Annual Cultural Extravaganza">
                    <img src="assets/images/gallery-cultural.jpg" alt="Cultural Fest">
                    <div class="parshv-gallery-overlay">
                        <span class="parshv-gallery-cat">Events</span>
                        <h4 class="parshv-gallery-caption">Cultural Celebrations</h4>
                    </div>
                </div>

                <div class="parshv-gallery-item" data-category="events" data-lightbox="assets/images/gallery-assembly.jpg" data-title="Morning Assembly & Flag Hoisting">
                    <img src="assets/images/gallery-assembly.jpg" alt="Morning Assembly">
                    <div class="parshv-gallery-overlay">
                        <span class="parshv-gallery-cat">Events</span>
                        <h4 class="parshv-gallery-caption">Morning Assembly</h4>
                    </div>
                </div>

                <div class="parshv-gallery-item" data-category="events" data-lightbox="assets/images/event-1.jpg" data-title="Annual Day Celebrations">
                    <img src="assets/images/event-1.jpg" alt="Annual Day">
                    <div class="parshv-gallery-overlay">
                        <span class="parshv-gallery-cat">Events</span>
                        <h4 class="parshv-gallery-caption">Annual Day Showcase</h4>
                    </div>
                </div>

                <div class="parshv-gallery-item" data-category="academics" data-lightbox="assets/images/gallery-stem.jpg" data-title="Inter-School Science Fair">
                    <img src="assets/images/gallery-stem.jpg" alt="Science Fair">
                    <div class="parshv-gallery-overlay">
                        <span class="parshv-gallery-cat">Academics</span>
                        <h4 class="parshv-gallery-caption">Science & Innovation Fair</h4>
                    </div>
                </div>

            </div>

        </div>
    </section>

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterBtns = document.querySelectorAll('.gallery-filter-btn');
    const galleryItems = document.querySelectorAll('.parshv-gallery-item');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            filterBtns.forEach(b => {
                b.classList.remove('active');
                b.style.background = '#fff';
                b.style.color = '#334155';
                b.style.borderColor = '#cbd5e1';
            });
            this.classList.add('active');
            this.style.background = '#083B7A';
            this.style.color = '#fff';
            this.style.borderColor = '#083B7A';

            const filter = this.getAttribute('data-filter');
            galleryItems.forEach(item => {
                if (filter === 'all' || item.getAttribute('data-category') === filter) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});
</script>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
