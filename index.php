<?php
require_once __DIR__ . '/data.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="<?= htmlspecialchars($site['description'], ENT_QUOTES, 'UTF-8') ?>">
    <title><?= htmlspecialchars($site['title'], ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Manrope:wght@400;500;600;700;800&family=Space+Grotesk:wght@500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Dynamically Animated Ambient Studio Lights (Hardware-Accelerated, Feathered) -->
    <div class="ambient-lights" aria-hidden="true">
        <div class="light light-primary"></div>
        <div class="light light-secondary"></div>
        <div class="light light-accent"></div>
    </div>

    <!-- Fast-Loading Minimal Transition Loader with User Logo -->
    <div class="loader">
        <img src="assets/images/logo.png" alt="3bdullah.hs" class="loader-logo-img">
        <div class="loader-bar"><i></i></div>
    </div>
    
    <div class="noise"></div>

    <header class="nav">
        <a class="brand" href="#home" aria-label="3bdullah.hs home">
            <img src="assets/images/logo.png" alt="3bdullah.hs" class="brand-logo-img">
        </a>
        <div class="nav-right">
            <span class="status-dot"></span>
            <span class="nav-study"><?= htmlspecialchars($site['badge'], ENT_QUOTES, 'UTF-8') ?></span>
            <button class="menu-btn" aria-label="Open menu">
                <i></i><i></i><i></i>
            </button>
        </div>
    </header>

    <nav class="menu-panel">
        <div class="menu-top">
            <img src="assets/images/logo.png" alt="3bdullah.hs" class="menu-logo-img">
            <button class="close-menu">CLOSE ×</button>
        </div>
        <div class="menu-links">
            <?php foreach ($nav_links as $idx => $link): ?>
                <a href="<?= htmlspecialchars($link['href'], ENT_QUOTES, 'UTF-8') ?>" class="menu-item" data-target="<?= htmlspecialchars($link['href'], ENT_QUOTES, 'UTF-8') ?>">
                    <span class="menu-num">0<?= $idx + 1 ?></span>
                    <span class="menu-text"><?= htmlspecialchars($link['label'], ENT_QUOTES, 'UTF-8') ?></span>
                    <span class="menu-arrow">↗</span>
                </a>
            <?php endforeach; ?>
        </div>
    </nav>

    <main>
        <section id="home" class="hero">
            <div class="hex-field"></div>
            <!-- Dynamic Animated Studio Beams in Hero -->
            <div class="hero-light hero-light-amber"></div>
            <div class="hero-light hero-light-violet"></div>
            <div class="hero-light hero-light-cyan"></div>

            <div class="hero-art" aria-hidden="true">
                <div class="ring r1"></div>
                <div class="ring r2"></div>
                <div class="ring r3"></div>
            </div>

            <div class="hero-copy reveal">
                <div class="hero-badge">
                    <span class="badge-dot"></span>
                    <span class="badge-text"><?= htmlspecialchars($hero['badge'], ENT_QUOTES, 'UTF-8') ?></span>
                </div>
                <p class="kicker"><?= htmlspecialchars($hero['kicker'], ENT_QUOTES, 'UTF-8') ?></p>
                <h1><?= htmlspecialchars($hero['first_name'], ENT_QUOTES, 'UTF-8') ?><br><span><?= htmlspecialchars($hero['middle_name'], ENT_QUOTES, 'UTF-8') ?></span><br><?= htmlspecialchars($hero['last_name'], ENT_QUOTES, 'UTF-8') ?></h1>
                <div class="hero-bottom">
                    <p><strong><?= htmlspecialchars($hero['focus_title'], ENT_QUOTES, 'UTF-8') ?></strong><br><b><?= htmlspecialchars($hero['focus_subtitle'], ENT_QUOTES, 'UTF-8') ?></b></p>
                    <a class="glass-btn magnetic" href="<?= htmlspecialchars($hero['cta_link'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($hero['cta_text'], ENT_QUOTES, 'UTF-8') ?> <span>↗</span></a>
                </div>
            </div>

            <div class="hero-tag">
                <?= htmlspecialchars($hero['location'], ENT_QUOTES, 'UTF-8') ?><br>
                <small>SELECTED PROJECTS · <?= htmlspecialchars($site['year'], ENT_QUOTES, 'UTF-8') ?></small>
            </div>
        </section>

        <!-- VISUAL EXPERIMENTS: Asymmetric, High-Graphic Layout of All Real Works -->
        <section id="work" class="work section">
            <div class="work-top reveal">
                <div>
                    <span class="section-label">SELECTED WORK // ARCHIVE</span>
                    <h2>VISUAL<br><i>EXPERIMENTS.</i></h2>
                </div>
                <p>Curated design archive featuring brand identities, commercial campaigns, fluid digital experiments, and academic systems from Jordan University of Science and Technology.</p>
            </div>

            <div class="filters reveal">
                <?php 
                $activeCat = $default_category ?? 'branding';
                foreach ($categories as $catKey => $catLabel): 
                ?>
                    <button class="filter<?= $catKey === $activeCat ? ' active' : '' ?>" data-filter="<?= htmlspecialchars($catKey, ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($catLabel, ENT_QUOTES, 'UTF-8') ?></button>
                <?php endforeach; ?>
            </div>

            <div class="asymmetric-grid">
                <?php 
                $count = 1;
                foreach ($projects as $key => $proj): 
                    $mediaSrc = asset_url($proj['media']['src']);
                    $posterSrc = !empty($proj['media']['poster']) ? asset_url($proj['media']['poster']) : $mediaSrc;
                    $idxStr = str_pad((string)$count, 2, '0', STR_PAD_LEFT);
                    $isInitialMatch = ($proj['category'] === $activeCat);
                ?>
                    <article class="project-card reveal <?= htmlspecialchars($proj['layout'], ENT_QUOTES, 'UTF-8') ?>" 
                             data-category="<?= htmlspecialchars($proj['category'], ENT_QUOTES, 'UTF-8') ?>" 
                             data-project="<?= htmlspecialchars($key, ENT_QUOTES, 'UTF-8') ?>"
                             style="<?= $isInitialMatch ? '' : 'display: none;' ?>">
                        <div class="card-inner">
                            <div class="card-header-bar">
                                <span class="card-idx">#<?= htmlspecialchars($idxStr, ENT_QUOTES, 'UTF-8') ?></span>
                                <span class="card-folder"><?= htmlspecialchars(strtoupper($proj['folder']), ENT_QUOTES, 'UTF-8') ?></span>
                                <span class="card-tag"><?= htmlspecialchars(strtoupper($proj['category']), ENT_QUOTES, 'UTF-8') ?></span>
                            </div>

                            <div class="media-container<?= $proj['media']['type'] === 'video' ? ' is-video' : '' ?>">
                                <?php if ($proj['media']['type'] === 'video'): ?>
                                    <img src="<?= htmlspecialchars($posterSrc, ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($proj['title'], ENT_QUOTES, 'UTF-8') ?>" loading="lazy" decoding="async">
                                    <div class="video-indicator">
                                        <span class="play-icon">▶</span>
                                        <span class="play-text">WATCH VIDEO</span>
                                    </div>
                                <?php else: ?>
                                    <img src="<?= htmlspecialchars($mediaSrc, ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($proj['media']['alt'] ?? $proj['title'], ENT_QUOTES, 'UTF-8') ?>" loading="lazy" decoding="async">
                                <?php endif; ?>
                                
                                <div class="card-hover-overlay">
                                    <span class="hover-btn">VIEW CASE ↗</span>
                                </div>
                                <div class="card-crosshair tl"></div>
                                <div class="card-crosshair br"></div>
                            </div>

                            <div class="card-meta">
                                <h3><?= htmlspecialchars($proj['title'], ENT_QUOTES, 'UTF-8') ?></h3>
                                <p><?= htmlspecialchars($proj['subtitle'], ENT_QUOTES, 'UTF-8') ?></p>
                            </div>
                        </div>
                    </article>
                <?php 
                    $count++;
                endforeach; 
                ?>
            </div>
        </section>

        <section id="about" class="about section">
            <div class="about-title reveal">
                <span class="section-label">ABOUT</span>
                <h2>DESIGNER.<br><i>STUDENT.</i><br>CREATOR.</h2>
            </div>
            <div class="about-content">
                <p class="about-lead reveal"><?= htmlspecialchars($about['bio'], ENT_QUOTES, 'UTF-8') ?></p>
                <div class="edu reveal">
                    <span>EDUCATION</span>
                    <h3><?= htmlspecialchars($about['university'], ENT_QUOTES, 'UTF-8') ?></h3>
                    <p><?= htmlspecialchars($about['degree'], ENT_QUOTES, 'UTF-8') ?></p>
                    <b><?= htmlspecialchars($about['role'], ENT_QUOTES, 'UTF-8') ?></b>
                </div>
                <div class="skill-cloud reveal">
                    <?php foreach ($skills as $skill): ?>
                        <span><?= htmlspecialchars($skill, ENT_QUOTES, 'UTF-8') ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- WHAT I CREATE: Service cards with high quality visible photos -->
        <section id="services" class="services section">
            <div class="services-head reveal">
                <div>
                    <span class="section-label">SERVICES</span>
                    <h2>WHAT I <i>CREATE.</i></h2>
                </div>
                <p class="services-sub">Tailored visual and multimedia solutions crafted with conceptual clarity and high-end aesthetics.</p>
            </div>

            <div class="service-grid">
                <?php foreach ($services as $svc): ?>
                    <div class="service-card reveal">
                        <div class="service-image-box">
                            <img src="<?= htmlspecialchars(asset_url($svc['image']), ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($svc['alt'] ?? $svc['title'], ENT_QUOTES, 'UTF-8') ?>" loading="lazy" decoding="async">
                            <span class="service-tag"><?= htmlspecialchars($svc['tag'], ENT_QUOTES, 'UTF-8') ?></span>
                        </div>
                        <div class="service-body">
                            <h3><?= htmlspecialchars($svc['title'], ENT_QUOTES, 'UTF-8') ?></h3>
                            <p><?= htmlspecialchars($svc['desc'], ENT_QUOTES, 'UTF-8') ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section id="contact" class="contact section">
            <div class="contact-glow"></div>
            <span class="section-label reveal">CONTACT</span>
            <h2 class="reveal">LET'S MAKE<br><i>SOMETHING.</i></h2>
            <p class="contact-note reveal">Open to selected freelance work, collaborations and creative projects.</p>
            <div class="contact-links reveal">
                <?php foreach ($contacts as $c): ?>
                    <?php if (!empty($c['active'])): ?>
                        <a href="<?= htmlspecialchars($c['url'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener">
                            <?= htmlspecialchars($c['label'], ENT_QUOTES, 'UTF-8') ?> <span>↗</span>
                        </a>
                    <?php else: ?>
                        <a class="disabled-link" href="<?= htmlspecialchars($c['url'], ENT_QUOTES, 'UTF-8') ?>" aria-disabled="true">
                            <?= htmlspecialchars($c['label'], ENT_QUOTES, 'UTF-8') ?> <span><?= htmlspecialchars($c['badge'] ?? 'SOON', ENT_QUOTES, 'UTF-8') ?></span>
                        </a>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <footer>
                <span><?= htmlspecialchars($hero['first_name'] . ' ' . $hero['middle_name'] . ' ' . $hero['last_name'], ENT_QUOTES, 'UTF-8') ?></span>
                <span>JORDAN · <?= htmlspecialchars($site['year'], ENT_QUOTES, 'UTF-8') ?></span>
            </footer>
        </section>
    </main>

    <div class="modal" aria-hidden="true">
        <div class="modal-backdrop"></div>
        <div class="modal-inner">
            <button class="modal-close">CLOSE ×</button>
            <div class="modal-kicker">PROJECT DETAILS</div>
            <h2 class="modal-title"></h2>
            <p class="modal-desc"></p>
            <div class="modal-meta"></div>
            <div class="modal-gallery"></div>
        </div>
    </div>

    <!-- Dynamic Projects data passed from PHP to JavaScript -->
    <script>
        window.projects = <?= json_encode(array_map(function($p) {
            return [
                'title' => $p['title'],
                'desc' => $p['desc'],
                'tags' => $p['tags'],
                'images' => array_map('asset_url', $p['images'] ?? []),
            ];
        }, $projects), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?>;
    </script>
    <script src="script.js"></script>
</body>
</html>
