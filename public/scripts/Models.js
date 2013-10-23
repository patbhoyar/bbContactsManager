App.Models.Contacts = Backbone.Model.extend({
   methodToURL: {
    'create': 'contacts/create',
    'update': 'contacts/update',
    'delete': 'contacts/delete'
  },

  sync: function(method, model, options) {
        options = options || {};
    
        var arg = '';
        if(method === 'delete')
            arg = '/'+model.get('id');
        else if(method === 'update')
            arg = '/'+model.get('id');
    
    options.url = model.methodToURL[method.toLowerCase()]+arg;

    return Backbone.sync.apply(this, arguments);
  }
});

App.Models.Contact = Backbone.Model.extend({
    default:{
            id:'',
            fName: '',
            lName: '',
            email: ''
    },
    //urlRoot: 'contacts/show'
    
    methodToURL: {
        'read': 'contacts/show',
        'update': 'contacts/update'
      },

      sync: function(method, model, options) {
            options = options || {};

            var arg = '/'+model.get('id');

        options.url = model.methodToURL[method.toLowerCase()]+arg;

        return Backbone.sync.apply(this, arguments);
      }
});