const mix = require('laravel-mix');

require("laravel-mix-react-typescript-extension");
/*
  .webpackConfig({
    output: {
      path: path.resolve(__dirname, './public_html/')
    }
  })
*/
mix.reactTypeScript('resources/ts/index.tsx', 'public/js')
  .sourceMaps(false, 'source-map')
  .version();
    //.sass('resources/sass/app.scss', 'public/css');