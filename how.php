<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <title>How It Works | Data Privacy Is A Right</title>
    <link rel="stylesheet" href="style.css?v=<?php echo filemtime('style.css'); ?>">
    <script src="theme.js?v=<?php echo filemtime('theme.js'); ?>"></script>
</head>

<body>
    <?php $activePage ='how'; ?>
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
                <h2>How Does Your Data Get Collected?</h2>
                <p>It's honestly pretty easy, I do it <a href="data_mirror_optin.php">here</a>. But I'll explain anyways</p>
                <p>
                    Websites and apps can just ask. They'll often ask you for your name, email, phone number, and age when you log in or signup.
                    You give it to them for free and without a second thought other than "I guess I'll get another junk email".
                    Outside of that, websites and apps will just ask your device.
                </p>
                    <ul>
                        <li>How big is the screen so I can make it look good?</li>
                        <li>Is this a mobile device or a desktop? I want to make sure it sizes correctly</li>
                        <li>What time is it? I should show them when something was posted</li>
                        <li>Are there any cookies? I want to show something that's as relevant to them as possible</li>
                        <li>How fast is their computer or phone? I don't want to try to load too much stuff and slow it down</li>
                        <li>Where did they get here from? I want to make sure to give credit to whoever referred them</li>
                    </ul>
                <p>
                    A bunch of inconsequential questions on their own, but taken together they can be much more sinister.
                </p>
                <hr>
                <h2>The Next Step</h2>
                <p>
                    Next the app or website you visited will bundle all of your information together with something called a "Mobile Advertising ID"(MAID) or "ID for Advertisers"(IDFA).
                    This is specific to just your device and is shared across apps and websites.
                    It can then be aggregated by their servers to ask other websites and apps what they know about you.
                    This fully complete picture can then be taken to find the highest value advertisements to send to you.
                </p>
                <h2>Why Do All Of This?</h2>
                <p>
                    The answer is simple, <strong>MONEY</strong>.
                    All of the amazing free services on the internet is because they don't take your money.
                    They sell the ability to sell to you is their service.
                    Companies pay good money to sell to more specific demographics.
                    Advertisers themselves say this, from Marketing Evolution "If one pays a 30% premium for targeting, ... then a marketer can more than double their marketing ROI(return on investment)".
                    This direct connection to making more money the more they know about you is why they collect as much data from and about you they can.
                    Google's revenue from selling ads in 2024 was 264.59 billion dollars. <a href="https://www.statista.com/statistics/266249/advertising-revenue-of-google/">Source</a>
                    A number that has never, since Google started in 2001, gone down.
                    It increases every year as they amass more user data and find new ways to track you.
                </p>
                <h2>The Future</h2>
                <p>
                    We have two options for the future.
                </p>
                <ol>
                    <li>Stand up for ourselves and hold onto our right</li>
                    <li>Accept what tech companies want</li>
                </ol>
                <p>
                    Option 1:
                    <br>
                    We stand up for our rights and use options that prevent our tracking and data collection.
                    Using some of the suggestions on the <a href="resources.php">resources page</a>.
                    Take a second thought about what your data actually means.
                    <br>
                    <br>
                    Option 2:
                    <br>
                    We let tech companies run wild. AI makes smaller datasets more powerful.
                    We allow tech companies running wild become law as they lobby for looser restrictions and no regulations.
                    We allow AI-powered behavioral predictions, biometric data collection becomes required.
                    Anonymity becomes illegal, you are required to allow tech companies to know everything about you.
                    <br>
                    Personally I'm choosing option 1. So join me in the fight to keep our right to privacy.
                </p>
            </div>
        </div>
    </div>
    <?php include 'footer.php' ?>
</body>
</html>
