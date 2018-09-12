<h1>Mensagem {{$msg->id}}</h1>
<hr>
<h3><b>ID:</b>{{$msg->id}}</h3>
<h3><b>Título:</b>{{$msg->title}}</h3>
<h3><b>Descrição:</b>{{$msg->texto}}</h3>
<h3><b>Autor:</b>{{$msg->autor}}</h3>
<h3><b>Criada em:</b>{{\Carbon\Carbon::parse($msg->created_at)->format('d/m/Y h:m')}}</h3>
<h3><b>Atualizada em:</b>{{\Carbon\Carbon::parse($msg->updated_at)->format('d/m/Y h:m')}}</h3>

