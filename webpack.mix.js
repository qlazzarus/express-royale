const mix = require('laravel-mix');
const path = require('path');

require('mix-tailwindcss');
require('laravel-mix-polyfill');

mix.ts('resources/ts/index.tsx', 'public/js')
  .polyfill({
    enabled: true,
    useBuiltIns: 'usage',
    targets: { 'chrome': '58', "firefox": '50', 'ie': 10 }
  })
  .sass('resources/sass/app.scss', 'public/css')
  .tailwind('./tailwind.config.js')
  .sourceMaps(false, 'source-map')
  .extract()
  .webpackConfig({
    resolve: {
      extensions: ['.ts', '.js', '.tsx', '.jsx'],
      alias: {
        '@': path.resolve(__dirname, 'resources/ts/')
      }
    }
  })
  .version();