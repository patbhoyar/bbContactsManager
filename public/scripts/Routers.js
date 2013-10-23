App.Router = Backbone.Router.extend({
    routes:{
        '': 'showAllContacts',
        'edit/:id': 'editContact',
        'add'   : 'addContact'
    },
    
    showAllContacts: function() {
        vent.trigger('show:allContacts');
    },
    
    editContact: function(id) {
        vent.trigger('edit:contact', id);
    },
            
    addContact: function() {
        vent.trigger('add:contact');
    }
});