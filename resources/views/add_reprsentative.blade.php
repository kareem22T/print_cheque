@extends('admin.layouts.admin-layout')
@section('title', 'Print Cheque | Add reprsentative')
@section('content')
<h1>
    اضافة مندوب
</h1>
<div  id="add_wrapper">
<form action="" class="w-100 mt-3" @submit.prevent>
    <div class="form-group w-100 mb-4">
        <label for="name" class="label mb-2">اسم المندوب *</label>
        <input type="text" name="name" id="name" class="form-control" v-model="name">
    </div>
    <h2 class="mb-2">بيانات اضافية</h2>
    <div class="form-group w-100 mb-3">
        <label for="phone" class="label mb-2">رقم هاتف المندوب</label>
        <input type="text" name="phone" id="phone" class="form-control" v-model="phone">
    </div>
    <div class="form-group w-100 mb-3">
        <label for="email" class="label mb-2">البريد الالكتروني المندوب</label>
        <input type="text" name="email" id="email" class="form-control"  v-model="email">
    </div>
    <div class="form-group w-100 mb-3">
        <label for="additional_notes" class="label mb-2">ملاحظات اضافية عن المندوب</label>
        <textarea type="text" name="additional_notes" id="additional_notes" class="form-control"  v-model="additional_notes">
        </textarea>
    </div>
    <button class="btn btn-primary w-25" @click="add()">اضافة المندوب</button>
</form>
</div>

@endsection

@section('scripts')
    <script>
        const { createApp, ref } = Vue

        createApp({
            data() {
                return {
                    name: null,
                    phone: null,
                    email: null,
                    additional_notes: null
                }
            },
            methods: {
                async add() {
                $('.loader').fadeIn().css('display', 'flex')
                    try {
                        const response = await axios.post(`{{ route('reprsentative.put') }}`, {
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
                                window.location.href = '/sys/add-cheque/' + response.data.data.id
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
        }).mount('#add_wrapper')
    </script>
@endsection