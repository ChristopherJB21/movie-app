<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/js/bootstrap-notify.js"></script>
<link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/css/bootstrap-notify.css">

<div class='notifications bottom-right'></div>
<h1>{{ Session::get('success') }}</h1>

<script>
    @if (Session::has('success'))
        $('.bottom-right').notify({
            message: {
                text: "{{ Session::get('success') }}"
            }
        }).show();
        @php
            Session::forget('success');
        @endphp
    @endif


    @if (Session::has('info'))
        $('.bottom-right').notify({
            message: {
                text: "{{ Session::get('info') }}"
            },
            type: 'info'
        }).show();
        @php
            Session::forget('info');
        @endphp
    @endif


    @if (Session::has('warning'))
        $('.bottom-right').notify({
            message: {
                text: "{{ Session::get('warning') }}"
            },
            type: 'warning'
        }).show();
        @php
            Session::forget('warning');
        @endphp
    @endif


    @if (Session::has('error'))
        $('.bottom-right').notify({
            message: {
                text: "{{ Session::get('error') }}"
            },
            type: 'danger'
        }).show();
        @php
            Session::forget('error');
        @endphp
    @endif
</script>
