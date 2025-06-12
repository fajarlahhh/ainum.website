<?php

namespace App\Enums;

enum StatuspelangganEnum: string
{
    case Aktif = '1';
    case Segel = '2';
    case SegelPermintaanSendiri = '3';
    case Bongkar = '4';

    public function description(): string
    {
        return match ($this) {
            self::Aktif => '1',
            self::Segel => '2',
            self::SegelPermintaanSendiri => '3',
            self::Bongkar => '4',
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
