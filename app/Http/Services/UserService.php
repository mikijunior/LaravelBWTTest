<?php

namespace App\Http\Services;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class UserService
{
    public function getUsersInCountry(string $name): Collection
    {
        return User::query()
            ->whereHas('companies.country', function (Builder $query) use ($name) {
                $query->where('countries.name', $name);
            })
            ->with('companies')
            ->get();
    }
}
