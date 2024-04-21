(function() {

    var db = {

        loadData: function(filter) {
            return $.grep(this.categories, function(category) {
                return (!filter.Name || category.Name.indexOf(filter.Name) > -1)
                    && (filter.order_number === undefined || category.order_number === filter.order_number)
                    && (!filter.name || category.name === filter.name)
            });
        },

        insertItem: function(insertingCategory) {
            this.categories.push(insertingCategory);
        },

        updateItem: function(updatingCategory) { },

        deleteItem: function(deletingCategory) {
            var categoryIndex = $.inArray(deletingClient, this.categories);
            this.categories.splice(categoryIndex, 1);
        }

    };

    window.db = db;


    db.categories = [
        {
            "Name": "category 1",
            "Order_number": 61,

        },
        {
            "Name": "Connor Johnston",
            "Order_number": 55,


        },
        {
            "Name": "Lacey Hess",
            "Order_number": 20,

        },
        {
            "Name": "Timothy Henson",
            "Order_number": 30,

        },
        {
            "Name": "Ramona Benton",

            "Order_number": 12,
        },
        {
            "Name": "Ezra Tillman",
            "Order_number": 15,

        },
        {
            "Name": "Dante Carter",
            "Order_number": 96,

        },
        {
            "Name": "Christopher Mcclure",
            "Order_number": 98,

        },
        {
            "Name": "Ruby Rocha",
            "Order_number": 112,

        },
     


    ];

}());
