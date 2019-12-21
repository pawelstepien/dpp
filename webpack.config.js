const path = require('path');
const CleanWebpackPlugin = require('clean-webpack-plugin');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const webpack = require('webpack');
const extractPlugin = new ExtractTextPlugin({
    filename: './app.css'
});
const UglifyJsPlugin = require('uglifyjs-webpack-plugin');
const tinyPngWebpackPlugin = require('tinypng-webpack-plugin');

module.exports = {
    context: path.resolve(__dirname, "./assets/js/"),
    entry: {
        app: './app.js'
      },
    output: {
        filename: 'app.js',
        path: path.resolve(__dirname, './build/')
    },
    plugins: [
        new CleanWebpackPlugin(['dist']),
        new UglifyJsPlugin({include: /\/build/}),
        extractPlugin,
        // new tinyPngWebpackPlugin({
        //     key: 'txGxr550zSlp34GJXt4pWr0QC4WY7Slr' //USE ONLY TO MAKE PRODUCTION BUILD
        // })
    ],
    module: {
      rules: [
        {
          test: /\.js$/,
          include: /assets/,
          exclude: /node_modules/,
          use: {
            loader: "babel-loader",
            options: {
              presets: ['env']
            }
          }
        },
        {
            test: /\.scss$/,
            include: [path.resolve('./assets/scss/')],
            use: extractPlugin.extract({
              use: ['css-loader', 'sass-loader'],
              fallback: 'style-loader'
            })
        },
        {
            test: /\.(jpg|png|gif|svg)$/,
            use: [
              {
                loader: 'file-loader',
                options: {
                  name: '[name].[ext]',
                  outputPath: './media/'
                }
              }
            ]
          }
      ]
    },
    //USE SOURCEMAP ONLY ON DEV
    //   devtool: 'inline-source-map'
};