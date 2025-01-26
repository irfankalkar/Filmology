<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim Formu Mesajı</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .email-header {
            background-color: #007bff;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }
        .email-header h1 {
            margin: 0;
            font-size: 24px;
        }
        .email-body {
            padding: 20px;
            color: #333333;
        }
        .email-body p {
            margin: 10px 0;
            line-height: 1.6;
        }
        .email-body strong {
            color: #007bff;
        }
        .email-footer {
            background-color: #f1f1f1;
            padding: 10px;
            text-align: center;
            font-size: 12px;
            color: #666666;
        }
    </style>
</head>
<body>
    <div class="email-container">

        <div class="email-header">
            <h1>Yeni İletişim Formu Mesajı</h1>
        </div>

        <div class="email-body">
            <p><strong>Ad:</strong> {{ $data['fullNameContant'] }}</p>
            <p><strong>Telefon:</strong> {{ $data['telephoneContant'] }}</p>
            <p><strong>E-posta:</strong> {{ $data['emailContant'] }}</p>
            <p><strong>Konu:</strong> {{ $data['messageSubjectContant'] }}</p>
            <p><strong>Mesaj:</strong> {{ $data['messageContant'] }}</p>
        </div>

        <div class="email-footer">
            <p>Bu e-posta otomatik olarak gönderilmiştir. Lütfen yanıtlamayınız.</p>
        </div>
    </div>
</body>
</html>