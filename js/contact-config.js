tailwind.config = {
    darkMode: "class",
    theme: {
        extend: {
            colors: {
                "primary": "#6211d4",
                "background-light": "#f7f6f8",
                "background-dark": "#181022",
                "surface-dark": "#201c27",
                "border-dark": "#453b54",
                "text-muted": "#a89db9"
            },
            fontFamily: {
                "display": ["Space Grotesk", "sans-serif"]
            },
            borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
            backgroundImage: {
                'cosmic-gradient': 'radial-gradient(circle at 50% 0%, rgba(98, 17, 212, 0.15) 0%, rgba(24, 16, 34, 0) 50%)',
                'grid-pattern': 'linear-gradient(to right, rgba(255, 255, 255, 0.03) 1px, transparent 1px), linear-gradient(to bottom, rgba(255, 255, 255, 0.03) 1px, transparent 1px)'
            }
        },
    },
}