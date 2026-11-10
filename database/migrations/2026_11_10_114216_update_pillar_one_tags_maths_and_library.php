<?php

use App\Models\Pillar;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $pillar = Pillar::where('order', 1)->first();
        if ($pillar) {
            $tags = $pillar->getRawOriginal('tags');
            if (is_string($tags)) {
                $tags = json_decode($tags, true) ?: [];
            }
            if (! is_array($tags)) {
                $tags = [];
            }

            $hasLibrary = false;
            foreach ($tags as &$tag) {
                if (is_array($tag)) {
                    if (($tag['label'] ?? '') === 'Digital Maths Lab') {
                        $tag['label'] = 'Maths Lab';
                    }
                    if (($tag['label'] ?? '') === 'Futuristic Library') {
                        $hasLibrary = true;
                    }
                }
            }
            unset($tag);

            if (! $hasLibrary) {
                $tags[] = [
                    'label' => 'Futuristic Library',
                    'icon' => 'fa-solid fa-book-open',
                ];
            }

            $pillar->tags = $tags;
            $pillar->save();
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $pillar = Pillar::where('order', 1)->first();
        if ($pillar) {
            $tags = $pillar->getRawOriginal('tags');
            if (is_string($tags)) {
                $tags = json_decode($tags, true) ?: [];
            }
            if (! is_array($tags)) {
                $tags = [];
            }

            $newTags = [];
            foreach ($tags as $tag) {
                if (is_array($tag)) {
                    if (($tag['label'] ?? '') === 'Futuristic Library') {
                        continue;
                    }
                    if (($tag['label'] ?? '') === 'Maths Lab') {
                        $tag['label'] = 'Digital Maths Lab';
                    }
                }
                $newTags[] = $tag;
            }

            $pillar->tags = $newTags;
            $pillar->save();
        }
    }
};
