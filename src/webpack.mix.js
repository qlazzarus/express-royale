const mix = require('laravel-mix');
const path = require('path');

mix.ts('resources/ts/index.tsx', 'public/js')
    .webpackConfig({
        module: {
            rules: [
                {
                    test: /\.tsx?$/,
                    loader: 'ts-loader',
                    exclude: /node_modules/,
                },
            ],
        },
        resolve: {
            extensions: ['.ts', '.tsx'],
            alias: {
                '@': path.resolve(__dirname, 'resources/ts/'),
            },
        },
        devtool: 'source-map'
    })
    .options({
        hmrOptions: {
            host: 'localhost',
            port: 8081,
        },
    });

if (mix.inProduction()) {
    mix.version().sourceMaps();
}
