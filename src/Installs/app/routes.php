
/* ================== Homepage + Admin Routes ================== */

require __DIR__.'/admin_routes.php';

/* ================== Feedback Route ================== */

Route::post('/', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);
