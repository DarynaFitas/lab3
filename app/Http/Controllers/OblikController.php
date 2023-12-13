<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OblikController extends Controller
{
    public function store(Request $request)
    {
        if ($request->gender === 'male') {
            $pensionAge = 65;
        } else {
            $pensionAge = 60;
        }

        if ($request->age >= $pensionAge) {
            // Логіка для збереження пенсіонера у базу даних
        } else {
            // Логіка для повідомлення про неприпустимий вік для пенсії
        }
    }
}


