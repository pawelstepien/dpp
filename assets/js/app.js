require('../scss/app.scss');

require('./image_imports');

import { initHeader } from './header.js';
initHeader();

import { slider } from './slider.js';
slider();

import { map } from './map.js';
map();

import { removeCheckboxWrapper } from './fix_cf7_checkbox.js';
removeCheckboxWrapper();

import { initCookiesNotification } from './cookies_notification.js';
initCookiesNotification();
