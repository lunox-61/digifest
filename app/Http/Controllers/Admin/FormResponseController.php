<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FormResponse; // Ganti dengan nama model yang sesuai

class FormResponseController extends Controller
{
    public function viewResults($formResponseId)
    {
        $formResponse = FormResponse::findOrFail($formResponseId);

        return view('backend.results', ['formResponse' => $formResponse]);
    }
}
