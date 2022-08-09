
@extends('layouts.front_end.main_layout')

@section('content')

<!-- 6th Home Design Hero Section
================================================== -->
@include('theme.home.sections.hero_section')

<!-- Content Feartured Properties Section
================================================== -->
@include('theme.home.sections.featured_properties')

<!-- Content latest_properties Section
================================================== -->
 @include('theme.home.sections.latest_properties')
 

<!-- Properties by cites Section-->
@include('theme.home.sections.properties_cities')
<!-- Container / End -->

<!-- Our Agents Section -->
@include('theme.home.sections.agents')
<!-- Our Agents Section / End -->


<!-- Articles & Tips Fullwidth Section -->
@include('theme.home.sections.article_tips')
<!-- FArticles & Tips / End -->

<!-- Our Partners Section -->
@include('theme.home.sections.partners')
<!-- Fullwidth Section / End -->


@endsection


