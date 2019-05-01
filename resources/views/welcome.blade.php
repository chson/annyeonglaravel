@extends('layouts.master')

@section('style')
<style>
    body {
        background-color: #0f0f0f;
        color: #ffffff;
    }
</style>
@endsection

@section('content')
    <p id="content">저는 자식 뷰의 'content' 섹션입니다. 난 깜빡일거에요 왜냐하면 그러고 싶으니께</p>

    @include('partials.footer')
@endsection

@section('script')
<script>
    var f = document.getElementById("content");
    window.addEventListener("load", function() {
        setInterval(function() {
            f.style.display = (f.style.display == 'none' ? '' : 'none');
        }, 1000);
    }, false);
</script>
@endsection
