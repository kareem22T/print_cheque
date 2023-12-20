<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\DataFormController;
use Illuminate\Support\Facades\Validator;
use App\Models\Reprsentative;
use App\Models\Cheque;

class ChequeController extends Controller
{
    use DataFormController;

    public function add($id) {
        $Reprsentative = Reprsentative::find($id);
        return view('add_check')->with(compact('Reprsentative'));
    }


    public function prev($id) {
        $Cheque = Cheque::find($id);
        return view('prev_cheque')->with(compact('Cheque'));
    }


    public function put(Request $request) {
        $validator = Validator::make($request->all(), [
            'id' => ['required'],
            'cheque' => ['required'],
        ], [
            'cheque.required' => 'بيانات الشيك مطلوبة',
        ]);

        if ($validator->fails()) {
            return $this->jsondata(false, 'Add failed', [$validator->errors()->first()], []);
        }

        $createCheck = Cheque::create([
            'reprsentative_id' => $request->id,
            'name' => $request->name,
            'notes' => $request->notes,
            'cheque' => $request->cheque,
        ]);

        if ($createCheck)
            return $this->jsonData(true, 'تم تحرير الشيك بنجاح بنجاح', [], ["id" => $createCheck->id]);
    }

    public function delete(Request $request) {
        $validator = Validator::make($request->all(), [
            'cheque_id' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->jsondata(false, 'delete failed', [$validator->errors()->first()], []);
        }

        $cheque = Cheque::find($request->cheque_id);
        $cheque->delete();

        if ($cheque)
            return $this->jsonData(true, $request->file_name . 'تم حف بيانات المندوب بنجاح', [], []);
    }
}
