<!DOCTYPE html>
<html lang="en-US">


<head>
    <meta charset="UTF-8">
    <title>Data Privacy Is A Right</title>
    <link rel="stylesheet" href="style.css?v=<?php echo filemtime('style.css'); ?>">
    <script src="theme.js?v=<?php echo filemtime('theme.js'); ?>"></script>
    <script defer src="visualizer.js?v=<?php echo filemtime('visualizer.js'); ?>"></script>
</head>
<body>
    <?php $activePage = 'home'; ?>
    <?php include 'header.php'; ?>
    <div class="home-layout">
        <aside class="news-sidebar">
            <h3 class="news-sidebar-title">In The News</h3>
            <ul class="news-list">
                <!-- Add more news items by copying the <li> block above -->
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
                <h2>Data Privacy Is <strong>Your</strong> Right</h2>
                <p>In 2014, Meta claimed one data warehouse generated 4 petabytes (4 Million Gigabytes) every day. <a href="https://research.facebook.com/blog/2014/10/facebook-s-top-open-data-problems/">Source</a></p>
                <p>At the time, Facebook only had a paltry 1.31 billion active monthly users, as of 2025 they have 3.07 billion. <a href="https://www.demandsage.com/facebook-statistics/">Source</a></p>
                <p>Taking this data, that <strong>one</strong> data center (1 of 17) was processing about 1.1 GB per user every year.</p>
                <p>Now with users spending more time on social media, there is even more data for social media companies to analyze and sell.</p>
                <p>

                </p>

                <h2>Did You Know?</h2>
                <ul>
                    <li>Incognito mode doesn't prevent tracking. Neither does logging out.<a href="https://www.staysafeonline.org/articles/safeguarding-your-internet-activity-with-incognito-mode#:~:text=When%20you%20open%20a%20new,follow%20you%20around%20the%20internet?">Source</a></li>
                    <li>Tracking follows you between websites and apps. <a href="https://socialnomics.net/2025/11/26/digital-privacy-in-the-age-of-social-media-are-users-losing-control/">Source</a></li>
                    <li>Meta's Revenue is 98% ads. <a href="https://yipinstitute.org/policy/data-privacy-protection-trends-in-social-media">Source</a></li>
                    <li>60% of Americans believe it's impossible to go through daily life without having their personal data tracked by businesses and the government. <a href="https://www.pewresearch.org/internet/2023/10/18/how-americans-view-data-privacy/">Source</a></li>
                </ul>
            </div>

            <div class="about-section">
                <h3 class="viz-title">What Does 1.1 GB of Your Data Look Like?</h3>
                <p class="viz-subtitle">Per user, per year — from just one of Meta's 17 data centers (2014 estimate).</p>
                <div class="viz-buttons">
                    <button class="viz-btn active" data-key="texts">Text Messages</button>
                    <button class="viz-btn" data-key="photos">Photos</button>
                    <button class="viz-btn" data-key="location">Location Pings</button>
                    <button class="viz-btn" data-key="emails">Emails</button>
                    <button class="viz-btn" data-key="browser">Browser Visits</button>
                    <button class="viz-btn" data-key="video">HD Video</button>
                </div>
                <div class="viz-display">
                    <div class="viz-number" id="viz-number">787,410</div>
                    <div class="viz-unit" id="viz-unit">text messages</div>
                    <div class="viz-desc" id="viz-desc">Avg. SMS with metadata (~1.5 KB each)</div>
                </div>
            </div>
        </div>

        <aside class="stats-sidebar">
            <h3 class="stats-sidebar-title">By The Numbers</h3>
            <div class="stat-list">
                <div class="stat-item">
                    <span class="stat-value">$264.59B</span>
                    <span class="stat-label">Google ad revenue in 2024</span>
                </div>
                <div class="stat-item">
                    <span class="stat-value">3.07B</span>
                    <span class="stat-label">Monthly active Facebook users</span>
                </div>
                <div class="stat-item">
                    <span class="stat-value">4PB</span>
                    <span class="stat-label">Data generated daily by one Meta warehouse</span>
                </div>
                <div class="stat-item">
                    <span class="stat-value">1.1GB</span>
                    <span class="stat-label">Data collected per user per year (2014 estimate)</span>
                </div>
                <div class="stat-item">
                    <span class="stat-value">$5B</span>
                    <span class="stat-label">FTC penalty levied against Facebook</span>
                </div>
            </div>
        </aside>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>