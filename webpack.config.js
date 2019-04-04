// Adapted from:
// https://wordpress.org/gutenberg/handbook/designers-developers/developers/tutorials/javascript/js-build-setup/

const path = require('path');
const VueLoaderPlugin = require('vue-loader/lib/plugin');
const NODE_ENV = process.env.NODE_ENV || 'development';
module.exports = {
  mode: NODE_ENV,
  entry: path.join(__dirname, 'js/intro/index.js'),

  output: {
    path: path.join(__dirname, 'js/dist'),
    filename: 'intro.build.js'
  },

  module: {
    rules: [
      {
        test: /.js$/,
        exclude: /node_modules/,
        loader: 'babel-loader'
      },
      {
        test: /.vue$/,
        exclude: /node_modules/,
        loader: 'vue-loader'
      }
    ],
  },
  plugins: [
    new VueLoaderPlugin()
  ]
};
