<?php

use App\Http\Env\Admin;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('frontend/pages/landing');
});

/* Check if page is frontend or backend type */

if(Request::segment(1) !== Admin::getAdminUrl() && Request::segment(1) !== 'category') {
    //get all frontend pages
    Route::get('{slug?}/{slug2?}/{slug3?}', 'PageController@show');
}

Route::get('category', 'CategoryController@index');

Route::get('/contact', ['as' => 'contact', 'uses' => 'Frontend\ContactController@index']);
Route::post('/sendcontact', ['as' => 'contact.store', 'uses' => 'Frontend\ContactController@store']);
Route::get('/review', ['as' => 'review', 'uses' => 'Frontend\ReviewController@index']);
Route::get('/category', ['as' => 'review', 'uses' => 'Frontend\CategoryController@index']);
Route::post('/addComment/id/{pageId}', ['as' => 'comments.store', 'uses' => 'Frontend\CommentsController@store']);
Route::group(['middleware' => 'auth'], function () {
    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});


Route::group(['middleware' => 'web'], function () {
    $getAdminBaseUrl = Admin::getAdminUrl();
    Route::auth();
    //Admin Login
    Route::get('/'.$getAdminBaseUrl.'/login', ['as' => 'login', 'uses' => 'Auth\Admin\LoginController@showLoginForm']);
    Route::post('/'.$getAdminBaseUrl.'/login', 'Auth\Admin\LoginController@login');
    Route::post('/'.$getAdminBaseUrl.'/logout', 'Auth\Admin\LoginController@logout')->name('logout');
    //Admin Registration
    Route::get('/'.$getAdminBaseUrl.'/register', ['as' => 'register', 'uses' => 'Auth\Admin\RegisterController@showRegistrationForm']);
    Route::post('/'.$getAdminBaseUrl.'/register', ['as' => 'register.post', 'uses' => 'Auth\Admin\RegisterController@register']);
    //Categories
    Route::get('/'.$getAdminBaseUrl.'/categories', ['as' => 'categories', 'uses' => 'Admin\CategoriesController@index']);
    Route::get('/'.$getAdminBaseUrl.'/categories/new', ['as' => 'categories.new', 'uses' => 'Admin\CategoriesController@newCategory']);
    Route::post('/'.$getAdminBaseUrl.'/saveCategory', ['as' => 'categories.store', 'uses' => 'Admin\CategoriesController@store']);
    Route::post('/'.$getAdminBaseUrl.'/updateCategory/id/{categoryId}', ['as' => 'category.update', 'uses' => 'Admin\CategoriesController@update']);
    Route::get('/'.$getAdminBaseUrl.'/categories/id/{categoryId}', ['as' => 'category.view', 'uses' => 'Admin\CategoriesController@view']);
    Route::get('/'.$getAdminBaseUrl.'/deleteCategory/id/{categoryId}', ['as' => 'category.delete', 'uses' => 'Admin\CategoriesController@destroy']);
    Route::post('/'.$getAdminBaseUrl.'/updateCategoryPositions', ['as' => 'categories.positions', 'uses' => 'Admin\CategoriesController@updateCategoryPositions']);
    //SubCategories
    Route::get('/'.$getAdminBaseUrl.'/subcategories_list', ['as' => 'subcategories', 'uses' => 'Admin\SubcategoriesController@index']);
    Route::get('/'.$getAdminBaseUrl.'/subcategories/new', ['as' => 'subcategories.new', 'uses' => 'Admin\SubcategoriesController@newSubCategory']);
    Route::post('/'.$getAdminBaseUrl.'/saveSubCategory', ['as' => 'subcategories.store', 'uses' => 'Admin\SubcategoriesController@store']);
    Route::post('/'.$getAdminBaseUrl.'/updateSubCategory/id/{subcategoryId}', ['as' => 'subcategory.update', 'uses' => 'Admin\SubcategoriesController@update']);
    Route::get('/'.$getAdminBaseUrl.'/subcategories/id/{subcategoryId}', ['as' => 'subcategory.view', 'uses' => 'Admin\SubcategoriesController@view']);
    Route::get('/'.$getAdminBaseUrl.'/deleteSubCategory/id/{subcategoryId}', ['as' => 'subcategory.delete', 'uses' => 'Admin\SubcategoriesController@destroy']);
    Route::post('/'.$getAdminBaseUrl.'/updateSubCategoryPositions', ['as' => 'subcategories.positions', 'uses' => 'Admin\SubCategoriesController@updateSubCategoryPositions']);
    //Admin user
    Route::get('/'.$getAdminBaseUrl.'/myprofile', ['as' => 'myprofile', 'uses' => 'Admin\Users\ProfileController@index']);
    Route::post('/'.$getAdminBaseUrl.'/updateUser/id/{userId}', ['as' => 'user.update', 'uses' => 'Admin\Users\ProfileController@update']);
    Route::post('/'.$getAdminBaseUrl.'/uploadAvatar/id/{userId}', ['as' => 'user.upload', 'uses' => 'Admin\Users\ProfileController@upload']);
    Route::post('/'.$getAdminBaseUrl.'/updateUserPassword', ['as' => 'user.update_password', 'uses' => 'Admin\Users\ProfileController@updatePassword']);
    //Pages
    Route::get('/'.$getAdminBaseUrl.'/pages', ['as' => 'pages', 'uses' => 'Admin\Pages\PagesController@index']);
    Route::get('/'.$getAdminBaseUrl.'/pages/new', ['as' => 'pages.new', 'uses' => 'Admin\Pages\PagesController@newPage']);
    Route::post('/'.$getAdminBaseUrl.'/savePage', ['as' => 'pages.store', 'uses' => 'Admin\Pages\PagesController@store']);
    Route::get('/'.$getAdminBaseUrl.'/pages/id/{pageId}', ['as' => 'page.view', 'uses' => 'Admin\Pages\PagesController@view']);
    Route::post('/'.$getAdminBaseUrl.'/pages/updatePage/id/{categoryId}', ['as' => 'page.update', 'uses' => 'Admin\Pages\PagesController@update']);
    Route::get('/'.$getAdminBaseUrl.'/deletePage/id/{pageId}', ['as' => 'page.delete', 'uses' => 'Admin\Pages\PagesController@destroy']);
    Route::post('/'.$getAdminBaseUrl.'/updatePositions', ['as' => 'page.positions', 'uses' => 'Admin\Pages\PagesController@updatePositions']);
    Route::get('/'.$getAdminBaseUrl.'/subcategories', ['as' => 'page.subcategories', 'uses' => 'Admin\SubcategoriesController@index']);
    Route::get('/'.$getAdminBaseUrl.'/posts/pages', ['as' => 'page.categories', 'uses' => 'Admin\Pages\PagesController@listType']);
    Route::get('/'.$getAdminBaseUrl.'/static/pages', ['as' => 'page.static', 'uses' => 'Admin\Pages\PagesController@listType']);
    Route::post('/'.$getAdminBaseUrl.'/getsubcategorybyid', ['as' => 'page.getsubcategory', 'uses' => 'Admin\SubcategoriesController@getSubCategoryByCategoryId']);
    //Comments
    Route::get('/'.$getAdminBaseUrl.'/comments', ['as' => 'admin.comments', 'uses' => 'Admin\CommentsController@index']);
    Route::get('/'.$getAdminBaseUrl.'/comments/id/{commentId}', ['as' => 'comment.view', 'uses' => 'Admin\CommentsController@view']);
    Route::get('/'.$getAdminBaseUrl.'/deleteComment/id/{commentId}', ['as' => 'comment.delete', 'uses' => 'Admin\CommentsController@destroy']);
    Route::get('/'.$getAdminBaseUrl.'/deleteComment/id/{commentId}', ['as' => 'comment.delete', 'uses' => 'Admin\CommentsController@destroy']);
    Route::post('/'.$getAdminBaseUrl.'/updateComment/id/{commentId}', ['as' => 'comment.update', 'uses' => 'Admin\CommentsController@update']);
    //Media Images
    Route::get('/'.$getAdminBaseUrl.'/image/{w}/{h}/{img}', ['as' => 'admin.image', 'uses' => 'Admin\ImagesController@index']);
    Route::get('/'.$getAdminBaseUrl.'/image/create', ['as' => 'admin.image.create', 'uses' => 'Admin\ImagesController@create']);
    Route::post('/'.$getAdminBaseUrl.'/image/store', ['as' => 'admin.image.store', 'uses' => 'Admin\ImagesController@store']);
    Route::get('/'.$getAdminBaseUrl.'/image/imageslist', ['as' => 'admin.imageslist', 'uses' => 'Admin\ImagesController@imagesList']);
    Route::get('/'.$getAdminBaseUrl.'/imageId/id/{imageId}', ['as' => 'image.delete', 'uses' => 'Admin\ImagesController@destroy']);
    Route::get('/'.$getAdminBaseUrl.'/media', ['as' => 'admin.media', 'uses' => 'Admin\MediaController@index']);
    //Media Folders
    Route::post('/'.$getAdminBaseUrl.'/folder', ['as' => 'admin.folder', 'uses' => 'Admin\FolderController@store']);
    Route::get('/'.$getAdminBaseUrl.'/folder/create', ['as' => 'admin.folder.create', 'uses' => 'Admin\FolderController@create']);
    Route::get('/'.$getAdminBaseUrl.'/folder/show/{folderId}', ['as' => 'admin.folder.show', 'uses' => 'Admin\FolderController@show']);
    Route::get('/'.$getAdminBaseUrl.'/folder/edit/{folderId}', ['as' => 'admin.folder.edit', 'uses' => 'Admin\FolderController@edit']);
    Route::post('/'.$getAdminBaseUrl.'/folder/update/{folderId}', ['as' => 'admin.folder.update', 'uses' => 'Admin\FolderController@update']);
    Route::get('/'.$getAdminBaseUrl.'/folder/delete/{folderId}', ['as' => 'admin.folder.delete', 'uses' => 'Admin\FolderController@destroy']);
    //Tags
    Route::get('/'.$getAdminBaseUrl.'/tags', ['as' => 'admin.tags', 'uses' => 'Admin\TagsController@index']);
    Route::get('/'.$getAdminBaseUrl.'/tags/new', ['as' => 'tags.new', 'uses' => 'Admin\TagsController@newTag']);
    Route::post('/'.$getAdminBaseUrl.'/saveTag', ['as' => 'tags.store', 'uses' => 'Admin\TagsController@store']);
    Route::post('/'.$getAdminBaseUrl.'/updateTag/id/{tagId}', ['as' => 'tag.update', 'uses' => 'Admin\TagsController@update']);
    Route::get('/'.$getAdminBaseUrl.'/tags/id/{tagId}', ['as' => 'tag.view', 'uses' => 'Admin\TagsController@view']);
    Route::get('/'.$getAdminBaseUrl.'/deleteTag/id/{tagId}', ['as' => 'tag.delete', 'uses' => 'Admin\TagsController@destroy']);
    Route::post('/'.$getAdminBaseUrl.'/gettagsbyid', ['as' => 'page.gettagsbyid', 'uses' => 'Admin\TagsController@getTagsById']);
    //Static Blocks
    Route::get('/'.$getAdminBaseUrl.'/blocks', ['as' => 'admin.blocks', 'uses' => 'Admin\StaticBlocksController@index']);
    Route::get('/'.$getAdminBaseUrl.'/blocks/type/{footer}', ['as' => 'admin.blocks.footer', 'uses' => 'Admin\StaticBlocksController@defaultType']);
    Route::get('/'.$getAdminBaseUrl.'/blocks/new', ['as' => 'block.new', 'uses' => 'Admin\StaticBlocksController@newBlock']);
    Route::post('/'.$getAdminBaseUrl.'/blocks/saveBlock', ['as' => 'block.store', 'uses' => 'Admin\StaticBlocksController@store']);
    Route::get('/'.$getAdminBaseUrl.'/blocks/id/{blockId}', ['as' => 'block.view', 'uses' => 'Admin\StaticBlocksController@view']);
    Route::get('/'.$getAdminBaseUrl.'/deleteBlock/id/{blockId}', ['as' => 'block.delete', 'uses' => 'Admin\StaticBlocksController@destroy']);
    Route::post('/'.$getAdminBaseUrl.'/updateBlock/id/{blockId}', ['as' => 'block.update', 'uses' => 'Admin\StaticBlocksController@update']);
    //Seo
    Route::get('/'.$getAdminBaseUrl.'/seo', ['as' => 'admin.seo', 'uses' => 'Admin\SeoController@index']);
    //Socials Integrations
    Route::get('/'.$getAdminBaseUrl.'/facebook', ['as' => 'admin.facebook', 'uses' => 'Admin\Socials\FacebookController@index']);
    Route::get('/'.$getAdminBaseUrl.'/gplus', ['as' => 'admin.gplus', 'uses' => 'Admin\Socials\GplusController@index']);
    Route::get('/'.$getAdminBaseUrl.'/twitter', ['as' => 'admin.twitter', 'uses' => 'Admin\Socials\TwitterController@index']);
    Route::get('/'.$getAdminBaseUrl.'/instagram', ['as' => 'admin.instagram', 'uses' => 'Admin\Socials\InstagramController@index']);
    //Settings
    Route::get('/'.$getAdminBaseUrl.'/footer', ['as' => 'admin.settings.footer', 'uses' => 'Admin\SettingsController@footer']);
    Route::get('/'.$getAdminBaseUrl.'/homepage', ['as' => 'admin.homepage', 'uses' => 'Admin\SettingsController@home']);
    Route::post('/'.$getAdminBaseUrl.'/homepage/name/{name}', ['as' => 'homepage-update', 'uses' => 'Admin\SettingsController@update']);
    Route::get('/'.$getAdminBaseUrl.'/menu-settings', ['as' => 'admin.menu-settings', 'uses' => 'Admin\SettingsController@menuSettings']);
    Route::post('/'.$getAdminBaseUrl.'/menu-settings/name/{name}', ['as' => 'menu-settings-update', 'uses' => 'Admin\SettingsController@update']);
    Route::post('/'.$getAdminBaseUrl.'/settings-sidebar', ['as' => 'settings.sidebar', 'uses' => 'Admin\SettingsController@update']);
    Route::post('/'.$getAdminBaseUrl.'/settings-footer/name/{name}', ['as' => 'settings.footer', 'uses' => 'Admin\SettingsController@update']);
});

Auth::routes();

Route::get('/'.Admin::getAdminUrl().'/home', ['as' => 'admin','uses' =>'HomeController@index']);
Route::get('/'.Admin::getAdminUrl().'', ['as' => 'admin','uses' =>'HomeController@index']);