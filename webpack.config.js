const webpack = require("webpack");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const MODE = "development";
const enabledSourceMap = MODE === "development";

module.exports = {
  mode: MODE,
  entry: "./src/js/index.js",
  output: {
    path: `${__dirname}/dist`,
    filename: "js/bundle.js",
  },
  module: {
    rules: [
      {
        test: /\.scss/,
        use: [
          {
            loader: MiniCssExtractPlugin.loader,
          },
          {
            loader: "css-loader",
            options: {
              url: false,
              sourceMap: enabledSourceMap,
              importLoaders: 2,
            },
          },
          {
            loader: "sass-loader",
            options: {
              sourceMap: enabledSourceMap,
            },
          },
        ],
      },
      {
        test: /\.(gif|png|jpg|svg)$/,
        type: "dist/images",
      },
    ],
  },
  plugins: [
    new webpack.ProvidePlugin({
      $: "jquery",
      jQuery: "jquery",
      Popper: ["popper.js", "default"],
    }),
    new MiniCssExtractPlugin({
      filename: "css/style.css",
    }),
  ],
  performance: {
    hints: false,
  },
};