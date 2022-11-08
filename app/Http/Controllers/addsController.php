<?php

namespace App\Http\Controllers;

use App\Models\Adds;
use Illuminate\Http\Request;

class addsController extends Controller
{
    // Bagian Create Adds
    public function CreateAdds(){
        return view('CreateAdds');
    }

    // Bagian Store Adds
    public function StoreAdds(Request $request) {
        $extension = $request->file('FotoSapi')->getClientOriginalExtension();
        // $table->string('FotoSapi')->nullable();
        $fileName = $request->Kategori.'_'.$request->NamaSapi.'.'.$extension;
        $request->file('FotoSapi')->storeAs('public/image', $fileName);

    // Bagian Input Validasi
    $request->validate([
        'FotoSapi' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
    ]);

    Adds::create([
        'NamaSapi' => $request->NamaSapi,
        'HargaSapi' => $request->HargaSapi,
        'JenisSapi' => $request->JenisSapi,
        'FotoBarang' => $fileName
    ]);

        // Setelah pasang iklan dia ngereturn lagi ke create/adds
        return redirect('create/adds');
    }


    // Tunjukin iklannya
    public function ShowAdds() {
        $Adds = Adds::all();
        return view('ShowAdds', compact('Adds'));
    }

    
}
