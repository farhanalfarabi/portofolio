<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Farhan Alfaraby | Fullstack Developer & UI/UX Designer')</title>
    <link rel="icon" type="image/png" href="{{ asset('images/foto/foto-aku.png') }}" />

    <!-- Tailwind CDN (must load before config script) -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400&family=Newsreader:ital,opsz,wght@0,6..72,400;1,6..72,400&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet" />
    <!-- Devicon CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">

    <!-- Tailwind design-token config (must be inline, before CDN applies classes) -->
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "surface": "#fcf9f0",
                        "surface-dim": "#dddad1",
                        "surface-bright": "#fcf9f0",
                        "surface-container-lowest": "#ffffff",
                        "surface-container-low": "#f6f3ea",
                        "surface-container": "#f1eee5",
                        "surface-container-high": "#ebe8df",
                        "surface-container-highest": "#e5e2da",
                        "surface-variant": "#e5e2da",
                        "surface-tint": "#645d57",
                        "on-surface": "#1c1c17",
                        "on-surface-variant": "#4c463f",
                        "inverse-surface": "#31312b",
                        "inverse-on-surface": "#f4f1e8",
                        "primary": "#14100c",
                        "on-primary": "#ffffff",
                        "primary-container": "#2a2520",
                        "on-primary-container": "#948c85",
                        "primary-fixed": "#ebe1d9",
                        "primary-fixed-dim": "#cec5bd",
                        "on-primary-fixed": "#1f1b16",
                        "on-primary-fixed-variant": "#4c4640",
                        "inverse-primary": "#cec5bd",
                        "secondary": "#755841",
                        "on-secondary": "#ffffff",
                        "secondary-container": "#fdd5b7",
                        "on-secondary-container": "#785b43",
                        "secondary-fixed": "#ffdcc2",
                        "secondary-fixed-dim": "#e5bfa2",
                        "on-secondary-fixed": "#2b1705",
                        "on-secondary-fixed-variant": "#5c412b",
                        "tertiary": "#101114",
                        "on-tertiary": "#ffffff",
                        "tertiary-container": "#252629",
                        "on-tertiary-container": "#8d8d90",
                        "tertiary-fixed": "#e3e2e6",
                        "tertiary-fixed-dim": "#c7c6ca",
                        "on-tertiary-fixed": "#1a1b1e",
                        "on-tertiary-fixed-variant": "#46474a",
                        "outline": "#7e766e",
                        "outline-variant": "#cfc5bc",
                        "background": "#fcf9f0",
                        "on-background": "#1c1c17",
                        "error": "#ba1a1a",
                        "on-error": "#ffffff",
                        "error-container": "#ffdad6",
                        "on-error-container": "#93000a",
                        "border-low-contrast": "#D1C7BC",
                        "accent-gold": "#F2B134",
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "2xl": "1rem",
                        "3xl": "1.5rem",
                        "full": "9999px",
                    },
                    spacing: {
                        "stack-xl": "8rem",
                        "stack-lg": "4rem",
                        "stack-md": "2rem",
                        "stack-sm": "1rem",
                        "margin-page": "4rem",
                        "gutter-grid": "2rem",
                    },
                    fontFamily: {
                        "display-xl": ["Archivo"],
                        "headline-lg": ["Archivo"],
                        "headline-lg-italic": ["Newsreader"],
                        "label-caps": ["Archivo"],
                        "body-lg": ["Newsreader"],
                        "body-md": ["Newsreader"],
                        "nav-number": ["Archivo"],
                    },
                    fontSize: {
                        "display-xl": ["88px", { lineHeight: "96px", letterSpacing: "-0.02em", fontWeight: "600" }],
                        "display-xl-mobile": ["48px", { lineHeight: "52px", letterSpacing: "-0.01em", fontWeight: "600" }],
                        "headline-lg": ["48px", { lineHeight: "56px", fontWeight: "600" }],
                        "headline-lg-italic": ["48px", { lineHeight: "56px", fontWeight: "400" }],
                        "label-caps": ["12px", { lineHeight: "16px", letterSpacing: "0.15em", fontWeight: "600" }],
                        "body-lg": ["20px", { lineHeight: "32px", fontWeight: "400" }],
                        "body-md": ["16px", { lineHeight: "24px", fontWeight: "400" }],
                        "nav-number": ["11px", { lineHeight: "14px", letterSpacing: "0.05em", fontWeight: "500" }],
                    },
                }
            }
        }
    </script>

    <!-- Custom styles -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />

    @stack('styles')
</head>

<body class="bg-surface text-on-surface selection:bg-accent-gold/30">

    <!-- Cursor glow overlay -->
    <div id="cursor-glow"></div>

    @yield('content')

    <script src="{{ asset('js/main.js') }}"></script>
    @stack('scripts')
</body>

</html>
