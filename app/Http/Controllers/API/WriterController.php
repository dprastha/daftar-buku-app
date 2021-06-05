<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Writer;

class WriterController extends Controller
{
    public function get(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit', 10);
        $name = $request->input('name');
        $slug = $request->input('slug');

        if ($id) {
            $writter = Writer::with('books')
                ->find($id);

            if ($writter)
                return ResponseFormatter::success($writter, 'Data retrieved successfully');
            else
                return ResponseFormatter::error(null, 'No Data', 404);
        }

        if ($slug) {
            $writter = Writer::with('books')
                ->where('slug', $slug)
                ->first();

            if ($writter)
                return ResponseFormatter::success($writter, 'Data retrieved successfully');
            else
                return ResponseFormatter::error(null, 'No Data', 404);
        }

        $writer = Writer::with('books');

        if ($name)
            $writer->where('name', 'like', '%' . $name . '%');

        return ResponseFormatter::success(
            $writer->paginate($limit),
            'Writer list data retrieved successfully'
        );
    }
}
