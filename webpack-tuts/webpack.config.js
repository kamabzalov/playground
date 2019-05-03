'use strict'

const NODE_ENV = process.env.NODE_ENV || 'development';
const webpack = require('webpack');

module.exports = {
    context: __dirname + 'frontend',
    entry: {
        home: './home',
        about: './about',
        common: './common'
    }, // точка входа в проект

    output: {
        path: 'public',
        filename: '[name].js', // имя выходного файла
        library: '[name]'
    },
    watch: NODE_ENV == 'development', // отслеживать изменения  
    watchOptions: {
        aggregateTimeout: 100 // время, после которого запускается автоматическая сборка
    },
    devtool: NODE_ENV == 'development' ? 'source-map' : null,
    plugins: [
        new webpack.NoErrorsPlugin(),
        new webpack.EnvironmentPlugin({
            NODE_ENV: JSON.stringify(NODE_ENV),
            LANG: 'ru'
        }),
        new webpack.optimize.CommonsChunkPlugin({
            name: 'common',
            chunks: ['about', 'home']
        }),
        new webpack.ProvidePlugin({
            pluck: 'lodash/collection/pluck',
            _: 'lodash'
        }),
    ],
    module: {
        loaders: [{
            test: /\.js$/,
            // exclude - исключить из сборки
            loader: 'babel'
        }]
    },
    externals: { // внешние зависимости
        lodash: "_",
    },
    resolve: {
        root:  '/folder'    // здесь тоже будут искаться модули
        alias: {
            old: 'old/dist/old'
        }
    }
}