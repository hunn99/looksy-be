<?php

namespace Database\Seeders;

use App\Models\HairTips;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HairTipsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HairTips::create([
            'hair_type' => 'Curly',
            'characteristic_hair' => 'Curly hair is characterized by its natural twists, waves, or coils, which give it unique texture and volume. Due to its shape, curly hair is often more prone to dryness, frizz, and breakage, as natural oils from the scalp struggle to reach the ends. This hair type typically requires extra moisture and gentle handling to maintain its definition and health.',
            'description' => 'Curly hair requires special care to maintain its health and definition. Start by choosing the right haircut, as a suitable cut can enhance natural curls with minimal daily maintenance. Consult with a stylist to find the best haircut for your curl type. Shampooing less often is also crucial—washing your hair 2-3 times a week helps maintain natural moisture and prevents excessive dryness. Use curl-friendly shampoo and conditioner that moisturize and control frizz, and apply a curl-taming cream after towel-drying to keep curls defined.

            For extra moisture, try co-washing by occasionally using a curl-specific conditioner as a gentle cleanser instead of shampoo. Upgrade your styling products to lightweight options like curl serums or mousses that define curls without causing buildup or stiffness. Dry your hair naturally or use a diffuser to add volume while avoiding heat damage.

            Incorporate deep conditioning into your weekly routine to provide the hydration curls need. Additional care tips include using a microfiber towel to reduce friction, a wide-tooth comb for detangling, and sleeping on a silk or satin pillowcase to minimize breakage and preserve curl structure overnight. With the right care routine, your curls will look defined, soft, and healthy every day.',
            'photo' => '/hair_tips/Curly.jpg',
        ]);
        HairTips::create([
            'hair_type' => 'Frizzy',
            'characteristic_hair' => 'Frizzy hair refers to hair that appears puffy, stands out from the scalp, and lacks smoothness. It often results from dryness, excessive moisture absorption, and hair damage. The hair cuticle lifts, causing strands to separate and create a frizzy look. Curly or wavy hair types are more prone to frizz, but it can affect all hair types, especially in humid conditions.',
            'description' => 'Frizzy hair requires a tailored care routine to maintain smoothness and manageability. Start by choosing a hydrating shampoo to retain moisture and prevent frizz, followed by a conditioner to further smooth your hair. When showering, avoid hot water as it can strip moisture from your hair—use lukewarm or cool water instead to reduce frizz.

            Styling methods also play a crucial role. Avoid tight hairstyles, embrace your natural textures, and opt for alcohol-free gels or touch-up creams to tame frizz effectively. Incorporate hair oils such as coconut or argan oil into your routine to hydrate your hair and reduce flyaways. To prevent damage, limit heat exposure, wash your hair less frequently, and trim regularly to avoid split ends and dryness.

            Investing in frizz-fighting products like anti-frizz serums, leave-in conditioners, and frizz-fighting gels can help control your hair`s texture and make it smoother. By following these steps, you can minimize frizz and enjoy healthier, more manageable hair.',
            'photo' => '/hair_tips/Frizzy.jpg',
        ]);
        HairTips::create([
            'hair_type' => 'Straight',
            'characteristic_hair' => 'Straight hair is smooth, sleek, and lays flat against the scalp. It typically lacks natural curls or waves, with a consistent texture from root to tip. Straight hair tends to be shinier and less prone to frizz compared to curly hair. However, it can sometimes look flat or lifeless if not properly maintained.',
            'description' => 'To care for straight hair, start by washing and conditioning it every 2-3 days. Use a conditioner to restore moisture and a clarifying shampoo occasionally to remove dirt and oils. When drying, pat your hair gently to avoid breakage, and brush it twice daily—once in the morning and once in the evening—to maintain smoothness.

            For styling, use lightweight products such as pomades for a polished look. After air-drying, use a blow dryer with cool air to set and straighten your hair. To protect your hair overnight, wrap it before bed to minimize friction and maintain its straightness.

            Avoid exposing your hair to chlorine, as it can dry and damage straight hair. Before swimming, wet your hair and apply a layer of conditioner to protect it. For a stylish look, consider trying a slick back undercut, which complements straight hair and provides a sharp, manageable style.',
            'photo' => '/hair_tips/Straight.jpg',
        ]);
        HairTips::create([
            'hair_type' => 'Wavy',
            'characteristic_hair' => 'Wavy hair is characterized by natural waves that fall somewhere between straight and curly hair. It has a noticeable texture with soft, loose waves that form a gentle "S" shape. Wavy hair can be prone to frizz, but it offers more volume and body compared to straight hair, making it versatile for various hairstyles.',
            'description' => 'To care for wavy hair, shampoo and condition every third day to prevent dryness. Incorporate a leave-in cream conditioner and a hair mask into your routine weekly to provide extra moisture. Establishing a consistent hair care routine helps maintain the texture and health of your wavy hair.

            When styling, use a wide-tooth comb to set the curls and shape your hair with your fingers. Avoid pulling your hair, as this can lead to frizz. To preserve your waves, avoid tight hairstyles that flatten the natural volume of your hair.

            Using moisturizing products is key to keeping your waves hydrated and defined. Opt for moisturizing shampoos, conditioners, and styling products that nourish and enhance your natural texture.',
            'photo' => '/hair_tips/Wavy.jpg',
        ]);
    }
}
