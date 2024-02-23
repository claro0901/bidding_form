@extends('layouts.app')

@section('title')
    Details
@endsection

@section('content')
    <div class="card text-center mt-5">
        <div class="card-header">
            <b>Bidding Forms</b>
        </div>

        <div class="row mt-3">
            <div class="col-12 align-self-center">
                <ul class="list-group">
                    @foreach ($bidding_forms as $form)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a class="flex-grow-1" href="details/{{ $form->id }}"
                                style="color: cornflowerblue">{{ $form->solicitation_no }}</a>

                            <div class="card-body">
                                <a href="details/{{ $form->id }}"><span class="btn btn-success">View</span></a>
                                <a href="edit/{{ $form->id }}"><span class="btn btn-primary">Edit</span></a>
                                <a href="delete/{{ $form->id }}"><span class="btn btn-danger">Delete</span></a>
                            </div>
                        </li>
                    @endforeach


                </ul>
            </div>
        </div>
    </div>
@endsection
