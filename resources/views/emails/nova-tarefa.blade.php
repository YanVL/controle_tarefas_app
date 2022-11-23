<x-mail::message>
# {{ $tarefa }}
Nova Tarefa cadastrada com sucesso.

Data Limite de Conclusão: {{ $data_limite_conclusao }}

<x-mail::button :url="'$url'">
Clique aqui para ver a tarefa
</x-mail::button>

Atenciosamente,<br>
{{ config('app.name') }}
</x-mail::message>
