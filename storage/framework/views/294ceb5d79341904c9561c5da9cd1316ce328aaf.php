<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글쓰기</title>
</head>
<body>
    <h1>board create</h1>
    <form action="<?=route('boards.store')?>" method="post">
        <div><label>제목 : <input type="text" name="title"></label></div>
        <div><label>내용 : <textarea name="ctnt"></textarea></label></div>
        <input type="submit" value="저장">
        <?php echo csrf_field(); ?>
        <!-- csrf란? 보안 / 서로만 알 수 있는 정보 실어 보내서 맞다는 것을 검증하는 방법! 106p -->
    </form>
</body>
</html><?php /**PATH D:\laravel\boardPjt\resources\views/board/create.blade.php ENDPATH**/ ?>