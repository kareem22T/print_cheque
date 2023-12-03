<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\DataFormController;
use Illuminate\Support\Facades\Validator;
use App\Models\Reprsentative;

class ReprsentativeController extends Controller
{
    use DataFormController;

    public function index() {
        return view('prev_reprsentative');
    }

    public function getReprsentatives() {
        $Reprsentatives = Reprsentative::orderBy(\DB::raw('ABS(TIMESTAMPDIFF(SECOND, created_at, NOW()))'))->paginate(10);
        
        return $this->jsonData(true, '', [], $Reprsentatives);
    }
    public function prev($id) {
        $Reprsentative = Reprsentative::with("cheques")->find($id);
        
        return view('show_reprsentative')->with(compact('Reprsentative'));
    }

    public function search(Request $request) {
        $byNames = Reprsentative::orderBy(\DB::raw('ABS(TIMESTAMPDIFF(SECOND, created_at, NOW()))'))->where('name', 'like', '%' . $request->search_words . '%')->paginate(10);

        $byPhone = Reprsentative::orderBy(\DB::raw('ABS(TIMESTAMPDIFF(SECOND, created_at, NOW()))'))->where('phone', 'like', '%'.$request->search_words.'%')->paginate(10);

        $byEmails = Reprsentative::orderBy(\DB::raw('ABS(TIMESTAMPDIFF(SECOND, created_at, NOW()))'))->where('email', 'like', '%'.$request->search_words.'%')->paginate(10);
        
        return $this->jsonData(true, '', [], !$byNames->isEmpty() ? $byNames : (!$byPhone->isEmpty() ? $byPhone : $byEmails));

    }

    public function put(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => ['required'],
        ], [
            'name.required' => 'الاسم مطلوب',
        ]);

        if ($validator->fails()) {
            return $this->jsondata(false, 'Add failed', [$validator->errors()->first()], []);
        }

        $createRepre = Reprsentative::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'additional_notes' => $request->additional_notes,
        ]);

        if ($createRepre)
            return $this->jsonData(true, 'تم اضافة بيانات المندوب بنجاح', [], ["id" => $createRepre->id]);
    }


    public function edit($id) {
        $Reprsentative = Reprsentative::find($id);
        return view('edit_reprsentative')->with(compact('Reprsentative'));
    }

    public function update(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => ['required'],
        ], [
            'name.required' => 'الاسم مطلوب',
        ]);

        if ($validator->fails()) {
            return $this->jsondata(false, 'update failed', [$validator->errors()->first()], []);
        }

        $Reprsentative = Reprsentative::find($request->id); 
        $Reprsentative->name = $request->name;
        $Reprsentative->email = $request->email;
        $Reprsentative->phone = $request->phone;
        $Reprsentative->additional_notes = $request->additional_notes;
        $Reprsentative->created_at = $request->created_at;

        $Reprsentative->save();

        if ($Reprsentative)
            return $this->jsonData(true, 'تم تعديل بيانات المندوب بنجاح', [], []);
    }


    public function delete(Request $request) {
        $validator = Validator::make($request->all(), [
            'reprsentative_id' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->jsondata(false, 'delete failed', [$validator->errors()->first()], []);
        }

        $Reprsentative = Reprsentative::find($request->reprsentative_id);
        foreach ($Reprsentative->cheques() as $cheque) {
            $cheque->delete();
        }
        $Reprsentative->delete();

        if ($Reprsentative)
            return $this->jsonData(true, $request->file_name . 'تم حف الشيك بنجاح', [], []);
    }
}
