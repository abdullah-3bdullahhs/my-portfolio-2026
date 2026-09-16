<?php
/**
 * Portfolio Data Configuration
 * Abdullah Hassan Jamal — Interactive Portfolio
 * Sourced directly from C:\Users\abdul\OneDrive\Desktop\Achevements
 */

function asset_url($path) {
    $parts = explode('/', str_replace('\\', '/', $path));
    $encoded = array_map('rawurlencode', $parts);
    return implode('/', $encoded);
}

$site = [
    'title' => 'ABDULLAH HASSAN JAMAL — Graphic Designer',
    'brand' => '3bdullah',
    'brand_suffix' => '.hs',
    'logo' => 'assets/images/logo.png',
    'badge' => 'GRAPHIC DESIGNER · JUST',
    'description' => 'ABDULLAH HASSAN JAMAL — Graphic Designer and Digital Film and Multimedia Technology student at Jordan University of Science and Technology.',
    'year' => '2026',
];

$nav_links = [
    ['href' => '#home', 'label' => 'HOME'],
    ['href' => '#work', 'label' => 'WORK'],
    ['href' => '#about', 'label' => 'ABOUT'],
    ['href' => '#services', 'label' => 'SERVICES'],
    ['href' => '#contact', 'label' => 'CONTACT'],
];

$hero = [
    'badge' => 'ABDULLAH PORTFOLIO 2026',
    'kicker' => 'GRAPHIC DESIGNER · MULTIMEDIA CREATOR',
    'first_name' => 'ABDULLAH',
    'middle_name' => 'HASSAN',
    'last_name' => 'JAMAL',
    'focus_title' => 'Student at Jordan University of Science and Technology',
    'focus_subtitle' => 'B.Sc. of Digital Film and Multimedia Technology',
    'cta_text' => 'EXPLORE WORK',
    'cta_link' => '#work',
    'location' => 'BASED IN JORDAN',
];

$categories = [
    'branding' => 'BRANDING',
    'advertising' => 'ADVERTISING',
    'digital' => 'DIGITAL',
    'academic' => 'ACADEMIC',
    'all' => 'ALL',
];

$default_category = 'branding';

/**
 * All Projects precisely taken from Achevements directory
 * Arranged with asymmetric layout classifications:
 * - 'card-featured' (spans 2 columns, high visual graphic impact)
 * - 'card-tall' (vertical aesthetic, posters/stories)
 * - 'card-standard' (compact balanced visual)
 * - 'card-wide' (panoramic composition)
 */
