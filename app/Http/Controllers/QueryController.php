<?php

namespace App\Http\Controllers;

use App\Http\Requests\QueryCreateRequest;
use App\Models\Query;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class QueryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $list = Query::all(['id', 'query', 'name'])->toArray();
        return new JsonResponse($list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param QueryCreateRequest $request
     * @return JsonResponse
     */
    public function store(QueryCreateRequest $request): JsonResponse
    {
        $validated = $request->validated();
        $model = Query::create($validated);
        return new JsonResponse($model);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Query $model
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        $model = Query::find($id);
        $model->delete();
        return response()->json(['success' => true]);
    }

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
        } catch (Exception $e) {
            $response->status = 403;
            $response->message = 'Wrong query';
            return new JsonResponse($response->data, $response->status);
        }

        return new JsonResponse($response->data, $response->status);
    }
}
