<?php
use Illuminate\Http\Request;
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

Route::get('/', function() {

    return view('index');
});

Route::post('/provision_enterprise', function(Request $request) {
    $organizationName = $request->input("org"); # ... The name of the Enterprise to provision
    $organizationDomains =  explode(" ", $request->input("domain"));  # ... The list of domains the Enterprise uses
    $orgs = (new \WorkOS\Organizations()) -> listOrganizations($organizationDomains);
    $ordId = "";

    if ($orgs[2] != null) {
        $orgId = $orgs[2][0]->raw["id"];            
    } else {
        $newOrganization = (new \WorkOS\Organizations()) -> createOrganization($organizationName, $organizationDomains);
        $orgId = $newOrganization->id;
    }
    session(['orgId' => $orgId]);
    return view('launch-admin-portal');
});

Route::get('/launch_admin_portal', function(Request $request) {
    $intent = $request->query('intent');
    $orgId = Session::get('orgId');

    $portalLink = (new \WorkOS\Portal())
        ->generateLink(
            $orgId,
            $intent,
            null
        );

    $portalLink = $portalLink -> toArray();
    return redirect($portalLink["link"]);
});