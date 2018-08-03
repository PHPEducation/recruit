@extends('frontend.layouts.master')
@section('title-page')
    {{ $title }}
@endsection
@section('content')
    <section class="wow bounceInUp" id="hero"
             @if($page->banner_background !=null) style="background-image: url('{{ $page->banner_background }}');" @endif>
        <div class="container">
            <div id="no-cv" class="wow bounceInLeft"
                 style="background-image: url('{{ $page->left_banner_background }}');">
                <h2>{!! $page->left_banner_title !!}</h2>
                <p class="hidden-xs">{!! $page->left_banner_content !!}</p>
                <a href="{{  ($page->left_banner_button_link) }}" class="btn-cta"><i
                            class="fa {{ $page->left_banner_button_icon }}" aria-hidden="true"></i>
                    <span>{{ $page->left_banner_button_title }}</span></a>
            </div>
            <div id="have-cv" class="wow bounceInRight"
                 @if($page->right_banner_background !=null) style="background-image: url('{{ $page->right_banner_background }}');" @endif>
                <h2>{!! $page->right_banner_title !!}</h2>
                <p class="hidden-xs">{!! $page->right_banner_content !!}</p>
                <a href="{{ $page->right_banner_button_link }}" class="btn-cta"><i
                            class="fa {{ $page->right_banner_button_icon }}" aria-hidden="true"></i>
                    <span>{{ $page->right_banner_button_title }}</span></a>
            </div>
        </div>
    </section>
    <section id="how">
        <div class="container">
            <h3 class="section-title wow bounceInUp">{{ $page->section_infography_title }}</h3>
            <div class="row">
                @if($page->section_inforgraphy_content != null)
                    @foreach(json_decode($page->section_inforgraphy_content) as $step)
                        <div class="col-md-4 step wow bounceInUp">
                            <a href="{{ $step->link }}" target="_blank">
                                <img src="{{ $step->thumbnail }}" alt="">
                                <h4>{{ $step->title }}</h4>
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <section id="why">
        <div class="container">
            <h3 class="section-title wow bounceIn">{{ $page->section_reason_title }}</h3>
            <div class="row">
                @if($page->section_reason_content != null)
                    @foreach(json_decode($page->section_reason_content) as $why)
                        <div class="col-md-6 item wow bounceIn">
                            <img src="{{ $why->thumbnail }}">
                            <h5>{{ $why->title }}</h5>
                            <p>{{ $why->description }}</p>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <section id="feedback">
        <div class="container">
            <h3 class="section-title wow bounceIn">{{ $page->section_member_title }}</h3>
            <div class="row" id="slider">
                @if($page->section_member_content != null)
                    @foreach(json_decode($page->section_member_content) as $member)
                        <div class="col-md-4 wow bounceIn">
                            <div class="item">
                                <img src="{{ $member->avatar }}">
                                <h5 class="name">{{ $member->name }}</h5>
                                <span class="title">{{ $member->position }}</span>
                                <div class="clearfix"></div>
                                <p>{{ $member->comment }}</p>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
@endsection
