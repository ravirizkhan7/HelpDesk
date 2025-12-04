@extends('auth.auth')

@section('content')
<script>
    Swal.fire({
        title: "Verifikasi Email Diperlukan",
        text: "Sebelum melanjutkan, silakan cek email kamu untuk tautan verifikasi. Jika belum menerima email, klik tombol Kirim Ulang.",
        icon: "info",
        showCancelButton: true,
        confirmButtonText: "Kirim Ulang Email",
        cancelButtonText: "Nanti Saja"
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('resend-form').submit();
        }
    });
</script>

<form id="resend-form" method="POST" action="{{ route('verification.send') }}" style="display:none;">
    @csrf
</form>
@endsection
