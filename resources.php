<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <title>Resources | Data Privacy Is A Right</title>
    <link rel="stylesheet" href="style.css?v=<?php echo filemtime('style.css'); ?>">
    <script src="theme.js?v=<?php echo filemtime('theme.js'); ?>"></script>
</head>
<body>
    <?php $activePage = 'resources'; ?>
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
                <h2>Resources</h2>
                <h3>How can you protect yourself?</h3>
            </div>

            <div class="about-section">
                <h4 class="section-header">Think About Your Internet Usage</h4>
                <p>
                    Using websites and apps blindly contributes to this epidemic.
                    Consider reading privacy policies and terms of service.
                    If they are long consider asking an AI agent to help summarize and simplify them into a more dense form that's more understandable.
                    Sample prompt: "Can you summarize what data is being collected from me from <i>Insert social media or website here</i> if I accept their terms of service and privacy policy?"
                </p>
                <hr>
                <p>
                    Don't just stop at the websites you use but also the tools you use to visit them.
                    Google chrome by default tracks browsing history, search terms, location, and financial information. <a href="https://surfshark.com/research/chart/data-collection-mobile-browsers">Source</a>
                    Turning off settings like: "Help improve", "Make searches and browsing better", and clearing cookies can all help prevent tracking.
                    Using less data hungry browsers like Brave, Opera, and DuckDuckGO can all reduce the tracking by default.
                    Broswer extensions like <a href="https://ublockorigin.com/">uBlock Origin</a>, <a href="https://privacybadger.org/">Privacy Badger</a>, and <a href="https://duckduckgo.com/duckduckgo-help-pages/desktop/adding-duckduckgo-to-your-browser">DuckDuckGO Privacy Essentials</a> all help to further reduce the tracking.
                    Additionally these extensions can all help with loading websites faster by blocking the requests for excess things to be loaded as well.
                    However using too many can slow down browsing and make a more unique fingerprint. I personally use Firefox with tracking disabled, uBlock Origin, and Bitwarden.
                </p>
                <hr>
                <h4 class="section-header">Who Would You Tell Where You Are All The Time?</h4>
                <p>
                    At a larger hardware level you get tracked as well. Apple with iOS and macOS, Google with Android, Microsoft with Windows all enable tracking by default.
                    Location tracking is typically automatically turned on by default. It is used for helpful services like automatically setting the time, doing updates overnight.
                    But the truth about location based tracking is that it can never be anonymous.
                    Would you tell me where you are every 30 seconds? What if you knew I was writing it down everytime?
                    What if even if you knew I didn't know your name, but I knew what kind of phone you had?
                    What if I kept a map and figured out where you probably were every Saturday at 7:01 PM?
                    Location data is something that should be used very sparingly but we give it out all the time.
                    SnapChat has one of it's most unique features being that you can see where your friends are at any time.
                    There are data brokers who specialize in buying and selling your location data.
                    In early 2025, Gravy Analytics had a data breach that affected millions of people.
                    Their specialty... precise location data, something that could be used to tell where you lived and went.
                    Shown below is what Russian hackers claim they stole from Gravy.
                </p>
                <img class="inline-image" src="Images/BaptisteRobert.jpg" alt="Image of locations attained by russian hackers. From: https://x.com/fs0c131y/status/1876975966334964076">
                <h4 class="section-header">Work For Legal Change</h4>
                <p>Contact your local lawmakers. <a href="house.gov/representatives/find-your-representative">Find Your Representative</a></p>
                <p>Sample email:</p>
                <p><strong>Subject:</strong> Request for Stronger Federal Data Privacy Legislation</p>
                <p>Dear Representative [Last Name],</p>
                <p>I am writing to you as a constituent of [District/State] to urge your support for comprehensive federal data privacy legislation that protects Americans from the unchecked collection and sale of their personal data.</p>
                <p>Currently, the digital advertising ecosystem profits enormously from harvesting personal information — browsing habits, location data, purchase history, and behavioral patterns — often without meaningful consent from users. In 2024 alone, Google reported $264.59 billion in advertising revenue, a business model built almost entirely on the detailed profiling of American citizens. This is not an isolated example. The entire internet economy has been structured around monetizing personal data, frequently at the expense of individual privacy and autonomy.</p>
                <p>I respectfully ask that you consider supporting or sponsoring legislation that would:</p>
                <ol>
                    <li>Require explicit, informed opt-in consent before any personal data is collected or shared with third parties.</li>
                    <li>Ban or strictly regulate the use of Mobile Advertising IDs (MAIDs) and similar cross-platform tracking identifiers.</li>
                    <li>Establish a federal right to access, correct, and delete personal data held by companies.</li>
                    <li>Impose meaningful penalties on organizations that misuse or unlawfully share consumer data.</li>
                    <li>Create an independent federal data protection authority with real enforcement power.</li>
                </ol>
                <p>The United States lags significantly behind international standards. The European Union's General Data Protection Regulation (GDPR) has demonstrated that strong privacy law is both achievable and compatible with a functioning digital economy. Americans deserve no less.</p>
                <p>I urge you to take a leadership role on this issue. Your constituents are increasingly aware of how their data is being used, and they are looking to their elected officials to act.</p>
                <p>Thank you for your time and your service. I welcome the opportunity to discuss this matter further.</p>
                <p>Respectfully,<br>
                [Your Full Name]<br>
                [Your Address]<br>
                [City, State, ZIP]<br>
                [Your Email Address]<br>
                [Your Phone Number]</p>

                <h2>More Information</h2>
                <p>
                    <a href="https://consumer.ftc.gov/features/protecting-your-privacy-online">FTC: Protecting Your Privacy Online</a>
                </p>
            </div>
        </div>
    </div>
</body>
</html>
