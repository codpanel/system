<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/system', 'SystemPages@login')->Name('system.login');
Route::post('/system/login', 'SystemPages@attempt')->Name('system.auth');
Route::get('/system/logout', 'SystemPages@logout')->Name('system.logout');


Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.', 'middleware' => 'System'], function ($container) {

    Route::get('/', 'HomeController@index')->name('home');

    Route::group(['prefix' => '/deliver/listing'], function () {
        Route::get('/new/', 'DeliverController@index')->Name('deliver.orders');
        Route::get('/canceled/', 'DeliverController@canceled')->Name('deliver.orders.canceled');
        Route::get('/recall/', 'DeliverController@recall')->Name('deliver.orders.recall');
        Route::get('/delivered/', 'DeliverController@delivered')->Name('deliver.orders.delivered');
        Route::get('/no/response/', 'DeliverController@NoResponse')->Name('deliver.orders.NoResponse');
    });



    Route::group(['prefix' => '/employee/listing'], function () {
        Route::get('/new/', 'EmployeeController@index')->Name('employee.orders');
        Route::get('/canceled/', 'EmployeeController@canceled')->Name('employee.orders.canceled');
        Route::get('/recall/', 'EmployeeController@recall')->Name('employee.orders.recall');
        Route::get('/no/response/', 'EmployeeController@NoResponse')->Name('employee.orders.NoResponse');
        //Route::get('/no/response/{number}/', 'EmployeeController@NoResponse')->Name('employee.orders.NoResponse.details');    
    });

    Route::group(['prefix' => 'statistiques'], function () {
        Route::any('/', 'StatistiquesController@statistiques')->Name('statistiques');
        Route::any('daily/employees', 'StatistiquesController@statistiques_employees')->Name('statistiques.employees');
        Route::any('daily/delivers', 'StatistiquesController@statistiques_delivers')->Name('statistiques.delivers');
    });




    Route::any('/reception', 'PagesController@reception')->Name('reception');
    Route::any('/confirmation', 'ListsController@confirmation')->Name('confirmation');
    Route::any('/suivi', 'ListsController@suivi')->Name('suivi.listing');
    Route::get('/revenue', 'PagesController@revenue')->Name('pages.revenue');
    Route::get('/revenue/spent/{date}/{ads}', 'PagesController@ads')->Name('pages.ads');
    Route::get('/search', 'PagesController@search')->Name('pages.find');
    Route::any('/verfiey/{date}/{money}/{deliver_id}', 'ListsController@VerfiedCash')->Name('cash.verified');
    Route::get('/cash', 'PagesController@cash')->Name('pages.cash');
    Route::get('/export/revenue', 'PagesController@ExportRevenue')->Name('export.revenue');
    Route::get('/double', 'PagesController@double')->Name('pages.duplique');
    Route::any('/suivi', 'PagesController@suivi')->Name('pages.suivi');
    Route::any('/allorders', 'PagesController@allorders')->Name('pages.allorders');

    //citeis
    Route::any('/cities', 'CitiesController@index')->Name('pages.cities');
    Route::any('/cities/store', 'CitiesController@store')->Name('cities.store');


    // Dashboard index
    Route::get('/', 'ListsController@index')->Name('admin.index');

    Route::any('/deliver/cash/', 'PagesController@Delivercash')->Name('deliver.cash');
    Route::any('/loadHistory', 'ListsController@loadHistory');
    Route::any('/loadEmployeesCount', 'ListsController@loadEmployeesCount');



    //
    Route::any('/download/excel/{jour}/{deliver}', 'PagesController@downloadExcelDeliverJour')->Name('deliver.downloadJour');


    // new orders system
    Route::group(['prefix' => '/new-orders'], function () {
        Route::get('/', 'NewOrdersController@index')->Name('NewOrders');
        Route::post('/upload/', 'NewOrdersController@uploadTheSheet')->Name('NewOrders.upload');
        Route::post('/city/', 'NewOrdersController@assignToCity')->Name('NewOrders.assignToCity');
        Route::any('/product/', 'NewOrdersController@assignToProduct')->Name('NewOrders.assignToProduct');
        Route::any('/employee/', 'NewOrdersController@assignToEmployee')->Name('NewOrders.assignToEmployee');
        Route::any('/delete/', 'NewOrdersController@delete')->Name('NewOrders.delete');
        Route::any('/restore/', 'NewOrdersController@restoreOrders')->Name('NewOrders.restore');
        Route::any('/duplicates/', 'NewOrdersController@assignToEmployee')->Name('NewOrders.assignToEmployee');
        Route::any('/search/', 'NewOrdersController@AdvancedSearch')->Name('NewOrders.AdvancedSearch');
        Route::any('/loadcount/', 'NewOrdersController@loadcount')->Name('NewOrders.loadcount');
        Route::any('/restoreduplicates/', 'NewOrdersController@RestoreFromDuplicates')->Name('NewOrders.RestoreFromDuplicates');
        Route::any('/remove/', 'NewOrdersController@remove')->Name('NewOrders.remove');
    });



    // new orders system
    Route::group(['prefix' => '/data'], function () {
        Route::get('/', 'DataController@index')->Name('data');
        Route::get('/deleted', 'DataController@deleted')->Name('data.deleted');
        Route::get('/duplicated', 'DataController@duplicated')->Name('data.duplicated');
        Route::get('/new', 'DataController@new')->Name('data.new');





        Route::post('/upload/', 'DataController@uploadTheSheet')->Name('data.upload');
        Route::post('/city/', 'DataController@assignToCity')->Name('data.assignToCity');
        Route::any('/product/', 'DataController@assignToProduct')->Name('data.assignToProduct');
        Route::any('/employee/', 'DataController@assignToEmployee')->Name('data.assignToEmployee');
        Route::any('/delete/', 'DataController@delete')->Name('data.delete');
        Route::any('/restore/', 'DataController@restoreOrders')->Name('data.restore');
        Route::any('/duplicates/', 'DataController@assignToEmployee')->Name('data.assignToEmployee');
        Route::any('/search/', 'DataController@AdvancedSearch')->Name('data.AdvancedSearch');
        Route::any('/loadcount/', 'DataController@loadcount')->Name('data.loadcount');
        Route::any('/restoreduplicates/', 'DataController@RestoreFromDuplicates')->Name('data.RestoreFromDuplicates');
        Route::any('/remove/', 'DataController@remove')->Name('data.remove');
    });


    // employee and admin Lists System
    Route::group(['prefix' => '/lists'], function () {
        Route::any('/', 'ListsController@index')->Name('lists');
        Route::any('/export/deliver', 'ListsController@exportDeliver')->Name('lists.deliver.export');
        Route::any('/export/deliver/selected', 'ListsController@exportDeliverSelected')->Name('lists.deliver.export.selected');
        Route::any('/suivi', 'ListsController@index')->Name('suivi');
        Route::any('/reset', 'ListsController@reset');
        Route::any('confirmLists', 'ListsController@confirm')->Name('lists.confirm');
        Route::any('/export', 'ListsController@export')->Name('lists.export');
        Route::any('/exportConfirmation', 'ListsController@exportConfirmation')->Name('lists.exportConfirmation');
        Route::any('/cash/', 'ListsController@cash');
        Route::any('/transform/', 'ListsController@transform')->Name('lists.transform');
        Route::any('/all/', 'ListsController@index')->Name('lists.all');
        Route::get('/create/', 'ListsController@createForm')->Name('lists.create');
        Route::post('/create/', 'ListsController@create')->Name('lists.create');
        Route::get('/edit/{id}/', 'ListsController@edit')->Name('lists.edit');
        Route::post('/edit/{id}/', 'ListsController@update')->Name('lists.update');
        Route::any('/delete/{id}/', 'ListsController@delete')->Name('lists.delete');
        Route::any('/blukdelete/', 'ListsController@blukdelete')->Name('lists.blukdelete');
        Route::any('/setCanceled/', 'ListsController@setCanceled')->Name('lists.setCanceled');
        Route::any('/setNoResponse/', 'ListsController@setNoResponse')->Name('lists.NoResponse');
        Route::any('/setSent/', 'ListsController@setSent')->Name('lists.Sent');
        Route::any('/setRecall/', 'ListsController@setRecall')->Name('lists.setRecall');
        Route::any('/stock/', 'ListsController@stock')->Name('lists.stock');
        Route::any('/loadDeliverdbyDeliver/', 'ListsController@loadDeliverdbyDeliver')->Name('lists.loadDeliverdbyDeliver');
        Route::any('/loadAction/{id}', 'ListsController@loadListDataWithActions')->Name('loadListDataWithAction');
        Route::any('/deliveryPrice/', 'ListsController@loadUserDeliveryPrice');
        Route::any('/search/', 'ListsController@search')->Name('lists.search');
        Route::any('/setSentEmployee', 'ListsController@setSentEmployee');
        Route::any('/{id}', 'ListsController@loadListData')->Name('loadListData');
    });

    // deliver Lists System
    Route::group(['prefix' => '/sentlists'], function () {
        Route::any('/', 'ListsController@index')->Name('Sentlists');
        Route::any('/setCanceled/', 'ListsController@setCanceled')->Name('Sentlists.setCanceled');
        Route::any('/setNoResponse/', 'ListsController@setNoResponse')->Name('Sentlists.NoResponse');
        Route::any('/setDelivred/', 'ListsController@setDelivred')->Name('Sentlists.Sent');
        Route::any('/setRecall/', 'ListsController@setRecall')->Name('Sentlists.setRecall');
        Route::any('/edit/{id}/', 'ListsController@edit')->Name('Sentlists.edit');
    });

    // users System
    Route::group(['prefix' => '/users'], function () {
        Route::get('/', 'UsersController@index')->Name('users');
        Route::any('/create', 'UsersController@create')->Name('users.create');
        Route::any('/store', 'UsersController@store')->Name('users.store');
        Route::any('/delete/{id}/', 'UsersController@delete')->Name('users.delete');
        Route::any('/activate/{id}/', 'UsersController@delete')->Name('users.activate');
        Route::any('/block/{id}/', 'UsersController@block')->Name('users.block');
        Route::any('/mutliAction/', 'UsersController@mutliAction')->Name('users.mutliAction');
        Route::get('/export/csv/', 'UsersController@export_csv')->Name('usersToCsv');
        Route::get('/export/pdf/', 'UsersController@export_pdf')->Name('usersToPdf');
        Route::get('/blukdelete/', 'UsersController@blukdelete')->Name('users.blukdelete');
        Route::any('/{id}/', 'UsersController@edit')->Name('users.edit');
        Route::any('/update/{id}', 'UsersController@update')->Name('users.update');
    });

    // Products system
    Route::group(['prefix' => '/products'], function () {
        Route::get('/', 'ProductsController@index')->Name('products');
        Route::any('/create/', 'ProductsController@create')->Name('products.create');
        Route::any('/edit/{id}/', 'ProductsController@edit')->Name('products.edit');
        Route::get('/delete/{id}/', 'ProductsController@delete')->Name('products.delete');
        Route::get('/duplicate/{id}/', 'ProductsController@duplicate')->Name('products.duplicate');
        Route::get('/blukdelete/', 'ProductsController@blukdelete')->Name('products.blukdelete');
        Route::any('/store', 'ProductsController@store')->Name('products.store');
        Route::any('/update/{id}', 'ProductsController@update')->Name('products.update');
    });


    // المراقبة اليومية
    Route::group(['prefix' => '/charges'], function () {
        Route::any('', 'ChargesController@index')->Name('charges');
        Route::post('/store/', 'ChargesController@store')->Name('charges.store');
        Route::any('/edit/{id}/', 'ChargesController@edit')->Name('charges.edit');
        Route::post('/store/{id}/', 'ChargesController@edit')->Name('charges.update');
        Route::post('/save', 'ChargesController@save')->Name('charges.save');
        Route::get('/paied/{id}', 'ChargesController@paied')->Name('charges.paied');
    });

    Route::group(['prefix' => '/employees'], function () {
        Route::any('/pending', 'EmployeesController@pending')->Name('employees.pending');
        Route::any('/canceled', 'EmployeesController@canceled')->Name('employees.canceled');
        Route::any('/recall', 'EmployeesController@recall')->Name('employees.recall');
        Route::any('/unanswered', 'EmployeesController@unanswered')->Name('employees.unanswered');
    });

    Route::group(['prefix' => '/delivers'], function () {
        Route::any('/pending', 'DeliversController@pending')->Name('delivers.pending');
        Route::any('/delivered', 'DeliversController@delivered')->Name('delivers.delivered');
        Route::any('/canceled', 'DeliversController@canceled')->Name('delivers.canceled');
        Route::any('/recall', 'DeliversController@recall')->Name('delivers.recall');
        Route::any('/unanswered', 'DeliversController@unanswered')->Name('delivers.unanswered');
    });
});

Route::group(['prefix' => 'deliver', 'as' => 'deliver.', 'middleware' => 'Deliver'], function ($container) {
    Route::any('/', 'DeliverController@index')->name('index');

    Route::any('/delivered', 'DeliverController@delivered')->Name('delivered');
    Route::any('/canceled', 'DeliverController@canceled')->Name('canceled');
    Route::any('/recall', 'DeliverController@recall')->Name('recall');
    Route::any('/unanswered', 'DeliverController@unanswered')->Name('unanswered');

});

Route::group(['prefix' => 'employee', 'as' => 'employee.', 'middleware' => 'Employee'], function ($container) {    
    Route::any('/', 'EmployeeController@index')->name('index');

    Route::any('/pending', 'EmployeeController@pending')->Name('pending');    
    Route::any('/canceled', 'EmployeeController@canceled')->Name('canceled');
    Route::any('/recall', 'EmployeeController@recall')->Name('recall');
    Route::any('/unanswered', 'EmployeeController@unanswered')->Name('unanswered');
    Route::any('/create', 'EmployeeController@create')->Name('create');
});