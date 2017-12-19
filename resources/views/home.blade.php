@extends('layouts.app')


@section('Style')

        table, th, td {
           border: 1px solid black;
        }

        .th{
         text-align: center;
         padding: 20px 80px;
        }

        .td{
         padding: 20px;
         background-color: #ffefef;
        color: black;
        }

@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="font-size: 25px;">Contacts</div>

                <div class="panel-body" style="padding: 20px;">
                    <table class="text-center">
                        <tr>
                            <th class="th">NAME</th>
                            <th class="th">EMAIL</th>
                            <th class="th">PHONE</th>
                            <th class="th">TEXT</th>                      
                        </tr>
                        @foreach($contacts as $contact) 
                            <tr>
                                <td class="td">{{ $contact->name }}</td>
                                <td class="td">{{ $contact->email }}</td>
                                <td class="td">{{ $contact->phone }}</td>
                                <td class="td">{{ $contact->text }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
