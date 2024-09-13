@extends('layouts.atte')

<style>
    th {
        background-color: #289ADC;
        color: white;
        padding: 5px 40px;
    }
    tr:nth-child(odd) td{
        background-color: #FFFFFF;
    }
    td {
        padding: 25px 40px;
        background-color: #EEEEEE;
        text-align: center;
    }
</style>

@section('content')
<table>
    <tr>
        <th>名前</th>
        <th>勤務開始</th>
        <th>勤務終了</th>
        <th>休憩時間</th>
        <th>勤務時間</th>
    </tr>
    @foreach ($attendances as $attendance)
    <tr>
        <th>{{$attendance->name}}</th>
        <th>{{$attendance->date}}</th>
        <th>{{$attendance->work_start}}</th>
        <th>{{$attendance->work_end}}</th>
        <th>{{$attendance->break_start}}</th>
        <th>{{$attendance->break_end}}</th>
    </tr>
    @endforeach
</table>
@endsection