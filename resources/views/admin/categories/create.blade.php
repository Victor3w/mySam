@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Создание категории @endslot
            @slot('parent') Главная @endslot
            @slot('active') Категория @endslot
        @endcomponent

        <hr>

        <form action="{{ route('admin.category.store') }}"
              method="post" class="form-horizontal">
            {{ csrf_field() }}

            @include('admin.categories.partials.form')
        </form>

    </div>
@endsection