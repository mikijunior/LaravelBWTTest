<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Country\GetUsersRequest;
use App\Http\Services\UserService;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    /**
     * @var UserService
     */
    private $service;

    public function __construct(UserService $countryService)
    {
        $this->service = $countryService;
    }

    public function getUsers(GetUsersRequest $request): JsonResponse
    {
        return response()->json($this->service->getUsersInCountry($request->get('countryName')));
    }
}
