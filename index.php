<!DOCTYPE html>
<html lang="en-US">


<head>
    <meta charset="UTF-8">
    <title>Data Privacy Is A Right</title>
    <link rel="stylesheet" href="style.css?v=<?php echo filemtime('style.css'); ?>">
    <script src="theme.js?v=<?php echo filemtime('theme.js'); ?>"></script>
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
            </div>
        </div>
    </div>
</body>
</html>