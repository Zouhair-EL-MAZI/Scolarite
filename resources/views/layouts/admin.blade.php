<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title ?? 'Institutional Control Center' }}</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '#002045',
                        'primary-container': '#1a365d',
                        background: '#f8fafc',
                        surface: '#ffffff',
                        'surface-container-low': '#f1f4f6',
                        outline: '#74777f',
                        error: '#ef4444',
                        'on-primary': '#ffffff',
                        'on-surface': '#0f172a',
                    },
                    fontFamily: {
                        headline: ['Manrope'],
                        body: ['Inter'],
                    },
                    boxShadow: {
                        soft: '0 18px 48px rgba(15, 23, 42, 0.08)',
                    },
                },
            },
        };
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        body {
            font-family: 'Inter', sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Manrope', sans-serif;
        }

        /* Responsive utilities */
        @media (max-width: 640px) {
            /* Mobile: Full width */
            main {
                min-height: calc(100vh - 64px);
            }
        }

        @media (min-width: 641px) and (max-width: 1023px) {
            /* Tablet: Full width */
            main {
                min-height: calc(100vh - 80px);
            }
        }

        @media (min-width: 1024px) {
            /* Desktop: Account for sidebar */
            main {
                min-height: calc(100vh - 96px);
                transition: margin-left 0.3s ease-in-out;
            }
        }

        /* Smooth transitions for sidebar */
        aside {
            transition: transform 0.3s ease-in-out;
        }

        /* Sidebar collapsed state */
        main.sidebar-collapsed {
            margin-left: 0 !important;
        }

        /* Responsive grid adjustments */
        @media (max-width: 640px) {
            .grid-cols-1 {
                grid-template-columns: repeat(1, minmax(0, 1fr));
            }
        }

        @media (min-width: 641px) and (max-width: 1023px) {
            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (min-width: 1024px) {
            .xl\:grid-cols-4 {
                grid-template-columns: repeat(4, minmax(0, 1fr));
            }
        }
    </style>
</head>

<body class="bg-background text-on-surface min-h-screen">
    @yield('content')
</body>

</html>
