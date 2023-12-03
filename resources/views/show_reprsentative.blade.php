@extends('admin.layouts.admin-layout')

@section('title', $Reprsentative->name . ' History')

@section('content')
<h2 class="mb-5">
    عرض سجل وبيانات {{ $Reprsentative->name }}
</h2>
<div class="d-flex gap-2">
    @if($Reprsentative->name)
    <div class="form-group mb-3 w-50">
        <label for="CIB_date_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">الاسم</label>
        <input type="text" disabled name="CIB_date_cheque" id="CIB_date_cheque" class="form-control" value="{{ $Reprsentative->name }}">
    </div>
    @endif
    @if($Reprsentative->phone)
    <div class="form-group mb-3 w-50">
        <label for="CIB_date_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">الهاتف</label>
        <input type="text" disabled name="CIB_date_cheque" id="CIB_date_cheque" class="form-control" value="{{ $Reprsentative->phone }}">
    </div>
    @endif
</div>
@if($Reprsentative->email)
<div class="form-group mb-3 w-100">
    <label for="CIB_date_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">البريد الالكتروني</label>
    <input type="text" disabled name="CIB_date_cheque" id="CIB_date_cheque" class="form-control text-center" value="{{ $Reprsentative->email }}">
</div>
@endif
@if($Reprsentative->additional_notes)
<div class="form-group mb-3 w-100">
    <label for="CIB_date_cheque" class="label mb-2" style="font-weight: 600; font-size: 18px">ملاحظات عن المندوب</label>
    <textarea disabled name="CIB_date_cheque" id="CIB_date_cheque" class="form-control" value="{{ $Reprsentative->additional_notes }}">
    </textarea>
</div>
@endif
<br>
<div class="card w-100" id="word_prev">
    <div class="card-header d-flex justify-content-between gap-3">
        <h4>كل الشيكات المضافة ل{{ $Reprsentative->name }}</h4>
        <a href="add-cheque/{{ $Reprsentative->id }}" class="btn btn-primary w-fit d-flex gap-2 align-items-center">
            <i class="ti ti-plus"></i> تحرير شيك ل{{ $Reprsentative->name }}
        </a>
    </div>
    <div class="card-body p-4">
    @if ($Reprsentative->cheques->count() > 0)
    <div class="table-responsive">
        <table class="table text-nowrap mb-0 align-middle">
        <thead class="text-dark fs-4">
            <tr>
                <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0 d-inline-flex align-items-center">Id</h6>
                </th>
                <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0 d-inline-flex align-items-center">تاريخ الشيك</h6>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Reprsentative->cheques  as $cheque)
            <tr>
                <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{$cheque->id}}</h6></td>
                <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{$cheque->created_at}}</h6></td>
                <td class="border-bottom-0">
                    <div class="d-flex gap-2">
                        <a href="/Cheque/{{$cheque->id}}" target="_blanck" class="btn btn-success p-2 d-flex gap-2" style="margin: auto"><h4 class="ti ti-eye text-light m-0 fw-semibold"></h4> عرض الشيك</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    @else
        <h1 class="text-center">لا توجد شيكات مضافة للمندوب</h1>
    @endif

</div>
@endsection
@section('scripts')
    <script>
        $('.loader').fadeOut()
    </script>
@endsection