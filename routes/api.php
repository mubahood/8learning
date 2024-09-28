<?php

use App\Models\DynamicsApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/dynamics-api', function (Request $r) {
    //http://localhost:8888/8learning/api/dynamics-api/1
    $id = $r->id;
    $d = DynamicsApi::find($id);
    if ($d == null) {
        return response()->json([
            'message' => 'Not found'
        ], 404);
    }
    $url = $d->url;
    $token = 'EwCIA8l6BAAUbDba3x2OMJElkF7gJ4z/VbCPEz0AASJNMRcqzk9I108qmkTKbjKO79sHip+GTevvCv3MPXwQFOhClPuOo7a9+tesYPEzz14VNVN/w4h3kaihGlZ6WyR+8QtfrfUPxbHI8va45gN4IhyHBBi6Ccb0YOIwn0AaoHSEnVUZ2k8YtX0EkHPUOKhrpfGExBzwVsuPqhvES+zQIxHUGW9nPYOcDZgVaUYIKu+Ocw9FoQ79S0wKyt/c+apw4Vcl1EYuBZIzgXlrm+ruoq1KW2hszxqDlZn9eANHeBrzi32q2lVPUUADFygCrpL3RWkyygkjS7QbJejojCrCet8H3V1u/B0dPiEVvTrbGOIgLufj8wBsu4oO4C9EqB4QZgAAEF11ZrEzAfIfdDFNrPvWA01QAriSeUWO+Y6OhWbARXhzNVW9wfnnDHb4nUFsghv0/z+oBhLNTNu+y9lFt7aP7jqLQs1vdWnpBmyhP9X9eV3A34Ohp1oVWwNMBVStNJfnzQTEDoj2DplER2uXATdcRZDvHHbc7N0wcWZDgZkTesipcWQgXQuKXML14+svmovu3v2KgKPjKpBgvp2BfpYWi2eor+6m1rM+TmCOMjqrbaAG9sXjTEbCd5ENiNIs3XjI/9NOf8HMcuOVGgXp+aK0x+gze+ZdJWHXT4BDFSZsAfrPFojFzBHOgRejzN8P+b+3nXTF6aSt70xsp4D2Wm0WW5w9OeukOXWiTIrS7wkUa+o3/Nyjg5FAZ9g3NXW0KJpTGRuQhpjshc0EiMlTOgRFXV10KUvkpm2nrJaWlDqTjzedc8F0I+oFox6sVB41OGALP1bUf5oGysb+7euPs/fVdOMoIkLZvxapwwgvgvej/mLnIMlQen+iXUdnNWj8X8C1w2EHxlSRpk33hmtzgM51ZRZmdJV4ph+y5dwc8wi6SUvipcfG4Fim8Rya9fzp2hLDj4txrx0Ye3+GTTQGVzFXURQvTss1g5pIVDF1s2pLdhXs+NE2uz4mwwWB0wL1LNNtNNrREjRkNOI6oHC4XtJSQSQ7WnFOZYqvZ2nx0LMGi+12bij9zTQp+sLUhFFlvaBwKAFnmlv9D4xVBLBirt1iYTi+5T1Zo0z8O6XB+opdYWo27slZAG2dAxgl8mMmEmb5lscI1pOepX8waLJDGf4Gzf1E5jD8yiMa2OSVgCgkD7HlPpKRAg=='; 
    $client = new \GuzzleHttp\Client();
    $response = $client->request('GET', $url, [
        'headers' => [ 'Authorization' => 'Bearer ' . $token ]
    ]);
    $d->response = json_encode($response->getBody());
    $d->save();
    
    return response()->json([
        'message' => 'Success',
        'data' => $response->getBody()
    ], 200);



});