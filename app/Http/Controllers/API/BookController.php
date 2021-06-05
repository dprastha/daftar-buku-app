<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function get(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit', 10);
        $title = $request->input('title');
        $slug = $request->input('slug');
        $genre = $request->input('genre');

        if ($id) {
            $book = Book::with('writer')
                ->find($id);

            if ($book)
                return ResponseFormatter::success($book, 'Data retrieved successfully');
            else
                return ResponseFormatter::error(null, 'No Data', 404);
        }

        if ($slug) {
            $book = Book::with('writer')
                ->where('slug', $slug)
                ->first();

            if ($book)
                return ResponseFormatter::success($book, 'Data retrieved successfully');
            else
                return ResponseFormatter::error(null, 'No Data', 404);
        }

        $book = Book::with('writer');

        if ($title)
            $book->where('title', 'like', '%' . $title . '%');

        if ($genre)
            $book->where('title', 'like', '%' . $title . '%');

        return ResponseFormatter::success(
            $book->paginate($limit),
            'Book list data retrieved successfully'
        );
    }
}
