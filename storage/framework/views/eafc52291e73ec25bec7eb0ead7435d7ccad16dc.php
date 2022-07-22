<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($data->title); ?></title>
</head>
<body>
    
    <div id="ldata" data-id="<?php echo e($data->id); ?>"></div>
    <div>
        <a href="<?php echo e(url('/boards')); ?>"><button type="button">홈</button></a>
        <a href=""><button type="button">수정</button></a>
        <button type="button" id="btnDel">삭제</button>
    </div>
    <div>제목 : <?php echo e($data->title); ?></div>
    <div>조회수 : <?php echo e($data->hits); ?></div>
    <div>등록일 : <?php echo e($data->created_at); ?></div>
    <div>수정일 : <?php echo e($data->updated_at); ?></div>
    <div>내용</div>
    <div><?php echo e($data->ctnt); ?></div>
    <script>
        const ldata = document.querySelector('#ldata');
        const btnDel = document.querySelector('#btnDel');
        if(btnDel) {
            btnDel.addEventListener('click', e => {
                if(!confirm('삭제하시겠습니까?')) { return; }
                location.href = `/boards/destroy?id=${ldata.dataset.id}`;
            });
        }
    </script>
</body>
</html><?php /**PATH D:\laravel\boardPjt\resources\views/board/show.blade.php ENDPATH**/ ?>