const path = require('path');
const HtmlWebpackPlugin = require('html-webpack-plugin'); // плагин генерации html кода
const {CleanWebpackPlugin} = require('clean-webpack-plugin');// плагин очистки папки dist от неиспользуемого скомпилированного контентаы
// const {ManifestPlugin} = require('webpack-manifest-plugin'); // плагин отслеживания всех генерируемых файлов
const BundleAnalyzerPlugin = require('webpack-bundle-analyzer').BundleAnalyzerPlugin; // Плагин и утилита CLI, представляющая содержимое пакета в виде удобной интерактивной масштабируемой древовидной карты.


module.exports = {

    //параметр мода: development, production

    mode: 'development',

    //точка входа приложения
    entry: './src/index.js',
    //{
    //app: './src/index.js',
    // print: './src/print.js',
    // another: './src/another-module.js'
    //},

    // source map для отслеживания ошибок в компилируемых файлах
    devtool: 'inline-source-map',

    //установленные плагины и их настройки
    plugins: [
        new CleanWebpackPlugin(),
        // new BundleAnalyzerPlugin(),
        // new ManifestPlugin(),
        new HtmlWebpackPlugin({
            title: 'Caching'
        })
    ],

    /**
     * простой сервер c "живой" перезагрузкой при изменении файлов
     * @contentBase точка откуда будут запускаться файлы
     */
    // devServer: {
    //     contentBase: './dist'
    // },

    //выходящие генерируемые файлы

    output: {
        // filename: 'bundle.js',
        // filename: "[name].bundle.js",
        filename: "[name].[contenthash].js",
        chunkFilename: '[name].bundle.js',
        path: path.resolve(__dirname, 'dist'),
        // publicPath: '/'
    },

    // разделение кода модулей и пакетов
    /**
     * @splitChunks chunks предотвращает дублирование подключения одного и того же пакета в разных модулях или пакетах
     * @runtimeChunk создаёт пакет runtime
     * @cacheGroups разделение компилируемых пакетов на вендорные (которые меньше всего подвержены изменениям) и динамические
     * @moduleIds оптимизация мало изменяемых генераций
     */
    //TODO: не ясно для чего конкретно нужно runtimeChunk
    optimization: {
        moduleIds: 'hashed',
        runtimeChunk: 'single',
        splitChunks: {
            // chunks: 'all',
            cacheGroups: {
                vendor: {
                    test: /[\\/]node_modules[\\/]/,
                    name: 'vendors',
                    chunks: 'all'
                }
            }
        }

    }

    //настройка модулей на данный момент установлен модуль для css, js, картинок, шрифтов, xml файлов
    // module: {
    //     rules: [
    //         {
    //             test: /\.css$/,
    //             use: [
    //                 'style-loader',
    //                 'css-loader'
    //             ]
    //         },
    //         {
    //             test: /\.(png|svg|jpg|gif)$/,
    //             use: [
    //                 'file-loader'
    //             ]
    //         },
    //         {
    //             test: /\.(woff|woff2|eot|ttf|otf|svg)$/,
    //             use: [
    //                 'file-loader'
    //             ]
    //         },
    //         {
    //             test: /\.(csv|tsv)$/,
    //             use: [
    //                 'csv-loader'
    //             ]
    //         },
    //         {
    //             test: /\.xml$/,
    //             use: [
    //                 'xml-loader'
    //             ]
    //         }
    //     ]
    // }
};