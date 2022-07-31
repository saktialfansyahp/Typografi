@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
            <form class="mb-3 mt-4">
                <div class="form-group">
                    <input type="search" name="search" placeholder="Cek Kata" aria-label="Search" style="width: 800px; height: 150px; background-color:#ebebeb" class="form-control rounded " id="exampleInputEmail1" aria-describedby="emailHelp">
                    {{-- <form action="/" method="GET" >
                        <input class="form-control form-control-sidebar" type="search" name="search" placeholder="Cek Kata" aria-label="Search">
                    </form> --}}
                </div>
                <p></p>
                <div class="col">
                    <button type="submit" style="background-color: width:100px" class="btn btn-danger rounded-pill">Submit
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 20">
                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                            <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
                          </svg>
                    </button>
                    <button style="margin-left: 490px; background-color: width:100px" type="submit" class="btn btn-danger rounded-pill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 20">
                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                        <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                      </svg> Copy
                    </button>
                    <button type="submit" style="background-color: width:100px" class="btn btn-danger rounded-pill">History</button>
                </div>
                <p></p>
                <div class="form-group">
                    @if($words != null)
                        @foreach($words as $row)
                            <textarea name="check"  style="width: 800px; height: 150px; background-color:#ebebeb" class="form-control" id="ceck">
                                {{ $row }}
                            </textarea>
                        @endforeach
                    @endif
                </div>
            </form>
        </div>
@endsection
