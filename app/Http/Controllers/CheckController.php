<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\DataFormController;
use Illuminate\Support\Facades\Validator;
use App\Models\Reprsentative;

class CheckController extends Controller
{
    use DataFormController;

    public function add($id) {
        $Reprsentative = Reprsentative::find($id);
        return view('add_check')->with(compact('Reprsentative'));
    }


    public function put(Request $request) {
        $validator = Validator::make($request->all(), [
            'id' => ['required'],
            'check' => ['required'],
        ], [
            'check.required' => 'بيانات الشيك مطلوبة',
        ]);

        if ($validator->fails()) {
            return $this->jsondata(false, 'Add failed', [$validator->errors()->first()], []);
        }

        $createCheck = Check::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'additional_notes' => $request->additional_notes,
        ]);

        if ($createCheck)
            return $this->jsonData(true, 'تم تحرير الشيك بنجاح بنجاح', [], ["id" => $createRepre->id]);
    }

}
