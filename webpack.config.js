const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const TerserPlugin = require('terser-webpack-plugin');

const isProduction = process.env.NODE_ENV === 'production';

module.exports = {
    entry: './js/main.js',
    output: {
        filename: 'bundle.js',
        path: path.resolve(__dirname, 'dist'),
    },
    mode: isProduction ? 'production' : 'development',
    devtool: isProduction ? false : 'source-map',
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: {
                    loader: 'babel-loader',
                    options: {
                        presets: ['@babel/preset-env'],
                    },
                },
            },
            {
                test: /\.scss$/,
                use: [
                    MiniCssExtractPlugin.loader,
                    'css-loader',
                    'sass-loader'
                ],
            },
            {
                test: /\.(woff|woff2|eot|ttf|otf)$/,
                type: 'asset/resource',
                generator: {
                    filename: './scss/main.css',
                },
            },
        ],
    },
    plugins: [
        new CleanWebpackPlugin(),
        new MiniCssExtractPlugin({ filename: './scss/main.css' }),
    ],
    optimization: {
        minimize: isProduction,
        minimizer: [new TerserPlugin()],
    },
    devServer: {
        static: path.resolve(__dirname, 'dist'),
        hot: true,
        watchFiles: ['js/**/*.js', 'scss/**/*.scss'],
        open: false,
    },
};
