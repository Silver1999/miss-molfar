Имя: {{$data['firstname']}}<br>
Фамилия: {{$data['lastname']}}<br>
Дата рождения: {{$data['birth-date']}}<br>
Город: {{$data['city']}}<br>
Ссылка на истаграм: {{$data['ig-link']}}<br>
Телефон: {{$data['tel']}}<br>
Email: {{$data['email']}}<br>
Опыт в конкурсах красоты: {{$data['expirience']}}<br>

<img src="{{ $message->embed(storage_path($data['new_name1'])) }}"><br>
<img src="{{ $message->embed(storage_path($data['new_name2'])) }}"><br>