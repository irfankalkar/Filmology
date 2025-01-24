
@extends("layouts.draft")



{{-- ----------------------------------------------------------------------------- --}}
{{-- GUIDE COMMENTS, SLIDER NEW MOVIES and SLIDER MOST RATED --}}
{{-- ----------------------------------------------------------------------------- --}}

@section('content_3')


    <div class="col-md-12 each_section">
        <div class="row p-0 p-md-2">

            <div class="col-md-12 each_section_design">

                <div class="row">



                    <div class="col-md-12 p-2">
            
                        <div class="container each_content bg-dark py-2 px-2 py-md-3 px-md-3" style="--br_size:2px;">
                            <div class="row">
                                {{-- ---- --}}
                                    @include("layouts.sections.coming_soon_about")
                                {{-- ---- --}}
                            </div>
                        </div>

                    </div>



            
                </div>
            
            </div>

        </div>
    </div>

@endsection