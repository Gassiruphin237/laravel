@extends('layouts.app')

@section('title', 'Error')

@section('content')
<div class="container">
    <center>
        <img src="/img/404.svg" width="400" />
        <br><br>
        <p><h4>La page <strong><i> <?php echo request()->path(); ?></i> </strong> que vous demandée est introuvable !!!</h4></p><br>
        <button class="btn btn-primary">Retour en arriere</button>
    </center>
</div>
@endsection

@section('js')
<script>
    document.getElementById('btn').addEventListener('click', () => {
    history.back();
});
</script>
@endsection
