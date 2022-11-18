<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class QueryController extends Controller
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function runQuery(Request $request): JsonResponse
    {
        $queryText = $request->input('queryText');

        $response = (object)['data' => [],'status' => 200, 'message' => ''];
        try {
            $response->data = DB::select(DB::raw($queryText));
        } catch (\Exception $e) {
            $response->status = 403;
            $response->message = 'Wrong query';
            return new JsonResponse($response->data, $response->status);
        }

        return new JsonResponse($response->data, $response->status);
    }
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): Application|Factory|View
    {
        return view('query');
    }
}