$projects = [
    // ==========================================
    // BRANDING (Social Media / Logos & Packaging)
    // ==========================================
    'bubble-logo' => [
        'folder' => 'Social Media/Logos',
        'title' => 'Bubble Cigarettes JO — Brand Logo',
        'subtitle' => 'LOGO DESIGN / BRAND IDENTITY',
        'desc' => 'Official logo identity and emblem developed for Bubble Cigarettes JO, featuring bold typography, high contrast, and a distinct aesthetic.',
        'category' => 'branding',
        'layout' => 'card-featured',
        'tags' => ['BRANDING', 'LOGO DESIGN', 'IDENTITY'],
        'media' => [
            'type' => 'image',
            'src' => 'assets/achievements/Social Media/Logos/Bubble Cigarettes JO.jpg',
            'alt' => 'Bubble Cigarettes JO Logo',
        ],
        'images' => [
            'assets/achievements/Social Media/Logos/Bubble Cigarettes JO.jpg',
            'assets/achievements/Social Media/offers/Bubble_Cigarettes_JO_product_dis…_202608161456.jpeg'
        ],
    ],
    'trendywave-logo' => [
        'folder' => 'Social Media/Logos',
        'title' => 'TrendyWave JO — Official Identity',
        'subtitle' => 'BRAND IDENTITY / LOGO SYSTEM',
        'desc' => 'Clean e-commerce and lifestyle logo asset designed for TrendyWave JO, optimized for digital retail and social feeds.',
        'category' => 'branding',
        'layout' => 'card-standard',
        'tags' => ['BRANDING', 'RETAIL', 'IDENTITY'],
        'media' => [
            'type' => 'image',
            'src' => 'assets/achievements/Social Media/Logos/photo_5877519933078441505_y (1).jpg',
            'alt' => 'TrendyWave JO Brand Logo',
        ],
        'images' => [
            'assets/achievements/Social Media/Logos/photo_5877519933078441505_y (1).jpg',
            'assets/achievements/Social Media/Logos/173238.jpg'
        ],
    ],
    'white-gift-box' => [
        'folder' => 'Social Media/Sales/posts',
        'title' => 'White Gift Box — Product Presentation',
        'subtitle' => 'PACKAGING / PRODUCT DIRECTION',
        'desc' => 'Physical packaging mockup and promotional gift box presentation featuring custom tactile finishing and lighting cues.',
        'category' => 'branding',
        'layout' => 'card-tall',
        'tags' => ['BRANDING', 'PACKAGING', 'GIFT BOX'],
        'media' => [
            'type' => 'image',
            'src' => 'assets/achievements/Social Media/Sales/posts/White_gift_box_product_presentation_202608161634.jpeg',
            'alt' => 'White Gift Box Product Presentation',
        ],
        'images' => [
            'assets/achievements/Social Media/Sales/posts/White_gift_box_product_presentation_202608161634.jpeg',
            'assets/achievements/Social Media/Sales/posts/White_miniature_pack_on_surface_202608161643.jpeg'
        ],
    ],
    'bubble-package-contents' => [
        'folder' => 'Social Media/Sales/offers',
        'title' => 'Bubble Cigarettes — Package Contents 2K',
        'subtitle' => 'PRODUCT KIT / INDUSTRIAL BRANDING',
        'desc' => 'High-resolution 2K package breakdown showcasing individual components, product hierarchy, and branded packaging elements.',
        'category' => 'branding',
        'layout' => 'card-standard',
        'tags' => ['BRANDING', 'PACKAGING', '2K RENDER'],
        'media' => [
            'type' => 'image',
            'src' => 'assets/achievements/Social Media/Sales/offers/Bubble_cigarettes_package_conten…_2K_202608161456.jpeg',
            'alt' => 'Bubble Cigarettes Package Contents 2K',
        ],
        'images' => [
            'assets/achievements/Social Media/Sales/offers/Bubble_cigarettes_package_conten…_2K_202608161456.jpeg',
            'assets/achievements/Social Media/Sales/offers/Bubble_Cigarettes_JO_product_dis…_202608161456.jpeg'
        ],
    ],
    'white-miniature-pack' => [
        'folder' => 'Social Media/Sales/posts',
        'title' => 'White Miniature Pack — Surface Presentation',
        'subtitle' => 'PACKAGING / COMPOSITION',
        'desc' => 'Minimalist white miniature pack staged on architectural stone surface with directional contrast shadows.',
        'category' => 'branding',
        'layout' => 'card-wide',
        'tags' => ['BRANDING', 'MINIMALISM', 'STAGING'],
        'media' => [
            'type' => 'image',
            'src' => 'assets/achievements/Social Media/Sales/posts/White_miniature_pack_on_surface_202608161643.jpeg',
            'alt' => 'White Miniature Pack Presentation',
        ],
        'images' => [
            'assets/achievements/Social Media/Sales/posts/White_miniature_pack_on_surface_202608161643.jpeg'
        ],
    ],

    // ==========================================
    // ADVERTISING (Menu, Campaigns, Sales, Feedback)
    // ==========================================
    'creative-rarities-menu' => [
        'folder' => 'Social Media/Menu',
        'title' => 'Final Creative Rarities — New Menu',
        'subtitle' => 'COMMERCIAL MENU / ART DIRECTION',
        'desc' => 'Complete multi-page menu system designed with premium gastronomic aesthetics, price readability, and mouth-watering visual balance.',
        'category' => 'advertising',
        'layout' => 'card-featured',
        'tags' => ['ADVERTISING', 'MENU DESIGN', 'RESTAURANT'],
        'media' => [
            'type' => 'image',
            'src' => 'assets/achievements/Social Media/Menu/Final creative rarities new menu.png',
            'alt' => 'Final Creative Rarities New Menu',
        ],
        'images' => [
            'assets/achievements/Social Media/Menu/Final creative rarities new menu.png',
            'assets/achievements/Social Media/Menu/MENU multi-media.png',
            'assets/achievements/Social Media/Menu/MENU NEW PRINT.png'
        ],
    ],
    'tawjihi-greeting' => [
        'folder' => 'Social Media/congratulations',
        'title' => 'TrendyWave JO — تهنئة توجيهي',
        'subtitle' => 'PROMOTIONAL CAMPAIGN / SOCIAL AD',
        'desc' => 'National Tawjihi promotional campaign creative built for TrendyWave JO to engage graduating students with themed offers.',
        'category' => 'advertising',
        'layout' => 'card-tall',
        'tags' => ['ADVERTISING', 'CAMPAIGN', 'TAWJIHI'],
        'media' => [
            'type' => 'image',
            'src' => 'assets/achievements/Social Media/congratulations/تهنئة توجيهي trendywave_jo.png',
            'alt' => 'TrendyWave JO Tawjihi Greeting',
        ],
        'images' => [
            'assets/achievements/Social Media/congratulations/تهنئة توجيهي trendywave_jo.png',
            'assets/achievements/Social Media/congratulations/النتيجة ورقم الجلوس لخصم 20%.png'
        ],
    ],
    'tawjihi-discount' => [
        'folder' => 'Social Media/congratulations',
        'title' => 'Tawjihi 20% Discount — النتيجة ورقم الجلوس',
        'subtitle' => 'PROMOTIONAL OFFER / AD BANNER',
        'desc' => 'Call-to-action campaign graphic offering 20% discount based on examination seat numbers, boosting direct conversions.',
        'category' => 'advertising',
        'layout' => 'card-standard',
        'tags' => ['ADVERTISING', 'DISCOUNT OFFER', 'MARKETING'],
        'media' => [
            'type' => 'image',
            'src' => 'assets/achievements/Social Media/congratulations/النتيجة ورقم الجلوس لخصم 20%.png',
            'alt' => 'Tawjihi 20% Discount Offer',
        ],
        'images' => [
            'assets/achievements/Social Media/congratulations/النتيجة ورقم الجلوس لخصم 20%.png'
        ],
    ],
    'trend-sales-50' => [
        'folder' => 'Social Media/Sales/Trend sales',
        'title' => 'Trend Sales — $50 JD Campaign',
        'subtitle' => 'COMMERCIAL CAMPAIGN / SALES GRAPHIC',
        'desc' => 'High-energy sales ad highlighting 50 JD product bundles with high-contrast typography and dynamic composition.',
        'category' => 'advertising',
        'layout' => 'card-standard',
        'tags' => ['ADVERTISING', 'SALES', 'PRICING'],
        'media' => [
            'type' => 'image',
            'src' => 'assets/achievements/Social Media/Sales/Trend sales/50$ trend/$50 JD.png',
            'alt' => 'Trend Sales $50 JD Campaign',
        ],
        'images' => [
            'assets/achievements/Social Media/Sales/Trend sales/50$ trend/$50 JD.png',
            'assets/achievements/Social Media/Sales/Trend sales/50$ trend/$20 JD.png',
            'assets/achievements/Social Media/Sales/Trend sales/50$ trend/Face2 JD.png'
        ],
    ],
    'customer-reviews-story' => [
        'folder' => 'Social Media/feed back',
        'title' => 'Customer Reviews & Social Proof Suite',
        'subtitle' => 'TESTIMONIALS / CLIENT TRUST',
        'desc' => 'Curated editorial layouts presenting real customer feedback, WhatsApp testimonials, and five-star rating highlights.',
        'category' => 'advertising',
        'layout' => 'card-tall',
        'tags' => ['ADVERTISING', 'REVIEWS', 'SOCIAL PROOF'],
        'media' => [
            'type' => 'image',
            'src' => 'assets/achievements/Social Media/feed back/CUSTOMER REVIEW.png',
            'alt' => 'Customer Review Suite',
        ],
        'images' => [
            'assets/achievements/Social Media/feed back/CUSTOMER REVIEW.png',
            'assets/achievements/Social Media/feed back/Beige Aesthetic Reviews Instagram Story (1).png',
            'assets/achievements/Social Media/feed back/Black & White Aesthetic Testimonial Instagram Story (1).png'
        ],
    ],
    'menu-print-edition' => [
        'folder' => 'Social Media/Menu',
        'title' => 'MENU — New Print Edition',
        'subtitle' => 'PRINT LAYOUT / EDITORIAL TYPOGRAPHY',
        'desc' => 'Print-ready editorial menu layout focusing on spatial pacing, item groupings, and clear pricing architecture.',
        'category' => 'advertising',
        'layout' => 'card-wide',
        'tags' => ['ADVERTISING', 'PRINT LAYOUT', 'TYPOGRAPHY'],
        'media' => [
            'type' => 'image',
            'src' => 'assets/achievements/Social Media/Menu/MENU NEW PRINT.png',
            'alt' => 'Menu New Print Edition',
        ],
        'images' => [
            'assets/achievements/Social Media/Menu/MENU NEW PRINT.png',
            'assets/achievements/Social Media/Menu/MENU.jpg'
        ],
    ],

    // ==========================================
    // DIGITAL (Posts, Highlights, Videos, Motion)
    // ==========================================
    'trend-post-final' => [
        'folder' => 'Social Media/Sales/posts',
        'title' => 'TrendyWave — Final Feed Campaign Post',
        'subtitle' => 'INSTAGRAM POST / DIGITAL CAMPAIGN',
        'desc' => 'Official promotional feed banner for TrendyWave JO combining sharp brand colors, product imagery, and bold callouts.',
        'category' => 'digital',
        'layout' => 'card-featured',
        'tags' => ['DIGITAL', 'SOCIAL MEDIA', 'INSTAGRAM'],
        'media' => [
            'type' => 'image',
            'src' => 'assets/achievements/Social Media/Sales/posts/Trend post/Final Post.png',
            'alt' => 'TrendyWave Final Campaign Post',
        ],
        'images' => [
            'assets/achievements/Social Media/Sales/posts/Trend post/Final Post.png'
        ],
    ],
    'liquid-bubbles' => [
        'folder' => 'Social Media/Sales/posts',
        'title' => 'Liquid Bubbles — 3D Fluid Visual',
        'subtitle' => 'DIGITAL ART / 3D SIMULATION',
        'desc' => 'Intricate 3D fluid art experiment exploring refractive transparency, bubbles in motion, and specular lighting.',
        'category' => 'digital',
        'layout' => 'card-standard',
        'tags' => ['DIGITAL', '3D FLUID', 'VISUAL ART'],
        'media' => [
            'type' => 'image',
            'src' => 'assets/achievements/Social Media/Sales/posts/liquid bubbles.jpg',
            'alt' => 'Liquid Bubbles 3D Fluid Visual',
        ],
        'images' => [
            'assets/achievements/Social Media/Sales/posts/liquid bubbles.jpg'
        ],
    ],
    'social-highlights-icons' => [
        'folder' => 'Social Media/Sales/Highlights',
        'title' => 'Instagram Highlights UI System — منصات التواصل',
        'subtitle' => 'UI DESIGN / STORY HIGHLIGHTS',
        'desc' => 'Cohesive Instagram profile highlights cover suite created for streamlined customer navigation (Ordering, FAQs, Platforms).',
        'category' => 'digital',
        'layout' => 'card-standard',
        'tags' => ['DIGITAL', 'UI DESIGN', 'HIGHLIGHTS'],
        'media' => [
            'type' => 'image',
            'src' => 'assets/achievements/Social Media/Sales/Highlights/منصات التواصل.png',
            'alt' => 'Social Media Highlights System',
        ],
        'images' => [
            'assets/achievements/Social Media/Sales/Highlights/منصات التواصل.png',
            'assets/achievements/Social Media/Sales/Highlights/طريقة الطلب.png',
            'assets/achievements/Social Media/Sales/Highlights/اراء العملاء.png',
            'assets/achievements/Social Media/Sales/Highlights/الاسئلة الشائعة.png'
        ],
    ],
    'visual-hook-motion' => [
        'folder' => 'Vedio Editing/Visual Hook',
        'title' => 'Visual Hook — Dynamic Motion Sequence',
        'subtitle' => 'MOTION DESIGN / SHORT-FORM HOOK',
        'desc' => 'High-velocity short-form visual hook designed for instant retention across TikTok and Instagram Reels.',
        'category' => 'digital',
        'layout' => 'card-wide',
        'tags' => ['DIGITAL', 'MOTION DESIGN', 'VIDEO'],
        'media' => [
            'type' => 'video',
            'src' => 'assets/achievements/Vedio Editing/Visual Hook/Visual Hook.mp4',
            'poster' => 'assets/images/bubble-post.jpg',
            'alt' => 'Visual Hook Motion Video',
        ],
        'images' => [
            'assets/achievements/Vedio Editing/Visual Hook/Visual Hook.mp4'
        ],
    ],
    'commercial-video-edit' => [
        'folder' => 'Vedio Editing/Edited video',
        'title' => 'Commercial Video Editing & Sound Sync',
        'subtitle' => 'POST-PRODUCTION / EDITING',
        'desc' => 'Commercial video cut featuring kinetic rhythm, dynamic speed ramping, color grading, and SFX synchronization.',
        'category' => 'digital',
        'layout' => 'card-tall',
        'tags' => ['DIGITAL', 'VIDEO EDITING', 'POST PRODUCTION'],
        'media' => [
            'type' => 'video',
            'src' => 'assets/achievements/Vedio Editing/Edited video/Edited video.mp4',
            'poster' => 'assets/images/bubble-dark.jpg',
            'alt' => 'Commercial Video Edit',
        ],
        'images' => [
            'assets/achievements/Vedio Editing/Edited video/Edited video.mp4'
        ],
    ],
    'ai-edited-video' => [
        'folder' => 'Vedio Editing/Ai edited video',
        'title' => 'AI Edited Video & Concept Synthesis',
        'subtitle' => 'AI MULTIMEDIA / EXPERIMENTAL MOTION',
        'desc' => 'Experimental video synthesis project exploring generative neural video workflows with custom soundtrack matching.',
        'category' => 'digital',
        'layout' => 'card-standard',
        'tags' => ['DIGITAL', 'AI VIDEO', 'GENERATIVE'],
        'media' => [
            'type' => 'video',
            'src' => 'assets/achievements/Vedio Editing/Ai edited video/Ai edited video.mp4',
            'poster' => 'assets/images/watch-poster.jpg',
            'alt' => 'AI Edited Video',
        ],
        'images' => [
            'assets/achievements/Vedio Editing/Ai edited video/Ai edited video.mp4'
        ],
    ],
    'gaming-video-montage' => [
        'folder' => 'Gaming video montage',
        'title' => 'Gaming Video Montage — Timeline 1',
        'subtitle' => 'KINETIC MONTAGE / CINEMATICS',
        'desc' => 'High-action gaming montage featuring beat-matched sync, velocity re-mapping, impact camera shakes, and color styling.',
        'category' => 'digital',
        'layout' => 'card-wide',
        'tags' => ['DIGITAL', 'GAMING MONTAGE', 'VFX'],
        'media' => [
            'type' => 'video',
            'src' => 'assets/achievements/Gaming video montage/Timeline 1.mov',
            'poster' => 'assets/achievements/Social Media/Sales/posts/Trend post/Final Post.png',
            'alt' => 'Gaming Video Montage Timeline 1',
        ],
        'images' => [
            'assets/achievements/Gaming video montage/Timeline 1.mov'
        ],
    ],

    // ==========================================
    // ACADEMIC (Uni: Posters, Mesh Tool, Typography)
    // ==========================================
    'watch-final-poster' => [
        'folder' => 'Uni/poster',
        'title' => 'DV132 Final Project — Watch Final Poster',
        'subtitle' => 'POSTER SYSTEM / UNIVERSITY PROJECT',
        'desc' => 'Official final poster design submission for DV132 course at Jordan University of Science and Technology, examining structural grids, watch focal layout, and technical typography.',
        'category' => 'academic',
        'layout' => 'card-featured',
        'tags' => ['ACADEMIC', 'POSTER DESIGN', 'JUST'],
        'media' => [
            'type' => 'image',
            'src' => 'assets/achievements/Uni/poster/DV132_Final_Poster.jpg',
            'alt' => 'DV132 Final Project Watch Poster',
        ],
        'images' => [
            'assets/achievements/Uni/poster/DV132_Final_Poster.jpg',
            'assets/achievements/Uni/Proccess poster/DV132_Process_Poster.png',
            'assets/achievements/Uni/mesh tool/DV132_Watch_final.png'
        ],
    ],
    'watch-mesh-tool' => [
        'folder' => 'Uni/mesh tool',
        'title' => 'DV132 Final Project — Mesh Tool Watch Final',
        'subtitle' => 'ILLUSTRATOR GRADIENT MESH / VECTOR ART',
        'desc' => 'Photorealistic vector illustration crafted entirely using Adobe Illustrator Gradient Mesh tool, recreating complex dial curvature, glass reflection, and polished metals.',
        'category' => 'academic',
        'layout' => 'card-tall',
        'tags' => ['ACADEMIC', 'MESH TOOL', 'VECTOR REALISM'],
        'media' => [
            'type' => 'image',
            'src' => 'assets/achievements/Uni/mesh tool/DV132_Watch_final.png',
            'alt' => 'DV132 Mesh Tool Watch Illustration',
        ],
        'images' => [
            'assets/achievements/Uni/mesh tool/DV132_Watch_final.png',
            'assets/achievements/Uni/poster/DV132_Final_Poster.jpg'
        ],
    ],
    'city-type-study' => [
        'folder' => 'Uni/assagnment',
        'title' => 'University Assignment — City Typographic Study',
        'subtitle' => 'EXPERIMENTAL TYPOGRAPHY / EDITORIAL',
        'desc' => 'Deconstructive typographic investigation contrasting architectural city angles with bold typographic weights and spatial tension.',
        'category' => 'academic',
        'layout' => 'card-standard',
        'tags' => ['ACADEMIC', 'TYPOGRAPHY', 'EXPERIMENT'],
        'media' => [
            'type' => 'image',
            'src' => 'assets/achievements/Uni/assagnment/Screenshot 2026-07-06 183947.png',
            'alt' => 'City Typographic Study',
        ],
        'images' => [
            'assets/achievements/Uni/assagnment/Screenshot 2026-07-06 183947.png',
            'assets/achievements/Uni/assagnment/Screenshot 2026-07-06 184258.png'
        ],
    ],
    'cube-spatial-study' => [
        'folder' => 'Uni/assagnment',
        'title' => 'University Assignment — 3D Cube Spatial Study',
        'subtitle' => 'SPATIAL COMPOSITION / GEOMETRY',
        'desc' => 'Form and shadow spatial experiment examining isometric 3D volumes, planar lighting, and structural balance.',
        'category' => 'academic',
        'layout' => 'card-wide',
        'tags' => ['ACADEMIC', 'SPATIAL STUDY', '3D FORM'],
        'media' => [
            'type' => 'image',
            'src' => 'assets/achievements/Uni/assagnment/Screenshot 2026-07-06 184258.png',
            'alt' => '3D Cube Spatial Study',
        ],
        'images' => [
            'assets/achievements/Uni/assagnment/Screenshot 2026-07-06 184258.png'
        ],
    ],
    'uni-multimedia-pro1' => [
        'folder' => 'Uni/assagnment',
        'title' => 'University Multimedia Project — Pro 1',
        'subtitle' => 'MULTIMEDIA TECHNOLOGY / VISUAL DESIGN',
        'desc' => 'Integrated digital multimedia study developed under the B.Sc. Digital Film and Multimedia Technology curriculum.',
        'category' => 'academic',
        'layout' => 'card-standard',
        'tags' => ['ACADEMIC', 'MULTIMEDIA', 'JUST'],
        'media' => [
            'type' => 'image',
            'src' => 'assets/achievements/Uni/assagnment/pro 1.jpg',
            'alt' => 'University Multimedia Project Pro 1',
        ],
        'images' => [
            'assets/achievements/Uni/assagnment/pro 1.jpg',
            'assets/achievements/Uni/assagnment/Screenshot 2026-09-15 202423.png'
        ],
    ],
];

