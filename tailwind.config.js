const colors = require('tailwindcss/colors');

module.exports = {
    mode: 'jit',
    purge: [
        './app/Http/Controllers/**/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
    ],
    darkMode: 'media',
    theme: {
        colors: {
            gray: colors.trueGray,
            brand: {
                github: '#333333',
                instagram: '#E1306C',
                twitter: '#1DA1F2',
                roublez: '#3B82F6',
                writeaguide: '#20BA82'
            }
        }
    }
}
