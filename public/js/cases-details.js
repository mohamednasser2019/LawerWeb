$(document).ready(function () {
    var caseId;
    var session_id;

    $('#searchContainer').hide();
    $('#search').on('input', function (e) {
        $('#cases tbody').empty();
        var data = $(this).val();
        if (data != '') {
            $('#searchContainer').show();
        } else {
            $('#searchContainer').hide();
        }
        $.ajax({
            url: "caseDetails/getSearchResult/" + data,
            dataType: 'json',
            type: 'get',
            success: function (data) {
                $.each(data.result, function (i, index) {
                    $('#cases tbody').append(`<tr>
                                    <td class="hidden-xs center">
                                        <div class="visible-md visible-lg hidden-sm hidden-xs">
                                            <a  class="btn btn-light-blue tooltips" data-placement="top" id="showCaseData"
data-case-id="${index.id}"
                                               data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                        </div>
                                        <div class="visible-xs visible-sm hidden-md hidden-lg">
                                            <div class="btn-group">
                                                <a class="btn btn-green dropdown-toggle btn-sm"
                                                   data-toggle="dropdown" href="#" >
                                                    <i class="fa fa-cog"></i> <span class="caret"></span>
                                                </a>
                                                <ul role="menu" class="dropdown-menu dropdown-dark pull-right">
                                                    <li role="presentation">
                                                        <a role="menuitem" tabindex="-1" href="#">
                                                            <i class="fa fa-edit"></i> Edit
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="hidden-xs center">${index.court}</td>
                                    <td class="hidden-xs center">${index.invetation_num}</td>
                                    <td class="hidden-xs center">${index.khesm_name}</td>
                                    <td class="hidden-xs center">${index.mokel_name}</td>
                                    <td class="hidden-xs center">${index.id}</td>
                                </tr>`);
                    if (data.status) {
                        $('#searchContainer').show();
                    } else {

                    }
                });
            }

        });
    });
    $(document).on('click', '#showCaseData', function () {
        caseId = $(this).data('case-id');
        $.ajax({
            url: "/caseDetails/" + caseId + "/edit",
            dataType: "json",
            success: function (html) {
                //for case data
                $('#to_whome').html(html.result.case.to_whome);
                $('#invetation_num').html(html.result.case.invetation_num);
                $('#inventation_type').html(html.result.case.inventation_type);
                $('#court').html(html.result.case.court);
                $('#circle_num').html(html.result.case.circle_num);
                $('#first_session_date').html(html.result.case.first_session_date);
                //for counting
                $('#attach_count').html(html.result.attachments_counts);
                $('#notes_count').html(html.result.sessions_notes_counts);
                $('#sessions_count').html(html.result.sessions_counts);
                //for sessions tabel
                $('#sessions_table tbody').prepend(html.result.sessions);
                $('#sessions_table').DataTable();

            }
        })
    });

    //start sessions operations
    //show modal form for adding sessions
    $('#addSessionModal').click(function () {
        $('.modal-title').text("إضافة جلسة جديدة");
        $('#add_session').val("إضافة");
        $('#add_session_model').modal('show');
    });

    $(document).on('click', '#editSession', function () {
        var id = $(this).data('session-id');
        $.ajax({
            url: "caseDetails/showSessionData/" + id,
            dataType: "json",
            success: function (html) {
                $('#session_date').val(html.data.session_date);
                $('#id').val(html.data.id);
                $('.modal-title').text("تعديل تاريخ الجلسة");
                $('#add_session').val("تعديل");
                $('#add_session_model').modal('show');

            }
        })
    });

    //adding /editnew session
    $('#add_session').click(function () {
        var form = $('#sessionForm').serialize() + "&case_Id=" + caseId;
        if ($('#add_session').val() == 'إضافة') {
            $.ajax({
                url: "{{route('caseDetails.store')}}",
                dataType: 'json',
                data: form,
                type: 'post',
                success: function (data) {
                    // if (data.status == true) {
                    // $('#sessions-table tbody').append(data.result);
                    $('#sessions_table').prepend(data.result);

                    $('#add_session_model').modal('hide');
                    toastr.success(data.msg);
                    $("#sessionForm").trigger('reset');
                }, error: function (data_error, exception) {
                    if (exception == 'error') {
                        $('#session_date_error').html(data_error.responseJSON.errors.session_date);
                    }
                }
            });
        } else {
            $.ajax({
                url: "{{ route('caseDetails.update') }}",
                dataType: 'json',
                data: form,
                type: 'post',
                success: function (data) {
                    $("#session_date" + data.result.id).html(data.result.session_date);
                    toastr.success(data.msg);
                    $('#add_session_model').modal('hide');
                }, error: function (data_error, exception) {
                    if (exception == 'error') {
                        $('#session_date_error').html(data_error.responseJSON.errors.session_date);
                    }
                }
            });
        }
    });
    //update session status
    $(document).on('click', '#change-session-status', function () {
        var id = $(this).data('session-id');
        $.ajax({
            url: "caseDetails/updateStatus/" + id,
            dataType: "json",
            success: function (html) {
                $("#status" + html.result.id).html(html.result.status);

                // var status = html.status;
                if (html.status) {
                    $("#status" + html.result.id).removeClass("label label-danger");
                    $("#status" + html.result.id).addClass("label label-success");
                    toastr.success(html.msg);
                } else {
                    $("#status" + html.result.id).removeClass("label label-success");
                    $("#status" + html.result.id).addClass("label label-danger");
                    toastr.error(html.msg);
                }
            }
        })
    });
    $(document).on('click', '#deleteSession', function () {
        session_id = $(this).data('session-id');
        $('#confirmModal').modal('show');
    });
    $('#ok_button').click(function () {
        $.ajax({
            url: "caseDetails/destroy/" + session_id,
            beforeSend: function () {
                $('#ok_button').text('جارى الحذف ....');
            },
            success: function (data) {
                setTimeout(function () {
                    $('#confirmModal').modal('hide');
                    $('#userRow' + session_id).remove();
                    $('#ok_button').text('حذف');
                }, 1000);
            }
        })
    });
    //end sessions

    //start for session notes
    //get notes for one session
    $(document).on('click', '#showSessionNotes', function () {
        var id = $(this).data('session-id');
        $.ajax({
            url: "caseDetails/getSessionNotes/" + id,
            dataType: "json",
            success: function (html) {
                console.log(html);
            }
        })
    });


});
$(document).ready(function () {
    $(".modal").on("hidden.bs.modal", function () {
        $("#sessionForm").trigger('reset');
    });
});
