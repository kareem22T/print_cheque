@extends('admin.layouts.admin-layout')
@section('title', 'Print Check | Edit reprsentative')
@section('content')
@if($Reprsentative)
<h1>
    تعديل المندوب
</h1>
<div  id="edit_wrapper">
    <form action="" class="w-100 mt-3" @submit.prevent>
        <div class="form-group w-100 mb-4">
            <label for="name" class="label mb-2">اسم المندوب *</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="اسم المندوب *" v-model="name">
        </div>
        <h2 class="mb-2">بيانات اضافية</h2>
        <div class="form-group w-100 mb-3">
            <label for="phone" class="label mb-2">رقم هاتف المندوب</label>
            <input type="text" name="phone" id="phone" class="form-control" placeholder="رقم هاتف المندوب" v-model="phone">
        </div>
        <div class="form-group w-100 mb-3">
            <label for="email" class="label mb-2">البريد الالكتروني المندوب</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="البريد الالكتروني المندوب" v-model="email">
        </div>
        <div class="form-group w-100 mb-3">
            <label for="additional_notes" class="label mb-2">ملاحظات اضافية عن المندوب</label>
            <textarea type="text" name="additional_notes" id="additional_notes" class="form-control" placeholder="ملاحظات اضافية عن المندوب" v-model="additional_notes">
            </textarea>
        </div>
        <button class="btn btn-primary w-25" @click="update()">اضافة المندوب</button>
    </form>
</div>
@endsection

@section('scripts')
    <script>
        const { createApp, ref } = Vue

        createApp({
            data() {
                return {
                    id: "{{$Reprsentative->id}}",
                    name: "{{$Reprsentative->name}}",
                    phone: "{{$Reprsentative->phone}}",
                    email: "{{$Reprsentative->email}}",
                    additional_notes: "{{$Reprsentative->additional_notes}}"
                }
            },
            methods: {
            async update() {
                $('.loader').fadeIn().css('display', 'flex')
                    try {
                        const response = await axios.post(`{{ route('reprsentative.update') }}`, {
                            id: this.id,
                            name: this.name,
                            phone: this.phone,
                            email: this.email,
                            additional_notes: this.additional_notes,
                        });
                        if (response.data.status === true) {
                            document.getElementById('errors').innerHTML = ''
                            let error = document.createElement('div')
                            error.classList = 'success'
                            error.innerHTML = response.data.message
                            document.getElementById('errors').append(error)
                            $('#errors').fadeIn('slow')
                            $('.loader').fadeOut()
                            setTimeout(() => {
                                $('#errors').fadeOut('slow')
                                window.location.href = '{{route("reprsentative.prev")}}'
                            }, 2000);
                        } else {
                        $('.loader').fadeOut()
                        document.getElementById('errors').innerHTML = ''
                        $.each(response.data.errors, function (key, value) {
                            let error = document.createElement('div')
                            error.classList = 'error'
                            error.innerHTML = value
                            document.getElementById('errors').append(error)
                        });
                        $('#errors').fadeIn('slow')
                        setTimeout(() => {
                            $('input').css('outline', 'none')
                            $('#errors').fadeOut('slow')
                        }, 5000);
                        }

                    } catch (error) {
                        document.getElementById('errors').innerHTML = ''
                        let err = document.createElement('div')
                        err.classList = 'error'
                        err.innerHTML = 'server error try again later'
                        document.getElementById('errors').append(err)
                        $('#errors').fadeIn('slow')
                        $('.loader').fadeOut()

                        setTimeout(() => {
                        $('#errors').fadeOut('slow')
                        }, 3500);

                        console.error(error);
                    }
                },
            },
            created() {
                $('.loader').fadeOut()
            },
        }).mount('#edit_wrapper')
    </script>
@endsection
@else
@section('content')
    
<div  id="edit_wrapper">
    <h1 class="text-center">404 | Not Found</h1>
</div>
@endsection
@endif
