/** import external dependencies */
import 'jquery';
import 'bootstrap';
import 'bootstrap/dist/js/bootstrap.min';

/** import local dependencies */
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';
import topnav_clickable from './bootstrap_topnav_clickable.js';


/**
 * Populate Router instance with DOM routes
 * @type {Router} routes - An instance of our router
 */
const routes = new Router({
  /** All pages */
  common,
  /** Home page */
  home,
  /** About Us page, note the change from about-us to aboutUs. */
  aboutUs,

  topnav_clickable,
});

/** Load Events */
jQuery(document).ready(() => routes.loadEvents());
