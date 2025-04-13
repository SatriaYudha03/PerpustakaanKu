<?php

namespace App\Enums;

enum BookLanguage: string

{
    case ENGLISH = 'english';
    case INDONESIA = 'indonesia';
    case JAPAN = 'jepang';

    public static function option(): array
    {
        return collect(self::cases())->map(fn($item) => [
            'value' => $item->value,
            'label' => $item->name,
        ])->values()->toArray();
    }
}