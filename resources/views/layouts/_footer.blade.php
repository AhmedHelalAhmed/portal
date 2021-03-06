@include('layouts._ads._footer')
@include('layouts._sponsors')

<div id="footer" class="container text-center">
    <hr>
    Copyright &copy; 2013 - {{ date('Y') }} Laravel.io &bull;
    <a href="{{ route('terms') }}">Terms</a> &bull;
    <a href="{{ route('privacy') }}">Privacy</a> &bull;
    <a href="https://github.com/laravelio"><i class="fa fa-github"></i></a>
    <a href="https://twitter.com/laravelio"><i class="fa fa-twitter"></i></a>
    <a href="https://medium.com/laravelio"><i class="fa fa-medium"></i></a>
</div>
