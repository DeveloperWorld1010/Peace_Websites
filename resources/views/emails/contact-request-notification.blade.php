<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Request</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f4f6f8;
            font-family: Arial, Helvetica, sans-serif;
            color: #1f2937;
        }
        .wrapper {
            width: 100%;
            background-color: #f4f6f8;
            padding: 24px 12px;
        }
        .card {
            max-width: 640px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            border: 1px solid #e5e7eb;
        }
        .header {
            background: linear-gradient(135deg, #b91c1c, #ef4444);
            color: #ffffff;
            padding: 24px;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
            line-height: 1.3;
        }
        .header p {
            margin: 8px 0 0;
            font-size: 14px;
            opacity: 0.95;
        }
        .content {
            padding: 24px;
        }
        .meta {
            margin-bottom: 20px;
            font-size: 14px;
            color: #4b5563;
        }
        .field {
            margin-bottom: 14px;
        }
        .label {
            display: block;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            color: #6b7280;
            letter-spacing: 0.04em;
            margin-bottom: 6px;
        }
        .value {
            margin: 0;
            font-size: 15px;
            line-height: 1.6;
            color: #111827;
            word-break: break-word;
        }
        .message-box {
            background: #f9fafb;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            padding: 14px;
            white-space: pre-wrap;
        }
        .footer {
            padding: 16px 24px 24px;
            font-size: 12px;
            color: #6b7280;
        }
        @media only screen and (max-width: 600px) {
            .wrapper {
                padding: 12px 8px;
            }
            .header,
            .content,
            .footer {
                padding: 16px;
            }
            .header h1 {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="card">
            <div class="header">
                <h1>New Contact Request</h1>
                <p>A visitor submitted the contact form on your website.</p>
            </div>

            <div class="content">
                <div class="meta">
                    Received at: {{ now()->format('d M Y, h:i A') }}
                </div>

                <div class="field">
                    <span class="label">Name</span>
                    <p class="value">{{ $contactData['name'] ?? 'N/A' }}</p>
                </div>

                <div class="field">
                    <span class="label">Email</span>
                    <p class="value">{{ $contactData['email'] ?? 'N/A' }}</p>
                </div>

                <div class="field">
                    <span class="label">Subject</span>
                    <p class="value">{{ $contactData['subject'] ?? 'No Subject' }}</p>
                </div>

                <div class="field">
                    <span class="label">Message</span>
                    <div class="message-box value">{{ $contactData['message'] ?? '' }}</div>
                </div>
            </div>

            <div class="footer">
                This email was automatically generated from the Contact Us form.
            </div>
        </div>
    </div>
</body>
</html>
