const mix = require('laravel-mix');

require('mix-tailwindcss');
require('laravel-mix-polyfill');

mix.ts('resources/ts/index.tsx', 'public/js')
  .polyfill({
    enabled: true,
    useBuiltIns: 'usage',
    targets: { 'chrome': '58', "firefox": '50', 'ie': 10 }
  })
  .sass('resources/sass/app.scss', 'public/css')
  .tailwind()  
  .webpackConfig({
    module: {
      rules: [
        {
          test: /\.tsx?$/,
          loader: 'ts-loader',
          exclude: /node_modules/
        }
      ]
    }
  })
  .sourceMaps(false, 'source-map')
  .extract()
  .version();