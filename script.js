const projects = window.projects || {};
const qs = s => document.querySelector(s);
const qsa = s => [...document.querySelectorAll(s)];

// Fast reveal & minimal loader delay for maximum performance
window.addEventListener('DOMContentLoaded', () => {
    reveal();
});

window.addEventListener('load', () => {
    setTimeout(() => {
        const loader = qs('.loader');
        if (loader) loader.classList.add('done');
    }, 180);
    reveal();
});

function reveal() {
    const io = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                io.unobserve(entry.target);
            }
        });
    }, { threshold: 0.08 });
    qsa('.reveal').forEach(el => io.observe(el));
}

// ==========================================
// DYNAMIC SCROLL-DRIVEN BACKGROUND EVOLUTION (COUPLE COLORS PER SLIDE)
// ==========================================
const slideThemes = [
    { id: 'home', c1: 'rgba(255, 106, 26, 0.45)', c2: 'rgba(139, 40, 238, 0.45)', c3: 'rgba(56, 189, 248, 0.25)' },
    { id: 'work', c1: 'rgba(0, 210, 255, 0.45)', c2: 'rgba(236, 72, 153, 0.45)', c3: 'rgba(139, 92, 246, 0.28)' },
    { id: 'about', c1: 'rgba(16, 185, 129, 0.42)', c2: 'rgba(124, 58, 237, 0.44)', c3: 'rgba(6, 182, 212, 0.28)' },
    { id: 'services', c1: 'rgba(245, 158, 11, 0.45)', c2: 'rgba(2, 132, 199, 0.44)', c3: 'rgba(168, 85, 247, 0.28)' },
    { id: 'contact', c1: 'rgba(255, 69, 0, 0.46)', c2: 'rgba(139, 92, 246, 0.45)', c3: 'rgba(56, 189, 248, 0.28)' }
];

let currentThemeId = '';
function applySlideTheme(theme) {
    if (!theme || currentThemeId === theme.id) return;
    currentThemeId = theme.id;
    const root = document.documentElement;
    root.style.setProperty('--slide-color-1', theme.c1);
    root.style.setProperty('--slide-color-2', theme.c2);
    root.style.setProperty('--slide-color-3', theme.c3);
    
    // Sync active menu link
    qsa('.menu-item').forEach(item => {
        const target = item.getAttribute('href');
        if (target === `#${theme.id}`) {
            item.classList.add('active');
        } else {
            item.classList.remove('active');
        }
    });
}

// Initial theme setup
applySlideTheme(slideThemes[0]);

// Smooth IntersectionObserver for section slide transitions
const slideObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const found = slideThemes.find(s => s.id === entry.target.id);
            if (found) applySlideTheme(found);
        }
    });
}, { rootMargin: '-20% 0px -40% 0px', threshold: [0.1, 0.3] });

slideThemes.forEach(s => {
    const el = document.getElementById(s.id);
    if (el) slideObserver.observe(el);
});

let ticking = false;
window.addEventListener('scroll', () => {
    if (!ticking) {
        requestAnimationFrame(() => {
            const scrollY = window.scrollY;
            const docHeight = document.documentElement.scrollHeight - window.innerHeight;
            const progress = Math.min(Math.max(scrollY / (docHeight || 1), 0), 1);
            
            // Backup detection on rapid scroll
            let active = slideThemes[0];
            for (const s of slideThemes) {
                const el = document.getElementById(s.id);
                if (el) {
                    const rect = el.getBoundingClientRect();
                    if (rect.top <= window.innerHeight * 0.45) {
                        active = s;
                    }
                }
            }
            applySlideTheme(active);
            
            document.documentElement.style.setProperty('--scroll-hue', `${Math.round(progress * 100)}deg`);
            document.documentElement.style.setProperty('--scroll-y', `${Math.round(scrollY * 0.18)}px`);
            ticking = false;
        });
        ticking = true;
    }
}, { passive: true });

// ==========================================
// NAVIGATION PANEL & CLICK HIGHLIGHTS
// ==========================================
const panel = qs('.menu-panel');
const menuBtn = qs('.menu-btn');
const closeBtn = qs('.close-menu');
if (menuBtn) menuBtn.onclick = () => panel && panel.classList.add('open');
if (closeBtn) closeBtn.onclick = () => panel && panel.classList.remove('open');

qsa('.menu-item').forEach(item => {
    item.addEventListener('click', () => {
        qsa('.menu-item').forEach(i => i.classList.remove('active'));
        item.classList.add('active');
        if (panel) panel.classList.remove('open');
    });
});

// Asymmetric Projects Category Filter (Default is BRANDING, NOT ALL)
qsa('.filter').forEach(btn => {
    btn.onclick = () => {
        qsa('.filter').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        const filterVal = btn.dataset.filter;
        qsa('.project-card, .project').forEach(card => {
            const cat = card.dataset.category || '';
            const match = filterVal === 'all' || cat.split(' ').includes(filterVal);
            if (match) {
                card.style.display = '';
                requestAnimationFrame(() => {
                    card.classList.add('visible');
                });
            } else {
                card.style.display = 'none';
            }
        });
    };
});

// Modal Project Case Viewer
const modal = qs('.modal');
function openProject(key) {
    const p = projects[key];
    if (!p || !modal) return;

    qs('.modal-title').textContent = p.title || '';
    qs('.modal-desc').textContent = p.desc || '';
    qs('.modal-meta').innerHTML = (p.tags || []).map(t => `<span>${t}</span>`).join('');

    const imgs = p.images || [];
    qs('.modal-gallery').innerHTML = imgs.map((src, i) => {
        const fullClass = i === 0 ? 'full' : '';
        const url = src.startsWith('assets/') || src.includes('/') ? src : `assets/images/${src}`;
        const isVideo = src.endsWith('.mp4') || src.endsWith('.mov');

        if (isVideo) {
            const mime = src.endsWith('.mov') ? 'video/quicktime' : 'video/mp4';
            return `<video class="${fullClass}" controls playsinline autoplay muted><source src="${url}" type="${mime}"></video>`;
        }
        return `<img class="${fullClass}" src="${url}" alt="${p.title} — asset ${i + 1}" loading="lazy" decoding="async">`;
    }).join('');

    modal.classList.add('open');
    modal.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
}

function closeModal() {
    if (!modal) return;
    modal.classList.remove('open');
    modal.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
    qsa('.modal-gallery video').forEach(v => {
        try { v.pause(); } catch(e) {}
    });
}

qsa('.project-card, .project').forEach(p => {
    p.addEventListener('click', () => openProject(p.dataset.project));
});

const modalClose = qs('.modal-close');
const modalBackdrop = qs('.modal-backdrop');
if (modalClose) modalClose.onclick = closeModal;
if (modalBackdrop) modalBackdrop.onclick = closeModal;

document.addEventListener('keydown', e => {
    if (e.key === 'Escape') {
        closeModal();
        if (panel) panel.classList.remove('open');
    }
});

// Magnetic Button Interaction
qsa('.magnetic').forEach(el => {
    el.addEventListener('mousemove', e => {
        const r = el.getBoundingClientRect();
        el.style.transform = `translate(${(e.clientX - r.left - r.width / 2) * 0.12}px, ${(e.clientY - r.top - r.height / 2) * 0.12}px)`;
    });
    el.addEventListener('mouseleave', () => {
        el.style.transform = '';
    });
});
