 <td>
    <div class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
        <span class="fa fa-ellipsis-h"></span>
        </a>
        <ul class="dropdown-menu">
        {{--  <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route($routeName. '.show',  ['id' => $id]) }}">استعراض</a></li>  --}}
        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route($routeName. '.edit',  ['id' => $id]) }}">تعديل</a></li>
        {{--  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">طباعة</a></li>  --}}
        <li role="presentation" class="divider"></li>
         <li role="presentation"><a role="menuitem" tabindex="-1" class="confirm" href="{{ route($routeName. '.delete',['id' => $id]) }}">حذف</a></li>
        </ul>
    </div>
</td>


