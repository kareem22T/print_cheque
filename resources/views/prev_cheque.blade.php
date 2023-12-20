@if($Cheque)
@extends('admin.layouts.admin-layout')
@section('title', 'Cheque for | ' . $Cheque->reprsentative->name)
@section('content')
<div id="cheque_wrapper">
    <h1 class="text-center mb-4 mt-5">
        شيك يصرف بواسطة {{$Cheque->reprsentative->name}}
    </h1>
    <div class="cheque_wrapper" id="cheque" style="width: fit-content;margin: 2rem 0;border: 1px solid #dcdcdc; padding: 1rem; border-radius: 1rem;margin:auto">
        {!! $Cheque->cheque !!}
    </div>
    <div class="btns d-flex gap-3 justify-content-center align-items-center mt-3">
        <button class="btn btn-lg btn-primary" onclick="printChecque()">طباعة الشيك</button>
        <button class="btn btn-lg btn-danger" onclick="togglePop()">حذف الشيك</button>
    </div>
    <div class="hide-content" style="display: none;"></div>
    <div class="pop-up delete_pop_up card w-50" style="margin: auto; display: none;">
        <div class="card-body">
            <h5 class="mb-3 text-center">هل انت متاكد من حذف  هذا الشيك؟</h5>
            <div class="btns d-flex w-100 justify-content-between gap-3">
                <button class="btn btn-danger w-100" onclick="deleteCheque()">حذف</button>
                <button class="btn btn-light w-100" onclick="togglePop()">الغاء</button>
            </div>
        </div>
    </div>
    @if ($Cheque->notes)
    <div class="notes">
        <h3 style="text-align: center;margin-top: 2rem;">ملحوظات</h3>
        <p style="text-align: center">{{ $Cheque->notes }}</p>
    </div>
    @endif
</div>
@endsection

@section('scripts')
<script>
    $('.loader').fadeOut()
    function printChecque() {
        
        // Set the innerHTML of the temporary div to your content
        
        // Find all img elements that are children of the parent element
        var originalContent = document.body.innerHTML;
        $('#cheque img').css("opacity", 0)
        var content = document.getElementById('cheque').innerHTML;
        setTimeout(() => {            
    
            document.body.innerHTML = content;
    
            window.print();
    
            document.body.innerHTML = originalContent;
            // $('#cheque img').css("opacity", 1);
        }, 500);
    }
    async function deleteCheque() {
        $('.loader').fadeIn().css('display', 'flex')
        try {
            const response = await axios.post(`{{ route('cheque.delete') }}`, {
                cheque_id: "{{$Cheque->id}}",
            },
            );
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
                    window.location.href = '/sys'
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
location.reload();
            document.getElementById('errors').append(err)
            $('#errors').fadeIn('slow')
            $('.loader').fadeOut()

            setTimeout(() => {
                $('#errors').fadeOut('slow')
            }, 3500);

            console.error(error);
        }
    }

    function togglePop() {
        $('.delete_pop_up, .hide-content').fadeToggle()
    }

</script>
@endsection
@else
@section('content')
    <h1 class="text-center">404 | Not Found</h1>
@endsection
@endif