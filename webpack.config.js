// Adapted from:
// https://wordpress.org/gutenberg/handbook/designers-developers/developers/tutorials/javascript/js-build-setup/

const path = require('path');
const VueLoaderPlugin = require('vue-loader/lib/plugin');
const NODE_ENV = process.env.NODE_ENV || 'development';
module.exports = {
  mode: NODE_ENV,
  entry: {
    intro: path.join(__dirname, 'js/intro/index.js'),
    news: path.join(__dirname, 'js/news/index.js'),
    regulations: path.join(__dirname, 'js/regulations/index.js'),
    punchclock: path.join(__dirname, 'js/punchclock/index.js'),
    faq: path.join(__dirname, 'js/faq/index.js')
  },

  output: {
    path: path.join(__dirname, 'js/dist'),
    filename: '[name].build.js'
  },

  module: {
    rules: [
      {
        test: /.js$/,
        exclude: /node_modules/,
        use: ['babel-loader']
      },
      {
        test: /.vue$/,
        exclude: /node_modules/,
        loader: 'vue-loader'
      },
      {
        test: /.scss$/,
        exclude: /node_modules/,
        use: [
          'vue-style-loader',
          'css-loader',
          'sass-loader'
        ]
      }
    ]
  },
  plugins: [
    new VueLoaderPlugin()
  ]
};
