@php
    $pageName = 'mainBanner';
@endphp

@extends("admin.layout")

@section("content")

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Show Banner</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('mainBanner.index') }}"> Back</a>
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>title en:</strong>
                {{ $mainBanner[0]->title_en }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>description en</strong>
                {{ $mainBanner[0]->description_en }}
            </div>
        </div>
        <br>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>title fr:</strong>
                {{ $mainBanner[0]->title_fr }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>description fr</strong>
                {{ $mainBanner[0]->description_fr }}
            </div>
        </div>
        <br>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>title ar:</strong>
                {{ $mainBanner[0]->title_ar }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>description ar</strong>
                {{ $mainBanner[0]->description_ar }}
            </div>
        </div>
        

        {{-- 
            
            continue ....
            
            --}}
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <img src="{{asset('mainBanner')}}/{{$mainBanner[0]->photo}}" alt="" style="max-width: 90%;">
    </div>
</div>


@endsection