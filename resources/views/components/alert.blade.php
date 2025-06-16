<div>
    @if (Session::has('danger'))
        <div class="alert alert-danger alert-dismissible fade show h-100 mb-1">
            {!! Session::get('danger') !!}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
    @if (Session::has('warning'))
        <div class="alert alert-warning alert-dismissible fade show h-100 mb-1">
            {!! Session::get('warning') !!}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
    @if (Session::has('info'))
        <div class="alert alert-info alert-dismissible fade show h-100 mb-1">
            {!! Session::get('info') !!}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show h-100 mb-1">
            {!! Session::get('success') !!}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @push('scripts')
        <script>
            setTimeout(function() {
                var alerts = document.querySelectorAll('.alert-dismissible');

                alerts.forEach(function(alert) {
                    var bsAlert = new bootstrap.Alert(alert);
                    bsAlert.close();
                });
            }, 5000);
        </script>
    @endpush
</div>
