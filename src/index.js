import 'jquery';
import 'jquery.nicescroll';
import 'popmotion';
import './style.scss';

import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import singleProduct from './routes/page-template-single-product';
import pageTemplatePageStore from './routes/page-template-page-store';
import singlePost from './routes/single-post';
import woocommerceCheckout from './routes/checkout';

import pageTemplatePageStorev2 from './routes/page-template-page-storev2';

/**
 * Populate Router instance with DOM routes 
 * @type {Router} routes - An instance of our router
 */
const routes = new Router({
  /** All pages */
  common,
  /** Home page */
  home,
  singleProduct,
  pageTemplatePageStore,
  singlePost,
  woocommerceCheckout,
  pageTemplatePageStorev2,
  /** About Us page, note the change from about-us to aboutUs. */
});

/** Load Events */
jQuery(document).ready(() => routes.loadEvents());

