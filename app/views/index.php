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

        <a href="#add" class="btn btn-primary">Add Contact</a>
        
        <table class="table">
            <thead>
                <tr>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Email Address</td>
                </tr>
            </thead>
            <tbody id="contactsBody">
                <script type="text/template" id="contactTemplate">
                    <td><%= fName %></td>
                    <td><%= lName %></td>
                    <td><%= email %></td>
                    <td><button class="edit btn btn-success">Edit</button></td>
                    <td><button class="delete btn btn-danger">Delete</button></td>
                </script>
            </tbody>
        </table>
        
        <div id="editContact">
            <script type="text/template" id="editContactTemplate">
                <label for="fName">First Name</label>
                <input type="text" value="<%= fName %>" id="fName"/>
                <label for="lName">Last Name</label>
                <input type="text" value="<%= lName %>" id="lName"/>
                <label for="email">Email</label>
                <input type="text" value="<%= email %>" id="email"/>
                <br>
                <button class="btn btn-success" id="saveChanges">Save Changes</button>
                <button class="btn btn-danger" id="cancelChanges">Cancel</button>
            </script>
        </div>
        
        <div id="addContact">
            <label for="fName">First Name</label>
            <input type="text" id="fName"/>
            <label for="lName">Last Name</label>
            <input type="text" id="lName"/>
            <label for="email">Email</label>
            <input type="text" id="email"/>
            <br>
            <button class="btn btn-success" id="addNewContact">Add</button>
            <button class="btn btn-danger" id="cancelNewContact">Cancel</button>
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