$about = [
    'title_lines' => ['DESIGNER.', 'STUDENT.', 'CREATOR.'],
    'bio' => 'I create visual work across graphic design, branding, digital content and multimedia — with a focus on strong concepts, clear communication and memorable visuals.',
    'university' => 'Jordan University of Science and Technology',
    'degree' => 'B.Sc. of Digital Film and Multimedia Technology',
    'role' => 'UNDERGRADUATE STUDENT',
];

$skills = [
    'BRANDING',
    'GRAPHIC DESIGN',
    'ADVERTISING',
    'SOCIAL MEDIA',
    'MOTION',
    'MULTIMEDIA',
    'ART DIRECTION',
];

/**
 * 5 Services with clearly visible topic-matched photos from Achevements
 */
$services = [
    [
        'tag' => 'BRANDING',
        'title' => 'BRANDING & IDENTITY',
        'desc' => 'Visual identity, logo systems, brand guidelines, and unique character design.',
        'image' => 'assets/achievements/Social Media/Logos/Bubble Cigarettes JO.jpg',
        'alt' => 'Branding and Logo Design Showcase',
    ],
    [
        'tag' => 'GRAPHIC DESIGN',
        'title' => 'GRAPHIC DESIGN & PRINT',
        'desc' => 'Posters, editorial layouts, menus, packaging, and tactile marketing materials.',
        'image' => 'assets/achievements/Social Media/Menu/Final creative rarities new menu.png',
        'alt' => 'Graphic Design and Menu Showcase',
    ],
    [
        'tag' => 'ADVERTISING',
        'title' => 'ADVERTISING & CAMPAIGNS',
        'desc' => 'Product-focused creative concepts, commercial art direction, and promotional campaigns.',
        'image' => 'assets/achievements/Social Media/congratulations/تهنئة توجيهي trendywave_jo.png',
        'alt' => 'Advertising Campaign Showcase',
    ],
    [
        'tag' => 'SOCIAL & DIGITAL',
        'title' => 'SOCIAL & DIGITAL CONTENT',
        'desc' => 'Attention-driven social media assets, feed designs, digital banners, and story sets.',
        'image' => 'assets/achievements/Social Media/Sales/posts/Trend post/Final Post.png',
        'alt' => 'Social Media Content Showcase',
    ],
    [
        'tag' => 'MOTION & MULTIMEDIA',
        'title' => 'MOTION & MULTIMEDIA',
        'desc' => 'Short-form visual hooks, video editing, kinetic motion graphics, and sound sync.',
        'image' => 'assets/achievements/Uni/poster/DV132_Final_Poster.jpg',
        'alt' => 'Motion and Multimedia Showcase',
    ],
];

$contacts = [
    'email' => [
        'label' => 'EMAIL',
        'url' => 'https://outlook.live.com/mail/0/deeplink/compose?to=abdullahhj48@gmail.com',
        'active' => true,
    ],
    'phone' => [
        'label' => 'PHONE',
        'url' => 'https://wa.me/962798956920',
        'active' => true,
    ],
    'instagram' => [
        'label' => 'INSTAGRAM',
        'url' => 'https://www.instagram.com/abdullah.hs0/',
        'active' => true,
    ],
    'behance' => [
        'label' => 'BEHANCE',
        'url' => 'javascript:void(0)',
        'active' => false,
        'badge' => 'SOON',
    ],
];
