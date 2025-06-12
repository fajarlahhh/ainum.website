<?php

namespace App\Enums;

enum FungsipetugasEnum: string
{
    //
    case PembacaMeter = 'Pembaca Meter';
    case Kasir = 'Kasir';
    case Penagih = 'Penagih';

    public function description(): string
    {
        return match ($this) {
            self::PembacaMeter => 'Pembaca Meter',
            self::Kasir => 'Kasir',
            self::Penagih => 'Penagih',
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

    public static function fromValue(string $value): ?self
    {
        return collect(self::cases())->firstWhere('value', $value);
    }
}
