<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job{

    public static function all():array {
        return [
            [
            'id'=>1,
            'title'=>'CEO ',
            'salary'=>' $50,000 '
            ],

            [
            'id'=>2,
            'title'=>'CTO ',
            'salary'=>' $40,000 '
            ]
            ];   //data passing
    }

    public static function find(int $id):array
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if (!$job) {
            abort(404);
        }

        return $job;
    }
}

