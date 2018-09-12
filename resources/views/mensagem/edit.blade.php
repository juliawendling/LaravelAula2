<h1>Formulário de Edição da Mensagem Código {{$mensagem->id}}</h1>
<hr>

<form action="/mensagens/{{$mensagem->id}}" method="POST">
	{{ csrf_field() }}
	{{ method_field('PUT') }}
	Título: 		<input type="text" name="title" value="{{$mensagem->title}}"> 	     <br>
	Descrição:		<input type="text" name="texto" value="{{$mensagem->texto}}">   <br>
	Autor:		<input type="text" name="autor" value="{{$mensagem->autor}}">   <br>
	<input type="submit" value="Salvar">
</form>

  <!-- EXIBE MENSAGENS DE ERROS -->
  @if ($errors->any())
	<div class="container">
	  <div class="alert alert-danger">
	    <ul>
	      @foreach ($errors->all() as $error)
	      <li>{{ $error }}</li>
	      @endforeach
	    </ul>
	  </div>
	</div>
  @endif

   <!--EXIBE MENSAGENS DE SUCESSO -->
  @if(\Session::has('success'))
  	<div class="container">
  		<div class="alert alert-success">
  			{{\Session::get('success')}}
  		</div>
  	</div>
  @endif
