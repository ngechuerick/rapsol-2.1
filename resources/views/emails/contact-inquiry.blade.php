<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>New Inquiry — Nexus Africa</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            background: #f4f4f5;
            color: #18181b;
        }
        .wrap {
            max-width: 580px;
            margin: 32px auto;
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            border: 1px solid #e4e4e7;
        }
        .header {
            background: #18181b;
            padding: 28px 32px;
        }
        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .logo-box {
            width: 28px;
            height: 28px;
            background: #fff;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .logo-inner {
            width: 14px;
            height: 14px;
            background: #18181b;
            border-radius: 3px;
        }
        .logo-text {
            color: #fff;
            font-weight: 700;
            font-size: 16px;
            letter-spacing: -0.01em;
        }
        .badge {
            display: inline-block;
            margin-top: 16px;
            padding: 4px 10px;
            border-radius: 6px;
            background: rgba(245, 158, 11, 0.15);
            border: 1px solid rgba(245, 158, 11, 0.4);
            color: #f59e0b;
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.1em;
        }
        .body {
            padding: 32px;
        }
        .title {
            font-size: 20px;
            font-weight: 700;
            color: #09090b;
            margin-bottom: 6px;
        }
        .subtitle {
            font-size: 13px;
            color: #71717a;
            margin-bottom: 28px;
        }
        .field {
            margin-bottom: 20px;
        }
        .field-label {
            font-size: 10px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.12em;
            color: #a1a1aa;
            margin-bottom: 5px;
        }
        .field-value {
            font-size: 14px;
            color: #18181b;
            font-weight: 500;
        }
        .field-value a {
            color: #d97706;
            text-decoration: none;
        }
        .divider {
            height: 1px;
            background: #f4f4f5;
            margin: 24px 0;
        }
        .message-box {
            background: #fafafa;
            border: 1px solid #f4f4f5;
            border-radius: 8px;
            padding: 16px 20px;
        }
        .message-text {
            font-size: 14px;
            color: #3f3f46;
            line-height: 1.7;
            white-space: pre-wrap;
        }
        .tags {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
            margin-top: 4px;
        }
        .tag {
            display: inline-block;
            padding: 3px 10px;
            border-radius: 999px;
            background: #fef3c7;
            color: #92400e;
            font-size: 12px;
            font-weight: 500;
        }
        .tag-none {
            color: #a1a1aa;
            font-size: 13px;
        }
        .footer {
            padding: 20px 32px;
            background: #fafafa;
            border-top: 1px solid #f4f4f5;
        }
        .footer p {
            font-size: 11px;
            color: #a1a1aa;
            line-height: 1.6;
        }
        .reply-btn {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 24px;
            background: #18181b;
            color: #fff;
            font-size: 13px;
            font-weight: 600;
            border-radius: 8px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="wrap">
        <div class="header">
            <div class="logo">
                <div class="logo-box"><div class="logo-inner"></div></div>
                <span class="logo-text">Nexus Africa</span>
            </div>
            <div class="badge">New Inquiry</div>
        </div>

        <div class="body">
            <div class="title">You have a new contact inquiry</div>
            <div class="subtitle">Submitted via the contact form on nexusafrica.co.ke</div>

            <div class="field">
                <div class="field-label">Full Name</div>
                <div class="field-value">{{ $data['name'] }}</div>
            </div>

            <div class="field">
                <div class="field-label">Email Address</div>
                <div class="field-value"><a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a></div>
            </div>

            @if (!empty($data['company']))
                <div class="field">
                    <div class="field-label">Company / Organisation</div>
                    <div class="field-value">{{ $data['company'] }}</div>
                </div>
            @endif

            @if (!empty($data['phone']))
                <div class="field">
                    <div class="field-label">Phone Number</div>
                    <div class="field-value"><a href="tel:{{ $data['phone'] }}">{{ $data['phone'] }}</a></div>
                </div>
            @endif

            <div class="field">
                <div class="field-label">Services of Interest</div>
                @if (!empty($data['services']))
                    <div class="tags">
                        @foreach ($data['services'] as $service)
                            <span class="tag">{{ $service }}</span>
                        @endforeach
                    </div>
                @else
                    <span class="tag-none">Not specified</span>
                @endif
            </div>

            @if (!empty($data['budget']))
                <div class="field">
                    <div class="field-label">Estimated Budget</div>
                    <div class="field-value">{{ $data['budget'] }}</div>
                </div>
            @endif

            <div class="divider"></div>

            <div class="field">
                <div class="field-label">Message</div>
                <div class="message-box">
                    <div class="message-text">{{ $data['message'] }}</div>
                </div>
            </div>

            <a href="mailto:{{ $data['email'] }}" class="reply-btn"> Reply to {{ $data['name'] }} → </a>
        </div>

        <div class="footer">
            <p>This email was sent from the contact form at nexusafrica.co.ke.<br />
            Received: {{ now()->setTimezone('Africa/Nairobi')->format('D, d M Y \a\t H:i') }} EAT</p>
        </div>
    </div>
</body>
</html>
