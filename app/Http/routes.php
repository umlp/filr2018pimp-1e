<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

use App\Entreprise;
use Illuminate\Http\Request;

Route::group(['middleware' => ['web']], function () {
    /**
     * Show Task Dashboard
     */
    Route::get('/', function () {
        return view('tasks', [
            'entreprises' => Entreprise::orderBy('rang', 'asc')->get()
        ]);
    });

    /**
     * Add New Task
     */
    Route::post('/entreprise', function (Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'rang' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }

        $entreprise = new Entreprise;
        $entreprise->name = $request->name;
        $entreprise->rang = $request->rang;
        $entreprise->save();

        return redirect('/');
    });

    /**
     * Up vote
     */
    Route::get('/entreprise/up/{id}', function ($id) {
        $rg = Entreprise::findOrFail($id)->rang;
        Entreprise::where('rang', $rg-1)->increment('rang');
        Entreprise::findOrFail($id)->decrement('rang');
        return redirect('/');
    });

    /**
     * Down vote
     */
    Route::get('/entreprise/down/{id}', function ($id) {
        $rg = Entreprise::findOrFail($id)->rang;
        Entreprise::where('rang', $rg+1)->decrement('rang');
        Entreprise::findOrFail($id)->increment('rang');
        return redirect('/');
    });

    /**
     * Delete Task
     */
    Route::delete('/entreprise/{id}', function ($id) {
        Entreprise::findOrFail($id)->delete();

        return redirect('/');
    });
});
