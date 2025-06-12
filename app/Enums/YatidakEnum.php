<?php

namespace App\Enums;

enum YatidakEnum: string
{
    case Ya = '1';
    case Tidak = '0';

    public function description(): string
    {
        return match ($this) {
            self::Ya => 'Ya',
            self::Tidak => 'Tidak',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function options(): array
    {
        return array_reduce(self::cases(), function ($carry, $case) {
            $carry[$case->value] = $case->description();
            return $carry;
        }, []);
    }

    public static function fromValue(int $value): ?self
    {
        return collect(self::cases())->firstWhere('value', $value);
    }
}
