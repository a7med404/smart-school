
        @if(Session::has('flash_massage'))
          {{ $i = Session::get('flash_massage_type') }}
          @switch($i)
              @case(1)
              <script>
                  toastr.success("{{ Session::get('flash_massage') }}","Sccess")
              </script>
                  @break
              @case(2)
              <script>
                  toastr.info("{{ Session::get('flash_massage') }}","info")
              </script>
                  @break
              @case(3)
              <script>
                  toastr.warning("{{ Session::get('flash_massage') }}","warning")
              </script>
                  @break
              @default
              <script>
                  toastr.error("{{ Session::get('flash_massage') }}","error")
              </script>
          @endswitch
        @endif