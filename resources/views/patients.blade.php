@extends('layouts.app')
@section('title', 'OCU-SENSE')
@section('css')

@endsection
@section('contant')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Today's data</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        ID</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        PATIENT NAME</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        AGE</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        PHONE</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Diabetes</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                       BLOOD Pressure</th>
                                    <th class="text-secondary opacity-7">
                                        
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($id = 0)
                                @foreach ($patients as $pat)
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            {{ ++$id }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                           
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{ $pat -> name }}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $pat -> age }}</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-secondary">{{ $pat -> phone }}</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">{{ $pat -> diabetes }}</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">    
                                            @if ($pat -> pressure == 1)
                                                HIGHT
                                            @elseif ($pat -> pressure == 2)
                                                NORMAL
                                            @elseif ($pat -> pressure == 3)
                                                LOW
                                            @endif
                                        </span>
                                    </td>
                                    <td class="align-middle">
                                        <a href="{{ route('show.pat', $pat -> id ) }}" class="btn btn-primary">
                                            SHOW
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection