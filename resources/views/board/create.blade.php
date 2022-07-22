<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($data) ? '글수정' : '글쓰기' }}</title>
</head>
<body>
    <h1>{{ isset($data) ? '글수정' : '글쓰기' }}</h1>
    <form action="{{ isset($data) ? route('boards.update') : route('boards.store') }}" method="post">
        <input type="hidden" name="id" value="{{ isset($data) ? $data->id : 0 }}">
        <div><label>제목 : <input type="text" name="title" value="{{ isset($data) ? $data->title : ''}}"></label></div>
        <div><label>내용 : <textarea name="ctnt">{{ isset($data) ? $data->ctnt : ''}}</textarea></label></div>        
        <input type="submit" value="{{ isset($data) ? '수정' : '저장' }}">
        @csrf
        <!-- csrf란? 보안 / 서로만 알 수 있는 정보 실어 보내서 맞다는 것을 검증하는 방법! 106p -->
    </form>
</body>
</html>