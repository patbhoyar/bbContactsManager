<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel PHP Framework</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="css/view.css"/>
</head>
<body>
    
    <div class="container">
        <header class="container">
            <h1>Contacts Manager</h1>
        </header>

        <div class="btn btn-primary">Add Contact</div>
        
        <div class="">
            
        </div>
    </div>
    <script src="scripts/underscore.js"></script>
    <script src="scripts/jquery.js"></script>
    <script src="scripts/backbone.js"></script>

    <script>
        (function() {

            window.App = {
                Models: {},
                Views: {},
                Collections: {},
                Router: {}
            };

            window.template = function(id) {
                return _.template($("#" + id).html());
            };

            window.vent = _.extend({}, Backbone.Events);
        })();
    </script>

    <script src="scripts/Models.js"></script>
    <script src="scripts/Collections.js"></script>
    <script src="scripts/Views.js"></script>
    <script src="scripts/Routers.js"></script>
    <script src="scripts/main.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
