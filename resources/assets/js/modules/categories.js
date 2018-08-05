var categories,
    cat = {
        settings: {
            content: $('#category_form .content'),
            name: $('#category_form #name'),
            url_name: $('#category_form #url_name'),
            type: $('#type'),
            content: $('#category_form .content'),
        },

        init: function () {
            categories = this.settings;
            cat.bindActions();
        },

        bindActions: function () {
            categories.name.on('blur', function (event) {
                //replaces more then one whitespace with one white space
                //trims whitespace after and before the name's value
                //finally replace the whitespace with '-'
                categories.url_name.attr('value',this.value.trim().toLowerCase().replace(/\s\s+/g, ' ').replace(/ /g, '-'));
            });
            categories.type.on('change', function (event) {
                if (this.value == '1') {
                    categories.content.removeClass('hidden');
                }else{
                    categories.content.addClass('hidden');
                }
            });
        }
    };

(function() {
    cat.init();
})();