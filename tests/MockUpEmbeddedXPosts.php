<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X Citaat Blok</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            padding: 40px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .x-quote {
            background: white;
            border-radius: 16px;
            padding: 24px;
            max-width: 550px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
            position: relative;
            border: 1px solid #e1e8ed;
        }

        .x-logo {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 28px;
            height: 28px;
            opacity: 0.6;
        }

        .quote-content {
            font-size: 18px;
            line-height: 1.6;
            color: #0f1419;
            margin: 0 0 20px 0;
            padding-right: 40px;
        }

        .quote-meta {
            display: flex;
            align-items: center;
            gap: 12px;
            padding-top: 16px;
            border-top: 1px solid #eff3f4;
        }

        .author-avatar {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 20px;
        }

        .author-info {
            flex: 1;
        }

        .author-name {
            font-weight: bold;
            color: #0f1419;
            font-size: 15px;
            margin: 0 0 2px 0;
        }

        .author-handle {
            color: #536471;
            font-size: 14px;
            margin: 0;
        }

        .quote-date {
            color: #536471;
            font-size: 14px;
            white-space: nowrap;
        }
    </style>
</head>
<body>
<blockquote class="x-quote">
    <svg class="x-logo" viewBox="0 0 24 24" aria-hidden="true">
        <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" fill="currentColor"/>
    </svg>

    <p class="quote-content">
        "De kracht van een goed ontworpen interface ligt niet in wat je toevoegt, maar in wat je weglaat. Eenvoud is de ultieme vorm van verfijning."
    </p>

    <div class="quote-meta">
        <div class="author-avatar">JD</div>
        <div class="author-info">
            <p class="author-name">Jan de Vries</p>
            <p class="author-handle">@jandevries</p>
        </div>
        <div class="quote-date">15 nov 2025</div>
    </div>
</blockquote>
</body>
</html>