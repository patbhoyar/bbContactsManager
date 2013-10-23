App.Views.AppView = Backbone.View.extend({
    initialize: function() {
        vent.on('show:allContacts', this.showAllContacts, this);
        vent.on('edit:contact', this.editContact, this);
        vent.on('add:contact', this.addContact, this);
    },
            
    showAllContacts: function(){
        this.displayElement('table.table');
        var contacts = new App.Collections.Contacts();
        contacts.fetch().then(function(){
              var contactView = new App.Views.Contacts({ collection: contacts });
              contactView.render();
        });
    },
            
    editContact: function(id) {
        this.displayElement('#editContact');
        var con = new App.Models.Contact({id: id});
        con.fetch().then(function(){
            var editView = new App.Views.EditView({model: con});
            editView.render().el;
        });
    },
            
    addContact: function() {
        this.displayElement('#addContact');
        var contacts = new App.Collections.Contacts();
        var newContact = new App.Views.AddContact({ collection: contacts });
        newContact.render();
    },
            
    displayElement: function(ele) {
        $('table.table').css('display', 'none');
        $('#editContact').css('display', 'none');
        $('#addContact').css('display', 'none');
        $(ele).css('display', 'block');
    }   
    
});

App.Views.Contacts = Backbone.View.extend({
    el: 'tbody#contactsBody',
          
    render: function() {
        this.$el.empty();
        this.collection.each(this.addOne, this);
        return this;
    },
    
    addOne: function(contact) {
        var contact = new App.Views.Contact({ model: contact });
        this.$el.append(contact.render().el);
    }
});

App.Views.Contact = Backbone.View.extend({
    tagName: 'tr',
    template: this.template('contactTemplate'),
    
    initialize: function() {
      this.model.on('destroy', this.remove, this);  
    },

    events:{
        'click button.edit': 'editContact',
        'click button.delete': 'deleteContact'
    },
            
    render: function() {
        this.$el.attr('id', this.model.get('id'));
        this.$el.html(this.template(this.model.toJSON()));
        return this;
    },
            
    editContact: function() {
        appRouter.navigate('edit/'+this.$el.attr('id'), { trigger: true });
    },
            
    deleteContact: function() {
        var ans = confirm("Are you sure you want to delete "+ this.model.get('fName')+" "+this.model.get('lName')+"?");
        if(ans === true){
            this.model.destroy();
        }
    },
            
    remove: function() {
        this.$el.remove();
    }
});

App.Views.EditView = Backbone.View.extend({
    el:'#editContact',
    template: this.template('editContactTemplate'),        
    
    events: {
        'click button#saveChanges': 'saveChanges',
        'click button#cancelChanges': 'cancelChanges'
    },
    
    render: function() {
        this.$el.html(this.template(this.model.toJSON()));
        return this;
    },
            
    getContactData: function(){
        return {
            fName: this.$('#fName').val(),
            lName: this.$('#lName').val(),
            email: this.$('#email').val()
        };
    },
            
    saveChanges: function() {
        this.model.set(this.getContactData());
        this.model.save();
        appRouter.navigate('', {trigger: true});
    },
            
    cancelChanges: function() {
        appRouter.navigate('', {trigger: true});
    }        
            
});

App.Views.AddContact = Backbone.View.extend({
    el: '#addContact',
    
    events:{
        'click button#addNewContact': 'addNewContact',
        'click button#cancelNewContact': 'cancelNewContact'
    },
            
    render: function() {
        return this;
    },
            
    getNewContactData: function(){
        return {
            fName: this.$('#fName').val(),
            lName: this.$('#lName').val(),
            email: this.$('#email').val()
        };
    },
            
    addNewContact: function() {
        var newContact = new App.Models.Contacts(this.getNewContactData());
        this.collection.create(newContact);
    },
            
    cancelNewContact: function() {
        appRouter.navigate('', {trigger: true});
    }
    
    
});