<h1>Lista de Mensagem</h1>
<hr>

 <!-- EXIBE MENSAGENS DE SUCESSO -->
  @if(\Session::has('success'))
	<div class="container">
  		<div class="alert alert-success">
    		{{\Session::get('success')}}
  		</div>
  	</div>
  @endif

@foreach($mensagens as $mensagem)
	<p><a href="/mensagens/{{$mensagem->id}}">{{$mensagem->title}}</a></p>
	<p>{{$mensagem->description}}</p>
	<br>
@endforeach