<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

use function PHPSTORM_META\type;

class PriceController extends Controller
{
    public function store(Request $request)
    {
        $price = new Price();
        $price->urun_adi = $request->urun_adi;
        $price->raf_omru = $request->raf_omru;
        $price->stt = $request->stt;
        $price->kalan_gun = $request->kalan_gun;
        $price->sonuclar = $request->sonuclar;
        $price->save();
    }

    public function write($id)
    {
        $record = Price::findOrFail($id);
        $data = url("api/discount/{$record->id}");
        $qrCode = QrCode::format('svg')->size(300)->generate($data);

        return view('qrlar', ['qrCode' => $qrCode, 'urun_adi' => $record->urun_adi]);
    }

    public function discount($id)
    {
        $record = Price::findOrFail($id);
        $tarih = $record->stt;
        $futureDateCarbon = Carbon::createFromFormat('d.m.Y', $tarih);
        $today = Carbon::now();
        $fark = ceil($today->diffInDays($futureDateCarbon));
        $fark == -0 ? $fark = 0 : $fark = $fark;
        $sonuclarim = json_decode($record->sonuclar);
        $indirim_orani = $sonuclarim->{$fark};

        return view('discount', ['discount_number' => $indirim_orani, 'urun_adi' => $record->urun_adi]);
    }
}
