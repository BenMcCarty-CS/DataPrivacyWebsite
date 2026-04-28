<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <title>About | Data Privacy Is A Right</title>
    <link rel="stylesheet" href="style.css?v=<?php echo filemtime('style.css'); ?>">
    <script src="theme.js?v=<?php echo filemtime('theme.js'); ?>"></script>
</head>
<body>
    <?php $activePage = 'about'; ?>
    <?php include 'header.php'; ?>

    <div class="home-layout">
        <aside class="news-sidebar">
            <h3 class="news-sidebar-title">In The News</h3>
            <ul class="news-list">
                <li class="news-item">
                    <span class="news-source">CNBC</span>
                    <a class="news-headline" href="https://www.cnbc.com/2025/10/24/eu-says-tiktok-and-meta-broke-transparency-rules-under-tech-law.html">EU says TikTok and Meta broke transparency rules under Digital Services Act</a>
                </li>
                <li class="news-item">
                    <span class="news-source">FTC</span>
                    <a class="news-headline" href="https://www.ftc.gov/news-events/news/press-releases/2019/07/ftc-imposes-5-billion-penalty-sweeping-new-privacy-restrictions-facebook">FTC Imposes $5 Billion Penalty on Facebook</a>
                </li>
                <li class="news-item">
                    <span class="news-source">Incogni</span>
                    <a class="news-headline" href="https://blog.incogni.com/social-media-privacy-2025/">Facebook Ranks Dead Last in Privacy Rankings</a>
                </li>
            </ul>
        </aside>

        <div class="about-container">
            <div class="about-section">
                <h2>About Me</h2>
                <p>
                    I am a Junior Computer Science student with a strong interest in how technology intersects with personal
                    rights and civil liberties. In the last year, I have grown increasingly concerned with how much
                    personal data is collected, stored, and monetized by social media platforms and other internet services
                    — often without users fully understanding what they have agreed to.
                </p>
                <p>
                    This site is my attempt to make that reality more visible. Data collection is not abstract — it shapes
                    the ads you see, the content you are shown, and the profile companies build about you over time.
                    I believe that being informed is the first step toward reclaiming control.
                </p>
            </div>

            <div class="about-section">
                <h2>Why Data Privacy?</h2>
                <p>
                    As I learned more about how modern platforms operate, a few things stood out to me:
                </p>
                <ul class="concern-list">
                    <li>Social media companies collect far more data than most users realize — location, browsing habits, app usage, purchase behavior, and more.</li>
                    <li>Much of this data is sold to third-party advertisers or shared with data brokers, with little transparency about where it ends up.</li>
                    <li>Terms of service agreements are deliberately long and complex, making informed consent nearly impossible for the average user.</li>
                    <li>Once data is collected and shared, users have very limited ability to retrieve or delete it.</li>
                </ul>
                <p>
                    These are not fringe concerns — they are structural features of a business model built on surveillance.
                    I made this site because I think more people deserve to understand that model and have real tools to
                    push back against it.
                </p>
            </div>

            <div class="about-section">
                <h2>About This Site</h2>
                <p>
                    This project was build for A3 Advocacy Website assignment for CO300 in Spring 2026.
                </p>
                <p>
                    No tracking scripts. No analytics. No cookies. This site collects nothing about you - because I don't want to be tracked. So I'll extend you the same courtesy.
                </p>
            </div>
        </div>
    </div>
</body>
</html>
