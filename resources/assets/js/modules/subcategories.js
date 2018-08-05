var subcategories,
    subcat = {
        settings: {
            subcategory: $('#page_form .form-group.subcategory_id'),
            type: $('#subcategory_form #type'),
            content: $('#subcategory_form .form-group.content'),
            name: $('#subcategory_form #name'),
            url_name: $('#subcategory_form #url_name')
        },

        init: function () {
            subcategories = this.settings;
            subcat.bindActions();
        },

        bindActions: function () {
            subcategories.type.on('change', function (event) {
                if (this.value == "1") {
                    subcategories.content.removeClass('hidden');
                }else{
                    subcategories.content.addClass('hidden');
                }
            });
            subcategories.name.on('blur', function (event) {
                //replaces more then one whitespace with one white space
                //trims whitespace after and before the name's value
                //finally replace the whitespace with '-'
                subcategories.url_name.attr('value',this.value.trim().toLowerCase().replace(/\s\s+/g, ' ').replace(/ /g, '-'));
            });
        }
    };

(function() {
    subcat.init();
})();