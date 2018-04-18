import 'jquery';
import 'jquery.nicescroll';
import './style.scss';

import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import pageTemplateSingleProduct from './routes/page-template-single-product';
import singlePost from './routes/single-post';

/**
 * Populate Router instance with DOM routes 
 * @type {Router} routes - An instance of our router
 */
const routes = new Router({
  /** All pages */
  common,
  /** Home page */
  home,
  pageTemplateSingleProduct,
  singlePost,
  /** About Us page, note the change from about-us to aboutUs. */
});

/** Load Events */
jQuery(document).ready(() => routes.loadEvents());

