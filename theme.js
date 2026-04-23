(function() {
    const saved = localStorage.getItem('theme');
    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    const theme = saved ?? (prefersDark ? 'dark' : 'light');
    document.documentElement.setAttribute('data-theme', theme);
})();

function applyBodyTheme(theme) {
    document.body.style.backgroundColor = theme === 'dark' ? '#111111' : '#ffffff';
    document.body.style.color = theme === 'dark' ? '#f1f1f1' : '#111111';
}

function toggleTheme(){
    const current = document.documentElement.getAttribute('data-theme');
    const next = current === 'dark' ? 'light' : 'dark';
    document.documentElement.setAttribute('data-theme', next);
    localStorage.setItem('theme', next);
    applyBodyTheme(next);
    document.getElementById('theme-icon').textContent = next === 'dark' ? '☀' : '☽';
}

document.addEventListener('DOMContentLoaded', () => {
    const theme = document.documentElement.getAttribute('data-theme');
    applyBodyTheme(theme);
    document.getElementById('theme-icon').textContent = theme === 'dark' ? '☀' : '☽';
    document.getElementById('theme-toggle').addEventListener('click', toggleTheme);
});