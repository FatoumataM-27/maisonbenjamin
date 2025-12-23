<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nouveau message de contact</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #5A5CA0;
            color: white;
            padding: 15px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .content {
            padding: 20px;
            border: 1px solid #ddd;
            border-top: none;
            border-radius: 0 0 5px 5px;
        }
        .field {
            margin-bottom: 15px;
        }
        .label {
            font-weight: bold;
            color: #5A5CA0;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Nouveau message de contact</h1>
        </div>
        <div class="content">
            <div class="field">
                <p class="label">Nom:</p>
                <p>{{ $data['nom'] }}</p>
            </div>
            <div class="field">
                <p class="label">Email:</p>
                <p>{{ $data['email'] }}</p>
            </div>
            <div class="field">
                <p class="label">Sujet:</p>
                <p>{{ $data['sujet'] }}</p>
            </div>
            <div class="field">
                <p class="label">Message:</p>
                <p>{{ nl2br(e($data['message'])) }}</p>
            </div>
        </div>
        <div class="footer">
            <p>Ce message a été envoyé depuis le formulaire de contact du site Maison Benjamin.</p>
        </div>
    </div>
</body>
</html>
