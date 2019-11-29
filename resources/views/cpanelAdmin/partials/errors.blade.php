@if($errors->any())
    <script>
        toastr.options = {
            "hideDuration": "5000",
        }
      </script>
    @foreach($errors->all() as $error)
        <script>
            toastr.error("{{ $error }}","Error")
        </script>
    @endforeach

@endif