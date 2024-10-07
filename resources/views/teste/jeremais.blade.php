<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jeremias</title>
</head>
<body>
    <?php echo 'oi Jeremias'; ?>


        <?php foreach (range(1, 20) as $key): ?>
            <li><?= $key ?></li>
        <?php endforeach; ?>
    
        @foreach (range(1, 20) as $key)
            <li>{{ $key }}</li>
        @endforeach
    
</body>
</html>
