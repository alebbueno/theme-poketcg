const MiniCssExtractPlugin = require("mini-css-extract-plugin");
//const RemoveEmpytScriptsPlugin = require('webpack-remove-empty-scripts');
const BrowserSyncPlugin = require("browser-sync-webpack-plugin");
var path = require("path");
const webpack = require('webpack');

// change these variables to fit your project
const jsPath = "./js";
const sassPath = "./sass";
const outputPath = "./assets/dist";
const localDomain = "http://localhost:8000";
const entryPoints = {
  // 'app' is the output name, people commonly use 'bundle'
  // you can have more than 1 entry point
  app: jsPath + "/app.js",
  //app: sassPath + "/style.scss"
};

module.exports = {
  externals: {
    $: 'jquery',
    jQuery: 'jquery',
  },
  entry: entryPoints,
  output: {
    path: path.resolve(__dirname, outputPath),
    filename: "[name].js",
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: "[name].css",
    }),

    // Uncomment this if you want to use CSS Live reload
    new BrowserSyncPlugin(
      {
        proxy: localDomain,
        files: [
          outputPath + "/*.css",
          outputPath + "/*.js",
          "./**/*.php",
          "./**/*.sass",
        ],
        injectCss: true,
      },
      { reload: false }
    ),
    new webpack.ProvidePlugin({
      $: 'jquery',
      jQuery: 'jquery',
      'window.jQuery': 'jquery',
    }),
  ],
  module: {
    rules: [
      {
        test: /\.s?[c]ss$/i,
        use: [MiniCssExtractPlugin.loader, "css-loader", "sass-loader"],
      },
      {
        test: /\.sass$/i,
        use: [
          MiniCssExtractPlugin.loader,
          "css-loader",
          {
            loader: "sass-loader",
            options: {
              sassOptions: { indentedSyntax: true },
            },
          },
        ],
      },
      {
        test: /\.js$/,
        enforce: "pre",
        use: ["source-map-loader"],
      },
    ],
  },
};
