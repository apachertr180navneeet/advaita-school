<?php

namespace Tests\Feature;

use App\Models\GalleryItem;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class GalleryCategoriesVerificationTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test that the gallery page displays all 9 official categories.
     */
    public function test_gallery_page_renders_all_nine_official_categories(): void
    {
        $response = $this->get(route('gallery'));

        $response->assertStatus(200);

        // Verify the 9 categories and their exact data-category slugs in the filter tabs
        $categorySlugs = [
            'life-at-advaita',
            'events-celebrations',
            'academics-science',
            'educational-tours',
            'sports-competitions',
            'student-leadership',
            'art-culture',
            'advaita-kids',
            'campus-facilities',
        ];

        foreach ($categorySlugs as $slug) {
            $response->assertSee('data-category="'.$slug.'"', false);
        }

        // Verify button text snippets
        $response->assertSee('Life at<br>Advaita', false);
        $response->assertSee('Events &amp;<br>Celebrations', false);
        $response->assertSee('Academics &amp;<br>Science', false);
        $response->assertSee('Tours &amp;<br>Excursions', false);
        $response->assertSee('Sports &amp;<br>Competitions', false);
        $response->assertSee('Leadership &amp;<br>Achievements', false);
        $response->assertSee('Art, Culture<br>&amp; Creativity', false);
        $response->assertSee('Advaita<br>Kids', false);
        $response->assertSee('Campus &amp;<br>Facilities', false);

        // Verify cards exist for each category
        $slugs = [
            'life-at-advaita',
            'events-celebrations',
            'academics-science',
            'educational-tours',
            'sports-competitions',
            'student-leadership',
            'art-culture',
            'advaita-kids',
            'campus-facilities',
        ];

        foreach ($slugs as $slug) {
            $response->assertSee('article class="adv-gal-card" data-category="'.$slug.'"', false);
        }
    }

    /**
     * Test GalleryItem model constants and helper methods.
     */
    public function test_gallery_item_model_categories_constants(): void
    {
        $expectedCategories = [
            'Life at Advaita',
            'Events & Celebrations',
            'Academics and Science Activities',
            'Educational Tours & Excursions',
            'Sports & Competitions',
            'Student Leadership & Achievements',
            'Art, Culture & Creativity',
            'Advaita Kids',
            'Campus & Facilities',
        ];

        $modelCategories = array_keys(GalleryItem::CATEGORIES);
        $this->assertSame($expectedCategories, $modelCategories);

        $this->assertSame('life-at-advaita', GalleryItem::getCategorySlug('Life at Advaita'));
        $this->assertSame('sports-competitions', GalleryItem::getCategorySlug('Sports & Competitions'));
        $this->assertSame('advaita-kids', GalleryItem::getCategorySlug('Advaita Kids'));

        $this->assertSame('fa-solid fa-school-flag', GalleryItem::getCategoryIcon('Life at Advaita'));
        $this->assertSame('fa-solid fa-trophy', GalleryItem::getCategoryIcon('Sports & Competitions'));
        $this->assertSame('fa-solid fa-landmark', GalleryItem::getCategoryIcon('Campus & Facilities'));
    }
}
