<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'fabric_type_id',
        'name',
        'color',
        'color_code',
        'description',
        'image',
        'quantity_kg',
    ];

    public function fabricType()
    {
        return $this->belongsTo(FabricType::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
    //test case
    public function getHslAttribute()
    {
        return $this->hexToHsl($this->color_code);
    }

    public function getColorScoreAttribute()
    {
        $hsl = $this->hsl;

        return $hsl['h'] * 10000 + $hsl['s'] * 100 + $hsl['l'];
    }

    private function hexToHsl($hex)
    {
        $hex = str_replace("#", "", $hex);

        $r = hexdec(substr($hex, 0, 2));
        $g = hexdec(substr($hex, 2, 2));
        $b = hexdec(substr($hex, 4, 2));

        $r /= 255;
        $g /= 255;
        $b /= 255;

        $max = max($r, $g, $b);
        $min = min($r, $g, $b);

        $h = $s = $l = ($max + $min) / 2;

        if ($max == $min) {
            $h = $s = 0; // achromatic
        } else {
            $diff = $max - $min;
            $s = $l > 0.5 ? $diff / (2 - $max - $min) : $diff / ($max + $min);
            switch ($max) {
                case $r:
                    $h = ($g - $b) / $diff + ($g < $b ? 6 : 0);
                    break;
                case $g:
                    $h = ($b - $r) / $diff + 2;
                    break;
                case $b:
                    $h = ($r - $g) / $diff + 4;
                    break;
            }
            $h /= 6;
        }

        return ['h' => $h, 's' => $s, 'l' => $l];
    }
}
