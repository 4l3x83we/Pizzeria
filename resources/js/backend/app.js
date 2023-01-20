import './../backend/bootstrap';

import '../../sass/backend/scss/app.scss';

import '../backend/modules/jQuery';
import '../backend/modules/bootstrap';
import '../backend/modules/bootstrap_icons';
import '../backend/modules/sidebar';
import '../backend/modules/theme';
import '../backend/modules/feather';

// Forms
import '../backend/modules/flatpickr';

// Maps
import '../backend/modules/vector-maps';

// FontAwesome
import "../../../node_modules/@fortawesome/fontawesome-free/scss/brands.scss";
import "../../../node_modules/@fortawesome/fontawesome-free/scss/solid.scss";
import "../../../node_modules/@fortawesome/fontawesome-free/scss/fontawesome.scss";
import "../../../node_modules/@fortawesome/fontawesome-free/scss/regular.scss";

// Custom


setTimeout(function () {
    // Adding the class dynamically
    $('#alert').addClass('visually-hidden');
}, 15000);
