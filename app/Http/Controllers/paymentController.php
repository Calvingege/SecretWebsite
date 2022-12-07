<?php

namespace App\Http\Controllers;

use App\Models\payment;
use Illuminate\Http\Request;

class paymentController extends Controller
{
    // Bagian Create payment
    public function CreatePayment(){
        return view('CreatePayment');
    }

    // Bagian Store Adds
    public function StorePayment(Request $request) {
        // $extension= $request->file('BuktiPembayaran')->getClientOriginalExtension();
        // $fileName = $request->Kategori.'_'.$request->BuktiPembayaran.'.'.$extension;
        // $request->file('BuktiPembayaran')->storeAs('public/image', $fileName);

    // masih error: dia nyimpennya di PATH dan gabisa dipanggil
    $file = $request->file('BuktiPembayaran');
    $destinationPath = public_path(). '/public/image';
    $filename = $file->getClientOriginalName();

    $request->file('BuktiPembayaran')->move($destinationPath, $filename);

    // Bagian Input Validasi
    $request->validate([
        'BuktiPembayaran' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
    ]);

    payment::create([
        'BuktiPembayaran' => $filename
    ]);

        // Setelah pasang iklan dia ngereturn lagi ke create/adds
        return redirect('create/payment');
    }

    // Tunjukin bukti bayarnya
    // Khusus admin
    public function ShowPayment() {
        $payment = payment::all();
        return view('ShowPayment', compact('payment'));
    }
}
