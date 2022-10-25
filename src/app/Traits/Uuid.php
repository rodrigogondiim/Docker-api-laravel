<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait Uuid
{
    public function getIncrementing(): bool
    {
        return false;
    }
    public function getKeyType(): string
    {
        return 'string';
    }
    protected static function bootUsesUuid(): void
    {
        static::creating(function ($model) {
            if (!$model->getKey()) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }
}
