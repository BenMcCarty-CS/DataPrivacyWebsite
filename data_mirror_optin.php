<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <title>Watch It Happen | Data Privacy Is A Right</title>
    <link rel="stylesheet" href="style.css">
    <script src="theme.js"></script>
    <script src="collectData.js"></script>
</head>
<body>
    <?php $activePage = 'interactive'; ?>
    <?php include 'header.php'; ?>

    <h2 style="text-align: center;">Interactive tool that reveals data your browser exposes about you</h2>
    <div class="dm-wrap">
      <div class="dm-optin" id="optin">
        <div style="font-size: 24px; margin-bottom: 1rem; color: var(--color-text-danger);">
          <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="20" cy="20" r="19" stroke="#E24B4A" stroke-width="1"/>
            <circle cx="20" cy="14" r="3" fill="#E24B4A"/>
            <rect x="18.5" y="20" width="3" height="11" rx="1.5" fill="#E24B4A"/>
          </svg>
        </div>
        <h1>What does your browser reveal about you?</h1>
        <p>Every website you visit can silently collect data from your browser — without asking. Click below to see exactly what a site like this one knows about you the moment you land on it.</p>
        <div class="dm-warning">No data is sent to any server. Everything you see stays in your browser.</div>
        <button class="dm-btn primary" id="reveal-btn">Show me what you know</button>
      </div>

      <div class="dm-results" id="results">
        <div class="dm-header">
          <h2>Here's what this page collected about you</h2>
          <p>All of this was gathered the moment you loaded this page — without you clicking anything.</p>
        </div>
        <div class="dm-grid" id="cards"></div>
        <p class="dm-count" id="count-line"></p>
        <div class="dm-cta">
          <p>This is just what your browser exposes. Social media platforms also collect your clicks, scroll depth, time spent on each post, who you interact with, what you search, and much more — building a profile worth thousands of data points per user.</p>
          <button class="dm-btn" id="protect-btn">What can I do to protect myself? ↗</button>
        </div>
      </div>
    </div>
</body>
</html>
