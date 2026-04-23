const dataPoints = [
    {
        label: "Browser",
        key: "browser",
        badge: "Always collected",
        why: "<strong>Why companies want this:</strong> Used to tailor ads by device type, detect bots, and build your browser fingerprint -- a near-unique ID that tracks you across sites even without cookies."
    },
    {
        label: "Operating system",
        key: "os",
        badge: "Always collected",
        why: "<strong>Why companies want this:</strong> Helps build your device fingerprint and target ads to desktop vs. mobile users with different buying behaviors."
    },
    {
        label: "Screen resolution",
        key: "screen",
        badge: "Always collected",
        why: "<strong>Why companies want this:</strong> One of ~20 signals combined to create a browser fingerprint that identifies you without cookies."
    },
    {
        label: "Timezone",
        key: "timezone",
        badge: "Always collected",
        why: "<strong>Why companies want this:</strong> Reveals your approximate region even without GPS. Used to serve location-targeted ads and content."
    },
    {
        label: "Language",
        key: "language",
        badge: "Always collected",
        why: "<strong>Why companies want this:</strong> Narrows your demographic profile -- language correlates with culture, nationality, and purchase intent."
    },
    {
        label: "Device type",
        key: "device",
        badge: "Always collected",
        why: "<strong>Why companies want this:</strong> Mobile users and desktop users see different ads. Advertisers pay more to target mobile users who can be reached by push notifications."
    },
    {
        label: "CPU cores",
        key: "cpu",
        badge: "Fingerprinting signal",
        why: "<strong>Why companies want this:</strong> Helps distinguish device models as a part of a fingerprint. Higher-core counts suggest higher-end devices -- a proxy for income."
    },
    {
        label: "Approximate RAM",
        key: "ram",
        badge: "Fingerprinting signal",
        why: "<strong>Why companies want this:</strong> Another income proxy. Advertisers pay premium rates to reach users of high-spec devices."
    },
    {
        label: "Connection type",
        key: "connection",
        badge: "Behavioral signal",
        why: "<strong>Why companies want this:</strong> WiFi vs. cellular usage patterns reveal home vs. away behavior, used to infer lifestyle and location habits."
    },
    {
        label: "Do Not Track setting",
        key: "dnt",
        badge: "Ironic signal",
        why: "<strong>Why companies want this:</strong> Most companies ignore this setting. Ironically, having it enabled makes you slightly more identifiable -- fewer people turn it on."
    },
    {
        label: "Cookies enabled",
        key: "cookies",
        badge: "Tracking method",
        why: "<strong>Why companies want this:</strong> Tells the site exactly where you came from -- a search query, a social media post, or another website -- revealing intent and interests."
    }
];

function getBrowserInfo() {
    const ua = navigator.userAgent;
    if (ua.includes("Firefox")) return "Firefox";
    if (ua.includes("Edg/")) return "Microsoft Edge";
    if (ua.includes("Chrome")) return "Chrome";
    if (ua.includes("Safari")) return "Safari";
    return "Unknown browser";
}

function getOS() {
    const ua = navigator.userAgent;
    if (ua.includes("Windows NT")) return "Windows";
    if (ua.includes("Mac OS X")) return "macOS";
    if (ua.includes("Linux")) return "Linux";
    if (ua.includes("Android")) return "Android";
    if (ua.includes("iPhone") || ua.includes("iPad")) return "iOS";
    return "Unknown OS";
}

function getDevice(){
    const ua = navigator.userAgent;
    if (/Mobi|Android/i.test(ua)) return "Mobile";
    if (/Tablet|iPad/i.test(ua)) return "Tablet";
    return "Desktop";
}

function getConnection(){
    const c = navigator.connection || navigator.mozConnection || navigator.webkitConnection;
    if (!c) return "Not available";
    return c.effectiveType ? c.effectiveType.toUpperCase() : (c.type || "Unknown");
}

function reveal(){
    const t0 = performance.now();
    const collected = {
        browser: getBrowserInfo(),
        os: getOS(),
        screen: `${screen.width} x ${screen.height} px`,
        timezone: Intl.DateTimeFormat().resolvedOptions().timeZone,
        language: navigator.language || "Unknown",
        device: getDevice(),
        cpu: navigator.hardwareConcurrency ? `${navigator.hardwareConcurrency} cores` : "Not disclosed",
        ram: navigator.deviceMemory ? `~${navigator.deviceMemory} GB` : "Not disclosed",
        connection: getConnection(),
        dnt: navigator.doNotTrack === "1" ? "Enabled (but likely ignored)" : "Not enabled",
        cookies: navigator.cookieEnabled ? "Yes -- tracking is possible" : "Blocked",
        referrer: document.referrer ? document.referrer : "Direct visit (no referrer)"
    };
    const elapsed = (performance.now() - t0).toFixed(2);
    document.getElementById("optin").style.display = "none";
    const results = document.getElementById("results");
    results.classList.add("visible");
    const grid = document.getElementById("cards");
    dataPoints.forEach((dp, i) => {
        const card = document.createElement("div");
        card.className = "dm-card";
        card.innerHTML = `
            <div class="dm-card-top">
                <span class="dm-label">${dp.label}</span>
                <span class="dm-badge">${dp.badge}</span>    
            </div>
            <div class="dm-value">${collected[dp.key]}</div>
            <div class="dm-why">${dp.why}</div>
            `;
            grid.appendChild(card);
            setTimeout(() => card.classList.add("shown"), 80 * i);
    });
    const unavailable = ["Not disclosed", "Not available"];
    const actualCount = dataPoints.filter(dp => !unavailable.includes(collected[dp.key])).length;
    document.getElementById("count-line").textContent = `${actualCount} data points collected -- in ${elapsed} milliseconds.`;
}

document.addEventListener('DOMContentLoaded', () => {
    document.getElementById('reveal-btn').addEventListener('click', reveal);

    document.getElementById('protect-btn').addEventListener('click', () => {
        window.location.href = 'resources.php';
    });
});