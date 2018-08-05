var pages,
    pag = {
        settings: {
            url_name: $('#url_name'),
            title: $('#title'),
            category: $('#category_id'),
            subcategory: $('#subcategory_id'),
            subcategoryDiv: $('.subcategory_id'),
            bodyAjax: $('body'),
            featuredImageValue: $('#featured-image'),
            static: $('#is_static'),
            type: $('#category_form #type'),
            categoryDiv: $('.category_id'),
            selectedImage: $('.selected-image'),
            tags: $('#category_tags'),

        },

        init: function () {
            pages = this.settings;
            pag.bindActions();
        },

        bindActions: function () {
            pages.title.on('blur', function (event) {
                //replaces more then one whitespace with one white space
                //trims whitespace after and before the title's value
                //finally replace the whitespace with '-'
                pages.url_name.attr('value',this.value.trim().toLowerCase().replace(/\s\s+/g, ' ').replace(/ /g, '-'));
            });
            //get tags by category id
            pages.category.on('change', function (event) {
                pag.getSubCategories(this.value);
                pag.getTags(this.value, 1);
            });

            //get tags by subcategory id
            pages.subcategory.on('change', function (event) {
                if (this.value == '-1'){ // if there is no subcategory selected then get the tags from the categories
                    pag.getTags(pages.category.val(),1);
                }else{
                    pag.getTags(this.value, 2);
                }
            });

            // display categories
            pages.static.on('change', function (event) {
                if( this.value === '0' ) {
                    pages.categoryDiv.removeClass('hidden');
                    if (pages.subcategory.find('option').length > 1){
                        pages.subcategoryDiv.removeClass('hidden');
                    }
                }else{
                    pages.categoryDiv.addClass('hidden');
                    pages.subcategoryDiv.addClass('hidden');
                }
            });
            // display column type
            pages.type.on('change', function (event) {
                this.value === '1' ? pages.category.removeClass('hidden') : pages.category.addClass('hidden');
            });

            //click on feature image
            pages.bodyAjax.on('click', '.select-image',  function(event){
                var imageId = parseInt($(this).attr('id'));
                //add active class for images
                $('.select-image').each(function(){
                    $(this).removeClass('active');
                });
                $(this).addClass('active');
                pages.featuredImageValue.val(imageId);
                pages.selectedImage.attr('src', $(this).attr('src'));
            });
        },

        /**
         * Get subcategories
         * @param int subid
         */
        getSubCategories: function(catId){
            var adminUrl = pag.getUriSegments(1);
            $.ajax({
                type: 'POST',
                data: {
                    'subid' : catId,
                    '_token': $('input[name="_token"]').val()
                },
                url: '/' + adminUrl + '/getsubcategorybyid',
                success: function (data) {
                    pages.subcategory.find('option').remove().end();
                    if (JSON.parse(data).length !== 0){   // check if there is any subcategory
                        var option = '<option value="-1">Select a subcategory</option>';
                        $.each(JSON.parse(data), function (key, value) {
                            option += '<option value="' + key + '">' + value + '</option>';
                        });
                        pages.subcategory.append(option);
                        pages.subcategoryDiv.removeClass('hidden');
                    }else{
                        pages.subcategoryDiv.addClass('hidden');
                    }
                }, 
                error: function (data) {
                    console.log('Error:', data);
                }
            });

        },
        /**
         * Get category tags
         * @param int id
         * @param int type
         */
        getTags: function(id, type){
            var adminUrl = pag.getUriSegments(1);
            $.ajax({
                type: 'POST',
                data: {
                    'id'    : id,
                    'type'  : type,
                    '_token': $('input[name="_token"]').val(),
                },
                url: '/' + adminUrl + '/gettagsbyid',
                success: function (data) {
                    var option = '<option value="-1">None</option>';
                    if (JSON.parse(data).length !== 0) {   // check if there is any tags
                        $.each(JSON.parse(data), function (key, value) {
                            option += '<option value="' + key + '">' + value + '</option>';
                        });
                    }
                    pages.tags.find('option').remove().end();
                    pages.tags.append(option);
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        },
        /**
         * Get uri segments
         * @param string uri
         * @return string
         */
        getUriSegments: function(uri){
            var pathArray = window.location.pathname.split( '/' );
            return pathArray[uri];
        }
    };

(function() {
    pag.init();
})();