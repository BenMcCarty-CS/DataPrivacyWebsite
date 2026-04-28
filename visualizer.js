const DATA_TYPES = {
    texts:    { unit: 'text messages',         bytesEach: 1500,              desc: 'Avg. SMS with metadata (~1.5 KB each)' },
    photos:   { unit: 'smartphone photos',     bytesEach: 4 * 1024 * 1024,   desc: 'Avg. smartphone photo (~4 MB each)' },
    location: { unit: 'location pings',        bytesEach: 100,               desc: 'GPS coordinate + timestamp (~100 bytes each)' },
    emails:   { unit: 'emails',                bytesEach: 75 * 1024,         desc: 'Avg. email without attachments (~75 KB each)' },
    browser:  { unit: 'website visits logged', bytesEach: 500,               desc: 'URL + timestamp + referrer (~500 bytes each)' },
    video:    { unit: 'minutes of HD video',   bytesEach: 50 * 1024 * 1024,  desc: '1 minute of 1080p video (~50 MB)' }
};

const TOTAL_BYTES = 1.1 * 1024 * 1024 * 1024;
let animFrame = null;

function animateTo(target, el) {
    if (animFrame) cancelAnimationFrame(animFrame);
    const start = performance.now();
    const duration = 600;
    const from = parseInt(el.textContent.replace(/,/g, '')) || 0;
    function step(now) {
        const t = Math.min((now - start) / duration, 1);
        const ease = 1 - Math.pow(1 - t, 3);
        el.textContent = Math.round(from + (target - from) * ease).toLocaleString();
        if (t < 1) animFrame = requestAnimationFrame(step);
    }
    animFrame = requestAnimationFrame(step);
}

document.querySelectorAll('.viz-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        document.querySelectorAll('.viz-btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        const type = DATA_TYPES[btn.dataset.key];
        animateTo(Math.floor(TOTAL_BYTES / type.bytesEach), document.getElementById('viz-number'));
        document.getElementById('viz-unit').textContent = type.unit;
        document.getElementById('viz-desc').textContent = type.desc;
    });
});
