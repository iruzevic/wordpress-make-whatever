/* eslint-disable import/no-dynamic-require, global-require */

/**
 * This is a main entrypoint for Webpack config.
 * All the settings are pulled from node_modules/@eightshift/frontend-libs/webpack.
 * We are loading mostly used configuration but you can always override or turn off the default setup and provide your own.
 * Please referer to Eightshift-libs wiki for details.
 *
 * @since 4.0.0 Moved to eightshift-libs.
 * @since 1.0.0
 */
module.exports = (env, argv) => {

  const projectConfig = {
    config: {
      projectDir: __dirname, // Current project directory absolute path.
      projectUrl: 'dev.eightshift-internal.com', // Used for providing browsersync functionality.
      projectPath: 'wp-content/themes/whatever', // Project path relative to project root.
    },
  };

  // Generate webpack config for this project using options object.
  return require('./node_modules/@eightshift/frontend-libs/webpack')(argv.mode, projectConfig);
};
