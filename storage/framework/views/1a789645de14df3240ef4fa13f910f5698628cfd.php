<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>board index</h1>
    <div>ddd</div>
    <div>
        <a href="<?=route('boards.create')?>">
            <button type="button">글쓰기</button> 
        </a>
        
        <a href="<?=route('boards.show', ['i_board' => 10])?>">
            <button type="button">디테일</button>
        </a>

        <div>
            <table>
                <tr>
                    <th>No.</th>
                    <th>제목</th>
                    <th>조회수</th>
                    <th>등록일</th>
                </tr>
                <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="row" data-id=<?php echo e($item->id); ?>>
                    <td><?php echo e($item->id); ?></td>   
                    <td><?php echo e($item->title); ?></td>
                    <td><?php echo e($item->hits); ?></td>
                    <td><?php echo e($item->created_at); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
            
    </div>
    <script>
        const rowList = document.querySelectorAll('.row');
        if(rowList) {
            rowList.forEach(item=>{
                item.addEventListener('click', e => {
                    location.href = `/boards/show?id=${item.dataset.id}`;
                });
            })
        }
    </script>
</body>
</html><?php /**PATH D:\laravel\boardPjt\resources\views/board/index.blade.php ENDPATH**/ ?>