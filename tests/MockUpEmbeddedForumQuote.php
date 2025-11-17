<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum Blockquote</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
        }

        .forum-post {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }

        .post-header {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 1px solid #e0e0e0;
        }

        .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            margin-right: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
        }

        .user-info {
            flex: 1;
        }

        .username {
            font-weight: bold;
            color: #333;
        }

        .post-date {
            font-size: 12px;
            color: #888;
        }

        .forum-quote {
            position: relative;
            background: #f9f9f9;
            border-left: 4px solid #667eea;
            border-radius: 4px;
            margin: 15px 0;
            overflow: hidden;
        }

        .forum-quote.collapsible .quote-content {
            max-height: 150px;
            overflow: hidden;
            transition: max-height 0.4s ease;
        }

        .forum-quote.collapsible.expanded .quote-content {
            max-height: none;
        }

        .quote-header {
            background: #f0f0f0;
            padding: 8px 15px;
            font-size: 13px;
            color: #666;
            border-bottom: 1px solid #e0e0e0;
        }

        .quote-author {
            font-weight: bold;
            color: #667eea;
        }

        .quote-content {
            padding: 15px;
            color: #555;
            line-height: 1.6;
        }

        .gradient-overlay {
            position: absolute;
            bottom: 50px;
            left: 0;
            right: 0;
            height: 80px;
            background: linear-gradient(to bottom, transparent, #f9f9f9 90%);
            pointer-events: none;
            opacity: 1;
            transition: opacity 0.3s ease;
        }

        .forum-quote.expanded .gradient-overlay {
            opacity: 0;
        }

        .quote-toggle-container {
            background: #f9f9f9;
            padding: 10px;
            text-align: center;
            border-top: 1px solid #e8e8e8;
        }

        .quote-toggle-btn {
            background: #667eea;
            color: white;
            border: none;
            padding: 6px 16px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 13px;
            transition: background 0.2s ease;
        }

        .quote-toggle-btn:hover {
            background: #5568d3;
        }

        .post-content {
            line-height: 1.6;
            color: #333;
        }

        /* Nested quote styling */
        .forum-quote .forum-quote {
            border-left-color: #9f7aea;
            background: #fafafa;
        }

        .forum-quote .forum-quote .quote-header {
            background: #f5f5f5;
        }
    </style>
</head>
<body>
<div class="forum-post">
    <div class="post-header">
        <div class="avatar">JD</div>
        <div class="user-info">
            <div class="username">John Doe</div>
            <div class="post-date">17 november 2025, 14:32</div>
        </div>
    </div>

    <div class="post-content">
        <p>Bedankt voor je uitgebreide reactie! Ik heb nog een vraag over het volgende:</p>

        <div class="forum-quote collapsible" id="quote1">
            <div class="quote-header">
                <span class="quote-author">@JanePeterson</span> schreef:
            </div>
            <div class="quote-content">
                <p>Het is belangrijk om te begrijpen dat code highlighting niet alleen gaat om de visuele aspecten, maar ook om gebruiksvriendelijkheid en toegankelijkheid. Wanneer je een syntax highlighter implementeert, moet je rekening houden met verschillende factoren.</p>

                <p>Ten eerste is er de prestatie-overweging. Als je lange codeblokken hebt, kan het renderen van al die spans en kleuren traag worden. Daarom is het verstandig om een lazy-loading mechanisme te implementeren of in ieder geval een collapse functie zoals je hebt gevraagd.</p>

                <p>Ten tweede moet je denken aan de gebruikerservaring. Mensen die code lezen willen vaak snel kunnen scrollen, kopiëren, en navigeren. Een goede regelnummering is essentieel, vooral als mensen naar specifieke regels willen verwijzen in discussies.</p>

                <p>Tot slot is er de kwestie van thema's. Sommige gebruikers geven de voorkeur aan dark mode, anderen aan light mode. Het is goed om beide opties aan te bieden, of nog beter, automatisch te detecteren op basis van de systeemvoorkeuren van de gebruiker.</p>

                <p>Ik hoop dat dit helpt bij je implementatie!</p>
            </div>
            <div class="gradient-overlay"></div>
            <div class="quote-toggle-container">
                <button class="quote-toggle-btn" onclick="toggleQuote('quote1')">
                    <span class="expand-text">▼ Toon volledige quote</span>
                    <span class="collapse-text" style="display:none;">▲ Verberg quote</span>
                </button>
            </div>
        </div>

        <p>Hoe zou je dit aanpakken voor mobiele apparaten? Ik merk dat op kleinere schermen de regelnummering soms voor problemen zorgt.</p>
    </div>
</div>

<div class="forum-post">
    <div class="post-header">
        <div class="avatar" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">MS</div>
        <div class="user-info">
            <div class="username">Mike Smith</div>
            <div class="post-date">17 november 2025, 15:18</div>
        </div>
    </div>

    <div class="post-content">
        <div class="forum-quote collapsible" id="quote2">
            <div class="quote-header">
                <span class="quote-author">@JohnDoe</span> schreef:
            </div>
            <div class="quote-content">
                <p>Hoe zou je dit aanpakken voor mobiele apparaten? Ik merk dat op kleinere schermen de regelnummering soms voor problemen zorgt.</p>

                <div class="forum-quote">
                    <div class="quote-header">
                        <span class="quote-author">@JanePeterson</span> schreef:
                    </div>
                    <div class="quote-content">
                        <p>Het is belangrijk om te begrijpen dat code highlighting niet alleen gaat om de visuele aspecten, maar ook om gebruiksvriendelijkheid en toegankelijkheid.</p>
                    </div>
                </div>
            </div>
            <div class="gradient-overlay"></div>
            <div class="quote-toggle-container">
                <button class="quote-toggle-btn" onclick="toggleQuote('quote2')">
                    <span class="expand-text">▼ Toon volledige quote</span>
                    <span class="collapse-text" style="display:none;">▲ Verberg quote</span>
                </button>
            </div>
        </div>

        <p>Goede vraag! Voor mobiele apparaten kun je een media query gebruiken om de regelnummering te verbergen of smaller te maken. Ook kun je horizontaal scrollen toestaan voor lange coderegels in plaats van ze te wrappen.</p>

        <p>Bijvoorbeeld met een <code>@media (max-width: 768px)</code> kun je de font-size verkleinen en de padding aanpassen.</p>
    </div>
</div>

<script>
    function toggleQuote(id) {
        const quote = document.getElementById(id);
        const expandText = quote.querySelector('.expand-text');
        const collapseText = quote.querySelector('.collapse-text');

        quote.classList.toggle('expanded');

        if (quote.classList.contains('expanded')) {
            expandText.style.display = 'none';
            collapseText.style.display = 'inline';
        } else {
            expandText.style.display = 'inline';
            collapseText.style.display = 'none';
            quote.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    }
</script>
</body>
</html>