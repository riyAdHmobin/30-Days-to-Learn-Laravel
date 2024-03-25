<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job{
    public static function all(): array{
        return [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$5000'
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => '$1000'
            ],
            [
                'id' => 3,
                'title' => 'Project Manager',
                'salary' => '$2000'
            ]
        ];
    }

    public static function find(int $id):array{
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);
        
        if(! $job){
            abort(404);
        }

        return $job;
    }
}