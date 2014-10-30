# WP Client Ajax Login

A simple plugin that allows login to wordpress through the client's browser via AJAX.

## How to install

### Composer

If you're using Composer to manage your codebase add this plugin to your dependencies running:

`composer require roots/soil 0.1.0`

Or manually add it to your composer.json:

```
"require": {
  "enricodeleo/wpClientAjaxLogin": "0.1.0"
}
```

### Legacy way

[Download this repo as a zip file ](https://github.com/enricodeleo/wpClientAjaxLogin/archive/0.1.0.zip)and extract it to your wp-content/plugins directory.

# Example of ajax call

You can use vanilla Javascript, Angular, or whatever framework suit your needs. Here's an example with jQuery:

```
$.ajax({
    type: "POST",
    url: "http://tastaly.dev/wp/wp-admin/admin-ajax.php",
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