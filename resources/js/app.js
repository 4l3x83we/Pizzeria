import './bootstrap';

import '../sass/app.scss'

import '../js/backend/modules/jQuery';
import * as bootstrap from 'bootstrap';
import '../js/backend/modules/bootstrap_icons';
import '../js/frontend/modules/wow';

// FontAwesome
import "../../node_modules/@fortawesome/fontawesome-free/scss/brands.scss";
import "../../node_modules/@fortawesome/fontawesome-free/scss/solid.scss";
import "../../node_modules/@fortawesome/fontawesome-free/scss/fontawesome.scss";
import "../../node_modules/@fortawesome/fontawesome-free/scss/regular.scss";


import "../../node_modules/jquery.easing/jquery.easing.min";

// Custom
import '../js/frontend/custom';
setTimeout(function () {
    // Adding the class dynamically
    $('#alert').addClass('visually-hidden');
}, 15000);

import.meta.glob([
    '../images/**',
    '../fonts/**',
]);
