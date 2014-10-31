# WP Client Ajax Login

A simple helper plugin that allows login to wordpress through the client's browser via AJAX.

## How to install

### Composer

If you're using Composer to manage your codebase add this plugin to your dependencies running:

`composer require enricodeleo/wp-client-ajax-login 0.1.4`

Or manually add it to your composer.json:

```JSON
"require": {
  "enricodeleo/wp-client-ajax-login": "0.1.4"
}
```

### Legacy way

[Download this repo as a zip file ](https://github.com/enricodeleo/wpClientAjaxLogin/archive/0.1.4.zip) and extract it
to your wp-content/plugins directory.

OR

Install this plugin via the official Wordpress Plugin resgistry [https://wordpress.org/plugins/wp-client-ajax-login/admin/](available here).

# Usage

This plugin is an helper and doesn't add anything to your wordpress theme. You might want to use it in conjunction
with your frontend custom code.

You can use vanilla Javascript, Angular, or any framework that suits your needs. 

_Here's an example with jQuery:_

```JavaScript
$.ajax({
    type: "POST",
    url: "http://yoursite.dev/wp-admin/admin-ajax.php", //change this url acoording to your wp site
    data: {
        user: "username", //hard-coded for example purposes
        pwd: "password", //hard-coded for example purposes
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
```

Of course you can bind the ajax call to an event like submitting a form.