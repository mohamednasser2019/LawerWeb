<tr class="text-dark" id="userRow{{$notes->id}}">
    <td class="hidden-xs center">
        <div class="visible-md visible-lg hidden-sm hidden-xs">
            <a href="#" class="btn btn-light-blue tooltips" data-placement="top" id="editSession"
               data-notes-id="{{$notes->id}}"
               data-original-title="Edit"><i class="fa fa-edit"></i></a>
            <a  class="btn btn-red tooltips" data-placement="top" id="deleteSession"
               data-notes-id="{{$notes->id}}"
               data-original-title="Remove"><i
                    class="fa fa-times fa fa-white"></i></a>

        </div>
        <div class="visible-xs visible-sm hidden-md hidden-lg">
            <div class="btn-group">
                <a class="btn btn-green dropdown-toggle btn-sm"
                   data-toggle="dropdown" href="#">
                    <i class="fa fa-cog"></i> <span class="caret"></span>
                </a>
                <ul role="menu" class="dropdown-menu dropdown-dark pull-right">
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="#">
                            <i class="fa fa-edit"></i> Edit
                        </a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="#">
                            <i class="fa fa-times"></i> Remove
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </td>
    @if ($notes->status == "waiting")
        <td class="hidden-xs center">
            <p class="btn btn-lg" data-notes-id="{{$notes->id}}" id="change-note-status">
                <span class="label label-danger" id="status{{$notes->id}}"> {{$notes->status}}</span>

            </p>
        </td>
    @else
        <td class="hidden-xs center">
            <p class="btn btn-lg" data-notes-id="{{$notes->id}}" id="change-note-status">
                <span class="label label-success" id="status{{$notes->id}}"> {{$notes->status}}</span>

            </p>
        </td>
    @endif
    <td class="hidden-xs center" id="session_date{{$notes->id}}">{{$notes->session_date}}</td>
    <td class="hidden-xs center" id="id{{$notes->id}}">{{$notes->id}}</td>
</tr>
