<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil Saya</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --bg: #f4f5f7;
            --card-bg: #ffffff;
            --text-main: #111827;
            --text-sub: #6b7280;
            --border: #f0f0f0;
            --accent: #2563eb;
            --accent-bg: #eff6ff;
            --shadow: rgba(0, 0, 0, 0.08);
        }

        [data-theme="dark"] {
            --bg: #0f172a;
            --card-bg: #1e293b;
            --text-main: #f1f5f9;
            --text-sub: #94a3b8;
            --border: #334155;
            --accent: #60a5fa;
            --accent-bg: #1e3a5f;
            --shadow: rgba(0, 0, 0, 0.4);
        }

        body {
            font-family: 'Segoe UI', system-ui, sans-serif;
            background: var(--bg);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
            transition: background 0.2s ease;
        }

        .card {
            position: relative;
            background: var(--card-bg);
            border-radius: 16px;
            box-shadow: 0 4px 20px var(--shadow);
            padding: 40px;
            max-width: 480px;
            width: 100%;
            transition: background 0.2s ease;
        }

        .theme-toggle {
            position: absolute;
            top: 24px;
            right: 24px;
            background: var(--accent-bg);
            color: var(--accent);
            border: none;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            font-size: 16px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .avatar-wrap {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: var(--accent);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            font-weight: 600;
            overflow: hidden;
            border: 4px solid var(--accent);
            box-shadow: 0 0 0 3px var(--card-bg), 0 0 0 6px var(--accent-bg);
        }

        .avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        h1 {
            font-size: 24px;
            color: var(--text-main);
            margin-bottom: 4px;
            text-align: center;
        }

        .subtitle {
            color: var(--text-sub);
            font-size: 14px;
            margin-bottom: 24px;
            text-align: center;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px solid var(--border);
        }

        .info-row:last-of-type {
            border-bottom: none;
        }

        .info-label {
            color: var(--text-sub);
            font-size: 14px;
        }

        .info-value {
            color: var(--text-main);
            font-size: 14px;
            font-weight: 500;
            text-align: right;
        }

        .section-title {
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: var(--text-sub);
            margin: 24px 0 12px;
        }

        .skill-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .skill-tag {
            background: var(--accent-bg);
            color: var(--accent);
            padding: 6px 14px;
            border-radius: 999px;
            font-size: 13px;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <div class="card">
        <button class="theme-toggle" id="themeToggle" title="Ganti tema">🌙</button>

        <div class="avatar-wrap">
            <div class="avatar">
                <img src="{{ $foto }}" alt="{{ $nama }}">
            </div>
        </div>
        <h1>{{ $nama }}</h1>
        <p class="subtitle">Mahasiswa Pendidikan Teknik Informatika</p>

        <div class="info-row">
            <span class="info-label">Asal</span>
            <span class="info-value">{{ $asal }}</span>
        </div>
        <div class="info-row">
            <span class="info-label">Sekolah</span>
            <span class="info-value">{{ $sekolah }}</span>
        </div>

        {{-- Section informasi pribadi --}}
        @if(isset($info_pribadi))
            <div class="section-title">Informasi Pribadi</div>
            @foreach ($info_pribadi as $label => $value)
                <div class="info-row">
                    <span class="info-label">{{ $label }}</span>
                    <span class="info-value">{{ $value }}</span>
                </div>
            @endforeach
        @endif

        <div class="section-title" style="margin-top: 24px;">Sedang Belajar Skill </div>
        <div class="skill-tags">
            @foreach ($skill as $item)
                <span class="skill-tag">{{ $item }}</span>
            @endforeach
        </div>
    </div>

    <script>
        const toggleBtn = document.getElementById('themeToggle');
        const root = document.documentElement;

        // Muat tema yang tersimpan sebelumnya
        const savedTheme = localStorage.getItem('theme') || 'light';
        if (savedTheme === 'dark') {
            root.setAttribute('data-theme', 'dark');
            toggleBtn.textContent = '☀️';
        }

        toggleBtn.addEventListener('click', () => {
            const isDark = root.getAttribute('data-theme') === 'dark';
            if (isDark) {
                root.removeAttribute('data-theme');
                toggleBtn.textContent = '🌙';
                localStorage.setItem('theme', 'light');
            } else {
                root.setAttribute('data-theme', 'dark');
                toggleBtn.textContent = '☀️';
                localStorage.setItem('theme', 'dark');
            }
        });
    </script>
</body>
</html>