<?php
/**
 * Photo Gallery Page - Advaita School of Excellence
 * Clean Semantic HTML - Strictly No Inline CSS
 */
$pageTitle = "Campus Photo Gallery - Advaita School of Excellence, Parbhani · CBSE Affiliated (No. 1130920)";
$activePage = "gallery";

require_once __DIR__ . '/includes/header.php';
?>

<main id="main" class="main-content-wrapper">

    <!-- Page Banner -->
    <section class="adv-page-banner" aria-label="Page Header">
        <div class="adv-container">
            <div class="adv-banner-content">
                <span class="adv-banner-eyebrow">
                    <i class="fa-solid fa-images"></i> LIFE AT ADVAITA
                </span>
                <h1 class="adv-banner-title">Campus & Life Photo Gallery</h1>
                <p class="adv-banner-desc">
                    A visual journey capturing the spirit, achievements, celebrations, and daily moments at Advaita School of Excellence, Parbhani.
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
            <div class="adv-gallery-filters">
                <button type="button" class="adv-gallery-filter-btn active" data-filter="all">All Moments</button>
                <button type="button" class="adv-gallery-filter-btn" data-filter="campus">Campus & Infrastructure</button>
                <button type="button" class="adv-gallery-filter-btn" data-filter="academics">Classrooms & Labs</button>
                <button type="button" class="adv-gallery-filter-btn" data-filter="sports">Sports & Athletics</button>
                <button type="button" class="adv-gallery-filter-btn" data-filter="events">Events & Festivals</button>
            </div>

            <!-- Gallery Grid -->
            <div class="adv-gallery-grid" id="advGalleryContainer">
                
                <div class="adv-gallery-item" data-category="campus">
                    <img src="assets/images/hero-campus-1.jpg" alt="Advaita Academic Wing">
                    <div class="adv-gallery-overlay">
                        <span class="adv-gallery-cat">Campus</span>
                        <h4 class="adv-gallery-caption">Main Academic Block</h4>
                    </div>
                </div>

                <div class="adv-gallery-item" data-category="campus">
                    <img src="assets/images/about-campus.jpg" alt="Green Campus Grounds">
                    <div class="adv-gallery-overlay">
                        <span class="adv-gallery-cat">Campus</span>
                        <h4 class="adv-gallery-caption">Lush Green Campus</h4>
                    </div>
                </div>

                <div class="adv-gallery-item" data-category="academics">
                    <img src="assets/images/fac-smart-class.jpg" alt="Interactive Classroom">
                    <div class="adv-gallery-overlay">
                        <span class="adv-gallery-cat">Academics</span>
                        <h4 class="adv-gallery-caption">Smart Digital Class</h4>
                    </div>
                </div>

                <div class="adv-gallery-item" data-category="academics">
                    <img src="assets/images/fac-science-lab.jpg" alt="Science Laboratory">
                    <div class="adv-gallery-overlay">
                        <span class="adv-gallery-cat">Academics</span>
                        <h4 class="adv-gallery-caption">Science Laboratories</h4>
                    </div>
                </div>

                <div class="adv-gallery-item" data-category="academics">
                    <img src="assets/images/fac-robotics.jpg" alt="Robotics Lab">
                    <div class="adv-gallery-overlay">
                        <span class="adv-gallery-cat">Academics</span>
                        <h4 class="adv-gallery-caption">Robotics & STEAM Hub</h4>
                    </div>
                </div>

                <div class="adv-gallery-item" data-category="academics">
                    <img src="assets/images/fac-library.jpg" alt="Central Library">
                    <div class="adv-gallery-overlay">
                        <span class="adv-gallery-cat">Academics</span>
                        <h4 class="adv-gallery-caption">Central Library</h4>
                    </div>
                </div>

                <div class="adv-gallery-item" data-category="sports">
                    <img src="assets/images/fac-sports.jpg" alt="Sports Complex">
                    <div class="adv-gallery-overlay">
                        <span class="adv-gallery-cat">Sports</span>
                        <h4 class="adv-gallery-caption">Sports Arena</h4>
                    </div>
                </div>

                <div class="adv-gallery-item" data-category="sports">
                    <img src="assets/images/gallery-sports.jpg" alt="Annual Sports Meet">
                    <div class="adv-gallery-overlay">
                        <span class="adv-gallery-cat">Sports</span>
                        <h4 class="adv-gallery-caption">Annual Sports Meet</h4>
                    </div>
                </div>

                <div class="adv-gallery-item" data-category="events">
                    <img src="assets/images/gallery-cultural.jpg" alt="Cultural Fest">
                    <div class="adv-gallery-overlay">
                        <span class="adv-gallery-cat">Events</span>
                        <h4 class="adv-gallery-caption">Cultural Celebrations</h4>
                    </div>
                </div>

                <div class="adv-gallery-item" data-category="events">
                    <img src="assets/images/gallery-assembly.jpg" alt="Morning Assembly">
                    <div class="adv-gallery-overlay">
                        <span class="adv-gallery-cat">Events</span>
                        <h4 class="adv-gallery-caption">Morning Assembly</h4>
                    </div>
                </div>

                <div class="adv-gallery-item" data-category="events">
                    <img src="assets/images/event-1.jpg" alt="Annual Day">
                    <div class="adv-gallery-overlay">
                        <span class="adv-gallery-cat">Events</span>
                        <h4 class="adv-gallery-caption">Annual Day Showcase</h4>
                    </div>
                </div>

                <div class="adv-gallery-item" data-category="academics">
                    <img src="assets/images/gallery-stem.jpg" alt="Science Fair">
                    <div class="adv-gallery-overlay">
                        <span class="adv-gallery-cat">Academics</span>
                        <h4 class="adv-gallery-caption">Science & Innovation Fair</h4>
                    </div>
                </div>

            </div>

        </div>
    </section>

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterBtns = document.querySelectorAll('.adv-gallery-filter-btn');
    const galleryItems = document.querySelectorAll('.adv-gallery-item');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

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
