=== WP Client Ajax Login ===
Contributors: enricodeleo
Tags: login,ajax,client
Requires at least: 3.5
Tested up to: 4.0
Stable tag: 0.1.5
License: MIT
License URI: https://github.com/enricodeleo/wpClientAjaxLogin/blob/master/LICENSE.md

A simple plugin that allows login to wordpress through the client's browser via AJAX.

== Description ==

This plugin is an helper and doesn't add anything to your wordpress theme. You might want to use it in conjunction
with your frontend custom code.

You can use vanilla Javascript, Angular, or any framework that suits your needs. 

Here's an example with jQuery:

`
$.ajax({
    type: "POST",
    url: "http://yoursite.dev/wp-admin/admin-ajax.php", //change this url acoording to your wp site
    data: {
        user: "username",
        pwd: "password",
        action: "clientAjaxLogin"
    },
    success: function(resp) {
        var respObj = JSON.parse( resp );
        if( respObj.success ) {
            window.location = respObj.success;
        } else {
            console.log( respObj.error );
        }
    }
});
`

Of course you can bind the ajax call to an event like submitting a form.


== Installation ==
Download this plugin and extract it to your wp-content/plugins directory, activate it.