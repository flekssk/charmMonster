<?php

namespace App\Http\Controllers\Product;

use App\Extensions\User\CharmUser;
use App\Http\Controllers\Controller;
use App\Models\Product\Liked;
use App\Repositories\Product\LikedRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LikedController extends Controller
{
    public function index(Request $request)
    {
        $liked = LikedRepository::getUserLiked(CharmUser::id());

        return JsonResponse::create(
            [
                'content' => view(
                    'liked.index',
                    [
                        'products' => $liked->getProductsRepository()
                    ]
                ),
            ]
        );
    }

    public function store(Request $request)
    {
        $liked = new Liked();

        $liked->product_id = $request->productId;
        $liked->user_id = CharmUser::id();

        return JsonResponse::create(
            [
                'success' => $liked->save(),
            ]
        );
    }

    public function destroy(Liked $liked)
    {
        $result = false;

        if (CharmUser::id() === $liked->user_id) {
            $result = $liked->delete();
        }

        return JsonResponse::create(
            [
                'success' => $result,
            ]
        );
    }
}