tailwind.config = {
    darkMode: "class",
    theme: {
        extend: {
            colors: {
                "primary": "#6211d4",
                "background-light": "#f7f6f8",
                "background-dark": "#141118",
                "surface-dark": "#1e1a24",
                "border-dark": "#2f2839",
            },
            fontFamily: {
                "display": ["Space Grotesk", "sans-serif"],
                "body": ["Noto Sans", "sans-serif"],
            },
            backgroundImage: {
                'cosmic-gradient': 'radial-gradient(circle at 50% 0%, rgba(98, 17, 212, 0.15) 0%, rgba(20, 17, 24, 0) 70%)',
            }
        },
    },
}