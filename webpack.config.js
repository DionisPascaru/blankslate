const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const TerserPlugin = require('terser-webpack-plugin'); // Optional: For JS minification

module.exports = {
    mode: 'development',
    entry: ['./js/main.js', './scss/main.scss'],
    output: {
        filename: 'js/bundle.min.js',
        path: path.resolve(__dirname, 'dist'),
        clean: true,
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: 'babel-loader',
            },
            {
                test: /\.css$/,
                use: [
                    MiniCssExtractPlugin.loader, // Extract CSS to separate file
                    'css-loader',
                ],
            },
            {
                test: /\.scss$/,
                use: [
                    MiniCssExtractPlugin.loader, // Extract compiled SCSS to a CSS file
                    'css-loader', // Translates CSS into CommonJS
                    'sass-loader', // Compiles SCSS to CSS
                ],
            },
        ],
    },
    optimization: {
        minimize: true,
        minimizer: [
            new TerserPlugin({
                terserOptions: {
                    compress: { drop_console: true },
                },
            }),
        ],
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: '../scss/main.css', // Output compiled CSS
        }),
    ],
    devServer: {
        static: path.resolve(__dirname, 'dist'),
        hot: true,
        watchFiles: ['js/**/*.js', 'scss/**/*.scss'], // Ensure Webpack watches SCSS files
    },
    watchOptions: {
        ignored: /scss\/main.css$/,
        aggregateTimeout: 300,
        poll: 1000,
    },
};
