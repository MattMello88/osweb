window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    window.Bootstrap = require('bootstrap');
} catch (e) {}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });

window.gridjs = require('gridjs');

window.setCookie = function (cname, cvalue, exdays){
    const d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    let expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }

  window.getCookie = function (cname) {
    let name = cname + "=";
    let ca = document.cookie.split(';');
    for(let i = 0; i < ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }

  window.checkLogin = function() {
    let token = getCookie("token");

    fetch(url+'/api/checkLogin', {
      method: "GET",
      headers: [
        ["Accept", "application/json"],
        ["Authorization", "Bearer " + token],
      ]
    })
    .then(function(res){
      return res.json();
    })
    .then(function(data) {
      if (data.Authorization !== undefined){
        if (data.Authorization !== 'true'){
          window.location = url + '/';
        }
      } else {
        window.location = url + '/';
      }
    })
    .catch(function(err){
      window.location = url + '/';
    });

/*
    if (token != "") {
      window.location = url + '/dashboard';
      /*alert("Welcome again " + token);
    } else {
      window.location = url + '/';
      /*token = prompt("Please enter your name:","");
      if (token != "" && token != null) {
        setCookie("token", token, 30);
      }
    }
    */
  }

  window.doLogout = function(event){
      setCookie('token', null, 0);
  }
