<div class="content" style="min-height: 0; padding-top: 0; padding-bottom: 0; position: relative;">
    <div class="system-alerts">
        @if(isset($errors) and count($errors) > 0)
            @if(is_string($errors))
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    {{ $errors }}
                </div>
            @else
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <strong>Erro!</strong> {{ $error }}
                    </div>
                @endforeach
            @endif
        @endif

        @if(session('error'))
            <script>
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                });

                Toast.fire({
                    icon: 'error',
                    title: `{{ session('error') }}`
                });
            </script>
        @endif

        @if(session('success'))
            <script>
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                });

                Toast.fire({
                    icon: 'success',
                    title: `{{ session('success') }}`
                });
            </script>
        @endif

        @if(session('info'))
            <script>
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                });

                Toast.fire({
                    icon: 'info',
                    title: `{{ session('info') }}`
                });
            </script>
        @endif

        @if(session('warning'))
            <script>
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                });

                Toast.fire({
                    icon: 'warning',
                    title: `{{ session('warning') }}`
                });
            </script>
        @endif
    </div>
</div>
