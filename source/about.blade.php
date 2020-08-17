@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="About {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="A little bit about {{ $page->siteName }}" />
@endpush

@section('body')
    <h1>Hey,</h1>

    <img src="/assets/img/web_developer.svg"
        alt="About image"
        class="flex rounded-full h-64 w-64 bg-contain mx-auto md:float-right my-6 md:ml-10">

    <p class="mb-6">I’m <strong>Tahmid</strong>, a full stack software developer, passionate about learning new things, building applications with PHP, Laravel, Vuejs.</p>
    
    <p>I have been writing code for almost {{ date('Y') - 2014 }} years. During that time I developed some enterprise level application for renowned companies in Bangladesh.</p>
    
    <p>I created this website to spread tech knowledge among others that I learned over the years.</p>

    <h3>Links</h3>
    <ul class="list-disc list-inside leading-9">
        <li>Github: <a href="https://github.com/tahmidrana">github.com/tahmidrana</a></li>
        <li>Linkedin: <a href="https://linkedin.com/in/tahmidr/">linkedin.com/in/tahmidr/</a></li>
        <li>Stackoverflow: <a href="https://stackoverflow.com/users/5212775/tahmidur-rahman">stackoverflow.com/users/5212775/tahmidur-rahman</a></li>
    </ul>

    <h3>Skills</h3>
    <ul class="list-disc list-inside leading-9">
        <li>Backend Framework: Laravel, Codeigniter, Django, Express JS</li>
        <li>Languages: Php, Python, Javascript</li>
        <li>Frontend: Vue JS, jQuery, Stylus</li>
        <li>Database: MySql, MongoDB</li>
        <li>Caching: Memcached, Redis</li>
        <li>Web server: LAMP on Ubuntu</li>
        <li>Version Control: Git, Github</li>
        <li>Web Service: REST</li>
        <li>Management Tool: Jira</li>
        <li>Containerization: Docker</li>
    </ul>
@endsection
