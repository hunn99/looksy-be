<?php

namespace Database\Seeders;

use App\Models\HairStyle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HairstylesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //square
        HairStyle::create([
            'hairstyle' => 'Pompadour',
            'face_shape' => 'Square',
            'photo' => '/assets/square/pompadour.webp',
            'characteristics' => 'Features voluminous hair swept upwards and back from the forehead, with shorter sides. Can range from modern, clean versions to more classic styles.',
            'faceSuitability' => 'Perfect for square faces, as the height of the pompadour balances the strong jawline and adds length to the face.',
            'maintenance' => 'Requires regular styling with pomade or wax for hold and shine. Frequent trims keep the sides neat and the top manageable.',
            'impression' => 'Gives off a polished, confident, and stylish look. The dramatic volume enhances masculinity while maintaining sophistication.',
        ]);
        HairStyle::create([
            'hairstyle' => 'Quiff',
            'face_shape' => 'Square',
            'photo' => '/assets/square/quiff.jpg',
            'characteristics' => 'Similar to the pompadour but with a slightly messier and more relaxed appearance. The hair is styled upward and backward, but less structured.',
            'faceSuitability' => 'Complements square faces by softening the angles and drawing attention upward, creating a balanced look.',
            'maintenance' => 'Moderate upkeep—requires lightweight styling products to maintain volume and texture while keeping it natural.',
            'impression' => 'Portrays a trendy, playful, and creative vibe. Great for casual and semi-formal occasions.',
        ]);
        HairStyle::create([
            'hairstyle' => 'Flat Top',
            'face_shape' => 'Square',
            'photo' => '/assets/square/flat_top.webp',
            'characteristics' => 'A sharp, structured cut where the hair on top is flat and level, with very short or faded sides.',
            'faceSuitability' => 'Works exceptionally well with square faces by highlighting the strong jawline and providing symmetry to the sharp facial features.',
            'maintenance' => 'High maintenance—needs frequent trims to maintain the flat, structured shape.',
            'impression' => 'Conveys boldness, discipline, and a retro or military-inspired charm.',
        ]);
        HairStyle::create([
            'hairstyle' => 'Comb Over',
            'face_shape' => 'Square',
            'photo' => '/assets/square/comb_over.jpg',
            'characteristics' => 'Hair is parted to one side and combed over, often paired with a fade or undercut on the sides.',
            'faceSuitability' => 'Enhances the structure of square faces by softening the sharp lines with the smooth flow of the hairstyle.',
            'maintenance' => 'Easy to maintain with a bit of gel or pomade for hold and a defined part. Regular trims keep the fade or sides sharp.',
            'impression' => 'Creates a sophisticated, mature, and professional appearance. Suitable for both formal and casual settings.',
        ]);
        HairStyle::create([
            'hairstyle' => 'Undercut',
            'face_shape' => 'Square',
            'photo' => '/assets/square/undercutt.jpeg',
            'characteristics' => 'Features very short or shaved sides with longer hair on top, which can be styled in various ways like slicked back, textured, or spiked.',
            'faceSuitability' => 'Highlights the strong jawline of square faces while adding contrast to the structured look.',
            'maintenance' => 'Moderate upkeep—styling the top requires product, and the sides need regular trims to maintain the sharp contrast.',
            'impression' => 'Exudes confidence, edginess, and modern style. Offers a versatile base for various styling options.',
        ]);

        //ovale
        HairStyle::create(attributes: [
            'hairstyle' => 'French Crop',
            'face_shape' => 'Ovale',
            'photo' => '/assets/ovale/french_crop.webp',
            'characteristics' => 'A short haircut with a textured top and a cropped fringe at the front, usually paired with a fade or taper on the sides.',
            'faceSuitability' => 'Ideal for oval faces as it highlights the natural symmetry and balances facial proportions. The cropped fringe draws attention to the eyes and cheekbones.',
            'maintenance' => 'Low maintenance—requires minimal styling. Regular trims are needed to maintain the sharp, clean look.',
            'impression' => 'Offers a timeless, stylish, and masculine vibe. Perfect for those seeking a practical yet fashionable hairstyle.',
        ]);
        HairStyle::create(attributes: [
            'hairstyle' => 'Curtain',
            'face_shape' => 'Ovale',
            'photo' => '/assets/ovale/curtain.jpg',
            'characteristics' => 'Features longer hair on top parted down the middle or slightly off-center, with the hair flowing down the sides of the face.',
            'faceSuitability' => 'Complements oval faces by framing the face without overwhelming its natural symmetry. Adds softness and character.',
            'maintenance' => 'Moderate upkeep—requires regular conditioning to maintain texture and prevent frizz. Styling with a light cream or wax ensures the hair stays in place.',
            'impression' => 'Creates a relaxed, youthful, and retro-inspired look. Its versatile and works for casual or semi-formal occasions.',
        ]);
        HairStyle::create(attributes: [
            'hairstyle' => 'Buzz Cut',
            'face_shape' => 'Ovale',
            'photo' => '/assets/ovale/buzz_cut.jpg',
            'characteristics' => 'An ultra-short haircut with an even length all over the head. Clean and minimalistic in appearance.',
            'faceSuitability' => 'Perfect for oval faces as it accentuates the faces natural symmetry and brings focus to facial features like the jawline and cheekbones.',
            'maintenance' => 'Extremely low maintenance—requires no daily styling. Needs frequent trims to maintain the close-cropped length.',
            'impression' => 'Projects a clean, bold, and confident persona. Often associated with simplicity and practicality.',
        ]);
        HairStyle::create(attributes: [
            'hairstyle' => 'Modern Bowl Cut',
            'face_shape' => 'Ovale',
            'photo' => '/assets/ovale/modern_bowl_cut.jpg',
            'characteristics' => 'A contemporary take on the classic bowl cut, often featuring textured or layered edges and a fade or taper underneath.',
            'faceSuitability' => 'Works well with oval faces by emphasizing the balanced proportions and adding a touch of edge. The layers or fade prevent it from looking outdated.',
            'maintenance' => 'Moderate maintenance—styling may involve texturizing sprays or wax to enhance the modern, messy look. Requires regular trims to keep the shape fresh.',
            'impression' => 'Creates a trendy, artistic, and edgy impression. Ideal for individuals who want to stand out with a creative style.',
        ]);
        HairStyle::create(attributes: [
            'hairstyle' => 'Fade Short',
            'face_shape' => 'Ovale',
            'photo' => '/assets/ovale/fade_short.webp',
            'characteristics' => 'A short haircut featuring a fade that gradually blends hair from short to very short or skin-tight, often paired with a slightly longer top.',
            'faceSuitability' => 'Complements oval faces by maintaining focus on the natural facial symmetry while adding a sharp and clean aesthetic.',
            'maintenance' => 'Low to moderate upkeep—regular trims are needed to keep the fade sharp and prevent overgrowth. Styling the top is optional depending on the length.',
            'impression' => 'Projects a clean, modern, and versatile look. Suitable for both casual and professional environments.',
        ]);

        //round
        HairStyle::create(attributes: [
            'hairstyle' => 'Comma Hair',
            'face_shape' => 'Round',
            'photo' => '/assets/round/comma_hair.jpeg',
            'characteristics' => 'A Korean-inspired hairstyle with a slight curl or wave at the fringe resembling a comma, paired with longer hair on the sides and back.',
            'faceSuitability' => 'Ideal for round faces as the curved fringe creates the illusion of length, balancing out the soft, round features.',
            'maintenance' => 'Moderate upkeep—requires regular styling to maintain the comma-shaped fringe using a curling iron or styling product. Trims keep it neat and in shape.',
            'impression' => 'Projects a trendy, youthful, and fashionable vibe. Often associated with a modern and approachable personality.',
        ]);
        HairStyle::create(attributes: [
            'hairstyle' => 'Side Part',
            'face_shape' => 'Round',
            'photo' => '/assets/round/side_part.webp',
            'characteristics' => 'Features a distinct parting to one side with longer hair swept across and shorter sides, often paired with a fade or taper.',
            'faceSuitability' => 'Great for round faces as the asymmetry of the side part adds angles to the face and elongates its appearance.',
            'maintenance' => 'Low to moderate upkeep—needs minimal styling with pomade or gel to define the part and keep the hair in place. Regular trims maintain the sharp look.',
            'impression' => 'Conveys a classic, sophisticated, and professional image. Works well for formal settings and everyday wear.',
        ]);
        HairStyle::create(attributes: [
            'hairstyle' => 'Buzz Cut',
            'face_shape' => 'Round',
            'photo' => '/assets/round/buzz_cut.webp',
            'characteristics' => 'A very short, uniform haircut with no styling required. Clean and practical in appearance.',
            'faceSuitability' => 'Works for round faces when paired with a slight fade on the sides, as this adds definition and sharpness to the overall look.',
            'maintenance' => 'Extremely low maintenance—no daily styling required. Frequent trims are necessary to maintain the short length.',
            'impression' => 'Portrays boldness, simplicity, and confidence. A no-nonsense hairstyle that emphasizes facial features like the jawline and cheekbones.',
        ]);
        HairStyle::create(attributes: [
            'hairstyle' => 'Crop Cut',
            'face_shape' => 'Round',
            'photo' => '/assets/round/crop_cut.jpg',
            'characteristics' => 'A short, textured haircut with a blunt fringe and closely cropped sides, often styled messily on top.',
            'faceSuitability' => 'Complements round faces by adding height to the top, making the face appear longer and more balanced. The cropped sides enhance definition.',
            'maintenance' => 'Moderate upkeep—requires texturizing products to style the top and regular trims to keep the fringe and sides sharp.',
            'impression' => 'Projects a modern, edgy, and youthful style. Perfect for individuals looking for a trendy yet practical haircut.',
        ]);
        HairStyle::create(attributes: [
            'hairstyle' => 'Ivy Cut',
            'face_shape' => 'Round',
            'photo' => '/assets/round/ivy_cut.jpg',
            'characteristics' => 'A classic, short haircut with neatly trimmed sides and slightly longer hair on top, styled to the side or back.',
            'faceSuitability' => 'Great for round faces as it creates subtle angles and draws attention upward, elongating the appearance of the face.',
            'maintenance' => 'Low upkeep—requires light styling with a comb and product for hold. Regular trims keep the clean and tidy look.',
            'impression' => 'Conveys a timeless, polished, and versatile image. Ideal for both casual and formal occasions, appealing to those with a preference for subtle sophistication.',
        ]);

        //rectangular
        HairStyle::create(attributes: [
            'hairstyle' => 'Classic Side Part',
            'face_shape' => 'Rectangular',
            'photo' => '/assets/rectangular/classic_side_part.jpg',
            'characteristics' => 'A timeless style featuring a sharp parting on one side, with neatly combed hair and short sides, often paired with a taper or fade.',
            'faceSuitability' => 'Works well for rectangular faces by softening the length of the face. The side part balances proportions by adding width to the sides and drawing attention to the upper face.',
            'maintenance' => 'Low to moderate upkeep—requires pomade or gel to hold the part and comb for styling. Regular trims maintain the clean and professional look.',
            'impression' => 'Creates a sophisticated, polished, and versatile look. Ideal for formal events or professional settings, but can also be styled casually.',
        ]);
        HairStyle::create(attributes: [
            'hairstyle' => 'Classic Textured Crop',
            'face_shape' => 'Rectangular',
            'photo' => '/assets/rectangular/classic_textured_crop.jpg',
            'characteristics' => 'A short, clean haircut with a textured top and closely cropped sides, giving a neat yet modern appearance.',
            'faceSuitability' => 'Complements rectangular faces by softening the angular features and adding visual interest to the top of the head. The short sides avoid elongating the face further.',
            'maintenance' => 'Moderate maintenance—requires styling with a matte product to enhance texture and frequent trims to keep the sides sharp and the top manageable.',
            'impression' => 'Projects a confident, modern, and approachable vibe. Suitable for men who want a clean-cut yet stylish look.',
        ]);
        HairStyle::create(attributes: [
            'hairstyle' => 'Short Spiky',
            'face_shape' => 'Rectangular',
            'photo' => '/assets/rectangular/short_spiky.jpg',
            'characteristics' => 'A short, edgy haircut where the top is styled upward in spikes with shorter, faded sides for contrast.',
            'faceSuitability' => 'Suitable for rectangular faces by adding dimension to the top without overwhelming the length of the face. The spikes create a playful balance with sharp features.',
            'maintenance' => 'Low to moderate maintenance—requires lightweight gel or wax to maintain the spikes and occasional trims for a fresh look.',
            'impression' => 'Projects a bold, energetic, and youthful style. Ideal for those who want an adventurous and dynamic appearance.',
        ]);
        HairStyle::create(attributes: [
            'hairstyle' => 'Textured Crop',
            'face_shape' => 'Rectangular',
            'photo' => '/assets/rectangular/textured_crop.png',
            'characteristics' => 'A contemporary cut with a focus on texture at the top and a clean, faded finish on the sides.',
            'faceSuitability' => 'Excellent for rectangular faces as the textured top adds width and volume, softening the length of the face and balancing the overall proportions.',
            'maintenance' => 'Moderate upkeep—styling involves using a matte product to emphasize the texture. Regular trims maintain the fade and the top`s length.',
            'impression' => 'Offers a fashionable, modern, and confident vibe. Suitable for men who enjoy an on-trend yet practical haircut.',
        ]);
        HairStyle::create(attributes: [
            'hairstyle' => 'Textured Fringe',
            'face_shape' => 'Rectangular',
            'photo' => '/assets/rectangular/textured_fringe.jpg',
            'characteristics' => 'Features a longer, textured fringe that falls slightly over the forehead, paired with shorter sides. The fringe is often styled messily or with volume.',
            'faceSuitability' => 'Ideal for rectangular faces as the fringe minimizes the length of the face by covering part of the forehead. The textured look adds a stylish and youthful touch.',
            'maintenance' => 'Moderate upkeep—requires daily styling to maintain the fringe’s texture and shape. Regular trims prevent the fringe from becoming too heavy.',
            'impression' => 'Projects a trendy, playful, and stylish vibe. Perfect for casual and semi-formal occasions, appealing to those who prefer a youthful appearance.',
        ]);
    }
}
