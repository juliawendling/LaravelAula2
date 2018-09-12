<h1>Atividades {{$atividade->id}}</h1>
<hr>
<h3><b>ID:</b>{{$atividade->id}}</h3>
<h3><b>Título:</b>{{$atividade->title}}</h3>
<h3><b>Agenda:</b>{{$atividade->scheduledto}}</h3>
<h3><b>Descrição:</b>{{$atividade->description}}</h3>
<h3><b>Criada em:</b>{{\Carbon\Carbon::parse($atividade->created_at)->format('d/m/Y h:m')}}</h3>
<h3><b>Atualizada em:</b>{{\Carbon\Carbon::parse($atividade->updated_at)->format('d/m/Y h:m')}}</h3>

