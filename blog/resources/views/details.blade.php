@extends('user-view')
@section('details')
<div class="card">
  <div class="card-header">
    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
        <i class="fas fa-minus"></i></button>
      <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
        <i class="fas fa-times"></i></button>
    </div>
  </div>
  <div class="card-body p-0">
    <table class="table table-bordered table-striped" id="example2">
        <thead>
            <tr>
                <th style="width: 10%">
                    Employee ID
                </th>
                <th style="width: 10%">
                    Role
                </th>
                <th style="width: 10%">
                    Region
                </th>
                <th style="width: 10%">
                </th>
            </tr>
        </thead>
            <tr>
            <td>
                {{ $members->Orglevel1 }}
            </td>
            <td>
               {{ $members->Role }}
            </td>
            <td>
               {{ $members->Region }}
            </td>
            <td>
    <a href="#modal-lg5" data-toggle="modal" data-target="#modal-lg5" class="btn btn-warning btn-sm">
            Feedback
        </a>
       </td>
   </tr>
  </table>   
 </div>

</div>
@endsection