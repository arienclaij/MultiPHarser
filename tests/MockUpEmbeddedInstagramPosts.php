<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram Citaat Blok</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            padding: 40px;
            background: linear-gradient(135deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .instagram-quote {
            background: white;
            border-radius: 8px;
            max-width: 550px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        .quote-header {
            display: flex;
            align-items: center;
            padding: 14px 16px;
            border-bottom: 1px solid #dbdbdb;
            position: relative;
        }

        .instagram-logo {
            position: absolute;
            top: 14px;
            right: 16px;
            width: 24px;
            height: 24px;
        }

        .header-avatar {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 14px;
            margin-right: 12px;
        }

        .header-info {
            flex: 1;
        }

        .username {
            font-weight: 600;
            color: #262626;
            font-size: 14px;
            margin: 0;
        }

        .location {
            color: #8e8e8e;
            font-size: 12px;
            margin: 2px 0 0 0;
        }

        .quote-content {
            padding: 16px;
            font-size: 15px;
            line-height: 1.5;
            color: #262626;
            margin: 0;
        }

        .quote-footer {
            padding: 0 16px 16px 16px;
        }

        .post-date {
            color: #8e8e8e;
            font-size: 12px;
            text-transform: uppercase;
            margin: 0;
        }

        .post-image {
            width: 100%;
            aspect-ratio: 1 / 1;
            object-fit: cover;
            display: block;
        }

        .interaction-bar {
            display: flex;
            gap: 16px;
            padding: 6px 16px 8px 16px;
        }

        .interaction-icon {
            color: #262626;
            cursor: pointer;
            transition: opacity 0.2s;
        }

        .interaction-icon:hover {
            opacity: 0.6;
        }
    </style>
</head>
<body>
<blockquote class="instagram-quote">
    <div class="quote-header">
        <div class="header-avatar">SM</div>
        <div class="header-info">
            <p class="username">sarahmolen</p>
            <p class="location">Amsterdam, Nederland</p>
        </div>
        <svg class="instagram-logo" viewBox="0 0 24 24" fill="none">
            <defs>
                <linearGradient id="instagram-gradient" x1="0%" y1="100%" x2="100%" y2="0%">
                    <stop offset="0%" style="stop-color:#f09433;stop-opacity:1" />
                    <stop offset="25%" style="stop-color:#e6683c;stop-opacity:1" />
                    <stop offset="50%" style="stop-color:#dc2743;stop-opacity:1" />
                    <stop offset="75%" style="stop-color:#cc2366;stop-opacity:1" />
                    <stop offset="100%" style="stop-color:#bc1888;stop-opacity:1" />
                </linearGradient>
            </defs>
            <rect x="2" y="2" width="20" height="20" rx="5" stroke="url(#instagram-gradient)" stroke-width="2"/>
            <circle cx="12" cy="12" r="4" stroke="url(#instagram-gradient)" stroke-width="2"/>
            <circle cx="18" cy="6" r="1.5" fill="url(#instagram-gradient)"/>
        </svg>
    </div>

    <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=600&h=600&fit=crop" alt="Instagram post" class="post-image">

    <div class="interaction-bar">
        <svg class="interaction-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
        </svg>
        <svg class="interaction-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/>
        </svg>
        <svg class="interaction-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <line x1="22" y1="2" x2="11" y2="13"/>
            <polygon points="22 2 15 22 11 13 2 9 22 2"/>
        </svg>
    </div>

    <p class="quote-content">
        "Soms zijn de beste momenten die je niet plant. Spontane avonturen, onverwachte ontmoetingen, en de kleine dingen die je doet lachen. Dát is waar het leven om draait. 🌟✨"
    </p>

    <div class="quote-footer">
        <p class="post-date">15 november 2025</p>
    </div>
</blockquote>
</body>
</html>