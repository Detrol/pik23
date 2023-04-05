const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    theme: {
        extend: {
            fontFamily: {
                //sans: ['Inter var', ...defaultTheme.fontFamily.sans],
                sans: ['Nunito'],
            },
            spacing: {
                '8xl': '96rem',
                '9xl': '128rem',
            },
            borderRadius: {
                '4xl': '2rem',
            },
            colors: {
                'primary': '#4fc3e0',
                'secondary': '#98ca3c',
                'footer': '#388987',
            },
            container: {
                center: true,
                padding: '1rem',
            },
        },
    },
    darkMode: 'class',
    variants: {
        extend: {
            backgroundColor: ['active'],
        }
    },
    content: [
        './app/**/*.php',
        "./resources/**/*.blade.php",
        './resources/**/*.html',
        './resources/**/*.js',
        './resources/**/*.jsx',
        './resources/**/*.ts',
        './resources/**/*.tsx',
        './resources/**/*.php',
        './resources/**/*.vue',
        './resources/**/*.twig',
        './node_modules/preline/dist/*.js'
    ],
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('preline/plugin'),
    ],
    mode: process.env.NODE_ENV ? 'jit' : undefined,
}
